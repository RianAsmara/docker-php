<?php

include '../app/vendor/autoload.php';
$foo = new App\Acme\Foo();

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title>Docker <?php echo $foo->getName(); ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

	<link rel="stylesheet" href="style.css">
    </head>
    <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <!-- <h3 class="masthead-brand">Cover</h3> -->
      <!-- <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
      </nav> -->
    </div>
  </header>

  <main role="main" class="inner cover">
    <!-- <h1 class="cover-heading">Docker PHP Mysql</h1> -->
    <p class="lead">
    <?php echo ucwords("now you're connecting on nginx web server through docker image") ?>
    </p>
    <!-- <br> -->
    <!-- <div class="row justify-content-center">
    <div class="col">
      <div class="card text-white bg-secondary" style="border-radius: 0px !important;max-width: 18rem;">
          <div class="card-body">
            <p>Server Address : <?php echo $foo->getServerAddress(); ?></p>
            <p>Server Name : <?php echo $foo->getServerName(); ?></p>
          </div>
      </div>
    </div>
    </div> -->
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <!-- <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p> -->
    </div>
  </footer>
</div>
</body>
</html>
