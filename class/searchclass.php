<?php

class search
{
//private
    private $list = array("tiebaid","steamid","64weiid","taobaoid","zhifubaomail","zhifubaoid");
    private $userinput = $_POST["userinput"];
//public
    public function __construct()
    {
        if (!$_SERVER["REQUEST_METHOD"] == "POST"){
            die("No right to request");
        } else {

        }
    }

    public function sqlserach()
    {
        $mysqli = new mysqli(SAE_MYSQL_HOST.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
        if ($mysqli->connect_errno){
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno , ")" . $mysqli->connect_error;            
        }
        echo $mysqli->host_info . "\n";
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