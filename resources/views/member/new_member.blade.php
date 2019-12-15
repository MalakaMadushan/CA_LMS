@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2>&nbsp Member</h2>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-o"></i> Member</a></li>
                <li class="active"><i class="fa fa-o"></i> Add Member</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                
                <section class="col-lg-12 connectedSortable">
    <!-- -------------------------------------- add member----------------------------------------------------------------------------- -->
    
                
                <div class="col-md-12 col-lg-12 connectedSortable">
 
                    <div class="box box-info">
                        <div class="box-header ">
                           <div class="pull-left header"> <h4><i class="fa fa-user"> Add New Member</i></h4></div>
                        </div>
                        @include('flash_massage')
                        <div class="box-body">
                            <form action="/save_member" method="post" name=mamber_save id=mamber_save>
                            {{ csrf_field() }}
                                <div class="form-group">
                                <div class="form-check-inline" >
                                    <label for="name">Title:</label> &nbsp;
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="title" value="Mr">Mr
                                    </label> &nbsp;
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="title" value="Mrs">Mrs
                                    </label> &nbsp;
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="title" value="Mrss">Mrss
                                    </label> &nbsp;
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                </div>
                                </div>

            
                                <div class="row form-group">
                                    <div class="form-group col-md-6">
                                        <label for="categry">Category : </label>
                                        <select class="form-control"name="category" value="{{old('category')}}">
                                        <option value="" disabled selected>Select Member's Category</option>
                                        @foreach($Mdata as $item)
                                            <option value="{{ $item->id }}">{{ $item->category }}</option>
                                        @endforeach
                                
                                        </select>

                                        <span class="text-danger">{{ $errors->first('category') }}</span>
                                    </div>
                                    <div class="form-group col-md-6 text-left">
                                        <label for="categry">&nbsp;</label><br>
                                        
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal" data-backdrop="static" data-opp_name="Member Category" onclick="add_by_modal('/save_member_cat')" ><i class="fa fa-plus"></i></button><label for="categry">&nbsp; New Category</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name :</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="Address">Address :</label>
                                    <input type="text" class="form-control" name="Address1" placeholder="Address Line 1" value="{{old('Address1')}}">
                                    <span class="text-danger">{{ $errors->first('Address1') }}</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Address2" placeholder="Address Line 2" value="{{old('Address2')}}"> 
                                    <span class="text-danger">{{ $errors->first('Address2') }}</span>
                                </div>

                                <div class=" row form-group">
                                    <div class="form-group col-md-6">
                                        <label for="NIC">NIC :</label>
                                        <input type="text" class="form-control" name="nic" placeholder="NIC" value="{{old('nic')}}">
                                        <span class="text-danger">{{ $errors->first('nic') }}</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Mobile">Mobile No :</label>
                                        <input type="text" class="form-control" name="Mobile" placeholder="Mobile No" value="{{old('Mobile')}}">
                                        <span class="text-danger">{{ $errors->first('Mobile') }}</span>
                                    </div>
                                </div>
                                <div class=" row form-group">
                                    <div class="form-group col-md-6">
                                        <label for="NIC">Birth Day :</label>
                                        <input type="date" class="form-control" name="birthday" placeholder="Birth Day" value="{{old('birthday')}}">
                                        <span class="text-danger">{{ $errors->first('birthday') }}</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="gender">Gender :</label>
                                        <div class="form-group">
                                            <div class="form-check-inline">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" value="Male">Male
                                            </label> &nbsp;
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" value="Female">Female
                                            </label>
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="descrip">Description :</label>
                                    <textarea class="form-control" rows="5" id="comment" name="Description" placeholder="Description" value="{{old('Description')}}"></textarea>
                                    <span class="text-danger">{{ $errors->first('Description') }}</span>
                                </div>
                                <div class=" row form-group">
                                    <div class="form-group col-md-6">
                                        <label for="regdate">Registerd Date :</label>
                                        <input type="date" class="form-control" name="registeredDate" placeholder="registered Date" value="{{old('registeredDate')}}">
                                        <span class="text-danger">{{ $errors->first('registeredDate') }}</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                    </div>
                                </div>
                                
                                <div class="box-footer clearfix pull-right">
                                <button type="submit" class="btn btn-success btn-md" id="save_member">Save
                                <i class="fa fa-floppy-o"></i></button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-primary btn-md" id="cler">Reset
                                <i class="fa fa-times"></i></button>
                        </div>
                                
                            </form>

                        </div>
                        
                    </div>

                </div>
                
 <!-- -------------------------------------- /add member----------------------------------------------------------------------------- -->

                </section>



            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    @include('modal_add')
@endsection
