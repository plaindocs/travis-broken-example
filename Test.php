<?php

class Test1 extends PHPunit_Framework_Testcase {

    /*
     * Testing the translation files
     */

    public function testOnePlusOne(){
        //include(__FILE__);
	    $dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        var_dump($fileinfo->getFilename());
    }
}
        
	$result = $lang['BEEIMG'];
        $this->assertEquals("BeeIMG", $result);
    }
}

?>
