
// initialize datatable
let tbl_points = $('#tbl_points').DataTable();

//Page ready event
$(function(){

    //Call function to populate campaigns table
    PopulatePoints();

}); //End page ready

//Function to reset filters
function ResetFilters()
{
    //Clear filter fields
    $('.dv-filters .form-control').val('');

    //Call function to populate categories
    PopulateHolidays();
}

//Function to populate categories table
function PopulatePoints()
{
    //Destroy Datatable
    tbl_points.destroy();

    //Reinitialize Datatable
    tbl_points = $('#tbl_points').DataTable({

        'searching': false,
        'bSort': false,
        'bLengthChange': false,
        'serverSide': true,
        'ajax': {
           'url': '/PointSystem/listing',
           'data': {
               'name': $('#txt-name').val(),
               'date': $('#txt-date').val(),
           }
        },
        'columnDefs': [
            {'targets': 0, 'visible': false},
            {'targets': 1, 'className': 'text-center', 'width': '2.8%' },
            {'targets': 2, 'width': '22%'},
            {'targets': 3, 'width': '8%'},
            {'targets': 4, 'width': '8%'},
            {'targets': 5, data: null, width: '8%', class:"text-center",
                'render': function(data, row){
                    return '<a class="lnk-edit" href="/PointSystem/edit?id=' + data[0] + '"> <i class="fa fa-edit"></i> Edit</a>'
                }
            }
        ]
    }); //End Datatable config
}