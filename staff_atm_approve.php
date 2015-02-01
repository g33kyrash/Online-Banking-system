<?php 
session_start();
        
if(!isset($_SESSION['staff_login'])) 
    header('location:staff_login.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ATM Approval Requests</title>
        
        <link rel="stylesheet" href="newcss.css">
        <style>
            .displaystaff_content table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}

        </style>
    </head>
        <?php include 'header.php' ?>
<div class="displaystaff_content">

           <?php include 'staff_navbar.php'?>
    <h3 style="text-align:center;color:#2E4372;"><u>ATM approval requests</u></h3>
    <?php
include '_inc/dbconn.php';
$sql="SELECT * FROM atm WHERE atm_status='PENDING'";
$result=  mysql_query($sql) or die(mysql_error());
?>
           <form action="staff_atm_approve_process.php" method="POST">
<table align="center">
                        <th>id</th>
                        <th>Name</th>
                        <th>Account No.</th>
                        <th>Atm Card Status</th>
                        
                        
                        <?php
                        while($rws=  mysql_fetch_array($result)){
                            echo "<tr><td><input type='radio' name='customer_id' value=".$rws[0];
                            echo ' checked';
                            echo " /></td>";
                            echo "<td>".$rws[1]."</td>";
                            echo "<td>".$rws[2]."</td>";
                            echo "<td>".$rws[3]."</td>";
                            
                            echo "</tr>";
                        } ?>
</table>
            <table align="center">
                        <tr>
                            <td>
                                <input type="submit" name="submit_id" value="APPROVE REQUEST" class='addstaff_button'/>
                            </td>
                        </tr>
                    </table>
               </form>
</div>
    <?php include 'footer.php'?>