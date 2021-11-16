
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

$sql = "INSERT INTO trip ( name, email, phone, age, gender, otherinfo)
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


// Deleting Functionality
$sql = "DELETE FROM trip WHERE id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}



// update data


// include_once 'trip';
$result = mysqli_query($conn,"SELECT * FROM trip");
if (mysqli_num_rows($result) > 0) {
?>


  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

    <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
    <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
    <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone" required>
    <input type="text" name="age" id="age" placeholder="Enter Your Age" required>
    <input type="text" name="gender" id="gender" placeholder="Enter Your Gender" required>
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other information" required></textarea>
    <button class="btn">Submit</button>
    
 
 
        </form>
        <br>
        <br>
        <table class="table">

        
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Age </th>
      <th scope="col">Gender</th>
      <th scope="col">Other Info</th>
    </tr>
    <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
  </thead>
  <tbody>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr> -->


    <tr>
      <th scope="row"><?php echo $row["id"]; ?></th>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["phone"]; ?></td>
      <td><?php echo $row["age"]; ?></td>
      <td><?php echo $row["gender"]; ?></td>
      <td><?php echo $row["otherinfo"]; ?></td>
      <td>
      <td><a href="index.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
      <td><a href="update.php?id=<?php echo $row["id"]; ?>">Update</a></td>



    </td>
    </tr>
   
    <?php
$i++;
}
?>
  </tbody>
  <?php


}
else{
    echo "No result found";
}
?>
</table>
    </div>


    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>