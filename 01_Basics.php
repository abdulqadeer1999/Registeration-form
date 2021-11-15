<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
<div class="container">
    <h1>Hello Php</h1>

    <?php

    define('PI',3.14); // constant

      $num1 = 44; 
      $num2 =80; 
      $num3 = $num1 + $num2;
      echo $num3;

    $text = "PHP Programming";

    echo "Hello this is from $text";


    // Oerators in PHP

    // Arithmetic Operators

   echo "<br>";
    echo "The value of num1 + num2 is ";
    echo "<br>";
    echo $num1 + $num2;
    echo "<br>";

    echo "The value of num1 - num2 is ";
    echo "<br>";
    echo $num1 - $num2;
    echo "<br>";
    echo "The value of num1 * num2 is ";
    echo "<br>";
    echo $num1 * $num2;
    echo "<br>";
    echo "The value of num1 / num2 is ";
    echo "<br>";
    echo $num1 / $num2;
    echo "<br>";
    // Assignment Operators

    // $var_1 = $num1;

    // echo "The value of new varibale is";
    // echo var_1;
    // echo "<br>" 

    // Comparison Operators

    echo "The value of 1==4 is";
    echo var_dump(1==4);
    echo "<br>";
    
    echo "The value of 1!=4 is";
    echo var_dump(1!=4);
    echo "<br>";
    
    echo "The value of 1>=4 is";
    echo var_dump(1>=4);
    echo "<br>";
    
    echo "The value of 1<=4 is";
    echo var_dump(1<=4);
    echo "<br>";
    // Increment/Decrement Operators

    //  $num1++;
    //  $num1--;
    // echo ++$num1;
     echo  --$num1;
    echo "<br>";
    echo $num1;
    
    // Logical Operators

    // and (&&)
    // or (||)
    // xor 
    // not (!)

    // $myVar = (true and true);
    // $myVar = (false and true);
    // $myVar = (false and false);
    $myVar = (true or false);
    echo "<br>";
    echo var_dump($myVar);
    ?>
<?php

// Data Types in PHP

// 1.String
// 2.Integer
// 3.Float
// 4.Boolean
// 5.Array
// 6.Object

echo "<br> Data Types<br>";

$var = "This is a string";
echo var_dump($var);
echo "<br>";

$var = 67;
echo var_dump($var);
echo "<br>";

echo "<br>";

$var = 67.1;
echo var_dump($var);
echo "<br>";

echo "<br>";

$var = true;
echo var_dump($var);
echo "<br>";

echo PI; // it is constant which is used in too of the program


?>


</div>
</body>
</html>