<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Client Selected Work </h3>
<?php
$proposal = $_POST['proposal'];
//echo "$proposal";
?>
<div>
  <form action="postelectric.php" method="post" name="frm2">
    <label for="fname">Work Name</label>
    <input type="text" id="wname" name="wname" value="<?php echo $proposal; ?>" placeholder="Your name..">

    <label for="lname">Client Name</label>
    <input type="text" id="lname" name="clientname" placeholder="Your name..">

    <label for="lname">Client Area</label>
    <input type="text" id="lname" name="clientarea" placeholder="Client Area..">

	<label for="lname">Amount Quotated</label>
    <input type="text" id="lname" name="amount" placeholder="your quotation Amount"  value="1000">


	<label for="country">Working Employee Name</label>
    <select name="empname">
	<option>Naganathan</option>
	<option>Arjun</option>
	<option>RamPRasath</option>
    </select>
  
    <input type="submit" value="Submit" name="submit">
	
	<br> <a href="plumbing.html"> Click Here Back </a> 
  </form>
</div>

</body>
</html>

