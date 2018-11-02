<?php
    include_once "assets/session_handler.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>GrowStack - Blank Page</title>
        <link rel="stylesheet" href="./vendor/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="./vendor/font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/toastr/toastr.min.css">         
        <link rel="icon" href="./img/logo.png">
    </head>
    <body class="sidebar-fixed header-fixed">
    <div class="page-wrapper">
        <?php include "assets/header.php"; ?>    

        <div class="main-container">
            <?php include "assets/sidebar.php"; ?>
            <div class="content">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            <strong>Title</strong>
                        </div>

                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./js/toastr/toastr.min.js"></script>
    <script src="./js/toastr/toastr.init.js"></script>    
    <script src="./vendor/popper.js/popper.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="./vendor/chart.js/chart.min.js"></script>
    <script src="./js/carbon.js"></script>
    <script src="./js/demo.js"></script>
    <script src="./js/handler.js"></script>
    </body>
</html>