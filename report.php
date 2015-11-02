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
<<<<<<< HEAD
                        <a href="event_notification.php">Notify for camp!</a>
                    </li>
					<li>
                        <a href="register.php">New Register</a>
                    </li>
					
					<li>
=======
>>>>>>> origin/master
                        <?php echo '<a href="docprofile.php?id='.$un.'">Profile</a>';?>

                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
<<<<<<< HEAD
                    
=======
                    <li>
                        <a href="#contact"></a>
                    </li>
>>>>>>> origin/master
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>
    <div class="container" style="margin:3em">
      <form class="form-inline" action="report.php" method="post" name="idsearch">
            <div class="form-group">
				<input type="text" class="form-control input" name="search_id" value=""  placeholder="Enter unique id of patient">
            </div>
            <input class="btn btn-success btn btn-default" type="submit" name="submit_id" value="Search">
      </form>
	  <br>

<<<<<<< HEAD
      
=======
      <form class="form-inline" action="report.php" method="post" name="placesearch">
            <div class="form-group">
			    <input type="text" class="form-control input" name="search_place" value=""  placeholder="Search Place">
            </div>
            <div class="form-group">
				<input type="text" class="form-control input" name="search_time" value=""  placeholder="Search Time">
            </div>

            <input class="btn btn-success btn btn-default" type="submit" name="submit" value="Search">
      </form>
	  <br>
      <form class="form-inline" action="report.php" method="post" name="disease search">
            <div class="form-group">
				<input type="text" class="form-control input" name="search_disease" value=""  placeholder="Enter disease">

            </div>
            <input class="btn btn-success btn btn-default" type="submit" name="submit_disease" value="Search">
      </form>
>>>>>>> origin/master

      <?php
          if(isset($_POST["submit_id"])){
              $id=$_POST["search_id"];
              $sql ="select * from report where unique_id ='$id' ORDER BY dt ";

              $sql1="select * from patient WHERE unique_id='$id'";
              $r=mysqli_query($conn,$sql1);

               if(mysqli_num_rows($r)>0){
                 $row1 = mysqli_fetch_assoc($r);



                 echo '

                 <div class="row" style="padding:30px;">
                 <div class="col-lg-6">
                  <h1 class="tab-link current" data-tab="tab-1"><b>Profile</h1>                                             
                 <div class="panel-body" style="border:dotted;height:400px;overflow:auto;">
          
                      <div class="col-sm-12 col-md-2 sidebar-offcanvas">
                     <img alt="User Pic" src="'.$row1["photo"].'" class="img img-responsive" style="height:20em"></div>
                    
                     <div class=" col-md-8 col-lg-8 ">


                     <ul class="tabs">
                     


                     </ul>

               <div id="tab-1" class="tab-content current">
                     <table class="table table-user-information">
              <tbody>

              <tr>
               <td>Name</td>
               <td>'.$row1["name"].'</td>
              </tr>
              <tr>
               <td>Dob</td>
               <td>'.$row1["dob"].'</td>
              </tr>


                    <tr>
               <td>Age</td>
               <td>'.$row1["age"].'</td>
              </tr>
               <tr>
               <td>Address</td>
               <td>'.$row1["address"].'</td>
              </tr>
              <tr>
               <td>Contact No</td>
               <td>'.$row1["cno"].'</td>
              </tr>


              <tr>
              <td>Physically Disabled</td>
              <td>'.$row1["physical"].'</td>
              </tr>

              </tbody>
              </table>
              </div>
              </div>
              </div>

                <hr> ';




              } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }

               
              if ($res=mysqli_query($conn, $sql))

              
               {
              //  print_r($res);
<<<<<<< HEAD
                 
                 echo '</div><h1>Reports</h1>
				 <button><div style="float:right;"><a href="add_report.php?id='.$id.'">New Report </a></div></button><div class="panel-body col-lg-6" style="height:500px;overflow:auto;">';
=======
                 echo '
                 <div>

                 <a href="add_report.php?id='.$id.'"> Add </a></div>';

                 echo '</div><h1>Reports</h1><div class="panel-body col-lg-6" style="height:500px;overflow:auto;">';
>>>>>>> origin/master
                 
                 while($row = mysqli_fetch_array($res)) {
                   echo'<hr><div id="tab-1" class="tab-content current">
                         <table class="table table-user-information">

                  <tbody>
                    
                  <tr>
                   <td>Report ID</td>
                   <td>'.$row["reportid"].'</td>
                  </tr>
                  <tr>
                   <td>Patient ID</td>
                   <td>'.$row["unique_id"].'</td>
                  </tr>


                        <tr>
                   <td>Doctor Id</td>
                   <td>'.$row["doctor_id"].'</td>
                  </tr>
                   <tr>
                   <td>Disease</td>
                   <td>'.$row["disese_found"].'</td>
                  </tr>
                  <tr>
                   <td>Report</td>
                   <td>'.$row["dignosis_report"].'</td>
                  </tr>
                  <tr>
                  <tr>
                   <td>DATE</td>
                   <td>'.$row["dt"].'</td>
                  </tr>
                  <tr>
                  <td>Hospital</td>
                  <td>'.$row["hospital"].'</td>
                  </tr>
                  <tr>
                   <td>Place</td>
                   <td>'.$row["place"].'</td>
                  </tr>
                  </tbody>
                  </table>
                  </div>
                  <hr>';

                }


             } else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }

          }elseif(isset($_POST["submit"])){
              if(isset($_POST["search_place"]) && $_POST["search_time"]==''){
                  $p=$_POST["search_place"];
                  $sql="select * from report where place='$p'";
                  $res=mysqli_query($conn, $sql);
                  if (mysqli_query($conn, $sql)) {
                    $row=mysqli_fetch_assoc($res);
                    while($row=mysqli_fetch_assoc(mysqli_query($conn, $sql))){
                      echo $row["reportid"];
                      echo $row["unique_id"];
                      echo $row["doctor_id"];
                      echo $row["disese_found"];
                      echo $row["dignosis_report"];
                      echo $row["docs"];
                      echo $row["date/time"];
                      echo $row["hospital"];
                      echo $row["place"];
                      echo $row["medicine"];
                    }



                 } else {
                     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 }
              }elseif(isset($_POST["search_time"]) && $_POST["search_place"]==''){
                $t=$_POST["search_time"];
                $sql="select * from report where medicine='$t'";

                if (mysqli_query($conn, $sql)) {
                   echo '

                   <div>
                    <h1>Result of search by time</h1>
                   </div>';

               } else {
                   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
               }

             }elseif(isset($_POST["search_place"]) && isset($_POST["search_time"]) ){
                    $p=$_POST["search_place"];
                    $t=$_POST["search_time"];

                    $sql="select * from report where place='$p' and medicine='$t'";

                    if (mysqli_query($conn, $sql)) {
                       echo '
                       <div>
                        <h1>Result of search by time and place</h1>
                       </div>';

                   } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                   }


             }

          }elseif(isset($_POST["submit_disease"])){
              $d=$_POST["search_disease"];
              $sql="select * from report where disese_found='$d'";

              if (mysqli_query($conn, $sql)) {
                 echo '

                 <div>
                  <h1>Result of search by disease</h1>
                 </div>';

             } else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }

          }


       ?>

       <div class="" id="all-reports">

       </div>
  </div>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
