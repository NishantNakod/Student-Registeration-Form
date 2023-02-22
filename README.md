Student Registration Form :-
This project is a student registration form with photo upload. The form collects student details and stores them in a MySQL database. It also allows for the upload of a student's photo which is saved in a separate directory.

Technologies Required:-
To run this project on your personal computer, you will need to have knowledge of the following technologies:
-HTML
-CSS
-JavaScript
-SQL
-PHP
-Visual Studio Code
Installation processes for these softwares are available on various online resources such as YouTube, the official websites of the software, and other tutorials.

Installation Process :-
After installing all the necessary software, download the project files and place the folder inside the xampp/htdocs directory. Follow the instructions below to complete the installation process:
1)Import the Student_Registery.SQL file into your local database to create the table in your database.
2)In the Submit.php file, change the following line: $conn = mysqli_connect("localhost", "root", "", "studentrr");. Remove the current data to make it look like this:   $conn = mysqli_connect("", "", "", "");
3)Replace the first parameter with the hostname or IP address of the server you are connecting to. The second parameter should contain the username of the MySQL account, the third parameter should contain the password for the MySQL account, and the fourth parameter should contain the name of the database you want to connect to. All parameters must be placed inside the double quotation marks.
4)Start the PHP server by right-clicking inside the form.html file in Visual Studio Code. Note: Apache and SQL servers must be active, which can be activated using the XAMPP control panel.

Usage :-
-Once the installation process is complete, you can add details to the form, and the details will be uploaded to your database. The image will be uploaded to the folder inside the project folder.
-If you want to make this application form hosted as a website, you will need an online database and a database to store the image files. Alternatively, you can also upload image files in SQL database in binary format and retrieve them as necessary.
-We hope you find this project useful and easy to use. If you have any questions or issues, please feel free to contact us.
