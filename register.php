<?php
$conn = new mysqli("localhost", "root", "", "inout");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();

$todir = "img/";
$todir1="img/";

if(isset($_POST['submit'])){
$name=$_POST["name"];
$addr=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$dob =$_POST["dob"];
$age=$_POST["age"];
$gender =$_POST["gender"];
$contact=$_POST["contact"];
$handi =$_POST["handi"];

$path=$todir.basename($_FILES['img']['name']);
$path1=$todir.$_FILES['img']['name'];

 move_uploaded_file( $_FILES['img']['tmp_name'],$path1);



$sql="INSERT INTO patient(unique_id,name,dob,age,address,city,state,cno,disease,photo) VALUES ('','$name','$dob','$age','$addr','$city','$state','$contact','$handi','$path1')";

 if (mysqli_query($conn, $sql)) {
    echo "successfully registered";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}


 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>User Registration</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">



		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

		<link href="css/admin_style.css" rel="stylesheet">
	</head>
	<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Health India</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

          </ul>


        <!---->
        </div>
      </div>
</nav>

<div class="container-fluid">

      <div class="row row-offcanvas row-offcanvas-left">

         <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">

            <ul class="nav nav-sidebar">
              <!--
              <li ><a href="admin_home.php">Articles</a></li>
              <li class="active"><a href="#">Gallery</a></li>
              <li><a href="admin_events.php">Events</a></li>
              <li ><a href="admin_users.php">User</a></li>
            -->
            </ul>


        </div><!--/span-->

        <div class="col-sm-9 col-md-10 main">



		  <h1 class="page-header">
            Regsiter New User

          </h1>

          <form method="POST" action="register.php" enctype="multipart/form-data" >

          <div class="form-group">
            <label for="Tag">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
          </div>
           <div class="form-group">
            <label for="Tag">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
          </div>
          <div class="form-group">
           <label for="Tag">City</label>
           <input type="text" class="form-control" id="city" name="city" placeholder="City">
         </div>
         <div class="form-group">
          <label for="Tag">State</label>
          <input type="text" class="form-control" id="state" name="state" placeholder="State">
        </div>
          <div class="form-group">
           <label for="Tag">Age</label>
           <input type="text" class="form-control" id="age" name="age" placeholder="Age">
         </div>
          <div  style="display:inline;">
          ​
            <label for="Content">Date of Birth</label><br>
            <input type="date" id="dob"  name="dob" placeholder="dob"><br><br>
            <b> Pic:</b>
            <input type="file" name="img" >
            </div>
            <br>
          <div class="form-group">
            <label for="Content">Gender</label>
              <input type="text" class="form-control" id="gender" name="gender" placeholder="gender">
            </div>
          ​
            <div class="form-group">
            <label for="Content">Contact</label>
              <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
            </div>

            <div class="form-group">
            <label for="Content">Physically Handicaped</label>
              <input type="text" class="form-control" id="handi" name="handi" placeholder="handicaped">
            </div>
          ​
          ​
          <input type="submit" class="btn" value="Done" name="submit">
          </form>
          </div>

          <hr>
      </div>
	</div>
</div>



	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/admin.js"></script>
	</body>
</html>
