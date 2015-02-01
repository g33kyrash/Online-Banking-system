<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
$id=  mysql_real_escape_string($_REQUEST['staff_id']);
$sql="SELECT * FROM `staff` WHERE id=$id";
$result=  mysql_query($sql) or die(mysql_error());
$rws=  mysql_fetch_array($result);
?>
<?php
                        $delete_id=  mysql_real_escape_string($_REQUEST['staff_id']);
                        if(isset($_REQUEST['submit2_id'])){
                            $sql_delete="DELETE FROM `staff` WHERE `id` = '$delete_id'";
                            mysql_query($sql_delete) or die(mysql_error());
                            header('location:delete_staff.php');
                        }
                        ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="newcss.css"/>
        <title>staff editing</title>
    </head>
    <?php include 'header.php'; ?>
        <div class='content_addstaff'>
    <?php include 'admin_navbar.php'?>
                <div class='addstaff'>
                <form action="alter_staff.php" method="POST">
            <table align="center" >
                <input type="hidden" name="current_id" value="<?php echo $id;?>"/>
                <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Edit Staff Details</u></h3></td></tr>
                <tr>
                    <td>Staff's name</td>
                    <td><input type="text" name="edit_name" value="<?php echo $rws[1];?>" required=""/></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        M<input type="radio" name="edit_gender" value="M" <?php if($rws[10]=="M") echo "checked";?>/>
                        F<input type="radio" name="edit_gender" value="F" <?php if($rws[10]=="F") echo "checked";?>/>
                    </td>
                </tr>
                <tr>
                    <td>
                        DOB
                    </td>
                    <td>
                        <input type="date" name="edit_dob" value="<?php echo $rws[2];?>"/>
                    </td>
                </tr>
                
                <tr>
                    <td>Relationship</td>
                    <td>
                        <select name="edit_status">
                            <option <?php if($rws[3]=="unmarried") echo "selected";?>>unmarried</option>
                            <option <?php if($rws[3]=="married") echo "selected";?>>married</option>
                            <option <?php if($rws[3]=="divorced") echo "selected";?>>divorced</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td>
                        <select name="edit_dept">
                            <option <?php if($rws[4]=="revenue") echo "selected";?>>revenue</option>
                            <option <?php if($rws[4]=="developer") echo "selected";?>>developer</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        DOJ
                    </td>
                    <td>
                        <input type="date" name="edit_doj" value="<?php echo $rws[5];?>"/>
                    </td>
                </tr>
                
                <tr>
                    <td>Address:</td>
                    <td><textarea name="edit_address"><?php echo $rws[6];?></textarea></td>
                </tr>
                
                    <td>Mobile</td>
                    <td><input type="text" name="edit_mobile" value="<?php echo $rws[7];?>" required=""/></td>
                </tr>

                <tr>
                    <td>Email id</td>
                    <td><input type="text" name="edit_mobile" value="<?php echo $rws[8];?>" required=""/></td>
                </tr>
                
                <tr>
                    <td colspan="2" align='center' style='padding-top:20px'><input type="submit" name="alter" value="UPDATE DATA" class='addstaff_button'/></td>
                </tr>
            </table>
        </form>
                
                
                </div>
                </div>
    </body>
</html>
