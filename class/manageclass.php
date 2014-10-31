<?php
class manage
{
    //private
    private $namelist = array("tiebaid"=>"贴吧ID :","steamid"=>"steam ID :","idwei64"=>"64位ID :","taobaoid"=>"淘宝ID :","zhifubaomail"=>"支付宝信息 :","zhifubaoid"=>"支付宝ID :");
    private $tiebaid = "" ;
    private $steamid = "" ;
    private $idwei64 = "" ;
    private $taobaid = "" ;
    private $zhifubaomail = "" ;
    private $zhifubaoid = "" ;
    private $admin = "";
    private $sqlquery = "";
    private $reason = "";
    //public
    public function __construct()
    {
            $this->tiebaid = $_POST["tiebaid"];
            $this->steamid = $_POST["steamid"];
            $this->idwei64 = $_POST["64weiid"];
            $this->taobaoid = $_POST["taobaoid"];
            $this->zhifubaomail = $_POST["zhifubaomail"];
            $this->zhifubaoid = $_POST["zhifubaoid"];
            $this->reason = $_POST["reason"]; 
            $this->admin = $_SESSION['admin'];
            $this->sqlquery = "INSERT INTO trickerlist (tiebaid , steamid , 64weiid , taobaoid , zhifubaomail , zhifubaoid ,adder , reason)
                                            VALUES ('$this->tiebaid','$this->steamid','$this->idwei64','$this->taobaoid','$this->zhifubaomail','$this->zhifubaoid','$this->admin','$this->reason')";
            if (empty($this->reason)){
                die("原因不可以为空！");
            }
            $this->sqlinsert();
    }

    public function errorinfo($error)
    {
        session_destroy();
        die("访问错误！: $error . <br>");
    }

    public function sqlinsert()
    {
        $mysqli = new mysqli(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
        if ($mysqli->connect_errno){
            $this->errorinfo("数据库连接失败，请稍候再试。");
        } else {
            $mysqli->query($this->sqlquery);
            if ($mysqli->errno){
                die("插入失败！请稍候重试！");
            } else {
                echo "插入成功 .<br>";
            }
        }
        $mysqli->close();
    }

}

?>