# Full-Connection-Website-in-PHP-

this is a complete mini php website where you can :
   #### Login
   #### Sign Up
   #### Logout
   #### Send Message
   #### Inbox
   #### Outbox
   
   ## How to Setup
There is a folder name Database where SQL database is there, by dowbloading the Repo You can import that database file and name it whatever You want.

After importing the database file into local sever (Wamp, Xampp, etc.) then rename the database name in the ./includes/Database_Connection.php. 

```php
<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "Your_Database_Name"; // change the database name here

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName,"3308");

if (!$conn) {    //if connection is failed conn will be unpopulated
  die("Connection Failed : " .mysqli_connect_error()); //will throw out the specific error 
}
```
I passed 3308 a server port this is the case with me You can remove if does work without passing that parameter.



  
 
