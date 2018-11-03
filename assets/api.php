<?php
    session_start();
    extract($_POST);

    header('Access-Control-Allow-Origin: *');
    header('Content-type:application/json');

    include "crud.php";

    $crud = new CRUD();

    // Login Call
    if(isset($_POST['loginEmail'])){
        $verifyParam = "`emailaddress` = '$loginEmail' and `password` = '".md5($loginPass)."'";
        $doLogin = $crud->selectRecord("users", $verifyParam);
        $loginStatus = decodeJSON($doLogin)[0];
        if($loginStatus == 200){
            $loginResponse = decodeJSON($doLogin)[1];
            $loginRes = $loginResponse->{'response'}[0];

            $accountType = "";

            $name = $loginRes->{'name'};
            $email = $loginRes->{'emailaddress'};
            $phone = $loginRes->{'phone'};
            $accountType = $loginRes->{'accounttype'};
            if($accountType == "Admin"){
                $accountStatus = $loginRes->{'status'};
        
                $_SESSION['logged_in'] = true;
                $_SESSION['growstack']['fullName'] = $name;
                $_SESSION['growstack']['email'] = $email;
                $_SESSION['growstack']['phone'] = $phone;
                $_SESSION['growstack']['extra']['accountType'] = $accountType;
                $_SESSION['growstack']['status'] = $accountStatus;

                $output = createArray(200, "Login Successful");
            }
            else
            {
                $output = createArray(404, "We could not fetch a dashboard for You at the moment");
            }
        }
        else
        {
            $output = createArray(404, "Username / Password Mismatch");
        }
        echo json_encode($output);
    }

    // Register Trainers
    if(isset($_POST['regName'])){
        $verifyParam = "`emailaddress` = '$regEmail'";
        $regPassword = md5($regPass);
        $regParam = "NULL, '$regName', '$regEmail', '$regPassword', '$regPhone', 'Trainer', '$regSkills', '$todaysDate', 'Active'";
        $doReg = $crud->createRecord("users", $regParam, $verifyParam);
        $regStatus = decodeJSON($doReg)[0];
        if($regStatus == 200){
            $formattedName = strstr($regName, " ", true);
            $regResponse = "Welcome to GrowStack, $formattedName";
        }
        else
        {
            $regResponse = "A $regType already exist with Email Address : $regEmail";
        }
        echo encodeJSON(createArray($regStatus, $regResponse));
    }

    // Handles Updating Trainer Info
    if(isset($_POST['editTrainerID'])){
        $updateParam = "`phone` = '$editTrainerPhone', `skills` = '$editTrainerSkill' WHERE `id` = '$editTrainerID'";
        $updateTrainersProfile = $crud->updateRecord("users", $updateParam);
        $updateStatus = decodeJSON($updateTrainersProfile)[0];
        if($updateStatus == 200){
            $updateResponse = "Profile Updated Successfully";
        }
        else
        {
            $updateResponse = "Could Not Complete Action";
        }
        echo encodeJSON(createArray($updateStatus, $updateResponse));
    }

    // Handles Deleting Trainer Info
    if(isset($_POST['delTrainer'])){
        $deleteParam = "`status` = 'Suspended' WHERE `id` = '$delTrainer'";
        $deleteTrainersProfile = $crud->updateRecord("users", $deleteParam);
        $deleteStatus = decodeJSON($deleteTrainersProfile)[0];
        if($deleteStatus == 200){
            $deleteResponse = "Profile Deleted Successfully";
        }
        else
        {
            $deleteResponse = "Could Not Complete Action";
        }
        echo encodeJSON(createArray($deleteStatus, $deleteResponse));
    }

    // Handles Add9ng
    if(isset($_POST['traineeName'])){
        $addTraineeParam = "NULL, '$traineeName', '$traineeGender', '$traineeLocation', '$traineeSkill', '$traineePhone', '$todaysDate', 'Active'";
        $addTrainee = $crud->createRecord("trainee", $addTraineeParam, "`name` = '$traineeName'");
        $addTraineeStatus = decodeJSON($addTrainee)[0];
        if($addTraineeStatus == 200){
            $addTraineeResponse = "Trainee Added Successful";
        }
        else
        {
            $addTraineeResponse = "Could not complete action";
        }
        echo encodeJSON(createArray($addTraineeStatus, $addTraineeResponse));
    }

    // Handles Updating Trainee Info
    if(isset($_POST['editTraineeID'])){
        $updateParam = "`phone` = '$editTraineePhone', `skill` = '$editTraineeSkill' WHERE `id` = '$editTraineeID'";
        $updateTrainersProfile = $crud->updateRecord("trainee", $updateParam);
        $updateStatus = decodeJSON($updateTrainersProfile)[0];
        if($updateStatus == 200){
            $updateResponse = "Profile Updated Successfully";
        }
        else
        {
            $updateResponse = "Could Not Complete Action";
        }
        echo encodeJSON(createArray($updateStatus, $updateResponse));
    }

    // Handles Deleting Trainee Info
    if(isset($_POST['delTrainee'])){
        $deleteParam = "`status` = 'Suspended' WHERE `id` = '$delTrainee'";
        $deleteTraineesProfile = $crud->updateRecord("trainee", $deleteParam);
        $deleteStatus = decodeJSON($deleteTraineesProfile)[0];
        if($deleteStatus == 200){
            $deleteResponse = "Profile Deleted Successfully";
        }
        else
        {
            $deleteResponse = "Could Not Complete Action";
        }
        echo encodeJSON(createArray($deleteStatus, $deleteResponse));
    }
?>