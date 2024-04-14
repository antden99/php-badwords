<?php
var_dump($_GET);

$string=$_GET["str"];
$word=$_GET["control"];

$length  =strlen($string);

$newStr='';

if (strpos($string, $word) !== false) {
    echo "La parola '$word' è contenuta nella stringa.";
    $newStr = str_replace($word,'***',$string);
} else {
    echo "La parola '$word' non è contenuta nella stringa.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div> <?php echo $string . " " . "lunghezza: ". $length ?></div>
   <div> <?php echo "parola da controllare: " . $word ?></div>
   <div> <?php echo "nuova stringa:" . $newStr?></div>
</body>
</html>