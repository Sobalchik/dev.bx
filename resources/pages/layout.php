<?php
/** @var array $genres */
/** @var string $content */
require "./data/movies.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="/resources/css/reset.css">
	<link rel="stylesheet" href="/resources/css/style.css">
</head>
<body>
<div class="wrapper">
	<div class="sidebar">
		<div class="sidebar--platform" style="background-image: url(/res/img/bitflix.png)"> </div>
		<ul class="menu">
			<li class="menu-item menu-item--active">
				<a href="http://index.php">Главная</a>
			</li>
				<?php foreach($genres as $code => $name): ?>
					<li class="menu-item">
				<a href="ref.html"> <?= $name ?> </a>
					</li>
				<?php endforeach; ?>
			<li class="menu-item">
			<a href="http://index.php">Избранное</a>
			</li>
		</ul>
	</div>
	<div class ="container">
		<div class="header"></div>
		<div class="content">
			<?= $content ?>
		</div>
	</div>
</div>
</body>