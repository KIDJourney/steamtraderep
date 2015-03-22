<?php
/**
 * Created by PhpStorm.
 * User: KIDJourney
 * Date: 2015/3/17
 * Time: 22:34
 */
    class Comment_model extends CI_Model {

        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function getcomment()
        {
            $query = $this->db->query("SELECT * FROM comment order by date limit 0 , 10");
            return $query->result_array();
        }

    }