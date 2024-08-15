<?php
require_once("config.php");
if(isset($_SESSION['login_admin'])){
if($_SESSION['login_admin']=="1"){
header('Location:adminhomepage.php');
}
else{
echo "0";
}
}  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="form.css">
<body>
<div class="main">
        <div class="navbar">
            
            <div class="icon">
                <!-- <h2 class="logo">Balaghat Tiffin Services</h2> -->
            </div>

            <div class="menu">
                <ul>
                    <!-- <li><a href="frontpage.php">HOME</a></li> -->
                    <!-- <li><a href="frontpage.php">ABOUT</a></li> -->
                    <!-- <li><a href="frontpage.php"> SERVICES</a></li> -->
                    <!-- <li><a href="frontpage.php">CONTACT</a></li> -->
                </ul>
            </div>
        </div> 
    <div class="content">
    <h1>Balaghat<br><span>Tiffin</span> <br>Services</h1>
            <p class="par">This website serves as a comprehensive resource for individuals seeking information 
                <br>about tiffin services in their area. Our platform offers detailed listings of various tiffin service providers
                <br> including their menus, pricing, and delivery options. </p>

                <!-- <button class="cn"><a href="#">Read More</a></button> -->
                <div class="form">
                <?php
        require_once("config.php");      
        if (isset($_GET['loginerror'])) {
            $loginerror = $_GET['loginerror'];
        }
        if (!empty($loginerror)) {
            $error = 'Invalid login credentials please Try again..';
            echo '<p class ="errmsg" style="display: flex;justify-content: center;align-items: center;
background: red;padding: 5px 8px;width: 100%;border-radius: 4px;color: blanchedalmond; margin:5px 10px;">' . $error . '</p>';
}
?>
        <h2>Admin Login</h2>
        <form method="post">
           
                <input type="text" name="admin_id" placeholder="Enter Admin ID" crequired value="<?php if (!empty($loginerror)) { echo $loginerror; } ?>" >
         
                <input type="password" name="admin_pass" id="password" placeholder="Enter Password" required>
          
                <button class="btnn" name="login">Login</a></button>

                <p class="link"> Login As User
                    <a href="index.php">Click Here</a></p>
                
          
        </form>
        <?php
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if (isset($_POST['login'])) { 
            $admin_id = $_POST['admin_id'];
            $admin_pass = $_POST['admin_pass'];
            if ($admin_id == 'admin' && $admin_pass == 'admin') { 
              $_SESSION['login_admin']="1";  header("Location:adminhomepage.php"); 
                exit;
            } else {
               echo 'Password canot  match Please Try again';
            }
        }
        ?>
    </div>
    </div>

</body>
</html>