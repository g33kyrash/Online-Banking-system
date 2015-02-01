<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Features - Online Banking</title>
        <style>
            .content_customer ul{
                margin-left:150px;
                margin-top:50px;
            }
            .content_customer li{
                padding-top:15px;
            }
        </style>
        <link rel="stylesheet" href="newcss.css">
       
    </head>
        <?php include 'header.php' ?>
        <div class='content_customer'>
             <h3 style="text-align:center;color:#2E4372;"><u>Online Banking features</u></h3>
           <ul>
               <li>Registration for online banking by Admin. </li>
               <li>Adding Beneficiary account by customer.</li>
                <li> Transferring amount to the beneficiary added by customer. </li>
               <li>Staff must approve for beneficiary activation before it can be used for transferring funds. </li>
               <li>Customer gets to know his last login date and time each time he logs in.</li>
               <li>Customer can check last 10 transactions made with their account.</li>
               <li>Customer can check their account statement within a date range.</li>
               
               <li>Customer can request for ATM and Cheque Book.</li>
               <li>Staff will approve requests for ATM card and cheque book. </li>
              <li> Admin can add/edit/delete customer as well as staff. </li>
             <li> All three of them(customer, staff & admin) can change their password. </li>
             <li>Staff and Admin Login pages are hidden from customer for security purpose.</li>
             <li>Passwords are stored as encrypted hashes with an additional random salt for added security.</li>
            
               </ul>
               </div>
            