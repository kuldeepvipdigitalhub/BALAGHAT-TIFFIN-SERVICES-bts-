<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>login page</title>
</head>
<body>
    
<div class="main">
        <div class="navbar">
            <div class="icon">
                <!-- <h2 class="logo">Balaghat Tiffin Services</h2> -->
            </div>

            <div class="menu">
                <ul>
                    <!-- <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">TIFFIN SERVICES</a></li>
                    <li><a href="#">CONTACT</a></li> -->
                </ul>
            </div>
        </div> 


    <div class="content">
    <h1>Balaghat<br><span>Tiffin</span> <br>Services</h1>
            <p class="par">This website serves as a comprehensive resource for individuals seeking information 
                <br>about tiffin services in their area. Our platform offers detailed listings of various tiffin service providers
                <br> including their menus, pricing, and delivery options. </p>

                <!-- <button class="cn"><a href="index.php">Read More</a></button> -->
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
        <h2>Login</h2>
            <form action="login_process.php" method="POST">
                
                   
                <input type="email" placeholder="Enter Your Email id "name="login_var" value="<?php if (!empty($loginerror)) { echo $loginerror; } ?>" >

                <input type="password" name="password" placeholder="Enter Password Here">
                    
                    <button class="btnn" name="sublogin"><a href="#">Login</a></button>
                
                <p class="liw"> <a href="#">Forget Password</a></p>
                <p class="link">Don't have an account<br>
                    <a href="signup.php">Sign up </a> here</a></p>
                <p class="liw">Log in As <a href="adminlogin.php">Admin</a></p>
            </form>
        </div>
    </div>
    
</body>
</html>