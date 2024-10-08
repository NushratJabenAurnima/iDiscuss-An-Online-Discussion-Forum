<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <title>Welcome to iDiscuss - Coding Forum</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <!-- Slider starts here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/Learn_php_sql/Forum/images/man_new.jpg" class="d-block w-100" alt="..." height="660">
            </div>
            <div class="carousel-item">
                <img src="/Learn_php_sql/Forum/images/code_new.jpg" class="d-block w-100" alt="..." height="660">
            </div>
            <div class="carousel-item">
                <img src="/Learn_php_sql/Forum/images/laptop_new.jpg" class="d-block w-100" alt="..." height="660">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- category container starts here -->
    <div class="container my-4">
        <h2 class="text-center my-4">iDiscuss - Browse Categories</h2>
        <div class="row my-4">

            <!-- Fetch all the categories -->
            <?php
             $sql = "SELECT * FROM `categories`";
             $result = $conn->query($sql); 
             while($row = $result->fetch_assoc()) {
               //echo $row['category_id'];
              // echo $row['category_name'];
              $id = $row['category_id'];
              $cat = $row['category_name'];
              $desc = $row['category_description'];
              
              echo '<div class="col-md-4 my-3">
              <div class="card" style="width: 18rem;">
                  <img src="card_img/card_' . $id . '.png" class="card-img-top" alt="Image for ' . $cat . '" style="height: 200px; object-fit: contain;">
                  <div class="card-body">
                      <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                      <p class="card-text">' . substr($desc, 0, 88) . '... </p>
                      <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
                  </div>
              </div>
          </div>';
      
          }
     ?>

        </div>
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
</body>

</html>