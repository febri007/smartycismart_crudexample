<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
// load base class if needed
require_once APPPATH . 'controllers/base/OperatorBase.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Kampung extends ApplicationBase
{
    protected $template = 'operator/datakampung/';
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
        $this->load->model('m_kampung');
        // $this->load->library('Helpers/BaseRequest', '', 'BaseRequest');
        // $this->load->library('Helpers/ArrayHelper', '', 'ArrayHelper');
        $this->load->library('tnotification');
        $this->load->library('pagination');
    }

    // welcome operator
    public function index()
    {
        //time management
        $time['date'] = '%I:%M %p';
        $time['time'] = '%H:%M:%S';
        $this->smarty->assign('time', $time);
        $this->smarty->assign('yesterday', strtotime('-1 day'));

        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        $this->load->model('m_kampung');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('txt_nama', 'Nama', 'required');
        $this->form_validation->set_rules('txt_jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('txt_keterangan', 'Keterangan', 'required');
        

        //send data from db to parameters
        $send = $this->m_kampung->getdata();
        // print_r($send);
        $this->smarty->assign('datas', $send);
        $nd = $this->m_kampung->getdata();
        // print_r($nd);
        //send data to option value
        $this->smarty->assign('cust_ids', $nd
            );
        $this->smarty->assign('cust_names', $nd);
        $this->smarty->assign('customer_id', 92);
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        
        $this->smarty->assign("template_content", "operator/datakampung/v_dtkampung.html");
        $this->smarty->assign('user', $this->com_user['user_id']);
        $this->smarty->assign('data',$this->m_kampung->getdata());
        // $this->smarty->display('text.tpl'); 
        //load data from db for widgets
        // print_r($this->m_kampung->widget_total()->result());
        $this->smarty->assign('widget_total',$this->m_kampung->widget_total()->result());
        $this->smarty->assign('widget_ttl_laki',$this->m_kampung->widget_total_laki()->result());
        $this->smarty->assign('widget_ttl_cewe',$this->m_kampung->widget_total_perem()->result());

        
        //load view
        parent::display();
    
        
    } 
    // public function index(){
    //      // set page rules
    //     $this->_set_page_rule("R");
    //     // set template content
    //     $this->smarty->assign("template_content", $this->template."/v_dtkampung.html");
    //     // get search parameter
    //     // $search = $this->tsession->userdata('');
    //     if (!empty($search)) {
    //         $this->smarty->assign("search", $search);
    //     }
    //     // search parameters
    //     // $kode_tahun = !empty($search['kode_tahun']) ? $search['kode_tahun'] : date('Y');
    //     // $kode_satker = empty($search['kode_satker']) ? '%' : '%' . $search['kode_satker'] . '%';
    //     // $bulan_start = empty($search['bulan_start']) ? '01' : $search['bulan_start'];
    //     // $bulan_end = empty($search['bulan_end']) ? '12' : $search['bulan_end'];
    //     /* start of pagination --------------------- */
    //     // pagination
    //     $total_data = $this->m_kampung->gettotaldata();
    //     // print_r($total_data); die();
    //     $config['base_url'] = site_url($this->template."v_dtkampung.html/");
    //     $config['total_rows'] = $total_data;
    //     $config['uri_segment'] = 3;
    //     $config['per_page'] = 50;
    //     $this->pagination->initialize($config);
    //     $pagination['data'] = $this->pagination->create_links();
    //     // pagination attribute
    //     $start = $this->uri->segment(3, 0) + 1;
    //     $end = $this->uri->segment(3, 0) + $config['per_page'];
    //     $end = (($end > $config['total_rows']) ? $config['total_rows'] : $end);
    //     $pagination['start'] = ($config['total_rows'] == 0) ? 0 : $start;
    //     $pagination['end'] = $end;
    //     $pagination['total'] = $config['total_rows'];
    //     // pagination assign value
    //     $this->smarty->assign("pagination", $pagination);
    //     $this->smarty->assign("no", $start);
    //     /* end of pagination ---------------------- */
    //     // get list
       
    //     $limit = array(($start - 1), $config['per_page']);
    //     // $params = array($last_cutoff,$bulan_start,$bulan_end,$kode_tahun, $kode_satker,$bulan_start,$bulan_end);
    //     $this->smarty->assign("rs_id", $this->m_kampung->getdataall($limit));
    //     // print_r($limit);die;
    //     // print_r($this->m_kampung->getdata());
    //     // $data = $this->m_kampung->getdataall($limit);
    //     // var_dump($data);
    //     // die;
        
    //     // notification
    //     $this->tnotification->display_notification();
    //     // output
    //     parent::display();
    // }

    public function exportexcel(){
        $this->load->model('m_kampung');
        $fileName = 'dataOrangKampunk.xlsx';  
		$employeeData = $this->m_kampung->printdatakampung();
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');
        $sheet->setCellValue('A1', 'Id');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'JK');
        $sheet->setCellValue('D1', 'KET');
        $rows = 2;
        foreach ($employeeData as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['nama']);
            $sheet->setCellValue('C' . $rows, $val['jk']);
            $sheet->setCellValue('D' . $rows, $val['keterangan']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("upload/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/upload/".$fileName); 
    }
     // add
     public function process_add(){
        // $this->load->library('tupload');

        $foto = "FOT".rand(9,9999);
        $this->load->model('m_kampung');
		$nama = $this->input->post('txt_nama');
        $jk  = $this->input->post('txt_jk');
        $ket  = $this->input->post('txt_keterangan');
		
        //photo
        if (!empty($_FILES['upload_file']['tmp_name'])) {
            // load
            $this->load->library('tupload');
            // last id
            // $id_nav = $this->m_settings->get_last_inserted_id();
            // upload config
            $config['upload_path'] = 'resource/doc/';
            $config['allowed_types'] = 'gif|jpg|png';
            //                    $config['max_size'] = '20';
            //                    $config['max_width'] = '36';
            //                    $config['max_height'] = '36';
            $config['file_name'] = $foto;
            $this->tupload->initialize($config);
            // process upload images
            if ($this->tupload->do_upload_image('upload_file', false, 36)) {
                $data = $this->tupload->data();
                foreach ($data as $dt) {
                    $foto =  $data['orig_name'];
                    break;
                 }
            } 
        }
        $data_text = array(
			'nama' => $nama,
            'jk' => $jk,
            'keterangan' => $ket,
            'foto' => $foto
        );

        if($this->m_kampung->insert_kampung($data_text)){
            echo "data inserted";
            $this->tnotification->sent_notification("success", "Data berhasil disimpan");
            redirect("operator/kampung");
        }else{
            echo "data fails";
            $this->tnotification->sent_notification("error", "Gagal Menyimpan");
            redirect("operator/kampung");
        }
	}
    public function process_update(){
        $this->load->model('m_kampung');
        $id = $this->input->post('id1');
		$nama = $this->input->post('nama1');
        $jk  = $this->input->post('jk1');
        $ket  = $this->input->post('ket1');
		$data = array(
			'nama' => $nama,
            'jk' => $jk,
            'keterangan' => $ket
    );

        if($this->m_kampung->update_kampung($id,$data)){
            $this->tnotification->sent_notification("success", "Data berhasil diubah");
            redirect("operator/kampung");
        }else{
            $this->tnotification->sent_notification("error", "Gagal Mengubah");
            redirect("operator/kampung");
        }
	}

    public function process_hapus(){
        $this->load->model('m_kampung');
        $id1 = $this->input->post('id1');
        if($this->m_kampung->delete($id1)){
            $this->tnotification->sent_notification("success", "Data berhasil dihapus");
            redirect("operator/kampung");
        }else{
            $this->tnotification->sent_notification("error", "Gagal Menghapus");
            redirect("operator/kampung");
        }
    }
   
    //get api using JSON
    function http_request($url){
        // persiapkan curl
        $ch = curl_init(); 
    
        // set url 
        curl_setopt($ch, CURLOPT_URL, $url);
        
        // set user agent    
        curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    
        // return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    
        // $output contains the output string 
        $output = curl_exec($ch); 
    
        // tutup curl 
        curl_close($ch);      
    
        // mengembalikan hasil curl
        return $output;
    }
    
   function get_api(){
    $profile = $this->http_request("https://api.github.com/users/petanikode");
    
    // ubah string JSON menjadi array
    $profile = json_decode($profile, TRUE);
    
    echo "<pre>";
    print_r($profile);
    echo "</pre>";

        $curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: 72eee1e81c5608135e98cea6c3fcf8da"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			return "cURL Error #:" . $err;
		} else {
			$hasil = json_decode($response, true);
            print_r($hasil["rajaongkir"]["results"][4]) ;
            
	}
   }
}
