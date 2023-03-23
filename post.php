<?php

$data = $_POST;

$db_name = "reviews.db";
$db = new SQLite3($db_name);

//print(json_encode($data));
$QUERY='INSERT INTO reviews ("date","userid","rating","title","review") VALUES('.time().",'".$data['userid']."',".$data['rating'].",'".$data['title']."','".$data['review']."');";
//print($QUERY);
$db->exec($QUERY);
//$lastrow = $db->
?>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Submited</title>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="styles.css">
</head>
<body>
        <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                        <a class="navbar-item" href="#">
                                <h2><b>Bulk Gravel Inc</b></h2>
                        </a>

                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                                data-target="navbarBasicExample">
                                <span aria-hidden="true"></span>
                                <span aria-hidden="true"></span>
                                <span aria-hidden="true"></span>
                        </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-start">
                                <a class="navbar-item" href="index.html">
                                        Home
                                </a>

                                <a class="navbar-item" href="about.html">
                                        About Us
                                </a>

                                <a class="navbar-item" href="contact.html">
                                        Contact
                                </a>

                                <a class="navbar-item" href="reviews.php">
                                        Reviews
                                </a>
                        </div>

                        <div class="navbar-end">
                                <div class="navbar-item">
                                        <div class="buttons">
                                                <!-- <a class="button is-primary">
                                                <strong>Sign up</strong>
                                        </a> -->
                                                <a class="button is-primary" href="">
                                                        Buy Now
                                                </a>
                                        </div>
                                </div>
                        </div>
                </div>
        </nav>
        <?php 
         echo '<h1 class="title is-2 is-center">Thanks for your feedback!</h1>';
        ?>        
</body>
</html>