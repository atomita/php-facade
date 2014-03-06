<?php

namespace Atomita;

/**
 * 
 */
abstract class FacadeAEasy extends Facade
{

	static protected function facadeInstance()
	{
		static $instans = array();

		$class = '\\' . rtrim(get_called_class(), 'Facade');

		if (!isset($instans[$class])){
			$instans[$class] = new $class();
		}
		return $instans[$class];
	}
	
}
