<?php 
	$user=json_decode(file_get_contents('php://input'));  //get user from 
	if($user->mail=='elgaliamine@gmail.com' && $user->pass=='1234') 
		session_start();
		$_SESSION['uid']=uniqid('ang_');
		print $_SESSION['uid'];
?>