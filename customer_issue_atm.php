<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ATM request</title>
        
        <link rel="stylesheet" href="newcss.css">
        <style>
            .content_customer table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}

        </style>
    </head>
        <?php include 'header.php' ?>
<div class='content_customer'>

           <?php include 'customer_navbar.php'?>
     <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
            <br><br>
    
    <form action="customer_issue_atm_process.php" method="POST">
    <table align="center">
        <tr><td>Issue: <select name="atm">
        <option value='ATM' selected>ATM</option>
        <option value='CHEQUE'>Cheque Book</option></td><tr>
        
    </select>
          </table>      
    <table align="center"><tr><td><input type="submit" name="submitBtn" value="Request" class='addstaff_button'></td></tr>
    </table>    </form>
    
    <?php 
        include '_inc/dbconn.php';
        $sender_id=$_SESSION["login_id"];
        
        $sql="SELECT * FROM cheque_book WHERE account_no='$sender_id'";
        $result=mysql_query($sql) or die(mysql_error());
        $rws=mysql_fetch_array($result);
        $c_status=$rws[3];
        $c_id=$rws[2];
        
        $sql="SELECT * FROM atm WHERE account_no='$sender_id'";
        $result=mysql_query($sql) or die(mysql_error());
        $rws=mysql_fetch_array($result);
        $atm_status=$rws[3];
        $a_id=$rws[2];
        
        if(($a_id==$sender_id) || ($c_id==$sender_id))
        {
            
        echo "<table align='center'>";
        echo "<th>Requests</th><th>Status</th>";
        echo "<tr><td>ATM Card Status: </td><td>$atm_status</td></tr>";
        echo "<tr><td>Cheque Book Status: </td><td>$c_status</td></tr>";
            echo "</table>"; }?>

    <?php include 'footer.php';?>