<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply as a Job seeker</title>
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
            <div class="col-md-6">
                <form id="signupForm">
                    <div class="card p-2" style="margin:auto 0px;">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            <a href="index.php"><img src="img/growstack.png" alt=""></a>
                            <!-- <span style="color:#00ff00" >growstack</span> -->
                            <br>
                            <br>
                            Apply as a Job seeker                             
                        </div>

                        <div id="signupMsgBox"></div>
                        <div class="card-body py-3">
                            <div class="form-group">
                                <input type="text" name="regName" required placeholder="Full Name" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="email" name="regEmail" required placeholder="Email Address" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="password" name="regPass" required placeholder="Password" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="number" name="regPhone" required placeholder="Phone Number" class="form-control">
                            </div>

                            <!-- <div class="row"> -->
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="regType" class="form-control">
                                            <option disabled >Account Type</option>
                                            <option value="Trainer">Trainer</option>
                                        </select>
                                    </div> 
                                </div> -->
                                <!-- <div class="col-md-6"> -->
                                    <div class="form-group">
                                        <select name="regSkills" class="form-control">
                                            <option disabled selected>--Select job type--</option>
                                            <option value="Ushering">Ushering</option>
                                            <option value="Cashier">Cashier</option>
                                            <option value="Cleaning">Cleaning</option>
                                            <option value="Sales Representative">Sales Representative</option>
                                        </select>
                                    </div> 
                                <!-- </div> -->
                            <!-- </div> -->
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-5" id="signupBtn">Signup</button>
                                </div>

                                <div class="col-6 text-right">
                                    <a href="login.php" class="btn hlink btn-link">Login</a>
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