<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<?php
                $sender_id=$_SESSION["login_id"];
                $sender_name=$_SESSION["name"];
                
                $Payee_name=$_REQUEST['name'];
                $acc_no=$_REQUEST['account_no'];
                $branch=$_REQUEST['branch_select'];
                $ifsc=$_REQUEST['ifsc_code'];
                
                
                include '_inc/dbconn.php';
                $sql1="SELECT * FROM beneficiary1 WHERE sender_id='$sender_id' AND reciever_id='$acc_no'";
                $result1=  mysql_query($sql1);
                $rws1=  mysql_fetch_array($result1);
                $s1=$rws1[1];
                $s2=$rws1[3];
                
                
                $sql="SELECT * FROM customer WHERE id='$acc_no'";
                
                $result=  mysql_query($sql) or die(mysql_error());
                $rws=  mysql_fetch_array($result) ;
                
                if($sender_id==$rws[0]) //can't send request to himself
                {
                echo '<script>alert("You cant add yourself as a beneficiery!");';
                     echo 'window.location= "add_beneficiary.php";</script>';
                }
                
                elseif($s1==$sender_id && $s2==$acc_no)
                {
                    echo '<script>alert("You cant add a beneficiery twice!");';
                     echo 'window.location= "add_beneficiary.php";</script>';
                }
                
                elseif($rws[1]!=$Payee_name && $rws[0]!=$acc_no && $rws[11]!=$branch && $rws[12]!=$ifsc)
                {
                echo '<script>alert("Beneficiary Not Found!\nPlease enter correct details");';
                     echo 'window.location= "add_beneficiary.php";</script>';
                }
                
                
                else{
                     
                    $status="PENDING";
                $sql="insert into beneficiary1 values('','$sender_id','$sender_name','$acc_no','$Payee_name','$status')";
                mysql_query($sql) or die(mysql_error());
                header("location:display_beneficiary.php");
                }
                