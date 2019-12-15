
<!-- start edit Modal--------------------------------------------------------------------------------->
<div class="modal fade" id="updateMember" tabindex="-1" role="dialog" aria-labelledby="categoryModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <div class="pull-left header"> <h4 class="modal-title"><i class="fa fa-user"> Update Member Details</i></h4></div>
            </div>
            <form id="uddate_mem" method="post" action="/updatemember">
            {{ csrf_field() }}  
                        
            <div class="modal-body">
                <div class="row">        
                    <section class="col-lg-12 connectedSortable">
                        <div class="col-md-12 col-lg-12 connectedSortable">
                            <div class="box box-info">  
                                @include('flash_massage')
                                <div class="box-body">
                                    <input type="hidden" name="id" id="id" value="">
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
                                            <select class="form-control"name="category" id="category"  value="{{old('category')}}">
                                                <option value="" disabled selected>Select Member's Category</option>
                                               
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
                                        <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="Name">
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address :</label>
                                        <input type="text" class="form-control" name="Address1" id="address1" placeholder="Address Line 1" value="{{old('Address1')}}">
                                        <span class="text-danger">{{ $errors->first('Address1') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Address2" id="address2" placeholder="Address Line 2" vvalue="{{old('Address2')}}"> 
                                        <span class="text-danger">{{ $errors->first('Address2') }}</span>
                                    </div>

                                    <div class=" row form-group">
                                        <div class="form-group col-md-6">
                                            <label for="NIC">NIC :</label>
                                            <input type="text" class="form-control" name="nic" id="nic" placeholder="NIC" value="{{old('nic')}}">
                                            <span class="text-danger">{{ $errors->first('nic') }}</span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Mobile">Mobile No :</label>
                                            <input type="text" class="form-control" name="Mobile" id="mobile" placeholder="Mobile No" value="{{old('Mobile')}}">
                                            <span class="text-danger">{{ $errors->first('Mobile') }}</span>
                                        </div>
                                    </div>
                                    <div class=" row form-group">
                                        <div class="form-group col-md-6">
                                            <label for="NIC">Birth Day :</label>
                                            <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Birth Day" value="{{old('birthday')}}">
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
                                        <textarea class="form-control" rows="5" id="comment" name="Description" id="description" placeholder="Description" value="{{old('Description')}}"></textarea>
                                        <span class="text-danger">{{ $errors->first('Description') }}</span>
                                    </div>
                                    <div class=" row form-group">
                                        <div class="form-group col-md-6">
                                            <label for="regdate">Registerd Date :</label>
                                            <input type="date" class="form-control" name="registeredDate" id="registeredDate" placeholder="registered Date" value="{{old('registeredDate')}}">
                                            <span class="text-danger">{{ $errors->first('registeredDate') }}</span>
                                        </div>
                                        <div class="form-group col-md-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
          
            <div class="modal-footer">
                <div class="box-footer clearfix pull-right">
                    <button type="submit" class="btn btn-success btn-md" id="save_member">Save
                        <i class="fa fa-floppy-o"></i></button>
                        &nbsp; &nbsp;
                        <button type="button" class="btn btn-primary btn-md" id="cler">Reset
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal ------------------------------------------------------------------------------------------------------>


