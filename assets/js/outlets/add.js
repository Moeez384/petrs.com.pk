var is_valid = true;

//Page ready function
$(function(){

    //Initialize time picker
    $('.txt-time').timepicker({
        timeFormat: 'h:mm p',
        interval: 30,
        minTime: '8:00am',
        maxTime: '8:00pm',
        //defaultTime: '8',
        startTime: '8:00',
        dynamic: false,
        dropdown: true,
        scrollbar: true
     }); //End 

     
    //Cancel click event
    $('#btn-cancel').click(function(){

        window.location.href = '/Outlets';
        return false;
    });

    //Save button event
    $('#btn-save').click(function(){

        is_valid = true;

        //Hide error span
        $('.spn-err').css('display', 'none');
        $('form .form-control').css({'cssText': 'border-color : #ccd6e6'});

        //Call function to validate fields
        ValidateField('txt-name', 'err-name');
        ValidateField('txt-address', 'err-address');
        ValidateField('txt-opening', 'err-opening');
        ValidateField('txt-closing', 'err-closing');
        ValidateField('txt-country', 'err-country');
        ValidateField('txt-state', 'err-state');
        ValidateField('txt-post', 'err-post');


        //Check if fields not validated
        if (!is_valid)
            return false;

    }); //End save click event


}); //End page ready 


//Function to validate field
function ValidateField(ElementID, ErrElementID)
{
    if ($('#' + ElementID).val().trim() == '' )
    {
        //Show error msg
        $('#' + ErrElementID).css('display', 'block');
        $('#' + ElementID).css({'cssText':  'border-color: red !important' });
        is_valid = false;
    }
}