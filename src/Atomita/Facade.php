<?php

namespace Atomita;

/**
 * Simple Facade pattern
 */
abstract class Facade
{

	/**
	 * get the instance.
	 *
	 * @return	object
	 */
	protected static function facadeInstance()
	{
		throw new \RuntimeException("Please implement the facadeInstance method to the class.");
	}
	
	/**
	 * call method.
	 *
	 * @param	string	$method
	 * @param	array	$args
	 * @return	mixed
	 */
	public static function __callStatic($method, $args)
	{
		$instance = static::facadeInstance();
		return call_user_func_array(array($instance, $method), $args);
	}

}
