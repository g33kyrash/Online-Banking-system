<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content_customer'>
            
           <?php include 'customer_navbar.php'?>
            
            <?php
                $cust_id=$_SESSION['cust_id'];
                include '_inc/dbconn.php';
                $sql="SELECT * FROM customer WHERE email='$cust_id'";
                $result=  mysql_query($sql) or die(mysql_error());
                $rws=  mysql_fetch_array($result);
                
                
                $name= $rws[1];
                $account_no= $rws[0];
                $branch=$rws[10];
                $branch_code= $rws[11];
                $last_login= $rws[12];
                $acc_status=$rws[13];
                $address=$rws[6];
                $acc_type=$rws[5];
                
                $gender=$rws[2];
                $mobile=$rws[7];
                $email=$rws[8];
                
                $_SESSION['login_id']=$account_no;
                $_SESSION['name']=$name;
                
                $sql="SELECT * FROM passbook".$_SESSION['login_id'] ;
                $result=  mysql_query($sql) or die(mysql_error());
                $rws=  mysql_fetch_array($result);
                
                $balance=$rws[6];
                                
?>
            <p>Name: <?php echo $name;?></p>
            <p>gender: <?php if($gender=='M') echo "Male"; else echo "Female";?></p>
            <p>Mobile: <?php echo $mobile;?></p>
            <p>Email: <?php echo $email;?></p>
            <br>
            <p>Account No: <?php echo $account_no;?></p>
            <p>Branch: <?php echo $branch;?></p>
            <p>Branch Code: <?php echo $branch_code;?></p>
            <p>Last Login: <?php echo $last_login;?></p>
            <br>
            <p>Account status: <?php echo $acc_status;?></p>
            <p>Account Type: <?php echo $acc_type;?></p>
            <p>Address: <?php echo $address;?></p>
            
        </div>
               <?php include 'footer.php';?>
            
    </body>
</html>