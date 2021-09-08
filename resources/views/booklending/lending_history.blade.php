@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Book Lending</h2> 
                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                    <li><a ><i class="fa fa-book"></i> Book Lending</a></li>
                    <li class="active"><i class="fa fa-book"></i> issue Book</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- --------------------------- section 1------------------------------------- -->
                <section class="col-lg-12 connectedSortable">
 
                    <div class="box box-info">
                        <div class="box-header ">
                           <div class="pull-left header"> <h4> <i class="fa fa-book"> Issue Books</i></h4></div>
                        </div>

                        <div class="box-body">

<!-----------------------------------------form start--------------------------------------------------->
                            <form class="form-inline" id="form_barrow" onSubmit="return false;">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="form-group col-md-7 text-left">
                                    <label for="issuedte">Date : </label>&nbsp;
                                    <input type="date" class="form-control" name="issuedte" id="issuedte">&nbsp;
                                    <label for=""> Member ID : </label>&nbsp;
                                    <input type="text" class="form-control" id="member_id" placeholder="Member ID">
                                    <input type="hidden" name="member_id_select" class="form-control" id="member_Name_id">
                                
                                    <button type="button" class="btn btn-primary" id="addbarrowmember"><i class="fa fa-plus"></i></button>
                                    <button type="button" class="btn btn-success" id="addbarrowmember_serch"><i class="fa fa-search"></i></button> 
                                    
                                </div>

                                <div class="form-group col-md-5 text-left">
                                    <label for="">Books ID : </label>&nbsp;
                                    <input type="text" class="form-control" id="bookB_details" onfocus="this.value=''" placeholder="Books ID">
                                
                                    <button type="button" class="btn btn-primary" id="addbarrow" data-toggle="tooltip" data-placement="top"><i class="fa fa-plus"></i></button>
                                    <button type="button" class="btn btn-success" id="addbarrow_serch"><i class="fa fa-search"></i></button>

                                </div>
                            </div>
                            <!-- <div class="row"> -->
                                <div class="col-md-12 text-center mt-2">
                                    <h5><span class="text-danger" id="issue_error"></span></h5>
                                    <h5><span class="text-success" id="issue_success"></span></h5>
                                </div> 
                            <!-- </div> -->

                               
                                <br><br>
                                <div class="row text-center">
                                    <div class="col-lg-12">
                                    <!-- small box -->
                                        <div class="small-box bg-aqua" style="height:2.5rem;">
                                            <div class="d-flex">
                                            
                                            <h4 id="member_Name"class="d-flex p-2 text-center text-body"></h4>
                                            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
                                            
                                            </div>
                                        </div>


                                </div></div>

                                <div class="form-row ">
                                    
                                    <table class="table table-hover" id="BookTable">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Accession No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Authors</th>
                                        <th scope="col">&nbsp;</th>
                                            <!-- <td><a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </a></td> -->
                                        </tr>    
                                        </thead>

                                        <tbody class="tbody_data" id="bookdata">
                                               
                                        </tbody>
                                    </table>
                                </div>

        @include('flash_massage')
<!-- ======================================================================================================================== -->
        @push('scripts')

            <script>
            $(document).ready(function() {

                    document.getElementById("member_id").focus();
                // -------------------------date------------------
                var today = new Date();
                var tomorrow = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
                var dd = today.getDate();
                var mm = today.getMonth()+1; //January is 0!
                var yyyy = today.getFullYear();
                if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = mm+'/'+dd+'/'+yyyy;
                $('#issuedte').attr('value', today);
                // -----------------------------------------------

                var inputm = document.getElementById("member_id");
                inputm.addEventListener("keyup", function(event) {
                if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("addbarrowmember").click();
                $('#member_id').val('');
                document.getElementById("bookB_details").focus();
                }
                $("#BookTable tbody").empty();

                });
                    var input = document.getElementById("bookB_details");
                    input.addEventListener("keyup", function(event) {
                    if (event.keyCode === 13) {
                    event.preventDefault();
                    document.getElementById("addbarrow").click();
                    $('#bookB_details').val('');
                    document.getElementById("bookB_details").focus();
                }
                });
                });
                // ----------------------------------------------------------------------------

            $("#member_id").change(function(){
                var memberid = $("#member_id").val();
                $('#bookB_details').val('');
                $('#member_Name_id').val('');
                $('#member_Name').html('');
                $('#issue_error').html('');
                $('#issue_success').html('');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    data: { memberid: memberid },
                    url: '/member_view',
                    success: function(response){
            
                        var mem_detail=response.member_id+" - "+response.member_nme+" ("+response.member_adds+")";
                        $('#member_Name').html(mem_detail);
                        $('#member_Name_id').val(response.member_id);
                        $('#member_id').val('');
                    
                    },
                    error: function(response){
                    $('#issue_error').html('Member not found !');
                    $('#member_id').val('');
                    document.getElementById("member_id").focus();
                    }
                });
            });
            // ------------------------------------------------------------------------

                $('#addbarrow').on("click",function(){
                        var bookid = $("#bookB_details").val();
                        var member_id1 = $("#member_Name_id").val();
                        var op ="";
                        var bexsist=false;
                        $('#issue_error').html('');
                        $('#issue_success').html('');
                    
                        if($('#member_Name_id').val())
                        {
                            var rowCount = $('#BookTable tr').length;
                            if(rowCount<4) //3+1 must get by settings
                            {
                            var oTable = document.getElementById('BookTable');
                            var rowLength = oTable.rows.length;
                            
                            for (j = 1; j < rowLength; j++)
                            {
                                var oCells = oTable.rows.item(j).cells;
                                var cellVal = oCells.item(1).innerHTML;
                                if(bookid.toUpperCase()==cellVal.toUpperCase())
                                { 
                                    bexsist=true;   
                                }
                            }

                            if(bexsist==false)
                            {
                                // -------------------------------------------------------
                                $.ajaxSetup({
                                        headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                        });

                                        $.ajax({
                                        type:'post',
                                        url: '/barrowbook_d',
                                        data:{
                                        bookid: bookid,
                                        member_id1: member_id1
                                        },
                                        success: function(data2){
                                    
                                        for(var i=0;i<data2.length;i++){
                                        op+='<tr>';
                                        op+='<td>'+data2[i].id+'</td><td>'+data2[i].accessionNo+'</td><td>'+data2[i].book_title+'</td><td>'+data2[i].authors+'</td><td><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>';
                                        op+='</tr>';
                                        }
                                        $("#BookTable tbody").append(op);
                                        console.log(data2);
                                    },
                                        error: function(data2){
                                        $('#issue_error').html('Book Not Found');   
                                        console.log("Error Occurred");
                                        }
                                    });
                        // -------------------------------------------------------------
                            }
                            else{$('#issue_error').html('Book Allready Exsists');}
                    
                            }
                            else{$('#issue_error').html('* Maximam Books allowd');}
                            }
                            else{$('#issue_error').html('* Select Member First');
                            document.getElementById("member_id").focus();
                        }


                    });
                    // -----------------------------------------------------
                    $('#issue_book').on("click",function(){

                        var oTable = document.getElementById('BookTable');
                        var rowLength = oTable.rows.length;
                        var mem_id = $("#member_Name_id").val();
                        var dteissue = $("#issuedte").val();
                        //var dteissue =new Date().toLocaleDateString();
                        for (j = 1; j < rowLength; j++)
                        {
                            var oCells = oTable.rows.item(j).cells;
                            var Bookid = oCells.item(0).innerHTML;
                            // -----------------------
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });

                            $.ajax({
                                method: 'POST',
                                data:{
                                    Bookid: Bookid,
                                    mem_id: mem_id,
                                    dteissue: dteissue
                                
                                    },
                                url: '/issue_save',
                                success: function(response){
                                $('#issue_success').html("Books Issue Sucessfully");
                                $('#bookB_details').val('');
                                $('#member_Name_id').val('');
                                $('#member_Name').html('');
                                $('#issue_error').html('');
                                $("#BookTable tbody").empty();
                                document.getElementById("member_id").focus();


                                },
                                error: function(response){
                                $('#issue_error').html('Books Issued Fali!');
                                }
                            });
                            }
                        });
            </script>
        @endpush
<!-- ======================================================================================================================== -->
                                
                            
                            <div class="box-footer clearfix pull-right">
                                    <button type="button" class="btn btn-primary btn-md" id="issue_book">
                                    <i class="fa fa-floppy-o"></i> Save</button>
                                    &nbsp; &nbsp;
                                    <button type="button" class="btn btn-warning btn-md" id="reset_issue">
                                    <i class="fa fa-times"></i> Reset</button>
                            </div> 
                            
                            </form>
                        
    <!-------------------------------form End-------------------------------------------------------------------------------------->                    
                    </div>
                </div>
                   

                </section>



            </div>
   

        </section>
        <!-- /.content -->
    </div>
@endsection
