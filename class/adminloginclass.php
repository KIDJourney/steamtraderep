<?php
class login
{
    //private
    private $adminID = " " ;
    private $passWord = " " ; 
    private $sqlQuery = " " ;
    //public
    public function __construct()
    {
            $this->adminID = $_POST["adminID"];
            if (empty($this->adminID)){
                $this->errorinfo("用户名或密码错误！");
            }
            $this->passWord = $_POST["password"];
            $this->sqlQuery = "SELECT * FROM adminlist where 
                               adminID =?";
            $this->sqlcheck();
    }

    public function errorinfo($error)
    {
        echo "登录失败！($error) <br>";
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
    
    public function sqlcheck()
    {
        $mysqli = new mysqli(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
        if ($mysqli->connect_errno){
            $this->errorinfo("服务器连接失败！请稍候重试！");
        } else {
            if (!$pQProcess = $mysqli->prepare($this->sqlQuery)){
                $this->errorinfo("服务器连接失败！请稍候重试！");
            } else {
                $username;
                $password;
                $pQProcess->bind_param("s",$this->adminID);
                $pQProcess->execute();
                $pQProcess->bind_result($username,$password);
                if ($pQProcess->fetch()){
                    if ($password != $this->passWord){
                        $this->errorinfo("用户名或密码错误！");
                    } else {
                        echo "登录成功！";
                        $this->setsession();
                        $this->relocation();
                    }
                } else {
                    $this->errorinfo("用户名或密码错误！");
                }
            }
        }
    }

    public function relocation()
    {
        sleep(1);
        $Jscript = <<<JS
        <script language="JavaScript"> self.location='managepage.php'; </script>
JS;
        echo $Jscript ;
    }
}

