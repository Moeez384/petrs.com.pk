
//Initialize Datatable into variable
let tbl_Outlets = $('#tbl_Outlets').DataTable();

//Page ready function
$(function(){

    //Call function to populate outlets table
    PopulateOutlets();
}); //End page ready


//Function to reset filters
function ResetFilters()
{
    //Reset filter fields
    $('.dv-filters .form-control').val('');
    //$('#allow_reward_pickup').prop('checked', false);

    //Call function to populate outlets
    PopulateOutlets();
}


//Function to populate outlets table
function PopulateOutlets()
{
    //Destroy Datatable
    tbl_Outlets.destroy();

    //Reinitialize Datatable
    tbl_Outlets = $('#tbl_Outlets').DataTable({

        'searching': false,
        'targets': 'no-sort',
        "bSort": false,
        'bLengthChange': false,     
        'serverSide': true,
        'ajax': {
            'url':  "/Outlets/listing",
            //'type': 'POST',
            'data': {
                'name': $('#txt-name').val(),
                'address': $('#txt-address').val(),
                'state':$('#txt-state').val(),
                'allow_reward_pickup': $('#allow_reward_pickup').val()
            }
        },
        'language': {
            'emptyTable': 'No Outlets Found'
        },
         'columnDefs': [
          {
                'targets':0, 'visible': false
          },
        {
            'targets': 1,
            'className': 'text-center',
            'width': '5%'
        },
        {
            'targets': 2,
            'width': '15%'
        },
        {
            'targets': 3,
            'width': '20%'
        },
        {
            'targets': 4,
            'width': '12%'
        },
        {
            'targets': 5,
            'width': '12%'
        },
        { 'targets': 6, 'width': '22%', 'className': 'text-center' },
        { 'targets': 7, 'width': '10%' },
        {'targets':8, 'width': '12%' },
         {
            'targets': 9,
            'width': '10%',
            'className': 'text-center',
            'data': null,
             'render': function (data, type, row) {
                 return '<a href="/Outlets/edit?id=' +row[0] + '" class="lnk-edit"> <i class="fa fa-edit"></i> Edit</a>'  //Redirect to edit
             }
        }]
    
    }); //End Datatable
  
}