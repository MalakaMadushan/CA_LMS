@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Members</h2> 
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-suers"></i> Members</a></li>
                    <li class="active"><i class="fa fa-user"></i> Search Member</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- --------------------------- section 1------------------------------------- -->
                <section class="col-lg-12 connectedSortable">
 
                    <div class="box box-info">
                        <div class="box-header ">
                           <div class="pull-left header"> <h4> <i class="fa fa-search"> Search Members</i></h4></div>
                        </div>

                    <div class="box-body">
                        <div class="form-row">
                            <div class="col-lg-12 col-md-12">
                            <div class="form-check form-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1"> Member ID</label> &nbsp; &nbsp;
                                
                              
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2"> Category</label> &nbsp; &nbsp; 

                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2"> Name</label> &nbsp; &nbsp; 

                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2"> NIC</label> &nbsp; &nbsp;
                            </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group  col-md-10">
                                <input type="text" class="form-control" name="search_book" placeholder="Search Book :">
                            </div>
                            <div class="form-group col-md-2 text-left">
                                <a href="/recodeMember/" class="btn btn-primary btn-sm"><i class="fa fa-search"></i>Search</a>&nbsp;
                            </div>
                        </div>
                                <hr cla="hr1">
                                <div class="form-row">
                                
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">Member ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Address1</th>
                                        <th scope="col">Address2</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">NIC</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Registerd Date</th>
                                        <th scope="col">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Mdata as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->address1}}</td>
                                            <td>{{$data->address2}}</td>
                                            <td>{{$data->Category}}</td>
                                            <td>{{$data->nic}}</td>
                                            <td>{{$data->mobile}}</td>
                                            <td>{{$data->regdate}}</td>
                                            <td>
                                                <a href="/updateMember/{{$data->id}}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>&nbsp;
                                                <a href="/deleteMember/{{$data->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>&nbsp;
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



            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
@endsection
