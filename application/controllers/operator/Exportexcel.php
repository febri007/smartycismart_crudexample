<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
// load base class if needed
require_once APPPATH . 'controllers/base/OperatorBase.php';

class Exportexcel extends ApplicationBase
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

        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->model('m_belajar');

        //test pagination
        $config['base_url'] = site_url('operator/welcome/index');
        $config['total_rows'] = 500;
        $config['per_page'] = 5;
        $config['num_links'] = 4;
        $config["url_segment"] = 4;
        $this->pagination->initialize($config);
        $pagination['data'] = $this->pagination->create_links();
        //pagination atribut
        $start = $this->uri->segment(4, 0) + 1;
        $end = $this->uri->segment(4, 0) + $config['per_page'];
        $end = (($end > $config['total_rows'])?$config['total_rows']:$end);
        $pagination['start'] = $start;
        $pagination['end'] = $end;
        $pagination['total'] = $config['total_rows'];
        $this->smarty->assign("pagination",$pagination);
        $this->smarty->assign("no", $start);
        $params = array(intval($this->uri->segment(4, 0)), $config['per_page']);
        $this->smarty->assign("datas",$this->m_belajar->getdata()->result());


        // $asp['penduduk'] = $this->m_belajar->getdata();
        // $this->load->view("operator/welcome/index.php", $asp);


        //send data from db to parameters
        // $send = $this->m_belajar->getdata()->result();
        // print_r($send);
        // $this->smarty->assign('datas', $send);
        // $nd = $this->m_belajar->getdata()->result_array();
        // print_r($nd);
        //send data to option value
        // $this->smarty->assign('cust_ids', $nd
            // );
        // $this->smarty->assign('cust_names', $nd);
        // $this->smarty->assign('customer_id', 92);
        // set page rules
        // $this->_set_page_rule("R");
        // set template content
        
        // $this->smarty->assign("template_content", "operator/welcome/index.html");
        // $this->smarty->assign('user', $this->com_user['user_id']);
        // $this->smarty->assign('data',$this->m_belajar->getdata());
        // $this->smarty->display('text.tpl'); 

        // output
        parent::display();
    }
     // add
     public function add(){
        $this->load->model('m_belajar');
		$nama = $this->input->post('inp_nama');
		$data = array(
			'name' => $nama
    );

        if($this->m_belajar->insert_penduduk($data)){
            echo "data inserted";
        }else{
            echo "data fails";
        }
	}
    public function update(){
        $this->load->model('m_belajar');
        $sebelum_nama = $this->input->post('update_from');
		$nama = $this->input->post('upd_nama');
		$data = array(
			'name' => $nama
        );
        // echo $sebelum_nama;
        // echo $nama;
        if($this->m_belajar->update($sebelum_nama, $data)){
            echo "data inserted";
        }else{
            echo "data fails";
        }
	}

    public function delete(){
        $this->load->model('m_belajar');
        $name = $this->input->post('nama_delete');
        $this->m_belajar->delete($name);
    }

    public function upload(){
        $this->smarty->assign("template_content", "operator/welcome/index.php");

        $this->tnotification->display_notification();
        $this ->tnotification->display_last_field();
        parent::display();
    }

    public function process_upload(){
        $this->load->library('tupload');

        if(empty($_FILES['upload_file']['tmp_name'])) {
            $this->tnotification->set_error_message('file not found');
            $this->tnotification->sent_notification("error","process fails");
        }
        if(!empty($_FILES['upload_file']['tmp_name'])){
            echo $_FILES['upload_file']['tmp_name'];
        $config['upload_path'] = 'resource/doc/';
        $config['allowed_types'] = '*';
            if($this->tupload->do_upload('upload_file')){
                $this->tnotification->sent_notification("sucess","data diupload");
            }else{
                $this->tnotification->set_error_message($this->tupload->display_errors());
                $this->tnotification->sent_notification("error","process fails");
            }
         }

         
        //  redirect("operator/welcome/");
    }
         
    public function jqueryui(){
        $this->smarty->assign("template_content", "operator/welcome/index.html");
        //load javascript
        // $this->smarty->load_javascript("resource/js/jquery/jquery-3.5.1.min.js");
        // $this->smarty->load_javascript("resource/js/jquery/jquery.min.js");
        $this->smarty->load_javascript("resource/js/jquery/jquery.min.js");
        parent::display();
    }
}
