<?php 
require_once("config.php"); 
if(isset($_POST['sublogin'])){ 
  $login = $_POST['login_var'];
  $_SESSION["login_email"]=  $login;
  $password = $_POST['password'];
  $query = "SELECT * FROM userinfo WHERE (email = '$login')";
  $res = mysqli_query($conn,$query);
  $numRows = mysqli_num_rows($res);
  if($numRows  == 1){
    $row = mysqli_fetch_assoc($res);
    if(password_verify($password,$row['password'])){
      $_SESSION["login_sess"]="1"; 
      header("location:frontpage.php");
    }
    else{ 
      header("location: index.php ?loginerror=".$login);
    }
  }
  else{
    header("location:index.php?loginerror=".$login);
  }
}
?>