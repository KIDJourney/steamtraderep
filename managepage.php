<?php
session_start();
?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<?php
if (!isset($_SESSION["admin"])){
    die("你无权访问这个页面! .");
    sleep(2);
    relocation();
} else {
    include("template/managepage.html");
    include("class/manageclass.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $manageprocess = new manage;
}

function relocation()
{
    $js = <<< js
 <script language="JavaScript"> self.location='index.html'; </script>
js;
}
?>
