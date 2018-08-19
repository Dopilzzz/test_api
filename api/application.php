<?php

/**
 * 
 */
class Application 
{
	
	function __construct()
	{
		$name = 'Test API';
	}

	function get_name() {
		return $this->name;
	}
}