@extends('layouts.app')

@section('content')

<section class="content">
    <div class="row">
                <!-- --------------------------- section 1------------------------------------- -->
        <section class="col-lg-12 connectedSortable">

            <div class="box box-info">
                <div class="box-header ">
                   <div class="pull-left header"> <h4> <i class="fa fa-search"> Import Books From Excel File</i></h4>
                    <div class="card-body">
                        <form action="/import_book" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" class="form-control">
                            <input type="text" name="txt3" class="form-control">
                            <textarea rows="4" cols="30" name="txt1" id="txt1" class="form-control"></textarea>
                            <br>
                            <button class="btn btn-success">Import Book Data</button>
                            <a class="btn btn-warning" href="{{ route('export') }}">Export Book Data</a>
                            <button name="btn1" class="btn btn-warning btn1" id="view_bdtaa" >view Book Data</button>
                        </form>
                        <br><br><br>
                        <!-- <div>{!!DNS1D::getBarcodeHTML(8889899, 'C39')!!}</div><br>
                        <div>{!!DNS2D::getBarcodeSVG(5436564, 'QRCODE')!!}</div><br> -->
                        @php
                         $name3 = Input::get('txt3');
                         echo $name3;
                         echo DNS1D::getBarcodeSVG("Shanuka123456", "C128",1,70);
                        @endphp
                        
                        <br><br><br>
                        <!-- <div>{!!DNS1D::getBarcodeHTML("Shanuka123456", "C39",1,70,"Black", true)!!}</div><br>
                        <div>{!!DNS1D::getBarcodeHTML("Shanuka123456", "C39+",1,70,"Black", true)!!}</div><br>
                        <div>{!!DNS1D::getBarcodeHTML("Shanuka123456", "C128",1,70,"Black", true)!!}</div><br>
                        <div>{!!DNS1D::getBarcodeSVG("Shanuka123456", "C128",1,70)!!}</div><br>
                        <div>{!!DNS1D::getBarcodeHTML("4445645656", "CODE11")!!}</div><br>
                         -->
            
                   
                        <!-- <div>{!!DNS1D::getBarcodeHTML(6435636, 'MSI+')!!}</div><br>
                        <div>{!!DNS1D::getBarcodeHTML(25547, 'POSTNET')!!}</div><br> -->


                        
                    </div>
                   </div>
                </div>
                

                <div class="box-body">
                    <div class="form-row">
                    @if(!empty($headers))
                        <table>
                            <tr>
                                @foreach($headers as $h)
                                    <th>{{$h}}</th>
                                @endforeach
                            </tr>

                            @foreach($data as $d)
                                <tr>
                                    @foreach($d as $v)
                                        <td>{{$v}}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </table>
                    @endif
                    </div>

                </div>
            </div>
                <!-- --------------------------end section1----------------------------------------------- -->
        </section>
        @include('flash_massage')
    </div>


</section>

@endsection