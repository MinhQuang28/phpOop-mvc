<?php
$connect=mysqli_connect('localhost','root','','khachhang');
mysqli_set_charset($connect,'utf-8');
	switch ($action) {
		case '':
			// code...
		$result=mysqli_query($connect,"select * from khachhang");
			break;
			case 'view_update':
				
				break;
		
		default:
			// code...
			break;
	}