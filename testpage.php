<?php

$test = array("result"=>array(array("username"=>1,"name"=>"sb"),
                              array("testname"=>2,"name"=>"sb2"),
                              array("testinfo"=>3,"name"=>"sb3")));
echo json_encode($test);

$test = array("testarray"=>array());
for ($i = 0 ; $i < 10 ; $i ++){
    array_push($test["testarray"],array($i));
}
print_r($test);


?>