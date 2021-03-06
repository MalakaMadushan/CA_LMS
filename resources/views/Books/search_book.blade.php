@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Books</h2> 
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-book"></i> Books</a></li>
                    <li class="active"><i class="fa fa-search"></i> Search Book</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

             <!-- --------------------------- section 1------------------------------------- -->
             <section class="col-lg-12 connectedSortable">
 
        <div class="box box-info">
         <div class="box-header ">
            <div class="row">
                    <div class="pull-left header col-md-10"> 
                       <div class="pull-left header"> <h4> <i class="fa fa-search"> Search Books</i></h4></div>
                        <div class="pull-right">
                            
                        </div>
                    </div>
                     <div class="pull-right header col-md-2"> 
                        <div class="form-check-inline">
                           <!-- <a href="{{ route('pdfbarcodeall',['download'=>'pdf']) }}" target="_blank"class=""><i class="fa fa-file-pdf-o m-right-xs"></i>PDF</a>&nbsp; -->
                            <a href="#" target="_blank"class=""><i class="fa fa-file-excel-o m-right-xs"></i>Excel</a>&nbsp;
                            <a href="#" target="_blank"class=""><i class="fa fa-file-word-o m-right-xs"></i>Word</a>&nbsp;
                            <h4><button class="btn btn-warning btn-md" name="create_recode" id="create_recode" ><i class="fa fa-plus"></i></button></h4>

                        </div>      
                    </div>
            </div>
            
         </div>

            <div class="box-body">
                <div class="form-row">
                                   
                <table class="table form-check-inline " id="book_datatable">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Book ID</th>
                                <th scope="col">Accession No</th>
                                <!-- <th scope="col">Barcode</th> -->
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Category</th>
                                <th scope="col">Language</th>
                                <th scope="col">Publisher</th>
                                <th scope="col">Place</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @push('scripts')
                            <script>

                                $(document).ready(function() {
                                
                                // ----------view-------------------------
                                $('#book_datatable').DataTable({
                                processing: true,
                                serverSide: true,

                                ajax:{
                                url: "{{ route('search_book.allbook') }}",
                                },
                                columns:[
                                    {data: "id",name: "id"},
                                    {data: "accessionNo",name: "accessionNo"},
                                    // {data: "barcode",name: "barcode",orderable: false},
                                    {data: "book_title",name: "book_title"},
                                    {data: "authors",name: "authors"},
                                    {data: "category",name: "category"},
                                    {data: "language",name: "language"},
                                    {data: "publisher",name: "publisher"},
                                    {data: "rackno",name: "rackno"},
                                    {data: "status",name: "status",orderable: false},
                                    {data: "action",name: "action",orderable: false}
                                ],
                                "createdRow": function( row, data, dataIndex ) {
                                    if ( data['status'] == "Removed" ) {        
                                        $('td', row).addClass('bg-red');
                                        //$(row).addClass('bg_red');
                                    }
     
                                 }
                                });
                                
                               
                                // -----------------insert--------------------
                                $('#create_recode').click(function(){
                                $('.modal-title').text("Add New Book");
                                    $('#action_button').val("Add");
                                    $('#action').val("Add");
                                    $('#formModal').modal('show');
                                });
                                $('#sample_form').on('submit', function(event){
                                event.preventDefault();
                                
                                if($('#action').val() == 'Add')
                                {
                                    // alert("ok");
                                    $.ajax({
                                        url:"{{ route('search_book.store') }}",
                                        method:"POST",
                                        data: new FormData(this),
                                        contentType: false,
                                        cache:false,
                                        processData: false,
                                        dataType:"json",
                                        success:function(data)
                                        {
                                            var html = '';
                                            if(data.errors)
                                            {
                                                html = '<div class="alert alert-danger">';
                                                for(var count = 0; count < data.errors.length; count++)
                                                    {
                                                        html += '<p>' + data.errors[count] + '</p>';
                                                    }
                                                html += '</div>';
                                            }
                                            if(data.success)
                                            {
                                                html = '<div class="alert alert-success">' + data.success + '</div>';
                                                $('#sample_form')[0].reset();
                                                $('#book_datatable').DataTable().ajax.reload();
                                            }
                                            $('#form_result').html(html);
                                        }
                                    })
                                }

                                });
                                // --------------------------------------


                                });


                                </script>
                            @endpush
                                                                    
                         </tbody>
                        </table>
                        </div>               
                        </div>
                      

                    </div>
                   
                    <!-- --------------------------end section1----------------------------------------------- -->
                </section> 
            </div>
            <!-- /.row (main row) -->
        </section>
        <!-- /.content -->
    </div>

    @include('Books.action_books_modal')
    <!-- start book modal delete-------------------------------------------------------------------------------------------- -->
   
                            <div class="modal fade" id="book_delete" tabindex="-1" role="dialog" aria-labelledby="phymediumModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                            <h4 class="modal-title" id="myModalLabel">Remove Book</h4>
                                        </div>
                                        <form method="post" action="/deleteBook">
                                         {{ csrf_field() }}
                                        <div class="modal-body">

                                                <input type="hidden" id="book_id" name="book_id">
                                                <div class="row form-group">
                                                    <div class="col-md-6">
                                                        <h5 id="myModalLabel">Are you sure Remove Book - </h5>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h4><label type="text"  id="bookname"></label></h4>
                                                    </div>
                                                </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> &nbsp; Delete</button>
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                    </div>



@endsection
