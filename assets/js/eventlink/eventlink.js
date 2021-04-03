var is_valid;

//Page ready event
$(function() {

});
//end of page ready
//Function to execute on save click
function SaveReward()
{
    is_valid = true;

    //Hide error span
    $('.form-control').css({'cssText': 'border-color: #ccd6e6 !important' })
    $('.spn-err').css('display', 'none');

    //Call function to validate field
    ValidateField('txt-link', 'err-link');
   
    //Check if fields not validated
    if (!is_valid)
        return false;   
}


//Function to validate field against given ElementID
function ValidateField(ElementID, ErrSpanID)
{
    //Check if given element value is empty
    if ($('#' + ElementID).val().trim() == '')
    {
        //Show error span
        $('#' + ElementID).css({ 'cssText': 'border-color: red !important' });
        $('#' + ErrSpanID).css('display', 'block');

        is_valid = false;
    }

}