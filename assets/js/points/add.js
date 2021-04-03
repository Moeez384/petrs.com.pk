//Page ready event
$(function(){

    var is_valid;

    //Cancel click event
   $('input[name="btn-cancel"]').click(function(){

        window.location = '/PointSystem';
        return false;
   });

}); //End page ready


//Function to save data
function SavePoint()
{
    is_valid = true;

    //Hide error span
    $('.spn-err').css('display', 'none');
    $('input.form-control').css({'cssText' : 'border-color: #ccd6e6'});

    //Call function to validate field
    ValidateField('camp', 'err-camp');

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