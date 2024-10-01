<?php
session_start();
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie</title>
     <!-- <link rel="stylesheet" href="include/assets/style1.css"> -->
      <!-- <link rel="stylesheet" href="stylegrid.css"> -->
     <style>
            @keyframes bg-color-change {
            0% {
                background-color: #C3979F; 
            }
            50% {
                background-color: #023C40;
                color:green
            }
            100% {
                background-color: #78FFD6; 
                color: black; 
            }
            }

            .header {
            animation: bg-color-change 5s infinite;
            }
            @keyframes button-colorchange{
                0%{
                    transform: scale(1,1);
                }
                50%{ 
                    transform:scale(1.1,1.1);
                }
                100%{
                    transform:scale(1,1);
                }
            }
            .button{
                animation: button-colorchange 3s infinite linear;
            }
            .movecontent {
            position: absolute;
            white-space: nowrap;
            animation: moveRight 24s 0s infinite linear;
        }
        @keyframes moveRight {
            0% {
               left:-100%;
            }
            50%{
                left:100%;
            }
            100% {
                left:-100%;
            }
        }
</style>
     <link rel="stylesheet" href="include/assets/styles.css" >
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Your other CSS and JS files -->
</head>
<body  class=" h-full font-roboto bg-gray-300 flex flex-col items-center m-0 text-center">
    <script src=include/assets/tailwind.js></script>
    <div class=" sticky bg-gray-900 w-full text-white flex items-center justify-between h-16 max-w-full break-words">
        <h1 class="ml-5 mb-4 text-3xl font-bold">foodie</h1>
        <nav>
            <?php if (!isset($_SESSION['user_id'])): ?>
                <a href="index.php" class="text-white no-underline mr-5 font-bold hover:underline"><i class="fa-solid fa-house mr-2"></i>Home</a>
                <a href="signup.php" class="text-white no-underline mr-5 font-bold hover:underline"><i class="fa-solid fa-user-plus mr-2"></i>Sign Up</a>
                <a href="login.php" class="text-white no-underline mr-5 font-bold hover:underline"><i class="fa-solid fa-right-to-bracket mr-2"></i>Login</a>
            <?php else: ?>
                <a href="dashboard.php" class="text-white no-underline mr-5 font-bold hover:underline">Dashboard</a>
                <a href="profile.php" class="text-white no-underline mr-5 font-bold hover:underline"><i class="fa-solid fa-user mr-2"></i></a>
            <?php endif; ?>
        </nav>
    </div>