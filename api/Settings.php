<?php

/**
 * Settings
 */
class Settings
{
	/**
	 * @return void
	 */
	public function __construct()
	{

	}

	/**
	 * Base path
	 * @return string
	 */
	public static function getBasePath()
	{
		////////////////////////////////////////////////////////////
		// Absolute path of files that will be accessed by editor //
		////////////////////////////////////////////////////////////

		return dirname(__FILE__).'/';
	}
}