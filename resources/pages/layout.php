<?php
/** @var array $genres */
/** @var string $content */
/** @var array $config */
/** @var string $currentPage */
require "./config/app.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Movies</title>
	<link rel="stylesheet" href="/resources/css/reset.css">
	<link rel="stylesheet" href="/resources/css/style.css">
</head>
<body>
<div class="wrapper">
	<div class="sidebar">
		<ul class="menu">
			<li class="menu-item">
				<a class="menu-item-link <?= $currentPage === 'index'? "active" : "" ?>" href="<?= "index.php"?>"> <?=$config['menu']['index']?> </a>
			</li>
				<?php foreach($genres as $genre):?>
					<li class="menu-item">
				<a class="menu-item-link <?= $currentPage === $genre['CODE'] ? "active" : "" ?>" href="<?= "index.php?genre=".$genre['CODE']?>">  <?= $genre['NAME'] ?> </a>
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
			</div>
				<form>
					<input class="header-menu-request-words" name="request" placeholder="Введите название фильма...">
					<button type="submit" class="header-request-find">Искать</button>
				</form>
			<div class="header-request-add">
				<a class= "header-request-add-link" href="add.php">Добавить фильм</a>
			</div>
			</div>
		</div>
		<div class="content">
			<?= $content ?>
		</div>
	</div>
</div>
</body>