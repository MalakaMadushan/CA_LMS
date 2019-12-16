@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Book Lending</h2> 
                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                    <li><a ><i class="fa fa-book"></i> Book Lending</a></li>
                    <li class="active"><i class="fa fa-book"></i> issue Book</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- --------------------------- section 1------------------------------------- -->
                <section class="col-lg-12 connectedSortable">
 
                    <div class="box box-info">
                        <div class="box-header ">
                           <div class="pull-left header"> <h4> <i class="fa fa-book"> Issue Books</i></h4></div>
                        </div>

                        <div class="box-body">
                            <form action="" method="get">
                            
                            <div class="row">


                                <div class="form-group col-md-4">
                                    <label for="book_category">Member ID</label> &nbsp; &nbsp;
                                    <input type="text" class="form-control" name="phydetails" value="{{old('phydetails')}}" placeholder="Member ID :">
                                </div>
                                <div class="form-group col-md-1">
                                <label for="new_category">search</label>  &nbsp; &nbsp;
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#categoryModal"><i class="fa fa-search"></i></button>

                                
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="language">Books ID</label>
                                    <input type="text" class="form-control" name="phydetails" value="{{old('phydetails')}}" placeholder="Book ID :">
                                </div>
                                <div class="form-group col-md-1">
                                <label for="new_language">search</label>  &nbsp; &nbsp;
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#languageModal"><i class="fa fa-search"></i></button>

                               

                                </div>
                                
                            </div>&nbsp; &nbsp;
                            <div class="row">
                                <div class="col-lg-12">
                                <!-- small box -->
                                <div class="small-box bg-aqua" style="height:4rem;">
                                <div class="text-center inner">
                                
                                <h4>1505414 - &nbsp;
                                Hirantha Rthnayaka
                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </h4>
                                

                                
                                </div>
                             </div>


                            </div><br><br>

                            <div class="form-row ">
                                
                                <table class="table table-hover">
                                    <thead>
                                        <tr>&nbsp; &nbsp;
                                        <th scope="col">#</th>
                                        <th scope="col">Book Id</th>
                                        <th scope="col">Book Name</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Availability</th>
                                        <th scope="col">Publisher</th>
                                        <th scope="col">Issuing Date</th>
                                        <th scope="col">Last Borrowing Date</th>
                                        <th scope="col">status</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>554461</td>
                                        <td>Harry Potter abc</td>
                                        <td>@mdo</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>2019/12/10</td>
                                        <td>2019/12/25</td>
                                        <td>
                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> &nbsp;</button>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </td></button>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>646649</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>2019/12/02</td>
                                        <td>2019/12/16</td>
                                        <td>
                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> &nbsp;</button>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </td></button>
                                         </td>
                                        </tr>
                                        
                                    </tbody>
                                    </table>
                                    </div>

                            
                        
                        <div class="box-footer clearfix pull-right">
                                <button type="submit" class="btn btn-primary btn-md" id="save_book">
                                <i class="fa fa-floppy-o"></i> Save</button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-warning btn-md" id="reset_book">
                                <i class="fa fa-times"></i> Reset</button>
                        </div>
                        </form>
                    </div>
                   
                    <!-- --------------------------end section1----------------------------------------------- -->

                </section>



            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
@endsection
