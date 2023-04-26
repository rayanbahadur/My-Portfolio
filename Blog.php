<?php
    session_start();
    include "addPost.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/smileyBlueSquare.png">
    <link rel="stylesheet" href="reset.css" type="text/css"/>
    <link rel="stylesheet" href="main.css" type="text/css"/>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="preview.js"></script>
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
                        <li class="listItem"><a href="index.php">Home</a></li>
                        <li class="listItem"><a href="AboutMe.html">About</a></li>
                        <li class="listItem"><a href="My%20Skills.html">Skills</a></li>
                        <li class="listItem"><a href="Education&Experience.html">Education & Experience</a></li>
                        <li class="listItem"><a href="Portfolio.html">Portfolio</a></li>
                        <li class="listItemC"><a href="Blog.php">Blog</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="Heading">
            <h2>The <span class="red">Recursive</span> Mind</h2>
        </div>

        <div class="blogRow">
            <article class="mainBlog">
                <div class="dropdownMenu">
                    <button id="button1"><span class="icon"><ion-icon name="calendar"></ion-icon></span>
                        <span class="text"><h5>Refine Search</h5></span></button>
                    <form action="" method="get">
                        <ul>
                            <li><a href="#" data-month="01"><span class="text">January</span></a></li>
                            <li><a href="#" data-month="02"><span class="text">February</span></a></li>
                            <li><a href="#" data-month="03"><span class="text">March</span></a></li>
                            <li><a href="#" data-month="04"><span class="text">April</span></a></li>
                            <li><a href="#" data-month="05"><span class="text">May</span></a></li>
                            <li><a href="#" data-month="06"><span class="text">June</span></a></li>
                            <li><a href="#" data-month="07"><span class="text">July</span></a></li>
                            <li><a href="#" data-month="08"><span class="text">August</span></a></li>
                            <li><a href="#" data-month="09"><span class="text">September</span></a></li>
                            <li><a href="#" data-month="10"><span class="text">October</span></a></li>
                            <li><a href="#" data-month="11"><span class="text">November</span></a></li>
                            <li><a href="#" data-month="12"><span class="text">December</span></a></li>
                            <li>
                                <button id="filterBtn" type="submit">Filter Posts</button>
                                <input type="hidden" name="month" id="month">
                            </li>
                        </ul>
                        </form>
                </div>
                <script type="text/javascript" src="menuSelect.js"></script>
                <section class="card" id="preview"></section>
                <?php foreach ($posts as $post) {?>
                    <section class="card">
                        <h3><?php echo $post['title'];?></h3>
                        <h5><?php echo date('d/m/y H:i', strtotime($post['date']));?></h5>
                        <p><?php echo $post['description'];?></p>
                    </section>
                <?php }?>
            </article>
            <aside class="blogAside">
                <?php
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
                        <form method="get" id="addPost">
                            <input type="text" id="title" name="title" placeholder="Title" minlength="3" maxlength="255" autocomplete="off"><br>
                            <textarea id="description" name="description" placeholder="Description" minlength="10" maxlength="2000" autocomplete="off"></textarea><br>
                            <div id="buttonDiv">
                                <button id="previewBtn" name="previewBtn">Preview</button>
                                <button id="postBtn" name="postBtn" action="addPost.php">Post</button>
                                <button id="clearBtn" name="clearBtn">Clear</button>
                            </div>
                        </form>
                    </div>
                <?php
                }else{?>
                <a href="login.html"><div class="login" role="alert">
                        <span class="icon"><ion-icon name="log-in"></ion-icon></span>
                        <span class="text"><h5>Please Login to Add a Post</h5></span>
                    </div></a>
                <?php
                }?>


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