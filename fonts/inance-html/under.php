
   <!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ITACHI</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
					<!-- call no -->
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>   
					<!-- Email Id -->
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
                ITACHI
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contacts</a>
                </li>
			<li class="nav-item">
                  <a class="nav-link" href="viewcomplaints.php">View Complaints</a>
                </li>


                <li class="nav-item">
                  <a class="nav-link" href="under.php">Work undergoing</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->




<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Our House Hold Work Under Going....</h1>


<br><br>
PLUMPING UNDER GOING WORK 
<table id="customers">
  <tr>
     <th>Type of work</th>
    <th>Work Name</th>
    <th>Customer Name</th>
	<th>Customer Area</th>
    <th>Customer number</th>
	<th>Employee Name </th>
  </tr>
 
 
				<?php
				$conn = mysql_connect("localhost","root","");
mysql_select_db("house",$conn);


				$res = mysql_query("select * from workunder where worktype='Plumping'");
				while($row = mysql_fetch_array($res))
				{
					$worktype = $row['worktype'];
					$wname = $row['wname'];
					$clientname = $row['clientname'];
					$clientarea = $row['clientarea'];
					$cnumber = $row['cnumber'];
					$empname = $row['empname'];
					
					echo "<tr><td>$worktype<td>$wname<td>$clientname <td>$clientarea <td>$cnumber	 <td>$empname </tr>";
				}
				?>
				
 
 
 
</table>
<br


<br><br>
ELECTRICAL UNDER GOING WORK 
<table id="customers">
  <tr>
    <th>Type of work</th>
    <th>Work Name</th>
    <th>Customer Name</th>
	<th>Customer Area</th>
    <th>Customer number</th>
	<th>Employee Name </th>
  </tr>
 
 
				<?php
				$conn = mysql_connect("localhost","root","");
mysql_select_db("house",$conn);


				$res = mysql_query("select * from workunder where worktype='Electrical'");
				while($row = mysql_fetch_array($res))
				{
					$worktype = $row['worktype'];
					$wname = $row['wname'];
					$clientname = $row['clientname'];
					$clientarea = $row['clientarea'];
					$cnumber = $row['cnumber'];
					$empname = $row['empname'];
					
					echo "<tr><td>$worktype<td>$wname<td>$clientname <td>$clientarea <td>$cnumber<td>$empname </tr>";
				}
				?>
				
 
 
 
</table>
<br>

<br><br>
BUILDING INNOVATION UNDER GOING WORK 
<table id="customers">
  <tr>
    <th>Type of work</th>
    <th>Work Name</th>
    <th>Customer Name</th>
	<th>Customer Area</th>
    <th>Customer number</th>
	<th>Employee Name </th>
  </tr>
 
 
				<?php
				$conn = mysql_connect("localhost","root","");
mysql_select_db("house",$conn);


				$res = mysql_query("select * from workunder where worktype='Building innovation'");
				while($row = mysql_fetch_array($res))
				{
					$worktype = $row['worktype'];
					$wname = $row['workname'];
					$clientname = $row['clientname'];
					$clientarea = $row['clientarea'];
					$cnumber = $row['cnumber'];
					$empname = $row['empname'];
					
					echo "<tr><td>$worktype<td>$wname<td>$clientname <td>$clientarea <td>$cnumber<td>$empname </tr>";
				}
				?>
				
 
 
 
</table>
<br>

</body>
</html>









</body>

</html>