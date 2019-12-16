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
                                                
                    <table class="table " id="book_datatable">
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
                            <td>{{$data->accessionNo}}</td>                     
                            <td>{{$data->book_title}}</td>                               
                            <td>{{$data->authors}}</td>                               
                            <td>{{$data->book_category}}</td>                               
                            <td>{{$data->language}}</td>                               
                            <td>{{$data->publisher}}</td>      
                            <td>{{$data->rackno}}{{$data->rowno}}</td>                                                      
                            <td>
                             <a href="/updateBook/{{$data->id}}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>&nbsp;                                                            
                             <button class="btn btn-danger btn-sm " data-toggle="modal" data-target="#Modal_delete" data-bookid="{{$data->id}}" data-bookname="{{$data->name}}"><i class="fa fa-trash" ></i></button>&nbsp;                              
                             <a href="/recodeMember/{{$data->id}}" class="btn btn-primary btn-sm"><i class="fa fa-search"></i></a>&nbsp;                                   
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
@endsection
