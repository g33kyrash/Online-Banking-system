<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<?php
include '_inc/dbconn.php';
$name=  mysql_real_escape_string($_REQUEST['staff_name']);
$gender=  mysql_real_escape_string($_REQUEST['staff_gender']);
$dob=  mysql_real_escape_string($_REQUEST['staff_dob']);
$status=  mysql_real_escape_string($_REQUEST['staff_status']);
$dept=  mysql_real_escape_string($_REQUEST['staff_dept']);
$doj=  mysql_real_escape_string($_REQUEST['staff_doj']);
$address=  mysql_real_escape_string($_REQUEST['staff_address']);
$mobile=  mysql_real_escape_string($_REQUEST['staff_mobile']);
$email= mysql_real_escape_string($_REQUEST['staff_email']);
$password=  mysql_real_escape_string($_REQUEST['staff_pwd']);

$sql="insert into staff values('','$name','$dob','$status','$dept','$doj','$address','$mobile',
    '$email','$password','$gender','')";
mysql_query($sql) or die("the email-id is already registered");
header('location:admin_hompage.php');
?>