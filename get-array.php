<?php

// Query Parameter Array

// ● Secara default, query parameter berisikan data key=value, artinya 1 key akan berisi 1 value
// ● di PHP ada kemampuan untuk mengirim query parameter dengan data lebih dari satu
// ● Data tersebut akan otomatis dikonversi menjadi Array oleh PHP
// ● Caranya adalah kita wajib menambahkan tanda [] diakhir nama query parameter nya
// ● Dan kita bisa menambah query parameter dengan nama yang sama berkali-kali, misal
// ● name[]=Eko&name[]=Budi&name[]=Joko, maka secara otomatis parameter name akan berisi [Eko,
// Budi dan Joko]

//http://localhost:8080/get-array.php?numbers[]=2&numbers[]=5&numbers[]=8&numbers[]=1

$numbers = $_GET["numbers"];
$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Array</title>
</head>

<body>
    <h1><?= "Total = " . $total  ?></h1>
</body>

</html>