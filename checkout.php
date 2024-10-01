<?php
include 'include/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Display customer detail form
    echo "
    <h2>Checkout</h2>
    <form action='payment.php' method='POST'>
        <label>Name:</label><br>
        <input type='text' name='name' required><br>
        
        <label>Phone:</label><br>
        <input type='text' name='phone' required><br>
        
        <label>Address:</label><br>
        <textarea name='address' required></textarea><br>
        
        <button type='submit' class='bg-green-500 text-white px-4 py-2 rounded'>Proceed to Payment</button>
    </form>";
}
?>
