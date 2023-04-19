<?php
    include "addPost.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/smileyBlueSquare.png">
    <link rel="stylesheet" href="reset.css" type="text/css"/>
    <link rel="stylesheet" href="main.css" type="text/css"/>
    <script src="clear.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Recursive Mind</title>
</head>
<body>
    <div class="BlogContainer">
        <header class="header">
            <nav class="nav">
                <div class="navList">

                    <ul>
                        <a href="index.php"><img class="logo" src="image/smileyBlue.png" alt="smiley"></a>
                        <li class="listItem"><p>Rayan Bahadur</p></li>
                        <li class="listItem"><a href="index.php">Home</a></li>
                        <li class="listItem"><a href="AboutMe.html">About</a></li>
                        <li class="listItem"><a href="My%20Skills.html">Skills</a></li>
                        <li class="listItem"><a href="Education&Experience.html">Education & Experience</a></li>
                        <li class="listItem"><a href="Portfolio.html">Portfolio</a></li>
                        <li class="listItemC"><a href="#">Blog</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="Heading">
            <h2>The <span class="red">Recursive</span> Mind</h2>
        </div>

        <div class="blogRow">
            <article class="mainBlog">
                <?php foreach ($query as $q){?>
                    <section class="card">
                        <h3><?php echo $q['title'];?></h3>
                        <h5><?php echo $q['date'];?></h5>
                        <p><?php echo $q['description'];?></p>
                    </section>
                <?php }?>
            </article>
            <aside class="blogAside">
                <?php
                session_start();
                if(isset($_SESSION['email'])) {// if a session is active
                    ?>
                    <div class="card1">
                        <?php if(isset($_REQUEST['info'])){?>
                            <?php if ($_REQUEST['info'] == "added"){?>
                                <div class="success" role="alert">
                                    <h5>Post has been added successfully</h5>
                                </div>
                            <?php } ?>
                        <?php } ?>
                        <h3>Add Post</h3>
                        <form action="addPost.php" method="get">
                            <input type="text" id="title" name="title" placeholder="Title" required minlength="3" maxlength="255"><br>

                            <textarea id="description" name="description" placeholder="Description" required minlength="10" maxlength="2000"></textarea><br>

                            <button id="postBtn" name="postBtn">Post</button>
                            <button id="clearBtn">Clear</button>
                        </form>
                    </div>
                <?php
                }?>
                <script src="clear.js"></script>

                <div class="card">
                    <h3>About Me</h3>
                    <div class="blogImg"><img src="image/Profile%20Picture.png" alt="placeholder image"></div>
                    <p>I am currently a Computer Science student at the Queen Mary University of London</p>
                </div>

                <div class="card">
                    <h3>Follow Me</h3>
                    <div class="b2">
                        <a href="https://github.com/rayanbahadur16/"><img src="image/GitHub.svg" alt="GitHub"></a>
                        <a href="https://www.linkedin.com/in/rayan-bahadur-b6b264258/"><img src="image/LinkedIn.svg" alt="LinkedIn"></a>
                        <a href="https://www.instagram.com/rayanb_2004/"><img src="image/Instagram.svg" alt="Instagram"></a>
                    </div>
                </div>
            </aside>
        </div>

        <footer class="footer">
            <p>Rayan Bahadur 2023</p>
        </footer>
    </div>
</body>
</html>
