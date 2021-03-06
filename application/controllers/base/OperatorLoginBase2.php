<?php

class ApplicationBase extends CI_Controller
{
    // init base variable
    protected $portal = 'portal_operator2';
    protected $portal_id;
    protected $com_portal;
    protected $com_user;

    public function __construct()
    {
        // load basic controller
        parent::__construct();
        // load app data
        $this->base_load_app();
        // view app data
        $this->base_view_app();
    }

    /*
     * Method pengolah base load
     * diperbolehkan untuk dioverride pada class anaknya
     */

    protected function base_load_app()
    {
        // load themes (themes default : default)
        $this->smarty->load_themes("adminlte31");
        // load base models
        // load javascript
        $this->smarty->load_javascript("adminlte31/plugins/jquery/jquery.min.js");
        $this->smarty->load_javascript("adminlte31/js/adminlte.min.js");
        // load style
        $this->smarty->load_style("adminlte31/plugins/fontawesome-free/css/all.min.css");
        // load csrf data
        $csrf = [
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash(),
        ];
        $this->smarty->assign('csrf', $csrf);
    }

    /*
     * Method pengolah base view
     * diperbolehkan untuk dioverride pada class anaknya
     */

    protected function base_view_app()
    {
        $this->smarty->assign("config", $this->config);
        // display site title
        self::_display_site_title();
        // get session admin
        self::_get_admin_session();
    }

    /*
     * Method layouting base document
     * diperbolehkan untuk dioverride pada class anaknya
     */

    protected function display($tmpl_name = 'base/operator/document-login.html')
    {
        // --
        // $this->smarty->assign("template_sidebar", "base/admin/sidebar.html");
        // set template
        $this->smarty->display($tmpl_name);
    }

    //
    // base private method here
    // prefix ( _ )
    // site title
    private function _display_site_title()
    {
        $this->portal_id = $this->config->item($this->portal);
        // site data
        $this->com_portal = $this->m_site->get_site_data_by_id($this->portal_id);
        if (!empty($this->com_portal)) {
            $this->smarty->assign("site", $this->com_portal);
        }
    }

    // get session admin
    private function _get_admin_session()
    {
        // load setting
        $this->load->model('m_settings');
        $session = $this->m_settings->get_portal_by_id($this->portal_id);
        // session admin
        $this->com_user = $this->tsession->userdata($session['portal_session']);
    }
}
