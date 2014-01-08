<?php defined('_JEXEC') or die;

/**
 * File       librarybrain.php
 * Created    1/8/14 2:57 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v3 or later
 */

class PlgSystemLibrarybrain extends JPlugin
{
	public function __construct(&$subject, $config)
	{
		parent::__construct($subject, $config);

		define('LIBRARYBRAIN', dirname(__FILE__) . '/librarybrain');

		JLoader::register('JDatabaseQuery', LIBRARYBRAIN . '/query.php', true);
		JLoader::register('DbBrain', LIBRARYBRAIN . '/dbbrain.php', true);

	}
}