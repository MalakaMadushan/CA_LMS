
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="opp_title"></h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form name="addmodal" id="modalform" method="post" action="#">
        {{ csrf_field() }}
        <div class="modal-body">
        <label for="category" id="opp_lbl"></label>
            <input type="text" class="form-control" name="new_data" placeholder="Enter New" value="{{old('new_data')}}">
            <span class="text-danger">{{ $errors->first('new_data') }}</span> <br>
    
            
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save &nbsp;<i class="fa fa-floppy-o"></i></button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close &nbsp;<i class="fa fa-times"></i></button>
            
        </div>
        </form>
        </div>
    </div>
    </div>
