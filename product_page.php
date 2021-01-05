<?php
    include('./backend/connection.php');
    if(!isset($_GET['id']))
    {
        header('Location: ./products.php');
    }

    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE product_id = $id";
    $result = $conn->query($query);
    if(!$result)
    {
        echo "Error:- <br>" . $conn->error;
    }
    $product = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WatchShop | Product</title>

    <!-- Tab Icon -->
    <link rel="icon" href="./images/watch.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Fonts Awsome -->
    <script src="https://kit.fontawesome.com/8408dd06d8.js" crossorigin="anonymous"></script>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Desktop Style Sheet -->
    <link rel="stylesheet" href="./styles/product_page.css">
</head>
<body>
    <?php include('./header.php') ?>
    <?php include('./navbar.php') ?>
    <main>
      <section id="product" class="container">
            <div class="content p-grid">
                <h1 class="p-name color-primary">Sports Watch</h1>
                <div class="p-image"><img src="./product_imgs/<?php echo $product['product_image']; ?>" alt="Error 404" height="350px"></div>
                <div class="p-info">
                    <ul>
                      <li>Product Price: <?php echo $product['product_price']; ?>$</li>
                      <li>Product Code: <?php echo $product['product_code']; ?></li>
                      <li>Product Quantity: <?php echo $product['product_quantity']; ?></li>
                      <li>Product Discount: <?php echo $product['product_discount']; ?>%</li>
                      <li>Product Sizes(MM): <?php echo $product['product_sizes']; ?></li>
                    </ul>
                </div>
                <div class="p-detail">
                    <h2 class="color-primary">Product Detail</h2>
                    <?php echo $product['product_detail']; ?>
                </div>
            </div>
      </section>
    </main>
    <?php include('./footer.php') ?>
</body>
</html>