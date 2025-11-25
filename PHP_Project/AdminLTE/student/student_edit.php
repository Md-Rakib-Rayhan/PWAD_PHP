<?php include_once("../inc/sql/db_config.php"); ?>

<?php
session_start();
if (!isset($_SESSION["logedin"])){
  header("location: $home_url");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Validation Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<?php
  include("../inc/top_nav.php");
?>
  <!-- /.navbar -->

  <!-- Main Left Sidebar Container -->
<?php
  include("../inc/left_slidebar.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Entry</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Admit New Student</h3>
              </div>
              <!-- /.card-header -->




              <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM students WHERE id = $id;";
                $row_data = $db->query($sql);
                $data = $row_data->fetch_object();

                

                if (
                      isset($_POST['update']) &&
                      !empty($_POST['name']) &&
                      !empty($_POST['dob']) &&
                      !empty($_POST['location']))
                {
                  extract($_POST);
                  $sql_u = "UPDATE students SET name ='$name', date_of_birth ='$dob', location ='$location' WHERE id = $id";

                  $db->query($sql_u);
                  if($db->affected_rows){
                    echo "<div class='alert alert-success'>Successfully Updated</div>";
                  }else{
                    echo "<div class='alert alert-danger'>Not Updated</div>";
                  }
                }elseif(isset($_POST['update'])){
                  echo "<div class='alert alert-danger'>Do not Put Any Empty</div>";
                }
              
              ?>


              <!-- form start ------------------------------------------------------------------>
              <form id="quickForm" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value ="<?php echo $data->name; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date of birth</label>
                    <input type="date" name="dob" class="form-control" id="exampleInputPassword1" value ="<?php echo $data->date_of_birth; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Enter Your Location" id="exampleInputPassword1" value ="<?php echo $data->location; ?>" >
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                  <a href="student_list.php" class="btn btn-dark">Go Back</a>
                </div>
              </form>


              
              




            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->



</body>
</html>
