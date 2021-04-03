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
function SaveSignup_3()
{
    is_valid = true;

    //Hide error span
    $('.spn-err').css('display', 'none');
    $('input.form-control').css({'cssText' : 'border-color: #ccd6e6'});

    //Call function to validate field
    ValidateField('txt-degree', 'err-degree');
    ValidateField('txt-ins', 'err-ins');
    ValidateField('txt-degreetype', 'err-degreetype');
    ValidateField('txt-board', 'err-board');
    ValidateField('txt-passdate', 'err-passdate');
    ValidateField('txt-examsystem', 'err-examsystem');
    
    //Check if fields not validated
    if (!is_valid)
        return false;

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
