<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="background:skyblue;">
<form action = "submit.php" method = "post">
    <div class="form-col" >
    <center><h2>User form</h2></center>

    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
      <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
    </div>

    <div class="col-25">
    <label for="">Your Number:</label>
    </div>
    <div class="col-75">
      <input type="text" class="form-control" name="number" placeholder="Enter Mobile Number">
    </div>

    <div class="col-25">
    <label for="">Your Email Address:</label>
    </div>
    <div class="col-75">
      <input type="text" class="form-control" name="email" placeholder="Enter Email Address">
    </div>
    <center><button type="submit" class="btn btn-primary">Submit</button></center> 
  </div>

  
</form>
</div>













<!-- <form action="submit.php" method="post">
Your Name:<input type="text"  name="name" id="Name" placeholder="Your Name"><br>
Your Mobile Number:<input type="text"  name="number" id="Number" placeholder="Your Mobile Number"><br>
Your Email Address:<input type="text"  name="email" id="Email" placeholder="Your Email"><br>
<button type="submit">submit</button> -->
</form>
</body>
</html>