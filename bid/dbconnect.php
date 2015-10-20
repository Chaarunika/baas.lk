<?php

$conn= mysql_connect("localhost","root","") or die ("Cannot connect to localhost");

mysql_select_db("auction", $conn) or die ("Cannot connect to the auction database");
?>