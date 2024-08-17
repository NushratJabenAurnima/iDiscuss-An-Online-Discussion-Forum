<?php
include '_dbconnect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['thread_id'])) {
    $thread_id = $_GET['thread_id'];
    $user_id = $_SESSION['sno'];

    // Checking if the logged-in user is the owner of the thread
    $sql = "SELECT thread_user_id FROM threads WHERE thread_id=$thread_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if ($row['thread_user_id'] == $user_id) {
        // Delete the record
       // $sql = "DELETE FROM threads WHERE thread_id = $thread_id";

       //Deleting threads and its coreesponding comments
       $sql = "DELETE threads, comments FROM threads 
       LEFT JOIN comments ON threads.thread_id = comments.thread_id 
       WHERE threads.thread_id = $thread_id";
       
        if ($conn->query($sql) === TRUE) {

             // Set session variable for success message
             $_SESSION['delete'] = "Your thread has been deleted successfully";

            // Redirection back to the previous page
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }  
     }
  }
?>