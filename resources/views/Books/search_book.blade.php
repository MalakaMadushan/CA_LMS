@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Books</h2> 
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-book"></i> Books</a></li>
                    <li class="active"><i class="fa fa-search"></i> Search Book</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

             <!-- --------------------------- section 1------------------------------------- -->
             <section class="col-lg-12 connectedSortable">
 
        <div class="box box-info">
         <div class="box-header ">
            <div class="pull-left header"> <h4> <i class="fa fa-search"> Search Books</i></h4></div>
         </div>

            <div class="box-body">
                <div class="form-row">
                                                
                    <table class="table form-check-inline " id="book_datatable">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Book ID</th>
                                <th scope="col">Accession No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Category</th>
                                <th scope="col">Language</th>
                                <th scope="col">Publisher</th>
                                <th scope="col">Place</th>
                                <th scope="col">status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($Bdata as $data)
                            <tr>
                            <td>{{$data->id}}</td>                        
                            <td>{!!DNS1D::getBarcodeSVG($data->accessionNo, "C128",1,50)!!}</td>                  
                            <td>{{$data->book_title}}</td>                               
                            <td>{{$data->authors}}</td>                               
                            <td>{{$data->book_category_id}}</td>                               
                            <td>{{$data->language_id}}</td>                               
                            <td>{{$data->publisher_id}}</td>      
                            <td>{{$data->rackno}}{{$data->rowno}}</td>                                                      
                            <td>
                            <a href="/update_member_view/{{$data->id}}" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-pencil" ></i></a> 

                            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#book_delete" data-bookid="{{$data->id}}" data-book_title="{{$data->book_title}}"><i class="fa fa-trash" ></i></a>&nbsp;


                            <a href="/recodeMember/{{$data->id}}" class="btn btn-primary btn-sm"><i class="fa fa-search"></i></a>

                            </td>
                             </tr>                                  
                             @endforeach                                       
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


    <!-- start book modal delete-------------------------------------------------------------------------------------------- -->
   
    <div class="modal fade" id="book_delete" tabindex="-1" role="dialog" aria-labelledby="phymediumModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                            <h4 class="modal-title" id="myModalLabel">Remove Book</h4>
                                        </div>
                                        <form method="post" action="/deleteBook">
                                         {{ csrf_field() }}
                                        <div class="modal-body">

                                                <input type="hidden" id="book_id" name="book_id">
                                                <div class="row form-group">
                                                    <div class="col-md-6">
                                                        <h5 id="myModalLabel">Are you sure Remove Book - </h5>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h4><label type="text"  id="bookname"></label></h4>
                                                    </div>
                                                </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> &nbsp; Delete</button>
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                    </div>




   <!-- <div class="modal modal-default fade" id="Modal_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Remove Book</h4>
                </div>
                <form method="post" action="/deleteBook">
                    {{ csrf_field() }}
                    <div class="modal-body">

                        <input type="hidden" id="book_id" name="book_id">
                        <div class="row form-group">
                            <div class="col-md-4">
                                <h5 id="myModalLabel">Are you sure Remove Book - </h5>
                            </div>
                            <div class="col-md-8">
                                <h4><label type="text"  id="bookname"></label></h4>
                            </div>
                        </div>
                         

                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger "><i class="fa fa-trash"></i> &nbsp; Delete</button>
                </div>
                </form>
            </div>
        </div>
    </div> -->
    <!-- end book modal delete ------------------------------------------------------------------------------------------>

@endsection
