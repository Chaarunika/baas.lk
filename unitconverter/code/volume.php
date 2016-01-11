<html>
<head>
	<link href="code.css" rel="stylesheet">
<title>Unit Converter - Volume</title>
</head>

<body>
<form action=" " method="POST">
<h4 align=center><font color=grey>VOLUME CONVERSION</font></h4>
<table align=center>
<tr>
<td><label>VALUE </label></td>
<td><input type="text" name="val6" cols = "3px" class = "val"></td>
</tr>
<tr>
<td><label>FROM</label></td>
<td>
<select name="from" class="uni">
            <option value=0>--select--</option>
            <option value=1>cm3</option>
            <option value=2>m3</option>
            <option value=3>Feet3</option>
            <option value=4>Gallons(UK)</option>
            <option value=5>Gallons(US)</option>
            <option value=6>Inches3</option>
            <option value=7>Litres</option>
            <option value=8>Yards3</option>
</select>
</td>
</tr>

<tr>
<td><label>TO</label> </td>
<td>
<select name="to" class="uni">
            <option value=0>--select--</option>
            <option value=1>cm3</option>
            <option value=2>m3</option>
            <option value=3>Feet3</option>
            <option value=4>Gallons(UK)</option>
            <option value=5>Gallons(US)</option>
            <option value=6>Inches3</option>
            <option value=7>Litres</option>
            <option value=8>Yards3</option>
</select>
</td>
</tr>
</table>
<input type="submit" value="Convert" class="button">

<?php
if(isset($_POST['val6']))
{
$val=$_POST['val6'];
if(!preg_match('/^[0-9.]/',$val6))
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
function assign($from,$to,$val6)
{
switch ($from)
{
case 1:
$fromu="cm<sup>3</sup>";$cm=1;$me=0.000001;$ft=0.00003532;$gk=0.00022;$gs=0.000264;$in=0.061024;$li=0.001;$ya=0.000001308;break;
case 2:
$fromu="m<sup>3</sup>";$cm=1000000;$me=1;$ft=35.32;$gk=220;$gs=264;$in=61024;$li=1000;$ya=1.308;break;
case 3:
$fromu="Feet<sup>3</sup>";$cm=28317;$me=0.028317;$ft=1;$gk=6.228835;$gs=7.48052;$in=28.317;$li=28.317;$ya=0.037037;break;
case 4:
$fromu="Gallons(UK)";$cm=4546;$me=0.004546;$ft=0.160544;$gk=1;$gs=1.20095;$in=277.4194;$li=4.546;$ya=0.005946;break;
case 5:
$fromu="Gallons(US)";$cm=3785;$me=0.003785;$ft=0.133681;$gk=0.832674;$gs=1;$in=231;$li=3.785;$ya=0.004951;break;
case 6:
$fromu="Inches<sup>3</sup>";$cm=16;$me=0.000016;$ft=0.000579;$gk=0.003605;$gs=0.004329;$in=1;$li=0.016;$ya=0.000021;break;
case 7:
$fromu="Litres<sup>3</sup>";$cm=1000;$me=0.001;$ft=0.03532;$gk=0.22;$gs=0.264;$in=61.024;$li=1;$ya=0.001308;break;
case 8:
$fromu="Yards";$cm=764555;$me=0.764555;$ft=27;$gk=168.178557;$gs=201.974026;$in=46656;$li=764.555;$ya=1;break;
}

switch ($to) {
	case 1:
		$tou = "cm<sup>3</sup>" ;
		return (double)($val6*$cm);
		break;
	case 2:
		$tou = "m<sup>3</sup>" ;
		return (double)($val6*$me);
		break;
	case 3:
		$tou = "Feet<sup>3</sup>" ;
		return (double)($val6*$ft);
		break;
	case 4:
		$tou = "Gallons(UK)" ;
		return (double)($val6*$gk);
		break;
	case 5:
		$tou = "Gallons(US)" ;
		return (double)($val6*$gs);
		break;
	case 6:
		$tou = "Inches<sup>3</sup>";
		return (double)($val6*$in);
		break;
	case 7:
		$tou = "Litres<sup>3</sup>" ;
		return (double)($val6*$li);
		break;
	case 8:
		$tou = "Yards" ;
		return (double)($val6*$ya);
		break;
	default:
		# code...
		break;
}
/*
 echo "<br><br><table align=center>
 <tr><td><h3> ",$val6," ",$fromu," equivalent is </h3></td></tr>
 <tr align=right><td><u> ",(double)($val6*$cm),"</u> CentiMeter<sup>3</sup></td></tr>
 <tr align=right><td><u> ",(double)($val6*$me),"</u> Meter<sup>3</sup></td></tr>
 <tr align=right><td><u> ",(double)($val6*$ft),"</u> Feet<sup>3</sup></td></tr>
 <tr align=right><td><u> ",(double)($val6*$gk),"</u> Gallons(UK)</td></tr>
 <tr align=right><td><u> ",(double)($val6*$gs),"</u> Gallons(US)</td></tr>
 <tr align=right><td><u> ",(double)($val6*$in),"</u> Inches<sup>3</sup></td></tr>
 <tr align=right><td><u> ",(double)($val6*$li),"</u> Litres</td></tr>
 <tr align=right><td><u> ",(double)($val6*$ya),"</u> Yards<sup>3</sup></td></tr></table>";
*/
}
echo  "<center>".assign($from,$to,$val)."</center>";
}
}
?>
</form>
</body>

</html>
