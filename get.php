<?php

// Query Parameter

// ● Saat mengakses Web, kita akan menggunakan URL, dan di dalam URL, terdapat bagian yang
// bernama query parameter
// ● Query parameter adalah informasi tambahan yang bisa kita kirimkan dari client ke server secara
// dinamis
// ● Untuk menambahkan query parameter, cukup gunakan ? diikuti dengan key=value pada URL
// ● Di PHP, semua query parameter akan secara otomatis disimpan dalam global variable bernama
// $_GET

// $_GET

// ● $_GET adalah global variable berupa array yang berisikan key sesuai dengan nama query
// parameter, dan value sesuai dengan value query parameter
// ● Jika kita mengirim query parameter name=Eko, artinya akan ada key name di dalam $_GET yang
// bernilai Eko
// ● Perlu diperhatikan, query parameter adalah data yang dikirim oleh client, jadi pastikan sebelum
// menggunakannya kita harus cek apakah datanya ada atau tidak, karena bisa jadi datanya tidak
// dikirim oleh client

$say = "Hello " . htmlspecialchars($_GET["name"]);
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