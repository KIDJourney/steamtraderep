<?php
class manage
{

    //private
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