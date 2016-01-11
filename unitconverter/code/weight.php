<html>

<head>
	<link href="code.css" rel="stylesheet">
<title>Unit Converter - Weight</title>

</head>

<body>
<form action=" " method="POST">
<h4 align=center>WEIGHT CONVERSION</h4>
<table align=center>
<tr>
<td><label>VALUE </label></td>
<td><input type="text" cols = "3px" class = "val"></td>
</tr>
<tr>
<td><label>FROM </label></td>
<td>
<select name="from" class="uni">
            <option value=0>--select--</option>
            <option value=1>mg</option>
            <option value=2>g</option>
            <option value=3>kg</option>
            <option value=4>Tonne</option>
            <option value=5>Grains</option>
            <option value=6>Ounces</option>
            <option value=7>Ponds</option>
            <option value=8>Stones</option>
</select>
</td>
</tr>
<tr>
<td><label>TO</label></td>
<td>
<select name="to" class="uni">
            <option value=0>--select--</option>
            <option value=1>mg</option>
            <option value=2>g</option>
            <option value=3>kg</option>
            <option value=4>Tonne</option>
            <option value=5>Grains</option>
            <option value=6>Ounces</option>
            <option value=7>Ponds</option>
            <option value=8>Stones</option>
</select>
</td>
</tr>

</table>
<input type="submit" value="Convert" class="button"></p>

<?php
if(isset($_POST['val3']))
{
$val=$_POST['val3'];
if(!preg_match('/^[0-9.]/',$val3))
{
 echo '<script language="JavaScript">'."\n".'alert("Invalid input");'."\n";
 echo "window.location=('unit.php');\n";
 echo '</script>';
}
$from=$_POST['from'];
$to=$_POST['to'];
if($from==0 || $to)
{
echo '<script language="JavaScript">'."\n".'alert("Please select a base unit");'."\n";
echo '</script>';
}
else
{
function assign($from,$to,$val3)
{
switch ($from)
{
case 1:
$fromu="mg";$mg=1;$g=0.001;$kg=0.000001;$to=0.000000001;$gr=0.015432358;$ou=0.000035273966;$po=0.000002204623;$st=0.000000157473;break;
case 2:
$fromu="g";$mg=1000;$g=1;$kg=0.001;$to=0.000001;$gr=15.432358;$ou=0.035273966;$po=0.002204623;$st=0.000157473;break;
case 3:
$fromu="kg";$mg=1000000;$g=1000;$kg=1;$to=0.001;$gr=15432.358;$ou=35.273966;$po=2.204623;$st=0.157473;break;
case 4:
$fromu="Tonne";$mg=1000000000;$g=1000000;$kg=1000;$to=1;$gr=15.432358;$ou=0.035273966;$po=0.002204623;$st=0.000157473;break;
case 5:
$fromu="Grains";$mg=64.891;$g=0.064891;$kg=0.000064891;$to=0.000000064891;$gr=1;$ou=0.002285714;$po=0.000142857;$st=0.0000102041;break;
case 6:
$fromu="Ounces";$mg=28349.52;$g=28.34952;$kg=0.02834952;$to=0.00002834952;$gr=437.5;$ou=1;$po=0.0625;$st=0.004464286;break;
case 7:
$fromu="Pounds";$mg=453592.37;$g=453.59237;$kg=0.45359237;$to=0.00045359237;$gr=7000;$ou=16;$po=1;$st=0.071428571;break;
case 8:
$fromu="Stones";$mg=6350293.18;$g=6350.29318;$kg=6.35029318;$to=0.00635029318;$gr=98000;$ou=224;$po=14;$st=1;break;
}

switch($to){
	case 1:
		$tou =  "mg";
		return (double)($val3*$mg) ;
		break;
	case 2:
		$tou = "g" ;
		return  (double)($val3*$g);
		break;
	case 3:
		$tou =  "kg";
		return (double)($val3*$kg) ;
		break;
	case 4:
		$tou =  "Tonne";
		return (double)($val3*$to) ;
		break;
	case 5:
		$tou = "Grains" ;
		return  (double)($val3*$gr);
		break;
	case 6:
		$tou =  "Ounces";
		return (double)($val3*$ou) ;
		break;
	case 7:
		$tou =  "Pounds";
		return  (double)($val3*$po);
		break;
	case 8:
		$tou = "Stones" ;
		return  (double)($val3*$st);
		break;
	default:
		break;
}
/* echo "<br><br><table align=center>
 <tr><td><h3> ",$val3," ",$fromu," equivalent is </h3></td></tr>
 <tr align=right><td><u> ",(double)($val3*$mg),"</u> milligram</td></tr>
 <tr align=right><td><u> ",(double)($val3*$g),"</u> gram</td></tr>
 <tr align=right><td><u> ",(double)($val3*$kg),"</u> kilogram</td></tr>
 <tr align=right><td><u> ",(double)($val3*$to),"</u> Tonne</td></tr>
 <tr align=right><td><u> ",(double)($val3*$gr),"</u> Grains</td></tr>
 <tr align=right><td><u> ",(double)($val3*$ou),"</u> Ounces</td></tr>
 <tr align=right><td><u> ",(double)($val3*$po),"</u> Pounds</td></tr>
 <tr align=right><td><u> ",(double)($val3*$st),"</u> Stones</td></tr></table>";
*/
}
echo  "<center>".assign($from,$to,$val)."</center>";
}
}
?>
</form>
</body>

</html>
