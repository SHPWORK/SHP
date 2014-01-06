<?php

$argv1 = $_POST['argv1'];
$argv2 = $_POST['argv2'];

$output = shell_exec("/home/zuoyan/MY_PROJECT/SHP/var/www/short_image/short.bash"." ".$argv1." ".$argv2);

//$backValue = array();
//$backValue[0] = "012";    
//$backValue[1] = "ABC";
     
//echo json_encode($backValue);
echo "spongebob";

?>
