

let tbl_rewards = $('#tbl_Rewards').DataTable();

//Page ready event
$(function(){

    //Initialize Jquery UI datepicker for validity date
    $('#txt-validitydate').datepicker({
        'dateFormat': 'dd/mm/yy'
    });

    //Call function to populate rewards table
    PopulateRewards();
}); //End page ready


//Function to reset filters
function ResetFilters()
{
    //Clear filter fields
    $('.dv-filters .form-control').val('');
    //$('.dv-filters #redeem_multiple_qty').prop('checked', false);

    //Call funcion to populate rewards
    PopulateRewards();
}

//Function to populate rewards table
function PopulateRewards()
{
    //Destroy Datatable
    tbl_rewards.destroy();

    //Initialize datatable
    tbl_rewards = $('#tbl_Rewards').DataTable({

         'searching': false,
         'bSort': false,
         'bLengthChange': false,
         'serverSide': true,
         'ajax':{
             'url': '/Rewards/listing',
             'data': {
                 'title': $('#txt-title').val(),
                 'description': $('#txt-desc').val(),
                 'validitydate': $('#txt-validitydate').val(),
                 'redeem_multiple_qty': $('#redeem_multiple_qty').val() //$('#redeem_multiple_qty').is(':checked')
             }
         },
         'columnDefs': [
             {'targets': 0, 'visible': false},
             {'targets': 1, 'className': 'text-center', 'width': '2.8%'},
             {'targets': 2, 'width': '20%'},
             {'targets': 3, 'width': '7%' },
             {'targets': 4, 'className': 'text-center', 'width': '14%'},
             {'targets': 5, 'width': '12%'},
             {'targets': 6, 'width': '12%'},
              {
            'targets': 7,
            'className': 'text-center',
            'width': '12%',
            'data': null,
             'render': function (data, type, row) {
                 return '<a href="/Rewards/edit?id=' +row[0] + '" class="lnk-edit"> <i class="fa fa-edit"></i> Edit</a>'  //Redirect to edit
               }
             }
         ]

    }); //End Datatable
}