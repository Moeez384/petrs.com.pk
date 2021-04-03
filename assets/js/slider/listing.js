
// initialize datatable
let tbl_slider = $('#tbl_Slider').DataTable();

//Page ready event
$(function(){

    //Call function to populate campaigns table
    PopulateSlider();

}); //End page ready

//Function to reset filters
function ResetFilters()
{
    //Clear filter fields
    $('.dv-filters .form-control').val('');

    //Call function to populate categories
    PopulatePromotions();
}

//Function to populate categories table
function PopulateSlider()
{
    //Destroy Datatable
    tbl_slider.destroy();

    //Reinitialize Datatable
    tbl_slider = $('#tbl_Slider').DataTable({

        'searching': false,
        'bSort': false,
        'bLengthChange': false,
        'serverSide': true,
        'ajax': {
           'url': '/ImageSlider/listing',
           'data': {
               'name': $('#txt-name').val(),
           }
        },
        'columnDefs': [
            {'targets': 0, 'visible': false},
            {'targets': 1, 'className': 'text-center', 'width': '2.8%' },
            {'targets': 2, 'width': '18%'},
            {'targets': 3, 'width': '18%'},
            {'targets': 4, 'width': '18%'},
            {'targets': 5, 'width': '8%'},
            {
            'targets': 6,
            'className': 'text-center',
            'width': '12%',
            'data': null,
             'render': function (data, type, row) {
                 return '<a href="/ImageSlider/edit?id=' +row[0] + '" class="lnk-edit"> <i class="fa fa-edit"></i> Edit</a>'  //Redirect to edit
               }
             }
        ]
    }); //End Datatable config
}