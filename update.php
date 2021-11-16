<?php


   $servername='localhost';
   $username='root';
   $password='';
   $database = "trip";
   $conn=mysqli_connect($servername,$username,$password,$database);
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }



$database = "trip";
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE trip set id='" .$id=$_POST['id']  . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "' ,age='" . $_POST['age'] . "',age='" . $_POST['age']. "',otherinfo='" .$_POST['desc']. "' WHERE id='" .  $id=$_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM trip WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Data</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="./index.php">Employee List</a>
</div>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"   value="<?php echo $row['id']; ?>">
<br>
<input type="text" name="name" id="name" placeholder="Enter Your Name" value="<?php echo $row['name']; ?>" required>
    <input type="email" name="email" id="email" placeholder="Enter Your Email" value="<?php echo $row['email']; ?>" required>
    <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone" value="<?php echo $row['phone']; ?>" required>
    <input type="text" name="age" id="age" placeholder="Enter Your Age" value="<?php echo $row['age']; ?>" required>
    <input type="text" name="gender" id="gender" placeholder="Enter Your Gender" value="<?php echo $row['gender']; ?>" required>
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other information" value="<?php echo $row['desc']; ?>" required></textarea>
    <button class="btn">Submit</button>

</form>
</body>
</html>