<?php
session_start();
error_reporting(0);
include('dbconnection.php'); 

 $login_id = $_SESSION['login_id'];

 $username="";
  $query1 = mysqli_query($con,"select * from tbl_user where id='$login_id'");
	while ($row1=mysqli_fetch_array($query1)) {
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
      height: auto; /* Let JS handle actual height */
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
    </div>
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3"><a class="p-0" href="dashboard.php"><i class="bi bi-house-fill fs-3"></i></a></li>
            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle ps-2"><?php echo $username; ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header"><h6><?php echo $username; ?></h6></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="logout.php"><i class="bi bi-box-arrow-right"></i><span>Sign Out</span></a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<main id="main" class="main">
<section class="section">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-title fs-2 text-center">Quick Mood Check</div>
                <div class="card-body">
                    <form id="moodForm">
                        <div class="col-12 mt-3">
                            <label>How INTERESTED have you felt?</label>
                            <select name="interested" class="form-select mood-input">
                                <option value="">Select...</option>
                                <option value="1">1 - Very slightly or not at all</option>
                                <option value="2">2 - A little</option>
                                <option value="3">3 - Moderately</option>
                                <option value="4">4 - Quite a bit</option>
                                <option value="5">5 - Extremely</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            <label>How INSPIRED have you felt?</label>
                            <select name="inspired" class="form-select mood-input">
                                <option value="">Select...</option>
                                <option value="1">1 - Very slightly or not at all</option>
                                <option value="2">2 - A little</option>
                                <option value="3">3 - Moderately</option>
                                <option value="4">4 - Quite a bit</option>
                                <option value="5">5 - Extremely</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            <label>How ALERT have you felt?</label>
                            <select name="alert" class="form-select mood-input">
                                <option value="">Select...</option>
                                <option value="1">1 - Very slightly or not at all</option>
                                <option value="2">2 - A little</option>
                                <option value="3">3 - Moderately</option>
                                <option value="4">4 - Quite a bit</option>
                                <option value="5">5 - Extremely</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            <label>How NERVOUS have you felt?</label>
                            <select name="nervous" class="form-select mood-input">
                                <option value="">Select...</option>
                                <option value="1">1 - Very slightly or not at all</option>
                                <option value="2">2 - A little</option>
                                <option value="3">3 - Moderately</option>
                                <option value="4">4 - Quite a bit</option>
                                <option value="5">5 - Extremely</option>
                            </select>
                        </div>
                        <div class="col-12 mt-4">
                            <div id="scoreDisplay" class="bg-light p-3 rounded text-center fw-bold">Score: 0 | Mood: Not rated yet</div>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary w-100">Finalize Mood Check</button>
                        </div>
                    </form>
                    <div class="col-12 mt-3 d-none" id="finalResult"></div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const inputs = document.querySelectorAll(".mood-input");
    const scoreDisplay = document.getElementById("scoreDisplay");
    const finalResult = document.getElementById("finalResult");

    function calculateMood() {
        let score = 0;
        let answered = 0;
        inputs.forEach(select => {
            if (select.value) {
                score += parseInt(select.value);
                answered++;
            }
        });
        let moodText = "Not rated yet";
        if (answered > 0) {
            if (score / answered >= 4) moodText = "Good Mood 😊";
            else if (score / answered >= 2.5) moodText = "Neutral Mood 😐";
            else moodText = "Low Mood 😟";
        }
        scoreDisplay.innerHTML = `Score: ${score} | Mood: ${moodText}`;
    }

    inputs.forEach(select => {
        select.addEventListener("change", calculateMood);
    });

    document.getElementById("moodForm").addEventListener("submit", function(e) {
        e.preventDefault();
        let score = 0;
        inputs.forEach(select => {
            if (select.value) score += parseInt(select.value);
        });
        let moodOverall = score >= 16 ? "Good Mood 😊" : score >= 10 ? "Neutral Mood 😐" : "Low Mood 😟";
        finalResult.innerHTML = `Final Score: ${score} | Overall: ${moodOverall}`;
        finalResult.classList.remove("d-none");
        finalResult.classList.add("bg-light", "p-3", "rounded", "text-center", "fw-bold");
    });
});
</script>
  </body>

  </html>
