<?php
/**
 * WebEngine CMS
 * https://webenginecms.org/
 * 
 * @version 1.2.1
 * @author Lautaro Angelico <http://lautaroangelico.com/>
 * @copyright (c) 2013-2020 Lautaro Angelico, All Rights Reserved
 * 
 * Licensed under the MIT license
 * http://opensource.org/licenses/MIT
 */

/**
 * File Compatibility
 * List of server files compatible with WebEngine
 */

$webengine['file_compatibility'] = array(
	'igcn' => array(
		'name' => 'IGCN',
		'file' => 'igcn.tables.php',
	),
	'xteam' => array(
		'name' => 'X-Team, MuEmu, Louis',
		'file' => 'xteam.tables.php',
	),
	'custom' => array(
		'name' => 'Custom (IGCN Based)',
		'file' => 'custom.tables.php',
	),
	'97k_sql' => array(
		'name' => '97k (SQL Server)',
		'file' => '97k_sql.tables.php',
	),
	'97k_mysql' => array(
		'name' => '97k (MySQL)',
		'file' => '97k_mysql.tables.php',
	),
);