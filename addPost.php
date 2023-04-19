<?php

    $con = new mysqli("localhost","root","","logindetails");
    if($con->connect_error){
        die("Failed to connect: " .$con->connect_error);
    }
    else{
        if (isset($_REQUEST["postBtn"])){
            $title = $_REQUEST["title"];
            $description = $_REQUEST["description"];

            $sql = "INSERT INTO post(ID, title, description, date) VALUES (NULL,'$title', '$description', current_timestamp())";
            mysqli_query($con, $sql);

            header("Location: Blog.php?info=added");
            exit();
        }
    }
?>


