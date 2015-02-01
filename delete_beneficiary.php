<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<?php
if(isset($_REQUEST['submit_id']))
{
include '_inc/dbconn.php';
$customer_id=$_REQUEST["customer_id"];
$sql="DELETE FROM beneficiary1 WHERE id='$customer_id'";
$result=  mysql_query($sql) or die(mysql_error());

echo '<script>alert("Beneficiary Deleted successfully. ");';
                     echo 'window.location= "display_beneficiary.php";</script>';
                    
}
?>