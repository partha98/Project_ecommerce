<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>SignUp</title>
    <link rel="icon" href="../Images/User.jpg">  
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1">      
  </head>
  <body>
<?php
   require 'common.php';
   include 'header.php';
   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass=$_POST['pass'];
   $city = $_POST['city'];
   $add = $_POST['add'];
   $contact = $_POST['contact'];
   $query_email ="select * from users where email='$email'";
   $resultes = mysqli_query($con,$query_email) or die(mysqli_error($con));
   $count = mysqli_num_rows($resultes);
   $len=strlen($pass);
   if(strcmp($name,"")==0)
   {
        ?>
         <div class="error">
             <i>Name field cannot be empty.</i><br><br>
         <a href="../PHP/Signup.php"><button type="button" class="btn btn-primary">Refill form</button></a></div>
   <?php    
   }
   else if(strcmp($city,"")==0)
   {
    ?>
         <div class="error">
             <i>City field cannot be left empty.</i><br><br>
         <a href="../PHP/Signup.php"><button type="button" class="btn btn-primary">Refill form</button></a></div>
   <?php   
   }
   else if(strcmp($add,"")==0)
   {
    ?>
         <div class="error">
             <i>Address field cannot be left empty.</i><br><br>
         <a href="../PHP/Signup.php"><button type="button" class="btn btn-primary">Refill form</button></a></div>
   <?php   
   }
   else if($count==1)
   {
   ?>
         <div class="error">
             <i>Email id already exists.</i><br><br>
         <a href="../PHP/Signup.php"><button type="button" class="btn btn-primary">Refill form</button></a></div>
   <?php    
   }
   
  else if($len<8)
   {
      ?>
         <div class="error">
             <i>Password too short.</i><br><br>
         <a href="../PHP/Signup.php"><button type="button" class="btn btn-primary">Refill form</button></a>
         </div>
   <?php   
   }
   
   else if((strlen($contact)<10)||(strlen($contact)>10))
   {
       ?>
       
      <div class="error"><i>Invalid phone number</i><br><br>
         <a href="../PHP/Signup.php"><button type="button" class="btn btn-primary">Refill form</button></a>
         </div>
   <?php 
  }
   else
   {
   $city = mysqli_real_escape_string($con,$_POST['city']);
   $add = mysqli_real_escape_string($con,$_POST['add']);
   $contact = mysqli_real_escape_string($con,$_POST['contact']);
   $name = mysqli_real_escape_string($con,$_POST['name']);
   $email = mysqli_real_escape_string($con,$_POST['email']);
   $pass = md5(md5(mysqli_real_escape_string($con,$_POST['pass'])));
   $query = "insert into users(name_of_user,email,user_password,contact,city,address) values('$name','$email','$pass','$contact','$city','$add')";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
  if($result == TRUE)
   {
       header('location:../PHP/Products.php');
       $_SESSION['email'] = $email;
       $_SESSION['id'] = mysqli_insert_id($con);
   }
   }
   include 'footer.php';
?>
</body>
</html>