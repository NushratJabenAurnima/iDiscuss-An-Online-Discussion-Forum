<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 433px;
    }
    </style>

    <title>Welcome to iDiscuss - Coding Forum</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
    <?php
    
    if (isset($_SESSION['update'])) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>" . $_SESSION['update'] . "</strong> 
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
        
        unset($_SESSION['update']);
    }

    if (isset($_SESSION['delete'])) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>" . $_SESSION['delete'] . "</strong> 
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
        
        unset($_SESSION['delete']);
    }
    
    ?>
    <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `threads` WHERE thread_id = '$id'"; 
        $result = $conn->query($sql); 
        while($row = $result->fetch_assoc()){
            $title = $row['thread_title'];
            $desc = $row['thread_desc']; 
            $thread_user_id = $row['thread_user_id'];
            
            // Query the users table to find out the name
            $sql2 = "SELECT username FROM `users` WHERE sno='$thread_user_id'";
            $result2 = $conn->query($sql2); 
            $row2 = $result2->fetch_assoc();
            $posted_by = $row2['username'];
    
        }
        ?>

    <?php
        $showAlert = false;
        if($_SERVER['REQUEST_METHOD']=='POST'){
            // Insert into comment db
            // Escape user inputs to avoid SQL injection: Special characters error(using " , ' :)
            $comment = $conn->real_escape_string($_POST['comment']);
            $sno = $_POST['sno'];
            $sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ( '$comment', '$id', '$sno', current_timestamp())";
            $result = $conn->query($sql); 
            $showAlert = true;

        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your comment has been added! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }
        }
    ?>

    <!-- category container starts here -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title;?></h1>
            <p class="lead"><?php echo $desc;?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum. No Spam / Advertising / Self-promote in the forums is not allowed. Do not
                post copyright-infringing material. Do not post “offensive” posts, links or images. Do not cross post
                questions. Remain respectful of other members at all times.</p>
            <p>
            <h5>Posted by: <em><?php echo $posted_by; ?></em></h5>
            </p>
        </div>
    </div>
    <?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ 
 echo'   <div class="container">
        <h1 class="py-2">Post a Comment</h1>

       <form action="'.$_SERVER['REQUEST_URI'].'" method="post">
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Type Your Comment</label>
        <input type="hidden" name="sno" value="'.$_SESSION['sno'].'">
        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Post Comment</button>
    </form>
    </div>';
    }

    else{
    echo ' <div class="container">
        <h1 class="py-2">Post a Comment</h1>
        <p class="lead">You are not logged in. Please login to be able to post Comments</p>
    </div>';
    }


    ?>

    <div class="container mb-5" id="ques">
        <h1 class="py-2">Discussions</h1>

        <!-- Fetch all the threads -->
        <?php 
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `comments` WHERE thread_id= '$id'";
        $result = $conn->query($sql);
        $noResult = true;
        while($row = $result->fetch_assoc()){
        $noResult = false;
        $id = $row['comment_id'];
        $content = $row['comment_content'];
        $comment_time = $row['comment_time']; 
        $comment_by = $row['comment_by']; 
        $sql2 = "SELECT username FROM `users` WHERE sno='$comment_by'";
        $result2 = $conn->query($sql2); 
        $row2 = $result2->fetch_assoc();

        echo '<div class="media my-3">
                <img src="images/user_default_image.png" width="60px" class="mr-3" alt="...">
                <div class="media-body">
                <div class="font-weight-bold my-0"> Replied by: '. $row2['username'] . ' at '. $comment_time. '</div>
                <p class="thread-desc">'. htmlspecialchars($content, ENT_QUOTES) . '</p>';//Prevent XSS attack

        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['sno'] == $comment_by){
            echo '<p class="text-right">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="'.$id.'" data-content="'.htmlspecialchars($content, ENT_QUOTES).'">Edit</a>
                </p>';
        }

        echo '</div>
            </div>';
    }

        if($noResult){
            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                    <p class ="display-4">No Comments Found</p>
                        <p class="lead">Be the first person to comment</p>
                    </div>
                </div>';
        }
        ?>

        <?php include 'partials/_editCommentModal.php';?>
    </div>
    <?php include 'partials/_footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- Add this script at the end of your file -->
    <script>
    $('#editModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var commentId = button.data('id'); // Extract thread ID from data-* attributes
        var content = button.data('content'); // Extract description from data-* attributes

        var modal = $(this);
        modal.find('#commentidUpdate').val(commentId);
        modal.find('#contentUpdate').val(content);
    });

    function deleteThread(commentId) {
        if (confirm("Are you sure you want to delete this thread?")) {
            window.location.href = "/Learn_php_sql/Forum/partials/_deleteComment.php?comment_id=" + commentId;
        }
    }
    </script>
</body>

</html>