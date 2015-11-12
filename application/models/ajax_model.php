<?php
    class Ajax_model extends CI_Model {
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function getdonator()
        {
            $result = $this->db->query("SELECT * FROM donator order by level DESC , rand()");
            return $result->result_array();
        }
    }
