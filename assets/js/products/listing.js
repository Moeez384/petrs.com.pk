let tbl_products = $('#tbl_Products').DataTable();

// //Page ready event
$(function(){


    //Call function to populate rewards table
    PopulateProducts();
}); //End page ready


//Function to reset filters
function ResetFilters()
{
    //Clear filter fields
    $('.dv-filters .form-control').val('');

    //Call funcion to populate rewards
    PopulateProducts();
}

//Function to populate products table
// function PopulateProducts()
// {
//     //Destroy Datatable
//     tbl_products.destroy();
//     //Initialize datatable
//     //alert($('#txt-desc').val());
//     tbl_products=$('#tbl_Products').DataTable({

//         'searching': false,
//         'bSort': false,
//         'bLengthChange': false,
//         'serverSide': true,
//            'ajax':{
//              'url': '/Products/listing',
//              'data': {
//                  'name': $('#txt-name').val(),
//                  'description': $('#txt-desc').val()
//              }
//          },
//         'columnDefs': [
//             { 'targets': 0, 'visible': false },
//             { 'targets': 1, 'className': 'text-center', 'width': '2.8%'},
//             { 'targets': 2, 'width': '12%'},
//             { 'targets': 3, 'width': '33%'},
//             { 
//                 'targets': 6,
//                 'className': 'text-center',
//                 'data': null,
//                 'render': function(data, type, row)
//                 {
//                     return '<a href="/Products/edit?id=' + row[0] + '" class="lnk-edit"> <i class="fa fa-edit"></i> Edit</a>';
//                 }
//             },
//             { 'targets': 4, 'width': '8%'},
//             { 'targets': 5, 'width': '8%'},
//             { 'targets': 6, 'width': '8%'},
//             { 'targets': 7, 'width': '8%'}
//         ]


//     }); //End datatable

// }

function PopulateProducts()
{
    //Destroy Datatable
    tbl_products.destroy();

    //Initialize datatable
    tbl_products = $('#tbl_Products').DataTable({

         'searching': false,
         'bSort': false,
         'bLengthChange': false,
         'serverSide': true,
         'ajax':{
             'url': '/Products/listing',
             'data': {
                 'name': $('#txt-name').val(),
                 'description': $('#txt-desc').val(),
                 'category': $('#txt-category').val()
             }
         },
         'columnDefs': [
             {'targets': 0, 'visible': false},
             {'targets': 1, 'className': 'text-center', 'width': '2.8%'},
             {'targets': 2, 'width': '7%'},
             {'targets': 3, 'width': '7%' },
             {'targets': 4, 'width': '20%' },
             // {'targets': 5, 'width': '7%'},
             {'targets': 5, 'width': '7%'},
             {'targets': 6, 'width': '7%'},
              {
            'targets': 7,
            'className': 'text-center',
            'width': '12%',
            'data': null,
             'render': function (data, type, row) {
                 return '<a href="/Products/edit?id=' +row[0] + '" class="lnk-edit"> <i class="fa fa-edit"></i> Edit</a>'  //Redirect to edit
               }
             }
         ]

    }); //End Datatable
}