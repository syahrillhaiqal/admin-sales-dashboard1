<?php

    session_start();
    if (!isset($_SESSION['email'])) {
        header("Location: ../../index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Page</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/college.css">
  </head>
</head>
<body>
    <a href="#" class="btn btn-primary m-2" onclick="window.location.href='../../actions/logout.php'">Logout</a>
    <div class="container mt-3">        
        <div class="container-box">
            <h1>Ramentic</h1>
            <p class="mb-4">Welcome to the Ramentic Spreadsheet Entrance System</p>

            <div class="row">
                <!-- if mobile screen, take all 12 column (1 row 1 column)
                if desktop, take 1/3 of screen (means 1 row can be 3 column) -->
                <div class="col-12 col-md-3">
                    <a href="form.php?collegeName=Alpha" class="btn btn-danger w-100 mt-3">Alpha College</a>
                </div>
                <div class="col-12 col-md-3">
                    <a href="form.php?collegeName=Beta" class="btn btn-info w-100 mt-3">Beta College</a>
                </div>
                <div class="col-12 col-md-3">
                    <a href="form.php?collegeName=Gamma" class="btn btn-success w-100 mt-3">Gamma College</a>
                </div>
                <div class="col-12 col-md-3">
                    <a href="form.php?collegeName=Non-resident" class="btn btn-warning w-100 mt-3">Non-Resident</a>
                </div>                    
            </div>
        </div>
    </div>
    <footer>
        <p>Copyright &#169; 2025 Syahril Haiqal. All Rights Reserved.</p>
    </footer>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>