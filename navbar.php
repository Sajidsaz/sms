

	
<nav class="navbar">
    <div class="container">
      
        
     


	
<?php



if (isset($_SESSION["AID"])) {
	
	echo '

	<h1 class="brand">School Management System</h1>
      <ul class="nav-menu" id="nav-menu">
	  <li><a href="admin_home.php">Admin</a></li>
	  <li><a href="teacher_login.php">Teacher</a></li>
	  <li><a href="logout.php">logout</a></li>

	';
}

else{

echo '

	<h1 class="brand">School Management System</h1>
      <ul class="nav-menu" id="nav-menu">
	  <li><a href="index.php">Admin</a></li>
	  <li><a href="teacher_login.php">Teacher</a></li>
	  <li><a href="logout.php"></a></li>

	';

}



?>

	</ul>
  </div>
</nav>