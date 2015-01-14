<?php
    class Search_model extends CI_Model {

        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function getsearch($userinput)
        {  
            $query = array("tiebaid"=>$userinput,"steamid"=>$userinput,"idwei64"=>$userinput,"taobaoid"=>$userinput,"zhifubaomail"=>$userinput,"zhifubaoid"=>$userinput);
            $this->db->or_like($query);
            $result = $this->db->get("trickerlist");
            return $result->result_array();     
        }
    }