<div class="sidebar">
	
<h3 class="text">Dashboard</h3> <br><hr><br>

<ul class="side">
	

<?php



if (isset($_SESSION["AID"])) {
	
	echo '

	<li class="li"><a href="admin_home.php" style="text-decoration: none; text-align:center;">School Information</a></li>
	<li class="li"><a href="add_class.php" style="text-decoration: none; text-align:center;">Class</a></li>
	<li class="li"><a href="add_sub.php" style="text-decoration: none; text-align:center;">Subject</a></li>
	<li class="li"><a href="add_staff.php" style="text-decoration: none; text-align:center;">Staff</a></li>
	<li class="li"><a href="view_staff.php" style="text-decoration: none; text-align:center;">View Staff</a></li>
	<li class="li"><a href="set_exam.php" style="text-decoration: none; text-align:center;">Set Exam</a></li>
	<li class="li"><a href="view_exam.php" style="text-decoration: none; text-align:center;">View Exam</a></li>
	<li class="li"><a href="student.php" style="text-decoration: none; text-align:center;">View Student</a></li>
	<li class="li"><a href="logout.php" style="text-decoration: none; text-align:center;">Logout</a></li>


	';
}

else{


echo '

	<li class="li"><a href=""></a></li>
	<li class="li"><a href=""></a></li>
	<li class="li"><a href=""></a></li>
	


	';
}



?>


</ul>

</div>