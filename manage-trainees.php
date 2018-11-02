<?php
    include_once "assets/session_handler.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>GrowStack - Manage Trainees</title>
        <link rel="stylesheet" href="./vendor/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="./vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="./css/datatable/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="./css/datatable/buttons.bootstrap.min.css">
        <link rel="stylesheet" href="./css/datatable/buttons.dataTables.min.css">
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/toastr/toastr.min.css">         
        <!-- <link rel="icon" href="./imgs/logo.png"> -->
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
                            <strong>Trainees</strong>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive" id="main-tbl">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Skill Acquired</th>
                                        <th>Location</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once "assets/crud.php";  
                                            $crud = new CRUD();  
                                            $selectParameters = "`status` = 'Active'";
                                            $fetchTrainee = $crud->selectRecord('trainee', $selectParameters);
                                            $jsonfetchTrainee = json_decode($fetchTrainee);
                                            $fetchStatus = $jsonfetchTrainee->{'status'};
                                            $fetchRes = $jsonfetchTrainee->{'response'};
                                            if($fetchStatus == 200){
                                                $fetchResponse = $fetchRes->{'response'};
                                                $appLength = count($fetchResponse);
                                                for($i = 0; $i < $appLength; $i++) {
                                                    $index = $i +1;
                                                    $traineesID = $fetchResponse[$i]->{'id'};
                                                    $traineesName = $fetchResponse[$i]->{'name'};
                                                    $traineesEmail = $fetchResponse[$i]->{'location'};
                                                    $traineesSkill = $fetchResponse[$i]->{'skill'};
                                                    $traineesPhone = $fetchResponse[$i]->{'phone'};

                                                    echo "<tr>
                                                        <td>$index</td>
                                                        <td>$traineesName</td>                                                        
                                                        <td>$traineesSkill</td>
                                                        <td><a href='mailto:$traineesEmail' class='hlink'>$traineesEmail</a></td>";
                                                        echo '<td class="text-center"><a href="" data-id="'.$traineesID.'" data-name="'.$traineesName.'" data-email="'.$traineesEmail.'" data-phone="'.$traineesPhone.'" data-skill="'.$traineesSkill.'" class="editTrainer hlink" data-toggle="modal" data-target="#editTrainerModal">Edit</a>&emsp;<a href="" data-id="'.$traineesID.'" class="deleteTrainer hlink" data-toggle="modal" data-target="#deleteTrainerModal">Delete</a></td>
                                                        </tr>';
                                                }
                                            }
                                            else
                                            {
                                            ?>
                                                <script>
                                                    alert("No Trainer Active Yet");
                                                    window.location.href = "index";
                                                </script>
                                            <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editTrainerModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary border-0">
                    <h5 class="modal-title text-white">Edit Trainer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="updateTraineesForm">
                    <input type="hidden" name="editTrainerID" id="editTrainerID">
                    <div id="updTraineesMsgBox"></div>
                    <div class="modal-body p-3">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="m-b-15 f-s-12">Trainer Name </label>
                                <input type="text" id="editTrainerName" disabled class="form-control input-flat " placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="m-b-15 f-s-12">Trainer Email </label>
                                <input type="text" id="editTrainerEmail" disabled class="form-control input-flat " placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="m-b-15 f-s-12">Phone Number </label>
                                <input type="text" name="editTrainerPhone" id="editTrainerPhone" required class="form-control input-flat " placeholder="Phone Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="m-b-15 f-s-12">SKill / Specialty </label>
                                <select name="editTrainerSkill" id="editTrainerSkill" class="form-control input-flat ">
                                    <?php
                                        for($i = 0; $i < count($skillsToLearn); $i++){
                                            echo "<option value='$skillsToLearn[$i]'>$skillsToLearn[$i]</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="updateTrainersBtn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteTrainerModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger border-0">
                    <h5 class="modal-title text-white">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="deleteTrainersForm">
                    <div id="deleteTrainersMsgBox"></div>
                    <div class="modal-body text-center py-5">
                        Are you sure you want to delete this Trainer from GrowStack ?
                        <input type="hidden" name="delTrainer" id="delTrainer">
                    </div>

                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger" id="deleteTrainerBtn">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./js/toastr/toastr.min.js"></script>
    <script src="./js/toastr/toastr.init.js"></script>    
    <script src="./vendor/popper.js/popper.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/datatable/datatables.min.js"></script>
    <script src="./js/datatable/dataTables.bootstrap.min.js"></script>
    <script src="./js/datatable/dataTables.buttons.min.js"></script>
    <script src="./js/datatable/datatables-init.js"></script>
    <script src="./vendor/chart.js/chart.min.js"></script>
    <script src="./js/carbon.js"></script>
    <script src="./js/demo.js"></script>
    <script src="./js/handler.js"></script>
    <script type="text/javascript">
        $("#main-tbl table").DataTable();

        $('.editTrainer').click(function(event){
            event.preventDefault();
            var dataID = $(this).data('id');            
            var dataName = $(this).data('name');
            var dataAuthor = $(this).data('email');
            var dataCopies = $(this).data('phone');
            var dataISBN = $(this).data('skill');            

            var bi = $('#editTrainerID');
            var bn = $('#editTrainerName');
            var ba = $('#editTrainerEmail');
            var bc = $('#editTrainerPhone');
            var bs = $('#editTrainerSkill');                  

            bi.val(dataID);
            bn.val(dataName);
            ba.val(dataAuthor);    
            bc.val(dataCopies);
            bs.val(dataISBN);                        
        });

        $('.deleteTrainer').click(function(event){
            event.preventDefault();
            var dataID = $(this).data('id');            
            var di = $('#delTrainer');
            di.val(dataID);            
        });
    </script>
    </body>
</html>