<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1+2,4);
		$this->assertEquals(2+1+1,4);
		$this->assertEquals(5-2,3);
		$this->assertEquals(6/2,3);
		$this->assertEquals(2*3,6);
  	}
}

?>
