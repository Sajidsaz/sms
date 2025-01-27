<?php

include "database.php";
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to School Management System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php include "navbar.php"?>

	<!-- <img src="img/1.jpg" style="margin-left: 90px;" class="sha"> -->

	<div id="section">

<?php include "sidebar.php"?>

		<div id="content">
			<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>
			




		</div>




	</div>

	

<!-- <div class="footer">
	
<footer><p>Copy Right &copy; School Management System</p></footer>


</div> -->

</body>
</html>