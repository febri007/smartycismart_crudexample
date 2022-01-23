<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
// load base class if needed
require_once APPPATH . 'controllers/base/OperatorBase.php';

class Invoice extends ApplicationBase
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
        $this->smarty->assign("template_content", "operator/invoice/invoice.html");
        // output
        parent::display();
    }
    public function inpmail()
    {
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "operator/invoice/input_mail.html");
        // output
        parent::display();
    }
    public function invoice_print()
    {
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        // $this->smarty->assign("template_content", "operator/invoice/invoice_print.html");
        $this->load->view('operator/invoice/invoice_print.html');
        // output
        // parent::display();
    }
}
