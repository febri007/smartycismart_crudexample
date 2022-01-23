<?php

class ApplicationBase extends CI_Controller
{
    // init base variable
    protected $portal = 'portal_operator2';
    protected $portal_id;
    protected $com_portal;
    protected $com_user;
    protected $nav_id = 0;
    protected $nav_url = '';
    protected $parent_id = 0;
    protected $parent_selected = 0;

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
        $this->smarty->load_themes('adminlte31');
        // load model
        $this->load->model('pengaturan/m_preference');
        // load library
        $this->load->library("datetimemanipulation");
        $this->smarty->assign("dtm", $this->datetimemanipulation);
        // load javascript
        $this->smarty->load_javascript("adminlte31/plugins/jquery/jquery.min.js");
        $this->smarty->load_javascript("adminlte31/plugins/bootstrap/js/bootstrap.bundle.min.js");
        $this->smarty->load_javascript("adminlte31/js/adminlte.min.js");
        $this->smarty->load_javascript("adminlte31/js/demo.js");
        $this->smarty->load_javascript("adminlte31/js/pages/dashboard3.js");
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
        // default config
        $this->smarty->assign("config", $this->config);

        // load setting
        $this->load->model('m_settings');
        //
        $this->portal_id = $this->config->item($this->portal);
        // get user login
        $session = NULL;
        $_session = $this->m_settings->get_portal_by_id($this->portal_id);
        $session = $this->tsession->userdata($_session['portal_session']);
        if (!empty($session)) {
            $this->com_user = $this->m_account->get_user_profil([$session['user_id'], $session['role_id']]);
            // images
            // $filepath = 'resource/doc/images/users/' . $this->com_user['operator_photo'];
            // if (!is_file($filepath)) {
            //     $filepath = 'resource/doc/images/users/default.png';
            // }
            // $this->com_user['operator_photo'] = base_url() . $filepath;

            $roles = $this->m_account->get_user_authorities($this->com_user['user_id']);

            $this->com_user['roles'] = $roles;
            $this->smarty->assign("com_user", $this->com_user);
            $this->smarty->assign("roles", array_column($roles, 'role_id'));
        }

        $this->smarty->assign("nav_active", $this->nav_id);
        // tanggal
        $now = $this->datetimemanipulation->get_date_indonesia(date("Y-m-d"), 'in');
        $date_now = $now['hari'] . ", " . $now['tanggal'] . " " . $now['bulan'] . " " . $now['tahun'];
        $this->smarty->assign("tanggal", $date_now);
        // task manager not in
        $have_task = [12, 13, 14, 15, 17, 22, 23];
        $this->smarty->assign("have_task", $have_task);
        // display global link
        self::_display_base_link();
        // display site title
        self::_display_site_title();
        // display current page
        self::_display_current_page();
        // check security
        self::_check_authority();
        // display sidebar navigation
        self::_display_sidebar_navigation();
        // display top shortcut
        self::_display_breadcrumb();
        //self::_display_top_shortcut();
    }

    /*
     * Method layouting base document
     * diperbolehkan untuk dioverride pada class anaknya
     */

    protected function display($tmpl_name = 'base/operator/document.html')
    {
        // --
        $this->smarty->assign("template_sidebar", "base/operator/sidebar.html");
        // set template
        $this->smarty->display($tmpl_name);
    }

    //
    // base private method here
    // prefix ( _ )
    // base link
    private function _display_base_link()
    {
    }

    // site title
    private function _display_site_title()
    {
        // site data
        $this->com_portal = $this->m_site->get_site_data_by_id($this->portal_id);
        if (!empty($this->com_portal)) {
            $this->smarty->assign("site", $this->com_portal);
        }
    }

    // get current page
    private function _display_current_page()
    {
        // get current page (segment 1 : folder, segment 2 : controller)
        $url_menu = $this->uri->segment(1) . '/' . $this->uri->segment(2);
        // $url_menu .= !empty($this->uri->segment(3)) ? '/' . $this->uri->segment(3) : '';
        $url_menu = trim($url_menu, '/');
        $url_menu = empty($url_menu) ? $this->config->item('default_operator') : $url_menu;
        $result = $this->m_site->get_current_page([$url_menu]);
        if (!empty($result)) {
            $this->smarty->assign("page", $result);
            $this->nav_id = $result['nav_id'];
            $this->nav_url = $result['nav_url'];
            $this->parent_id = $result['parent_id'];
        }
    }

    // authority
    protected function _check_authority()
    {
        // default rule tp
        $this->role_tp = ["C" => "0", "R" => "0", "U" => "0", "D" => "0"];
        // check
        if (!empty($this->com_user)) {
            // user authority
            $params = [$this->com_user['user_name'], $this->nav_id, $this->portal_id];
            $role_tp = $this->m_site->get_user_authority_by_nav($params);
            // get rule tp
            $i = 0;
            foreach ($this->role_tp as $rule => $val) {
                $N = substr($role_tp, $i, 1);
                $this->role_tp[$rule] = $N;
                $i++;
            }
        } else {
            // tidak memiliki authority
            die('as');
            redirect('login/forbidden');
        }
    }

    // set rule per pages
    protected function _set_page_rule($rule = '')
    {
        if (!isset($this->role_tp[$rule]) or $this->role_tp[$rule] != "1") {
            // redirect to forbiden access
            die('pio');
            redirect('login/forbidden');
        }
    }

    // sidebar navigation
    private function _display_sidebar_navigation()
    {
        $html = "";
        // get data
        $params = [$this->portal_id, $this->com_user['user_name'], $this->portal_id, 0];
        $rs_id = $this->m_site->get_navigation_user_by_parent_custom($params);

        if ($rs_id) {
            $html = '';
            foreach ($rs_id as $rec) {
                // parent active
                $parent_active = '';
                $this->parent_selected = self::_get_parent_group($this->parent_id, 0);
                if ($this->parent_selected == 0) {
                    $this->parent_selected = $this->nav_id;
                }
                // icon
                $icon = "resource/doc/images/nav/default.png";
                if (is_file("resource/doc/images/nav/" . $rec['nav_icon'])) {
                    $icon = "resource/doc/images/nav/" . $rec['nav_icon'];
                }
                // get child navigation
                $url_parent = site_url($rec['nav_url']);
                $arrow = "";
                $child = $this->_get_child_navigation($rec['nav_id']);
                $treeview = "";
                if (!empty($child)) {
                    $url_parent = '#';
                    $arrow = '<i class="right fas fa-angle-left"></i>';
                    $treeview = "has-treeview ";
                }
                // parent active
                $is_active = '';
                if ($this->parent_selected == $rec['nav_id']) {
                    $treeview .= "menu-open";
                    $is_active = "active";
                }
                // data
                $html .= '<li class="nav-item ' . $treeview . '">';
                $html .=
                    '<a href="' .
                    $url_parent .
                    '" class="nav-link ' .
                    $is_active .
                    '"><i class="fa fas ' .
                    $rec['nav_icon'] .
                    '"></i> 
                        <p><span>' .
                    $rec['nav_title'] .
                    '</span></p>'.$arrow.'</a>';
                $html .= $child;
                $html .= '</li>';
            }
        }

        $this->smarty->assign("list_sidebar_nav", $html);
    }

    // get child
    private function _get_child_navigation($parent_id = '')
    {
        $html = "";
        // get parent selected
        $parent_selected = self::_get_parent_group($this->parent_id, $parent_id);
        if ($parent_selected == 0) {
            $parent_selected = $this->nav_id;
        }

        // if parent selected then show child
        $expand = '';
        $top = self::_get_parent_group($this->parent_id, 0);
        if ($parent_id == $top) {
            $expand = ' menu-open';
        }
        // --
        $params = [$this->portal_id, $this->com_user['user_name'], $this->portal_id, $parent_id];
        $rs_id = $this->m_site->get_navigation_user_by_parent_custom($params);
        if ($rs_id) {
            $html = '<ul class="nav nav-treeview">';
            foreach ($rs_id as $rec) {
                $is_active = "";
                // selected
                if ($rec['nav_id'] == $parent_selected) {
                    $selected = 'nav-item active';
                    $this->_display_tabs($parent_selected);
                    $is_active = "active";
                } else {
                    $selected = "nav-item";
                }
                if (empty($rec['nav_icon'])) {
                    $rec['nav_icon'] = "fa-caret-right";
                }
                // display tabs
                $params = [$this->portal_id, $this->com_user['user_name'], $this->portal_id, $parent_selected];
                $childs = $this->m_site->get_navigation_user_by_parent_custom($params);

                // $url = !empty($childs) ? $childs[0]['nav_url'] : $rec['nav_url'];
                // $url_parent = site_url($url);
                $url_parent = site_url($rec['nav_url']);
                // child
                $child = $this->_get_child_navigation($rec['nav_id']);
                $treeview = "";
                $arrow = "";
                if (!empty($child)) {
                    $url_parent = '#';
                    $arrow = '<i class="right fas fa-angle-left"></i>';
                    $treeview = "has-treeview ";
                }
                $treeview .= $expand;
                // parse
                $html .= '<li class="' . $selected . ' '. $treeview .'">';
                $html .= '<a href="' . $url_parent . '" title="' . $rec['nav_desc'] . '" class="nav-link '. $is_active .'"><i class="fa far far fa-circle nav-icon" style="color:#' . $rec['nav_icon_color'] . '"></i>';
                $html .= "<p>" . $rec['nav_title'] . "</p>" . $arrow;
                $html .= '</a>';
                $html .= $child;
                $html .= '</li>';
            }
            $html .= '</ul>';
        }
        return $html;
    }

    // utility to get parent selected
    private function _get_parent_group($int_nav = '', $int_limit = '')
    {
        $selected_parent = 0;
        $result = $this->m_site->get_menu_by_id($int_nav);
        if (!empty($result)) {
            if ($result['parent_id'] == $int_limit) {
                $selected_parent = $result['nav_id'];
            } else {
                return self::_get_parent_group($result['parent_id'], $int_limit);
            }
        } else {
            $selected_parent = $int_nav;
        }
        return $selected_parent;
    }

    // shortcut
    private function _display_top_shortcut()
    {
        //$total = $this->m_task->get_total_detail_task_waiting($this->com_user['role_id']);
        //$this->smarty->assign("total_task_waiting", $total);
    }

    private function _display_tabs($parent_selected = '')
    {
        $params = [$this->portal_id, $this->com_user['user_name'], $this->portal_id, $parent_selected];
        $childs = $this->m_site->get_navigation_user_by_parent_custom($params);
        $result = $this->m_site->get_menu_by_id($parent_selected);
        $html = '';
        if (!empty($childs)) {
            $html .= '<ul class="nav nav-tabs">';
            foreach ($childs as $key => $child) {
                $active = '';
                if ($this->nav_url == $child['nav_url']) {
                    $active = 'class="active"';
                }
                $html .= '<li ' . $active . ' ><a href="' . site_url($child['nav_url']) . '">' . $child['nav_title'] . '</a></li>';
            }
            $html .= '</ul>';
            $this->smarty->assign("tabs", $html);
        }
        return $childs;
    }

    private function _display_breadcrumb()
    {
        $result = $this->m_site->get_menu_by_id($this->nav_id);
        $breadcrumb = $this->_get_menu_parents($result);
        $html = "<ol class='breadcrumb float-sm-right'>";
        do {
            $icon = !empty($breadcrumb['nav_icon']) ? "<i class='fa " . $breadcrumb['nav_icon'] . "'></i>" : '';
            $url = !empty($breadcrumb['nav_url']) ? site_url($breadcrumb['nav_url']) : "";
            if (!empty($breadcrumb['child'])) {
                $html .= "<li class='breadcrumb-item'><a href='" . $url . "'>" . $icon . $breadcrumb['nav_title'] . "</a></li>";
            } else {
                $html .= "<li class='breadcrumb-item active'>" . $breadcrumb['nav_title'] . "</li>";
            }
            $breadcrumb = !empty($breadcrumb['child']) ? $breadcrumb['child'] : '';
        } while (!empty($breadcrumb));
        $html .= "</ol>";

        $this->smarty->assign("breadcrumb", $html);
    }

    private function _get_menu_parents($child = '')
    {
        $parent = $this->m_site->get_menu_by_id($child['parent_id']);
        // echo "<pre>";
        // print_r($child);
        if (!empty($parent)) {
            $parent['child'] = $child;
            return self::_get_menu_parents($parent);
        } else {
            return $child;
        }
    }
}
