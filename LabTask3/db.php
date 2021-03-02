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


function InsertUser($conn, $table, $name,$email, $username, $password,$gender)
{
    $result = $conn->query("INSERT INTO '". $table ."' values($name,$email, $username, $password,$gender)");
    return $result;
}



function CloseCon($conn)
 {
 $conn -> close();
 }
}
