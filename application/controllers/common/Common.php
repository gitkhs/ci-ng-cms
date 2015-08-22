<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Controller {
	function __construct()
	{
		session_start();

		parent::__construct();

		// 기본 헬퍼 로드
		$this->load->helper('url');
		$this->load->helper('array');
		$this->load->helper('cookie');
		$this->load->helper("directory");
		
		// 글로벌 변수 선언
		$this->setBase();
        
        $this->getMenu();
	}

	private function setBase() {
		// URI 파라메터 정의
		$this->param			= $this->uri->uri_to_assoc();
//		if($this->uri->segment(1) == 'admin') :
//			$this->param['class']	= $this->uri->segment(2) ? $this->uri->segment(2) : 'page';
//			$this->param['method']	= $this->uri->segment(3) ? $this->uri->segment(3) : 'index';
//		else :
			$this->param['class']	= $this->uri->segment(1) ? $this->uri->segment(1) : 'pages';
			$this->param['method']	= $this->uri->segment(2) ? $this->uri->segment(2) : 'main';
//		endif;

		// 사이트 기본 정보 설정
        $this->site   = array(
            'r' => '/cicms',
            'img' => 'files/images',
            'layout'    => 'bootstrap',
            'theme'    => 'theme01'
            );

        // 페이지 경로
        $this->path     = 'views/'.$this->site['layout'].'/modules/'.$this->param['class'];
        // 페이지 종류
        $this->viewkind   = 'default';
        
        $this->page     = array('class'=>$this->param['class'],'method'=>$this->param['method']);
	}
    
    private function getMenu() {
        $this->mainmenu   = array(
            array('mid'=>'1', 'sid'=>'10', 'mname'=>'페이지 종류', 'class'=>'pages', 'method'=>'view'),
            array('mid'=>'2', 'sid'=>'2', 'mname'=>'서브메뉴없음', 'class'=>'pages', 'method'=>'view', 'module'=>'{"kind":"none","fluid":"","side":""}'),
            array('mid'=>'3', 'sid'=>'30', 'mname'=>'게시판', 'class'=>'pages', 'method'=>'side')
        );
    }
}
