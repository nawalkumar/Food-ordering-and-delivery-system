<?php
    include 'include/header.php';

    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit();
    }
    $user_id=$_SESSION['user_id'];
    $sql="SELECT * FROM users WHERE id=$user_id ";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        $user=$result->fetch_assoc();
        $username=$user['name'];
        $useremail=$user['email'];    
    }
?>
<div class="w-7/10 flex-col items-center justify-center rounded-lg shadow-lg p-21 ">
    <h1 class="text-4xl text-yellow-300 font-bold p-6 m-3 text-black text-center"><i class="fa-solid fa-user">welcome <?php echo $username ;?></h1><hr>
    <h1 class="text-xl font-bold p-3 m-1 text-black text-center"><?php echo $useremail; ?></h1><hr>
    <h1 class="text-xl font-bold p-3 m-1 text-black text-center"><i class="fa-solid fa-cart-shopping mr-2"></i>Cart</h1><hr>
    <h1 class="text-xl font-bold p-3 m-1 text-black text-center"><i class="fa-solid fa-truck mr-2"></i>order</h1><hr>
    <a href="logout.php" class="text-xl font-bold p-3 m-1 text-black text-center">Logout</a><hr>
</div>