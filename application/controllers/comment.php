<?php
/**
 * Created by PhpStorm.
 * User: kidjourney
 * Date: 3/22/15
 * Time: 11:19 PM
 */
    class comment extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('search_model');
            $this->load->library('session');
        }

        public function index()
        {
            if($this->bancheck()){
                return;
            }
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('comment/comment.php');
        }

        function bancheck()
        {
            if ($this->session->userdata('baned')){
                $this->load->view('template/ban');
                return true;
            }
        }
    }