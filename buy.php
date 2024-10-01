<?php
include 'include/header.php';
$product_id = $_POST['product_id'];

// Logic for handling the purchase process
// Example: Redirect to the checkout page
header("Location: checkout.php?product_id=$product_id");
exit();
?>
