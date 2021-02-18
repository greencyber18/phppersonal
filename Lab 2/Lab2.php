<!DOCTYPE html>
<html lang="en">
<body>
<?php
$validatename="";
$validateemail="";
$validateusername="";
$validateradio="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["firstname"];
    $email=$_REQUEST["email"];
    $username=$_REQUEST["username"];
    $gender=$_REQUEST["gender"];
   

    if(empty($name))
    {
        $validatename=" Your name isn't valid";
        
    }
    else
    {
        $validatename=" Your name is " .$name;
    }
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_ \-]+)*@([a-z0-9\-]+\. )+[a-z]{2,6}$/ix",$email))
    {
        $validateemail=" You Must Enter Your email";
    }
    else
    {
        $validateemail=" Your email is " .$email;
    }

    if(empty($username) || !preg_match("/^([a-z0-9\+_ \-]+)* $/ix", $username) || (strlen($username)<5))
    {
        $validateusername=" Your username isn't valid";
        
    }
     
    else
    
    {
        $validateusername= " Your username is " .$username;
    }
     
    if(!isset($gender))
    {
        $validateradio= "Please select one";
    }
    else
    {
        $validateradio= " Person is " .$gender;
    }
}
?>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

<table>
<tr><td> Name: </td>
<td><input type="text" name="firstname">
<br>
<?php echo $validatename;?></td></tr>


<tr><td> Email: </td>
<td><input type="email" name="email">
<br>
<?php echo $validateemail;?></td></tr>

<tr><td> Username: </td>
<td><input type="text" name="username"></td></tr>
<?php echo $validateusername; ?></td></tr>

<tr><td> Password: </td>
<td><input type="password" name="password"></td></tr>


<tr><td> Confirm Password: </td>
<td><input type="password" name="cnpassword"></td></tr>


</table>

<br>
<p1><strong>Gender</strong></p1>
<br>
<input type="radio" id="male" name="gender" value="Male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="Female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="Other" >
<label for="other">Other</label> <br>
<?php echo $validateradio; ?>

<input type="submit" value="SUBMIT"> 
</form>

<?php 

$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str);
?>

</body>
</html>