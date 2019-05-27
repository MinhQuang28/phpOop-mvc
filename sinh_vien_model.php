<?php
	//connect
	$connect=mysqli_connect('localhost','root','','qlsinhvien');
	mysqli_set_charset($connect,'utf-8');
		$result=mysqli_query($connect,"select * from sinhvien");
		switch ($action) {
	case '':
		# code...
	$result=mysqli_query($connect,"select * from sinhvien");
		break;
		case 'view_update':
		$result=mysqli_query($connect,"select * from sinhvien where ma=$ma");
			# code...
			break;
		case 'process_insert':
			# code...
		$result=mysqli_query($connect,"insert into sinhvien(ten,tuoi) values ('$name',$age)");
			break;
		case 'delete':
			# code..
		$result=mysqli_query($connect,"delete from sinhvien where ma=$ma");
			break;
		case 'update':
			# code...
		$result=mysqli_query($connect,"update sinhvien set ten='$name',tuoi=$age where ma=$ma");
			break;
	default:
		# code...
	echo "khong ton tai action nay";
		break;
	}
		mysqli_close($connect);

