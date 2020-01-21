<html>

<head>

  <?PHP
  include("linkbs.php"); ?>
 
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/sidebar.css">
  <!-- <link rel="stylesheet" href="css/sb-admin.css"> -->
</head>

<body>
  <!-- <div class="sidebar"> -->
  <ul class="sidebar navbar-nav" style="background: linear-gradient(to top, #3a3a3a, #212628);">

    <li class="nav-item">
      <a class="nav-link">
        <img src="img/user11.png" alt="" height="">
        <span>Firstname Lastname</span> <!-- ดึงชื่อจากเบส -->
        <center><span>manager</span></center> <!-- ดึงตำแหน่งจากเบส -->
        <hr style="border-top: 1px solid #f8f9fa; margin-bottom: 0rem;">
      </a>

    </li>
    <br>

    <li class="nav-item" id="navitem">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-hourglass-half"></i> &nbsp;
        <span> ขอเบิกค่าOT</span>
        <span></span>
      </a>
    </li>

    <li class="nav-item" id="navitem">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-car"></i>&nbsp;
        <span>ขอเบิกค่าเดินทาง</span>
      </a>
    </li>

    <li class="nav-item" id="navitem">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-book-open"></i> &nbsp;
        <span>รายงาน</span>
      </a>
    </li>


  </ul>
  <!-- </div> -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <!-- <script src="js/sb-admin.min.js"></script> -->

  <!-- Demo scripts for this page-->
  <!-- <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script> -->

</body>

</html>