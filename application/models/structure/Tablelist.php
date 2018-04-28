<?php
//返回可维护的索引type类型,也表示在维护中的index-对应的table名
class Tablelist extends CI_Model{
	public static $directory = 'application/config/es/';
	public function __construct(){
		parent::__construct();
		$this->load->helper('directory');
	}

	public function tablelist(){
		$tables = [];
		$files = directory_map(self::$directory,1);
		foreach ($files as $file) {
			$tables[] = basename($file,'.php');
		}
		return $tables;
	}
}