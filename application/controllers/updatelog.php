<?php
/**
 * @Author: KIDJourney
 * @Date:   2015-08-28
 * @Last Modified by:   KIDJourney
 * @Last Modified time: 2015-08-29
 */
class Updatelog extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

    }

    function index()
    {
        $data['title'] = "更新履历";
        $this->load->view('template/header',$data);
        $this->load->view('template/topbar');
    }
}