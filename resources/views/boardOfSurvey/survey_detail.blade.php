@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Board Of Survey</h2> 
                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                    <li><a ><i class="fa fa-briefcase"></i> Board Of Survey</a></li>
                    <li class="active"><i class="fa fa-book"></i> Past Survey</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- --------------------------- section 1------------------------------------- -->
                <section class="col-lg-12 connectedSortable">
 
                    <div class="box box-info">
                        <div class="box-header ">
                           <div class="pull-left header"> <h4> <i class="fa fa-book">Survey Details</i></h4></div>
                        </div>
                        
                        <div class="box-body">
                            <div class="form-row">
                                    <div class="small-box bg-aqua col-lg-12 text-center " style="height:5rem;">
                                        <div class="row">
                                            <div class="col-md-1 text-left">
                                                <h4  class=" text-black "> <label>Survey ID</label></h4>  
                                            </div>
                                            <div class="col-md-1">
                                                <h4  class="" id="sid"> <label>01</label></h4>  
                                            </div>
                                            <div class="col-md-1 text-left">
                                                <h4  class=" text-black "> <label>Start Date</label></h4>  
                                            </div>
                                            <div class="col-md-1">
                                                <h4  class=""> <label>2019-12-30</label></h4>  
                                            </div>
                                            <div class="col-md-1 text-left">
                                                <h4  class=" text-black "> <label>End date</label></h4>  
                                            </div>
                                            <div class="col-md-1">
                                                <h4  class=""> <label>2020-01-07</label></h4>  
                                            </div>
                                            <div class="col-md-1 text-left">
                                                <h4  class=" text-black "> <label>Total Count</label></h4>  
                                            </div>
                                            <div class="col-md-1">
                                                <h4  class=""> <label>10658</label></h4>  
                                            </div>
                                            <div class="col-md-1 text-left">
                                                <h4  class=" text-black "> <label>Removed Count</label></h4>  
                                            </div>
                                            <div class="col-md-1">
                                                <h4  class=""> <label>56</label></h4>  
                                            </div>
                                            <div class="col-md-1 text-left">
                                                <h4  class=" text-black"> <label>Survey Count</label></h4>  
                                            </div>
                                            <div class="col-md-1">
                                                <h4  class=""> <label>6582</label></h4>  
                                            </div>
                                        </div>
                                        <!-- -------------------------------------------------------------- -->
                                        
                                    </div>

                            

                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-row">
                                   
                                <table class="table " id="sdatatable">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">Book ID</th>
                                        <th scope="col">Accession No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Survey</th>
                                        <th scope="col">suggestion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @push('scripts')
                                    <script>
                                         $(document).ready(function() {
                                        
                                        
                                        // ----------view-------------------------
                                        $('#sdatatable').DataTable({
                                        processing: true,
                                        serverSide: true,

                                        ajax:{
                                            url: '/survey_details/{id}',
                                        },
                                        
                                        columns:[
                                            {data: "id",name: "id"},
                                            {data: "accessionNo",name: "accessionNo"},
                                            {data: "book_title",name: "book_title"},
                                            {data: "authors",name: "authors"},
                                            {data: "price",name: "price"},
                                            {data: "survey",name: "survey",orderable: false},
                                            {data: "Suggetion",name: "Suggetion"},
                                        ]
                                        });

                                        });
                                         

                                    </script>
                                    @endpush
                                    </tbody>
                                </table>

                                </div>

                
                        </div>
                    </div>
                   
                    <!-- --------------------------end section1----------------------------------------------- -->

                </section>



            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
@endsection
