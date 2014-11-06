<?php

class report
{
    //private 
    private $namelist = array("tiebaid"=>"贴吧ID :","steamid"=>"steam ID :","idwei64"=>"64位ID :","taobaoid"=>"淘宝ID :","zhifubaomail"=>"支付宝信息 :","zhifubaoid"=>"支付宝ID :");
    private $infoList = explode(' ',"tiebaid steamid idwei64 taobaoid zhifubaomail zhifubaoid reason");
    private $userInput = array();
    private $vcode = ;
    //public
    public function __construct()
    {
        for ($i = 0 ; $i < count($this->infoList) ; $i++){
            $this->userInput["$this->infoList[$i]"] = $_POST["$this->infoList[$i]"];

        }
    }
    public function filterinput($stringlist)
    {
        $filterConfig = array(
            
            )
    }




}


?>