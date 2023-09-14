<?php session_start()
?>
<style>
    <?php include "css/style.css"?>
</style>

<div class="fixed-navbar">
    <div class="wrapper">
        <!-- toggle button available on small screens -->
        <button class="nav-toggle">
            <span class="hamburger"></span>
        </button>

        <div class="logo-nav">
            <div class="logo">
                <!-- <img src="images/logo.png" alt=""> -->
                <a href="index.html" class="logo-text">Eats</a>
            </div>

            <nav class="navbar">
                <ul class="nav-group">
                    <?php
                    // if a user is logged in show welcome message and logout
                    if (isset($_SESSION['auth'])) :
                    $welcomeName = $_SESSION['auth']['fname'];
                    ?>
                        <li class="nav-item nav-link">Welcome <?php echo $welcomeName?></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                        <li class="nav-item"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    
                    <?php else : ?>  
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
                        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <?php endif ?>
                </ul>
            </nav>
        </div>
    </div>
    </div>

