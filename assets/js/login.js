var is_valid = true;

//Page ready event
$(function(){

}); //End page ready


//Function to login 
function Login()
{
    is_valid = true;

    //Hide error spans and reset elements
    $('.alert.alert-danger').css('display', 'none');
    $('.spn-err').css('display', 'none');
    $('input.form-control').css('border-bottom', '1px solid #d2d6de');

    //Call function to validate fields
    ValidateField('txt-email', 'err-email');
    ValidateField('txt-password', 'err-password');

    //Check if fields not validated
    if (!is_valid)
        return false; //Return

    //Ajax call
    $.post('/welcome/login',
    {
        email: $('#txt-email').val(),
        password: $('#txt-password').val()
    },
    function(response){

        //Check if response status is success
        if (response.status == 'Success'){
            
            //Check if redirect url is set
            if ($('#redirect_url').val() != '')
                window.location = $('#redirect_url').val();
            else
                window.location.href = response.redirect;  //Redirect to dashboard
            
        }            
        else
            $('.alert.alert-danger').css('display', 'block');  //Show invalid credentials message

    }, 'JSON'); //End Ajax

    //Redirect to dashboard 
    //window.location.href = '/dashboard';
    return false;
}


//Function to validate field against given ElementID
function ValidateField(ElementID, ErrSpnID)
{
    //Check if given element is empty
    if ($('#' + ElementID).val().trim() == '')
    {
        //Show error span
        $('#' + ElementID).css('border-bottom', '1px solid red');
        $('#' + ErrSpnID).css('display', 'block');
        is_valid = false;
    }
}