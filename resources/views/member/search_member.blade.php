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
                                
                                <table class="table " id="mdatatable">
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

                                                <button class="btn btn-danger btn-sm " data-toggle="modal" data-target="#Modal_delete" data-memberid="{{$data->id}}" data-membername="{{$data->name}}"><i class="fa fa-trash" ></i></button>&nbsp;
                                                

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


        </section>
    </div>



    <!-- start edit Modal--------------------------------------------------------------------------------->
    <div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="categoryModalTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="upadate_member">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                     </button>
                </div>
                <form method="post" action="/memberupdate" id="edit_member">
                     {{ csrf_field() }}
                    <div class="modal-body">
              
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name"> <br>                                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- end modal ------------------------------------------------------------------------------------------------------>

<!-- start modal delete-------------------------------------------------------------------------------------------- -->
    <div class="modal modal-default fade" id="Modal_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Remove Member</h4>
                </div>
                <form method="post" action="/deleteMember">
                    {{ csrf_field() }}
                    <div class="modal-body">

                        <input type="hidden" id="memid" name="memid">
                        <div class="row form-group">
                            <div class="col-md-4">
                                <h5 id="myModalLabel">Are you sure Remove - </h5>
                            </div>
                            <div class="col-md-8">
                                <h4><label type="text"  id="memname"></label></h4>
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
    </div>
    <!-- end modal delete ------------------------------------------------------------------------------------------>


@endsection







