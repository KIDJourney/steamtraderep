<?php 
    class Manage_model extends CI_Model {
        function __construct()
        {
            parent::__construct();
            $this->load->database();
            $namelist = array("tiebaid"=>"贴吧ID :","steamid"=>"steam ID :","64weiid"=>"64位ID :","taobaoid"=>"淘宝ID :","zhifubaomail"=>"支付宝信息 :","zhifubaoid"=>"支付宝ID :");
        }

        public function checklogin()
        {
            $username = $this->input->post('adminID');
            $password = $this->input->post('password');
            $humancheck = $this->input->post('humancheck');
            if ($humancheck!=$this->session->userdata('humancheck')){
                return false;
            }
            $result = $this->db->query("SELECT * FROM adminlist WHERE adminID = ?",array($username));
            if ($data = $result->result_array()){
                if ($data[0]['password'] == $password) {
                    return $username;
                }
                return false;
            } else {
                return false;
            }
        }

        public function addinfo()
        {
            $trickerdata = array('tiebaid'=>$this->input->post('tiebaid'),
                               'steamid'=>$this->input->post('steamid'),
                               'idwei64'=>$this->input->post('idwei64'),
                               'taobaoid'=>$this->input->post('taobaoid'),
                               'zhifubaomail'=>$this->input->post('zhifubaomail'),
                               'zhifubaoid'=>$this->input->post('zhifubaoid'),
                               'reason'=>$this->input->post('reason'),
                               'adder'=>$this->session->userdata('adminID'));
            if($this->db->insert('trickerlist',$trickerdata)){
                return true;
            }
            return false;
        }
}