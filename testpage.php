    <?php
        $steamid = "%ab%";
        $tiebaid = "%SB%";
        $mysqli = new mysqli(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
        if ($mysqli->connect_errno){
            die ("connect error" );
        }       
        $pQuery = "SELECT * FROM trickerlist WHERE steamid like ? or tiebaid like ?";
        if ($pQProcess = $mysqli->prepare($pQuery)){
            $parameterList = array('1','2','3','4','5','6','7','8');
            $pQProcess->bind_param("ss",$tiebaid,$tiebaid);
            $pQProcess->execute();
            $pQProcess->bind_result($parameterList[0],$parameterList[1],$parameterList[2],$parameterList[3],$parameterList[4],$parameterList[5],$parameterList[6],$parameterList[7]);
            while ($pQProcess->fetch()){
                print_r($parameterList);
            }
            $pQProcess->close();
        }
        $mysqli->close();
    ?>