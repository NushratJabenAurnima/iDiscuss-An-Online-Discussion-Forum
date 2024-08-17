<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $email = $_POST['email'];
    $pass = $_POST['loginPass'];

    // Fetching user details from the database
    $sql = "SELECT * FROM users WHERE user_email = '$email'";
    $result = $conn->query($sql);
    $numRows = $result->num_rows;

    // Handling "Remember Me" functionality
    if (isset($_POST['rememberMe'])) {
        setcookie('emailid', $email, time() + 60*60, "/");  // Set email cookie for 1 hour
        setcookie('password', $pass, time() + 60*60, "/");  // Set password cookie for 1 hour
    } else {
        setcookie('emailid', '', time() - 3600);  // Delete email cookie
        setcookie('password', '', time() - 3600);  // Delete password cookie
    }

    // Validating user credentials
    if ($numRows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['user_pass'])) {

            // Storing user information in the session
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['user_email'] = $email;
            $_SESSION['username'] = $row['username'];  // Storing the username after succesfully login

            header("Location: /Learn_php_sql/Forum/index.php");
            exit();
        } else {
            $_SESSION['loginfail'] = "Invalid Credentials.";
        }
    } else {
        $_SESSION['loginfail'] = "Invalid Credentials.";
    }

    header("Location: /Learn_php_sql/Forum/index.php");
    exit();
}
?>