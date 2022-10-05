<?php
        session_start();
        // $username = $_SESSION["username"];
        echo "<script>alert('You have been logged out!\\nSee you again!');location.href='main.php';</script>";
        session_destroy();

    ?>
    