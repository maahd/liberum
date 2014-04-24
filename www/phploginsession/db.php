<?php
		header('Access-Control-Allow-Origin: *');
		$conn = mysql_connect("localhost","root","S3mlpp22x");
		$db   = mysql_select_db("technotip",$conn);
?>