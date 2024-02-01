<?php
session_start();
ini_set('display_errors', 0); // hide warning

// Include file for database connection
include("connectDB.php");

if (isset($_SESSION['userName'])) {
    $username = $_SESSION['userName'];
} elseif (isset($_SESSION['guest'])) {
    $username = $_SESSION['guest'];
}

// Receive form data
$c_id = $_REQUEST['c_id'];
$price = $_REQUEST['price'];
$size = $_REQUEST['size'];
$amount = $_REQUEST['amount'];
$total = $price * $amount;

// SQL query for inserting data into cart table
$sql = "INSERT INTO cart (username, c_id, price, size, amount, total) VALUES ('$username', '$c_id', '$price', '$size', '$amount', '$total')";

$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo "<script>alert('Add to Cart Successful'); window.location='costume.php'</script>";
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

?>
