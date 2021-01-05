<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WatchShop | About</title>

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
    <link rel="stylesheet" href="./styles/aboutus.css">
</head>
<body>
    <?php include('./header.php') ?>
    <?php include('./navbar.php') ?>
    <main>
      <section id="aboutus" class="container">

        <div class="content aboutus-grid">
          <div class="about-text">
            <h1><span class="color-primary">About</span> Us</h1>
            <p>
              We sell branded watches all types and for all types of people. Sport? Luxury? classlics? We got em' all. If you want a watch for any purpose you have come to the right place. Because we will equip the best Luxury watch just for your style.
              <br>
              Our store only sell watches from top brands with a recognized name. we dont have local watches. We belive that a watch which has to be wore all the time in every condition must be rigit and long lasting. Thats why the watches you will find here will only be the best.
            </p>
          </div>
          <div class="about-img1"></div>
        </div>

        <div class="content aboutus-grid">
          <div class="about-img2"></div>
          <div class="about-text">
            <h1><span class="color-primary">Why</span> Buy From Us</h1>
            <p>
              We sell only the best quality watches from the international recognized brands. Our watches are water resistent, rigid and long lasting watches which can be used in any condition.
              <br>
              More over we give 5 year waranty of our products and not only that but we will do free repair during that time and battery change.
            </p>
          </div>
        </div>

      </section>

      <section id="reviews" class="container">
        <div class="content">
          <h1><span class="color-primary">Reviews</span> From Our Customers</h1>
          <div>

            <div class="review-card">
              <div class="review-user">
                <i class="fas fa-user fa-2x"></i>
                <i class="fab fa-twitter fa-2x"></i>
              </div>
              <div class="review">
                <h5>@M_Waleed</h5>
                <p>Best store to buy watch ⌚. very satisfied with their service 💯💯</p>
              </div>
            </div>
    
            <div class="review-card">
              <div class="review-user">
                <i class="fas fa-user fa-2x"></i>
                <i class="fab fa-twitter fa-2x"></i>
              </div>
              <div class="review">
                <h5>@Faizan_Ali</h5>
                <p>Best store to buy watch ⌚. very satisfied with their service 💯💯</p>
              </div>
            </div>
    
            <div class="review-card">
              <div class="review-user">
                <i class="fas fa-user fa-2x"></i>
                <i class="fab fa-twitter fa-2x"></i>
              </div>
              <div class="review">
                <h5>@Usman_Ghani</h5>
                <p>Best store to buy watch ⌚. very satisfied with their service 💯💯. 100% recommended place to buy imported watches.</p>
              </div>
            </div>

          </div>
        </div>
      </section>
    </main>
    <?php include('./footer.php') ?>
</body>
</html>