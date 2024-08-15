<!DOCTYPE html>
<?php
require_once("config.php");
$result = mysqli_query($conn, "SELECT * FROM feedback ORDER by id DESC");
if(!isset($_SESSION['login_admin'])){
    header('Location:adminlogin.php');  
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage_users</title>
    <style>
          *{
        margin: 0;
        padding: 0;
        box-sizing:border-box;
    }
    table {
    display: inline-flex;
    border-collapse: collapse;
    box-align: center;    
    border: 1px solid #ccc;
  }
  h1{
    font-size: 32px;
    list-style: 24px;
    padding: 17px;
    text-align: center;
    color:orange;  
  }
  th {
    background-color: blue;
    color: #fff;
    padding: 15px;
    font-size: 12px;
    border: 1px solid #ccc;
    text-align: left;
    text-align: center;
    border-bottom: 2px solid #fff;
  }
  td {
    background-color: #fff;
    color: #333;
    padding: 15px;
    font-size: 13px;
    border: 1px solid #ccc;
  }
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  body {
    background-color: #fff;
  }
  .button3 {
    background-color: green;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 11px;
    cursor: pointer;
    transition: 0.3s ease-in-out;
  } 
 .button3:hover {
    background-color:red;
  }
  .icons {
    color:black;
  }
    </style>
</head>
<body>
<?php require_once("adminnav.php");?>
    <h1>Manage Users Feedback</h1>
   <table style=" margin-left: 97px;">
        <tr>
            <th>User ID</th>
            <th> Name</th>
            <th>Email </th>
            <th>Feedback</th>
            <th>Date</th>
            <th>Delete</th>
        </tr>
        <?php
        while ($res = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' . $res['id'] . '</td>';
            echo '<td>' . $res['name'] . '</td>';
            echo '<td>' . $res['email'] . '</td>';
            echo '<td>' . $res['feedback'] . '</td>';
            echo '<td>' . $res['date'] . '</td>';
          echo "<td> <a href=\"admindeletefeedback.php?id=$res[id]\"  onclick=\"return confirm('Are you sure want to delete ?')\"><input type='submit' value='Delete' class='button3' ></a></td>";
        }
        ?>
    </table>
    <?php require_once("footer.php");?>
</body>
</html>