<?php
/** @var array $genres */
/** @var string $content */
/** @var array $config */
/** @var string $currentPage */
require "./data/movies.php";
require "./config/app.php";
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
			<li class="menu-item">
				<a class="menu-item-link <?= $currentPage === 'index'? "active" : "" ?>" href="<?= "index.php"?>"> <?=$config['menu']['index']?> </a>
			</li>
				<?php foreach($genres as $code => $name): ?>
					<li class="menu-item">
				<a class="menu-item-link <?= $currentPage === $name ? "active" : "" ?>" href="<?= "index.php?genre=".$code?>">  <?= $name ?> </a>
					</li>
				<?php endforeach; ?>
			<li class="menu-item" >
			<a class="menu-item-link <?= $currentPage === 'chosen'? "active" : "" ?>" href="<?= "chosen.php"?>"> <?= $config['menu']['chosen']?></a>
			</li>
		</ul>
	</div>
	<div class ="container">
		<div class="header">
			<div class="header-menu">
			<div class="header-menu-request">
				<div class="header-menu-request-image" style="background-image: url(/res/img/search.png)"></div>
				<div class="header-menu-request-words">Поиск по каталогу...</div>
			</div>
			<div class="header-request-find">Искать</div>
			<div class="header-request-add">
				<a class= "header-request-add-link" href="more.php?id=1">Добавить фильм</a>
			</div>
			</div>
		</div>
		<div class="content">
			<?= $content ?>
		</div>
	</div>
</div>
</body>