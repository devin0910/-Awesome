<?php

require 'CsvFileIterator.php';

/**
 * invalid data : 1,3,1
 */
class CsvDataTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @dataProvider provider
	 */
	public function testAdd($a, $b, $c)
	{
		$this->assertEquals($c, $a + $b);
	}

	public function provider()
	{
		return new CsvFileIterator(__DIR__ . '/data.csv');
	}
}