<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $user_email = $_POST['email'];
    $username = $_POST['signup'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    // Validate Gmail domain
    if (!preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $user_email)) {
        $showError = "Email must be a valid Gmail address (e.g., user@gmail.com)";
    } 
    
    else {
        // Check whether this email exists
        $sql = "SELECT * FROM `users` WHERE user_email = '$user_email'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $showError = "Email already in use";
        } else {
            if($pass == $cpass){
                $hash = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`user_email`, `user_pass`, `timestamp`, `username`) VALUES ( '$user_email', '$hash', current_timestamp(), '$username')";
                $result = $conn->query($sql);
                
                if($result){
                    $showAlert = true;
                    header("Location: /Learn_php_sql/Forum/index.php?signupsuccess=true");
                    exit();
                }
            }
            
            else {
                $showError = "Passwords do not match"; 
            }
        }
    }

    header("Location: /Learn_php_sql/Forum/index.php?signupsuccess=false&error=" . urlencode($showError));
}
?>