<?php
$ord_id = $_POST['ord_id'];

require_once 'connection.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    $sql = mysqli_query($conn, "UPDATE orders
    SET order_status = 'cancelled'
    WHERE order_id = " . $ord_id . ";");
    if ($sql) {
        echo 'Order Cancelled';
    }
}
