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
        <input type = "text" name = "tiebaid" > <br>
        <input type = "text" name = "steamid" > <br>
        <input type = "text" name = "64weiid" > <br>
        <input type = "text" name = "taobaid" > <br>
        <input type = "text" name = "zhifubaomail" > <br>
        <input type = "text" name = "zhifubaoid" > <br>
        <input type = "submit" > <br>
    </form>
</body>
</html>
