<?php session_start(); ?>
<?php require_once "core/base.php"; ?>
<?php require_once "core/functions.php"; ?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact App</title>
    <link rel="stylesheet" href="<?php echo $url; ?>assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $url; ?>assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/style.css">
    <link rel="shortcut icon" href="<?php echo $url; ?>assets/img/contact-book.svg">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

        *{
            font-family: 'Lato', sans-serif;
        }

        .logo{
            width: 50px;
            transition: 0.5s;
        }

        .logo:hover{
            transform: translateY(-5px);
        }

        .contact-photo{
            width: 50px;
            border:2px solid #007bff50;
            transition: 0.5s;
            cursor: pointer;
        }

        .contact-photo:hover{
            transform: scale(1.1);
        }

        .card{
            border: 3px solid #007bff50;
        }

    </style>
</head>
<body class="bg-dark">

