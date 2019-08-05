<?php 
    // functions.php
    // provides core functionality

    // database connection -- check aws or heroku functionality
    $dbhost  = 'localhost';
    $dbname  = 'shareacut';
    $dbuser  = 'root';
    $dbpass  = '';
    $appname = 'Kamigiri';

    // create and check connection
    $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // checks if a specified table exists, otherwise create table
    function createTable($name, $query) {
        queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
        echo "Table '$name' created or already exists.<br>";
    }

    // generates query via mysql database
    function queryMysql($query) {
        global $connection;
        $result = $connection->query($query);
        if (!$result) die($connection->error);
        return $result;
    }

    // clears all session data
    function destroySession() {
        $_SESSION=array();

        if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time()-2592000, '/');

        session_destroy();
    }

    // remove malicious code or tags
    function sanitizeString($var) {
        global $connection;
        $var = strip_tags($var);
        $var = htmlentities($var);
        $var = stripslashes($var);
        return $connection->real_escape_string($var);
    }
    
    function newUser() {
        $name_prefix = $_POST['name_prefix'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $postal_code = $_POST['postal_code'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_repeat = $_POST['password_repeat'];
        $sql = "INSERT INTO Customer (prefix, first_name, last_name, phone_number, address, postal_code, email, password) VALUES ('$prefix', '$first_name', '$last_name', '$phone_number', '$address', '$postal_code', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "<h2>User record created successfully. Redirecting in progress....</h2>";
            header( "Refresh:2; url=confirmRegistration.html");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    function checkusername() {
        $username = $_POST['username'];
        $sql = "SELECT * FROM Customer WHERE username = '$username'";

        $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)!=0) {
                echo"<b><br>Username already exists!!";
            } else if($_POST['pwd']!=$_POST['pwdr']) {
                echo"Passwords dont match";
            } else if(isset($_POST['signup'])) { 
                newUser();
            }
    }

?>