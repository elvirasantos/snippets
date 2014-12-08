<?php 
ob_start();

// Set a cookie to the entire domain from a page inside a folder
if(isset($_GET['accept-cookies'])){
	setcookie('accept-cookies','true',time() + 31556925, '/');
	header('Location: ./');
	exit();
}
?>