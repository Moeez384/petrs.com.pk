
let tbl_users = $('#tbl_Users').DataTable();

//Page ready function
$(function(){

    //Call function to populate User table
    PopulateUsers();
}); //End page ready
//Function to reset filters
function ResetFilters()
{
    //Clear filter fields
    $('.dv-filters .form-control').val('');
  

    //Call funcion to populate rewards
    PopulateUsers();
}

//Function to populate User table
function PopulateUsers()
{
   //Destroy Datatable
    tbl_users.destroy();

    //Initialize datatable
    tbl_users= $('#tbl_Users').DataTable({

        'searching': false,
        'targets': 'no-sort',
        "bSort": false,
        'bLengthChange': false,     
        'serverSide': true,
         'ajax':{
             'url': '/Users/listing',
             'data': {
                 'name': $('#txt-name').val(),
                 'email': $('#txt-email').val(),
                 'icno': $('#txt-icno').val(),
                 'phoneno': $('#txt-phoneno').val()
             }

         },

        'language': {
            'emptyTable': 'No Users Found'
        },
         'columnDefs': [
          {
                'targets':0, 'visible': false
          },
        {
            'targets': 1,
            'className': 'text-center'
        },
         { 'targets': 2, 'width': '15%'},
         { 'targets': 3, 'width': '8%'},
        { 'targets': 4, 'width': '8%' },
        { 'tergets': 5, 'width': '8%'},
        { 'tergets': 6,'width': '10%'},
        { 'tergets': 7, 'width': '10%'},
        { 'tergets': 8, 'width': '10%'},
        { 'tergets': 9, 'width': '10%'},
        {'tergets': 10, 'width': '10%'},
        
        
         {
            'targets': 11, 'width': '11%',
            'className': 'text-center',
            'data': null,
             'render': function (data, type, row) {
                 return '<a href="/Users/view?id=' +row[0] + '" class="lnk-edit"> <i class="fa fa-eye"></i> View</a>'  //Redirect to edit
             }
        }]
    
    }); //End Datatable
  
}