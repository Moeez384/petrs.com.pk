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
function add_project()
{
    is_valid = true;

    //Hide error span
    // $('.spn-err').css('display', 'none');
    // $('input.form-control').css({'cssText' : 'border-color: #ccd6e6'});

    //Call function to validate field
    ValidateField('txt-name', 'err-name');
    ValidateField('txt-date', 'err-date');
    ValidateField('txt-status', 'err-status');
    ValidateField('txt-file', 'err-file');
    ValidateField('txt-ad', 'err-ad');
    ValidateField('txt-center', 'err-center');
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
