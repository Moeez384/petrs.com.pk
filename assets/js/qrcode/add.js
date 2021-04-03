//Page ready event
$(function(){

    var is_valid;

    //Cancel click event
    $('#btn-cancel').click(function()
    {
        //Redirect to base coins listing
        window.location = '/QRCodes/basecoins';
    
        return false;
    }); 

    //Points key up event
    $('#txt-points').keyup(function(e) {

        //Get inout character
        let value = $(this).val();

        //Check if ascii code between 49 and 57
        if (e.keyCode < '48' || e.keyCode > 57)
            $(this).val( value.substring(0, value.length-1 ) );
    });

}); //End page ready


//Function to save data
function SaveSetup()
{
    is_valid = true;

    //Hide error span
    $('.spn-err').css('display', 'none');
    $('input.form-control').css({'cssText' : 'border-color: #ccd6e6'});

    //Call function to validate field
    ValidateField('txt-camp', 'err-camp');
    ValidateField('txt-bcoin', 'err-bcoin');
    ValidateField('txt-cat', 'err-cat');
    ValidateField('txt-coin', 'err-coin');
    ValidateField('txt-prod', 'err-prod');

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