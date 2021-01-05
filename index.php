<?php
    include('./backend/connection.php');

    $query = "SELECT * FROM products ORDER BY product_id DESC;";
    $result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WatchShop | Welcome</title>

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
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <?php include('./header.php') ?>
    <?php include('./navbar.php') ?>
    <main>
      <!-- Picture Slider -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/slider1.jpg" alt="First slide" width="100%" height="525px">
          </div>
          <div class="carousel-item">
            <img src="./images/slider2.jpg" alt="Second slide" width="100%" height="525px">
          </div>
          <div class="carousel-item">
            <img src="./images/slider3.jpg" alt="Third slide" width="100%" height="525px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- About Section -->
      <section id="about" class="container">
        <div class="content">
          <div>
            <h1><span class="color-primary">Who</span> We Are</h1>
          <p>We sell branded watches all types and for all types of people. Sport? Luxury? classlics? We got em' all. If you want a watch for any purpose you have come to the right place. Because we will equip the best Luxury watch just for your style.</p>
          <a href="./aboutus.html" class="bttn">Read More</a>
          </div>
          <div class="suit-img"></div>
        </div>
      </section>
      <!-- Featured Products Section -->
      <section id="featured" class="container">
        <div class="content">
          <h1 class="featured-heading">
            <span class="color-primary">Featured</span> Products
          </h1>
          <div class="product-grid">
            <?php
                for($i = 0; $i < 4; $i++)
                {
                    $data = mysqli_fetch_array($result);
                    if($data['product_quantity'] == 0)
                  {
                    continue;
                  }
                    ?>
                    <a class="product" href="./product_page.php?id=<?php echo $data['product_id']; ?>">
                        <img src="./product_imgs/<?php echo $data['product_image']; ?>" alt="Error 404 image not found!" height="200px">
                        <div class="product-info">
                            <h5><?php echo $data['product_name']; ?></h5>
                            <h6><?php echo $data['product_price']; ?>$</h6>
                        </div>
                    </a>
              <?php
                }
              ?>
          </div>
        </div>
      </section>
    </main>
    <?php include('./footer.php') ?>
</body>
</html>