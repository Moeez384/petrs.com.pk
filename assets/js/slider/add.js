//Page ready event
$(function(){

    var is_valid;

    //Cancel click event
    $('#btn-cancel').click(function(){

        //Redirect to products listing
        window.location.href= "/ImageSlider";
        return false;
    }); 


      //Image click event
      $('#img-slider').click(function(){

            //Trigger image upload 
            $('#file-image').trigger('click');
      });

}); //End page ready


//Function to save data
function SaveSlider()
{
    is_valid = true;

    //Hide error span
    $('.spn-err').css('display', 'none');
    $('input.form-control').css({'cssText' : 'border-color: #ccd6e6'});

    //Call function to validate field
    ValidateField('txt-name', 'err-name');
    ValidateField('file-img', 'err-img');

    //Check if fields not validated
    if (!is_valid)
        return false;
}

//Function to save data
function SaveSliderr()
{
    is_valid = true;

    //Hide error span
    $('.spn-err').css('display', 'none');
    $('input.form-control').css({'cssText' : 'border-color: #ccd6e6'});

    //Call function to validate field
    ValidateField('txt-name', 'err-name');
    // ValidateField('file-img', 'err-img');

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