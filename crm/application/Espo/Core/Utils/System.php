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

namespace Espo\Core\Utils;

class System
{
	/**
	 * Get web server name
	 *
	 * @return string Ex. "microsoft-iis", "nginx", "apache"
	 */
	public function getServerType()
	{
		$serverSoft = $_SERVER['SERVER_SOFTWARE'];

		preg_match('/^(.*)\//i', $serverSoft, $match);
		if (empty($match[1])) {
			preg_match('/^(.*)\/?/i', $serverSoft, $match);
		}
		$serverName = strtolower( trim($match[1]) );

		return $serverName;
	}

	/**
	 * Get Operating System of web server. Details http://en.wikipedia.org/wiki/Uname
	 *
	 * @return string  Ex. "windows", "mac", "linux"
	 */
	public function getOS()
	{
		$osList = array(
			'windows' => array(
				'win',
				'UWIN',
			),
			'mac' => array(
				'mac',
				'darwin',
			),
			'linux' => array(
				'linux',
				'cygwin',
				'GNU',
				'FreeBSD',
				'OpenBSD',
				'NetBSD',
			),
		);

		$sysOS = strtolower(PHP_OS);

		foreach ($osList as $osName => $osSystem) {
			if (preg_match('/^('.implode('|', $osSystem).')/i', $sysOS)) {
				return $osName;
			}
		}

		return false;
	}

	/**
	 * Get root directory of EspoCRM
	 *
	 * @return string
	 */
	public function getRootDir()
	{
		$bPath = realpath('bootstrap.php');
		$rootDir = dirname($bPath);

		return $rootDir;
	}

	/**
	 * Get path to PHP
	 *
	 * @return string
	 */
	public function getPhpBin()
	{
		return (defined("PHP_BINDIR"))? PHP_BINDIR.DIRECTORY_SEPARATOR.'php' : 'php';
	}
}