//Page ready event
$(function(){

    var is_valid;

    //$('#txt-date').datepicker({dateFormat: 'dd/mm/yy'});

    //Cancel click event
    $('#btn-cancel').click(function(){

        //Redirect to products listing
        window.location.href= "/Holidays";
        return false;
    }); 

    // // populate dropdown
    // $('.st').change(function() {
    //     // var state_name = $(this).val();
        
    //     // $.ajax({
    //     //     url: "Holidays/fetch_state",
    //     //     method: "POST",
    //     //     data: {stateName: state_name},
    //     //     dataType: "text",
    //     //     success: function(data) {
    //     //         $('#text-outlet').html(data);
    //     //     }

    //     // });
    // });

}); //End page ready


//Function to save data
function SaveHoliday()
{
    is_valid = true;

    //Hide error span
    $('.spn-err').css('display', 'none');
    $('input.form-control').css({'cssText' : 'border-color: #ccd6e6'});

    //Call function to validate field
    ValidateField('txt-name', 'err-name');
    ValidateField('txt-date', 'err-date');
    ValidateField('txt-state', 'err-state');

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