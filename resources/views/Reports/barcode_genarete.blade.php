
<div class="container">
<table style="border: 1px solid black;text-align:center;">
  @for($j='10000'; $j<'12000'; $j++)
  <tr style="margin-top: 5px;">
  <td style="border: 1px solid black;">&nbsp;&nbsp;{!!DNS1D::getBarcodeSVG("BKPS-".$j, "C128",1,70)!!}&nbsp;&nbsp;</td>
  <td style="border: 1px solid black;">&nbsp;&nbsp;{!!DNS1D::getBarcodeSVG("BKPS-".++$j, "C128",1,70)!!}&nbsp;&nbsp;</td>
  <td style="border: 1px solid black;">&nbsp;&nbsp;{!!DNS1D::getBarcodeSVG("BKPS-".++$j, "C128",1,70)!!}&nbsp;&nbsp;</td>
  <td style="border: 1px solid black;">&nbsp;&nbsp;{!!DNS1D::getBarcodeSVG("BKPS-".++$j, "C128",1,70)!!}&nbsp;&nbsp;</td>
  </tr>
  @endfor
</table>

</div>