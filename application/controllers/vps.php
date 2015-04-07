<?php
/**
 * @Author: kidjourney
 * @Date:   2015-04-07 14:40:10
 * @Last Modified by:   kidjourney
 * @Last Modified time: 2015-04-07 14:55:56
 */
    class vps extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
        }

        public function index()
        {
            $topbarinfo['vps'] = 'active';
            $data['title'] = "Steam Vps Plan";
            $this->load->view('template/header',$data);
            $this->load->view('template/topbar',$topbarinfo);
            $this->load->view('vps/vpsindex');
        }
    }