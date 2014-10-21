<?php

class search
{
//private
    private $namelist = array("tiebaid"=>"贴吧ID :","steamid"=>"steam ID :","64weiid"=>"64位ID :","taobaoid"=>"淘宝ID :","zhifubaomail"=>"支付宝信息 :","zhifubaoid"=>"支付宝ID :");
    private $userinput = '';
    private $sqlquery = '';
//public
    public function __construct()
    {
        if (!$_SERVER["REQUEST_METHOD"] == "POST"){
            die("No right to request");
        } else {
            $userinput = $this->Fliter($_POST["userinput"]);
            $this->sqlquery = "SELECT * FROM trickerlist where 
                     tiebaid like '%$userinput%' or 
                     steamid like '%$userinput%' or 
                     64weiid like '%$userinput%' or
                     taobaoid like '%$userinput%' or
                     zhifubaomail like '%$userinput%' or
                     zhifubaoid like '%$userinput%'";
            $this->sqlserach();
        }
    }

    public function sqlserach()
    {
        $mysqli = new mysqli(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
        if ($mysqli->connect_errno){
            die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error);
        } else {
            $result = $mysqli->query($this->sqlquery);
            $row = $result->fetch_assoc();
            if (!isset($row)){
                echo "未查询到相关结果。 . <br> 请谨慎交易。";
            } else {
                foreach($row as $keys=>$value){
                    echo $this->namelist[$keys] . " " . $value . "<br>";
                }
                echo "<br>" . "此人可能是骗子。.<br>请勿与他交易！。<br> 请将相关信息汇报给吧务！" ;
            }
        }
    }

    public function Fliter($input)
    {
        $input = (string)$input;
        $input = trim($input);
        $input = stripcslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

}