
<?php
session_start();
$conn_error="Could not connect";
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='software_project';

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysql_select_db($mysql_db))
{
die('$conn_error');
}

if (isset($_POST['name2']) and isset($_POST['password2']))
{

$name=$_POST['name2'];
$password=$_POST['password2'];
$_SESSION['signname']=$name;

if(user_exists($name,$password))
{
echo '<script>alert("username does not exist");</script>'; 
echo '<script>
window.location.assign("ma.html");
 </script>
';
}
else
echo '<script>
window.location.assign("bookings.php");
 </script>

';
 

}

function user_exists($name,$password)
{
global $name;
global $password;
$query="SELECT Name,Password FROM login WHERE Name='$name' && Password='$password'";
$query_run=mysql_query($query);
$count_rows=mysql_num_rows($query_run);
if($count_rows==0)
return true;
else if($count_rows==1)
return false;
}



?>
