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

<!-----------------------------------------form start--------------------------------------------------->
                        <form class="form-inline" id="form_barrow" onSubmit="return false;">
                        {{csrf_field()}}
                        
                            <div class="form-group mx-sm-4 mb-2">
                            <label for="">Books ID : </label>&nbsp;
                            <input type="text" class="form-control" id="bookB_details" onfocus="this.value=''" placeholder="Books ID">
                            </div>
                            <button type="button" class="btn btn-primary" id="addbarrow"><i class="fa fa-plus"></i></button>
                            <button type="button" class="btn btn-success" id="addbarrow_serch"><i class="fa fa-search"></i></button>
                            

                            <div class="form-group col-md-6">

                            <div class="form-group mx-sm-4 mb-2">
                            <label for="">Member ID : </label>&nbsp;
                            <input type="text" class="form-control" id="member_id" placeholder="Member ID">
                            <input type="hidden" name="member_id_select" class="form-control" id="member_Name_id">
                            </div>
                            <button type="button" class="btn btn-primary" id="addbarrowmember"><i class="fa fa-plus"></i></button>
                            <button type="button" class="btn btn-success" id="addbarrowmember_serch"><i class="fa fa-search"></i></button>
                           



                            </div>
                           
                            <br><br>
                            <div class="row text-center">
                                <div class="col-lg-12">
                                <!-- small box -->
<<<<<<< HEAD
                                    <div class="small-box bg-aqua" style="height:2.1rem;">
                                        <div class="d-flex p-6">
                                        
                                        <h4 id="member_Name"class="d-flex p-2 text-center"></h4>
                                        <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
                                        
                                        </div>
=======
                                    <div class="small-box bg-aqua col-lg-12 text-center " style="height:2.8rem;">
                                    <div class="d-flex p-2 text-center">
                                
                                <h4 id="member_Name"class="d-flex p-2 text-center">
                                </h4>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
                                
                                
                                    </div>
>>>>>>> 81948c085cfc776ab1e9d76dcc689078cc5cc86b
                                    </div>


                            </div></div>

                            <div class="form-row ">
                                
                                <table class="table table-hover" id="BookTable">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Accession No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Authors</th>
                                    <th scope="col">&nbsp;</th>
                                        <!-- <td><a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </a></td> -->
                                    </tr>    
                                    </thead>

                                    <tbody id="bookdata">
                                           
                                    </tbody>
                                </table>
                            </div>

                            @include('flash_massage')

                            
                        
                        <div class="box-footer clearfix pull-right">
                                <button type="button" class="btn btn-primary btn-md" id="issue_book">
                                <i class="fa fa-floppy-o"></i> Save</button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-warning btn-md" id="reset_issue">
                                <i class="fa fa-times"></i> Reset</button>
                        </div> 
                        
                        </form>
                        
    <!-------------------------------form End-------------------------------------------------------------------------------------->                    
                    </div>
                   
                    <!-- --------------------------end section1----------------------------------------------- -->

                </section>



            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
@endsection
