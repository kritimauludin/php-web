<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    <!--             
    Form Post

    ● Saat kita belajar HTML, kita tahu bahasa di HTML terdapat form
    ● Form biasanya digunakan untuk mengirim data dari Client ke Server
    ● Secara default, method di form adalah GET, sehingga saat kita submit, data akan dikirim dalam
    bentuk Query Parameter yang bisa ditangkap menggunakan $_GET di PHP
    ● Namun jika kita gunakan Form dengan method POST, maka secara otomatis request dari Client ke
    Server akan beruba HTTP POST, hal ini menyebabkan data form yang dikirim akan dikirim melalui
    Body, bukan Query Parameter, dan untuk menerima datanya di PHP, kita perlu menggunnakan
    $_POST

    ------
    $_POST

    ● $_POST adalah global variable yang berisikan data array yang dikirim dari Client ke Server dalam
    bentuk form post
    ● Cara penggunaan $_POST sama seperti $_GET
    -->

    <table>
        <tr>
            <td>First Name : </td>
            <td><?= $_POST["first_name"] ?></td>
        </tr>
        <tr>
            <td>Last Name : </td>
            <td><?= $_POST["last_name"] ?></td>
        </tr>
    </table>
</body>

</html>