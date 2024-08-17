<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Forgot Password - iDiscuss</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '_dbconnect.php';?>
    <?php include '_header.php';?>

    <?php
    require '../PHP_Mailer/src/PHPMailer.php'; 
    require '../PHP_Mailer/src/SMTP.php'; 
    require '../PHP_Mailer/src/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_POST['pwdrst'])) {
        $email = $_POST['email'];

        // Check if the email exists in the database
        $sql = "SELECT user_email FROM users WHERE user_email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $message = '<div>
                        <p><b>Hello!</b></p>
                        <p>You are receiving this email because we received a password reset request for your account.</p>
                        <br>
                        <p><button class="btn btn-primary"><a href="http://localhost/Learn_php_sql/Forum/partials/_reset_pass.php?secret='.base64_encode($email).'">Reset Password</a></button></p>
                        <br>
                        <p>If you did not request a password reset, no further action is required.</p>
                    </div>';
        

            // Configure PHPMailer
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->Username = 'iDiscuss655@gmail.com'; 
            $mail->Password = 'xsjv kbre zeuj boud'; 

            $mail->From = 'iDiscuss655@gmail.com';
            $mail->FromName = 'iDiscuss';
            $mail->addAddress($email);
            $mail->Subject = 'Reset Password';
            $mail->isHTML(true);
            $mail->Body = $message;

            if ($mail->send()) {
                $msg = "We have e-mailed your password reset link!";
            } else {
                $msg = "Mailer Error: " . $mail->ErrorInfo;
            }
        } else {
            $msg = "We can't find a user with that email address.";
        }
    }
    ?>

    <div class="container my-auto flex-grow-1 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center w-100">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h3 class="card-title text-center mb-4">Forgot Password</h3>
                        <form method="post">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" placeholder="Enter Email" required
                                    class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="pwdrst" value="Send Password Reset Link"
                                    class="btn btn-success w-100">
                            </div>
                            <?php if (!empty($msg)): ?>
                            <p class="text-danger text-center"><?php echo $msg; ?></p>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '_footer.php';?>
</body>

</html>