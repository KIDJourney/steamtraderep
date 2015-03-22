<?php
    class Ajax extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->model('ajax_model');
            $this->load->model('comment_model');
        }

        public function donator()
        {
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode($this->ajax_model->getdonator()));
            // print(json_encode(array('donate'=>
            //     $this->ajax_model->getdonator())));
        }

        public function getcomment() {
            $data = $this->comment_model->getcomment();
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode($data));
        }
    }