
<div class="container">

<br/>

<table class="table " id="mdatatable">
        <thead class="thead-dark">
            <tr>
            </tr>
        </thead>
        <tbody>

        
        @for ($i = 0; $i< 100; $i++)

            <tr>
            
                <td>&nbsp;&nbsp;{!!DNS1D::getBarcodeSVG($code[$i], "C128",1,50)!!} &nbsp;&nbsp;</td><br>
                <td>&nbsp;&nbsp;{!!DNS1D::getBarcodeSVG($code[++$i], "C128",1,50)!!}&nbsp;&nbsp;</td><br>
                <td>&nbsp;&nbsp;{!!DNS1D::getBarcodeSVG($code[++$i], "C128",1,50)!!}&nbsp;&nbsp;</td><br>
                <td>&nbsp;&nbsp;{!!DNS1D::getBarcodeSVG($code[++$i], "C128",1,50)!!}&nbsp;&nbsp;</td><br>
               
            </tr>
            @endfor
        </tbody>
    </table>
   



</div>