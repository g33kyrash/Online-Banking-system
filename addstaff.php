<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Staff</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>

<?php include 'header.php'; ?>
    
        <div class='content_addstaff'>
            <?php include 'admin_navbar.php'?>
            <div class='addstaff'>
        <form action="add_staff.php" method="POST">
             <table align='center'>
                 <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Add Staff</u></h3></td></tr>
                <tr>
                    <td> Staff's name</td>
                    <td><input type="text" name="staff_name" required=""/></td>
                </tr>
                <tr>
                    <td>gender</td>
                    <td>
                        M<input type="radio" name="staff_gender" value="M" checked/>
                        F<input type="radio" name="staff_gender" value="F" />
                    </td>
                </tr>
                <tr>
                    <td>
                        DOB
                    </td>
                    <td>
                        <input type="date" name="staff_dob" required=""/>
                    </td>
                </tr>
               
                <tr>
                    <td>Relationship</td>
                    <td>
                        <select name="staff_status">
                            <option>unmarried</option>
                            <option>married</option>
                            <option>divorced</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td>
                        <select name="staff_dept">
                            <option>revenue</option>
                            <option>developer</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        DOJ
                    </td>
                    <td>
                        <input type="date" name="staff_doj" required=""/>
                    </td>
                </tr>
                
                <tr>
                    <td>Address:</td>
                    <td><textarea name="staff_address" required=""></textarea></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="staff_mobile" required=""/></td>
                </tr>

                <tr>
                    <td>Email id</td>
                    <td><input type="email" name="staff_email" required=""/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="staff_pwd" required=""/></td>
                </tr>
                
                <tr >
                    <td colspan="2" align='center' style='padding-top:20px' ><input type="submit" name="add_staff" value="ADD STAFF MEMBER" class='addstaff_button'/></td>
                </tr>
                </table>
        </form>
                </div>
        </div>
<?php include 'footer.php';?>
    </body>
</html>