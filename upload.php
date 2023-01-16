<?php
/*
Upload File
● Selain mengirim data berupa Query Param dan Form Post, kadang kita juga butuh melakukan
upload file dari client ke server
● Dan PHP Web juga menerima upload file

PHP Upload File
● Di PHP, untuk file yang di upload dari server, kita bisa menangkapnya dari global variable $_FILES
● Setiap ada file yang di upload, secara otomatis $_FILES akan berisi informasi seputar file yang di
upload
● https://www.php.net/manual/en/features.file-upload.post-method.php
● Saat di upload ke server, file akan secara otomatis disimpan di temporary folder di server, dari situ
kita bisa pindahkan ke lokasi yang kita inginkan

Memindahkan File Upload
● Secara default, file upload akan disimpan di temporary folder
● Kadang kita ingin memindahkan file tersebut ke lokasi dimana kita bisa mengakses file tersebut
● Untuk melakukan hal tersebut, PHP memiliki banyak function untuk memanipulasi file dan folder
● https://www.php.net/manual/en/ref.filesystem.php
*/


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $file_name = $_FILES['upload_file']['name'];
    $file_type = $_FILES['upload_file']['type'];
    $file_size = $_FILES['upload_file']['size'];
    $file_tmp_name = $_FILES['upload_file']['tmp_name'];
    $file_error = $_FILES['upload_file']['error'];

    move_uploaded_file($file_tmp_name, __DIR__ . '/file/' . $file_name);
}
?>

<html>

<body>
    <?php if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
        <h1>Upload File</h1>
        <table>
            <tr>
                <td>File Name</td>
                <td><?= $file_name ?></td>
            </tr>
            <tr>
                <td>File Type</td>
                <td><?= $file_type ?></td>
            </tr>
            <tr>
                <td>File Size</td>
                <td><?= $file_size ?></td>
            </tr>
            <tr>
                <td>File Temp Name</td>
                <td><?= $file_tmp_name ?></td>
            </tr>
            <tr>
                <td>File Error</td>
                <td><? $file_error ?></td>
            </tr>
        </table>
    <?php } ?>
    <h1>Form Upload</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="upload file">File :
            <input type="file" name="upload_file" id="upload_file">
        </label>
        <input type="submit" value="Upload">
    </form>
</body>

</html>