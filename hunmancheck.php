<?php
    session_start();
?>
<html>
<body>
    <img src="class/hunmancheck.php">
    <?php
        echo $_SESSION["VCODE"];
    ?>
    <form action="<?php $_SERVER['PHP_SELF'];?>"method = "POST">
        <input type="text" name="input">
        <input type="submit" >
    </form> 
</body>
</html>

<?php

    if ($_POST["input"]==$_SESSION["VCODE"]){
        echo "YES";
    }

?>