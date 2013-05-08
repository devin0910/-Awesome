<?php

class StackTest extends PHPUnit_Framework_TestCase
{
	public function testPushAndPop()
	{
		$statck = array();
		$this->assertEquals(0, count($statck));

		array_push($statck, 'foo');
		$this->assertEquals('foo', $statck[count($statck) - 1]);
		$this->assertEquals(1, count($statck));
	}
}