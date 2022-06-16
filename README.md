# gamertags
final project for 328
Gurnek Leo and Renee

1. Separates all database/business logic using the MVC pattern.
•	Validation and Data Layer are under the model folder
•	All HTML files under views folder
•	Routes to all the html files under the index.php
•	Index.php calls function in Controller to get data from model and return views.
•	Classes under classes folder
•	JavaScripts under scripts

2. Routes all URLs and leverages a templating language using Fat-Free framework
•	All routes are in the index.php and leverages a templating language using Fat-Free Framework

3. Has a clearly defined database layer using PDO and prepared statements. You should have at least two related tables.
•	All database layer is under model in data-layer.php.  

4. Data can be viewed and added.
•	Database layer uses PDO and prepared statements to add and retrieve from the database.

5. Has a history of commits from both team members to a Git repository. Commits are clearly commented.
•	Each teammate has over 30 commits, clearly commented.

6. Uses OOP, and defines multiple classes, including at least one inheritance relationship.
•	2 classes. Member and VIP Member contains all fields such as name, email, username, age, and password. VIP extends Member and contains all fields from user and the VIP is able to enter in gamer tags from the consoles

7. Contains full Docblocks for all PHP files and follows PEAR standards.
•	All PHP files contains DocBlock and Follows Pear Standards. 

8. Has full validation on the client side through JavaScript and server side through PHP.
•	Member form has full validation on the client side through JavaScript (scripts/validate.js) and server side through PHP (model/validator.php).

9. All code is clean, clear, and well-commented. DRY (Don't Repeat Yourself) is practiced.
•	All functions and files are commented. Any code that was repeated was turned into a function and called upon instead of repeating code.

10. Your submission shows adequate effort for a final project in a full-stack web development course.
•	We learned quite a bit this quarter and we think our project was able to incorporate what we learned.  There was a lot of trial and error as well as the stated “why don’t you work”. 

BONUS: Incorporates Ajax that access data from a JSON file, PHP script, or API.
•	Our project does not incorporate Ajax.
