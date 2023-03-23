<?php 
include "functions.php"
?>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reviews</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <script src="script.js"></script>
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
        
<div class="w3-container w3-blue" style="padding: 20px 20px ;height: 12">
        <h2 style="text-align: center;" class="title is-1-mobile is-2-tablet is-3-desktop">Write a Review</h2>
</div>
<?php
$db_name = "reviews.db";
$db = new SQLite3($db_name);
$QUERY="SELECT * FROM reviews";
$reviews = array();
$res= $db->query($QUERY);
while($review = $res->fetchArray(SQLITE3_ASSOC)){
   // array_push($reviews,$review);

?>
        <div class="card">
  <div class="card-image">
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-4"><?php 
         print($review['title']);
        ?></p>
      </div>
    </div>
    <div class="content"><?php
    print($review['review']."<br>".$review['rating']." stars"."<br>");
     ?></a>
      <br>
    </div>
  </div>
</div>
<?php
 }
 ?>

<form id="reviews" method="post" action="post.php">
                <div class="field">
                <label for="email" class="label is-size-4 has-text-weight-light"></label>
                <input type="text" name="userid" id="userid" class="input x" placeholder="Name"
                        >
        </div>
        <div class="field">
                <label for="name" class="label is-size-4 has-text-weight-light"></label>
                <input type="text" name="title" id="title" class="input x" placeholder="Title"
                         autofocus>
        </div>
<select class="select" style="margin: 10px 10px;" name="rating">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
        <div class="field">
                <textarea name="review" id="review" rows="5" class="textarea is-medium x" placeholder="Review"></textarea>
        </div>
        <button type="submit" class="button is-success is-size-5">Submit</button>
</form>
<footer class="footer">
        <div class="content has-text-centered">
                <p>
                        <strong>Bulk Gravel Inc</strong> by Bilal Ahmed
                        <br>
                        <p>© 2023</p>
                </p>
        </div>
</footer>
</body>
</html>