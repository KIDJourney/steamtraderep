<?php 
    class Manage extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->model('manage_model');
            $this->load->library('session');
        }

        public function index()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('adminID','账号','required');
            $this->form_validation->set_rules('password','密码','required');
            $this->form_validation->set_rules('humancheck','验证码','required');
            if($this->session->userdata('adminID') === false){
                if ($this->form_validation->run() === false){
                    $data['humancheck'] = $this->humancheck();
                    $this->load->view('template/header');
                    $this->load->view('manage/login',$data); 
                } else {
                    $result = $this->manage_model->checklogin();
                    if (isset($result)){
                        $this->session->set_userdata('adminID', $result);
                        redirect(base_url('manage/managepage'));
                    }
                }
            } else {
                redirect(base_url('manage/managepage'));
            }
        }

        public function managepage()
        {
            $data['status'] = '';
            if (!$this->session->userdata('adminID')){
                redirect(base_url('manage'));
            } else {
                $this->load->library('form_validation');
                $this->form_validation->set_message('required','%s不能为空！');
                $this->form_validation->set_rules('reason','添加原因','required');
                if ($this->form_validation->run() === false){
                    $this->load->view('manage/manage',$data);
                } else {
                    if ($this->manage_model->addinfo()){
                        $data['status'] = '添加成功!';
                    } else {
                        $data['status'] = '添加失败，服务器错误。';
                    }
                    $this->load->view('manage/manage',$data);
                }
            }
        }
        
        public function humancheck()
        {
            $this->load->helper('captcha');
            $vals = array(
                'img_path'=>'./captcha/',
                'img_url'=>base_url('captcha/') . '/',
                'font_path'=>'./path/to/fonts/texb.tff',
                'img_width'=>'150',
                'img_height'=>'30',
                'expiration'=>5
            );
            $cap = create_captcha($vals);
            $this->session->set_userdata('humancheck',strtolower($cap['word']));
            return $cap;
        }


}
