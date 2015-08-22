<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/common/Common".EXT);

class Pages extends Common {
	function __construct()
	{
		parent::__construct();

        if(!element('mid', $this->param)) :
            $this->param['mid'] = 0;
        endif;

        // 페이지 테스트
        $this->submenu[10]   = array('mid'=>'10', 'pid'=>'1', 'mname'=>'왼쪽메뉴', 'class'=>'pages', 'method'=>'view', 'module'=>'{"kind":"side","fluid":"","side":"lt"}');
        $this->submenu[11]   = array('mid'=>'11', 'pid'=>'1', 'mname'=>'왼쪽메뉴 와이드', 'class'=>'pages', 'method'=>'view', 'module'=>'{"kind":"side","fluid":"Y","side":"lt"}');
        $this->submenu[12]   = array('mid'=>'12', 'pid'=>'1', 'mname'=>'오른쪽메뉴', 'class'=>'pages', 'method'=>'view', 'module'=>'{"kind":"side","fluid":"","side":"rt"}');
        $this->submenu[13]   = array('mid'=>'13', 'pid'=>'1', 'mname'=>'오른쪽메뉴 와이드', 'class'=>'pages', 'method'=>'view', 'module'=>'{"kind":"side","fluid":"Y","side":"rt"}');
        $this->submenu[14]   = array('mid'=>'14', 'pid'=>'1', 'mname'=>'상단메뉴', 'class'=>'pages', 'method'=>'view', 'module'=>'{"kind":"top","fluid":"","side":""}');
        $this->submenu[15]   = array('mid'=>'15', 'pid'=>'1', 'mname'=>'상단메뉴 와이드', 'class'=>'pages', 'method'=>'view', 'module'=>'{"kind":"top","fluid":"Y","side":""}');
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
        
// 		$query = $this->db->query('SELECT ci_name, ci_title FROM ci_test');
		
// 		foreach ($query->result() as $row)
// 		{
// 			echo $row->ci_title;
// 			echo $row->ci_name;
// 			echo '<br/>';
// 		}
		
// 		echo 'Total Results: ' . $query->num_rows();
        $this->main();
	}
    
    public function main() {
        $this->viewkind   = 'default-empty';
    }
    
    public function view() {
        $mid            = $this->param['mid'];
        
        $this->page     = $this->getPage($mid);
        $this->page['module']   = json_decode($this->page['module']);
    }
    public function write() {
        $mid            = $this->param['mid'];
        $this->page     = $this->getPage($mid);
        $this->page['method']     = 'write';
        $this->page['module']   = json_decode($this->page['module']);
    }

    private function getPage($mid) {
        switch($mid) {
        case '2':
            $info   = $this->mainmenu[1];
            $info['pid']   = $info['sid'];
            break;
        case '10':
        case '11':
        case '12':
        case '13':
        case '14':
        case '15':
            $info   = $this->submenu[$mid];
            break;
        }
        
        return $info;
    }
}
