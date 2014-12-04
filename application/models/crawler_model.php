<?php 
    class Crawler_model extends CI_Model {
        function __construct()
        {
            parent::__construct();
        }

        function getUrlContent($url)
        {
            $handle = fopen($url,"r");
            if ($handle){
                return stream_get_contents($handle);
            }
        }
        
        function 

    }

//sigh...