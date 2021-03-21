<?php
session_start();

include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page.
<br><br>
<?php
$radio1=$radio2=$radio3="";
$firstname=$email="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      $password=$row["password"];
      $firstname=$row["firstname"];
      $email=$row["email"];
  $address=$row["address"];
    $dob=$row["dob"];


      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}

            if(  $row["profession"]=="Academician" )
            { $option1 ="selected"; }
            else if($row["profession"]=="student")
            { $option2="selected"; }
            else{$option3="selected";}


            if(  $row["interests"]=="sing" )
            { $checkbox1 ="checked"; }
            else if($row["interests"]=="sports")
            { $checkbox2="checked"; }
            else{$checkbox3="checked";}
  }
}
  else {
    echo "0 results";
  }



?>
<form action='' method='post'>
<br>
password : <input type='password' name='password' value="<?php echo $password; ?>" >
<br>
firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" >
<br>
email : <input type='text' name='email' value="<?php echo $email; ?>" >
<br>
address : <input type='text' name='address' value="<?php echo $address; ?>" >
<br>
Date Of Birth : <input type='date' name='dob' value="<?php echo $dob; ?>" >
<br>
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other

     <br>
    Choose a Profession:
    <select name="profession" id="profession">
      <option value="Academician">Academician  
      <option value="student"> student
      <option value="Engineer">Engineer

    </select>


         <br>
        Choose Interest:
        <br><input type="checkbox" name="interest1" value="sing" <?php echo $checkbox1; ?>>
        <label for="sing"> sing</label><br>
        <input type="checkbox" name="interest2" value="sports" <?php echo $checkbox2; ?>>
        <label for="sports"> Sports</label><br>
        <input type="checkbox" name="interest3" value="dance" <?php echo $checkbox3; ?>>
        <label for="dance"> dance</label><br><br>

     <input name='update' type='submit' value='Update'>

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>
