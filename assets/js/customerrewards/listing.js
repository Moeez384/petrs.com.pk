//Page ready event
$(function(){

    //Call function to populate customer rewards
    PopulateCustomerRewards();

}); //End page ready


//Function to populate customer rewards
function PopulateCustomerRewards()
{
    //Initialize Datatable
    $('#tbl_CustomerRewards').DataTable({

        'searching': false,
        'bSort': false,
        'bLengthChange': false,
        'serverSide': true,
        'ajax': '/rewards/customerrewardslisting',
        'columnDefs': [
            {'targets': 0, 'visible': false},
            {'targets': 1, 'width': '3%', 'className': 'text-center' },
            {'targets': 2, 'width': '15%' },
            {'targets': 3, 'width': '15%'},
            {'targets': 4, 'visible': false},
            {'targets': 5, 'width': '13%'},
            {'targets': 6, 'width': '13%'},
            {'targets': 7, 'width': '13%'},
            {'targets': 8, 'width': '13%'},
            {'targets': 9, 'className': 'text-center', 'width': '10%',
                'data': null,
                'render': function(data, type, full) {

                        return '<a id="btn-update" href="#" data-toggle="modal" data-target="#modal_reward" class="lnk-edit" data-id="' + data[0] + '" data-customer="' + data[2] + '" data-reward="' + data[3] + '" data-description="' + data[4] + '" data-points="' + data[5] + '" data-redeem-date="' + data[6] + '" data-collection-type="' + data[7] + '" data-status="' + data[8] + '" data-outlet-name="' + data[10] + '" data-address="' + data[11] + '" data-tracking-no="' + data[12] + '" data-delivery-service="' + data[13] + '"> <i class="fa fa-edit"></i> Update</a>';

                }
             },
             {'targets': 10, 'visible': false},
             {'targets': 11, 'visible': false},
             {'targets': 12, 'visible': false},
             {'targets': 13, 'visible': false}
        ]
    }); //End Datatable
}


//Bootstrap modal open event
$('#modal_reward').on('show.bs.modal', function(e){

    //Get data from attributes
    $('#UserRewardID').val( $(e.relatedTarget).data('id') );
    $('#txt-customer').val( $(e.relatedTarget).data('customer') );
    $('#txt-reward').val( $(e.relatedTarget).data('reward') );
    $('#txt-desc').val( $(e.relatedTarget).data('description') );
    $('#txt-points').val( $(e.relatedTarget).data('points') );
    $('#txt-redeem-date').val( $(e.relatedTarget).data('redeem-date') );
    $('#txt-collection-type').val( $(e.relatedTarget).data('collection-type'));

    //Call function to populate status dropdown
    PopulateStatusDropdown();

    //Check if collecion type is self collection
    if ($('#txt-collection-type').val() == 'self collection')
    {
        //Hide delivery address info
        $('#dv-address').css('display', 'none');
        $('#dv-delivery-service').css('display', 'none');
        $('#dv-tracking-no').css('display', 'none');

        //Show outlet info
        $('#dv-outlet').css('display', 'block');
        $('#txt-outlet-name').val( $(e.relatedTarget).data('outlet-name'));
    }
    else
    {
        //Hide outlet info
        $('#dv-outlet').css('display', 'none');

        //Show delivery info
        $('#dv-address').css('display', 'block');
        $('#dv-delivery-service').css('display', 'block');
        $('#dv-tracking-no').css('display', 'block');
        $('#txt-address').val( $(e.relatedTarget).data('address'));
    }

    $('#status').val( $(e.relatedTarget).data('status') );
    $('#delivery-service').val( $(e.relatedTarget).data('delivery-service') );
    $('#txt-tracking-no').val( $(e.relatedTarget).data('tracking-no') );
});


//Function to update status (and delivery info)
function UpdateRewardStatus()
{
    //Ajax call
    $.post('/Users/updateuserreward', {
        UserRewardID: $('#UserRewardID').val(),
        collection_type: $('#txt-collection-type').val(),
        delivery_service: $('#delivery-service').val(),
        status: $('#status').val(),
        tracking_no: $('#txt-tracking-no').val()
    },
    function(resp){
        location.reload();
    });
}



//Function to populate status dropdown
function PopulateStatusDropdown()
{
    //Check collection type
    if ($('#txt-collection-type').val() == 'self collection')
        status_arr = ['Approved', 'Collected'];
    else
        status_arr = ['Pending', 'Shipped'];

    
    //Empty status dropdown
    $('#status').empty();

    //Populate status dropdown
    for (i=0; i<status_arr.length; i++)
    {
        $('#status').append('<option value="' + status_arr[i] + '">' + status_arr[i] + '</option>');
    }
    
}