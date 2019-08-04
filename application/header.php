<?php

    session_start();
    
    //require_once 'functions.php';

    if (isset($_SESSION['user'])) {
        $user     = $_SESSION['user'];
        $loggedin = TRUE;
    } else {
        $loggedin = FALSE;
    }

echo <<<EOF
      <!-- Bootstrap core CSS -->
  <link href="./asset/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./asset/css/overwrite.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
</head>

<body>
EOF;
    if ($loggedin) {
        echo <<<EOF
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
              <a class="navbar-brand" href="index.php"><img class="float left" width="25%"
                  src="asset/img/logo.png"
                  alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item activ">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="dropdown" href="#">Welcome
                      <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link" href="profile.php">Profile</a></li>
                      <li><a class="nav-link" href="bookings.php">Bookings</a></li>
                      <li><a class="nav-link" href="sign_out.php">Sign Out</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>

          </nav>
EOF;
    
    
    } else {
        echo <<<EOF
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
              <a class="navbar-brand" href="index.php"><img class="float left" width="25%"
                  src="asset/img/logo.png"
                  alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item activ">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
                </ul>
              </div>
            </div>

          </nav>
EOF;
    }
?>