<?php
function refreshcheck()
{
    if (isset($_SESSION["oldtime"])){
        if ((time() - $_SESSION["oldtime"]) < 3){
            die("Don't refresh too quickly !" . "<br>");
        } else {
            $_SESSION["oldtime"] = time();
        }
    } else {
        $_SESSION["oldtime"] = time();
    }
}
?>