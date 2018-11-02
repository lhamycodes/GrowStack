<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GrowStack - Signup</title>
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
                <form id="signupForm">
                    <div class="card p-2" style="margin:auto 0px;">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            <span style="color:#00ff00" >growstack</span><br>Signup                             
                        </div>

                        <div id="signupMsgBox"></div>
                        <div class="card-body py-3">
                            <div class="form-group">
                                <label class="form-control-label">Full Name : </label>
                                <input type="text" name="regName" required placeholder="e.g Chukwuma Ciroma Adekunle" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Email Address : </label>
                                <input type="email" name="regEmail" required placeholder="e.g hello@growstack.com" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Password : </label>
                                <input type="password" name="regPass" required placeholder="e.g ***********" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Phone Number : </label>
                                <input type="number" name="regPhone" required placeholder="e.g 08012345678" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Account Type : </label>
                                        <select name="regType" class="form-control">
                                            <option value="Trainer">Trainer</option>
                                        </select>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Skills : </label>
                                        <select name="regSkills" class="form-control">
                                            <?php
                                                include "assets/coreFunctions.php";
                                                for($i = 0; $i < count($skillsToLearn); $i++){
                                                    echo "<option value='$skillsToLearn[$i]'>$skillsToLearn[$i]</option>";
                                                }
                                            ?>
                                        </select>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-5" id="signupBtn">Signup</button>
                                </div>

                                <div class="col-6 text-right">
                                    <a href="forgot-password" class="btn hlink btn-link">Login</a>
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