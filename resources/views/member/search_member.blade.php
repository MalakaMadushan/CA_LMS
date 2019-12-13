@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Members</h2> 
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
                            <form action="#" method="post">


                            <div class="form-row">
                            <div class="form-check form-check-inline">  &nbsp; &nbsp;
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1"> Category</label> &nbsp; &nbsp; &nbsp;
                                
                              
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2"> Language</label> &nbsp; &nbsp; &nbsp;

                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2"> Publisher</label> &nbsp; &nbsp; &nbsp;

                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2"> Author</label> &nbsp; &nbsp; &nbsp;

                                
                                </div><br>
                            
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="search_book">Search Books</label>
                                    <input type="text" class="form-control" name="search_book" placeholder="Search Book :">
                                   <br> 
                                    <button type="button" class="btn btn-primary btn-md" id="search_book">
                                     <i class="fa fa-search"></i> Search </button>
                                </div>
                                
                                <div class="form-row">
                                
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col">Accession No</th>
                                        <th scope="col">ISBN</th>
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
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Harry Potter abc</td>
                                        <td>@mdo</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>5C</td>
                                        <td>
                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> &nbsp;</button>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </td></button>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>1A</td>
                                        <td>
                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> &nbsp;</button>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </td></button>
                                         </td>
                                        </tr>
                                        
                                    </tbody>
                                    </table>
                                </div>

                            </div> 
                            </div>
                            
                            </form>
                        </div>
                                
                           

                                

                           
                        
                        <!-- <div class="box-footer clearfix pull-right">
                                <button type="button" class="btn btn-primary btn-md" id="save_book">
                                <i class="fa fa-floppy-o"></i> Save</button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-warning btn-md" id="reset_book">
                                <i class="fa fa-times"></i> Reset</button>
                        </div> -->

                    </div>
                   
                    <!-- --------------------------end section1----------------------------------------------- -->

                </section>



            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
@endsection
