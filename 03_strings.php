<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <?php
    
    // Strings in PHP

$str = "String";

echo "<br>";    

echo $str;
$length = strlen($str);

  echo "The length of string is ".$length ; 
  echo "<br>";

  echo "The number of words in this string are  ".str_word_count($str) ;

  echo "<br>";
  echo "The words in reverse order  ".strrev($str) ;

  echo "<br>";

  echo "The search for ng in this string is  ".strpos($str ,'ng') ;

  echo "The replace string is  ".str_replace('ng' ,'es',$str) ;


    ?>
    </div>
</body>
</html>