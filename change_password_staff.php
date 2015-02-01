<?php 
session_start();
include '_inc/dbconn.php';
        
if(!isset($_SESSION['staff_login'])) 
    header('location:staff_login.php');   
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Change Password</title>
        <style>
            .displaystaff_content table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}

        </style>
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content'>
           <?php include 'staff_navbar.php'?>
            <div class="displaystaff_content">
                
                <h3 style="text-align:center;color:#2E4372;"><u>Change Password</u></h3>
            <form action="" method="POST">
                <table align="center">
                    <tr>
                        <td>Enter old password</td>
                        <td><input type="password" name="old_password" required=""/></td>
                    </tr>
                    <tr>
                        <td>Enter new password</td>
                        <td><input type="password" name="new_password" required=""/></td>
                    </tr>
                    <tr>
                        <td>Enter password again</td>
                        <td><input type="password" name="again_password" required=""/></td>
                    </tr></table>
                    
                        <table align="center"><tr>
                        <td><input type="submit" name="change_password" value="Change Password" class='addstaff_button'/></td>
                    </tr>
                </table>
            </form>
            <?php
            $user=$_SESSION['login_id'];
            if(isset($_REQUEST['change_password'])){
            $sql="SELECT * FROM staff WHERE email='$user'";
            $result=mysql_query($sql);
            $rws=  mysql_fetch_array($result);
            $old=  mysql_real_escape_string($_REQUEST['old_password']);
            $new=  mysql_real_escape_string($_REQUEST['new_password']);
            $again=  mysql_real_escape_string($_REQUEST['again_password']);
            if($rws[9]==$old && $new==$again){
                $sql1="UPDATE staff SET pwd='$new' WHERE email='$user'";
                mysql_query($sql1) or die(mysql_error());
                header('location:staff_homepage.php');
            }
            else{
                /*RASHID give the pop up window about something went wrong try again*/
                header('location:change_password_staff.php');
            }
            }
            ?>
            
        </div>
        <?php include 'footer.php';?>