<?php
    class Search_model extends CI_Model {

        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function getsearch($userinput , $flag)
        {
            $query = array("tiebaid"=>$userinput,"steamid"=>$userinput,"idwei64"=>$userinput,"taobaoid"=>$userinput,"zhifubaomail"=>$userinput,"zhifubaoid"=>$userinput);
            $this->db->or_like($query);
            $result = $this->db->get("trickerlist");
            $result = $result->result_array();
            if ($flag && count($result) > 0 && count($result) < 5){
                $this->addrecent($userinput);
            }
            return $result;
        }


        public function addrecent($userinput)
        {
            $sql = "INSERT INTO recent (content, rate)
                    VALUES(". $this->db->escape($userinput) .", 0)
                    ON DUPLICATE KEY
                    UPDATE
                    rate=rate+1";
            $this->db->query($sql);
        }

        public function getrecent()
        {
            $this->db->order_by('rate','desc');
            $result = $this->db->get('recent',5,0);
            return $result->result_array();
        }

        public function cleanrecent()
        {
            $this->db->empty_table('recent');
        }
    }
