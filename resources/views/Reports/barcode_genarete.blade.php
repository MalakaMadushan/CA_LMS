
<div class="container">
<!-- <table style="border: 1px solid black;text-align:center;"> -->
<table>
  @for($j='10000'; $j<'10500'; $j++)
  <tr>
  <td ><br>&nbsp;&nbsp;{!!DNS1D::getBarcodeSVG("BKPS-".$j, "C128",1,70)!!}&nbsp;&nbsp;</td>
  <td ><br>&nbsp;&nbsp;{!!DNS1D::getBarcodeSVG("BKPS-".++$j, "C128",1,70)!!}&nbsp;&nbsp;</td>
  <td ><br>&nbsp;&nbsp;{!!DNS1D::getBarcodeSVG("BKPS-".++$j, "C128",1,70)!!}&nbsp;&nbsp;</td>
  <td ><br>&nbsp;&nbsp;{!!DNS1D::getBarcodeSVG("BKPS-".++$j, "C128",1,70)!!}&nbsp;&nbsp;</td>
  
  </tr>
  @endfor
</table>

</div>