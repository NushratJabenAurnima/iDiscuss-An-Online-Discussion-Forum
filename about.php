<!doctype html>
<html lang="en">

<head>
    <!-- Link to Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style_css/style_about.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>About Us - iDiscuss Forum</title>


</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>

    <div class="about-container">
        <section class="about-section">
            <div class="about-content">
                <h1>About iDiscuss</h1>
                <p id="short-content">
                    Welcome to iDiscuss, the ultimate coding forum for developers of all levels. Whether you're a
                    beginner just getting started or an experienced coder looking to share your knowledge, iDiscuss is
                    the place where you can connect, learn, and grow together.
                </p>
                <div class="more-content" id="more-content" style="display: none;">
                    <p>
                        Our mission is to create a collaborative environment where everyone can find the help they need
                        and contribute their expertise. We believe in the power of community and that, together, we can
                        solve any coding challenge. Join us in discussing the latest in web development, software
                        engineering, and all things coding. Ask questions, share your projects, and be part of a growing
                        community that values curiosity and innovation.
                    </p>
                </div>
                <button class="read-more-btn" id="read-more-btn" onclick="toggleMoreContent()">Read More</button>
            </div>
        </section>

        <section class="social-section">
            <h2>Connect with Us</h2>
            <div class="social-links">
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-reddit"></i></a>
                <a href="#"><i class="fa-brands fa-discord"></i></a>
            </div>
        </section>
    </div>

    <?php include 'partials/_footer.php'; ?>

    <script>
    function toggleMoreContent() {
        var moreContent = document.getElementById("more-content");
        var readMoreBtn = document.getElementById("read-more-btn");

        if (moreContent.style.display === "none" || moreContent.style.display === "") {
            moreContent.style.display = "block";
            readMoreBtn.innerText = "Read Less";
        } else {
            moreContent.style.display = "none";
            readMoreBtn.innerText = "Read More";
        }
    }
    </script>

</body>

</html>