<?php
    class Test extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
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
    }