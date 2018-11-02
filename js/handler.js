function postData(dataToSend, controller) {
    var nType;
    $.ajax({
        url : "assets/api.php",
        method : "POST",
        cache : false,
        beforeSend: function() {
            $('#' + controller + '').html("Processing..");
            $('#' + controller + '').prop('disabled', true);            
        },
        data : dataToSend,
        dataType : "JSON",
        success : function(data) {
            console.log(data);
    
            nType = (data.status == 200)? "success" : "error";
            nMsg = data.response;

            switch (controller) {
                case "loginBtn":
                    showAlert("loginMsgBox", nType, nMsg);
                    if(nType == "success"){
                        redirectWindow("index");
                    }
                    else
                    {
                        errorResetForm("loginForm", controller);
                    }
                    break;
                case "signupBtn":
                    showAlert("signupMsgBox", nType, nMsg);
                    if(nType == "success"){
                        redirectWindow("../index", 3000);
                    }
                    else
                    {
                        errorResetForm("signupForm", controller);
                    }
                    break;
                case "updateTrainersBtn":
                    showAlert("updTrainersMsgBox", nType, nMsg);
                    if(nType == "success"){
                        redirectWindow("", 3000);
                    }
                    else
                    {
                        errorResetForm("updateTrainersForm", controller);
                    }
                    break;
                case "deleteTrainerBtn":
                    showAlert("deleteTrainersMsgBox", nType, nMsg);
                    if(nType == "success"){
                        redirectWindow("", 3000);
                    }
                    else
                    {
                        errorResetForm("deleteTrainersForm", controller);
                    }
                    break;
                case "addTraineeBtn":
                    showAlert("addTraineeMsgBox", nType, nMsg);
                    if(nType == "success"){
                        redirectWindow("", 3000);
                    }
                    else
                    {
                        errorResetForm("addTraineeForm", controller);
                    }
                    break;
                default:
                    break;
            }
        }
    });
}

function showAlert(display, type, message){
    var alertType = (type == "success")? "primary" : "danger";
    var output = "<div class='alert alert-dismissible alert-"+alertType+"'>"+
                    ""+message+""+
                    "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"+
                        "<span aria-hidden='true'>&times;</span>"+
                    "</button>"
                "</div>";
    $('#' + display + '').html(output);
    setTimeout(() => {
        $('#' + display + '').html("");
    }, 5000);
}

function successResetForm(formID, formButton, toWrite){
    $('#' + formID + '')[0].reset();
    $('#' + formButton + '').html(toWrite);
    $('#' + formButton + '').prop('disabled', false);        
}

function errorResetForm(formID, formButton){
    $('#' + formID + '')[0].reset();
    $('input')[0].focus();
    $('#' + formButton + '').html("Try Again");
    $('#' + formButton + '').prop('disabled', false);  
}

function redirectWindow(redirectTo, delay=null){
    if(!delay){
        window.location.href = redirectTo;
    }
    else
    {
        setTimeout(() => {
            window.location.href = redirectTo
        }, delay);
    }
}

function resetDeleteButton(buttonID){
    $('#' + buttonID + '').html("Try Again");
}

// Handles Log In Activity
$('#loginForm').submit(function(event){
    event.preventDefault();
    // alert($(this).serialize());
    postData($(this).serialize(), 'loginBtn');
});

// Handles Sign Up Activity
$('#signupForm').submit(function(event){
    event.preventDefault();
    postData($(this).serialize(), "signupBtn");
});

// Handles Update Trainers Form
$('#updateTrainersForm').submit(function(event){
    event.preventDefault();
    postData($(this).serialize(), 'updateTrainersBtn');
});

// Handles Deleting Trainers Form
$('#deleteTrainersForm').submit(function(event){
    event.preventDefault();
    postData($(this).serialize(), 'deleteTrainerBtn');
});

// Handles Adding Trainee
$('#addTraineeForm').submit(function(event){
    event.preventDefault();
    postData($(this).serialize(), 'addTraineeBtn');
});

// Handles Logout
$('.logout').click(function(event){
    event.preventDefault();

    $.ajax({
        url : "assets/action.php",
        method : "POST",
        data : { logoutSecret : localStorage.userSecret },
        beforeSend : function(){
            $('#logout').prop('disabled', true);
        },
        success : function(data){
            var datastatus = data.status;
            (datastatus == 200)?notify("success", data.response, ""):notify("error", data.response, "");
            setTimeout(function(){
                (datastatus == 200)?redirectWindow("login"):redirectWindow("../index");                
            }, 6000);
        }
    });
});

// Handles Feature Coming Soon
$('.comingSoon').click(function(event){
    event.preventDefault();
    notify("warning", "Developers Mode", "This Feature is still in Development");
});