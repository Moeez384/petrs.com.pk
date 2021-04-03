//Page ready event
$(function(){

    var is_valid;
    // var is_valid2;

    //Cancel click event
    $('#btn-cancel').click(function(){

        //Redirect to products listing
        window.location.href= "/Categories";
        return false;
    }); 

}); //End page ready


//Function to save data
function SaveSignup_1()
{
    is_valid = true;

    //Hide error span
    $('.spn-err').css('display', 'none');
    $('input.form-control').css({'cssText' : 'border-color: #ccd6e6'});

    //Call function to validate field
    ValidateField('txt-name', 'err-name');
    ValidateField('txt-fname', 'err-fname');
    ValidateField('txt-cnic', 'err-cnic');
    ValidateField('txt-email', 'err-email');
    ValidateField('txt-phone', 'err-phone');
    ValidateField('txt-pass', 'err-pass');
    ValidateField('txt-confirmpass', 'err-confirmpass');
    ValidateField('txt-cp', 'err-cp');
    ValidateField('txt-file', 'err-file');
    ValidatePassword('txt-confirmpass', 'err-confirmpass2');
    ValidateCaptcha('txt-cp', 'err-cp1');
    
    //Check if fields not validated
    if (!is_valid)
        return false;

    // if(!is_valid2)
    //     return false;
}


//Function to validate given field
function ValidateField(ElementID, ErrSpanID)
{
    //Check if given field is empty
    if ($('#' + ElementID).val().trim() == '')
    {
        //Show error
        $('#' + ErrSpanID).css('display', 'block');
        $('#' + ElementID).css({ 'cssText': 'border-color: red !important'})

        is_valid = false;
    }
}

function ValidatePassword(ElementID, ErrSpanID) {
        var pass = $('#txt-pass').val();
        var pass2 = $('#txt-confirmpass').val();
        if(pass != pass2){
            $('#' + ErrSpanID).css('display', 'block');
            $('#' + ElementID).css({ 'cssText': 'border-color: red !important'})

            is_valid = false;
        }
}

function ValidateCaptcha(ElementID, ErrSpanID) {
        var captcha = $('#captcha').text();
        var captcha_add = $('#txt-cp').val().trim();
        if(captcha != captcha_add){
            $('#' + ErrSpanID).css('display', 'block');
            $('#' + ElementID).css({ 'cssText': 'border-color: red !important'})

            is_valid = false;
        }
}