<?php

class report
{
    // private 
    private $tiebaid = "" ;
    private $steamid = "" ;
    private $idwei64 = "" ;
    private $taobaid = "" ;
    private $zhifubaomail = "" ;
    private $zhifubaoid = "" ;
    private $admin = "" ;
    private $reason = "" ;
    private $sqlquery = "" ;
    //public
    public function __construct()
    {       
            $this->sqlquery = "INSERT TO report (tiebaid, steamid, 64weiid, taobaid, zhifubaomail, zhifubaoid, reason)
                                VALUES ($this->tiebaid, $this->steamid, $this->idwei64, $this->taobaid, $this->zhifubaomail, $this->zhifubaoid, $this->reason)";
            $this->tiebaid = $this->filte($_POST["tiebaid"]);
            $this->steamid = $this->filte($_POST["steamid"]);
            $this->idwei64 = $this->filte($_POST["64weiid"]);
            $this->taobaoid = $this->filte($_POST["taobaoid"]);
            $this->zhifubaomail = $this->filte($_POST["zhifubaomail"]);
            $this->zhifubaoid = $this->filte($_POST["zhifubaoid"]);
            $this->reason = $this->filte($_POST["reason"]); 
            if(!is_numeric($this->reason) {
                die("请输入正确的帖子ID")；
            }
    }

    public function sqlinsert()
    {
        $mysqli = new mysqli(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
        if ($mysqli->errno){
            die("服务器连接失败，请稍候重试");
        } else {
            $mysqli->query($this->sqlquery);
            if ($mysqli->errno)
        }
    }



    public function filte($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


}





?>