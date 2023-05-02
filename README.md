# CyberSafetyWebsite

## Navbar

The navbar appears on various pages of the website. It includes links to the Passwords page, Contact Us page, and Sign In page. The navbar is styled using Bootstrap, a popular front-end development framework, as well as my own custom CSS.

### HTML

The HTML code for the navbar is contained within a 'nav' element. It includes an image on the left side, which is linked to the homepage, and a toggle button that collapses the menu on smaller screens. The menu is contained within a 'div' element with the class collapse navbar-collapse. Each menu item is contained within an 'li' element with the class nav-item. Each item includes an image, which is contained within an 'img' element with the class navImage, and text, which is contained within a 'p' element with the class navText. Each item is linked to a different page of the website using an 'a' element with the appropriate href attribute.

### CSS

The styling for the navbar is contained within a separate CSS file, which is linked in the 'head' section of each page that includes the navbar. The CSS includes styling for the navbar itself, as well as for the various elements contained within it.

### JavaScript

The JavaScript includes several libraries that are used to add interactivity to the navbar. The jQuery library is used to handle various DOM manipulation tasks, while the Popper library is used to position elements such as tooltips and popovers. The Bootstrap JavaScript library includes various plugins that add functionality such as dropdown menus and modals.


## Footer

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









