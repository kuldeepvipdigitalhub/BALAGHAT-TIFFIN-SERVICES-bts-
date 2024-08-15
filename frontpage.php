<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balaghat Tiffin Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
    <nav style="position: sticky;
    top: 0%;
    z-index: 999;">
    <div class="header1">
        <header class="header">
                <a href="#" class="logo">
                    <img src="img/logo.png"alt="">
                </a>                
                <nav class="navbar">
                    <a href="#Home">Home</a>
                    <a href="#tiffin">Menu</a>
                    <a href="#About">About</a>
                    <a href="#Contact">Contact Us</a>
                    <a href="#FeedBack">Feedback</a>
                </nav>               
                <a class="icons" href="logout.php"> <i class="fa-solid fa-right-from-bracket"></i></a>         
        </header>
        </div>
    </nav>
   <!--home text-->
   <div class="main1" id="Home" >
            <div class="mainmain">
                <h2>Super tasty food</h2>
                <h1>BALAGHAT</h1>
                <h3>THE BEST TIFFIN SERVICES</h3>
                <br>
                <a href="#About">Read more</a>
            </div>
        </div>
   <!--Menu-->
  <section class="tiffin" id="tiffin">
    <h1 class="heading"> <span> Tiffin Services </span></h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="img/menu5.webp" alt="">
                <h3><i class="fas fa-utensils"></i>Maa Gayatri Tiffin Center</h3>           
            <div class="content">
                <div class="price">
                    ₹3500/month <span>3599</span>
                    <p>Prem Nagar Ward No. 27 Balaghat</p>
                    <a href="maa gayatri.html" class="btn">View Details</a>
                </div>
            </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img/menu4.jpg" alt="">
                <h3><i class="fas fa-utensils"></i>Balaghat Tiffin Service</h3>            
            <div class="content">
                <div class="price">
                    ₹3000/month <span>3599</span>
                    <p>Subhash Nagar, Budhi Balaghat</p>
                    <a href="balaghattiffinservice.html" class="btn">View Details</a>
                </div>
            </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img/menu3.jpg" alt="">
                <h3><i class="fas fa-utensils"></i>D Square Mesh and Restaurant</h3>          
            <div class="content">
                <div class="price">
                    ₹2800/month <span>3599</span>
                    <p>Near Central Bank Branch, Bhatera Balaghgat</p>
                    <a href="D Suare Mesh and Restaurant.html" class="btn">View Details</a>
                </div>
            </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img/menu9.jpg" alt="">
                <h3><i class="fas fa-utensils"></i>Ghar Ka Swad</h3>           
            <div class="content">
                <div class="price">
                    ₹2700/month <span>3599</span>
                    <p>Ward No 1 Near Budhi ITI</p>
                    <a href="" class="btn">View Details</a>
                </div>
            </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img/menu10.jpg" alt="">
                <h3><i class="fas fa-utensils"></i>Neha Tiffin Center</h3>           
            <div class="content">
                <div class="price">
                    ₹3200/month <span>3599</span>
                    <p>Gali No 2 , Near Gayatri Nagar Balaghat</p>
                    <a href="" class="btn">View Details</a>
                </div>
            </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img/menu11.jpg" alt="">
                <h3><i class="fas fa-utensils"></i>Yadav Bhojnalay And Tiffin Center</h3>           
            <div class="content">
                <div class="price">
                    ₹3000/month <span>3599</span>
                    <p>Ganga Nagar , Budhi Balaghat</p>
                    <a href="" class="btn">View Details</a>
                </div>
            </div>
            </div>
        </div>
    </div>
  </section>
     <!--About-->
     <div class="about" id="About">
        <h1 >About Us</h1>
         <div class="aboutus">
             <div class="aboutimg">
                 <img src="img/about1.png" alt="aboutimg">
                </div>
                <div class="aboutcontent">                
                    <p>
                    This website serves as a comprehensive resource for individuals seeking information about tiffin services in their area. Our platform offers detailed listings of various tiffin service providers, including their menus, pricing, and delivery options. Users can search for tiffin services based on location, cuisine, and dietary preferences. Additionally, our website features reviews and ratings from previous customers, providing valuable insights into the quality of service and food. Whether you are a busy professional, a student, or simply seeking a convenient meal solution, our tiffin service information provider website has everything you need to make an informed decision.
                    </p>
                </div>
            </div>           
        </div>
            <!--Contact us-->
            <div class="contactus" id="Contact">
                <div class="contactus1">
            <div class="contactinfo">
                <h1>CONTACT US</h1>
            <h2>Email: sulabhsonwane786@gmail.com</h2>
            <h2>Mobile No : +91 8770631412</h2>
            <br>
            <br>
            <br>
            <br>
    
            
                </div>
            </div>
        </div>
    </div>    
   
     <!--feedback-->
    <div class="feedback" id="FeedBack">        
        <?php 
        if(isset($_POST['Sendfeedback'])) {
            extract($_POST);
            if (strlen($email) > 50) {
                $error[] = 'Email : max lenght is 50';
            }
            $sql="SELECT * FROM feedback WHERE(email='$email'); ";
            $res=mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){              
            }
            if(!isset($error)) {
                $date = date('Y-m-d');
                $options = array("cost" => 4);
                $result=mysqli_query($conn, "INSERT INTO feedback values ('','$name','$email','$feedback','$date')");
                if($result) {
                    $done=2;
                }
                else {
                    $error[] = 'Failed To Send Feedback';
                }        
            }        
        }
        ?>
        <div class="container">
            <h1 style="color: orange; text-align: center;">SEND FEEDBACK</h1>
            <form method="post">
                <div class="input-name">
                <label for="">Name</label>
                <input type="text" placeholder="Enter Your Name"class="name" name="name" required>
            </div>
            <div class="input-name">           
                <label for="">Email</label>
                <input type="email" name="email" id="" placeholder="Enter your Email" class="name" required>
            </div>
            <div class="input-name">
             <label for="">Feedback</label>
                <textarea name="feedback" id="" cols="30" rows="10"class="name"  required></textarea>
            </div>
            <div class="input-name">
                <button class="button" type="submit" name="Sendfeedback">Send feedback</button>
            </div>       
        </form>
    </div>
    </div>
<footer>
    <center>
        <p class="footerclass">	&#169; Copyright Reserved Balaghat tiffin Service. All Rights Reserved </p>
    </center>
</footer>
</body>
</html>