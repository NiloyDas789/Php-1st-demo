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
  <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css">
  <script src=" ../Jquery/jquery-3.5.1.min.js"></script>
  <script src=" ../Bootstrap/js/bootstrap.js"></script>
</head>
<body>

<div class="container">
  <h2 class="jumbotron alert-warning text-center">Update Student Information</h2>
  <div class="alert-danger">
    <?php
    if (isset($_GET['msg'])) {
       echo "<div class='alert alert-success' role='alert'>".$_GET['msg']."</div>";
     } 
    ?>
  </div>
  
  <form action="update.php" method="POST" class="is-valid">
    <input type="hidden"  value="<?php echo $sudipto->id; ?>" name="id" required>
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" value="<?php echo $sudipto->name; ?>" name="uname" required>
      
      
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" value="<?php echo $sudipto->pass; ?>" name="pswd" required>
      
      
    </div>
    <div class="form-group">
      <label for="num">Mobile</label>
      <input type="number" class="form-control" id="num" value="<?php echo $sudipto->mobile; ?>" name="num" required>
      
      
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on terms & conditions.
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>