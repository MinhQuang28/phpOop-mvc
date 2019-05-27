<?php
$connect=mysqli_connect('localhost','root','','laravel');
mysqli_set_charset($connect,'utf-8');
switch ($action) {
	case 'view_laravel':
		# code...
	$query="select * from couse where ten='laravel_base'";
	$result=mysqli_query($connect,$query);
		break;
	
	default:
		# code...
		break;
		mysqli_close($connect);
}