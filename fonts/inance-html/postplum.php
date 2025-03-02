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
  position:relative;
  left:550px;
  width: 200px;
  background-color:  lightgreen;
  color: black;
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
 TYPE OF WORKnd-color: #f2f2f2;
  padding: 20px;
}   

</style>
<body bgcolor="lightblue">

<h3>Customer Selected work </h3>
<?php
$proposal = $_POST['proposal'];
$type  = $_POST['type'];

//echo "$type $proposal";
?>
<div>
  <form action="postplum1.php" method="post" name="frm2">
    <label for="fname">TYPE OF WORK </label>
	
<select name="type">
    <option>-----</option>
	<option>Plumbing</option>
	<option>Electrical</option>
	<option>Building innovation</option>

	</select>
	
	<label for="fname">Work Name</label>
    <input type="text" id="fname" name="wname" value="<?php echo $proposal; ?>" placeholder="work name..">

   
    <label for="lname">Customer Name</label>
    <input type="text" id="lname" name="clientname" placeholder="Your name..">

    <label for="lname">Customer Area</label>
    <input type="text" id="lname" name="clientarea" placeholder="Customer Area..">
	
    <label for="iname">Customer number</label>
	<input type="text" id="iname" name="cnumber" placeholder="customer number.."><br>

	<label for="country">Working Employee Name</label>

    <select name="empname">
	<option>----</option> 
	<option>Naganathan</option>
	<option>Arjun</option>
	<option>Ramprasath</option>
	<option>Anand</option>
	<option>Hari</option>
	<option>surya</option>
	<option>Karunesh</option>
	<option>Riswan</option>
	<option>chantru</option>
    </select>
  
    <input type="submit" value="Submit" name="submit">
	
	<br> <a href="plumbing.html"> Click Here Back </a> 
  </form>
</div>

</body>
</html>

