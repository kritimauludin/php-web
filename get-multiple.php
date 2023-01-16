<?php

// Multiple Query Parameter

// ● Query parameter di URL bisa memiliki banyak parameter
// ● Jika kita ingin mengirim banyak query parameter, kita cukup gunakan tanda & diikuti dengan query
// parameter selanjutnya

//http://localhost:8080/get-multiple.php?first_name=kriti&last_name=mauludin

$say = "Hello " . $_GET["first_name"] . " " . $_GET["last_name"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>

<body>
    <h1><?= $say ?></h1>
</body>

</html>