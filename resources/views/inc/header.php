<?php

use App\Core\Helper;

$helper = new Helper(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marhaba Technical Services | Expert Appliance Repair in Sharjah</title>
    <meta name="description" content="Marhaba Technical Services offers expert repair and installation for ACs, washing machines, refrigerators, and more in Dubai. Fast, reliable, and affordable." />
    <link rel="stylesheet" href="<?php echo $helper::asset('css/variables.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('css/main.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('css/header.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('css/home.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('css/footer.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('css/comming-soon.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('css/maintain.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('css/notfound.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('css/whatsapp.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('fa-6.7.2/css/all.min.css')  ?>">
    <link rel="shortcut icon" href="/images/icon.png" type="image/x-icon">
</head>

<body>

    <?php
    // css path
    // $var = str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(__DIR__.'/../../css/app.css')); 
    include 'navbar.php';
