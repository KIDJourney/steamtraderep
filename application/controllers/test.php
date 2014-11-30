<?php
    class Test extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }

        function ajaxtest()
        {
            $this->load->view("test/ajaxtest");
        }
    }