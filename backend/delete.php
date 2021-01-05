<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header('Location: ../login_page.php');
    }
    if(!isset($_GET['id']) && !isset($_GET['img']))
    {
        header('Location: ../admin_panel.php');
    }

    include('./connection.php');

    $row_id = $_GET['id'];
    $delete_query = "DELETE FROM products WHERE product_id=" . $row_id . "";

    if($conn->query($delete_query))
    {
        unlink('../product_imgs/' . $_GET['img']);
        // delete query successfull
        header('Location: ../admin_panel.php?message=deleted successfully');
    }
    else
    {
        // header('Location: ../admin_panel.php?message=something went wrong');
        echo "Error : " . $conn->error;
    }
?>