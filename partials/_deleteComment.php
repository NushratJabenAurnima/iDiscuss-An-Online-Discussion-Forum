<?php
include '_dbconnect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['comment_id'])) {
    $comment_id = $_GET['comment_id'];
    $user_id = $_SESSION['sno'];

    // Checking if the logged-in user is the owner of the thread
    $sql = "SELECT comment_by FROM comments WHERE comment_id ='$comment_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if ($row['comment_by'] == $user_id) {
        // Delete the record
        $sql = "DELETE FROM comments WHERE comment_id = '$comment_id'";
        
        if ($conn->query($sql) === TRUE) {

             // Set session variable for success message
             $_SESSION['delete'] = "Your comment has been deleted successfully";

            // Redirection back to the previous page
            header("Location: ".$_SERVER['HTTP_REFERER']);
            exit();
        }  
     }
  }
?>