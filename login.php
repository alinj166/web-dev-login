<?php 

mysql_connect("localhost","$$$$$$$$$","$$$$$$$$$") ;
mysql_select_db('$$$$$$$$$');

$email=$_POST['t1']; 
$pas=$_POST['t2'];

$req="select * from loginn where '$email'=email and '$pas'=pass;";
$res=mysql_query($req);
if (mysql_num_rows($res)>0)
echo('<center><H1>Login Was Successful</H1></center>');
else 
	
echo('<center><H1>The account was not found:'.$email.'</center></H1>');
 	
?>
