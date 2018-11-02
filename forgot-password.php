<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GrowStack - Forgot Password</title>
    <link rel="stylesheet" href="./vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="./vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/toastr/toastr.min.css">
    <link rel="icon" href="./img/logo.png">

</head>
<body>
<div class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form id="forgot-password">
                    <div class="card p-4">
                        <div class="card-header text-center h4 font-weight-light">
                            <img height=50 src='img/logo.png'><br>                                                        
                            Forgot Password
                        </div>

                        <div class="card-body py-3">
                            <div class="form-group">
                                <label class="form-control-label">Phone Number : </label>
                                <input type="number" name="resetPortalPassword" required class="form-control" placeholder="Your portal Phone Number">
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">

                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary" id="forgotPassword">Reset Password</button>
                                </div>
                                <div class="col-6 text-right">
                                    <a href='index' class="btn hlink btn-link">Login?</a>
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