<?php
    class donator extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }

        public function index()
        {
            $data['title'] = '捐助者名单';
            $topbarinfo['donator'] = 'active';
            $this->load->view('template/header',$data);
            $this->load->view('template/topbar',$topbarinfo);
            $this->load->view('donator/donatorinfo');
        }

}