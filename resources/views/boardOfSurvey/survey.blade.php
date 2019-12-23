@extends('layouts.app')

@section('content')
<div>
        <!-- Content Header (Page header) -->
    <section class="content-fulid mt-1">
        <h2> &nbsp Board Of Survey</h2> 
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                <li><a ><i class="fa fa-briefcase"></i> Board Of Survey</a></li>
                <li class="active"><i class="fa fa-book"></i>Survey</li>
        </ol>
    </section>

        <!-- Main content -->
    <section class="content">

        <div class="row">
                <!-- --------------------------- section 1------------------------------------- -->
            <section class="col-lg-12 connectedSortable">
 
                <div class="box box-info">
                        <div class="box-header ">
                           <div class="pull-left header"> <h4> <i class="fa fa-book"> Survey</i></h4></div>
                           <div class="pull-right">
                                <h4><button class="btn btn-md" data-toggle="modal" data-target="#start_new_survey" ><i class="fa fa-plus"></i></button></h4>
                           </div>
                           
                        </div>

                            <div class="box-body">
                                
                                <form onSubmit="return false;">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="form-group mx-sm-4 mb-2">
                                                <label for="">Book ID : </label>&nbsp;
                                                <input type="text" class="form-control" id="book_capture" placeholder="Book ID">
                                            </div>
                                            <button type="button" class="btn btn-primary" id="book_check"><i class="fa fa-plus"></i></button>
                                            <button type="button" class="btn btn-success" id=""><i class="fa fa-search"></i></button>
                                        </div>
                                        <div class="form-group col-md-3 text-center">
                                           <h4> <label id="book_capturename"></label></h4>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="small-box bg-aqua col-lg-12 text-center " style="height:9rem;">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h4>Total Count- </h4>
                                                    </div>
                                                    <div class="col-md-6 text-left">
                                                        <h3 id="total_count">{{ $Bcount }}</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 text-primary">
                                                        <h4>Survey Count- </h4>
                                                    </div>
                                                    <div class="col-md-6 text-left">
                                                        <span type="hidden" id="survey_count"><h3>{{ $Scount }}</h3></span>
                                                        <h3 id="survey_countb"></h3>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                        <div class="form-group col-md-2" >
                                            <!-- <label for="">View </label>&nbsp; -->
                                                <button type="button" class="btn btn-success form-control" id=""><i class="fa fa-edit">&nbsp;View</i></button>
                                                &nbsp;
                                                <button type="button" class="btn btn-danger form-control" id=""><i class="fa fa-refresh">&nbsp;Clear</i></button>
                                           
                                        </div>
                                </form>
                            </div> 


                        
                

                        <div class="box-body">
                            <div class="form-row">
                                               
                                <table class="table form-check-inline " id="survey_datatable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Book ID</th>
                                            <th scope="col">Accession No</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Survey</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                @push('scripts')
                                <script>

                                    $(document).ready(function() {
                                    
                                    // -----------------------------------
                                    $('#survey_datatable').DataTable({
                                    processing: true,
                                    serverSide: true,

                                    ajax:{
                                    url: "{{ route('survey.survey') }}",
                                    },
                                    columns:[
                                        {data: "id",name: "id"},
                                        {data: "accessionNo",name: "accessionNo"},
                                        {data: "book_title",name: "book_title"},
                                        {data: "authors",name: "authors"},
                                        {data: "price",name: "price"},
                                        {data: "survey",name: "survey",orderable: false}
                                        
                                    ]
                                    });
                                    
                                    document.getElementById("book_capture").focus();
                                    // -----------------------------------------------------------------------
                                    var input = document.getElementById("book_capture");
                                    input.addEventListener("keyup", function(event) {
                                    if (event.keyCode === 13) {
                                    event.preventDefault();
                                    document.getElementById("book_check").click();
                                    $('#book_capture').val('');
                                    document.getElementById("book_capture").focus();
                                    }
                                    });

                                    

                                    });

                                // ----------------------------------------------------------------------------


                                    $('#book_check').on("click",function(){
                                        var book_acc = $("#book_capture").val();
                                        load=0;

                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });

                                        $.ajax({
                                            method: 'POST',
                                            url: '/ckeck_book',
                                            data: { book_acc: book_acc },
                                            
                                            
                                            success: function(response){

                                               
                                                $('#survey_count').html('');
                                                $('#book_capturename').html(response.book_name);
                                                $('#survey_countb').html(response.survey_count);
                                                $('#survey_datatable').DataTable().ajax.reload();
                                               
                                            },
                                            error: function(response){
                                                $('#book_capturename').html("Book Not Found..!");
                                            }
                                        });
                                    });
                                // ------------------------------------------------------------------------

                                 </script>
                                @endpush
                                                                    
                            </tbody>
                        </table>
                
                            <div class="pull-right">
                                <button class="btn btn-primary btn-lg"><i class="fa fa-save">&nbsp;<strong>Save</strong></i></button>
                                <!-- <a href="" class="btn btn-success "><i class="fa fa-search">&nbsp;View</i></a>
                                <a href="" class="btn btn-danger "><i class="fa fa-refresh">&nbsp;Clear</i></a> -->
                            </div>
                        </div>               
                    </div>
                </div>

            </section>
  
        </div>
                   

    </section>


</div>

           


@include('boardOfSurvey.new_survey_modal')
@endsection
