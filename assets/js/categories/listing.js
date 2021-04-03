
// initialize datatable
let tbl_categories = $('#tbl_Categories').DataTable();

//Page ready event
$(function(){

    //Call function to populate campaigns table
    PopulateCategories();

}); //End page ready

//Function to reset filters
function ResetFilters()
{
    //Clear filter fields
    $('.dv-filters .form-control').val('');

    //Call function to populate categories
    PopulateCategories();
}

//Function to populate categories table
function PopulateCategories()
{
    //Destroy Datatable
    tbl_categories.destroy();

    //Reinitialize Datatable
    tbl_categories = $('#tbl_Categories').DataTable({

        'searching': false,
        'bSort': false,
        'bLengthChange': false,
        'serverSide': true,
        'ajax': {
           'url': '/Categories/listing',
           'data': {
               'name': $('#txt-name').val(),
               'description': $('#txt-desc').val(),
           }
        },
        'columnDefs': [
            {'targets': 0, 'visible': false},
            {'targets': 1, 'className': 'text-center', 'width': '2.8%' },
            {'targets': 2, 'width': '12%'},
            {'targets': 3, 'width': '12%'},
            {'targets': 4, 'width': '33%'},
            {'targets': 5, 'width': '8%'},
            {'targets': 6, 'width': '8%', 'data': null, 'className': 'text-center',
                'render': function(data, type, row)
                {
                    return '<a href="/Categories/edit?id=' + row[0] + '" class="lnk-edit"> <i class="fa fa-edit"></i>Edit</a>';
                }
            }
        ]
    }); //End Datatable config
}