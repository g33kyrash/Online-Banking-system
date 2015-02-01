<?php 
session_start();
        
if(!isset($_SESSION['staff_login'])) 
    header('location:staff_login.php');   
?>
<?php
if(isset($_REQUEST['submit_id']))
{
    include '_inc/dbconn.php';
    $id=$_REQUEST['customer_id'];
    
    $sql="SELECT * FROM cheque_book WHERE id='$id'";
    $result=  mysql_query($sql) or die(mysql_error());
    $rws=  mysql_fetch_array($result);
                
    if($rws[3]=="PENDING")
    $sql="UPDATE cheque_book SET cheque_book_status='ISSUED' WHERE id='$id'";
    
    mysql_query($sql) or die(mysql_error());
    
    echo '<script>alert("Cheque Book Issued");';
    echo 'window.location= "staff_cheque_approve.php";</script>';
}