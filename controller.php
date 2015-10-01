<?php
defined('C5_EXECUTE') or die("Access Denied.");

class ZpartakovRssBlockController extends BlockController {
	//class ChesspgnBlockController extends Concrete5_Controller_Block_Html {
	
	public function getBlockTypeDescription() {
		return t("Zpartakov's RSS displayer");
	}
	
	public function getBlockTypeName() {
		return t("zpartakov_rss");
	}
	
	protected $btTable = 'zpartakov_rss';
	
	public function view(){
	
	}
}
