<?php
include 'include/header.php';
$product_id = $_POST['product_id'];

// Fetch product details from the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodie";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE id = $product_id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

// Add product to the session cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Push the product details to the cart
$_SESSION['cart'][] = array(
    'id' => $product['id'],
    'name' => $product['name'],
    'price' => $product['price'],
    'image' => $product['image'], // Include the product image
    'quantity' => 1  // Default quantity to 1
);

header("Location: cart.php");
exit();
?>
