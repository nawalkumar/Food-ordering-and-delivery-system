<?php
include 'include/header.php';

// Empty the cart
unset($_SESSION['cart']);

// Display confirmation message
echo "<h2>Order Placed Successfully!</h2>";
echo "<p>Thank you for your order. We will reach out to you soon!</p>";
?>
