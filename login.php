<?php 

mysql_connect("localhost","id15152509_alineji","Chayouba123/") ;
mysql_select_db('id15152509_login');

$email=$_POST['t1']; 
$pass=$_POST['t2'];

$req='select * from loginn where "$email"=email and "$pass"=pass;';
$res=mysql_query($req);
if (mysql_num_rows($res)>0)
echo(' login fait en succees');
else 
echo('we don"t have account with that email:'.$email);
 	
?>