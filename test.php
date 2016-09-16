<?php
	$user_ip=$_SERVER['REMOTE_ADDR'];
	
	function echo_ip()
	{
		$string = "Your IP address is: ".$user_ip;
	}
?>