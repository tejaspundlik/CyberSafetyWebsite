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


## Homepage

This is a PHP script that generates the homepage for a website on Cyber Safety Awareness. Here is an overview of what the code does:

Starts a session using the session_start() function.
Outputs the page title and favicon using the echo statement.
Checks if the user is logged in using isset() and $_SESSION variables. If the user is logged in, it includes the navbarAfter.php file. If not, it includes the navbarBefore.php file.
Sets the metadata for the page including the character set, the compatibility mode, and the viewport using the 'meta' tag.
Loads the necessary CSS files and Google Fonts.
Defines the body of the page with three main sections.
The first section has a heading, an image, and a brief description of Cyber Safety.
The second section explains what Cyber Threats are, provides examples, and offers a solution to staying safe in the digital age.
The third section provides a call to action for the user to take a quiz to test their knowledge on the topic.
Includes a footer with the necessary links and legal information.
The code is well-organized and structured, and uses external files for the navbar and footer, which makes it easier to modify and maintain the website. The page also uses responsive design with media queries for different screen sizes.