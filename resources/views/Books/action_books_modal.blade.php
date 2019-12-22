
<!-- start edit Modal--------------------------------------------------------------------------------->
<div id="formModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <div class="pull-left header"> <h4 class="modal-title"><i class="fa fa-user"> Book Details</i></h4></div>
            </div>
            <span id="form_result"></span>
            <form method="post" id="sample_form"  enctype="multipart/form-data">
            {{ csrf_field() }}
                        
                <div class="modal-body">
                    <div class="row">        
                        <section class="col-lg-12 connectedSortable">
                            <div class="col-md-12 col-lg-12 connectedSortable">
                                <div class="box box-info">  
                                    <div class="box-body">
                                        @include('flash_massage')
                                
                                        <div class="form-row">

                                            <div class="form-group col-md-4">
                                                <label for="accessionNo">Accession Number</label>
                                                <input type="text" class="form-control" id="book_aNo" name="accessionNo" value="{{old('accessionNo')}}" placeholder="Accession Number:">
                                                <span class="text-danger" >{{ $errors->first('accessionNo') }}</span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label"></label>
                                                        <!-- <input type="radio" class="form-check-input" name="br_qr_code" value="bar_code"> BarCode
                                                        <input type="radio" class="form-check-input" name="br_qr_code" value="qr_code"> QRCode -->
                                                        <!-- <button class="btn btn-primary"><i class="fa fa-circle-o">Genarete</i></button> -->

                                                </div>
                                                <div id="code_view_bq" class="form-group">
                                                {!!DNS1D::getBarcodeSVG("Code Aider", "C128",1,50)!!}
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
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
                                            <label for="new_category">Category</label>
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
                                            <label for="new_language">Language</label>
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
                                            <label for="new_publisher">Publisher</label>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal" data-backdrop="static" data-opp_name="Book Publisher"
                                            onclick="add_by_modal('/save_Book_publisher')"><i class="fa fa-plus"></i></button>

                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="phymedium">Physical Medium</label>
                                                <select class="form-control" id="phymedium" name="phymedium" value="{{old('phymedia')}}">
                                                <option value="" selected disabled hidden>Choose here</option>
                                                @foreach($PhyMdm_data as $item)
                                                        <option value="{{ $item->id }}">{{ $item->phymedia}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">{{ $errors->first('phymedia') }}</span>
                                            </div>
                                            <div class="form-group col-md-2">
                                            <label for="new_phymedium">Medium</label> 
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal" data-backdrop="static" data-opp_name="Book Physical Medium"
                                            onclick="add_by_modal('/save_Book_phymedium')"><i class="fa fa-plus"></i></button>

                                            </div>

                                        </div>

                                        <div class="form-row">


                                        <div class="form-group col-md-4">
                                                <label for="dewey_decimal">Dewey Decimal</label>
                                                <select class="form-control" id="dewey_decimal" name="dewey_decimal" value="{{old('ddecimal')}}">
                                                <option value="" selected disabled hidden>Choose here</option>
                                                @foreach($DDC_data as $item)
                                                        <option value="{{ $item->id }}">{{ $item->ddecimal}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">{{ $errors->first('ddecimal') }}</span>
                                            </div>
                                            <div class="form-group col-md-2">
                                            <label for="new_dewey_decimal">DDC </label> 
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
                                            <div class="form-group col-md-2"></div>


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
                                            <div class="form-group col-md-2"></div>
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
                                            <div class="form-group col-md-2"></div>
                                            

                                        </div>
                                            <div class="form-group col-md-12">
                                                <label for="note">Note</label>
                                                <textarea class="form-control" id="note" name="note" placeholder="Note" value="{{old('note')}}" rows="3"></textarea>
                                                <span class="text-danger">{{ $errors->first('note') }}</span>
                                            </div>

                                </div>
                                
                             </div>
                        </div>
                    </section>
                </div>
            </div>
          
            <div class="modal-footer">
                <div class="box-footer clearfix pull-right">
                  <input type="hidden" name="action" id="action" />
                  <input type="hidden" name="hidden_id" id="hidden_id" />
                  <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
                    &nbsp; &nbsp;
                    <!-- <button type="button" class="btn btn-warning btn-md" id="reset_book">
                    <i class="fa fa-times"></i> Reset</button> -->
                </div>   
            </div>
        </form>
        </div>
    </div>
</div>
<!-- end modal ------------------------------------------------------------------------------------------------------>


