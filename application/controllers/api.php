<?php
/**
 * @Author: kidjourney
 * @Date:   2015-04-07 14:40:10
 * @Last Modified by:   kidjourney
 * @Last Modified time: 2015-04-07 14:55:56
 */
    class api extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            if ($this->input->ip_address() != '107.170.194.148'){
                show_404();
            }
            $this->load->model('search_model');
        }

        public function index()
        {
            if ($this->input->ip_address() == "107.170.194.148"){
                $this->search_model->cleanrecent();
                echo "Success";
            }
        }
    }