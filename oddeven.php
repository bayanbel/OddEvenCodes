<html>
    <head>
        <title>even</title>
    </head>
    <body>
<table border='3' align="center">
<tr>
<td>Odd Numbers</td><!--Cell title-->
<td>Even Numbers</td><!--Cell title-->
<td width="100px" align="center">*5</td><!--Cell title-->
<td width="100px" align="center">*10</td><!--Cell title-->
</tr>
<?php
$i = 1;
while($i<=100){
echo "<tr>";
if($i % 2 == 1){
echo "<td align=center>$i</td>";
echo "<td></td>";
	$x=$i*5;
echo "<td align=center>$x</td>";
echo "<td></td>";




}else

{
echo "<td></td>";
echo "<td align=center>$i</td>";

	echo "<td></td>";
	$y=$i*10;
echo "<td align=center>$y</td>";

}
	echo "</tr>";
$i++;
}
?>

</table>
	

			   
			     </body>
</html>