<?php
include 'include/header.php';
$total_price = 0;

echo "<h2>Your Cart</h2>";

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    echo "<div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4'>"; // Using Tailwind CSS for layout
    foreach ($_SESSION['cart'] as $product) {
        // Assuming each product has 'id', 'name', 'price', and 'image' fields
        $product_image = $product['image']; // Image URL
        echo "<div class='border p-4 rounded shadow'>
                <img src='$product_image' alt='{$product['name']}' class='w-full h-32 object-cover mb-2'>
                <h3 class='font-bold'>{$product['name']}</h3>
                <p class='text-gray-600'>Price: $ {$product['price']}</p>
              </div>";
        $total_price += $product['price'];
    }
    echo "</div>";
    
    // Display total price and Buy Now button
    echo "<h3 class='mt-4 font-bold'>Total Price: $$total_price</h3>";
    echo "<form action='checkout.php' method='POST'>
            <button type='submit' class='bg-green-500 text-white px-4 py-2 rounded'>Buy Now</button>
          </form>";
} else {
    echo "<p>Your cart is empty!</p>";
}
?>
