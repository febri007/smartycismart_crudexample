<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
// load base class if needed
require_once APPPATH . 'controllers/base/OperatorBase.php';

class Exportpdf extends ApplicationBase
{
    // constructor
    public function __construct()
    {
        parent::__construct();
        // load model
        // load library
        $this->load->library('tnotification');
        $this->load->library('datetimemanipulation');
        
        // set page header
        $this->smarty->assign('page_header', 'Dashboard');
    }

    // welcome operator
    public function index()
    {
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "operator/lock/lockscreen.html");
        $this->smarty->assign('user', $this->com_user['user_id']);
        // $this->smarty->display('text.tpl'); 
        // output
        $this->smarty->assign('notify', '');
        parent::display();
    }
    
    function logon(){
        $this->load->model('m_kampung');
        $pass = $this->input->post('pass');
        $check = $this->m_kampung->logon($pass);
        // print_r($check);
		if($check != null){
            $this->smarty->assign('notify', 'sukses');
            $this->smarty->assign("template_content", "operator/lock/lockscreen.html");
            parent::display();
        }else{
            $this->smarty->assign('notify', 'false');
            $this->smarty->assign("template_content", "operator/lock/lockscreen.html");
            parent::display();
        }

    }
}
