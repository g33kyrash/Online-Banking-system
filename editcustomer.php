<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<?php
include '_inc/dbconn.php';
$id=  mysql_real_escape_string($_REQUEST['customer_id']);
$sql="SELECT * FROM `customer` WHERE id=$id";
$result=  mysql_query($sql) or die(mysql_error());
$rws=  mysql_fetch_array($result);
?>
<?php
                        $delete_id=  mysql_real_escape_string($_REQUEST['customer_id']);
                        if(isset($_REQUEST['submit2_id'])){
                            $sql_delete="DELETE FROM `customer` WHERE `id` = '$delete_id'";
                            $sql_drop="DROP TABLE passbook".$delete_id;
                            mysql_query($sql_delete) or die(mysql_error());
                            mysql_query($sql_drop) or die(mysql_error());
                            header('location:delete_customer.php');
                        }
                        ?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="newcss.css"/>
        
        <title>staff editing</title>
        
    </head>
    <?php include 'header.php'; ?>
        <div class='content_addstaff'>
    <?php include 'admin_navbar.php'?>
                <div class='addstaff'>
                <form action="alter_customer.php" method="POST">
            <table align="center">
                                <input type="hidden" name="current_id" value="<?php echo $id;?>"/>
                 <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Edit Customer Details</u></h3></td></tr>
                <tr>
                    <td>customer's name</td>
                    <td><input type="text" name="edit_name" value="<?php echo $rws[1];?>" required=""/></td>
                </tr>
                <tr>
                    <td>gender</td>
                    <td>
                        M<input type="radio" name="edit_gender" value="M" <?php if($rws[2]=="M") echo "checked";?>/>
                        F<input type="radio" name="edit_gender" value="F" <?php if($rws[2]=="F") echo "checked";?>/>
                    </td>
                </tr>
                <tr>
                    <td>
                        DOB
                    </td>
                    <td>
                        <input type="date" name="edit_dob" value="<?php echo $rws[3];?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Nominee</td>
                    <td><input type="text" name="edit_nominee" value="<?php echo $rws[4];?>" required=""/></td>
                </tr>
                <tr>
                    <td>account type</td>
                    <td>
                        <select name="edit_account">
                            <option <?php if($rws[5]=="savings") echo "selected";?>>savings</option>
                            <option <?php if($rws[5]=="current") echo "selected";?>>current</option>
                        </select>
                    </td>
                </tr>
                
                                
                <tr>
                    <td>Address:</td>
                    <td><textarea name="edit_address"><?php echo $rws[6];?></textarea></td>
                </tr>
                
                    <td>mobile</td>
                    <td><input type="text" name="edit_mobile" value="<?php echo $rws[7];?>" required=""/></td>
                </tr>

                <tr>
                    <td>email id</td>
                    <td><input type="text" name="edit_mobile" value="<?php echo $rws[8];?>" required=""/></td>
                </tr>
                
                <tr>
                    <td colspan="2" align='center' style='padding-top:20px'><input type="submit" name="alter_customer" value="UPDATE DATA" class='addstaff_button'/></td>
                </tr>
            </table>
        </form>
                
        </div>
        </div>
                
           
    </body>
</html>
