# fiindme
YII based PHP backend for FiindME
1. Database: MySQL
2. MVC concern separation
3. REST APIs for
  a. Deal Creation
  b. Deal Update
  c. Deal Deletion
4. REST APIs are routed by:
  a. Router in the config files
5. protected/config/main.php : Update this file with the proper REST patterns
6. protected/controllers/FindController.php : Update the APIs corresponding the to config file patterns.
6. Scrips to Generate/Test the Deal in MySQL
