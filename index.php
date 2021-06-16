<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="src/bootstrap.css" rel="stylesheet">
    <link href="src/style.css" rel="stylesheet">

    <title>Pocket, Inc. - Official Website</title>
  </head>
  <body class="bg-success">
  <?php require("nav.php"); ?>

  <div class="w-100 h-50 bg-success container text-light" id="header">
      <center>
        <img src="src/logo.png" style="width: 25%;height: 25%">
        <h3 style="font-family: 'Roboto Thin'">"Our Job, Improve the <b>World</b>. Via <u>Technology</u>!"</h3>
        <br><br>
        <button class="btn btn-outline-light">About Us</button>
        <a class="btn btn-outline-light" href="#products">Our Products</a>

        <hr class="bg-light w-25">
      </center>
    </div>
    <div class="container text-light">
      <div class="row" id="products">
        <div class="col">
          <h3>Products:</h3>
          <ul class="list-group bg-primary">
            <li class="list-group-item bg-success text-light">Pocket Browser</li>
            <li class="list-group-item bg-success text-light">Pocket Meet</li>
            <li class="list-group-item bg-success text-light">File Transfer</li>
            <li class="list-group-item bg-success text-light">FrontDis</li>
          </ul>
        </div>
        <div class="col">
          <h3>Solutions:</h3>
          <ul class="list-group bg-primary text-light">
            <li class="list-group-item bg-success text-light">Code Bin</li>
            <li class="list-group-item bg-success text-light">Team Manager</li>
            <li class="list-group-item bg-success text-light">Cloud Drive</li>
            <li class="list-group-item bg-success text-light">Web Code</li>
          </ul>
        </div>
      </div>
      <?php
      $blogs = false;
      if ($blogs) {
      echo '<center>
      <hr class="bg-light w-25">
      </center>
      <h3>Blog:</h3>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 bg-success">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <small class="text-dark">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-success">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-dark">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-success">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
              <small class="text-dark">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
      <br>
      <center><a class="btn btn-outline-light" href="blogs/">View All</a></center>
      ';
      }
      ?>
      <center>
        <hr class="bg-light w-25">
      </center>
    </div>
<?php require("footer.php"); ?>
  <script src="src/bootstrap.js"></script>
  </body>
</html>