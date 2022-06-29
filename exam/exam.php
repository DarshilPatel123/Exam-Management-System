<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
?>
<link rel="stylesheet" href="user.css">
<div class="main">
<h1>Welcome to Online Exam - Start Now</h1>
	<div style="display:flex;">
	<div class="segment" style="margin:auto">
		<img src="img/online_exam.png"/>
	</div>
	<div class="segment" style="margin: auto;">
	<h2>Start Test</h2>
	<ul>
		<li><a href="starttest.php">Start Now...</a></li>
	</ul>
	</div>
	</div>
  </div>
<?php include 'inc/footer.php'; ?>