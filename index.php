<?php
    include "database.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saz School Management System</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body >


     <?php include "navbar.php"?> 



<div class="login">
    <!-- <div class="heading"><h1 >School Management System</h1></div> -->

    <div class="log">
        


        <?php


        if(isset($_POST["login"])){

        
$sql = "SELECT * from admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";

$res = $db->query($sql);

if($res->num_rows>0){

    $ro = $res->fetch_assoc();

    $_SESSION["AID"]=$ro["AID"];
    $_SESSION["ANAME"]=$ro["ANAME"];

    echo "<script>window.open('admin_home.php','_self');</script>";

}
else
{


    echo "<div class='error'>Invalid Username and password</div>";
}

        }

        ?>
	<div class="form" >
        <div class="img">
            <img src="sms_logo.jpg" alt="logo">
        </div>
        <div class="title">
            <p>Admin Login</p>
        </div>

        <form action="" method="POST">
            <input type="text" name="aname" placeholder="Username" required><br>
            <input type="password" name="apass" placeholder="Password" required>
            <br>
            <input style="padding:3px; " type="submit" value="Log in" class="btn" name="login">
            
             
        </form>
        
    </div>   

   
</body>
</html>