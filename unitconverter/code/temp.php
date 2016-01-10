<html>

<head>
	<link href="code.css" rel="stylesheet">
<title>Unit Converter - Temperature</title>
</head>

<body>
<form action="temp.php" method="POST">
<h4 align=center><font color=blue><ins>TEMPERATURE CONVERSION</ins></font></h4>
<table align=center>
<tr>
<td><label>VALUE </label></td>
<td><input type="text" name="val4"></td>
</tr>
<tr>
<td>From</td>
<td>
<select name="from">
            <option value=0>--select--</option>
            <option value=1>Celcius</option>
            <option value=2>Fahrenheit</option>
            <option value=3>Kelvin</option>
</select>
</td>
</tr>
</table>
<input type="submit" value="Convert" class="button">

<?php
if(isset($_POST['val4']))
{
$val=$_POST['val4'];
if(!preg_match('/^[0-9.-]/',$val4))
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
function assign($from,$val4)
{
switch ($from)
{
case 1:
$fromu="Celcius";$c=1;$f=(double)(($val4*9/5)+32);$k=(double)($val4+273);break;
case 2:
$fromu="Fahrenheit";$c=(($val4-32)*5/9);$f=1;$k=(double)((($val4-32)*5/9)+273);break;
case 3:
$fromu="Kelvin";$c=(double)($val4-273);$f=(double)((($val4-273)*9/5)+32);$k=1;break;
}
 echo "<br><br><table align=center>
 <tr><td><h3> ",$val4," ",$fromu," equivalent is </h3></td></tr>
 <tr align=right><td><u> ",$c,"</u> Celcius</td></tr>
 <tr align=right><td><u> ",$f,"</u> Fahrenheit</td></tr>
 <tr align=right><td><u> ",$k,"</u> Kelvin</td></tr></table>";
}
assign($from,$val4);
}
}
?>
</form>
</body>

</html>
