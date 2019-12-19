<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                @yield('content')

        </div>
    </div>
</section>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
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


<script type="text/javascript">
   $(document).ready(function() {
    $('#name').val("{{$selectdata->name}}");
    $('#address1').val("{{$selectdata->address1}}");
    $('#address2').val("{{$selectdata->address2}}");
    $('#nic').val("{{$selectdata->nic}}");
    $('#mobile').val("{{$selectdata->mobile}}");
    $('#birthday').val("{{$selectdata->birthday}}");
    $('#description').val("{{$selectdata->description}}");
    $('#registeredDate').val("{{$selectdata->regdate}}");
    $("#category").val("{{$selectdata->Categoryid}}");
    $('input:radio[name="title"]').filter('[value="{{$selectdata->title}}"]').attr('checked', true);
    $('input:radio[name="gender"]').filter('[value="{{$selectdata->gender}}"]').attr('checked', true);


    $('#book_aNo').val("{{$selectdata->accessionNo}}");
    $('#book_isbn').val("{{$selectdata->isbn}}");
    $('#book_title').val("{{$selectdata->book_title}}");
    $('#authors').val("{{$selectdata->authors}}");
    $('#purchase_date').val("{{$selectdata->purchase_date}}");
    $('#edition').val("{{$selectdata->edition}}");
    $('#price').val("{{$selectdata->price}}");
    $('#publishyear').val("{{$selectdata->publishyear}}");
    $('#phydetails').val("{{$selectdata->phydetails}}");
    $('#rackno').val("{{$selectdata->rackno}}");
    $('#rowno').val("{{$selectdata->rowno}}");
    $('#note').val("{{$selectdata->note}}");

    $('#book_category').val("{{$selectdata->book_category_id}}");
    $('#language').val("{{$selectdata->language_id}}");
    $('#publisher').val("{{$selectdata->publisher_id}}");
    $('#phymedium').val("{{$selectdata->phymedium_id}}");
    $('#dewey_decimal').val("{{$selectdata->dewey_decimal_id}}");
    
  } );  
</script>

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
}, 1500);

</script>

</body>
</html>
