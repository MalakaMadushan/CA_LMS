@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Book Lending</h2> 
                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                    <li><a ><i class="fa fa-book"></i> Book Lending</a></li>
                    <li class="active"><i class="fa fa-book"></i> Return Books</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- --------------------------- section 1------------------------------------- -->
                <section class="col-lg-12 connectedSortable">
 
                    <div class="box box-info">
                        <div class="box-header ">
                           <div class="pull-left header"> <h4> <i class="fa fa-book"> Return Books</i></h4></div>
                        </div>

                        <div class="box-body">


                            <!-----------------------------------------form start--------------------------------------------------->
                        <form class="form-inline" method="" action="">
  
                            <div class="form-group mx-sm-4 mb-2">
                            <label for="">Books ID : </label>&nbsp;
                            <input type="password" class="form-control" id="" placeholder="Books ID">
                            </div>
                            <a href="" class="btn btn-success" data-toggle="" data-target=""><i class="fa fa-search"></i></a>
                            <a href="" class="btn btn-primary" data-toggle="" data-target=""><i class="fa fa-plus"></i></a>

                            <div class="form-group col-md-6">

                            <div class="form-group mx-sm-4 mb-2">
                            <label for="">Member ID : </label>&nbsp;
                            <input type="password" class="form-control" id="" placeholder="Member ID">
                            </div>
                            <a href="" class="btn btn-success" data-toggle="" data-target=""><i class="fa fa-search"></i></a>
                            <a href="" class="btn btn-primary" data-toggle="" data-target=""><i class="fa fa-plus"></i></a>



                           </div>
                            <br><br>
                            <div class="row">
                            <div class="col-lg-12 ">
                                <!-- small box -->
                                <div class="small-box bg-aqua" style="height:2.1rem;">
                                <div class="d-flex p-2">
                                
                                <h4 class="d-flex p-2 text-center">1505414 - &nbsp;
                                Hirantha Rathnayaka
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
                                        <th scope="col">Accession No:</th>
                                        <th scope="col">ISBN</th>
                                        <th scope="col">Book Id</th>
                                        <th scope="col">Book Name</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Publisher</th>
                                        <th scope="col">Issueing Date</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>554461</td>
                                        <td>456354645</td>
                                        <td>124</td>
                                        <td>Harry Potter</td>
                                        <td>Otto</td>
                                        <td>Sarasavi</td>
                                        <td>2019/12/25</td>
                                        <td>
                                        <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> &nbsp;</a>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </td></a>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>646649</td>
                                        <td>454445424</td>
                                        <td>1120</td>
                                        <td>Palu Diwayina</td>
                                        <td>jakob malowa</td>
                                        <td>Gunasena</td>
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
                                <button type="submit" class="btn btn-primary btn-md" id="issue_book">
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
