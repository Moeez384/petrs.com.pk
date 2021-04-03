var is_valid, tbl_Participating_Outlets = $('#tbl_Participating_Outlets').DataTable(), tbl_Outlets = $('#tbl_Outlets').DataTable();

//Page ready event
$(function() {

    //Call function to populate participating outlets table
    PopulateParticipatingOutlets();

    //Click event of campaign image
    $('#img-campaign').click(function() {
         
         //Trigger file upload click to upload image
         $('#file-img').trigger('click');
    });

    //Cancel click event
    $('input[name=btn-cancel]').click(function(){

        //Redirect to campaign listing
        window.location.href = '/Campaigns';
        return false;
    });

    //Get current date
    let date = new Date();

    //Set next day
    //date.setDate(date.getDate() + 1);

    /*Initialize datepicker
    $('.txt-date').datepicker({
        dateFormat: 'dd/mm/yy',
        minDate: date
    });*/ 

    $('#txt-end-date').datepicker({
        dateFormat: 'dd/mm/yy',
        minDate: date
    });

    //Start date select event
    $('#txt-start-date').datepicker({
        dateFormat: 'dd/mm/yy',
        minDate: date,

        onSelect: function(startdate) {
               
           $('#txt-end-date').datepicker('destroy');
           $('#txt-end-date').datepicker({
               dateFormat: 'dd/mm/yy',
               minDate: startdate
           })
        }
    });

}); //End page ready


//Function to populate participating outlets table
function PopulateParticipatingOutlets()
{
    //Destroy Datatable instance
    tbl_Participating_Outlets.destroy();

    //Initialize Datatable
      tbl_Participating_Outlets = $('#tbl_Participating_Outlets').DataTable({
          //dom: 'Bflrtip',
        'bSort': false,
        'searching': false,
        'bLengthChange': false,
        //'pageLength': 10,
        'language': {
            'emptyTable': 'No Participating Outlets'
        },
        'ajax': {
           'url': '/Campaigns/participatingoutlets',
           'type': 'POST',
           'data': {
               'CampaignID': $('#CampaignID').val()
           }
        },
        'columnDefs': [

            {'targets': 0, 'visible': false},
            {'targets': 1, 'className': 'text-center', 'width': '3.9%'},
            {'targets': 2, 'width': '24%'},
            {'targets': 4, 'className': 'text-center', 'data': null, 'width': '12%',
                'render': function(data, type, row)
                {
                    return '<a href="#" data-toggle="modal" data-target="#confirm-delete" data-id=' + row[0] + ' data-name="' + row[2] + '" class="lnk-edit"><i class="fa fa-trash-o"></i> Delete</a>';
                }
             }
        ]

    }); //End DataTable

}


//Function to save campaign data
function SaveCampaign()
{
    is_valid = true;

    //Hide error msgs
    $('.spn-err').css('display', 'none');
    $('form .form-control').attr('style', 'border-color: #ccd6e6 !important');

    //Call function to validate field
    ValidateField('txt-name', 'err-name');
    ValidateField('txt-desc', 'err-desc');
    ValidateField('txt-start-date', 'err-start-date');
    ValidateField('txt-end-date', 'err-end-date');

    return is_valid;
}


//Function to validate field against given ElementID
function ValidateField(ElementID, ErrElementID)
{
    //Check if given field is empty
    if ($('#' + ElementID).val().trim() == '')
    {
        //Show err msg
        $('#' + ErrElementID).css('display', 'block');
        $('#' + ElementID).attr('style', 'border-color: red !important' );

        is_valid = false;
    }
}

//Delete modal open event
$('#confirm-delete').on('show.bs.modal', function(e) {

    $('#CampaignOutletID').val($(e.relatedTarget).data('id') );
    $('#outlet-name').html( $(e.relatedTarget).data('name') );

});



//Add outlet modal open event
$('#modal-add-outlet').on('show.bs.modal', function(e){
    
    //Hide error div
    $('#modal-add-outlet #dv-error-outlet').css('display', 'none');

    //Call function to populate outlets
    PopulateOuttlets();
});


//Function to delete participating outlet
function DeleteOutlet()
{
    //Ajax call to delete outlet against OutletID
    $.post('/Campaigns/deleteparticipatingoutlet', {
        CampaignOutletID: $('#CampaignOutletID').val()
    },
    function(resp){

        //Call function to populate participating outlets (to refresh)
        //PopulateParticipatingOutlets();
        location.reload();

    }); //End post 

    //Close delete modal
    $('#confirm-delete').modal('toggle');
}


//Function to populate outlets
function PopulateOuttlets()
{
    //Destroy DataTable
    tbl_Outlets.destroy();

    //Initialize DataTable
    tbl_Outlets = $('#tbl_Outlets').DataTable({

        'bSort': false,
        'language': {
            'emptyTable': 'No Outlets Available'
        },
        'ajax': {
            'url': '/Campaigns/outletslisting',
            'type': 'POST',
            'data': {
                'CampaignID': $('#CampaignID').val()
            }
        },
        'columnDefs': [
            {'targets': 0, 'visible': false},
            {'targets': 1, 'width': '1%', 'className': 'select-checkbox',  },
            {'targets': 2, 'width': '16%'}
        ],
         select: {
            style:    'multi',
            selector: 'td:first-child'
        },    
    }); //End Datatable
}


//Function to add participating outlets
function AddOutlets()
{
    //Get selected rows data from datatable
    let rows = tbl_Outlets.rows( { selected: true } ).data();
    let data_arr = [];

    //Check if no row selected
    if (rows.length == 0)
    {
        //Show error msg
        $('#modal-add-outlet #dv-error-outlet').css('display', 'block');
        return false;
    }
    else
        $('#modal-add-outlet #dv-error-outlet').css('display', 'none');

    //console.log(rows[0][0]);
    //Iterate through rows to add in result array
    for (i=0; i < rows.length; i++)
        data_arr.push( {'OutletID': rows[i][0], 'outlet_name': rows[i][2], 'outlet_address': rows[i][3] } );

    $.post('/Campaigns/addparticipatingoutlets', {
        CampaignID: $('#CampaignID').val(),
        Outlets_Arr: data_arr
    },
    function(resp){
        location.reload();
    } ); //End ajax
}