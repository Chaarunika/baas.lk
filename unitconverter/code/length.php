<html>
<head>
<title>Unit Converter - Length</title>
<link href="code.css" rel="stylesheet">
</head>

<body>
<form action=" " method="POST">
<h4 align=center>LENGTH CONVERSION</h4>

<table align=center>
<tr>
<td><label>VALUE </label></td>
<td><input type="text" name="val2" cols = "3px" class = "val"></td>
</tr>
<tr>
<td><label>FROM</label></td>
<td>
<select name="from" class="uni">
            <option value=0>--select--</option>
            <option value=1>Centimeter</option>
            <option value=2>Meter</option>
            <option value=3>Kilometer</option>
            <option value=4>Feet</option>
            <option value=5>Inch</option>
            <option value=6>Miles</option>
            <option value=7>Yards</option>
</select>
</td>
</tr>

<tr>
<td><label>TO</label></td>
<td>
<select name="to" class="uni">
            <option value=0>--select--</option>
            <option value=1>Centimeter</option>
            <option value=2>Meter</option>
            <option value=3>Kilometer</option>
            <option value=4>Feet</option>
            <option value=5>Inch</option>
            <option value=6>Miles</option>
            <option value=7>Yards</option>
</select>
</td>
</tr>
</table>
<input type="submit" value="Convert" class="button">

<?php
if(isset($_POST['val2']))
{
$val=$_POST['val2'];
if(!preg_match('/^[0-9.]/',$val2))
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
function assign($from,$to,$val2)
{
switch ($from)
{
case 1:
$fromu="Centimeter";$cm=1;$me=0.01;$km=0.00001;$ft=0.3280839;$in=0.39370078;$mi=0.000006213;$ya=0.010936132;break;
case 2:
$fromu="Meter";$cm=100;$me=1;$km=0.001;$ft=3.280839;$in=39.370078;$mi=0.00062137;$ya=1.0936132;break;
case 3:
$fromu="Kilometer";$cm=100000;$me=1000;$km=1;$ft=3280.839;$in=39370.078;$mi=0.6213;$ya=1093.6132;break;
case 4:
$fromu="Feet";$cm=30.48;$me=0.3048;$km=0.0003048;$ft=1;$in=12;$mi=0.00018939;$ya=0.33333;break;
case 5:
$fromu="Inches";$cm=2.54;$me=0.0254;$km=0.0000254;$ft=0.083333;$in=1;$mi=0.0000157828;$ya=0.027778;break;
case 6:
$fromu="Miles";$cm=160934.4;$me=1609.344;$km=1.609344;$ft=5280;$in=63360;$mi=1;$ya=1760;break;
case 7:
$fromu="Yards";$cm=91.44;$me=0.9144;$km=0.0009144;$ft=3;$in=36;$mi=0.000568181;$ya=1;break;
}
switch($to)
{
	case 1:
	$tou = "Centimeter";
	return (double)($val2*$cm);
	break;
	case 2:
	$tou = "Meter";
	return (double)($val2*$me);
	break;
	case 3:
	$tou = "Kilometer";
	return (double)($val2*$km);
	break;
	case 4:
	$tou = "Feet";
	return (double)($val2*$in);
	break;
	case 5:
	$tou = "Inches";
	return (double)($val2*$ft);
	break;
	case 6:
	$tou = "Miles";
	return (double)($val2*$mi);
	break;
	case 7:
	$tou = "Yards";
	return (double)($val2*$ya);
	break;
	default:
	break;

}

/* echo "<br><br><table align=center>
 <tr><td><h3> ",$val2," ",$fromu," equivalent is </h3></td></tr>
 <tr align=right><td><u> ",(double)($val2*$cm),"</u> Centimeter</td></tr>
 <tr align=right><td><u> ",(double)($val2*$me),"</u> Meters</td></tr>
 <tr align=right><td><u> ",(double)($val2*$km),"</u> Kilometers</td></tr>
 <tr align=right><td><u> ",(double)($val2*$in),"</u> Inches</td></tr>
 <tr align=right><td><u> ",(double)($val2*$ft),"</u> Feet</td></tr>
 <tr align=right><td><u> ",(double)($val2*$mi),"</u> Miles</td></tr>
 <tr align=right><td><u> ",(double)($val2*$ya),"</u> Yards</td></tr></table>";
*/
}
echo  "<center>".assign($from,$to,$val)."</center>";
}
}
?>
</form>
</body>

</html>
