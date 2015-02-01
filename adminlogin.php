<?php 
session_start();
        
if(isset($_SESSION['admin_login'])) 
    header('location:admin_homepage.php');   
?>

<!DOCTYPE html>
<html>
    <head>
        <noscript><meta http-equiv="refresh" content="0;url=no-js.php"></noscript>  
        <meta charset="UTF-8">
        <title>Admin Login - Online Banking</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
<?php
include 'header.php'; ?>

<div class='content'>
<div class="user_login">
    <form action='' method='POST'>
        <table align="center">
            <tr><td><span class="caption">Admin Login</span></td></tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr><td>Username:</td></tr>
            <tr><td><input type="text" name="uname" required></td></tr>
            <tr><td>Password:</td></tr>
            <tr><td><input type="password" name="pwd" required></td></tr>
            <tr><td class="button1"><input type="submit" name="submitBtn" value="Log In" class="button"></td></tr>
        </table>
    </form>
            </div>
        </div>
          
<?php include 'footer.php';
?>
<?php 
include '_inc/dbconn.php';
if(!isset($_SESSION['admin_login'])){
if(isset($_REQUEST['submitBtn'])){
    $sql="SELECT * FROM admin WHERE id='1'";
    $result=mysql_query($sql);
    $rws=  mysql_fetch_array($result);
    $username=  mysql_real_escape_string($_REQUEST['uname']);
    $password=  mysql_real_escape_string($_REQUEST['pwd']);
    if($username==$rws[8] && $password==$rws[9]) {
        
        $_SESSION['admin_login']=1;
    header('location:admin_hompage.php'); }
    else
        header('location:adminlogin.php');      
}
}
else {
    header('location:admin_hompage.php');
}
?>