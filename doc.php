<?php
$conn = new mysqli("localhost", "root", "", "inout");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$id= $_REQUEST["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<!--META-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<!--STYLESHEETS-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Health India</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">



</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Health India</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">Home</a></li>
              <li><a href="update_docprofile.php">Profile</a></li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
      
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<div class="container">

      <div class="row row-offcanvas row-offcanvas-left">

        <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">


        </div>
       <div class="panel-heading" style="border:solid 2px;color:blue;">
        <div class="panel-body">
                <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center">

                      <?php
                         $sql="SELECT  *  from doctor WHERE doctorid='$id'";
                         $result=mysqli_query($conn,$sql);

                          if(mysqli_num_rows($result)>0){
                            $row = mysqli_fetch_assoc($result);



                            echo '
                                <img alt="User Pic" src="'.$row["photo"].'" class="img img-responsive" style="height:20em"></div>

                                <div class=" col-md-9 col-lg-9 ">

                                <ul class="tabs">
                                <li class="tab-link current" data-tab="tab-1"><b>Profile</b></li>


                                </ul>

                          <div id="tab-1" class="tab-content current">
                                <table class="table table-user-information">
                      <tbody>

                        <tr>
                          <td>Email</td>
                          <td>'.$row["email"].'</td>
                        </tr>
                        <tr>
                          <td>Institute</td>
                          <td>'.$row["institute"].'</td>
                        </tr>

                           <tr>
                               <tr>
                          <td>Specialization</td>
                          <td>'.$row["specialization"].'</td>
                        </tr>
                          <tr>
                          <td>Year Of Passing</td>
                          <td>'.$row["year of passing"].'</td>
                        </tr>
                        <tr>
                          <td>Hospital</td>
                          <td>'.$row["hospital"].'</td>
                        </tr>
                        <tr>
                          <td>City</td>
                          <td>'.$row["city"].'</td>
                        </tr>



                      </tbody>
                    </table>
                            ';


                          }
                      ?>

                          </div>
                        </div>
            </div>
	</div>
</div>
</div>

​



</body>
</html>
​