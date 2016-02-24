<?php 
/* SVN FILE: $Id$ */
/* AssetsController Test cases generated on: 2010-11-18 15:16:22 : 1290068182*/
App::import('Controller', 'Assets');

class TestAssets extends AssetsController {
	var $autoRender = false;
}

class AssetsControllerTest extends CakeTestCase {
	var $Assets = null;

	function startTest() {
		$this->Assets = new TestAssets();
		$this->Assets->constructClasses();
	}

	function testAssetsControllerInstance() {
		$this->assertTrue(is_a($this->Assets, 'AssetsController'));
	}

	function endTest() {
		unset($this->Assets);
	}
}
?>