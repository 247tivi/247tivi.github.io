<?php
// index.php

// Cấu hình tiêu đề trang
$title = "Chào mừng đến với XEMTV";

// Nội dung chính
$content = "<h1 style='color: green;'>Trang web đã hoạt động!</h1>
<p>Hosting của bạn đã được cấu hình thành công trên <strong>xemtv.ddns.net</strong>.</p>
<p>Thời gian hiện tại: " . date('H:i:s - d/m/Y') . "</p>";

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
            padding: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?= $content ?>
</body>
</html>