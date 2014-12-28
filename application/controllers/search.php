<?php
    class Search extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('search_model');
            $this->load->library('session');
        }

        // public function index()
        // {
        //     echo "There are something wrong with our website. <br>
        //         KIDJourney is busy on fixing it .";
        // }
        
        public function index()
        {
            if ($this->bancheck()){
                return;
            }
            $this->session->unset_userdata('adminID');
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
                $data['title'] = "查询结果";
                $data['json'] = json_encode($data['json']);
                $this->load->view("template/header",$data);
                $this->load->view("search/searchresult",$data);
            }    
        }

        public function findall($userinput)
        {
            $this->load->helper('form');
            if ($this->bancheck()){
                return;
            }
            $data['title'] = "SteamTradeRep";
            $result = $this->search_model->findall($userinput);
            if (isset($result[0])){
                foreach ($result as $key => $value) {
                    $data['json']['result'][$key] = $value;
                }
                $data['json']['status'] = 1;
            } else {
                $data['json']['status'] = 0;
            }
            $data['title'] = "查询结果";
            $data['json'] = json_encode($data['json']);
            $this->load->view("template/header",$data);
            $this->load->view("search/searchresult",$data);
        }

        public function fuck($input = NULL)
        {
            if($input == NULL){
                redirect(base_url());
            }
            // $result = $this->search_model->serach();
            // if (isset($result[0])){
            //     foreach ($result as $key=>$value){
            //         $data['json']['result'][$key] = $value;
            //     }
            //     $data['json']['status'] = 1;
            // } else {
            //     $data['json']['status'] = 0;
            // }
            // $this->load->view('template/header',$data);
            // $this->load->view('search/searchresult'$data);
        }


        public function donator()
        {
            $data['title'] = "捐助者名单";
            $this->load->view('template/header',$data);
            $this->load->view('template/topbar');
            $this->load->view('search/donatorinfo');
        }

        function bancheck()
        {
            if ($this->session->userdata('baned')){
                $this->load->view('template/ban');
                return true;
            }
        }
    }