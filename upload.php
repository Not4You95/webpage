<?php
include('config.php');
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD,DB_NAME) or die("Unable to connect to MySQL");
//0: value1
//1: value2
//2: pressure
//3: light

if (mysqli_real_escape_string($conn,$_POST['value1']) ==NULL ||mysqli_real_escape_string($conn,$_POST['value1']) ==NAN){
$value1="NULL";
}else{
$value1=mysqli_real_escape_string($conn,$_POST['value1']);
}
if (mysqli_real_escape_string($conn,$_POST['value2']) ==NULL){
$value2="NULL";
}else{
$value2=mysqli_real_escape_string($conn,$_POST['value2']);
}
if (mysqli_real_escape_string($conn,$_POST['pressure']) ==NULL){
$pressure="NULL";
}else{
$pressure=mysqli_real_escape_string($conn,$_POST['pressure']);
}
if (mysqli_real_escape_string($conn,$_POST['light']) ==NULL){
$light="NULL";
}else{
$light=mysqli_real_escape_string($conn,$_POST['light']);
}
$logdate= date("Y-m-d H:i:s");

$insertSQL="INSERT into ".TB_ENV." (logdate,value1,value2,pressure,light) values ('".$logdate."',".$value1.",".$value2)";
mysqli_query($conn,$insertSQL) or die("INSERT Query has Failed - ".$insertSQL );

?>