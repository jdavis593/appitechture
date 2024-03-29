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

namespace Espo\Core\Utils\Database\Schema;

abstract class BaseRebuildActions
{
	private $metadata;

	private $config;

	private $entityManager;
	
	protected $currentSchema = null;

	protected $metadataSchema = null;


	public function __construct(\Espo\Core\Utils\Metadata $metadata, \Espo\Core\Utils\Config $config, \Espo\Core\ORM\EntityManager $entityManager)
	{
		$this->metadata = $metadata;
		$this->config = $config;
		$this->entityManager = $entityManager;
	}
	
	protected function getEntityManager()
	{
		return $this->entityManager;
	}
	
	protected function getConfig()
	{
		return $this->config;
	}
	
	protected function getMetadata()
	{
		return $this->metadata;
	}

	public function setCurrentSchema(\Doctrine\DBAL\Schema\Schema $currentSchema)
	{
		$this->currentSchema = $currentSchema;
	}  

	public function setMetadataSchema(\Doctrine\DBAL\Schema\Schema $metadataSchema)
	{
		$this->metadataSchema = $metadataSchema;
	} 

	protected function getCurrentSchema()
	{
		return $this->currentSchema;
	}

	protected function getMetadataSchema()
	{
		return $this->metadataSchema;
	}

	/*
	public function beforeRebuild()
	{	 	
	}

	public function afterRebuild()
	{	 	
	}
	*/
	
	
}

