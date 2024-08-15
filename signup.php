<!DOCTYPE html>
<?php require_once("config.php");?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>signup page</title>  
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
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">CONTACT</a></li> -->
                </ul>
            </div>
        </div> 
    <div class="col">
        <?php
        if (isset($_POST['signup'])) {
            extract($_POST);
            if (strlen($name) < 3) {
                $error[] = 'please enter more than 3 characters in first name';
            }
            if (strlen($name) > 20) {
                $error[] = 'please enter less than 20 characters in first name';
            }
            if (strlen($mobilenumber) <10) {
                $error[] = 'Mobile Number : min lenght is 10';
            }
            if (strlen($mobilenumber) >10) {
                $error[] = 'Mobile Number : max lenght is 10';
            }
            if (strlen($email) > 50) {
                $error[] = 'Email : max lenght is 50';
            }
            if ($passwordConfirm == '') {
                $error[] = 'please confirm the password';
            }
            if ($password != $passwordConfirm) {
                $error[] = 'Password do not Match';
            }
            if (strlen($password) < 5) {
                $error[] = 'The password is 6 characters long';
            }
            if (strlen($password) > 20) {
                $error[] = 'password : Max lenght 20 characters not allowed';
            }
            $sql = " SELECT * FROM userinfo WHERE ( email='$email');";
            $res = mysqli_query($conn, $sql);
            if (mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                if ($email == $row['email']) {
                    $error[] = 'Email already Exists';
                }
            }
            if (!isset($error)) {
                $date = date('Y-m-d');
                $options = array("cost" => 4);
                $password = password_hash($password, PASSWORD_BCRYPT, $options);
                $result = mysqli_query($conn, "INSERT INTO userinfo values('','$name','$email','$mobilenumber','$address','$password','$date')");
                if ($result) {
                    $done = 2;
                } else {
                    $error[] = 'Failed : Somethimg went Wrong';
                }
            }
        }
        ?>
        <div class="content">
        <h1>Balaghat<br><span>Tiffin</span> <br>Services</h1>
            <p class="par">This website serves as a comprehensive resource for individuals seeking information 
                <br>about tiffin services in their area. Our platform offers detailed listings of various tiffin service providers
                <br> including their menus, pricing, and delivery options. </p>

                <!-- <button class="cn"><a href="#">Read More</a></button> -->
            <div class="form" style="top: -100px;height: 500px;">
                <?php
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<p class ="errmsg" style="display: flex;justify-content: center;align-items: center;background: red;padding: 5px 8px;width: 100%;border-radius: 4px;color: blanchedalmond; margin:5px 10px;">&#x26A0;' . $error . '</p>';
                    }
                }
                ?>
            
            <?php if (isset($done)) {
                header("location:index.php");
            } else { ?>
                <h2>Sign-up </h2>
               
                <form method="post">                       
                    
                          
                            <input type="text" name="name" placeholder="Enter Your Name" value="<?php if (isset($error)) {echo $name;} ?>" required>
                       
                        
                          
                            <input type="email" name="email" placeholder="Enter Your Email Address" value="<?php if (isset($error)) {echo $email;} ?>"  required>
                        
                       
                            
                            <input type="text" name="mobilenumber" placeholder="Enter your Phone Number" value="<?php if (isset($error)) {echo $mobilenumber;} ?>" required >
                          
                            <input type="text" name="address" placeholder="Enter Your Address" value="<?php if (isset($error)) {echo $address;} ?>" required>
                        
                        
                      
                            <input type="password" name="password" id="password" placeholder="Enter Your Password" >  
                     
                       
                            <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirm Your Password">   
                      
                            <button class="btnn" name="signup">Sign Up</button>

                           
                            
                <p class="link"> Have an account
                    <a href="index.php">Login here</a></p>
        
                        
                    <?php } ?>
                    </form>
                </div>
        </div>
</body>
</html>