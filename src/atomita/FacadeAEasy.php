<?php

namespace atomita;

/**
 * 
 */
abstract class FacadeAEasy extends Facade
{

	static protected function facadeInstance()
	{
		static $instans = array();

		$class = '\\' . substr(get_called_class(), 0, -6); // -6 = strlen('Facade') * -1

		if (!isset($instans[$class])){
			$instans[$class] = new $class();
		}
		return $instans[$class];
	}
	
}
