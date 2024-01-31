<?php session_start();
ini_set('display_errors', 0); // hide warning
//code for connect db from file

$o_id = //code for data form receive
$order_status = //code for data form receive

$sql = //code for update status int orders

//code for update query 
if ($rs) {
	//echo "Update Successful";
	echo "<script>alert('Update Successful'); window.location='ordersManagement.php';</script>";
	exit();
} else {
	echo "<script>alert('Can not Update'); window.location='ordersManagement.php';</script>";
	exit();
}
?>