<?php
session_start();
if (!isset($_SESSION["admin"])){
    die("你无权访问这个页面! . <br>");
}
?>

    
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
    <form action = "$_SERVER['PHP_SELF']"  method = "post" >
        贴吧ID :<input type = "text" name = "tiebaid" > <br>
        steamID:<input type = "text" name = "steamid" > <br>
        64位ID :<input type = "text" name = "64weiid" > <br>
        淘宝ID :<input type = "text" name = "taobaid" > <br>
        支付宝信息 :<input type = "text" name = "zhifubaomail" > <br>
        支付宝ID   :<input type = "text" name = "zhifubaoid" > <br>
        <input type = "submit" > <br>
    </form>
</body>
</html>
<?php



?>