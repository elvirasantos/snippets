<?php 
$config['db'] = array(
	'username' 	=> 'myusername',
	'password' 	=> 'mypassword',
	'dbname' 	=> 'mydbname'
	);

try{
	$db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);

// for accents and special characters
	$db->exec("set names utf8");

} catch(PDOException $e){
	die('Unable to connect.');
}
?>