<?php defined('_JEXEC') or die;

/**
 * File       dbhelpers.php
 * Created    1/8/14 5:22 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v3 or later
 */

class dbBrain
{

	/**
	 * Checks for any database errors after running a query
	 *
	 * @param null $backtrace
	 */
	public static function checkDbError($db, $backtrace = null)
	{
		jimport('joomla.error.log');

		$log = JLog::getInstance();

		if ($error = $db->getErrorMsg())
		{
			if ($backtrace)
			{
				$e = new Exception();
				$error .= "\n" . $e->getTraceAsString();
			}

			$log->addEntry(array('LEVEL' => '1', 'STATUS' => 'Database Error:', 'COMMENT' => $error));
			JError::raiseWarning(100, $error);
		}
	}
}