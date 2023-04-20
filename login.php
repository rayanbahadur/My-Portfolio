<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con = new mysqli("localhost","root","","logindetails");
    if($con->connect_error){
        die("Failed to connect: " .$con->connect_error);
    } else{
        $stmt = $con->prepare("select * from users where email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows >0){
            $data = $stmt_result->fetch_assoc();
            if ($data['password'] === $password){
                $_SESSION['email'] = $email;
                $_SESSION['logged_in'] = true;
                header("Location: Blog.php?");
                exit();
            }
        }
        else{
            echo "<script>
                alert('Invalid Email or Password');
                window.location.href = 'login.html';
                </script>";

        }
    }
    ?>