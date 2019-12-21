<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="_token" content="{{ csrf_token() }}" /> 

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    

    <!-- Styles -->
    <link href="{{ asset('app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/_all-skins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/AdminLTE.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/morris.js/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Buda:300&display=swap" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">

    

    <!-- Font Awesome -->
    <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Ionicons -->
    <link href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <!-- Theme style -->
    <link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

</head>
<body class="hold-transition skin-blue sidebar-mini wysihtml5-supported" style="height: auto; min-height: 100%;">
<section>
    <div class="wrapper" style="height: auto; min-height: 100%;">
        <div>
            @include('partials.leftPanel')
        </div>
        <div>
            @include('partials.headerBar')
        </div>
        <div>
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
        <div>
            @include('partials.footer')
        </div>
    </div>
</section>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<script src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('bower_components/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>

<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('js/custom.js') }}"></script>

<!------- member function---delete modal------------------------ -->




<!-- member function--------datatable&modal------------------------ -->
<script>
    $('#Modal_delete').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget) 

  var m_id = button.data('memberid') 
  var m_name = button.data('membername')
  var modal = $(this)

 // modal.find('.modal-body #memid').val(m_id);
  document.getElementById("memid").value= m_id; 
  document.getElementById("memname").innerHTML = m_name;
})

// <!--end  member function--------datatable&modal------------------------ -->


// start book delete function

$('#book_delete').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget) 

  var b_id = button.data('bookid') 
  var b_title = button.data('book_title')
//   var modal = $(this)

 
  document.getElementById("book_id").value= b_id; 
  document.getElementById("bookname").innerHTML = b_title;
})

// end book delete function
</script>
<script>

  $(document).ready(function() {
    

    $('#mdatatable').DataTable();
    $('#book_datatable').DataTable();

    document.getElementById("member_id").focus();
// -------------------------date------------------
var today = new Date();
var tomorrow = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = mm+'/'+dd+'/'+yyyy;
$('#issuedte').attr('value', today);
// -----------------------------------------------

  var inputm = document.getElementById("member_id");
  inputm.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
  event.preventDefault();
  document.getElementById("addbarrowmember").click();
  $('#member_id').val('');
  document.getElementById("bookB_details").focus();
}
   $("#BookTable tbody").empty();

  });
    var input = document.getElementById("bookB_details");
    input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("addbarrow").click();
    $('#bookB_details').val('');
    document.getElementById("bookB_details").focus();
  }
  });
});

   // ----------------------------------------------------------------------------

    $("#member_id").change(function(){
        var memberid = $("#member_id").val();
        $('#bookB_details').val('');
        $('#member_Name_id').val('');
        $('#member_Name').html('');
        $('#issue_error').html('');
        $('#issue_success').html('');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'POST',
            data: { memberid: memberid },
            url: '/member_view',
            success: function(response){
    
                var mem_detail=response.member_id+" - "+response.member_nme+" ("+response.member_adds+")";
                $('#member_Name').html(mem_detail);
                $('#member_Name_id').val(response.member_id);
                $('#member_id').val('');
            
            },
            error: function(response){
            $('#issue_error').html('Member not found !');
            $('#member_id').val('');
            document.getElementById("member_id").focus();
            }
        });
    });
    // ---------------------------------------------------

// ------------------------------------------------------
$('#addbarrow').on("click",function(){
        var bookid = $("#bookB_details").val();
        var member_id1 = $("#member_Name_id").val();
        var op ="";
        var bexsist=false;
        $('#issue_error').html('');
        $('#issue_success').html('');
    
          if($('#member_Name_id').val())
          {
            var rowCount = $('#BookTable tr').length;
            if(rowCount<4) //3+1 must get by settings
            {
              var oTable = document.getElementById('BookTable');
              var rowLength = oTable.rows.length;
              
               for (j = 1; j < rowLength; j++)
               {
                var oCells = oTable.rows.item(j).cells;
                var cellVal = oCells.item(1).innerHTML;
                  if(bookid.toUpperCase()==cellVal.toUpperCase())
                  { 
                    bexsist=true;   
                  }
               }

               if(bexsist==false)
               {
                   // -------------------------------------------------------
                   $.ajaxSetup({
                        headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          }
                        });

                        $.ajax({
                        type:'post',
                        url: '/barrowbook_d',
                        data:{
                          bookid: bookid,
                          member_id1: member_id1
                          },
                          success: function(data2){
                      
                          for(var i=0;i<data2.length;i++){
                          op+='<tr>';
                          op+='<td>'+data2[i].id+'</td><td>'+data2[i].accessionNo+'</td><td>'+data2[i].book_title+'</td><td>'+data2[i].authors+'</td><td><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>';
                          op+='</tr>';
                          }
                          $("#BookTable tbody").append(op);
                          console.log(data2);
                      },
                          error: function(){
                              
                          console.log("Error Occurred");
                          }
                      });
// -------------------------------------------------------------
               }
               else{$('#issue_error').html('Book Allready Exsists');}
    
              }
              else{$('#issue_error').html('* Maximam Books allowd');}
            }
             else{$('#issue_error').html('* Select Member First');
             document.getElementById("member_id").focus();
           }


    });
    // -----------------------------------------------------

    $('#issue_book').on("click",function(){

    var oTable = document.getElementById('BookTable');
    var rowLength = oTable.rows.length;
    var mem_id = $("#member_Name_id").val();
    var dteissue = $("#issuedte").val();
    //var dteissue =new Date().toLocaleDateString();
    for (j = 1; j < rowLength; j++)
    {
        var oCells = oTable.rows.item(j).cells;
        var Bookid = oCells.item(0).innerHTML;
        // -----------------------
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'POST',
            data:{
                Bookid: Bookid,
                mem_id: mem_id,
                dteissue: dteissue
               
                 },
            url: '/issue_save',
            success: function(response){
            $('#issue_success').html("Books Issue Sucessfully");
            $('#bookB_details').val('');
            $('#member_Name_id').val('');
            $('#member_Name').html('');
            $('#issue_error').html('');
            $("#BookTable tbody").empty();
            document.getElementById("member_id").focus();


            },
            error: function(response){
            $('#issue_error').html('Books Issued Fali!');
            }
        });
        // ----------------------


    }

    });
  
</script>
<!-- ------------------------------------------------- -->

<!------- function---add modal------------------------ -->
<script>
   
function add_by_modal(rout) {

$('#addModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var opp = button.data('opp_name') 
  var modal = $(this)
 
  document.getElementById("opp_title").innerHTML = 'Add New '+ opp;
  document.getElementById("opp_lbl").innerHTML = opp;
  document.getElementById("modalform").action = rout;
})
}

</script>


<!-- ---------------------alert Auto Close----------------------- -->
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 1000);

</script>
<!-- ---------------------------/------------------------------- -->

</body>
</html>
