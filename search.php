<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<script type="text/javascript">
    function relocation()
    {
        self.location='index.html'; 
    }
</script>
<body>
    <form id="search" action="<?php $_SERVER["PHP_SELF"];?>" method="post">
        <input type="text" name="userinput">
        <input type="submit" name="search">
    </form>
</body>
</html>

<?php
if (!$_SERVER["REQUEST_METHOD"] == "POST"){
    die("你无权访问这个网页！");
} else {
    include("class/searchclass.php");
    $serachprocess = new search();
    echo "<br><button type='button' onclick='relocation()'>返回</button>";
}
?>