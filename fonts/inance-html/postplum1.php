<?php
	$worktype = $_POST['type'];
	$wname = $_POST['wname'];
	$clientname = $_POST['clientname'];
	$clientarea = $_POST['clientarea'];
	$cnumber = $_POST['cnumber'];
	$empname = $_POST['empname'];
	
	//echo "$wname";

	$con = mysql_connect("localhost","root","");
	mysql_select_db("house",$con);
	
	mysql_query("insert into workunder(worktype, wname,clientname,clientarea,cnumber,empname)values('$worktype', '$wname','$clientname','$clientarea','$cnumber','$empname')");


		//echo "<h1> Your Work Allocated </h1>";

	
?>
<html>
<head>
<title>Allocated</title>
</head>
<style>
a{color:black;}
h1{display:grid;
place-content:center;margin-top:20%;}
a{display:grid;
place-content:center;margin-top:1%;}
</style>
<body bgcolor="navyblue">
<h1>YOUR WORK ALLOCATED</h1>
<a href="index.html">BACK HOME</a>
</body>
</html>