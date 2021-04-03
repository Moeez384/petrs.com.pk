
//Initialize DataTable
let tbl_Campaigns = $('#tbl_Campaigns').DataTable();

//Page ready event
$(function(){

    //Call function to populate campaigns table
    PopulateCampaigns();

}); //End page ready


//Function to reset filters
function ResetFilters()
{
    //Clear filter fields
    $('.dv-filters .form-control').val('');

    //Call function to populate campaigns
    PopulateCampaigns();
}

//Function to populate campaigns table
function PopulateCampaigns()
{
    //Destroy Datatable
    tbl_Campaigns.destroy();

    //Reinitialize Datatable
    tbl_Campaigns = $('#tbl_Campaigns').DataTable({

        'searching': false,
        'bSort': false,
        'bLengthChange': false,
        'serverSide': true,
        'ajax': {
           'url': '/Campaigns/listing',
           'data': {
               'name': $('#txt-name').val(),
               'description': $('#txt-desc').val(),
               'code': $('#txt-code').val(),
           }
        },
        'columnDefs': [
            {'targets': 0, 'visible': false},
            {'targets': 1, 'className': 'text-center', 'width': '2.8%' },
            {'targets': 2, 'width': '7%'},
            {'targets': 3, 'width': '12%'},
            {'targets': 4, 'width': '33%'},
            {'targets': 5, 'width': '8%'},
            {'targets': 6, 'width': '8%'},
            {'targets': 7, 'width': '8%', 'data': null, 'className': 'text-center',
                'render': function(data, type, row)
                {
                    return '<a href="/Campaigns/edit?id=' + row[0] + '" class="lnk-edit"> <i class="fa fa-edit"></i>Edit</a>';
                }
            }

        ]
    }); //End Datatable config
}