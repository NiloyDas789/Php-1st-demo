<?php 
if (isset($_GET['id'])) {
  $id=$_GET['id'];
}

include ('../controller/controller.php');
$niloy=new controller;
$sql="SELECT * FROM `project1` Where id=".$id;
$sudipto=$niloy->read($sql)->fetch_object();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="jumbotron text-center" style="margin-top:60px;">Student Information</h2>

  <div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="../index.php">Home</a></li>
      <li><a href="../Registration.php">Registration</a></li>
      <li><a href="#">Bin</a></li>
    </ul>
  </div>
</nav>
  </div>
  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <div class="panel-heading"><b><?php echo $sudipto->name; ?></b></div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <div class="panel-heading"><b><?php echo $sudipto->pass; ?></b></div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <div class="panel-heading"><b><?php echo $sudipto->mobile; ?></b></div>
      </div>
    </div>
  </div>


</div>

  
  

</body>
</html>
