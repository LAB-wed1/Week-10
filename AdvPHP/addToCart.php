<?php session_start();
ini_set('display_errors', 0); // hide warning
//code for connect db from file

if (isset($_SESSION['userName']))
	$username = $_SESSION['userName'];
if (isset($_SESSION['guest']))
	$username = $_SESSION['guest'];


$c_id = //code for data form receive
$price = //code for data form receive
$size = //code for data form receive
$amount = //code for data form receive
$total = //code for data form receive


$sql = //code for insert data to cart
$rs = mysqli_query($conn, $sql);

//echo "Add to Cart Successful";
echo "<script>alert('Add to Cart Successful'); window.location='costume.php'</script>";
exit();
?>