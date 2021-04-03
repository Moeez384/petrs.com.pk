//Page ready function
$(function(){

    //Call function to populate User table
    PopulateUsersReward();
}); //End page ready


//Function to populate User table
function PopulateUsersReward()
{
    //Initialize datatable
    $('#tbl_Usersreward').DataTable({
        'searching': false,
        'targets': 'no-sort',
        "bSort": false,
        'bLengthChange': false,
    }); //End Datatable
    //Initialize datatable
    $('#tbl_Userspoint').DataTable({
        'searching': false,
        'targets': 'no-sort',
        "bSort": false,
        'bLengthChange': false,
    }); //End Datatable

    $('#tbl_UserPointsHistory').DataTable(
        {
            'searching': false,
            'bLengthChange': false,
            'bSort': false,
            'targets': 'no-sort'
        }
    )
  
}