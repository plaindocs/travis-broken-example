<?php

class Test1 extends PHPunit_Framework_Testcase {

    /*
     * Testing the translation files
     */

    public function testOnePlusOne(){
        //include(__FILE__);
        
	$result = $lang['BEEIMG'];
        $this->assertEquals("BeeIMG", $result);
    }
}

?>
