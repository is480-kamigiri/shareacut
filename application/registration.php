<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register - ShareACut</title>

    <!-- Bootstrap core CSS -->
    <link href="./asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./asset/css/full-width-pics.css" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link href="./asset/css/overwrite.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
</head>

<body>

    <!-- Navigation -->
    <?php
      include_once 'header.php';
      include_once 'functions.php';
    ?>

    <!-- Content section -->
    <section class="py-5 px-5 backgroundbox">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 pt-4 pb-4 pl-5 pr-5 whitebox">
                    <p class="subHeaderText text-center mb-0">Sign Up</p>
                    <p class="lead text-center border-bottom pb-3">Sign up to book a housecall service.</p>
                <form>
                    <div class="row">
                        <div class="col-md-12 offset-md-12">
                            <small id="textDetails" class="form-text text-muted pb-3">We'll never share your details with anyone else.</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01"><b>Title</b></label>
                                </div>
                                <select class="custom-select" id="prefix">
                                    <option selected>Choose...</option>
                                    <option value="1">Mr.</option>
                                    <option value="2">Ms.</option>
                                    <option value="3">Mrs.</option>
                                    <option value="4">Mdm.</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><b>Full Name</b></span>
                                </div>
                                <input type="text" aria-label="first_name" placeholder="First Name"
                                    class="form-control">
                                <input type="text" aria-label="last_name" placeholder="Last Name" class="form-control">
                            </div>

                            <label for="inputPhone"><b>Enter your phone number:</b></label>
                            <div class="input-group flex-nowrap mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">+65</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Phone number" aria-label="phone_number"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <div class="form-group mb-3">
                                <label for="address"><b>Enter your address:</b></label>
                                <input type="text" class="form-control" id="address"
                                    placeholder="Enter your full address" required>
                                <input type="text" class="form-control mt-2" id="postal_code"
                                    placeholder="Enter your postal code" required>
                                <small id="addressDefault" class="form-text text-muted">This address would be
                                    automatically set
                                    as your default address :)
                                </small>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email"><b>Enter your email:</b></label>
                                <input type="text" class="form-control" id="email" placeholder="Enter your email"
                                    required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password"><b>Password</b></label>
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    required>
                                <input type="password" class="form-control mt-2" id="password_repeat"
                                    placeholder="Confirm Password" required>
                            </div>

                            <div class="row mb-3">
                                <div class="col mb-3">
                                    <div class="d-flex justify-content-center align-items-center">
                                            <button type="button" name="signup" class="btn btn-primary custom-btn"><a class="btn btn-primary custom-btn"
                                                href="confirmRegistration.html">Register</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </section>
    
    <?php
    if(isset($_POST['signup'])) {
        if(!empty($_POST['name_prefix']) && !empty($_POST['first_name']) &&!empty($_POST['last_name']) &&!empty($_POST['phone_number'])&& !empty($_POST['address']) &&!empty($_POST['postal_code']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordrepeat'])) {
            checkusername();
        }
    }
    ?>
    
    ?>
    
    <!-- Footer -->
    <?php
        include_once 'footer.php';
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="./asset/js/jquery/jquery.min.js"></script>
    <script src="./asset/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>


    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
</body>

</html>