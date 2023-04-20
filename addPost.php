<?php

    $con = new mysqli("localhost","root","","logindetails");
    if($con->connect_error){
        die("Failed to connect: " .$con->connect_error);
    }

    $sql = "SELECT * FROM post";
    $query = mysqli_query($con, $sql);

    $posts = array();//Creates an array called posts
    while ($row = mysqli_fetch_assoc($query)) {
        $posts[] = $row;//Runs through the query variable and adds all the values/posts held in them to the array
    }

    // Sort the posts by date in descending order
    usort($posts, function($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
    });//Now the array is in descending order and stored in variable posts which is called by the Blog.php file to output to the screen

    if (isset($_REQUEST["postBtn"])){
        $title = $_REQUEST["title"];
        $description = $_REQUEST["description"];

        $sql = "INSERT INTO post(ID, title, description, date) VALUES (NULL,'$title', '$description', current_timestamp())";
        mysqli_query($con, $sql);

        header("Location: Blog.php?info=added");
        exit();
    }
?>