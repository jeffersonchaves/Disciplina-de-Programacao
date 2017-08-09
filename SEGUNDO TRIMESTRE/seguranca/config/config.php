<?php
$conn = null;

if( $conn == null )
{
	$conn = mysqli_connect('localhost','root','root')or die(mysql_error('erro ao conectar ao banco'));

	mysqli_select_db($conn,'seguranca')or die(mysql_error('erro'));
}