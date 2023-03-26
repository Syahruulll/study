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

    
    <label for="bil2">Bilangan 3 </label>
    <input id="bil2" type="text" name="bilangan3">

    <button name="submit">Submit</button>


</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $bil1 = $_POST['bilangan1'];
    $bil2 = $_POST['bilangan2'];
    $bil3 = $_POST['bilangan3'];

$max = $bil1;

if ($bil2 > $max) {
    $max = $bil2;
}

if ($bil3 > $max) {
    $max = $bil3;
}

echo "Bilangan terbesar adalah $max";

}

?>
