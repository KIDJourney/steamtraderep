<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
</html>



<?php
if (!$_SERVER["REQUEST_METHOD"] == "POST"){
    die("你无权访问这个网页！");
} else {
    include("class/searchclass.php");
    $serachprocess = new search();
}
?>