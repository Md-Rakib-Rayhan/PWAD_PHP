<?php
include_once("../inc/sql/db_config.php");

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

                if (
                      isset($_POST['submit']) &&
                      !empty($_POST['name']) &&
                      !empty($_POST['dob']) &&
                      !empty($_POST['location']))
                {
                  extract($_POST);

                  if (!empty($_FILES["photo"]["name"])) {
                    $photo_name = $_FILES["photo"]["name"];
                    $tmp_name = $_FILES["photo"]["tmp_name"];
                    $upload_path = "student/upload/";
                    $full_path = $upload_path . $photo_name;
                    move_uploaded_file($tmp_name, "upload/". $photo_name);
                  }





                  $sql = "INSERT INTO students VALUE(NULL,'$name', '$dob', '$location', '$full_path');";
                  $db->query($sql);
                  if($db->affected_rows){
                    echo "<div class='alert alert-success'>Successfully Inserted</div>";
                  }else{
                    echo "<div class='alert alert-danger'>Not Inserted</div>";
                  }
                }elseif(isset($_POST['submit'])){
                  echo "<div class='alert alert-danger'>Do not Put Any Empty</div>";
                }
              
              ?>


              <!-- form start ------------------------------------------------------------------>
              <form id="quickForm" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date of birth</label>
                    <input type="date" name="dob" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Enter Your Location" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Photo</label>
                    <input type="file" name="photo">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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


<script>
// $(function () {
//   $.validator.setDefaults({
//     submitHandler: function () {
//       alert( "Form successful submitted!" );
//     }
//   });
//   $('#quickForm').validate({
//     rules: {
//       email: {
//         required: true,
//         email: true,
//       },
//       password: {
//         required: true,
//         minlength: 5
//       },
//       terms: {
//         required: true
//       },
//     },
//     messages: {
//       email: {
//         required: "Please enter a email address",
//         email: "Please enter a valid email address"
//       },
//       password: {
//         required: "Please provide a password",
//         minlength: "Your password must be at least 5 characters long"
//       },
//       terms: "Please accept our terms"
//     },
//     errorElement: 'span',
//     errorPlacement: function (error, element) {
//       error.addClass('invalid-feedback');
//       element.closest('.form-group').append(error);
//     },
//     highlight: function (element, errorClass, validClass) {
//       $(element).addClass('is-invalid');
//     },
//     unhighlight: function (element, errorClass, validClass) {
//       $(element).removeClass('is-invalid');
//     }
//   });
// });
</script>
</body>
</html>
