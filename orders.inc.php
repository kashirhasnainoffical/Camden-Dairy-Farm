<?php
if (isset($_POST['submit'])) {
    $Milk = $_POST['Milk'];
    $Butter = $_POST['Butter'];
    $Yogurt = $_POST['Yogurt'];
    $Cheese = $_POST['Cheese'];
    $Cream = $_POST['Cream'];

    require_once 'connection.php';
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $order_id = rand(100, 99999);
        foreach ($_POST as $key => $value) {

            if ($key != 'submit') {
                if ($value >= 10 && $value < 50) {
                    $total_amount = $value - getPercentOfNumber($value, 1);
                } elseif ($value >= 50 && $value < 100) {
                    $total_amount = $value - getPercentOfNumber($value, 5);
                } elseif ($value >= 100 && $value < 500) {
                    $total_amount = $value - getPercentOfNumber($value, 10);
                } elseif ($value >= 500 && $value < 1000) {
                    $total_amount = $value - getPercentOfNumber($value, 20);
                } elseif ($value >= 1000 && $value <= 5000) {
                    $total_amount = $value - getPercentOfNumber($value, 30);
                } else {
                    $total_amount = $value;
                }

                $sql = mysqli_query($conn, "INSERT INTO orders (order_id, order_item, order_amount, total_amount, order_status)
                    VALUES ('" . $order_id . "','" . $key . "'," . $value . ", " . $total_amount . ", 'processing');");
            }
        }

        header("location: home.php");
    }
}

function getPercentOfNumber($number, $percent)
{
    return ($percent / 100) * $number;
}
