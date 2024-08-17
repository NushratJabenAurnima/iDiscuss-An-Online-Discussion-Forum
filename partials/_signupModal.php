<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Signup for an iDiscuss Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="signupForm" action="partials/_handleSignup.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                            aria-describedby="emailHelp" required pattern="[a-zA-Z0-9._%+-]+@gmail\.com"
                            title="Email must be a valid Gmail address (e.g., user@gmail.com)">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="form-group">
                        <label for="signup">Username</label>
                        <input type="text" class="form-control" id="signup" name="signup"
                            placeholder="Choose a username" pattern="[a-zA-Z0-9_]{5,15}"
                            title="Username should be 5-15 characters long, alphanumeric with underscores allowed."
                            aria-describedby="usernameHelp" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone"
                            placeholder="Enter your 11-digit phone number" pattern="[0-9]{11}">
                    </div>

                    <div class="form-group">
                        <label for="signupPassword">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword"
                            placeholder="Enter a strong password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Password must contain at least one number, one uppercase and lowercase letter, and at least 8 characters"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="signupcPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="signupcPassword" name="signupcPassword"
                            placeholder="Confirm your password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>