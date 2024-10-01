<?php
include 'include/header.php';

// Retrieve customer details from POST request
$customer_name = $_POST['name'];
$customer_phone = $_POST['phone'];
$customer_address = $_POST['address'];

// Calculate the total price
$total_price = 0;
foreach ($_SESSION['cart'] as $product) {
    $total_price += $product['price'];
}

// Store order details in database
$sql = "INSERT INTO order_details (customer_name, customer_phone, customer_address, total_price)
        VALUES ('$customer_name', '$customer_phone', '$customer_address', '$total_price')";

if ($conn->query($sql) === TRUE) {
    // Order ID of the newly created order
    $order_id = $conn->insert_id;

    // Proceed to payment page
    echo "
    <h2>Payment Page</h2>
    <p>Total Amount: $" . $total_price . "</p>
    <form action='confirmation.php' method='POST'>
        <input type='hidden' name='order_id' value='" . $order_id . "'>
        <button type='submit' class='bg-blue-500 text-white px-4 py-2 rounded'>Pay Now</button>
    </form>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
