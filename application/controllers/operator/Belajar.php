<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
// load base class if needed
require_once APPPATH . 'controllers/base/BelajarBase.php';

class Belajar extends ApplicationBase
{
    // constructor
    public function __construct()
    {
        parent::__construct();
        // load model
        // load library
       
        // set page header
        $this->smarty->assign('page_header', 'Dashboard');
    }

    // welcome operator
    public function index()
    {
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "operator/welcome/index.html");
        $this->smarty->assign('user', $this->com_user['user_name'] . "_PORTAL_LAIN");
        // output
        parent::display();
    }
}
