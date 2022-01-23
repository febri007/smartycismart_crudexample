<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
// load base class if needed
require_once APPPATH . 'controllers/base/OperatorLoginBase2.php';

// --

class Operatorlogin2 extends ApplicationBase
{
    // constructor
    public function __construct()
    {
        // parent constructor
        parent::__construct();
        // load global
        $this->load->library('tnotification');
    }

    // view
    public function index($status = "")
    {
        // set template content
        $this->smarty->assign("template_content", "login/operator/form2.html");
        // bisnis proses
        if (!empty($this->com_user)) {
            // logout
            $rs = $this->m_account->get_user_profil($this->com_user);
            // redirect('login/operatorlogin2/logout_process');
            $this->smarty->assign('login_st', $rs);
        } else {
            $this->smarty->assign("login_st", $status);
        }
        // output
        parent::display();
    }

    // login process
    public function login_process()
    {
        // set rules
        $this->tnotification->set_rules('username', 'Username', 'trim|required|max_length[30]');
        $this->tnotification->set_rules('pass', 'Password', 'trim|required|max_length[30]');
        // process
        if ($this->tnotification->run() !== false) {
            // params
            $username = trim($this->input->post('username'));
            $password = trim($this->input->post('pass'));
            // get user detail
            $result = $this->m_account->get_user_login_auto_role($username, $password, $this->portal_id);
            // check
            if (!empty($result)) {
                // cek lock status
                if ($result['lock_st'] == '1') {
                    // output
                    redirect('login/operatorlogin2/index/locked');
                }// load setting
                $this->load->model('m_settings');
                //
                $data_user = ['user_id' => $result['user_id'], 'role_id' => $result['role_id']];
                // set session to all portal
                $portal = $this->m_settings->get_all_portal();
                foreach ($portal as $a => $b) {
                    $this->tsession->set_userdata($b['portal_session'], $data_user);
                }
                // insert login time
                $this->m_account->save_user_login($result['user_id'], $_SERVER['REMOTE_ADDR']);
                // redirect
                redirect($result['default_page']);
            } else {
                // output
                redirect('login/operatorlogin2/index/error');
            }
        } else {
            // default error
            redirect('login/operatorlogin2/index/error');
        }
        // output
        redirect('login/operatorlogin2');
    }

    // logout process
    public function logout_process()
    {
        // load setting
        $this->load->model('m_settings');
        // user id
        $user_id = $this->tsession->userdata('session_operator');
        // insert logout time
        $this->m_account->update_user_logout($user_id['user_id']);
        // unset session
        $portal = $this->m_settings->get_all_portal();
        foreach ($portal as $a => $b) {
            $this->tsession->unset_userdata($b['portal_session']);
        }
        // output
        redirect('login/operatorlogin2');
    }
}
