<?php
    class Search extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('search_model');
        }

        public function index()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['title'] = "SteamTradeRep";
            $this->form_validation->set_rules('userinput','title plz','required');

            if ($this->form_validation->run() === false){
                $this->load->view('template/header',$data);
                $this->load->view('template/topbar');
                $this->load->view('search/searchpage');
            } else {    
                $result = $this->search_model->search();
                if (isset($result[0])){
                    foreach ($result as $key => $value) {
                        $data['json']['result'][$key] = $value;
                    }
                    $data['json']['status'] = 1;
                } else {
                    $data['json']['status'] = 0;
                }
                $data['json'] = json_encode($data['json']);
                // $this->load->view("template/header");
                $this->load->view("search/searchresult",$data);
            }    
        }

        public function donator()
        {
            $this->load->view('template/header');
            $this->load->view('template/topbar');
            $this->load->view('search/donatorinfo');
        }
    }