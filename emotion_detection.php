<?php
session_start();
error_reporting(0);
include('dbconnection.php'); 

$login_id = $_SESSION['login_id'];

$username = "";
$query1 = mysqli_query($con,"select * from tbl_user where id='$login_id'");
while ($row1 = mysqli_fetch_array($query1)) {
  $username = $row1['uname'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dual-model</title>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets_1/css/style.css" rel="stylesheet">

  <style>
    .sidebar {
      width: 0px;
      left: -300px;
    }

    #main, #footer {
      margin-left: 0px;
    }

    #canvas {
      background-color: black;
      display: block;
      width: 30%;
      height: auto;
    }

    @media (max-width: 899px) {
      #canvas {
        width: 50%;
      }
    }

    @media (max-width: 599px) {
      #canvas {
        width: 70%;
      }
    }

    #question_2-2 {
      display: none;
      flex-direction: column;
      margin-top: 20px;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo01.gif" alt="">
        <span class="d-none d-lg-block">Dual-model</span>
      </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a class="p-0" href="dashboard.php"><i class="bi bi-house-fill fs-3"></i></a>
        </li>
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="dropdown-toggle ps-2"><?php echo $username; ?></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $username; ?></h6>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul>
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1 class="fs-2">Emotion Detection</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                              <h4>Are you in a well-lit environment?</h4>
                            </div>
                            <div class="col-md-1">
                              <button class="btn btn-primary" onclick="showText()">Yes</button>
                            </div>
                            <div class="col-md-1">
                              <button class="btn btn-primary" onclick="showText()">No</button>
                            </div>

                            <div class="d-none" id="question_2-2">
                                <div class="col-md-12 mt-3">
                                  <h4>Would you prefer to upload an image or use your webcam?</h4>
                                </div>
                                <div class="d-flex gap-3 align-items-start mt-2">
                                    <div>
                                        <button class="btn btn-primary" onclick="enableFileInput()">Upload Photo</button>
                                        <input type="file" id="fileInput" class="form-control mt-2 d-none">
                                    </div>
                                    <div>
                                        <button class="btn btn-primary">Webcam</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Custom JS -->
  <script>
    function showText() {
      const textElement = document.getElementById('question_2-2');
      textElement.classList.remove('d-none');
      textElement.style.display = 'inline';
      textElement.style.flexDirection = 'column';
    }

    function enableFileInput() {
      const fileInput = document.getElementById('fileInput');
      fileInput.classList.remove('d-none');
    }
  </script>

</body>
</html>
