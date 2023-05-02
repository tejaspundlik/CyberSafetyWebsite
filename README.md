# CyberSafetyWebsite

Cyber safety is necessary to protect individuals, organizations, and societies from various threats that arise from using digital devices and networks. Cyber threats include but are not limited to hacking, identity theft, phishing, malware, and cyberbullying. These threats can result in financial losses, reputational damage, and even physical harm.

As the internet and digital technologies continue to play an increasingly important role in our personal and professional lives, it becomes essential to practice good cyber safety habits to protect ourselves and our digital assets. Failure to do so can lead to devastating consequences that can affect us and those around us. Therefore, raising awareness about cyber safety and implementing best practices is crucial to ensure a secure and safe digital future.


# User Visible Features

## Navbar (navbarbefore.php and navbarafter.php)

The navbar appears on various pages of the website. It includes links to the Passwords page, Contact Us page, and Sign In page. The navbar is styled using Bootstrap, a popular front-end development framework, as well as my own custom CSS.

### HTML

The HTML code for the navbar is contained within a 'nav' element. It includes an image on the left side, which is linked to the homepage, and a toggle button that collapses the menu on smaller screens. The menu is contained within a 'div' element with the class collapse navbar-collapse. Each menu item is contained within an 'li' element with the class nav-item. Each item includes an image, which is contained within an 'img' element with the class navImage, and text, which is contained within a 'p' element with the class navText. Each item is linked to a different page of the website using an 'a' element with the appropriate href attribute.

### CSS

The styling for the navbar is contained within a separate CSS file, which is linked in the 'head' section of each page that includes the navbar. The CSS includes styling for the navbar itself, as well as for the various elements contained within it.

### JavaScript

The JavaScript includes several libraries that are used to add interactivity to the navbar. The jQuery library is used to handle various DOM manipulation tasks, while the Popper library is used to position elements such as tooltips and popovers. The Bootstrap JavaScript library includes various plugins that add functionality such as dropdown menus and modals.


## Footer (footer.php)

This is the code for the footer that appears on various pages of the website. It includes information about making a donation and signing up for a newsletter. The footer is styled using custom CSS, as well as external CSS files for fonts and layout.

### HTML

The HTML code for the footer is contained within a 'div' element with the class footerouter. It includes two 'div' elements with the classes footerleft and footerright. Each 'div' element includes a heading with the class footerh4, a paragraph with the class footerp, and a link with the class footera. The links are styled as buttons and are linked to appropriate pages on the website using the href attribute.

### CSS

The styling for the footer is contained within a separate CSS file, which is linked in the 'head' section of each page that includes the footer. The CSS includes custom styling for the footerouter, footerleft, footerright, footerh4, footerp, and footera classes.

External CSS files are also linked in the 'head' section for the fonts used in the footer and the overall layout of the page.

### JavaScript

No JavaScript is used in this code for the footer.


## Homepage (homepage.php)

This is a PHP script that generates the homepage for a website on Cyber Safety Awareness. Here is an overview of what the code does:

* Starts a session using the session_start() function.
* Outputs the page title and favicon using the echo statement.
* Checks if the user is logged in using isset() and $_SESSION variables. If the user is logged in, it includes the navbarAfter.php file. If not, it includes the navbarBefore.php file.
* Sets the metadata for the page including the character set, the compatibility mode, and the viewport using the 'meta' tag.
* Loads the necessary CSS files and Google Fonts.
* Defines the body of the page with three main sections.
* The first section has a heading, an image, and a brief description of Cyber Safety.
* The second section explains what Cyber Threats are, provides examples, and offers a solution to staying safe in the digital age.
* The third section provides a call to action for the user to take a quiz to test their knowledge on the topic.

Includes a footer whose function is decribed above.


## Quiz Page (quiz.php)

This is a PHP file with some HTML and CSS code, as well as a JavaScript file linked to it. The file starts by starting a session and setting the page title and favicon.

Next, the code checks if the user is logged in or not by checking if a session variable 'loggedIn' is set and equals to true. If the user is logged in, the file includes a PHP file that contains the after-login navbar, and if not, the before-login navbar is included.

After that, an HTML page starts with the head section. The head section contains the page title, charset, viewport, and links to CSS and Google Fonts. The CSS files define the styling for the quiz.

Then, the body section starts with a div tag that has a class of 'quiz-container' and an ID of 'quiz'. This is where the quiz will be displayed. It has a header with the question text and four answer options represented by radio buttons and their corresponding labels.

At the bottom of the quiz, there is a 'Next' button represented by a button tag with a class of 'button' and an ID of 'submit'. Finally, the footer section includes a PHP file that contains the footer of the page.

At the end of the file, a JavaScript file is linked, which contains the backend code for the quiz.

## Quiz Backend (fetchQuestions.php)

This code fetches quiz questions from a MySQL database, creates an array of questions and their corresponding options and correct answers, encodes it in JSON format, and writes it to a file named "questions.json". Finally, it redirects to the "quiz.php" page.

Here's a breakdown of what each line does:

* Lines 1-5: Set up the database connection parameters.
* Line 6: Connect to the database using the mysqli object.
* Line 7: Execute a SQL query to fetch all rows from the "cyber_security_questions" table.
* Line 8: Create an empty array to store the quiz questions.
* Lines 9-16: Loop through each row returned by the SQL query and add its question, options, and correct answer to the $questions array.
* Line 17: Encode the $questions array as JSON.
* Line 18-20: Open the "questions.json" file for writing, write the encoded JSON to the file, and then close it.
* Line 21: Close the database connection.
* Line 22: Redirect to the "quiz.php" page.


## Quiz Backend (quiz.js)

This code seems is a JavaScript program that fetches a JSON file containing quiz questions and presents them to the user as a multiple-choice quiz. The user selects an answer for each question, and when all questions have been answered, the program displays the user's score.

The program begins by defining an empty array called quizData and an asynchronous function called loadQuizData(). This function sends a GET request to a PHP script at ./QuizBackend/fetchQuestions.php and then fetches the resulting JSON data from ./QuizBackend/questions.json. The JSON data is then returned to the caller.

The program then immediately calls loadQuizData() as an immediately invoked function expression (IIFE) and stores the resulting data in the quizData array. It then creates a shuffled subset of five random questions from the quizData array and initializes various HTML elements with their corresponding elements from the first question.

The program defines several functions to help with quiz functionality. The loadQuiz() function loads the current quiz question and answers into the HTML elements. The deselectAnswers() function clears all answer selections. The getSelected() function returns the ID of the selected answer, if any. Finally, the submitBtn event listener checks if an answer has been selected and updates the score accordingly. If all questions have been answered, the quiz results are displayed and the button changes its text to "Try Again" and reloads the page when clicked.


## Donation Page (donation.php)

The file starts with PHP code that checks whether the user is logged in or not. If the user is logged in, the page displays a navigation bar with options for a logged-in user. If the user is not logged in, the page displays a different navigation bar with options for a user who has not logged in yet.

After the PHP code, the file contains HTML code for the donation page. The HTML code includes a form with fields for the user to enter the amount they want to donate and to select from preset donation amounts. The form also includes hidden fields with values for the payment processing system (PayPal) to process the payment.

The file also includes links to CSS and JavaScript files for styling and functionality of the page. The CSS file contains styling for the donation page, and the JavaScript file contains code to handle user input on the donation page.

The link to the PayPal API is: https://developer.paypal.com/home


## Contact Us Page (contactpage.php)

This is a PHP file that generates an HTML page for a Contact Us form. Here's a breakdown of what the code does:

* The PHP session_start() function starts a new or resumes an existing session.
* The page title and icon are set using the HTML 'title' and 'link' tags.
* The code checks if the user is logged in by checking the session variable "loggedIn". If the user is logged in, it includes the navbarAfter.php file, otherwise, it includes navbarBefore.php.
* The code includes mailsend.php, which is a PHP script that sends an email to the website admin with the feedback entered in the contact form.
* If the form is submitted (by POST request) and the email field is not empty, the sendmail() function from mailsend.php is called with the email, name, and message entered in the form.
* The HTML page content starts with a 'div' container with class "container".
* Inside the container, there is a 'div' with class "form", which contains two more 'div's: one with class "contact-info" and another with class "contact-form".
* The "contact-info" 'div' contains a heading and some text, as well as an animated image of a mailbox.
* The "contact-form" 'div' contains an HTML form with fields for name, email, and message, as well as a submit button.
* The form uses some custom CSS classes to style the form fields and labels.
* At the bottom of the page, the PHP code includes the footer.php file, which contains some HTML for the website footer.
* Finally, there is a 'script' tag that includes a JavaScript file called contactpage.js.


## Contact Us Page Backend (mailsend.php)

This code is a PHP function named sendmail that takes three parameters: $postemail, $postname, and $postmessage. The function first checks if $postemail is not empty and, if it's not, it inserts the values of $postemail, $postname, and $postmessage into a MySQL database named user_feedback.

Then, the function uses the PHPMailer library to send an email to the kjprojects23@gmail.com address. The email's sender is set to the value of $postemail, and the subject and body of the email are set to strings that include the values of $postname and $postmessage.

If the email is sent successfully, the function sets $mail_send to true and displays a success message using Bootstrap's alert component. If there was an error in sending the email or if $postemail was empty, the function sets $mail_send to false and displays an error message using Bootstrap's alert component.

Note that this code also includes several lines of code to include the PHPMailer library's required files and to establish a connection to the MySQL database.

The documentation for php mailer is: https://github.com/PHPMailer/PHPMailer


## Password Page (passchecker.php)

The webpage contains a password input field, which uses JavaScript to check the strength of the password as it is being typed. There is also a section that explains what a strong password is, why a strong password is important, and how to create and remember a strong password.

The webpage also includes a password generator, which generates a random password of a selected length between 8 and 16 characters. The password generator uses JavaScript to dynamically update the length of the password based on a slider input.


## Sign In Page (signInPage.php)

This is a PHP code that creates a sign-in page for a website. The code first checks if the user has submitted their email and password through the form, and if so, it connects to a MySQL database to check if the entered email and password match an existing user. If the user exists, their session is started and they are redirected to the homepage of the website. If the user does not exist or the password is incorrect, an error message is displayed on the page.

The code then creates the HTML for the sign-in page, which includes a form for the user to enter their email and password, as well as links to register and reset their password. The HTML also includes references to CSS and font files, and includes the website's navbar and footer through separate PHP files.

Overall, this code allows users to sign in to a website and access its features, while also providing error messages and links for registration and password resetting.


## Sign In Page Backend (signInPage.php)

This PHP code uses MySQLi extension to connect to a MySQL database server hosted on a remote server with the following connection details:

Server name: sql12.freemysqlhosting.net
Username: sql12608164
Password: eDcWvKrJUv
Database name: sql12608164
The code performs the following SQL operations:

* SELECT statement to retrieve a user record from the "users" table where the email and password match the user input values. This is done using a prepared statement to prevent SQL injection attacks.
* If the query returns at least one row, the user is considered authenticated, and the session variable 'loggedIn' is set to true, and the user is redirected to the homepage.
* If the query returns zero rows, the user is not authenticated, and another SELECT statement is used to check if the user's email exists in the "users" table.
* Depending on the result of the second SELECT statement, a message is displayed to the user indicating either an incorrect password or that the email is not registered.

In summary, this code connects to a MySQL database using MySQLi extension and performs SQL operations to authenticate a user's email and password against a user record in the "users" table, and provides feedback to the user based on the query result.


## Forgot Password Page (forgotPasswordPage.php)

This is a PHP script that handles a form submission for a forgot password page. It starts with starting a session, setting the page title and favicon, and including a navigation bar.

If the email field is submitted with a value, it takes the input values of email, phone number, and new password and connects to a MySQL database using mysqli object-oriented approach. Then, it updates the user's password in the database by executing a prepared statement. If the update statement affected at least one row in the database, it displays a success message. Otherwise, it executes a select statement to check if the email is correct but the phone number is wrong or if the user hasn't registered with the website yet. Depending on the situation, it displays an appropriate error message.

Finally, it displays the forgot password page that contains a form for users to enter their email, phone number, and new password. If the form is submitted, the PHP script above will be executed.


## Forgot Password Page Backend (forgotPasswordPage.php)

The script first checks if the email field is set and not empty. If true, it retrieves the email, phone number, and new password from the form's post data. Then, it establishes a connection to the MySQL database using the mysqli class, specifying the hostname, username, password, and database name.

Next, the script prepares an SQL statement to update the user's password in the users table of the database. The statement uses placeholders (?) for the new password, email, and phone number, which are later bound to the corresponding variables using the bind_param method. The sss argument of bind_param indicates that the variables are strings.

After binding the variables, the script executes the prepared statement using the execute method. If the update query affects at least one row in the users table, the script displays a success message using Bootstrap's alert component with a green background color. Otherwise, the script prepares and executes another SQL statement to select the user's record from the users table based on the email address. If the query returns one row, the script displays a warning message indicating that the email is correct, but the phone number is incorrect. If the query returns no rows, the script displays an error message stating that the user is not registered.

Finally, the script closes the prepared statement and the database connection.

In terms of output, when a user submits the form with valid email, phone number, and new password, the script updates the user's password in the database and displays a success message. If the email is correct but the phone number is wrong, the script displays a warning message. If the email is incorrect, the script displays an error message.


## Register Page (registerPage.php)

This is a PHP script that handles user registration and insertion of user data into a MySQL database.

The script starts by starting a session and checking if the form has been submitted with the required email field filled in. If the email field has been filled in, the script then retrieves the other form data (first name, last name, phone number, and password) and sets up a connection to a MySQL database using the mysqli class.

Next, the script prepares an SQL statement to insert the user data into a table named 'users' with columns for email, first name, last name, password, and phone number. It then binds the form data to the statement and executes it.

If the statement executes without errors, the script displays a success message using an alert div with a green background color. If the statement encounters an error (such as attempting to insert a duplicate email address), the script displays an error message using an alert div with a red background color.

After the registration process is complete, the script checks if the user is logged in using a session variable named 'loggedIn'. If the user is logged in, it includes a navbarAfter.php file that displays a navbar with links to various features. If the user is not logged in, it includes a navbarBefore.php file that displays a navbar with a login link.

The HTML code following the PHP script contains a registration form that requests the user's first name, last name, email address, phone number, and password. The form data is submitted using the POST method to the same script for processing. The HTML code also includes links to various stylesheets and a footer that is included using the footer.php file.


## Register Page Backend (registerPage.php)

The SQL statement used in the provided code is an INSERT INTO statement, which inserts a new record into the "users" table of a MySQL database. 

Let's break down the statement:

* INSERT INTO is a SQL keyword used to insert new records into a table.
* users is the name of the table where the new record will be inserted.
* (email,fname,lname,userpassword,phno) is a comma-separated list of column names in the "users" table.
* values(?,?,?,?,?) is a parameterized value list that will be used to insert new values into the specified columns. The ? placeholders represent values that will be supplied later using the bind_param method.
* The bind_param method is used to bind variables to the parameter placeholders in the values() clause of the SQL statement.

The output of this SQL statement depends on whether it successfully inserts a new record or not. If the record is successfully inserted, the code outputs a success message in the form of an HTML alert. If the record already exists (as determined by a unique key constraint in the database), the code outputs an error message instead.


## Thank You For Donation Page (thankyou.php)

The body section of the HTML code contains a div element with class "thank" that displays an image and a header message thanking the user for their donation. The image file is located in the "Assets" folder and is named "thankyou.svg".

Finally, the PHP header function is used to set the refresh time of the web page to 5 seconds and redirects the user to the homepage (homepage.php) after 5 seconds. This means that the user will see the "Thank You For Your Donation!" message for 5 seconds before being automatically redirected to the homepage.


## Reviewed Products Page (reviewpage.php)

The HTML portion of the file is a review page that displays recommended products. The page includes a title, a stylesheet, and a font. The body of the page contains a div element with class title that contains a heading, and a div element with class content that is empty. The page also includes a footer, which is included via the footer.php file, and a JavaScript file called review.js.


## Reviewed Products Page Backend (review.js)

This code defines an array of objects called data, where each object represents a product and includes properties such as an image, name, rating, and a short description. The code then loops through each object in the array using the forEach method and dynamically creates HTML elements to display the product information on a webpage.

For each object in the data array, the code creates a new div element with the class cards. It then constructs the HTML for the product card by interpolating the properties of the current object into a template literal, and sets the innerHTML of the cards element to the constructed HTML. Finally, the cards element is appended to a container element with the class content.

The resulting webpage will display product cards for each object in the data array, with each card including an image, product name, rating, and description.


## Study Material Page (material1.php to material9.php)

These pages contain the material necessary for the user to attempt the quiz sucessfully, through conceptual understanding of this page the user can increase his security online.


## Virus URL Checker (virusurl.php)

This is a PHP script that contains a form that allows users to enter a URL to scan for malware using the VirusTotal API.

If the user submits the form, the script checks if the URL is not empty using the isset() and != operators. If it is not empty, it sends a request to the VirusTotal API to scan the URL using the curl_init(), curl_setopt(), and curl_exec() functions. It then retrieves the scan ID from the response and uses it to poll the API until the scan is complete using another curl_init(), curl_setopt(), and curl_exec() sequence. The response from the API is then parsed and the results are displayed on the page using echo statements.

If the scan indicates that the URL is safe to visit, the webpage displays a message saying so and provides a link for more information. If the scan indicates that the URL is not safe to visit, the webpage displays a message saying so and provides a link for more information. 


## Virus Page Checker (virusfile.php)

This is a PHP code that includes a form that allows the user to upload a file for virus scanning using the VirusTotal API.The body of the page contains a container that holds a form with a file input and a submit button.

The file is sent for scanning by making an API request to VirusTotal using the curl library in PHP. First, the code hashes the contents of the file using the SHA256 algorithm to get a unique identifier for the file.

Then, the code checks if the file has already been scanned by making a GET request to VirusTotal's API endpoint for files with the hashed identifier. If the file has not been scanned yet, the code sends a POST request to the same API endpoint with the file data as a parameter in the request body. The x-apikey header is set to include the API key for authentication.

After the POST request is made, the code again sends a GET request to the same API endpoint to retrieve the scan results for the file. Once the results are retrieved, the code checks whether the file is safe or not by looking at the malicious property of the last_analysis_stats object in the JSON response.

Once the file has been scanned, the code checks if the file is safe or infected by checking the 'malicious' field in the response JSON. If the file is infected, it displays a message saying so along with a link to the VirusTotal report for the file. If the file is safe, it displays a message saying so along with a link to the VirusTotal report for the file. If the API is busy or the response is null, it displays a message saying so.


# Admin Visible Features

The admin page can be access by adding a /AdminPanel to the root path of the website


## View Existing Questions (viewquestions.php)

This is a PHP code that retrieves data from a MySQL database and displays it on a web page.

First, the code starts a session and sets the page title and favicon. It includes a separate PHP file called "adminnavbar.php" that contains navigation links for the admin panel.

Then, it creates a heading and connects to a MySQL database with the given credentials. It retrieves all the rows from the "cyber_security_questions" table using a SQL query, and loops through each row to display the "question" column in a div element with a class of "questions".

Finally, the code closes the database connection


## Add New Questions (addquestions.php)

This is a PHP code that adds a new question to a quiz. The code starts by starting a session, setting the title of the page, and including a navigation bar for the admin page. It then checks if the form has been submitted with a question and its options, and if so, retrieves the values and connects to a MySQL database. It then prepares an INSERT statement with placeholders for the question and its options, and binds the values to the placeholders. It then executes the statement and checks if any rows were affected. If no rows were affected, an error message is displayed, and if rows were affected, a success message is displayed.

After this, the code displays an HTML page with a form that allows the user to enter a new question and its options. It also displays some rules to follow when adding a question to the quiz. Once the user enters the information and clicks the "Insert Question" button, the form is submitted to the same page, and the PHP code at the top of the page is executed to add the question to the quiz.

If the insertion is successful, the script will display a success message in a green box at the top of the HTML page. If the insertion fails, the script will display an error message in a red box at the top of the HTML page.

The expected output for a successful insertion would be the success message displayed in the green box. If there is an error with the insertion, the error message would be displayed in the red box. In either case, the user should be able to see whether the question was successfully added to the database or not.


## View Existing Newsletter Members (currentusers.php)

The given code is a PHP script that connects to a MySQL database and retrieves data from a table named "newsletter_members". It then displays the email addresses of the members using a while loop and HTML markup.


## Remove Existing Newsletter Members (remoceUsers.php)

This PHP code defines a script that removes a user's email address from a newsletter mailing list. It begins by checking if the user has submitted an email address to be removed, and if so, it connects to a MySQL database, prepares a statement to delete the email address from the "newsletter_members" table, binds the email address value to the statement, executes the statement, and then checks if any rows were affected by the deletion.

If no rows were affected, it displays a danger alert indicating that the user does not exist or has already been removed. If at least one row was affected, it displays a success alert indicating that the user has been successfully removed from the newsletter mailing list.

The HTML code at the bottom defines a form that allows an admin user to enter an email address to be removed from the mailing list, along with some styling for the form and page.
