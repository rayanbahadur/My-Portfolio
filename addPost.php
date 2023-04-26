<?php

    $con = new mysqli("localhost","root","","logindetails");
    if($con->connect_error){
        die("Failed to connect: " .$con->connect_error);
    }
    if (isset($_GET['month'])) {
        $monthValue = $_GET['month'];
        $sql = "SELECT * FROM post WHERE MONTH(date) = $monthValue";
    }
    else{
        $sql = "SELECT * FROM post";
    }
$query = mysqli_query($con, $sql);//Runs the query and stores the result in a variable called query
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

    $stmt = $con->prepare("INSERT INTO post(ID, title, description, date) VALUES (NULL, ?, ?, current_timestamp())");
    $stmt->bind_param("ss", $title, $description);
    $stmt->execute();

        header("Location: Blog.php?info=added");
        exit();
    }
?>
