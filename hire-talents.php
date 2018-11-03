<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GrowStack - Hire Talents</title>
    <link rel="stylesheet" href="./vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="./vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/toastr/toastr.min.css">
    <!-- <link rel="icon" href="./img/logo.png"> -->
</head>
<body class="authenticate">
<div class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form id="loginForm">
                    <div class="card p-2" style="margin: auto 0;">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            <a href="index"><img src="img/growstack.png" alt=""></a>
                            <br><br>Make A  Request                             
                        </div>

                        <div id="loginMsgBox"></div>
                        <div class="card-body py-1">
                            <div class="form-group  col-md-12" style="">
                                <input type="text" name="nameOfBusiness" required placeholder="Name of business" class="form-control">
                            </div>

                            <div class="form-group col-md-6" style="float:left;">
                                <input type="text" name="firstName" required placeholder="First Name" class="form-control">
                            </div>

                            <div class="form-group col-md-6" style="float:left;">
                                <input type="text" name="lastName" required placeholder="Last Name" class="form-control">
                            </div>

                            <div class="form-group col-md-6" style="float:left;">
                                <input type="text" name="phoneNumber" required placeholder="Phone" class="form-control">
                            </div>

                            <div class="form-group col-md-6" style="float:left;">
                                <input type="email" name="emailAddress" required placeholder="Email" class="form-control">
                            </div>

                            <div class="form-group  col-md-12" style="">
                                <input type="text" name="logintext" required placeholder="Business location" class="form-control">
                            </div>

                            <div class="form-group  col-md-12" style="">
                                <textarea name="logintext" required placeholder="Give a full description of what you need" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                &nbsp;&nbsp;
                                    <button type="submit" class="btn btn-primary px-5" id="loginBtn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/popper.js/popper.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="./vendor/chart.js/chart.min.js"></script>
<script src="./js/carbon.js"></script>
<script src="./js/toastr/toastr.min.js"></script>
<script src="./js/toastr/toastr.init.js"></script>
<script src="./js/handler.js"></script>

</body>
</html>