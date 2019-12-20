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
// --------------------------------------------------
    $("#book_aNo").change(function(){
        var selectOption = $("#book_aNo").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'POST',
            data: { selectOption: selectOption },
            url: '/codeview',  //**Eg. URL in route
            success: function(response){
                if(response.success) {
                    //$('#code_view_bq').html(response.codebq);
                    $genaretedbar=response.codebq;
                    //alert('success');
                }       
            },
        });
    });

    // ----------------------------------------------------------------------------

    $("#member_id").change(function(){
        var memberid = $("#member_id").val();
        $('#member_Name_id').val('');

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
                if(response.success) {
                    $('#member_Name').html(response.member_nme);
                    $('#member_Name_id').val(response.member_id);
                    //alert('success');
                }       
            },
        });
    });
    // -----------------------------------------------------------------------

   
    $('#addbarrow').on("click",function(){
  
  if($('#member_Name_id').val())
  {
        var bookid = $("#bookB_details").val();
        var op ="";
        console.log(bookid);
      
      $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

      $.ajax({
          type:'post',
          url: '/barrowbook_d',
          data:{
              bookid: bookid
              //'_token':$('input[name=_token]').val(),
          //'selectedid': sid//$('select[name =grpid]').val(),
              },
              success: function(data2){
          
              for(var i=0;i<data2.length;i++){
              op+='<tr>';
              op+='<td>'+data2[i].id+'</td><td>'+data2[i].accessionNo+'</td><td>'+data2[i].book_title+'</td><td>'+data2[i].authors+'</td><td><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>';
              op+='</tr>';
              }
              $("#BookTable tbody").append(op);
              //$('#bookdata').html(op);
              //console.log("Data Correctly Processed");
              console.log(data2);
          },
              error: function(){
              console.log("Error Occurred");
              }
          });

  }
  else{
     alert("NOt");
    //  $('.alert').show()
  }


});
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
