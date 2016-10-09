<?php

class Test extends PHPunit_Framework_Testcase {

    /*
     * Testing the translation files
     */

    public function testfile(){
        include(__FILE__);
        
		$result = $lang['BEEIMG'];
        $this->assertEquals("BeeIMG", $result);
    }
}

?>
