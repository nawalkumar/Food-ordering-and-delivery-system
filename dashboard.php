<?php
include 'include/header.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT name FROM users WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $user_name = $user['name'];
} else {
    header('Location: login.php');
    exit();
}
?>
<div class="flex justify-center items-center w-11/12 md:w-7/10 lg:w-full mb-1 break-words rounded-lg bg-cover bg-center" style="background-image: url('include/assets/hero.jpg'); height: 70vh;">
    <div class="mx-auto p-6 rounded-lg shadow-lg bg-gray-200 bg-opacity-75 h-auto flex flex-col justify-center items-center">
        <h1 class="text-4xl font-bold mb-4 text-black text-center">Welcome to your own Website</h1>
        <p class="mb-6 text-black text-center">Discover our amazing features and benefits.</p>
        <form action="search_results.php" method="GET">
            <input type="text" name="restaurant" placeholder="Search for a restaurant" class="form-input  text-black font-bold py-1 px-3 mr-2 rounded-lg shadow-lg" required>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
</div>
<div class="cont1 bg-gray-600 text-white w-full rounded-lg shadow-lg p-3 ">
    <div class="cont1 bg-gray-600 text-white w-full">
        <p>most popular food in your area</p>
    </div>
</div>
<div class="w-full flex items-center justify-center rounded-lg shadow-lg gap-6">
    <div class="cont1  rounded-lg shadow-lg p-10">
        <div class="img">
            <img src="include/assets/hero.jpg" class="rounded-lg shadow-lg"></img>
        </div>
        <div class="content1 h-36  bg-gray-300 flex justify-between p-6">
            <div class="content1 h-30">
                <h1 class="p-1">food name</h1>
                <p class="p-1">Resturant name</p>
                <p class="p-1">Rating</p>
            </div>
            <div class="button1 h-10">
                <div class="bg-orange-300 p-1 m-2 rounded-lg shadow-lg hover:bg-orange-600 ">add to cart</div>
                <div class="bg-yellow-300 p-1 m-2 rounded-lg shadow-lg hover:bg-yellow-600">Buy now</div>
            </div>
        </div>
    </div>
    <div class="cont2  rounded-lg shadow-lg p-10">
        <div class="img">
            <img src="include/assets/hero.jpg" class="rounded-lg shadow-lg"></img>
        </div>
        <div class="content1 h-36  bg-gray-300 flex justify-between p-6">
            <div class="content1 h-30">
                <h1 class="p-1">food name</h1>
                <p class="p-1">Resturant name</p>
                <p class="p-1">Rating</p>
            </div>
            <div class="button1 h-10">
                <div class="bg-orange-300 p-1 m-2 rounded-lg shadow-lg hover:bg-orange-600 ">add to cart</div>
                <div class="bg-yellow-300 p-1 m-2 rounded-lg shadow-lg hover:bg-yellow-600">Buy now</div>
            </div>
        </div>
    </div>
    <div class="cont2  rounded-lg shadow-lg p-10">
        <div class="img">
            <img src="include/assets/hero.jpg" class="rounded-lg shadow-lg"></img>
        </div>
        <div class="content1 h-36  bg-gray-300 flex justify-between p-6">
            <div class="content1 h-30">
                <h1 class="p-1">food name</h1>
                <p class="p-1">Resturant name</p>
                <p class="p-1">Rating</p>
            </div>
            <div class="button1 h-10">
                <div class="bg-orange-300 p-1 m-2 rounded-lg shadow-lg hover:bg-orange-600 ">add to cart</div>
                <div class="bg-yellow-300 p-1 m-2 rounded-lg shadow-lg hover:bg-yellow-600">Buy now</div>
            </div>
        </div>
    </div>
</div>

<div class="cont1 bg-gray-600 text-white w-full rounded-lg shadow-lg p-3 ">
    <div class="cont1 bg-gray-600 text-white w-full">
        <p>most popular food in your area</p>
    </div>
</div>
<div class="w-full flex items-center justify-center rounded-lg shadow-lg gap-6">
    <div class="cont1  rounded-lg shadow-lg p-10">
        <div class="img">
            <img src="include/assets/hero.jpg" class="rounded-lg shadow-lg"></img>
        </div>
        <div class="content1 h-36  bg-gray-300 flex justify-between p-6">
            <div class="content1 h-30">
                <h1 class="p-1">food name</h1>
                <p class="p-1">Resturant name</p>
                <p class="p-1">Rating</p>
            </div>
            <div class="button1 h-10">
                <div class="bg-orange-300 p-1 m-2 rounded-lg shadow-lg hover:bg-orange-600 ">add to cart</div>
                <div class="bg-yellow-300 p-1 m-2 rounded-lg shadow-lg hover:bg-yellow-600">Buy now</div>
            </div>
        </div>
    </div>
    <div class="cont2  rounded-lg shadow-lg p-10">
        <div class="img">
            <img src="include/assets/hero.jpg" class="rounded-lg shadow-lg"></img>
        </div>
        <div class="content1 h-36  bg-gray-300 flex justify-between p-6">
            <div class="content1 h-30">
                <h1 class="p-1">food name</h1>
                <p class="p-1">Resturant name</p>
                <p class="p-1">Rating</p>
            </div>
            <div class="button1 h-10">
                <div class="bg-orange-300 p-1 m-2 rounded-lg shadow-lg hover:bg-orange-600 ">add to cart</div>
                <div class="bg-yellow-300 p-1 m-2 rounded-lg shadow-lg hover:bg-yellow-600">Buy now</div>
            </div>
        </div>
    </div>
    <div class="cont2  rounded-lg shadow-lg p-10">
        <div class="img">
            <img src="include/assets/hero.jpg" class="rounded-lg shadow-lg"></img>
        </div>
        <div class="content1 h-36  bg-gray-300 flex justify-between p-6">
            <div class="content1 h-30">
                <h1 class="p-1">food name</h1>
                <p class="p-1">Resturant name</p>
                <p class="p-1">Rating</p>
            </div>
            <div class="button1 h-10">
                <div class="bg-orange-300 p-1 m-2 rounded-lg shadow-lg hover:bg-orange-600 ">add to cart</div>
                <div class="bg-yellow-300 p-1 m-2 rounded-lg shadow-lg hover:bg-yellow-600">Buy now</div>
            </div>
        </div>
    </div>
</div>

</div>

<div class="cont1 bg-gray-600 text-white w-full rounded-lg shadow-lg p-3 ">
    <div class="cont1 bg-gray-600 text-white w-full">
        <p>most popular food in your area</p>
    </div>
</div>
<div class=" w-full flex items-center justify-center">
<div class="w-full flex items-center justify-center rounded-lg shadow-lg gap-6">
    <div class="cont1  rounded-lg shadow-lg p-10">
        <div class="img">
            <img src="include/assets/hero.jpg" class="rounded-lg shadow-lg"></img>
        </div>
        <div class="content1 h-36  bg-gray-300 flex justify-between p-6">
            <div class="content1 h-30">
                <h1 class="p-1">food name</h1>
                <p class="p-1">Resturant name</p>
                <p class="p-1">Rating</p>
            </div>
            <div class="button1 h-10">
                <div class="bg-orange-300 p-1 m-2 rounded-lg shadow-lg hover:bg-orange-600 ">add to cart</div>
                <div class="bg-yellow-300 p-1 m-2 rounded-lg shadow-lg hover:bg-yellow-600">Buy now</div>
            </div>
        </div>
    </div>
    <div class="cont2  rounded-lg shadow-lg p-10">
        <div class="img">
            <img src="include/assets/hero.jpg" class="rounded-lg shadow-lg"></img>
        </div>
        <div class="content1 h-36  bg-gray-300 flex justify-between p-6">
            <div class="content1 h-30">
                <h1 class="p-1">food name</h1>
                <p class="p-1">Resturant name</p>
                <p class="p-1">Rating</p>
            </div>
            <div class="button1 h-10">
                <div class="bg-orange-300 p-1 m-2 rounded-lg shadow-lg hover:bg-orange-600 ">add to cart</div>
                <div class="bg-yellow-300 p-1 m-2 rounded-lg shadow-lg hover:bg-yellow-600">Buy now</div>
            </div>
        </div>
    </div>
    <div class="cont2  rounded-lg shadow-lg p-10">
        <div class="img">
            <img src="include/assets/hero.jpg" class="rounded-lg shadow-lg"></img>
        </div>
        <div class="content1 h-36  bg-gray-300 flex justify-between p-6">
            <div class="content1 h-30">
                <h1 class="p-1">food name</h1>
                <p class="p-1">Resturant name</p>
                <p class="p-1">Rating</p>
            </div>
            <div class="button1 h-10">
                <div class="bg-orange-300 p-1 m-2 rounded-lg shadow-lg hover:bg-orange-600 ">add to cart</div>
                <div class="bg-yellow-300 p-1 m-2 rounded-lg shadow-lg hover:bg-yellow-600">Buy now</div>
            </div>
        </div>
    </div>
</div>

</div>

<div class="cont1 bg-gray-600 text-white w-full rounded-lg shadow-lg p-3 ">
    <div class="cont1 bg-gray-600 text-white w-full">
        <p>most popular food in your area</p>
    </div>
</div>
<div class="w-full flex items-center justify-center">
<div class="w-full flex items-center justify-center rounded-lg shadow-lg gap-6">
    <div class="cont1  rounded-lg shadow-lg p-10">
        <div class="img">
            <img src="include/assets/hero.jpg" class="rounded-lg shadow-lg"></img>
        </div>
        <div class="content1 h-36  bg-gray-300 flex justify-between p-6">
            <div class="content1 h-30">
                <h1 class="p-1">food name</h1>
                <p class="p-1">Resturant name</p>
                <p class="p-1">Rating</p>
            </div>
            <div class="button1 h-10">
                <div class="bg-orange-300 p-1 m-2 rounded-lg shadow-lg hover:bg-orange-600 ">add to cart</div>
                <div class="bg-yellow-300 p-1 m-2 rounded-lg shadow-lg hover:bg-yellow-600">Buy now</div>
            </div>
        </div>
    </div>
    <div class="cont2  bg-gray-600rounded-lg shadow-lg p-10">
        <div class="img">
            <img src="include/assets/hero.jpg" class="rounded-lg shadow-lg"></img>
        </div>
        <div class="content1 h-36  bg-gray-300 flex justify-between p-6">
            <div class="content1 h-30">
                <h1 class="p-1">food name</h1>
                <p class="p-1">Resturant name</p>
                <p class="p-1">Rating</p>
            </div>
            <div class="button1 h-10">
                <div class="bg-orange-300 p-1 m-2 rounded-lg shadow-lg hover:bg-orange-600 ">add to cart</div>
                <div class="bg-yellow-300 p-1 m-2 rounded-lg shadow-lg hover:bg-yellow-600">Buy now</div>
            </div>
        </div>
    </div>
    <div class="cont2  rounded-lg shadow-lg p-10">
        <div class="img">
            <img src="include/assets/hero.jpg" class="rounded-lg shadow-lg"></img>
        </div>
        <div class="content1 h-36  bg-gray-300 flex justify-between p-6">
            <div class="content1 h-30">
                <h1 class="p-1">food name</h1>
                <p class="p-1">Resturant name</p>
                <p class="p-1">Rating</p>
            </div>
            <div class="button1 h-10">
                <div class="bg-orange-300 p-1 m-2 rounded-lg shadow-lg hover:bg-orange-600 ">add to cart</div>
                <div class="bg-yellow-300 p-1 m-2 rounded-lg shadow-lg hover:bg-yellow-600">Buy now</div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include 'include/footer.php'; 
?>


</body>
</html>