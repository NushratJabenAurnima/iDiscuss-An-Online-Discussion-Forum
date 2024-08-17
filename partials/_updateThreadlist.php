<?php
include '_dbconnect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['threadidUpdate'])) {
        $thread_id = $_POST['threadidUpdate'];
        $description = $conn->real_escape_string($_POST['descriptionUpdate']);
        $user_id = $_SESSION['sno'];

        // Checking if the logged-in user is the owner of the thread
        $sql = "SELECT thread_user_id FROM threads WHERE thread_id = '$thread_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($row['thread_user_id'] == $user_id) {
            
            // Update the record
            $sql = "UPDATE threads SET thread_desc = '$description' WHERE thread_id = '$thread_id'";
            if ($conn->query($sql) === TRUE) {
                
                // Set session variable for success message
                $_SESSION['update'] = "Your thread has been updated successfully";
                
                // Redirect 
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }
    }
}
?>