<?php

if (isset($_GET['key']) && $_GET['key'] == "inikunci") {
    header('Content-Disposition: attachment; filename: "download.png"');
    header('Content-Type: image/png');
    readfile(__DIR__ . '/file/1.png');
    exit();
} else {
    echo "Invalid Key";
}
