<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//返回可维护的索引type类型,也表示在维护中的index-对应的table名

class Tablelist {
	
	protected static $directory = 'application/config/es/';
	protected $CI;

	public function __construct(){
		//parent::__construct();
		$this->CI =& get_instance();
		$this->CI->load->helper('directory');
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