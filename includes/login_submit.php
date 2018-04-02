<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
   require 'common.php';
   $email = mysqli_real_escape_string($con,$_POST['email']);
   $pass = md5(md5($_POST['pass']));
   $query = "select * from users where email='$email' and user_password='$pass'";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $count = mysqli_num_rows($result);
   if($count==1)
   {
       $row= mysqli_fetch_array($result);
       $_SESSION['email'] = $row['email'];
       $_SESSION['id'] = $row['id'];
       header('location:../PHP/Products.php');
   }
 else 
{
       header('location:../PHP/Login.php?error=1');       
}
?>