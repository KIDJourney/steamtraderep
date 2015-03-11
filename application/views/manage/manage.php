<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
    <form action="managepage" method="POST">
        贴吧ID :<input type="text" name="tiebaid"> <br>
        steamID:<input type="text" name="steamid"> <br>
        64位ID :<input type="text" name="idwei64"> <br>
        淘宝ID :<input type="text" name="taobaoid"> <br>
        支付宝信息 :<input type="text" name="zhifubaomail"> <br>
        支付宝ID :<input type="text" name="zhifubaoid" > <br>
        添加原因 :<input type="text" name="reason" > <br>
        <input type="submit"> <br>
    </form>
    <?php echo validation_errors(); ?>
    <?php if(isset($status)) echo $status ?>
</body>
</html>