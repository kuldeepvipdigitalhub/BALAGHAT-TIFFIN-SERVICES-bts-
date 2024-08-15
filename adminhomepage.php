<!DOCTYPE html>
<?php require_once("config.php");?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">
    <title>Admin Page</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing:border-box;
    }
    .toph1 h1 {
        font-size:20px;
        position: relative;
        top:30px;
        text-align:center;
        color:orange;
    }
    .main {
        margin-top: 10%;
        margin-left:7%;
        margin-right:7%;
        display: flex;
        justify-content:space-around;
        align-items:center;
    }
    .oneside a {
        font-size:15px;
        padding:10px 15px;
        background:orange;
        color:#fff;
        border-radius:5px;
        transition:0.5s ease-in-out;
    }
    .oneside a:hover {
        background:#fff;
        color:orange;
    }
    .middle img {
        height:200px;
        width:200px;
    }
    </style>
</head>
<body>
<?php require_once("adminnav.php");?>
    <div class="toph1">
        <h1>Welcome To Admin Panel of <b>BALAGHAT TIFFIN SERVICES</b></h1>
    </div>
    <div class="main">
        <div class="oneside">
       <a href="manageuser.php">Manage User Account</a>
        </div>
        <div class="middle">
            <img src="img/png8.png" alt="img">
        </div>
        <div class="oneside">
        <a href="managefeedback.php">Manage User Feedback</a>
        </div>
    </div>   
       <?php require_once("footer.php");?>
    </body>
</html>