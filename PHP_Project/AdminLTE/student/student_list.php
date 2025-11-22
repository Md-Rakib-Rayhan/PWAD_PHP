<?php include_once("../inc/sql/db_config.php"); session_start(); ?>
<!-- Also Mandatory for table view -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $home_url; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $home_url; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $home_url; ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $home_url; ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $home_url; ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

<?php 
  include('../inc/top_nav.php'); 
?>

  <!-- /.navbar -->

  <!-- Main Left Sidebar Container -->
<?php 

  include('../inc/left_slidebar.php'); 

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


      <!-- All Student Data -->
        <div class="row">
          <div class="col-12">
            <?php
              
              if (isset($_SESSION['msg'])) {
                echo "<div class='alert alert-success'>" . $_SESSION['msg']. "</div>";
                unset($_SESSION['msg']); # Delete
              }
            ?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Student Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SL.#</th>
                    <th>Name</th>
                    <th>Date of birth</th>
                    <th>location</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    
                    $sql = "SELECT * FROM students;";
                    $rowdata = $db->query($sql);
                  
                  ?>


                  <?php
                    
                    while ($data = $rowdata ->fetch_object()) {
                      

                  ?>


                  <tr>
                    <td>
                      <?php echo $data->id; ?>
                    </td>
                    <td>
                      <?php echo $data->name; ?>
                    </td>
                    <td>
                      <?php echo $data->date_of_birth; ?>
                    </td>
                    <td>
                      <?php echo $data->location; ?>
                    </td>
                    <td style="text-align: center;">
                      <a href="student_edit.php?id=<?php echo $data->id; ?>"><i class="fas fa-edit"></i></a>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a onclick="return confirm('Are you sure?')" href="student_delete.php?id=<?php echo $data->id; ?>"><i class="fas fa-trash"></i></a>
                    </td>

                  </tr>

                  <?php
                    }
                  ?>


 
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>



        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
  include('../inc/footer.php'); 
?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo $home_url; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $home_url; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo $home_url; ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $home_url; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $home_url; ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $home_url; ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $home_url; ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $home_url; ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $home_url; ?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $home_url; ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $home_url; ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $home_url; ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $home_url; ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $home_url; ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $home_url; ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $home_url; ?>dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
