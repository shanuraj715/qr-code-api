<?php

require_once './parseDown.php';
include_once('./themeToggler.php');
$contents = file_get_contents('./README.md');
$Parsedown = new Parsedown();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator - Usage Documentation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.techfacts007.in/prism/prism.css" />
    <link rel="stylesheet" href="./css/markdownStyle.css" />
    <link rel="stylesheet" href="https://internal.shanuthewebdev.in/markdownStyle.css" />
    <meta name="description" content="A Free API for everyone to generate QR Codes with many more options." />
    <meta name="keywords" content="QR Code, QR Code online, QR Code creator, Online QR Code generator, Online QR Maker, Create QR Online" />
    <meta property="og:image" content="https://qrcode.shanuthewebdev.in/images/default.png" />
    <meta property="og:description" content="A Free API for everyone to generate QR Codes with many more options." />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://qrcode.shanuthewebdev.in" />
    <meta property="og:title" content="QR Code Generator - Usage Documentation" />
</head>

<body class="theme-light">
    <?php echo $Parsedown->text($contents); ?>
    <?php include './buyMeACoffee.php'; ?>
    <?php renderThemeToggler(); ?>
    <script src="https://cdn.techfacts007.in/prism/prism.js"></script>
</body>

</html>