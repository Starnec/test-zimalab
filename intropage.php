<?php 
session_start();
if (!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>


<?php include("includes/header.php"); \header\addHeader(); ?>
<div id="welcome">	
	<h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
	<p><a href="logout.php">Выйти</a> Здесь!</p>
</div>

<?php include("includes/footer.php"); \footer\addFooter(); ?>
	

<?php
}
?>
