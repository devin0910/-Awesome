<?php

class ExceptionTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testException()
	{
		throw new InvalidArgumentException("Error Processing Request");
						
	}
}