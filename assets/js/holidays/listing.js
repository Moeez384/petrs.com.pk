
// initialize datatable
let tbl_holidays = $('#tbl_Holidays').DataTable();

//Page ready event
$(function(){

    //Call function to populate campaigns table
    PopulateHolidays();

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
function PopulateHolidays()
{
    //Destroy Datatable
    tbl_holidays.destroy();

    //Reinitialize Datatable
    tbl_holidays = $('#tbl_Holidays').DataTable({

        'searching': false,
        'bSort': false,
        'bLengthChange': false,
        'serverSide': true,
        'ajax': {
           'url': '/Holidays/listing',
           'data': {
               'name': $('#txt-name').val(),
               'date': $('#txt-date').val(),
               'state': $('#txt-state').val()
           }
        },
        'columnDefs': [
            {'targets': 0, 'visible': false},
            {'targets': 1, 'className': 'text-center', 'width': '2.8%' },
            {'targets': 2, 'width': '22%'},
            {'targets': 3, 'width': '8%'},
            {'targets': 4, 'width': '18%'},
            {'targets': 5, 'width': '18%'},
            {'targets': 6, 'width': '8%', 'data': null, 'className': 'text-center',
                'render': function(data, type, row)
                {
                    return '<a href="/Holidays/edit?id=' + row[0] + '" class="lnk-edit"> <i class="fa fa-edit"></i>Edit</a>';
                }
            }
        ]
    }); //End Datatable config
}