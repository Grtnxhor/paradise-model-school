<?php
session_start();
if (isset($_SESSION['Admin No.'])) {

?>
<?php 
include("functions/init.php");
$sql ="SELECT * FROM students WHERE `id` = '".$_GET["id"]."'";
    $result = query($sql);
    if(row_count($result) == 1) {
    $row = mysqli_fetch_array($result);
    $data = $row['AdminID'];
    $pass = str_replace('/', '', $data);
    $fname = "upload/IdCard/$pass.php";

    $hand = fopen($fname, 'w');
}
 ?>
<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Paradise Model School website">
  <meta name="keywords" content="Paradise Model School, School">
   <title>Paradise Model School | Admin Portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="icon" href="dist/img/favicon2.ico" type="image/ico" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
    <!-- Main content -->
    <section class="content" id="printableArea">

      <!-- Default box -->
      <?php
 $sql ="SELECT * FROM students WHERE `id` = '".$_SESSION["id"]."'";
    $result = query($sql);
    $row = mysqli_fetch_array($result); 
    {
  ?>
              <div style="width: 227px; background-color: gold;" class="card">
                <div class="card-header text-center border-bottom-0">
                   <div class="ribbon-wrapper">
                        <div style="padding: 0px;" class="ribbon bg-black">
                         <span style="font-size: 6px; text-transform: none;">Govt. &nbsp;Approved</span>
                        </div>
                      </div>
                  <img src="dist/img/favicon2.ico" width="20px" height="20px">
                  <h2 style="font-size: 10px;"><b>PARADISE MODEL SCHOOL</b><br/>
                  <small style="font-size: 8px;">Iyesi, Ota, Ogun State.</small>
                  <small style="font-size: 8px;">&nbsp;&nbsp; Tel: 08169664313</small>
                </h2>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $row['SurName']." ".$row['Middle Name']; ?></b></h2>
                      <p class="text-sm">Class: <b><?php echo $row['Class']; ?></b> <br/> Gender: <b><?php echo $row['Gender']; ?></b></p>
                      <?php echo '
                     <img width="150px" height="150px" src="upload/QRCard/'.$row['qrcode'].'">'
                     ?>
                    
                    </div>
                    <div class="col-5 text-center">
                      <?php echo '
                      <img src="upload/studentDP/'.$row['Passport'].'" alt="" class="img-circle img-fluid">';
                      ?>
                    </div>
                  </div>
                </div>
                
              </div>
              <?php
            }
            ?>
    </section>
    <!-- /.content -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
<?php
 $sqll = "UPDATE students SET `idcard` = '$fname' WHERE `id` = '".$_SESSION["id"]."'";
     $re   = query($sqll);
file_put_contents($fname, ob_get_contents());
?>
<?php
}
else{
  header("location: ./login");
}

?>