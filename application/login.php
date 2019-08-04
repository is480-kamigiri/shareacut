<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login - ShareACut</title>

  <!-- Bootstrap core CSS -->
  <link href="./asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./asset/css/full-width-pics.css" rel="stylesheet">
  <link href="./asset/css/overwrite.css" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
</head>

<body>

  <!-- Navigation -->
  <?php
  include_once 'header.php';
  ?>

  <!-- Content section -->
  <section class="py-5 px-5 backgroundbox">
    <div class="row pt-4">
      <div class="col-md-4 offset-md-4 pt-4 pb-5 pl-4 pr-4 whitebox">
        <form>
          <p class="subHeaderText text-center mb-0">Login</p>
          <p class="lead text-center border-bottom pb-3">Sign in to book a housecall service.</p>
          <div class="form-group pt-2">
            <label for="inputEmail">Email address</label>
            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
              placeholder="Enter your email address" required>
          </div>
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
            <span class="inputPassword float-right"><a href="resetPassword.html">Forgot password?</a></span>
          </div>
          <div class="col pt-5 text-center">
            <button type="button" class="btn btn-primary custom-btn"><a class="btn btn-primary custom-btn"
                href="Booking.html">Sign In</a></button>
          </div>
          <br>
          <div class="col pt-5 text-center">          
            Don't have an account? Register below! <br>
            <button type="button" class="btn btn-primary custom-btn"><a class="btn btn-primary custom-btn"
                href="registration.php">Register</a></button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php
    include_once 'footer.php';
  ?>

</html>