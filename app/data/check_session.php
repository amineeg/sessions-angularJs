<?php 
	session_start();
	if( isset($_SESSION['uid']) ) print 'authentified';
?>