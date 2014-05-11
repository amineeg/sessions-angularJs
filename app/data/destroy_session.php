<?php 
	session_id('uid');
	session_start();
	session_destroy();
	session_commit();
?>