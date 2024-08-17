<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Reset Password - iDiscuss</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '_dbconnect.php';?>
    <?php include '_header.php';?>

    <?php
    $msg = '';
    
    if (isset($_POST['pwdrst'])) {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];

        if ($pwd === $cpwd) {
            $hashed_pwd = password_hash($pwd, PASSWORD_BCRYPT);

            $sql = "UPDATE users SET user_pass = '$hashed_pwd' WHERE user_email = '$email'";
            $result = $conn->query($sql);

            if ($result) {
                $msg = 'Your password has been updated successfully. <a href="http://localhost/Learn_php_sql/Forum/index.php">Click here</a> to login';
            } else {
                $msg = "Error while updating password.";
            }
        } else {
            $msg = "Password and Confirm Password do not match.";
        }
    }

    if (isset($_GET['secret'])) {
        $email = base64_decode($_GET['secret']);
        $sql = "SELECT user_email FROM users WHERE user_email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
    ?>

    <div class="container my-auto flex-grow-1 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center w-100">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h3 class="card-title text-center mb-4">Reset Password</h3>
                        <form method="post">
                            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>" />
                            <div class="form-group">
                                <label for="pwd">New Password</label>
                                <input type="password" name="pwd" id="pwd" placeholder="Enter New Password" required
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="cpwd">Confirm Password</label>
                                <input type="password" name="cpwd" id="cpwd" placeholder="Confirm New Password" required
                                    class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="pwdrst" value="Reset Password" class="btn btn-success w-100">
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

    <?php } } ?>

    <?php include '_footer.php';?>
</body>

</html>