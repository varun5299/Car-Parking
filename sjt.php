<?php

$conn_error="Could not connect";
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='software_project';

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysql_select_db($mysql_db))
{
die('$conn_error');
}

if (isset($_POST['r1']))
{

$day=$_POST['r1'];
$query="UPDATE slotinfo set DAY='$day' WHERE Day='NULL1' ";
$query_run=mysql_query($query);

}
echo 'Added succesfully';

?>