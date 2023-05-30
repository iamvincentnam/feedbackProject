<?php  
$dbServerName='localhost';
$dbUserName ='root';
$dbPassWord ='';
$dbName ='daniel_krossing';
/* create a connection instance */

$connection = mysqli_connect($dbServerName,$dbUserName,$dbPassWord, $dbName);

//check the  connection

if($connection -> connect_error){
    die('connection failed'. $connection ->connect_error);
}
echo 'CONNECTED';
?>