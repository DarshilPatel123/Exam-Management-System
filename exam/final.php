<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
$userid = Session::get("userid");
?>
<link rel="stylesheet" href="user.css">
<div class="main">
<h1>You are done!</h1>

<div class="starttest">
	<p>Congrats! You have just competed the test.</p>
	<p>Final Score: 

		<?php 
		if (isset($_SESSION['score'])) {
			echo $_SESSION['score'];
			$marks=$_SESSION['score'];
			$upd=$usr->updateMarks($userid,$marks);
			if (isset($upd)) {
				echo '<br>';
				echo $upd;
			}
			unset($_SESSION['score']);
		}
		 ?>

	</p>

	<a href="viewans.php">View Ans</a>
	<a href="starttest.php">Start Again</a>
</div>
	
  </div>
<?php include 'inc/footer.php'; ?>