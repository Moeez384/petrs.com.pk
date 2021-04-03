//Initialize Datatable
let tbl_QRCodes = $('#tbl_QRCodes').DataTable();

//Jquery page ready event
$(function() {

    //Call function to populate QRCodes table
    PopulateQRCodes();

}); //End page ready event


//Function to populate QRCodes table
function PopulateQRCodes()
{   
    //Destroy Datatable
    tbl_QRCodes.destroy();

    //Re-initialize DataTable
   tbl_QRCodes = $('#tbl_QRCodes').DataTable({

        'searching': false,
        'bSort': false,
        'bLengthChange': false,
        'language': {
            'emptyTable': 'No records available'
        },
        'serverSide': true,
        'ajax': {
            'url': '/QRCodes/listing',
            'type': 'GET',
            'data': {
                'SerialNo': $('#txt-serialno').val(),
                'CampaignID': $('#campaign').val(),
                'ProductID': $('#product').val(),
                'UserID': $('#customer').val(),
                'Status': $('#status').val()
            }
        },
        'columnDefs': [
            {'targets': 0, 'className': 'text-center', 'width': '3.8%'},
            {'targets': 9, 'visible': false},
            {'targets': 7, 'className': 'text-center', 'data': null,
                'render': function(data, type, full, meta) {
                    return '<a href="/Users/view?id=' + data[8] + '" target="blank" class="lnk-user">' + data[6] + '</a>'
                }
            },
            {'targets': 8, 'className': 'text-center', 'width': '14%',
              'data': null,
              'render': function(data, type, full, meta)
              {
                  //Get status
                  status = data[6];

                  //Check if status is printed
                  if (status == 'Printed')
                    return '<a href="/QRCodes/reprint?SerialNo=' + data[1] + '" target="_blank" class="lnk-edit">Reprint</a>';
                   else
                    return '';

              }
            }
        ] //End column defs

    }); //End Datatable

}


//Function to reset filters
function ResetFilters()
{
    //Clear form fields
    $('.dv-filters .form-control').val('');

    //Call function to populate qr codes
    PopulateQRCodes();
}