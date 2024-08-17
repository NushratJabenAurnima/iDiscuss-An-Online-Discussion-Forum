<!doctype html>
<html lang="en">

<head>
    <!-- Link To CSS Style Sheet -->
    <link rel="stylesheet" type="text/css" href="style_css/style_contact.css">

    <!-- Font Awesome Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- Link To Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome to iDiscuss - Coding Forum</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>

    <div class="container">
        <main class="row">
            <!-- Left Section (Column) Starts -->
            <section class="col-md-6 left">
                <!-- Title Starts -->
                <div class="contactTitle">
                    <h2>Get In Touch</h2>
                    <p>Hello coders, if you have any suggestion regarding our website, feel free to share. We would love
                        to hear from you.</p>
                </div>
                <!-- Title Ends -->

                <!-- Contact Info Starts -->
                <div class="contactInfo">
                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="details">
                            <span>Phone</span>
                            <span>+00 110 111 00</span>
                        </div>
                    </div>

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="details">
                            <span>Email</span>
                            <span>iDiscuss655@gmail.com</span>
                        </div>
                    </div>

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="details">
                            <span>Location</span>
                            <span>X Street, Y Road, San Francisco</span>
                        </div>
                    </div>
                </div>
                <!-- Contact Info Ends -->

                <!-- Social Media Starts -->
                <div class="socialMedia">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <!-- Social Media Ends -->
            </section>
            <!-- Left Section (Column) Ends -->

            <!-- Right Section (Column) Starts -->
            <section class="col-md-6 right">
                <!-- Form Starts -->
                <form class="messageForm">
                    <div class="inputGroup halfWidth">
                        <input type="text" name="name" required="required">
                        <label>Your Name</label>
                    </div>

                    <div class="inputGroup halfWidth">
                        <input type="email" name="email" required="required">
                        <label>Email</label>
                    </div>

                    <div class="inputGroup fullWidth">
                        <input type="text" name="subject" required="required">
                        <label>Subject</label>
                    </div>

                    <div class="inputGroup fullWidth">
                        <textarea name="message" required="required"></textarea>
                        <label>Say Something</label>
                    </div>

                    <div class="inputGroup fullWidth">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
                <!-- Form Ends -->
            </section>
            <!-- Right Section (Column) Ends -->
        </main>
    </div>

    <?php include 'partials/_footer.php'; ?>

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