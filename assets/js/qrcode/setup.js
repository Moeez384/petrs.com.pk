var is_valid = true;

//Page ready event
$(function(){

    /*Initialize select2 search 
    $('#campaign').select2({
        placeholder: 'Select Campaign'
    });

    $('#product').select2({

        placeholder: 'Select Product'
    });

    $('#category').select2({
        placeholder: 'Select Category'
    });*/

}); //End page ready


//Function to trigger on generate button
function GenerateQRCode()
{
    is_valid = true;

    //Hide error message
    $('.spn-err').css('display', 'none');
    $('#txt-quantity').css('border', '1px solid #ccd6e6');
    $('.select2-selection__rendered').attr('style', 'border: 1px solid  #ccd6e6 !important');

    //Get selected CampaignID and ProductID
    let CampaignID = $('select[name=campaign]').val();
    let ProductID = $('select[name=product]').val();
    let CategoryID = $('select[name=category]').val();
    let Quantity = $('#txt-quantity').val();
    let Coin = $('#coin').val();
    let BaseCoin = $('#bcoin').val();

    //Call function to validate fields
    ValidateField('campaign', 'err-campaign');
    ValidateField('product', 'err-product');
    ValidateField('txt-quantity', 'err-quantity');

    //Check if fields validated
    if (is_valid) 
    {
        //window.location.href = '/QRCodeSetup/print?CampaignID=' + CampaignID + '&ProductID=' + ProductID + '&Quantity=' + Quantity;
        let url = '/QRCodes/print?CampaignID=' + CampaignID + '&CategoryID=' + CategoryID + '&ProductID=' + ProductID + '&Quantity=' + Quantity;
        window.open(url, '_blank');
    }
      

    //Return false
    return false;
}


//Function to validate field against given ElementID
function ValidateField(ElementID, ErrElementID)
{
    if ($('#' + ElementID).val() == '')
    {
        //Show error message
        $('#' + ErrElementID).css('display', 'block');
        $('#' + ElementID).attr('style', 'border: 1px solid red !important');

        //Check if ElementID is campaign or product
        if (ElementID.includes('campaign') !== -1 || ElementID.includes('product') !== -1 )
            $('#select2-' + ElementID + '-container').attr('style', 'border: 1px solid red !important');

        is_valid = false;
    }
}