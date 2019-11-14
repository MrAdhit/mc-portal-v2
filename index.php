<?php 
require 'function.php';
require 'config.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title><?= $title; ?></title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 	<script src="https://kit.fontawesome.com/215ec2ae02.js" crossorigin="anonymous"></script>
 	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet"> 
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<link rel="shortcut icon" type="image/png" href="<?= $fav; ?>">
 </head>
 <body>
<nav class="navbar navbar-expand-lg navbar-light nav-w">
  <a class="navbar-brand" href="#"><h1><?= $srvname; ?></h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav h4 box-c">
      <a class="mx-5 nav-item nav-link active" href="<?= $home; ?>">Home <span class="sr-only">(current)</span></a>
      <a class="mx-5 nav-item nav-link active" href="<?= $forum; ?>">Forum</a>
      <a class="mx-5 nav-item nav-link active" href="<?= $store; ?>">Store</a>
      <a class="mx-5 nav-item nav-link active" href="<?= $vote; ?>">Vote</a>
    </div>
  </div>
</nav>
<br><br>
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-md-auto">
			<img class="logo" src="img/logo.png">
		</div>
	</div>
	<br><br>
	<div class="row d-flex justify-content-center">
		<div class="col-md-auto h4">
			<?= $desc; ?>
		</div>
	</div>
	<br><br><br>
	<div class="row d-flex justify-content-center h5">
		<div class="col-body col-md-auto m-3 p-3">
			<i class="fas fa-globe"></i> IP: <?= $ip; ?>
		</div>
		<div class="col-lg-4"></div>
		<div class="col-body col-md-auto m-3 p-3">
			<i class="fas fa-users"></i> Players Online: <?= $player; ?>
		</div>
	</div>
</div>
 </body>
 </html>