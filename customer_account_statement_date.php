<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account Statement</title>
        
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
    <p><b>Welcome <?php echo $_SESSION['name']?></b></p>
    


    
    <h3 style="text-align:center;color:#2E4372;"><u>Account summary by Date</u></h3>
  
    
            
    <table align="center">
                        
                        <th>Id</th>
                        <th>Transaction Date</th>
                        <th>Narration</th>
                        <th>Credit</th>
                        <th>Debit</th>
                        <th>Balance Amount</th>
                        
                        <?php if(isset($_REQUEST['summary_date'])) {
                         $date1=$_REQUEST['date1'];
                         $date2=$_REQUEST['date2'];
                         
                         include '_inc/dbconn.php';
                         $sender_id=$_SESSION["login_id"];
                         $sql="SELECT * FROM passbook".$sender_id." WHERE transactiondate BETWEEN '$date1' AND '$date2'";
                         $result=  mysql_query($sql) or die(mysql_error());
                        while($rws=  mysql_fetch_array($result)){
                            
                            echo "<tr>";
                            echo "<td>".$rws[0]."</td>";
                            echo "<td>".$rws[1]."</td>";
                            echo "<td>".$rws[8]."</td>";
                            echo "<td>".$rws[5]."</td>";
                            echo "<td>".$rws[6]."</td>";
                            echo "<td>".$rws[7]."</td>";
                           
                            echo "</tr>";
                        }
                        } ?>
</table>
    </div>
        <?php include 'footer.php'?>