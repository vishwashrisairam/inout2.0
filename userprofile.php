<!DOCTYPE HTML>
<html>
​
<head>
  <title>Patient Profile </title>
  <link rel="stylesheet" href="css/custom.css">
​
  <link href="css/blog.css" rel="stylesheet">
  <link href="css/profile.css" rel="stylesheet">
  <link href="css/profiletab.css" rel="stylesheet">
​
​
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
​
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
​
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/profile.js"></script>
<script src="js/profiletab.js"></script>
</head>
​
​
<body>
  
    </div>
  <div class="container">
<div class="container">
      <div class="row">
​
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0  toppad" >
​
​
          <div class="panel panel-info" style="width:200%;">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $_SESSION["login_user"]?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-9">

                  <form method="POST" action="" enctype="multipart/form-data" >
                  <div class="form-group">
                    <label for="title">Unique id</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Unique id">
                  </div>
                  <div class="form-group">
                    <label for="Tag">Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Name">
                  </div>
                   <div class="form-group">
                    <label for="Tag">Address</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Address">
                  </div>
                  <div  style="display:inline;">
​
                    <label for="Content">Date of Birth</label><br>
                    <input type="date" id="dob"  name="dob" placeholder="dob"><br><br>
                    <b>Profile pic:</b>
                    <input type="file" name="image" >
                    </div>
                    <br>
                  <div class="form-group">
                    <label for="Content">Gender</label>
                      <input type="text" class="form-control" id="gender" name="gender" placeholder="gender">
                    </div>
​
                    <div class="form-group">
                    <label for="Content">Contact</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Contact">
                    </div>
                    <div class="form-group">
                    <label for="Content">Medical History</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Medical History">
                    </div>
                    <div class="form-group">
                    <label for="Content">disease</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="disease">
                    </div>
​
​
                  <input type="submit" class="btn" value="Done" name="submit">
                </form>
                  </div>
              </div>
            </div>
                 <div class="panel-footer">


                    </div>
​
          </div>
        </div>
      </div>
    </div>
​
​
</div>
​
</body>
</html>
