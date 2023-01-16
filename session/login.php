<?php

session_start();

if ($_SESSION['login'] == true) {
    header('Location: /session/member.php');
    exit();
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] == "kriti" && $_POST['password'] == "kriti") {
        //sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'kriti';
        header('Location: /session/member.php');
        exit();
    } else {
        // gagal
        $error = "Login Gagal";
    }
}

?>

<html>

<body>
    <?php if ($error != "") { ?>
        <h2><?= $error ?></h2>
    <?php } ?>

    <h1>Login</h1>
    <form action="/session/login.php" method="post">
        <label for="username">Username :
            <input type="text" name="username">
        </label>
        <br>
        <label for="password">Password :
            <input type="password" name="password">
        </label>
        <br>
        <input type="submit" value="login">
    </form>
</body>

</html>