<?php

class report
{
    //private 
    private $namelist = array("tiebaid"=>"贴吧ID :","steamid"=>"steam ID :","idwei64"=>"64位ID :","taobaoid"=>"淘宝ID :","zhifubaomail"=>"支付宝信息 :","zhifubaoid"=>"支付宝ID :");
    private $infolist = array();
    //public
    public function __construct()
    {
        foreach ($namelist as $key => $value) {
            $this->infolist["$key"] = "";
        }

    }

    public function filter




}