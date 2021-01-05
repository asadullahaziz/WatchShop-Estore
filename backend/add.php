<?php
    if(isset($_POST['save']))
    {
        // getting data from form
        $pName = $_POST['productname'];
        $pPrice = $_POST['productprice'];
        $pDiscount = $_POST['productdiscount'];
        $pCode = $_POST['productcode'];
        $pSizes = $_POST['productsizes'];
        $pQuantity = $_POST['productquantity'];
        $pDesc = $_POST['description'];

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
                $imgNewName = $pName . '.' . $imgExt;
                $imgDestination = '../product_imgs/' . $imgNewName;
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

        // saving data in database
        include('./connection.php');

        $query = "INSERT INTO products values('', '$pName', $pPrice, '$pCode', $pQuantity, $pDiscount,'$pSizes', '$pDesc', '$imgNewName', $pQuantity)";

        if($conn->query($query))
        {
            // Record added successfull
            header('Location: ../admin_panel.php?message=Added_successfully');
        }
        else
        {
            // header('Location: ../admin_panel.php?message=something_went_wrong');
            echo "Error! Data Insertion Failed" . "<br>";
            echo mysqli_error($conn);
        }
    }
?>