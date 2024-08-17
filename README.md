# iDiscuss: An Online Discussion Forum

iDiscuss is a full-stack web application developed as an online forum for users to discuss various topics. It allows users to post queries, respond to discussions, and engage in meaningful conversations across a# iDiscuss: An Online Discussion Forum

iDiscuss is a full-stack web application developed as an online forum for users to discuss various topics. It allows users to post queries, respond to discussions, and engage in meaningful conversations across a wide range of subjects. Built with PHP, MySQL, and Bootstrap, iDiscuss also incorporates PHPMailer for secure and reliable email functionality, such as password recovery.

## Project Overview

The aim of this project is to create a simple, user-friendly online platform that supports threaded discussions. Users can register, log in, search for discussions, participate in conversations, and reset their passwords using a secure email-based process.

### Features

- **User Registration and Authentication:** 
  - Users can sign up, log in, and log out securely.
  - Passwords are hashed for secure storage.
  - A password reset feature is available via email, powered by PHPMailer.

- **Discussion Threads:**
  - Users can post new discussion threads with a title and description.
  - Comments and responses can be posted within discussion threads.
  - Threads are categorized based on topics, allowing users to filter discussions by interest.
  - Users can update or delete their own threads.
  - When a thread is deleted, all its corresponding comments are also removed.

- **Comments Management:**
  - Users can post comments on threads.
  - Users can update or delete their own comments.
  - Only the creator of a comment or thread can modify or remove their own content.

- **Search Functionality:**
  - Users can search through discussion threads by keywords or phrases.
  - If no relevant threads are found, the user will receive a message indicating no matches.

- **Responsive Design:**
  - The website is mobile-responsive, ensuring a seamless user experience across devices.

## Functional Requirements

1. **User Authentication:**
   - **Sign up:** Users can register by providing a username, email, and password.
   - **Log in:** Users can log in with their registered email and password.
   - **Log out:** Users can log out from the website securely.

2. **Discussion Forum:**
   - **Posting:** Users can create new discussion threads with relevant topics and details.
   - **Commenting:** Users can reply to existing threads and engage in conversations.
   - **Thread Management:** Users can update or delete their own threads.
   - **Comment Management:** Users can update or delete their own comments.
   - **Thread and Comment Deletion:** Deleting a thread will also remove all comments associated with it.

3. **Search System:**
   - **Search Bar:** Users can search for threads by title or content.
   - **Search Results:** The search functionality returns all matching threads, and if none are found, a message will be displayed.

4. **Password Management:**
   - **Reset Password:** Users can initiate a password reset process by providing their registered email.
   - **Email Notifications:** A reset link is sent via email, and users can securely update their passwords.

5. **Notification System:**
   - **Email Alerts:** PHPMailer is used to send various notifications, such as password reset links, ensuring email reliability and security.

## Non-Functional Requirements

1. **Security:**
   - **Password Hashing:** All passwords are securely hashed using PHP's password hashing functions before being stored in the database.
   - **XSS Prevention:** Measures have been taken to sanitize user input, preventing Cross-Site Scripting (XSS) attacks.

2. **Performance:**
   - **Efficient Query Handling:** The MySQL database is optimized to ensure that the search functionality and thread loading are fast and efficient, even with large datasets.

3. **Usability:**
   - **Simple UI:** The website has a clean and intuitive user interface that allows users of all technical levels to easily engage with the platform.
   - **Mobile-Responsive:** The Bootstrap framework ensures compatibility with various screen sizes, enhancing usability across different devices.

4. **Reliability:**
   - **Robust Email Functionality:** PHPMailer ensures that all password reset emails are sent reliably and securely, with proper error handling in case of failure.

5. **Scalability:**
   - The website is designed to accommodate a growing user base without performance degradation. The modular structure of the code makes it easy to add new features or modify existing ones.

## Usage of PHPMailer

PHPMailer is utilized for sending automated emails to users, primarily for the password reset functionality. Here is a brief overview of its usage:

- **Email Sending:** PHPMailer sends emails via an SMTP server, ensuring that all communications are encrypted and secure.
- **Password Reset:** When a user initiates the "Forgot Password" process, PHPMailer generates an email containing a unique reset link. The user can click this link to securely update their password.
- **SMTP Configuration:** The website's PHPMailer integration is configured to use secure SMTP servers, ensuring that email delivery is reliable and resistant to spoofing or interception.

The use of PHPMailer adds an additional layer of professionalism and security to the website's email handling system, making it an essential part of the overall architecture.

## Technologies Used

- **Frontend:** HTML, CSS (Bootstrap for responsive design), JavaScript
- **Backend:** PHP (Object-Oriented Programming)
- **Database:** MySQL
- **Email Handling:** PHPMailer for sending email notifications and password reset links

## How to Run Locally

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/idiscuss.git
 wide range of subjects. Built with PHP, MySQL, and Bootstrap, iDiscuss also incorporates PHPMailer for secure and reliable email functionality, such as password recovery.

## Project Overview

The aim of this project is to create a simple, user-friendly online platform that supports threaded discussions. Users can register, log in, search for discussions, participate in conversations, and reset their passwords using a secure email-based process.

### Features

- **User Registration and Authentication:** 
  - Users can sign up, log in, and log out securely.
  - Passwords are hashed for secure storage.
  - A password reset feature is available via email, powered by PHPMailer.

- **Discussion Threads:**
  - Users can post new discussion threads with a title and description.
  - Comments and responses can be posted within discussion threads.
  - Threads are categorized based on topics, allowing users to filter discussions by interest.

- **Search Functionality:**
  - Users can search through discussion threads by keywords or phrases.
  - If no relevant threads are found, the user will receive a message indicating no matches.

- **Responsive Design:**
  - The website is mobile-responsive, ensuring a seamless user experience across devices.

## Functional Requirements

1. **User Authentication:**
   - Sign up: Users can register by providing a username, email, and password.
   - Log in: Users can log in with their registered email and password.
   - Log out: Users can log out from the website securely.

2. **Discussion Forum:**
   - Posting: Users can create new discussion threads with relevant topics and details.
   - Commenting: Users can reply to existing threads and engage in conversations.
   - Thread Categorization: Discussions are organized by predefined categories for ease of access.

3. **Search System:**
   - Search Bar: Users can search for threads by title or content.
   - Search Results: The search functionality returns all matching threads, and if none are found, a message will be displayed.

4. **Password Management:**
   - Reset Password: Users can initiate a password reset process by providing their registered email.
   - Email Notifications: A reset link is sent via email, and users can securely update their passwords.

5. **Notification System:**
   - Email Alerts: PHPMailer is used to send various notifications, such as password reset links, ensuring email reliability and security.

## Non-Functional Requirements

1. **Security:**
   - Password Hashing: All passwords are securely hashed using PHP's password hashing functions before being stored in the database.
   - XSS Prevention: Measures have been taken to sanitize user input, preventing Cross-Site Scripting (XSS) attacks.

2. **Performance:**
   - Efficient Query Handling: The MySQL database is optimized to ensure that the search functionality and thread loading are fast and efficient, even with large datasets.

3. **Usability:**
   - Simple UI: The website has a clean and intuitive user interface that allows users of all technical levels to easily engage with the platform.
   - Mobile-Responsive: The Bootstrap framework ensures compatibility with various screen sizes, enhancing usability across different devices.

4. **Reliability:**
   - Robust Email Functionality: PHPMailer ensures that all password reset emails are sent reliably and securely, with proper error handling in case of failure.

5. **Scalability:**
   - The website is designed to accommodate a growing user base without performance degradation. The modular structure of the code makes it easy to add new features or modify existing ones.

## Usage of PHPMailer

PHPMailer is utilized for sending automated emails to users, primarily for the password reset functionality. Here is a brief overview of its usage:

- **Email Sending:** PHPMailer sends emails via an SMTP server, ensuring that all communications are encrypted and secure.
- **Password Reset:** When a user initiates the "Forgot Password" process, PHPMailer generates an email containing a unique reset link. The user can click this link to securely update their password.
- **SMTP Configuration:** The website's PHPMailer integration is configured to use secure SMTP servers, ensuring that email delivery is reliable and resistant to spoofing or interception.

The use of PHPMailer adds an additional layer of professionalism and security to the website's email handling system, making it an essential part of the overall architecture.

## Technologies Used

- **Frontend:** HTML, CSS (Bootstrap for responsive design), JavaScript
- **Backend:** PHP (Object-Oriented Programming)
- **Database:** MySQL
- **Email Handling:** PHPMailer for sending email notifications and password reset links

## How to Run Locally

1. Clone the repository: 
   ```bash
   git clone https://github.com/yourusername/idiscuss.git
