<?php
    include_once "assets/session_handler.php";
    $success = false;
    $error_msg = null;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>GrowStack - Add Trainee</title>
        <link rel="stylesheet" href="./vendor/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="./vendor/font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/toastr/toastr.min.css">         
        <link rel="icon" href="./img/logo.png">
        <link rel="stylesheet" href="./css/datepicker/bootstrap-datepicker.min.css">        
    </head>
    <body class="sidebar-fixed header-fixed">
    <div class="page-wrapper">
        <?php include "assets/header.php"; ?>    

        <div class="main-container">
            <?php include "assets/sidebar.php"; ?>
            <div class="content">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header bg-light">
                                <strong>Add Trainee</strong>
                            </div>
    
                            <div id="addTraineeMsgBox"></div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="addTraineeForm">
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label class="m-b-15 f-s-12">Full Name </label>
                                                <input type="text" name="traineeName" class="form-control input-flat" required placeholder="e.g Ciroma Chukwuma Adekunle" style="height:42px;">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="m-b-15 f-s-12">Gender </label>
                                                <select name="traineeGender" class="form-control input-flat" style="height:42px;">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row pt-1">
                                            <div class="form-group col-md-5">
                                                <label class="m-b-15 f-s-12">Location Trained </label>
                                                <input type="text" name="traineeLocation" class="form-control input-flat" required placeholder="e.g Makoko" style="height:42px;">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="m-b-15 f-s-12">Skill Acquired </label>
                                                <select name="traineeSkill" class="form-control input-flat" style="height:42px;">
                                                    <?php
                                                        include "assets/coreFunctions.php";
                                                        for($i = 0; $i < count($skillsToLearn); $i++){
                                                            echo "<option value='$skillsToLearn[$i]'>$skillsToLearn[$i]</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="m-b-15 f-s-12">Phone Number </label>
                                                <input type="number" name="traineePhone" class="form-control input-flat" required placeholder="e.g 08012345678" style="height:42px;">                                            
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-flat" id="addTraineeBtn">Add Trainee</button>
                                    </form>
                                </div>
                            </div>
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
    <script src="./js/datepicker/bootstrap-datepicker.min.js"></script>
    <script src="./vendor/chart.js/chart.min.js"></script>
    <script src="./js/carbon.js"></script>
    <script src="./js/demo.js"></script>
    <script src="./js/handler.js"></script>
    <script type="text/javascript">
        var datePicker = function() {
            $('#desiredDOB').datepicker({
                'format': 'dd/mm/yyyy',
                'autoclose': true
            });
        };
        datePicker();
    </script>
    </body>
</html>