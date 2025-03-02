<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("house",$conn);

$name = $_POST['name'];
$ph = $_POST['ph'];
$email = $_POST['email'];
$msg = $_POST['msg'];


mysql_query("insert into conta(name,ph,email,msg)values('$name','$ph','$email','$msg')");
?>
<body bgcolor="#FFGG99">
<br><br>
<center> <h1> Our Site send this Contact - Concern Department Reposible very soon.. </h1></center>

<br>

Click here back site <a href="index.html"> Click Here </a>
