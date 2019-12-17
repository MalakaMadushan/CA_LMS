@extends('layouts.app')

@section('content')
<div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Books</h2> 
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-book"></i> Books</a></li>
                    <li class="active"><i class="fa fa-plus"></i> Add Book</li>
                </ol>
                

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- --------------------------- section 1------------------------------------- -->
                <section class="col-lg-12 connectedSortable">
 
                    <div class="box box-info">
                        <div class="box-header ">
                           <div class="pull-left header"> <h4> <i class="fa fa-plus"> Add New Books</i></h4></div>
                           <div class="pull-right">
                                <h4><button class="btn btn-warning btn-md" data-toggle="modal" data-target="#import_book_excel" ><i class="fa fa-file-excel-o"></i></button></h4>
                           </div>
                        </div>
                       
                        <div class="box-body">
                        @include('flash_massage')
                            <form action="/savebook" method="post" name="book_save" id="book_save">
                            {{ csrf_field() }}
                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label for="accessionNo">Accession Number</label>
                                    <input type="text" class="form-control" id="book_aNo" name="accessionNo" value="{{old('accessionNo')}}" placeholder="Accession Number:">
                                    <span class="text-danger" >{{ $errors->first('accessionNo') }}</span>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="form-check-inline">
                                        <label class="form-check-label"></label>
                                            <input type="radio" class="form-check-input" name="br_qr_code" value="bar_code"> BarCode
                                            <input type="radio" class="form-check-input" name="br_qr_code" value="qr_code"> QRCode
                                            <!-- <button class="btn btn-primary"><i class="fa fa-circle-o">Genarete</i></button> -->

                                    </div>
                                    <div id="code_view_bq" class="form-group">
                                    {!!DNS1D::getBarcodeSVG("Code Aider", "C128",1,50)!!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="isbn">ISBN</label>
                                    <input type="text" class="form-control" id="book_isbn" name="isbn"  value="{{old('isbn')}}"  placeholder="ISBN">
                                    <span class="text-danger">{{ $errors->first('isbn') }}</span>
                                </div>

                            </div>

                                
                            <div class="form-row">
                                
                                <div class="form-group col-md-12">
                                    <label for="book_title">Title</label>
                                    <textarea class="form-control" id="book_title" name="book_title" value="{{old('book_title')}}" placeholder="Title" rows="2"></textarea>
                                    <span class="text-danger">{{ $errors->first('book_title') }}</span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="authors">Authors</label>
                                    <textarea class="form-control" id="authors" name="authors" value="{{old('authors')}}" placeholder="Author" rows="2"></textarea>
                                    <span class="text-danger">{{ $errors->first('authors') }}</span>
                                </div>
                                
                            </div>
                            <hr> <hr>
                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label for="book_category">Category</label> &nbsp; &nbsp;
                                    <select class="form-control" id="book_category" name="book_category" value="{{old('category')}}">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    @foreach($Cat_data as $item)
                                            <option value="{{ $item->id }}">{{ $item->category }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('category') }}</span>
                                </div>
                                <div class="form-group col-md-2">
                                <label for="new_category">New Category</label>  &nbsp; &nbsp;
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal"  data-backdrop="static" data-opp_name="Book Category"
                                onclick="add_by_modal('/save_Book_category')"><i class="fa fa-plus"></i></button>

                                
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="language">Language</label>
                                    <select class="form-control" id="language" name="language" value="{{old('language')}}">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    @foreach($Lang_data as $item)
                                            <option value="{{ $item->id }}">{{ $item->language }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('language') }}</span>
                                </div>
                                <div class="form-group col-md-2">
                                <label for="new_language">New Language</label>  &nbsp; &nbsp;
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal" data-backdrop="static" data-opp_name="Book Language"
                                onclick="add_by_modal('/save_Book_language')"><i class="fa fa-plus"></i></button>

                                </div>
                                
                            </div>

                            <div class="form-row">
                                
                                <div class="form-group col-md-4">
                                    <label for="publisher">Publisher</label>
                                    <select class="form-control" id="publisher" name="publisher" value="{{old('publisher')}}">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    @foreach($Pub_data as $item)
                                            <option value="{{ $item->id }}">{{ $item->publisher}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('publisher') }}</span>
                                </div>
                                <div class="form-group col-md-2">
                                <label for="new_publisher">New Publisher</label>  &nbsp; &nbsp;
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal" data-backdrop="static" data-opp_name="Book Publisher"
                                onclick="add_by_modal('/save_Book_publisher')"><i class="fa fa-plus"></i></button>

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="phymedium">Physical Medium</label>
                                    <select class="form-control" id="phymedium" name="phymedium" value="{{old('phymedium')}}">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    @foreach($PhyMdm_data as $item)
                                            <option value="{{ $item->id }}">{{ $item->phymedium}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('phymedium') }}</span>
                                </div>
                                <div class="form-group col-md-2">
                                <label for="new_phymedium">New Physical Medium</label> 
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal" data-backdrop="static" data-opp_name="Book Physical Medium"
                                onclick="add_by_modal('/save_Book_phymedium')"><i class="fa fa-plus"></i></button>

                                </div>

                            </div>

                            <div class="form-row">


                            <div class="form-group col-md-4">
                                    <label for="dewey_decimal">Dewey Decimal Classification</label>
                                    <select class="form-control" id="dewey_decimal" name="dewey_decimal" value="{{old('dewey_decimal')}}">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    @foreach($DDC_data as $item)
                                            <option value="{{ $item->id }}">{{ $item->dewey_decimal}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('dewey_decimal') }}</span>
                                </div>
                                <div class="form-group col-md-2">
                                <label for="new_dewey_decimal"> New DDC </label> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal" data-backdrop="static" data-opp_name="Book Dewey Decimal"
                                onclick="add_by_modal('/save_Book_Ddecimal')"><i class="fa fa-plus"></i></button>

                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label for="purchase_date" >Purchase Date</label>
                                    <input class="form-control" type="date" name="purchase_date" value="{{old('purchase_date')}} id="purchase_date">
                                    <span class="text-danger">{{ $errors->first('purchase_date') }}</span>
                                </div>
                                <div class="form-group col-md-2"></div>
                              
                            </div>

                            <div class="form-row">
                                
                                <div class="form-group col-md-4">
                                    <label for="edition">Edition</label>
                                    <select class="form-control" id="edition" name="edition">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2"></div>
                                <div class="form-group col-md-4">
                                    <label for="price">Price</label>
                                    <input type="value" class="form-control" name="price"  value="{{old('price')}}" placeholder="Price:">
                                    <span class="text-danger">{{ $errors->first('price') }}</span>
                                </div>


                            </div>
                            <div class="form-row">

                            <div class="form-group col-md-4">
                                    <label for="publishyear">Publication year</label>
                                    <input class="form-control" type="year" name="publishyear"value="{{old('publishyear')}}" id="purchasedate">
                                    <span class="text-danger">{{ $errors->first('publishyear') }}</span>
                                </div>
                                <div class="form-group col-md-2"></div>
                                <div class="form-group col-md-4">
                                    <label for="phy_details">Physical Details</label>
                                    <input type="text" class="form-control" name="phydetails" value="{{old('phydetails')}}" placeholder="Physical Details">
                                    <span class="text-danger">{{ $errors->first('phydetails') }}</span>
                                </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                <label for="rackno">Rack No</label>
                                    <select class="form-control" id="rackno" name="rackno">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2"></div>
                                <div class="form-group col-md-4">
                                <label for="rowno">Row No</label>
                                    <select class="form-control" id="rowno" name="rowno">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="note">Note</label>
                                    <textarea class="form-control" id="note" name="note" placeholder="Note" value="{{old('note')}}" rows="3"></textarea>
                                    <span class="text-danger">{{ $errors->first('note') }}</span>
                                </div>

                            </div>


                        <div class="box-footer clearfix pull-right">
                            <button type="submit" class="btn btn-primary btn-md" value="Save" id="save_book" onclick="showAlert();" >
                            <i class="fa fa-floppy-o"></i> Save</button>
                            &nbsp; &nbsp;
                            <button type="button" class="btn btn-warning btn-md" id="reset_book">
                            <i class="fa fa-times"></i> Reset</button>
                        </div>   
                        </form>
                            </div>
                            
                            
                        </div>
                    </section>
                        
                       
                        
                    </div>
                     @include('modal_add')
                </section>
            </div>
  
                   
                    <!-- --------------------------end section1----------------------------------------------- -->
                    @include('Support.import_export_modal')
                
            <!-- /.row (main row) -->
           

@endsection

@section('js')
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.0.1/dist/js/adminlte.min.js"></script>

<!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.js"></script> -->
<!-- <script >
$("#save_book").click(function(){

    var newbook = {
                    book_aNo: $("#InputCusID").val().trim(),
                    book_isbn: $("#InputCusName").val().trim(),
                    book_title: $("#InputAddress").val().trim()
                    book_Author: $("#InputAddress").val().trim()
                };

    var ajaxConfig = {
                    method: "POST",
                    url:"http://localhost:8000/savebook",
                    async: true,
                    contentType: "application/json",
                    data: JSON.stringify(newbook)
                }


                $.ajax(ajaxConfig).done(function(response,statusText,jxhr){
                    alert("Added Successfully");
                    loadAllCustomers();
                    $('button[type="reset"]').trigger("click");
                }).fail(function(jxhr,statusText,error){
                    alert("Unable to save the customer, try again");
                    console.log(error);
                });

}
</script> -->

        <!-- <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Success! message sent successfully.
        </div> -->
        




        
@endsection
