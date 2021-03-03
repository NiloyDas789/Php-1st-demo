<?php
include ('controller/controller.php');
$niloy=new controller;
$sql="SELECT * FROM `project1` WHERE `bin`='1'";
$sudipto=$niloy->read($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demo Website</title>
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

<div class="container" >
  <div class="jumbotron text-center"style="margin-top:60px;">
    <h2>Student Information</h2>
  </div>
  <div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Niloy</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="Registration.php">Registration</a></li>
      <li><a href="model/recycle.php">Bin</a></li>
    </ul>
  </div>
</nav>
  </div>
  <div class="alert-danger">
    <?php
    if (isset($_GET['msg'])) {
       echo "<div class='alert alert-success' role='alert'>".$_GET['msg']."</div>";
     } 
    ?>
  </div>
  <div class="alert-danger">
    <?php
    if (isset($_GET['error'])) {
       echo "<div class='alert alert-danger' role='alert'>".$_GET['error']."</div>";
     } 
    ?>
  </div>
             
  <table class="table table-hover table-striped table-striped table-bordered" id="example" style="width: 100%"> 
    <thead>
      <tr>
        <th>Sl</th>
        <th>Username</th>
        <th>Password</th>
        <th>Mobile</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($sudipto) {
        $sl=1;
        while ($row=$sudipto->fetch_object()) {
          
        ?>
      <tr>
        <td><?php echo $sl++;  ?></td>
        <td><?php echo $row->name;  ?></td>
        <td><?php echo $row->pass;  ?></td>
        <td><?php echo $row->mobile;  ?></td>
        <td>
          <a href="model/info.php?id=<?php echo $row->id ?>" class="btn btn-success" role="button"><b><i>Info</i></b>  <span class="glyphicon glyphicon-zoom-in"></span></a>

          <a href="model/edit.php?id=<?php echo $row->id ?>" class="btn btn-warning" role="button"><b><i>Edit</i></b>  <span class="glyphicon glyphicon-plus"></span></a>

          <a href="model/bin.php?id=<?php echo $row->id ?>" class="btn btn-danger" role="button" ><b><i>Delete</i></b> <span class="glyphicon glyphicon-remove"> </a></td>
        

      </tr>
      <?php 
       }
      }
       ?>
    </tbody>
  </table>
</div>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

</body>
</html>
