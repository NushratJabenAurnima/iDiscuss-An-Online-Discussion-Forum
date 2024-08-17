<?php
include '_dbconnect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['commentidUpdate'])) {
        $comment_id = $_POST['commentidUpdate'];
        $content = $conn->real_escape_string($_POST['contentUpdate']);
        $user_id = $_SESSION['sno'];

        // Checking if the logged-in user is the owner of the thread
        $sql = "SELECT comment_by FROM comments WHERE comment_id=$comment_id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($row['comment_by'] == $user_id) {
            // Update the record
            $sql = "UPDATE comments SET comment_content = '$content' WHERE comment_id = $comment_id";
            if ($conn->query($sql) === TRUE) {

                 // Set session variable for success message
                 $_SESSION['update'] = "Your comment has been updated successfully";

                // Redirection back to the previous page
                header("Location: ".$_SERVER['HTTP_REFERER']);
                exit();
            }     
        }
    }
 }
?>