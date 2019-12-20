@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Board Of Survey</h2> 
                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                    <li><a ><i class="fa fa-briefcase"></i> Board Of Survey</a></li>
                    <li class="active"><i class="fa fa-book"></i> Latest Survey</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- --------------------------- section 1------------------------------------- -->
                <section class="col-lg-12 connectedSortable">
 
                    <div class="box box-info">
                        <div class="box-header ">
                           <div class="pull-left header"> <h4> <i class="fa fa-book"> Latest Survey</i></h4></div>
                        </div>

                        <div class="box-body">

<!-----------------------------------------form start--------------------------------------------------->
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="survey_book_id">Book ID :</label>
                                    <input type="text" class="form-control" id="" name="survey_book_id"  placeholder="Book ID :">
                                    <button type="button" class="btn btn-primary" id=""><i class="fa fa-plus"></i></button>
                                </div>
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
