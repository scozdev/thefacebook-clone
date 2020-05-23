<?php

session_start();
ob_start();

function loadClasses($className)
{
	require __DIR__ . '/classes/' . strtolower($className) . '.php';
}
spl_autoload_register('loadClasses');

$config = require __DIR__ . '/config.php';

try {
	$db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'], $config['db']['user'], $config['db']['pass']);
} catch (PDOException $e){
	die($e->getMessage());
}


foreach (glob(__DIR__ . '/helper/*.php') as $helperFile){
	require $helperFile;
}


if (isset($_SESSION['user_id'])) {
	$kullanicisor = $db->prepare("SELECT * FROM users where user_id=:user_id");
	$kullanicisor->execute(array(
		'user_id' => $_SESSION['user_id']
	));
	$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);
}

