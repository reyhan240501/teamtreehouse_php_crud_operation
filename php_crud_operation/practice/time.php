<?php

// echo date('m/d/y',strtotime(' -1 sunday'));
//                     echo ":";
//                     echo date('m/d/y',strtotime(' saturday'));

// $date="06/10/2020";
// $result=explode ("/", $date);
// $result_x=implode ("",$result);
// var_dump(checkdate($result[1],$result[0],$result[2]));



date_default_timezone_set("Asia/Jakarta");
echo "The time is " . date("h:i:sa");
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>