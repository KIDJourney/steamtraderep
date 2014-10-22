<?php

class login()
{
    //private
    private $adminID;
    private $password; 
    private $sqlquery;
    //public
    public function __constuct()
    {
        if (!$_SERVER["REQUEST_METHOD"] == "POST"){
            die("你无权访问这个网站！");
        } else {
            $this->adminID = $this->Fliter($_POST["adminID"]);
            $this->password = $this->Fliter($_POST["password"]);
            $this->sqlquery = "SELECT * FROM adminlist where 
                               adminID = '$this->adminID'";   
        }

    }

    public function sqlcheck()
    {
        $mysqli = new mysqli(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
        if ($mysqli->connect_errno){
            die("服务器连接失败！请稍候重试！.<br>");
        } else {
            $result = $mysqli->query($this->sqlquery);
            $row = $result->fetch_assoc();
            if (!$row){
                die("登录失败！用户名或密码错误！");
            } elseif ($row["password"] != $this->password){
                die("登录失败！用户名或密码错误！");
            } else {
                echo "登录成功!" ;   // to be continued
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

?>