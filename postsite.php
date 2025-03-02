
<?php
$first = $_POST['first'];
$password = $_POST['password'];

//echo "$first";

if($first == "admin" && $password == "admin")
{
?>
<script>
alert("login verified");
window.location="under.php";
</script>
<?php
}
else
{
	
?>
<script>
alert("Incorrect username / password");
window.location="index.html";
</script>
<?php
}


?>
