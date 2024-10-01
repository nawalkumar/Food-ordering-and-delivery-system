<?php
include 'include/header.php';

// Get the search term from the URL
$restaurant = $_GET['restaurant'];

// Prepare the SQL statement to search for the restaurant
$sql = "SELECT * FROM restaurants WHERE name LIKE '%$restaurant%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display restaurant's details and products
    while ($row = $result->fetch_assoc()) {
        echo "<h2>Restaurant: " . $row['name'] . "</h2>";
        echo "<h3>Location: " . $row['location'] . "</h3>";

        // Fetch the first 3 products for this restaurant
        $restaurant_id = $row['id'];
        $product_sql = "SELECT * FROM products WHERE restaurant_id = '$restaurant_id' LIMIT 3";
        $product_result = $conn->query($product_sql);

        if ($product_result->num_rows > 0) {
            echo "<div class='grid grid-cols-3 gap-4'>"; // Using Tailwind CSS for grid layout
            while ($product = $product_result->fetch_assoc()) {
                // Display each product with name, price, image, and buttons
                echo "
                <div class='border p-4'>
                    <img src='" . $product['image'] . "' alt='" . $product['name'] . "' class='w-full h-32 object-cover'>
                    <h4 class='text-lg font-bold'>" . $product['name'] . "</h4>
                    <p class='text-sm'>Price: $" . $product['price'] . "</p>
                    <div class='mt-2 flex space-x-2'>
                        <form action='buy.php' method='POST'>
                            <input type='hidden' name='product_id' value='" . $product['id'] . "'>
                            <button type='submit' class='bg-green-500 text-white px-4 py-2 rounded'>Buy</button>
                        </form>
                        <form action='add_to_cart.php' method='POST'>
                            <input type='hidden' name='product_id' value='" . $product['id'] . "'>
                            <button type='submit' class='bg-blue-500 text-white px-4 py-2 rounded'>Add to Cart</button>
                        </form>
                    </div>
                </div>
                ";
            }
            echo "</div>"; // End of grid
        } else {
            echo "<p>No products found for this restaurant.</p>";
        }
    }
} else {
    echo "<p>No restaurants found with that name.</p>";
}

$conn->close();
?>
