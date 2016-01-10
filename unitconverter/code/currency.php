<html>

<head>
	<link href="code.css" rel="stylesheet">
<title>Unit Converter - Currency</title>
</head>

<body>
<form action=" " method="POST">
<h4 align=center>CURRENCY CONVERSION</h4>
<table align=center>
<tr>
<td><label>VALUE </label></td>
<td><input type="text" name="val5" cols = "3px" class = "val"></td>
</tr>
<tr>
<td></label> FROM</label></td>
<td>
<select name="from" class="uni">
            <option value=0>--select--</option>
            <option value=1>Indian Rupee(INR)</option>
            <option value=2>Euro(EUR)</option>
            <option value=3>Pound Sterling(GBP)</option>
            <option value=4>Japanese Yen(JPY)</option>
            <option value=5>US Dollar(USD)</option>
            <option value=6>Norwegian Krone(NOK)</option>
            <option value=7>Swedish Krona(SEK)</option>
            <option value=8>South Korean Won(KRW)</option>
</select>
</td>
</tr>

<tr>
<td><label>TO</label></td>
<td>
<select name="to" class="uni">
            <option value=0>--select--</option>
            <option value=1>Indian Rupee(INR)</option>
            <option value=2>Euro(EUR)</option>
            <option value=3>Pound Sterling(GBP)</option>
            <option value=4>Japanese Yen(JPY)</option>
            <option value=5>US Dollar(USD)</option>
            <option value=6>Norwegian Krone(NOK)</option>
            <option value=7>Swedish Krona(SEK)</option>
            <option value=8>South Korean Won(KRW)</option>
</select>
</td>
</tr>
</table>
<input type="submit" value="Convert" class="button">

<?php
if(isset($_POST['val5']))
{
$val=$_POST['val5'];
if(!preg_match('/^[0-9.]/',$val5))
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
function assign($from,$to,$val5)
{
switch ($from)
{
case 1:
$fromu="INR";$inr=1;$eur=0.0171;$gbp=0.012;$jpy=2.3447;$usd=0.0222;$nok=0.1386;$sek=0.1533;$krw=24.0288;break;
case 2:
$fromu="EUR";$inr=58.479532;$eur=1;$gbp=0.689106;$jpy=135.9915;$usd=1.270297;$nok=8.069166;$sek=9.124832;$krw=1200.91;break;
case 3:
$fromu="GBP";$inr=84.862924;$eur=1.451156;$gbp=1;$jpy=197.344821;$usd=1.843399;$nok=11.709615;$sek=13.241551;$krw=1742.707752;break;
case 4:
$fromu="JPY";$inr=0.43;$eur=0.007353;$gbp=0.005067;$jpy=1;$usd=0.009341;$nok=0.059336;$sek=0.067099;$krw=8.830291;break;
case 5:
$fromu="USD";$inr=46.036082;$eur=0.787217;$gbp=0.542476;$jpy=107.054886;$usd=1;$nok=6.352189;$sek=7.183227;$krw=945.376767;break;
case 6:
$fromu="NOK";$inr=7.24731;$eur=0.123929;$gbp=0.0854;$jpy=16.853229;$usd=0.157426;$nok=1;$sek=1.130827;$krw=148.827575;break;
case 7:
$fromu="SEK";$inr=6.40883;$eur=0.109591;$gbp=0.07552;$jpy=14.903452;$usd=0.139213;$nok=0.884308;$sek=1;$krw=131.608928;break;
case 8:
$fromu="KRW";$inr=0.048655;$eur=0.000832;$gbp=0.000573;$jpy=0.114069;$usd=0.000959;$nok=0.006714;$sek=0.007592;$krw=1;break;
}

switch ($to) {
	case 1:
		$tou =  "INR";
		return (double)($val5*$inr);
		break;
	case 2:
		$tou =  "EUR";
		return (double)($val5*$eur);
		break;
	case 3:
		$tou =  "GBP";
		return (double)($val5*$gbp);
		break;
	case 4:
		$tou =  "JPY";
		return (double)($val5*$jpy);
		break;
	case 5:
		$tou =  "USD";
		return (double)($val5*$usd);
		break;
	case 6:
		$tou =  "NOK";
		return (double)($val5*$nok);
		break;
	case 7:
		$tou =  "SEK";
		return (double)($val5*$sek);
		break;
	case 8:
		$tou =  "KRW";
		return (double)($val5*$inr);
		break;
	default:
		# code...
		break;
}
 /*
 echo "<br><br><table align=center>
 <tr><td><h3> ",$val5," ",$fromu," equivalent is </h3></td></tr>
 <tr align=right><td><u> ",(double)($val5*$inr),"</u> Indian Rupee</td></tr>
 <tr align=right><td><u> ",(double)($val5*$eur),"</u> Euro</td></tr>
 <tr align=right><td><u> ",(double)($val5*$gbp),"</u> Pond Sterling</td></tr>
 <tr align=right><td><u> ",(double)($val5*$jpy),"</u> Japanese Yen</td></tr>
 <tr align=right><td><u> ",(double)($val5*$usd),"</u> US Dollar</td></tr>
 <tr align=right><td><u> ",(double)($val5*$nok),"</u> Norwegian Krone</td></tr>
 <tr align=right><td><u> ",(double)($val5*$sek),"</u> Swedish Krona</td></tr>
 <tr align=right><td><u> ",(double)($val5*$krw),"</u> South Korean Won</td></tr></table>";
*/
}
echo  "<center>".assign($from,$to,$val)."</center>";
}
}
?>
</form>

</body>

</html>
