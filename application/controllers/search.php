<?php
    class search extends CI_Controller {
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
            $data['title'] = "SteamTradeRep";
            $this->load->view('template/header',$data);
            $this->load->view('template/topbar');
            $this->load->view('search/searchpage'); 
        }

        public function searchresult()
        {
            if (!isset($_GET["userinput"]) and strlen($_GET['userinput'] > 4)){
                $this->load->view('template/header',$data);
                $this->load->view('template/topbar');
                $this->load->view('search/searchresult'); 
            } else {
                $data['stickyform'] = $_GET["userinput"];
                $result = $this->search_model->getsearch($_GET["userinput"]);
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
                $this->load->view("template/topbar");
                $this->load->view("search/searchresult",$data);
            }
        }

        function bancheck()
        {
            if ($this->session->userdata('baned')){
                $this->load->view('template/ban');
                return true;
            }
        }
    }