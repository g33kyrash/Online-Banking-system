<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<?php
     $t_amount=$_REQUEST['t_val'];
     $sender_id=$_SESSION["login_id"];
     $reciever_id=$_REQUEST['transfer'];
     
     //select last transaction id in reciever's passbook.
     include '_inc/dbconn.php';
     $sql="SELECT MAX(transactionid) from passbook".$reciever_id;
     $result=mysql_query($sql) or die(mysql_error());
     $rws=  mysql_fetch_array($result);
     $r_last_tid=$rws[0];
    
    //select the details in the last row of reciever's passbook.
    $sql="SELECT * from passbook".$reciever_id." WHERE transactionid='$r_last_tid'";
    $result=mysql_query($sql) or die(mysql_error());
    while($rws= mysql_fetch_array($result)){
    $r_amount=$rws[7];
    $r_name=$rws[2];
    $r_branch=$rws[3];
    $r_ifsc=$rws[4];
    }
    
   //select the last transaction id in the sender's passbook
     $sql="SELECT MAX(transactionid) from passbook".$sender_id;
     $result=mysql_query($sql) or die(mysql_error());
     $rws=  mysql_fetch_array($result);
     $s_last_tid=$rws[0];
    
    //select the details in the last row of sender's passbook.
    $sql="SELECT * from passbook".$sender_id." WHERE transactionid='$s_last_tid'";
    $result=mysql_query($sql) or die(mysql_error());
    while($rws= mysql_fetch_array($result)) {
    $s_amount=$rws[7];
    $s_name=$rws[2];
    $s_branch=$rws[3];
    $s_ifsc=$rws[4];
    }
    
    $date=date("Y-m-d");
    
    $s_total=$s_amount-$t_amount; //sender's final balance.
    
    if($s_amount<=500)
    {
        echo '<script>alert("Your account balance is less than Rs. 500.\n\nYou must maintain a minimum balance of Rs. 500 in order to proceed with the transfer.");';
        echo 'window.location= "customer_transfer.php";</script>';
    }
    elseif($t_amount<100){
         echo '<script>alert("You cannot transfer less than Rs. 100");';
        echo 'window.location= "customer_transfer.php";</script>';
    }
    elseif($s_total<500)
    {
        echo '<script>alert("You do not have enough balance in your account to proceed this transfer.\n\nYou must maintain a minimum of Rs. 500 in your account.");';
        echo 'window.location= "customer_transfer.php";</script>';
    }
    
    else{ 
        //insert statement into reciever passbook.
        $r_total=$r_amount+$t_amount;
        $sql1="insert into passbook".$reciever_id." values('','$date','$r_name','$r_branch','$r_ifsc','$t_amount','0','$r_total','BY $s_name')";
        mysql_query($sql1) or die(mysql_error());
        
        //insert statement into sender passbook.
        $s_total=$s_amount-$t_amount;
        $sql2="insert into passbook".$sender_id." values('','$date','$s_name','$s_branch','$s_ifsc','0','$t_amount','$s_total','TO $r_name')";
         mysql_query($sql2) or die(mysql_error());
        
        echo '<script>alert("Transfer Successful.");';
        echo 'window.location= "customer_transfer.php";</script>';
    }
?>