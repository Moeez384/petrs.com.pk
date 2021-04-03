
// initialize datatable
let tbl_QRsetup = $('#tbl_QRsetup').DataTable();

//Page ready event
$(function(){

    //Call function to populate campaigns table
    PopulateQRSetup();

}); //End page ready

//Function to reset filters
function ResetFilters()
{
    //Clear filter fields
    $('.dv-filters .form-control').val('');

    //Call function to populate categories
    PopulateQRSetup();
}

//Function to populate categories table
function PopulateQRSetup()
{
    //Destroy Datatable
    tbl_QRsetup.destroy();

    //Reinitialize Datatable
    tbl_QRsetup = $('#tbl_QRsetup').DataTable({

        'searching': false,
        'bSort': false,
        'bLengthChange': false,
        'serverSide': true,
        'ajax': {
           'url': '/QRCodes/QRSetupListing',
           'data': {
               'campname': $('#txt-name').val(),
               'prname': $('#pr-name').val(),
               'catname': $('#cat-name').val()
           }
        },
        'columnDefs': [
            {'targets': 0, 'visible': false},
            {'targets': 1, 'className': 'text-center', 'width': '2.8%' },
            {'targets': 2, 'width': '18%'},
            {'targets': 3, 'width': '18%'},
            {'targets': 4, 'width': '18%'},
            {'targets': 5, 'width': '8%'},
            {'targets': 6, 'width': '8%'},
            {'targets': 7, 'width': '8%'},
            {'targets': 8, data: null, 'class': 'text-center', 'width': '12%',
              'render': function(row, data){
                    return '<a href="/QRCodes/edit?id=' +row[0]+ '" class="lnk-edit"><i class="fa fa-edit"></i> Edit</a>';
              }  
            }
        ]
    }); //End Datatable config
}