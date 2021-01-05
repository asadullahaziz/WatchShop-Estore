<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header('Location: ./login_page.php');
    }
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
    <link rel="stylesheet" href="./styles/add_product.css">
</head>
<body>
    <div id="add-product">
        <div class="form-wrap">
            <h1 class="m-heading">
                <span class="color-primary">Add</span> Product
            </h1>
            <?php
                if(isset($_GET['perc']))
                {
                    echo '<div class="alert alert-danger" role="alert">Error! Percentage must be lower then equal to 100.</div>';
                }
                else if(isset($_GET['img']))
                {
                    echo '<div class="alert alert-danger" role="alert">Error! Failed To Upload Image.</div>';
                }
            ?>
            <form action="./backend/add.php" method="POST" enctype="multipart/form-data">
                <div id="p-name" class="form-group">
                    <label for="productname">Product Name</label>
                    <input type="text" name="productname" placeholder="Enter Product Name" required>
                </div>
                <div id="p-price" class="form-group">
                    <label for="productprice">Product Price</label>
                    <input type="number" min="0" step="0.01" name="productprice" placeholder="Enter Product Price" required>
                </div>
                <div id="p-code" class="form-group">
                    <label for="productcode">Product Code</label>
                    <input type="text" name="productcode" placeholder="Enter Product Code" required>
                </div>
                <div id="p-discount" class="form-group">
                    <label for="productdiscount">Product Discount</label>
                    <input type="number" min="0" max="100" step="0.01" name="productdiscount" placeholder="Enter Product Discount in %" required>
                </div>
                <div id="p-sizes" class="form-group">
                    <label for="productsizes">Product Sizes</label>
                    <input type="text" name="productsizes" placeholder="Enter Product Sizes available in MM" required>
                </div>
                <div id="p-quantity" class="form-group">
                    <label for="productquantity">Product Quantity</label>
                    <input type="number" min="0" step="0.01" name="productquantity" placeholder="Enter Product Quantity" required>
                </div>
                <div id="p-img" class="form-group">
                    <label for="productimage">Product Image</label>
                    <input type="file" name="img" class="form-control-file" required>
                </div>
                <div id="p-description" class="form-group">
                    <label for="desciption">Product Description</label>
                    <textarea name="description" placeholder="Enter Product Description"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Save" name="save">
                <a href="./admin_panel.php" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</body>
</html>