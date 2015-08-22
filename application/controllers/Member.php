<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/common/Common".EXT);

class Member extends Common {
	function __construct()
	{
		parent::__construct();
        
        $this->viewkind   = 'default-empty';

        $this->page['module']   = json_decode('{"kind":"side","fluid":"","side":"lt"}');
    }

	//
	// 함수 리맵핑: 
	public function _remap($method)
	{
 		if( method_exists($this, $method) ) {
			$this->{"{$method}"}();
		}
 		$this->load->view('view', $this);
	}

	public function index()
	{
	}
    
    public function main() {
        $this->module   = json_decode('{"kind":"main"}');
    }
    
    public function login() {
        $this->viewkind = 'custom';
    }
    public function myinfo() {
    }
}
