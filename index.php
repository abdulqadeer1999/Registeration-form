
<?php

$insert = false;

if(isset($_POST['name'])) {

    //set connection variables
$server= "localhost";
$username = "root";
$password = "";
$database = "trip";

//create a database
$conn = mysqli_connect($server,$username,$password,$database);

// check for connection success
if(!$conn) {
    die("connection to this database failed due to" .$mysqli_connect_error());
}

// echo "Connection Successfull";

// collect post variables 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$desc = $_POST['desc'];

$sql = "INSERT INTO trip (name, email, phone, age, gender, otherinfo)
VALUES ('$name', '$email', '$phone','$age','$gender','$desc')";


// execute the query 
 if($conn->query($sql)== true) {
    //  echo "Successfully inserted";

    // flag for successfull isertion
    $insert = true;
 } else {
     echo "ERROR: $sql <br> $conn->error";
 }

 //close databse connection
 $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <h1>Welcome to AQ US Trip Form</h1>
        <p>Enter your details to confirm your registration</p>

        
        <?php 

       if($insert == true) {
       echo '<p class="submit-msg">Thanks for Submitting this form</p>';
       }

       ?>

        

        <form action="index.php" method="post">

    <input type="text" name="name" id="name" placeholder="Enter Your Name">
    <input type="email" name="email" id="email" placeholder="Enter Your Email">
    <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone">
    <input type="text" name="age" id="age" placeholder="Enter Your Age">
    <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other information"></textarea>
    <button class="btn">Submit</button>
    
 
 
        </form>
    </div>


    <script src="index.js"></script>
    

</body>
</html>