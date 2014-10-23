<?php
class login
{
    //private
    private $adminID = "";
    private $password = ""; 
    private $sqlquery = "";
    //public
    public function __construct()
    {
<<<<<<< HEAD
        if ($_SERVER["REQUEST_METHOD"] != "post"){
=======
        if (!$_SERVER["REQUEST_METHOD"] == "post"){
>>>>>>> 3144816f4de572ddf0412e8e79617a6ec956d06f
            $this->errorinfo("你无权访问这个网站！");
        } else {
            $this->adminID = $this->Fliter($_POST["adminID"]);
            $this->password = $this->Fliter($_POST["password"]);
            $this->sqlquery = "SELECT * FROM adminlist where 
                               adminID = '$this->adminID'";
            $this->sqlcheck();
        }

    }

    public function sqlcheck()
    {
        $mysqli = new mysqli(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
        if ($mysqli->connect_errno){
            $this->errorinfo("服务器连接失败！请稍候重试！.<br>");
        } else {
            $result = $mysqli->query($this->sqlquery);
            $row = $result->fetch_assoc();
            if (!isset($row)){
                $this->errorinfo("登录失败！用户名或密码错误！");
            } elseif ($row["password"] != $this->password){
                $this->errorinfo("登录失败！用户名或密码错误!");
            } else {
                echo "登录成功!";
                $this->setsession();
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

    public function errorinfo($error)
    {
        echo "登录失败！($error) . <br>";
        session_destroy();
        die();
    }

    public function setsession()
    {
        if (isset($_SESSION["admin"])){
            unset($_SESSION["admin"]);
        }
        $_SESSION["admin"] = $this->adminID; 
    }

}

?>