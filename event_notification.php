<?php
$conn = new mysqli("localhost", "root", "", "inout");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$un=$_SESSION["login_user"];

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Report</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">    ​
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
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
                    <li>
                        <a href="report.php">Home</a>

                    </li>
					<li>
                        <?php echo '<a href="docprofile.php?id='.$un.'">Profile</a>';?>

                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>

    <div class="container" style="margin:35px;"">
      <form class="form-inline" action="event_notification.php" method="post" name="placesearch">
            <div class="form-group">
          <input type="text" class="form-control input" name="search_place" value=""  placeholder="Search Place">
            </div>


            <input class="btn btn-success btn btn-default" type="submit" name="submit" value="Search">
      </form>

      <?php
            if(isset($_POST["submit"])){
                $p=$_POST["search_place"];
                $sql="select * from camp where place='$p'";
                $res=mysqli_query($conn,$sql);

                echo '<div class="container">
										<div class="table-responsive">

										<table class="table">
										<tr>
											<th>CampID</th><th>Camp Name</th>
											<th>Date</th><th>Place</th>
											<th>Description</th><th><a href="camp.php?id='.$id.'">Notify</a></th>

										</tr>';
                while($row=mysqli_fetch_assoc($res)){
                    echo '<tr>
										<td>'.$row["campid"].'</td>
										<td>'.$row["campname"].'</td>
										<td>'.$row["date"].'</td>
										<td>'.$row["place"].'</td>
                    <td>'.$row["description"].'</td>
                    <td></td>
                    </tr>';
                }
                echo '		  </table>
                </div>
              </div>

                ';

            }else{


              $sql1="select * from camp ";
              $result=mysqli_query($conn,$sql1);

              echo '<div class="container">
                  <div class="table-responsive">

                  <table class="table">
                  <tr>
                    <th>CampID</th><th>Camp Name</th>
                    <th>Date</th><th>Place</th>
                    <th>Description</th><th></th>

                  </tr>';
              while($row=mysqli_fetch_assoc($result)){
                  echo '<tr>
                  <td>'.$row["campid"].'</td>
                  <td>'.$row["campname"].'</td>
                  <td>'.$row["date"].'</td>
                  <td>'.$row["place"].'</td>
                  <td>'.$row["description"].'</td>
                  <td><a href="camp.php?&id='.$row["campid"].'">Notify</a></td>
                  </tr>';
              }
              echo '		  </table>
              </div>
            </div>

              ';
            }
       ?>
    </div>

  </body>
