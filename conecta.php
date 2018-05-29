<?php
$dao = new mysqli('localhost','root','qu3 n4 v1d4','loja');

if(mysqli_connect_errno())
{
	printf('Não foi possível conectar ', mysqli_connect_errno());
	exit();
}
