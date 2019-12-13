@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Details</h2> 
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href=""><i class="fa fa-book"></i> Books</a></li>
                    <li class="active"><i class="fa fa-info-circle"></i> Details Book</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- --------------------------- section 1------------------------------------- -->
                <section class="col-lg-12 connectedSortable">
 
                    <div class="box box-info">
                        <div class="box-header ">
                           <div class="pull-left header"> <h4> <i class="fa fa-info-circle"></i> Details Books</i></h4></div>
                        </div>

                        <div class="box-body">
                            <form action="#" method="post">

                            <div class="form-row">
                               
                                <div class="form-group col-md-12">

                                   <!--  Tab tittle start -->
                                <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="pills-category-tab" data-toggle="pill" href="#pills-category" role="tab" aria-controls="pills-category" aria-selected="true">
                                  Category</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-language-tab" data-toggle="pill" href="#pills-language" role="tab" aria-controls="pills-language" aria-selected="false">
                                  Language</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-publisher-tab" data-toggle="pill" href="#pills-publisher" role="tab" aria-controls="pills-publisher" aria-selected="false">
                                  Publisher</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-phymedium-tab" data-toggle="pill" href="#pills-phymedium" role="tab" aria-controls="pills-phymedium" aria-selected="false">
                                  Physical Medium</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-ddc-tab" data-toggle="pill" href="#pills-ddc" role="tab" aria-controls="pills-ddc" aria-selected="false">
                                  Dewey Decimal</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-rackno-tab" data-toggle="pill" href="#pills-rackno" role="tab" aria-controls="pills-rackno" aria-selected="false">
                                  Rack No</a>

                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-rowno-tab" data-toggle="pill" href="#pills-rowno" role="tab" aria-controls="pills-rowno" aria-selected="false">
                                  Row No</a>
                                </li>

                              </ul>
                              <!-- Tab title end -->

                              <!-- tab content start  -->
                              <div class="tab-content" id="pills-tabContent">
                              <!-- category tab start -->
                                <div class="tab-pane fade show active" id="pills-category" role="tabpanel" aria-labelledby="pills-category-tab">
                                
                                <div class="form-group col-md-6">
                                  <br>
                                  <hr>
                                    <label for="authors">Category</label>
                                    <input type="text" class="form-control" name="accessionnumber" placeholder="Enter Your New Category:"> <br>
                                    
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
                                </div>

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col">Category</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td> <button type="button" class="btn btn-success btn-md"><i class="fa fa-pencil"></i></button></td>
                                        <td>
                                        <button type="button" class="btn btn-danger btn-md"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td> <button type="button" class="btn btn-success btn-md"><i class="fa fa-pencil"></i></button></td>
                                        <td>
                                        <button type="button" class="btn btn-danger btn-md"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        
                                    </tbody>
                                    </table>




                                </div>
                                <!-- category tab end -->
                                
                                <!-- language tab start -->
                                <div class="tab-pane fade" id="pills-language" role="tabpanel" aria-labelledby="pills-language-tab">
                                <div class="form-group col-md-6">
                                  <br><br>
                                  <hr>
                                    <label for="authors">Language</label>
                                    <input type="text" class="form-control" name="accessionnumber" placeholder="Enter Your New Language:"> <br>
                                    
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
                                </div>
                                </div>
                                <!-- language tab end -->
                               
                             <!-- publisher tab start -->
                                <div class="tab-pane fade" id="pills-publisher" role="tabpanel" aria-labelledby="pills-publisher-tab">
                                <div class="form-group col-md-6">
                                  <br><br>
                                  <hr>
                                    <label for="authors">Publisher</label>
                                    <input type="text" class="form-control" name="accessionnumber" placeholder="Enter Your New Publisher:"> <br>
                                    
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
                                </div>
                                </div>
                                <!-- publisher tab end -->

                                 <!-- physical medium tab start -->
                                 <div class="tab-pane fade" id="pills-phymedium" role="tabpanel" aria-labelledby="pills-phymedium-tab">
                                <div class="form-group col-md-6">
                                  <br><br>
                                  <hr>
                                    <label for="authors">Physical Medium</label>
                                    <input type="text" class="form-control" name="accessionnumber" placeholder="Enter Your New Physical Medium:"> <br>
                                    
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
                                </div>
                                </div>
                                <!-- physical medium tab end -->

                                 <!-- ddc tab start -->
                                 <div class="tab-pane fade" id="pills-ddc" role="tabpanel" aria-labelledby="pills-ddc-tab">
                                <div class="form-group col-md-6">
                                  <br><br>
                                  <hr>
                                    <label for="authors">Dewey Decimal </label>
                                    <input type="text" class="form-control" name="accessionnumber" placeholder="Enter Your New Dewey Decimal:"> <br>
                                    
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
                                </div>
                                </div>
                                <!-- ddc tab end -->

                                <!-- Rack no  tab start -->
                                <div class="tab-pane fade" id="pills-rackno" role="tabpanel" aria-labelledby="pills-rackno-tab">
                                <div class="form-group col-md-6">
                                  <br><br>
                                  <hr>
                                    <label for="authors">Rack No </label>
                                    <input type="text" class="form-control" name="accessionnumber" placeholder="Enter Your New Rack No:"> <br>
                                    
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
                                </div>
                                </div>
                                <!-- Rack no tab end -->

                                <!-- row no tab start -->
                                <div class="tab-pane fade" id="pills-rowno" role="tabpanel" aria-labelledby="pills-rowno-tab">
                                <div class="form-group col-md-6">
                                  <br><br>
                                  <hr>
                                    <label for="authors">Row No</label>
                                    <input type="text" class="form-control" name="accessionnumber" placeholder="Enter Your New Row No:"> <br>
                                    
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
                                </div>
                                </div>
                                <!-- row no tab end -->
                              
                            </div> 
                             <!-- tab content end  -->
                            </div>
                            </div>
                            
                            </form>
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
