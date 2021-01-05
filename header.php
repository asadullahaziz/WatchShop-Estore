<?php 
    session_start();
?>
<header id="top-panel">
    <!-- Top Panel -->
    <div class="container">
        <div class="top-panel-flex">
            <a class="logo" href="./index.php">
                <h1>Watch<br>Shop</h1><span class="logo-icon fas fa-clock fa-3x"></span>
            </a>

            <div class="login-media">
                <?php
                    if(!isset($_SESSION["admin"]))
                    {
                        echo '<a href="./login_page.php" class="btn btn-light">Login</a>';
                    }
                    else
                    {
                        echo '<a href="./backend/logout.php" class="btn btn-dark">Logout</a>';
                    }
                ?>
                <ul class="media">
                    <li><a href="https://www.facebook.com/"><img src="./images/facebook.png" alt="Error 404 image not found!" height="40px"></a></li>
                    <li><a href="https://twitter.com/?lang=en"><img src="./images/twitter.png" alt=" Error 404 image not found!" height="40px"></a></li>
                    <li><a href="https://www.instagram.com/"><img src="./images/instagram.png" alt="Error 404 iamge not found!" height="40px"></a></li>
                </ul>
                <div id="hamburger" class="hamburger" onClick="navbar()"><div></div></div>
            </div>
        </div>
    </div>
</header>