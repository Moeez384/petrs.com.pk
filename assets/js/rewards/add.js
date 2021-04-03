var is_valid;

//Page ready event
$(function() {

     //Initialize date picker
     $('#txt-validity').datepicker({
        'dateFormat': 'dd/mm/yy'
     });
      $('#effectivedate').datepicker({
        'dateFormat': 'dd/mm/yy'
     });

      //Points key up event
      $("#txt-points").keyup(function(event) {

            //let value = $(this).val();
            //$(this).val(value.replace(/\#/g, ""));
            let text = $(this).val();
            var len = text.length;
            if (event.keyCode < '48' || event.keyCode > '57')
                $(this).val(text.substr(0,len - 1));

            //Check if number is > 50 (max limit)
            //if ($(this).val() > 50 )
                //$(this).val(50);   

      }); //End key up 


      //Cancel click event
      $('#btn-cancel').click(function() {

            //Redirect to rewards listing
            window.location.href = '/Rewards';
            return false;
      });


      //Image click event
      $('#img-reward').click(function(){

            //Trigger image upload 
            $('#image-file').trigger('click');
      });


      //File upload change function
      $('#image-file').change(function(){

            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img-reward').attr('src', e.target.result);  //Update image source
                }
                reader.readAsDataURL(this.files[0]);
            }
      }); //End file upload

}); //End page ready


//Function to execute on save click
function SaveReward()
{
    is_valid = true;

    //Hide error span
    $('.form-control').css({'cssText': 'border-color: #ccd6e6 !important' })
    $('.spn-err').css('display', 'none');

    //Call function to validate field
    ValidateField('txt-title', 'err-title');
    ValidateField('txt-description', 'err-description');
    ValidateField('txt-points', 'err-points');
    ValidateField('txt-validity', 'err-validity');

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