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

namespace Espo\Core\Utils\Database;

use Espo\Core\Utils\Util,
	Espo\ORM\Entity;

class Converter
{
	private $metadata;

	private $fileManager;

	private $schemaConverter;



	private $schemaFromMetadata = null;

	/**
	* @var array $meta - metadata array
	*/
	//private $meta;


	public function __construct(\Espo\Core\Utils\Metadata $metadata, \Espo\Core\Utils\File\Manager $fileManager)
	{
		$this->metadata = $metadata;
		$this->fileManager = $fileManager;

		$this->ormConverter = new Orm\Converter($this->metadata, $this->fileManager);

		$this->schemaConverter = new Schema\Converter($this->fileManager);
	}


	protected function getMetadata()
	{
		return $this->metadata;
	}

	protected function getOrmConverter()
	{
		return $this->ormConverter;
	}

	protected function getSchemaConverter()
	{
		return $this->schemaConverter;
	}


	public function getSchemaFromMetadata($entityList = null)
	{
		$ormMeta = $this->getMetadata()->getOrmMetadata();
		$entityDefs = $this->getMetadata()->get('entityDefs');

		$this->schemaFromMetadata = $this->getSchemaConverter()->process($ormMeta, $entityDefs, $entityList);

		return $this->schemaFromMetadata;
	}

	/**
	* Main method of convertation from metadata to orm metadata and database schema
	*
	* @return bool
	*/
	public function process()
	{
		$GLOBALS['log']->debug('Orm\Converter - Start: orm convertation');

		$ormMeta = $this->getOrmConverter()->process();

		//save database meta to a file espoMetadata.php
		$result = $this->getMetadata()->setOrmMetadata($ormMeta);

		$GLOBALS['log']->debug('Orm\Converter - End: orm convertation, result=['.$result.']');

		return $result;
	}




}


?>