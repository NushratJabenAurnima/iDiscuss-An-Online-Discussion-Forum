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
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `categories` WHERE category_id = '$id'"; 
        $result = $conn->query($sql); 
        while($row = $result->fetch_assoc()){
            $catname = $row['category_name'];
            $catdesc = $row['category_description']; 
        }
    ?>

    <?php
    $showAlert = false;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $th_title = $conn->real_escape_string($_POST['title']);
        $th_desc = $conn->real_escape_string($_POST['desc']);
        $sno = $_POST['sno'];
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) 
                VALUES ('$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
        $result = $conn->query($sql); 
        $showAlert = true;

        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your thread has been added! Please wait for the community to respond
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    }
    ?>

    <!-- Category container starts here -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname;?> forums</h1>
            <p class="lead"><?php echo $catdesc;?></p>
            <hr class="my-4">
            <p>This is a peer-to-peer forum. No Spam / Advertising / Self-promote in the forums is allowed...</p>
        </div>
    </div>

    <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ 
            echo '<div class="container">
                    <h1 class="py-2">Start a Discussion</h1>
                    <form action="'.$_SERVER['REQUEST_URI'].'" method="post">
                        <div class="form-group">
                            <label for="title">Problem Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                            <small class="form-text text-muted">Keep your title as short as possible</small>
                        </div>
                        <input type="hidden" name="sno" value="'.$_SESSION['sno'].'">
                        <div class="form-group">
                            <label for="desc">Elaborate Your Concern</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                  </div>';
        } else {
            echo '<div class="container">
                    <h1 class="py-2">Start a Discussion</h1>
                    <p class="lead">You are not logged in. Please login to be able to start a Discussion</p>
                  </div>';
        }
    ?>

    <div class="container mb-5" id="ques">
        <h1 class="py-2">Browse Questions</h1>


        <!-- Fetch all the threads -->
        <?php
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id='$id'"; 
        $result = $conn->query($sql); 
        $noResult = true;
        while($row = $result->fetch_assoc()){
            $noResult = false;
            $thread_id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc']; 
            $thread_time = $row['timestamp']; 
            $thread_user_id = $row['thread_user_id']; 
            $sql2 = "SELECT username FROM `users` WHERE sno='$thread_user_id'";
            $result2 = $conn->query($sql2); 
            $row2 = $result2->fetch_assoc();

            echo '<div class="media my-3">
                    <img src="images/user_default_image.png" width="60px" class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0"><a class="text-dark" href="thread.php?threadid=' . $thread_id. '">'. $title . '</a></h5>
                        <div class="font-weight-bold my-0"> Asked by: '. $row2['username'] . ' at '. $thread_time. '</div>
                        <p class="thread-desc">'. htmlspecialchars($desc, ENT_QUOTES) . '</p>';//Prevent XSS attack

            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['sno'] == $thread_user_id){
                echo '<p class="text-right">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="'.$thread_id.'" data-desc="'.htmlspecialchars($desc, ENT_QUOTES).'">Edit</a>
                    </p>';

            }

            echo '</div>
                </div>';
        }
        
     
        if($noResult){
            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class ="display-4">No Threads Found</p>
                        <p class="lead">Be the first person to ask a question</p>
                    </div>
                </div>';
        }
?>

        <?php  include 'partials/_editThreadlistModal.php'; ?>
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
        var threadId = button.data('id'); // Extract thread ID from data-* attributes
        var description = button.data('desc'); // Extract description from data-* attributes

        var modal = $(this);
        modal.find('#threadidUpdate').val(threadId);
        modal.find('#descriptionUpdate').val(description);
    });

    function deleteThread(threadId) {
        if (confirm("Are you sure you want to delete this thread?")) {
            window.location.href = "/Learn_php_sql/Forum/partials/_deleteThreadlist.php?thread_id=" + threadId;
        }
    }
    </script>

</body>

</html>