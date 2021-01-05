<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WatchShop | Contact</title>

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
    <link rel="stylesheet" href="./styles/contactus.css">

    <!-- Google Map -->
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Lahore
        const Lahore = { lat: 31.582045, lng: 74.329376 };
        // The map, centered at Lahore
        const map = new google.maps.Map
        (
          document.getElementById("map"),
          {
            zoom: 15,
            center: Lahore,
          }
        );
        // The marker, positioned at Lahore
        const marker = new google.maps.Marker({
          position: Lahore,
          map: map,
        });
      }
    </script>
</head>
<body>
    <?php include('./header.php') ?>
    <?php include('./navbar.php') ?>
    <main>
      <section id="contact" class="container">
        <!-- get in touch Grid -->
        <div class="content contact-info">
          <div class="box">
            <i class="fas fa-hotel fa-3x"></i>
            <h2>Address</h2>
            <p>40 Main st, Bahria Lahore</p>
          </div>
          <div class="box">
            <i class="fas fa-phone fa-3x"></i>
            <h2>Phone Number</h2>
            <p>+42 186952233</p>
          </div>
          <div class="box">
            <i class="fas fa-envelope fa-3x"></i>
            <h2>Email Address</h2>
            <p>frontdesk@watchshop.com</p>
          </div>
        </div>
        <!-- Form And Map Grid -->
        <div class="content form-n-map">
          <!-- Contact Form -->
          <div class="contact-form">
            <h1 class="m-heading">
                <span class="color-primary">Contact</span> Us
            </h1>
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your Name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="example@email.com">
                </div>
                <div class="form-group">
                    <label for="messege">Messege</label>
                    <textarea name="messege" id="messege" placeholder="Enter Messege"></textarea>
                </div>
                <input class="bttn" type="submit" value="Send">
            </form>
          </div>
          <!-- Google Map Div -->
          <div id="map"></div>
        </div>
      </section>
    </main>
    <?php include('./footer.php') ?>

    <!-- Google Maps API -->
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWEDx1eLgPULLEX2ljqPws1iO6CBaLSX4&callback=initMap"></script>
</body>
</html>