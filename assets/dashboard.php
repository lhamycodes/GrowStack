<?php
    include "crud.php";
    $crud = new CRUD();

    $activeTrainers = "0";
    $activeTrainees = "0";

    $fetchTrainers = $crud->selectRecord("users", "`accounttype` = 'Trainer'");
    $trainersStatus = decodeJSON($fetchTrainers)[0];
    if($trainersStatus == 200){
        $activeTrainers = decodeJSON($fetchTrainers)[1]->{'numRows'};
    }
    $fetchTrainees = $crud->selectRecord("trainee");
    $trainersStatus = decodeJSON($fetchTrainees)[0];
    if($trainersStatus == 200){
        $activeTrainees = decodeJSON($fetchTrainees)[1]->{'numRows'};
    }
?>

<div class="col-md-3">
    <div class="card p-4">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div style="color:blue">
                <span class="h4 d-block font-weight-normal mb-2"><?php echo $activeTrainers;?></span>
                <span class="font-weight-normal">Active Trainer(s)</span>
            </div>

            <div class="h2 text-muted">
                <i class="icon icon-people" style="color:blue"></i>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="card p-4">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div style="color:red">
                <span class="h4 d-block font-weight-normal mb-2"><?php echo $activeTrainees;?></span>
                <span class="font-weight-normal">Active Trainee(s)</span>
            </div>

            <div class="h2 text-muted">
                <i class="fa fa-graduation-cap" style="color:red"></i>
            </div>
        </div>
    </div>
</div>