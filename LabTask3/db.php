<?php
class db{

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb2";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

 return $conn;
 }


 function InsertUser($conn,$table,$name, $email, $username,$password,$gender)
 {
     $result = "INSERT INTO " . $table . " (name,email,username,password,gender)
     VALUES('$name','$email','$username','$password','$gender')";
     if ($conn->query($result) === TRUE) {
         echo "New record created successfully";
         return $result;
     } else {
         echo "Error: " . $result . "<br>" . $conn->error;
     }
 }
 



function CloseCon($conn)
 {
 $conn -> close();
 }
}
