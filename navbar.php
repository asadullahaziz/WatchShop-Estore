<!-- Navigation Bar -->
<div id="nav-bar">
    <div class="container">
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./aboutus.php">About Us</a></li>
            <li><a href="./products.php">Products</a></li>
            <li><a href="./contactus.php">Contact Us</a></li>
            <?php
                if(isset($_SESSION['admin']))
                {
                    echo '<li><a href="./admin_panel.php">Admin Panel</a></li>';
                }
            ?>
        </ul>
    </div>
</div>