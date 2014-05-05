<?php

include('connect.php');
$module = $_GET['Modules'];


echo $module;


$query = "SELECT * FROM `quiz` WHERE `Module` = '$module'";
$result = mysql_query($query);
//echo $result;
$count = mysql_num_rows($result);
echo $count;

if ($count > 0)

 { 
 
 echo "Quiz Found";
header( 'Location: staff_module_link.php?quiz="yes"&module='.$module) ;
 
 
 
 }
 
 else
 
 {
 
 echo "Quiz not found";
 header( 'Location: staff_module_link.php?quiz="no"&module='.$module) ;
 
 }



?>
