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
                           <div class="pull-left header"> <h4> <i class="fa fa-book">Survey History</i></h4></div>
                        </div>

                        <div class="box-body">
                            <div class="form-row">
                                   
                                <table class="table " id="sdatatable">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">Survey ID</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">TotalBooks</th>
                                        <th scope="col">RemovedBooks</th>
                                        <th scope="col">surveyBooks</th>
                                        <th scope="col">finalize</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Sdata as $data)
                                        <tr>
                                       
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->start_date}}</td>
                                            <td>{{$data->end_date}}</td>
                                            <td>{{$data->TotalBooks}}</td>
                                            <td>{{$data->removedBooks}}</td>
                                            <td>{{$data->surveyBooks}}</td>
                                            <td>{{$data->finalize}}</td>
                                            <td>
             
                                                <a href="" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-search" ></i></a>&nbsp; 

                                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#Modal_delete" data-memberid="{{$data->id}}" data-membername="{{$data->name}}"><i class="fa fa-trash" ></i></a>&nbsp;
                                                

                                            </td>
                                        </tr>
                                    @endforeach
                                    @push('scripts')
                                        <script>
                                          $(document).ready(function() {
    
                                                $('#sdatatable').DataTable();
                                               
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
