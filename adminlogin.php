<?php
session_start();
die("shut down");
?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>


<?php

if (!isset($_SESSION["admin"])){
    include("template/adminlogin.html");
    include("class/adminloginclass.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        $loginprocess = new login();
} else {
    relocation();
}

function relocation()
{
    sleep(1);
    $Jscript = <<<JS
    <script language="JavaScript"> self.location='managepage.php'; </script>
JS;
    echo $Jscript ;
}

?>