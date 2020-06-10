<?php
session_start();
if (isset($_SESSION['Admin No.'])) {

?>
<?php include("functions/init.php"); ?>
<?php include("include/sidebarr.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Entrance Examination Applicant <sup><span class="badge badge-info right"><?php echo $_SESSION['ts']; ?></span></sup>  <button style="background: grey; color: white;" type="button" class="btn btn-tool" onclick="window.print();"><i class="fas fa-print"></i>
                  Print</button></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">View Students</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Applicant</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th >Entrance ID</th>
                            <th >Sur Name </th>
                            <th >Last Name</th>
                            <th >Other Name </th>
                            <th >Email </th>
                            <th >Gender </th>
                            <th >Disablity </th>
                            <th ></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM entrance WHERE Active = '0'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                      <td><?php echo $row['ent_id'] ?></td>
                                                    <td><?php echo $row['surname'] ?></td>
                                                    <td><?php echo $row['otherName'] ?></td>
                                                    <td><?php echo $row['lastName'] ?></td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['gender'] ?></td>
                                                    <td ><?php echo $row['disablity'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./entid?id='.$row['ent_id'].'">View Full Profile</a></td>';
                                                    ?>
                                                    
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("include/footer.php"); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php
}
else{
  header("location: ./login");
}

?>