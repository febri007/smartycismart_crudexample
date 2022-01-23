<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
// load base class if needed
require_once APPPATH . 'controllers/base/OperatorBase.php';

class Welcome extends ApplicationBase
{
    // constructor
    public function __construct()
    {
        parent::__construct();
        // load model
        // load library
        $this->load->library('tnotification');
        $this->load->library('datetimemanipulation');
        $this->load->library('tnotification');
        $this->load->library('datetimemanipulation');
        date_default_timezone_set('Asia/Jakarta');
        $params = array('server_key' => getServerKey(), 'production' => true);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
        // set page header
        $this->smarty->assign('page_header', 'Dashboard');
    }

    // welcome operator
    public function index()
    {

        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // $this->load->helper('url');
        // $this->load->library('pagination');
        $this->load->model('m_belajar');
        // $config['base_url'] = site_url('example_pagination/index');
        // $config['total_rows'] = $this->m_belajar->getdata();
        // $config['per_page'] = 5;
        // $config['num_links'] = 4;
        // $config["url_segment"] = 3;

        // $asp['penduduk'] = $this->m_belajar->getdata();
        // $this->load->view("operator/welcome/index.php", $asp);


        //send data from db to parameters
        $send = $this->m_belajar->getdata()->result();
        // print_r($send);
        $this->smarty->assign('datas', $send);
        $nd = $this->m_belajar->getdata()->result_array();
        print_r($nd);
        //send data to option value
        $this->smarty->assign('cust_ids', $nd
            );
        $this->smarty->assign('cust_names', $nd);
        $this->smarty->assign('customer_id', 92);
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        
        $this->smarty->assign("template_content", "operator/welcome/index.html");
        $this->smarty->assign('user', $this->com_user['user_id']);
        $this->smarty->assign('data',$this->m_belajar->getdata());
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

        // if(empty($_FILES['upload_file']['tmp_name'])) {
        //     $this->tnotification->set_error_message('file not found');
        //     $this->tnotification->sent_notification("error","process fails");
           
        // }
        // if(!empty($_FILES['upload_file']['tmp_name'])){
        //     // echo $_FILES['upload_file']['tmp_name'];
        //     $config['upload_path'] = 'resource/doc/';
        //     $config['allowed_types'] = '*';
        //     $this->tupload->initialize();

        //     //upload process
        //     if($this->tupload->do_upload('upload_file')){
        //         $this->tnotification->sent_notification("sucess","data diupload");
        //     }else{
        //         $this->tnotification->set_error_message($this->tupload->display_errors());
        //         $this->tnotification->sent_notification("error","process fails");
        //         echo $this->tupload->display_errors();
        //         print_r($config);
        //     }
        //  }

         
        //  redirect("operator/welcome/");


        //examples
        if (!empty($_FILES['upload_file']['tmp_name'])) {
            // load
            $this->load->library('tupload');
            $name = "PIC-".rand(1,9999);
            // last id
            // $id_nav = $this->m_settings->get_last_inserted_id();
            // upload config
            $config['upload_path'] = 'resource/doc/';
            $config['allowed_types'] = 'gif|jpg|png';
            //                    $config['max_size'] = '20';
            //                    $config['max_width'] = '36';
            //                    $config['max_height'] = '36';
            $config['file_name'] = $name;
            $this->tupload->initialize($config);
            // process upload images
            if ($this->tupload->do_upload_image('upload_file', false, 36)) {
                $data = $this->tupload->data();
                // $this->m_settings->update_icon([$data['file_name'], rand(9,999)]);
                foreach ($data as $dt) {
                   echo $data['orig_name'];
                   break;
                }
                // print_r($data);
            } else {
                // jika gagal
                echo "kosong";
                $this->tnotification->set_error_message($this->tupload->display_errors());
            }
        }
    }
         
    public function jqueryui(){
        $this->smarty->assign("template_content", "operator/welcome/index.html");
        //load javascript
        // $this->smarty->load_javascript("resource/js/jquery/jquery-3.5.1.min.js");
        // $this->smarty->load_javascript("resource/js/jquery/jquery.min.js");
        $this->smarty->load_javascript("adminlte31/plugins/jquery/jquery.min.js");
        $this->smarty->load_javascript("adminlte31/plugins/bootstrap/js/bootstrap.bundle.min.js");
        $this->smarty->load_javascript("adminlte31/js/adminlte.min.js");
        $this->smarty->load_javascript("adminlte31/js/demo.js");
        $this->smarty->load_javascript("adminlte31/js/pages/dashboard3.js");
        parent::display();
    }


    public function token()
    {
		
        $id = $this->input->post('order_id');
		// $time = date("Y-m-d h:i:sa");
		// $this->m_checkout->set_timetransaksi($id, $time);

		$transaction_details = array(
			'order_id' => rand(9,999),
			'gross_amount' => 9000, // no decimal allowed for creditcard
		  );
  
		  // Optional
		  // $item1_details = array(
		  //   'id' => 'a1',
		  //   'price' => $ttl_bayar,
		  //   'quantity' => 3,
		  //   'name' => "wkwkland"
		  // );
  
		  
		  // $item2_details = array(
		  //   'id' => 'a2',
		  //   'price' => 90000,
		  //   'quantity' => 1,
		  //   'name' => "Orange"
		  // );
  
		  // Optional
		  // $item_details = array ($this->session->userdata('shipping'));
  
		  // Optional
		  // $billing_address = array(
		  //   'first_name'    => $this->session->userdata('nama_pelanggan'),
		  //   'last_name'     => "",
		  //   'address'       => $this->session->userdata('alamat'),
		  //   'city'          => "",
		  //   'postal_code'   => "",
		  //   'phone'         => $this->session->userdata('no_hp'),
		  //   'country_code'  => 'IDN'
		  // );
  
		  // Optional
		  // $shipping_address = array(
		  //   'first_name'    => $this->session->userdata('nama_pelanggan'),
		  //   'last_name'     => "",
		  //   'address'       => $this->session->userdata('alamat'),
		  //   'city'          => "",
		  //   'postal_code'   => "",
		  //   'phone'         => $this->session->userdata('no_hp'),
		  //   'country_code'  => 'IDN'
		  // );
  
		  // Optional
		  $customer_details = array(
			'first_name'    => "hendry",
			'last_name'     => "wibowo",
			'email'         => "henwi@gmail.com",
			'phone'         => "oke123",
		    'billing_address'  => "pacitan123",
		    // 'shipping_address' => $this->session->userdata('alamat')
		  );
  
		  // Data yang akan dikirim untuk request redirect_url.
		  $credit_card['secure'] = true;
		  //ser save_card true to enable oneclick or 2click
		  //$credit_card['save_card'] = true;
  
		  $time = time();
		  $custom_expiry = array(
			  'start_time' => date("Y-m-d H:i:s O",$time),
			  'unit' => 'minute', 
			  'duration'  => 2
		  );
		  
		  $transaction_data = array(
			  'transaction_details'=> $transaction_details,
			  // 'item_details'       => $item2_details,
			  'customer_details'   => $customer_details,
			  // 'credit_card'        => $credit_card,
			  // 'expiry'             => $custom_expiry
		  );
  
		  error_log(json_encode($transaction_data));
		  $snapToken = $this->midtrans->getSnapToken($transaction_data);
		  error_log($snapToken);
			// if ($oldorderid != null) {
			// 	if ($snapToken) {
			// 		$this->m_barang->ubahpembayaran($orderid, $oldorderid);
			// 	}
			// } 
		  echo $snapToken;

    }

    public function maps(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "operator/welcome/maps.html");
        $this->smarty->assign('user', $this->com_user['user_name'] . "_PORTAL_LAIN");
        // output
        parent::display();
    }
}
