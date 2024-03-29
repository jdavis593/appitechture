<?php
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014  Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: http://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 ************************************************************************/ 

namespace Espo\Hooks\Note;

use Espo\ORM\Entity;

class Notifications extends \Espo\Core\Hooks\Base
{
	protected $notificationService = null;
	
	protected function init()
	{
		$this->dependencies[] = 'serviceFactory';
	}
	
	protected function getServiceFactory()
	{
		return $this->getInjection('serviceFactory');
	}
	
	public function afterSave(Entity $entity)
	{
		if (!$entity->isFetched()) {

			$parentType = $entity->get('parentType');
			$parentId = $entity->get('parentId');			
		
			if ($parentType && $parentId) {
				$pdo = $this->getEntityManager()->getPDO();
				$sql = "
					SELECT user_id AS userId 
					FROM subscription
					WHERE entity_id = " . $pdo->quote($parentId) . " AND entity_type = " . $pdo->quote($parentType);
				$sth = $pdo->prepare($sql);
				$sth->execute();
				$userIdList = array();
				while ($row = $sth->fetch(\PDO::FETCH_ASSOC)) {
					if ($this->getUser()->id != $row['userId']) {
						$userIdList[] = $row['userId'];
					}
				}
				if (!empty($userIdList)) {
					$job = $this->getEntityManager()->getEntity('Job');
					$job->set(array(
						'serviceName' => 'Notification',
						'method' => 'notifyAboutNoteFromJob',
						'data' => json_encode(array(
							'userIdList' => $userIdList,
							'noteId' => $entity->id
						)),
						'executeTime' => date('Y-m-d H:i:s'),
					));
					$this->getEntityManager()->saveEntity($job);
				}
			}
		}
	}
	
	protected function getNotificationService()
	{
		if (empty($this->notificationService)) {
			$this->notificationService = $this->getServiceFactory()->create('Notification');
		}
		return $this->notificationService;		
	}
}

