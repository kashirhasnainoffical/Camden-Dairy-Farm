<?php
require_once 'connection.php';
$sql2 = "SELECT * FROM orders where order_status = 'cancelled'";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    $cancelled_orders = "
    <tr>
                                        <th class='border border-dark'>Order Id</th>
                                        <th class='border border-dark'>Items</th>
                                        <th class='border border-dark'>Total Amount</th>
                                    </tr>";
    // output data of each row
    while ($row2 = $result->fetch_assoc()) {
        // print_r($row2);
        $cancelled_orders .= "
                             <tr>
                                 <td class='border border-dark'>" . $row2['order_id'] . "</td>
                                 <td class='border border-dark'>" . $row2['order_item'] . '(' . $row2['order_amount'] . ' kg/ltr)' . "</td>
                                 <td class='border border-dark'>" . $row2['total_amount'] . "$</td>
                             </tr>";
        // echo $recent_orders;
    }
} else {
}
