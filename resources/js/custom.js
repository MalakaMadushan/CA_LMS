// $(document).ready(function() {

//       $('#mdatatable').DataTable();
//       $('#book_datatable').DataTable();
//   // --------------------------------------------------
//       $("#book_aNo").change(function(){
//           var selectOption = $("#book_aNo").val();
  
//           $.ajaxSetup({
//               headers: {
//                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//               }
//           });
  
//           $.ajax({
//               method: 'POST',
//               data: { selectOption: selectOption },
//               url: '/codeview',  //**Eg. URL in route
//               success: function(response){
//                   if(response.success) {
//                       //$('#code_view_bq').html(response.codebq);
//                       $genaretedbar=response.codebq;
//                       //alert('success');
//                   }       
//               },
//           });
//       });
  
//       // ----------------------------------------------------------------------------
  
//       $("#member_id").change(function(){
//           var memberid = $("#member_id").val();
  
//           $.ajaxSetup({
//               headers: {
//                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//               }
//           });
  
//           $.ajax({
//               method: 'POST',
//               data: { memberid: memberid },
//               url: '/member_view',
//               success: function(response){
//                   if(response.success) {
//                       $('#member_Name').html(response.member_nme);
//                       //alert('success');
//                   }       
//               },
//           });
//       });
//       // -----------------------------------------------------------------------
  
//       $('#addbarrow').on("click",function(){
    
//     var bookid = $("#bookB_details").val();
//     var op ="";
//     console.log(bookid);
    
//     $.ajaxSetup({
//               headers: {
//                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//               }
//           });
  
//     $.ajax({
//       type:'post',
//       url: '/barrowbook_d',
//       data:{
//           bookid: bookid
//           //'_token':$('input[name=_token]').val(),
//          //'selectedid': sid//$('select[name =grpid]').val(),
//           },
//           success: function(data2){
         
//           for(var i=0;i<data2.length;i++){
//             op+='<tr>';
//             op+='<td>'+data2[i].id+'</td><td>'+data2[i].book_title+'</td><td>'+data2[i].authors+'</td><td><button>Delete</button></td>';
//             op+='</tr>';
//           }
//           $("#BookTable tbody").append(op);
//            //$('#bookdata').html(op);
//            //console.log("Data Correctly Processed");
//             console.log(data2);
//          },
//           error: function(){
//             console.log("Error Occurred");
//           }
//       });
  
//    });
  
  
  
//   });