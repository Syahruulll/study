<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="bil1">Bilangan 1</label>
    <input id="bil1" type="text" name="n1">

    <label for="bil2">Bilangan 2 </label>
    <input id="bil2" type="text" name="n2">

    <label for="bil3">Bilangan 3</label>
    <input id="bil3" type="text" name="n3">
    
   
    <button name="submit">Submit</button>
</body>
</html>




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$n1= $_POST['n1'];
$n2= $_POST['n2'];
$n3= $_POST['n3'];

$numbers=array($n1,$n2,$n3);
sort($numbers);

echo "Ini adalah bilangan terkecil " . $numbers[0];
echo"</br>";
echo "Ini adalah bilangan menengah " . $numbers[1];
echo"</br>";
echo "Ini adalah bilangan terbesar " . $numbers[2];
}