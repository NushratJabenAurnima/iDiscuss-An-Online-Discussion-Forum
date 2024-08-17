# iDiscuss: An Online Discussion Forum

iDiscuss is a full-stack web application developed as an online forum for users to discuss various topics. It allows users to post queries, respond to discussions, and engage in meaningful conversations across a wide range of subjects. Built with PHP (Object-Oriented Programming), MySQL, and Bootstrap, iDiscuss also incorporates PHPMailer for secure and reliable email functionality, such as password recovery. The sign-up form includes validation for each field to ensure data accuracy and security. Additionally, sessions and cookies are used for user authentication and the "Remember Me" functionality.

## Project Overview

The goal of this project is to create an easy-to-use platform for threaded discussions. Users can register, log in, search for threads, post comments, and manage their discussions. iDiscuss also features secure password recovery through email using PHPMailer.

### Features

- **User Registration and Authentication:** 
  - Users can securely sign up, log in, and log out.
  - Each sign-up field undergoes form validation to ensure correct input.
  - Passwords are securely hashed before being stored in the database.
  - Password recovery is available via email, powered by PHPMailer.
  - Session-based alerts notify users of important actions like successful updates or errors.
  - "Remember Me" functionality using cookies allows users to stay logged in across sessions.

- **Discussion Threads:**
  - Users can post new threads with a title and description.
  - Users can edit or delete their own threads.
  - When a thread is deleted, all related comments are also removed.
  
- **Comment Management:**
  - Users can post comments within threads.
  - Users can edit or delete their own comments.
  - Only the creator of a thread or comment can modify or delete their own content.

- **Search Functionality:**
  - Users can search through threads by keywords or phrases.
  - If no matching threads are found, a message will indicate no results.

- **Responsive Design:**
  - The site is fully mobile-responsive for seamless usability across devices.

## Functional Requirements

1. **User Authentication:**
   - **Sign up:** Users can register with a username, email, and password. Each form field is validated.
   - **Log in:** Users can log in with their registered email and password.
   - **Log out:** Secure logout functionality is provided.
   - **Session Management:** Sessions are used to manage user authentication, provide security, and handle alerts.
   - **"Remember Me":** Users can choose to remain logged in using the "Remember Me" functionality, implemented via cookies.

2. **Discussion Forum:**
   - **Posting:** Users can create threads under specific topics.
   - **Commenting:** Users can respond to existing threads with comments.
   - **Thread Management:** Users can update or delete their own threads.
   - **Comment Management:** Users can update or delete their own comments.
   - **Thread Deletion:** Deleting a thread removes all corresponding comments.

3. **Search System:**
   - **Search Bar:** Users can search for threads by title or content.
   - **Search Results:** If no threads match the search, a message is displayed.

4. **Password Management:**
   - **Reset Password:** Users can initiate a password reset via email.
   - **Email Notifications:** PHPMailer sends secure reset links.

5. **Notification System:**
   - **Email Alerts:** PHPMailer ensures that email notifications (e.g., password reset) are sent securely and reliably.
   - **Session Alerts:** Alerts are managed using sessions for events such as successful updates, errors, and other important user feedback.

## Non-Functional Requirements

1. **Security:**
   - **Password Hashing:** Passwords are hashed using PHP's secure password hashing algorithms before storage.
   - **XSS Prevention:** User input is sanitized to prevent Cross-Site Scripting (XSS) attacks.
   - **Session and Cookie Security:** Sessions and cookies are implemented securely to manage authentication and data persistence. Cookies used for the "Remember Me" functionality are encrypted to enhance security.

2. **Performance:**
   - **Efficient Database Queries:** MySQL is optimized for fast retrieval of search results and thread loading.

3. **Usability:**
   - **User-Friendly Interface:** The design is intuitive for users of all technical levels.
   - **Responsive Design:** Bootstrap ensures optimal usability on various devices.

4. **Reliability:**
   - **Email Reliability:** PHPMailer guarantees the secure delivery of password reset emails.

5. **Scalability:**
   - The application is built to scale with increased users, allowing for easy integration of new features.

## Usage of PHPMailer

PHPMailer is integrated for handling email notifications, primarily for password recovery. Here's an overview of its key usage:

- **Email Sending:** Emails are sent via a secure SMTP server.
- **Password Reset:** Users receive an email containing a unique link to reset their passwords.
- **SMTP Configuration:** PHPMailer is configured to use secure SMTP servers to ensure reliable and secure email delivery.

## Database Import Instructions

To import the SQL dump file into your MySQL database, follow these steps:

1. **Open PHPMyAdmin:** Log in to PHPMyAdmin from your local server or hosting provider.
2. **Create a New Database:** 
   - In PHPMyAdmin, create a new database by entering a name (e.g., `idiscuss`).
   - Click the "Create" button.
3. **Import the SQL Dump:**
   - Click on the "Import" tab within your newly created database.
   - Choose the SQL file (`idiscuss.sql`) from your file system.
   - Click "Go" to start the import process.
4. **Verify Tables:**
   - Once imported, you should see the relevant tables (e.g., `users`, `threads`, `comments`,`categories`) within the database.

That's it! Your database should now be ready to use with the iDiscuss project.

## Technologies Used

- **Frontend:** HTML, CSS (Bootstrap for responsive design), JavaScript
- **Backend:** PHP (Object-Oriented Programming)
- **Database:** MySQL
- **Email Handling:** PHPMailer for email notifications and password recovery
