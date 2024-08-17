<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login to iDiscuss</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="partials/_handleLogin.php" method="post">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="<?php if (isset($_COOKIE['emailid'])) { echo $_COOKIE['emailid']; } ?>"
                            aria-describedby="emailHelp" placeholder="Enter your email" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="form-group">
                        <label for="loginPass">Password</label>
                        <input type="password" class="form-control" id="loginPass" name="loginPass"
                            value="<?php if (isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>"
                            placeholder="Enter your password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <label for="forgotpassword">
                            <a href="partials/_forget_pass.php">Forgot password?</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Log In</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>