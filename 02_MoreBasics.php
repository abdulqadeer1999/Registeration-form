<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
* {
    margin:0;
    padding:0;
    box-sizing:border-box;
}
    .container {
 max-width:80%;
 background-color:  grey;
 margin:auto;
 padding:23px;
    }
</style>
<body>
    
<div class="container">

<h1>Let's learn PHP </h1>
<p>Your Party Status is here</p>

    <?php
  
  $age =34;
  if($age>18) {
      echo 'You can go to Party';
  } else {
      echo "You can not go to party";
      echo  "<br>";
  }
  echo  "<br>";

 
// Arrays in PHP
  $languages = ["Python", "C++","JavaScript"];

//   echo count ($languages); // count tells us the number of items in an arary
//   echo "<br>";
//   echo  ($languages[0]); 

//Loops in PHP

$a = 0;

while ($a <= 10) {
    
    echo "<br> The value of a is:";
    echo $a;
    $a++;
}

echo "<br>";

//Iterating arrays in PHP using while loop
$a = 0;

while ($a < count($languages)) {
    
    echo "<br> The value of language is:";
    echo  $languages [$a];
    $a++;
}

echo "<br>";


//  do while loop
$a = 0;

do  {
    
    echo "<br> The value of a is:";
    echo $a;
    $a++;
} while ($a < 10);


//for loop


echo "<br>";

for ($a=0; $a < 10 ; $a++) { 
    
    echo "<br>The value of a from the for loop  is";
    echo $a;
}

// foreach

echo "<br>";

foreach ($languages as $value) {
    echo "<br>The value from foreach is ";
        echo $value;
}

echo "<br>";

// functions in PHP

function add() {
    echo "5";
}

add();

echo "<br>";
function number($num) {

    echo "Your number is";
    echo $num;

}

number(40);
number(48);
number(47);


echo "<br>";



?>
</div>
</body>
</html>