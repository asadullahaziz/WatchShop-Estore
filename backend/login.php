<?php 
    if(isset($_POST["Login"]))
    {
        include("./connection.php");

        $adname = $_POST["adminname"];
        $password = $_POST["password"];

        $query = "SELECT * FROM admin WHERE admin_name = '$adname' AND admin_password = '$password'";

        $result = $conn->query($query);

        $row = mysqli_num_rows($result);

        if($row > 0)
        {
            session_start();

            $_SESSION['admin'] = $adname;

            header('Location: ../admin_panel.php');
        }
        else
        {
            header('Location: ../login_page.php?login="failed"');
        }
    }

?>