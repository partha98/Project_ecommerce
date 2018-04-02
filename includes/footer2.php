<!DOCTYPE html>
<footer>
        <div class="col-md-4">
        <ul type="none" class="list_footer">
            <li><h1>Information</h1></li>
            <li><a href="../PHP/About_Us.php" class="list_caption">About Us</a></li>
            <li><a href="../PHP/Contact_Us.php" class="list_caption">Contact Us</a></li>
        </ul>
    </div>
    <div class="col-md-4">
        <ul type="none" class="list_footer">
            <li><h1>My Account</h1></li>
            <?php
               if(isset($_SESSION['email']))
               {
            ?>
            <li><a href="../includes/Logout.php" class="list_caption">Logout</a></li>            
            <?php
               }
            else 
                {
               ?>
            <li><a href="../PHP/Login.php" class="list_caption">Login</a></li>
            <li><a href="../PHP/Signup.php" class="list_caption">SignUp</a></li>
              <?php
                }
                ?>
        </ul>
    </div>
    <div class="col-md-4">
        <ul type="none" class="list_footer">
            <li><h1>Contact</h1></li>
            <li>+91-123xxxxxxx</li>
        </ul>
    </div>
    </div>
</footer>
