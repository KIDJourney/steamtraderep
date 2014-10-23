<?php
class manage
{

    //private
    private $namelist = array("tiebaid"=>"贴吧ID :","steamid"=>"steam ID :","64weiid"=>"64位ID :","taobaoid"=>"淘宝ID :","zhifubaomail"=>"支付宝信息 :","zhifubaoid"=>"支付宝ID :");
    private tiebaid = "" ;
    private steamid = "" ;
    private 64weiid = "" ;
    private taobaid = "" ;
    private zhifubaomail = "" ;
    private zhifubaoid = "" ;
    private admin = "";
    //public
    public function __construct()
    {

        if ($_SERVSER["REQUEST_METHOD"] != "POST"){
            $this->errorinfo("你无权访问这个网站! . ");
        } else {
            $this->tiebaid = $_POST[""]
        }
    }
    public function errorinfo($error)
    {
        session_destroy();
        die("访问错误！: $error . <br>");

    }
}

?>