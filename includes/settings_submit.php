<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Settings</title>
    <link rel="icon" href="../Images/settings.png">  
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1">                      
  </head>
    <body>
        <?php
         require 'common.php';
         include 'header.php';
         $pass = $_POST['Old-Password'];
         $new_pass = $_POST['New-Password'];
         $re_pass = $_POST['Re-Password'];
         if(strcmp($pass,"")==0)
         {
         ?>
         <div class="error">Field cannot remain empty<br>
         <a href="../PHP/Settings.php"><button class="btn btn-primary">Refill form</button></a></div>
         <?php
         }
         else if(strcmp($new_pass,"")==0)
         {
        ?>
         <div class="error">Field cannot remain empty<br>
         <a href="../PHP/Settings.php"><button class="btn btn-primary">Refill form</button></a></div>
        <?php
         }
         else if(strcmp($re_pass,"")==0)
         {
         ?>
         <div class="error">Field cannot remain empty<br>
         <a href="../PHP/Settings.php"><button class="btn btn-primary">Refill form</button></a></div>
         <?php
         }
         else if(strlen($new_pass)<8)
         {
         ?>
        <div class="error">Password too short.It must be atleast of 8 characters<br>
         <a href="../PHP/Settings.php"><button class="btn btn-primary">Refill form</button></a></div>
        <?php
         }
         else if(strlen($re_pass)<8)
         {
             ?>
         <div class="error">Password too short.It must be atleast of 8 characters<br>
         <a href="../PHP/Settings.php"><button class="btn btn-primary">Refill form</button></a></div>
         <?php
         }
         else if(!(strcmp($new_pass, $re_pass))==0)
         {
          ?>
        <div class="error">New pssword and re-entered new password not matching<br>
         <a href="../PHP/Settings.php"><button class="btn btn-primary">Refill form</button></a></div>
        <?php
         }
         else
         {
             $pass = md5(md5($pass));
             $new_pass = md5(md5($new_pass));
             $re_pass = md5(md5($re_pass));
             $email =$_SESSION['email'] ;
             $query = "select * from users where email='$email' and user_password='$pass'";
             $result = mysqli_query($con, $query) or die(mysqli_error($con));
             $count = mysqli_num_rows($result);
             if($count==0)
             {
                
         ?>
         <div class="error">Wrong Password entered<br>
         <a href="../PHP/Settings.php"><button class="btn btn-primary">Refill form</button></a></div>
         <?php
             }
           else
               {
                   $query1="Update users set user_password='$new_pass' where email='$email' ";
                   $result1= mysqli_query($con, $query1) or die(mysqli_error($con));
                   if($result1)
                   {
                       header('location:../PHP/Products.php');
                   }
               }
         }
         include 'footer.php';
             ?>
    </body>
</html>
