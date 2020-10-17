<?php
mysql_connect("localhost","id15152509_alineji","Chayouba123/","id15152509_login");

$name=$_POST['t1'];
$pass=$_POST['t2'];
$email=$_POST['t3'];

$req='select * from loginn where "$email"=email and "$pass"=pass;';
$res=mysql_query($req);

if (mysql_num_rows($res)>0)
{   echo('cette compte est deja creer');
	}
else
{
	$req1='insert into loginn (email,pass,name) values("$email","$pass","$name");';
$res2= mysql_query($req1);
echo('l"insertion et valide');

}	
	


?>