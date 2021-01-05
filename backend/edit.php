<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header('Location: ../login_page.php');
    }

    if(!isset($_GET['id'])) // ID not given in address bar exception
    {
        header('Location: ../admin_panel.php');
    }
    else
    {
        include('./connection.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM products WHERE product_id=" . $id . ";";
        $result = $conn->query($query);
        $product = mysqli_fetch_array($result);
    }

    if(isset($_POST['save']))
    {
        $id = $_GET['id'];
        // getting data from form
        $pName = $_POST['productname'];
        $pPrice = $_POST['productprice'];
        $pDiscount = $_POST['productdiscount'];
        $pCode = $_POST['productcode'];
        $pSizes = $_POST['productsizes'];
        $pQuantity = $_POST['productquantity'];
        $pDesc = $_POST['description'];
        $pImg = $product['product_image'];

        if(!empty($_FILES['img']['name']))
        {
            unlink('../product_imgs/'. $pImg);

            // product Image:-
            $img = $_FILES['img'];

            $imgName = $img['name'];
            $imgTempLoc = $img['tmp_name'];
            $imgSize = $img['size'];
            $imgError = $img['error'];

            $imgType = explode('.', $imgName);
            $imgExt = strtolower(end($imgType));

            $allowed = array('png', 'jpg', 'jpeg');
            
            if(in_array($imgExt, $allowed))
            {
                if($imgError == 0)
                {
                    $pImg = $pName . '.' . $imgExt;
                    $imgDestination = '../product_imgs/' . $pImg;
                    move_uploaded_file($imgTempLoc, $imgDestination);
                }
                else
                {
                    header('Location: ../add_product.php?img="error"');
                }
            }
            else
            {
                header('Location: ../add_product.php?img="wrong_file_input"');
            }
        }

        // saving data in database

        $query = "UPDATE products SET product_name = '$pName', product_price = $pPrice, product_code = '$pCode', productInStock = $pQuantity, product_discount = $pDiscount, product_sizes='$pSizes', product_detail = '$pDesc', product_image = '$pImg', product_quantity = $pQuantity WHERE product_id = $id;";

        if($conn->query($query))
        {
            // Record added successfull
            header('Location: ../admin_panel.php?message=Updated_successfully');
        }
        else
        {
            // header('Location: ../admin_panel.php?message=something_went_wrong');
            echo "Error! Data Insertion Failed" . "<br>";
            echo mysqli_error($conn);
        }
    }
?>