<?php
mysql_connect("localhost","$$$$$$","$$$$$$","$$$$$$");
$n=$_POST['t1'];
$pas=$_POST['t2'];
$email=$_POST['t3'];

$req="select * from loginn where '$email'=email and '$pas'=pass;";
$res=mysql_query($req);

if (mysql_num_rows($res)>0)
{   echo('<center><H1>This account has created </center></H1>');
	}
else
{
	$req2="insert into loginn (email,pass,name) values('$email','$pas','$n');";
$res2=mysql_query($req2);
if ($res2!=0)
{
echo("<center><H1>The insertion is valid<H1></center>");
}
else 
	echo("<center><H1>Check your connection</center></H1>");
}	


?>

?>
