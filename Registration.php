<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</head>
<body>
  </div>
  <div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Registration</a></li>
      <li><a href="model/recycle.php">Bin</a></li>
    </ul>
  </div>
</nav>
  </div>

<div class="container">
  <h2 class="jumbotron text-center" style="margin-top:60px;">Student Registration</h2>


  <div class="alert-danger">
    <?php
    if (isset($_GET['msg'])) {
       echo "<div class='alert alert-success' role='alert'>".$_GET['msg']."</div>";
     } 
    ?>
  </div>

  
  <form action="store.php" method="POST" class="is-valid">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      
    </div>
    <div class="form-group">
      <label for="num">Mobile</label>
      <input type="number" class="form-control" id="num" placeholder="Enter Mobile Number" name="num" required>
      
      
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on terms & conditions.
        <div class="invalid-feedback"><hr>Check this checkbox to continue.</hr></div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>