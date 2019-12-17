 <!------------------------------ Imort Book modal--------------------------- -->
 <div class="modal fade" id="import_book_excel" tabindex="-1" role="dialog" aria-labelledby="categoryModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h3 class="modal-title" id="opp_title"></h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  <h4> <i class="fa fa-file-excel-o"> Import Books From Excel File</i></h4>
                  </div>
                  <form name="importBook" id="importBook" method="post" action="/import_book" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="modal-body">
                        <div class="box-header ">
                        <div class="pull-left header"> 
                              
                              <div class="card-body">
                              <div class="form-group">
                                    <input type="file" name="file" class="form-control">
                                    <input type="text" name="txt1" class="form-control">
                              </div>
                              <br>

                              </div>
                        </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                  <button class="btn btn-success" type="submit">Import Book Data</button>
                  <!-- <a class="btn btn-success" href="{!! url('/import_book') !!}">Import Book Data</a> -->
                  <a class="btn btn-warning" href="{{ route('export') }}">Export Book Data</a>
                  
                  
                  </div>
                  </form>
                  </div>
            </div>
</div>
                            <!-- ------------------------------------------------------------------------ -->