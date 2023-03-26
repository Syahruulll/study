
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
    <input id="bil1" type="text" name="bilangan1">

    <label for="bil2">Bilangan 2 </label>
    <input id="bil2" type="text" name="bilangan2">
    <button name="submit">Submit</button>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$bilangan1 = $_POST['bilangan1'];
$bilangan2 = $_POST['bilangan2'];



  if ($bilangan1 > $bilangan2) {
    echo "Bilangan pertama lebih besar";
  } else if ($bilangan2 > $bilangan1) {
    echo "Bilangan kedua lebih besar";
  } else {
    echo "Kedua bilangan sama";
  }
}
?>