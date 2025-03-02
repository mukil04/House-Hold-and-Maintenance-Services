<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client Complaints Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: skyblue;
    }
    .container {
      max-width: 500px;
    }
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    .card-header {
      background-color: #007bff;
      color: #fff;
      border-radius: 10px 10px 0 0;
      text-align: center;
    }
    .form-control {
      border-radius: 5px;
    }
    .btn-primary {
      border-radius: 5px;
    }
    a {
      color: #007bff;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h3 class="mb-0">Customer Complaints Form</h3>
    </div>
    <div class="card-body">
      <?php
      $proposal = $_POST['proposal'];
      //echo "$proposal";
      ?>
      <form action="complaintphp.php" method="post" name="frm2">
     
  <div class="form-group">
    <label for="wname">Work Name</label>
    <select class="form-control" id="wname" name="work_name">
      <option value="work1">Building innovations</option>
      <option value="work2">Electrical Service</option>
      <option value="work3">plumbing Service</option>
      <!-- Add more options as needed -->
    </select>
  </div>
 
  <div class="form-group" >
    <label for="clientname">Customer Name</label>
    <input type="text" class="form-control" id="clientname" name="customer_name" placeholder="Customer Name">
  </div>
  <div class="form-group">
    <label for="clientarea">Customer Address</label>
    <input type="text" class="form-control" id="clientarea" name="customer_address" placeholder="Customer address">
  </div>
  
  <div class="form-group">
    <label for="empname">Working Employee Name</label>
    <input class="form-control" id="empname" type="text" name="employee_name">
  
  </div>
   <div class="form-group">
    <label for="feedback">Feedback</label>
    <textarea class="form-control" id="feedback" name="feedback" rows="3" placeholder="Please provide your feedback"></textarea>
  </div>
  <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
  <br>
  <p class="text-center">Or <a href="plumbing.html">click here</a> to go back.</p>
</form>
