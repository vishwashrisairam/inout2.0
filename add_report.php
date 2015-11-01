<?php
$conn = new mysqli("localhost", "root", "", "inout");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();

$todir = "img/";
$todir1="img/";

if(isset($_POST['submit'])){
$user=$_REQUEST["id"];
$docid=$_POST["docid"];
$dis=$_POST["dis"];
$date =$_POST["date"];
$dreport=$_POST["dreport"];
$place=$_POST["place"];
$hospid =$_POST["hospid"];

$prescription =$_POST["prescription"];

$path=$todir.basename($_FILES['img']['name']);
$path1=$todir.$_FILES['img']['name'];

 move_uploaded_file( $_FILES['img']['tmp_name'],$path1);



$sql="INSERT INTO report(unique_id,doctor_id,disese_found,dignosis_report,docs,dt,hospital,place,medicine) VALUES
 ('$user','$docid','$dis','$dreport','$path1','$date','$hospid','$place','$prescription')";

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
            Create a new report

          </h1>

          <form method="POST" action="add_report.php?id=<?php echo $_REQUEST["id"]?>" enctype="multipart/form-data" >


           <div class="form-group">
            <label for="Tag">DoctorId</label>
            <input type="text" class="form-control" id="docid" name="docid" placeholder="DoctorId">
          </div>
          <div class="form-group">
           <label for="Tag">Disease Diagonised</label>
           <input type="text" class="form-control" id="dis" name="dis" placeholder="Disease diagonised">
         </div>
         <div class="form-group">
          <label for="Tag">Diagnosis Description</label>
          <input type="text" class="form-control" id="state" name="dreport" placeholder="Diagnosis report">
        </div>
          <div class="form-group">
           <label for="Tag">HospitalId</label>
           <input type="text" class="form-control" id="hospid" name="hospid" placeholder="Hospital Id">
         </div>
         <div class="form-group">
          <label for="Tag">Place</label>
          <input type="text" class="form-control" id="place" name="place" placeholder="Place">
        </div>
          <div  style="display:inline;">
          ​
            <label for="Content">Date</label><br>
            <input type="date" id="date"  name="date" placeholder="date"><br><br>
            <b>Docs:</b>
            <input type="file" name="img" >
            </div>
            <br>
          <div class="form-group">
            <label for="Content">Prescription</label>
              <input type="text" class="form-control" id="prescription" name="prescription" placeholder="precription">
            </div>        ​
          ​
          <input type="submit" class="btn" value="Done" name="create">
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
