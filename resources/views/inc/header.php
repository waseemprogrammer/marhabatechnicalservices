<?php

use App\Core\Helper;

 $helper = new Helper(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marhaba Technical Services - We take care your Home Devices runs smoothly</title>
    <link rel="stylesheet" href="<?php echo $helper::asset('css/variables.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('css/main.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('css/header.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('css/home.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('css/footer.css')  ?>">
    <link rel="stylesheet" href="<?php echo $helper::asset('fa-6.7.2/css/all.min.css')  ?>">
    </head>
<body>

<?php
// css path
// $var = str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(__DIR__.'/../../css/app.css')); 
include 'navbar.php';