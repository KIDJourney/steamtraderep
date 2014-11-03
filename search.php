<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
    <form id="search" action="<?php $_SERVER["PHP_SELF"];?>" method="post">
        <input type="text" name="userinput">
        <input type="submit" name="search">
    </form>
</body>
</html>

<?php
include("class/searchclass.php");
$serachprocess = new search();
echo <<<html
<br><button type="button" onclick="self.location='index.php'">返回</button>
html;
?>