<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("house",$con);

$work_name =$_POST['work_name'];  
$customer_name=$_POST['customer_name'];
$customer_address=$_POST['customer_address'];
$employee_name=$_POST['employee_name'];
$feedback=$_POST['feedback'];

echo "$feedback";

mysql_query("insert into complaint(work_name,customer_name,customer_address,employee_name,feedback)values('$work_name','$customer_name','$customer_address','$employee_name','$feedback')");

?>


<br>
<center> <h2> Your complaint is Registered... <br>  <a href="index.html"> Back </h2> 