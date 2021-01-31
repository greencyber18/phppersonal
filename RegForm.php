<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Page </title>
</head>
<body>
<h1> REGISTRATION </h1>

<form>
<table>
<tr><td> Name: </td>
<td><input type="text" name="firstname"></td></tr>


<tr><td> Email: </td>
<td><input type="email" name="email"></td></tr>


<tr><td> Username: </td>
<td><input type="text" name="username"></td></tr>



<tr><td> Password: </td>
<td><input type="password" name="password"></td></tr>


<tr><td> Confirm Password: </td>
<td><input type="password" name="cnpassword"></td></tr>
</table>
<br>
<p1><strong>Gender</strong></p1>
<br>
<input type="radio" id="male" name="gender">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" >
<label for="female">Female</label>
<input type="radio" id="other" name="gender" >
<label for="other">Other</label> 
<br>
<br>
<p1><strong>Date Of Birth </strong></p1>
<br>
<input type="date" id="birthday" name="birthday">
<br>
<br>
<button type="submit" form="form">Submit</button> 
<input type="reset"> 

</form>

   
</body>
</html>