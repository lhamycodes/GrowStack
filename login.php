<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GrowStack - Login</title>
    <link rel="stylesheet" href="./vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="./vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/toastr/toastr.min.css">
    <!-- <link rel="icon" href="./img/logo.png"> -->
</head>
<body>
<div class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form id="loginForm">
                    <div class="card p-4">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            <span style="color:#00ff00" >growstack</span><br>Login                             
                        </div>

                        <div id="loginMsgBox"></div>
                        <div class="card-body py-3">
                            <div class="form-group">
                                <label class="form-control-label">Email Address : </label>
                                <input type="email" name="loginEmail" required placeholder="e.g hello@growstack.com" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Password : </label>
                                <input type="password" name="loginPass" required placeholder="e.g ***********" class="form-control">
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-5" id="loginBtn">Login</button>
                                </div>

                                <div class="col-6 text-right">
                                    <a href="forgot-password" class="btn hlink btn-link">Forgot password?</a>
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