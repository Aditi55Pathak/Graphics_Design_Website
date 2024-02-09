<?php 

$insert=false;
if(isset($_POST['name'])){

$server="localhost:3307";
$name="root";
$password="";

$con = mysqli_connect($server, $name, $password);

if(!$con){

    die("Connection to database failed due to " . mysqli_connect_error());

}

  //echo"Connection established to database..";

  // Change the authentication method
mysqli_query($con, "SET SESSION old_passwords=1");

$name=$_POST['name'];
$email=$_POST['email'];
$projectDetails=$_POST['projectDetails'];


$sql="INSERT INTO `web_prj` .`hire`(`name`, `email`, `projectDetails`) VALUES ('$name', '$email', '$projectDetails');";

//echo $sql;

 if($con->query($sql)== true){

 // echo"Successfully inserted";
     $insert=true;

 }
else{

   echo"ERROR : $sql <br> $con->error";

 }

 $con->close();
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Us Form</title>
    <link rel="stylesheet" href="styleHire.css">
</head>

<body>

    <div class="form-container">
        <form action="hire.php" method="post">
            <h2>Hire Us</h2>
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="projectDetails">Project Details:</label>
                <textarea id="projectDetails" name="projectDetails" rows="4" required></textarea>
            </div>

            <button name="Submit" type="submit">Submit</button>

<br><br>
<?php
  if($insert==true){

echo"<p class='submitMsg'>Thank you for hiring us. </p> ";
}
?>

<a href="index.php" class="btn btn-danger">Back to Home</a>
</body>

</html>
