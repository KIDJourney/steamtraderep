<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
</body>
</html>



<?php
$list = array("tiebaid","steamid","64weiid","taobaoid","zhifubaomail","zhifubaoid");
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    search();
} else {
    die("你无权访问这个网页！");
}

    function Fliter($input)
    {
        $input = (string)$input;
        $input = trim($input);
        $input = stripcslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    function search()
    {
        $userinput = Fliter($_POST["userinput"]);
        $con = mysql_connect(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
        if (!$con){
            die("服务器连接失败！" . "错误代码: " . mysql_error());
        }
        mysql_select_db(SAE_MYSQL_DB,$con);
        $sqlquery = "SELECT * FROM trickerlist where 
                     tiebaid like '%$userinput%' or 
                     steamid like '%$userinput%' or 
                     64weiid like '%$userinput%' or
                     taobaoid like '%$userinput%' or
                     zhifubaomail like '%$userinput%' or
                     zhifubaoid like '%$userinput%'";
        $result = mysql_query($sqlquery);
        if (!isset($result)){
            echo "未查询到相关结果。 . <br> 请谨慎交易。";
        } else {
            while ($row = mysql_fetch_array($result)){
                for ($i = 0 ; $i < 6 ; $i ++){
                    echo $row['$list[i]'] . "<br>";
                }
            echo "此人可能是骗子。.<br>请勿与他交易！。";
            mysql_close($con);
            }
        }
    }
?>