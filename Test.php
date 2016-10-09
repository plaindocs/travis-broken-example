<?php

class TestFiles extends PHPunit_Framework_Testcase {

    /*
     * Testing the translation files
     */

    public function testloadfiles(){
	$dir = glob("lang.*.php");
		foreach ($dir as $file) {
			var_dump($file);
			$this->filetest($file);
		}
    }
	
	public function filetest($file){
    include_once($file);
	$result = $lang['BEEIMG'];
        $this->assertEquals("BeeIMG", $result);
    }
}

?>
