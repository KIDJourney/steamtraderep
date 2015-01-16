<?php
    class Test extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
        }

        public function index()
        {
            echo "This a test page";
        }

        public function viewtest()
        {
            $this->load->view("template/header");
            $this->load->view("template/new");
            $this->load->view("search/searchpage");
        }
        // function ajaxtest()
        // {
        //     $this->load->view("test/ajaxtest");
        // }

        function exittest()
        {
            echo 'fuck';
            exit();
            echo "can this be display ?";
            //test done
        }

        public function checksession()
        {
            echo "fuck <br>";
            echo $this->session->userdata('tryTime');
            if ($this->session->userdata('baned'))
                echo $this->session->userdata('baned');
        }

        public function cancelsession()
        {
            $this->session->unset_userdata('tryTime');
            $this->session->unset_userdata('baned');
        }

        public function crawlertest()
        {
            $url = "http://steamrep.com/search?q=KIDJourney";
            $this->load->model("crawler_model");
            echo $this->crawler_model->getUrlContent($url);
        }

        public function urlcc($str)
        {
            echo $str;
        }
        public function testget()
        {
            echo $_GET['content'];
        }

    }