## Personal Budget Tracker

This project serves as a basic demonstration of user authentication using PHP and MySQL implementing LAMP stack. It consists of files designed for user login and registration functionalities.

### Files Overview:

1. **login.html:**
   - This HTML file presents a form for users to input their credentials (username/email and password) to authenticate themselves.

2. **login.php:**
   - PHP script responsible for handling the login process. It validates user credentials against the database. If authentication is successful, it sets session variables indicating a successful login.

3. **register.html:**
   - HTML file containing a form for user registration. Users can input a desired username, email, and password to create a new account.

4. **register.php:**
   - PHP script responsible for processing user registration. It sanitizes user inputs, hashes the password, and inserts the new user data securely into the database.

### Usage Instructions:

1. Ensure you have a web server environment with PHP and MySQL installed.
2. Import the provided SQL database schema into your MySQL server.
3. Configure the `db_connection.php` file with your MySQL database credentials.
4. Access the login and registration forms through your web browser.

### Purpose:

This project provides a foundation for building more complex web applications with user authentication features. It can be expanded and customized according to specific project requirements.


