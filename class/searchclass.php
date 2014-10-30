<?php
class search
{
//private
    private $nameList = array("贴吧ID :","steam ID :","64位ID :","淘宝ID :","支付宝信息 :","支付宝ID :","添加原因 :");
    private $userInput = '';
    private $sqlQuery = '';
//public
    public function __construct()
    {
        if (empty($this->userInput)){
            die("请勿输入空白信息!");
        }
        $this->userInput = "%".$_POST["userinput"]."%";
        $this->sqlQuery = "SELECT * FROM trickerlist where 
                 tiebaid like ? or 
                 steamid like ? or 
                 64weiid like ? or
                 taobaoid like ? or
                 zhifubaomail like ? or
                 zhifubaoid like ?";
        $this->sqlserach();
    }

    public function sqlserach()
    {
        $mysqli = new mysqli(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
        if ($mysqli->connect_errno){
            die("服务器连接失败！请稍候重试！.<br>");
        } else {
            $num = 1;
            $flag = 0;
            if (!$pQProcess = $mysqli->prepare($this->sqlQuery)){
                echo "prepare error";
            } else {
                $pQresult = array('s1','s2','s3','s4','s5','s6','s7','s8');
                $pQProcess->bind_param("ssssss",$this->userInput,$this->userInput,$this->userInput,$this->userInput,$this->userInput,$this->userInput);
                $pQProcess->execute();
                $pQProcess->bind_result($pQresult[0], $pQresult[1], $pQresult[2], $pQresult[3], $pQresult[4], $pQresult[5], $pQresult[6], $pQresult[7]);
                while($pQProcess->fetch()){
                    $flag = 1;
                    echo "查询结果#$num:<br>";
                    for ($i = 0 ; $i < 7 ; $i ++){
                        echo $this->nameList[$i] . $pQresult[$i] . "<br>";          
                    }
                    $num++;
                    echo "<br>";
                }
                if ($flag){
                    echo "<br>此人可能是骗子。<br>请勿与他交易！。<br> 请将相关信息反馈给吧务！";
                } else {
                    echo "没有找到相关信息，请谨慎进行交易！.<br>";
                }
                $pQProcess->close();
            }
        }
        $mysqli->close();
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
?>