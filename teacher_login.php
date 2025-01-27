<?php

include "database.php";
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to School Management System</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body class="back">

<?php include "navbar.php"?> 


	<div class="login">
		<!-- <h1 class="heading">School Management System</h1> -->

		<div class="log">
			
		

				<?php
					if(isset($_POST["login"]))

					{
						$sql="select * from staff where TNAME='{$_POST["name"]}'and TPASS='{$_POST["pass"]}'";
						$res=$db->query($sql);
						if($res->num_rows>0)
						{
							$ro=$res->fetch_assoc();
							$_SESSION["TID"]=$ro["TID"];
							$_SESSION["TNAME"]=$ro["TNAME"];
							echo "<script>window.open('teacher_home.php','_self');</script>";
						}
						else
						{
							echo "<div class='error'>Invalid Username or Password</div>";
						}
					}
				
				
				
				?>





<div class="form" >
		<div class="img">
            <img src="sms_logo.jpg" alt="logo">
        </div>
        <div class="title">
            <p>Teacher's Login</p>
        </div>

        <form action="" method="POST">
            <input type="text" name="name" placeholder="Username" required><br>
            <input type="password" name="pass" placeholder="Password" required>
            <br>
            <input style="padding:3px; " type="submit" value="Log in" class="btn" name="login">
            
             
        </form>
        
    </div> 


<!-- <div class="footer">
	
<footer><p>Copy Right &copy; School Management System</p></footer>


</div> -->

</body>
</html>