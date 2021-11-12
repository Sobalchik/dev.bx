<?php
/** @var array $movie */
?>
<div class="movie-list--item">
	<div class="movie-list--item-overlay">
		<div class="movie-list--item-overlay-more">
			<a class="movie-list--item-overlay-more-link" href="<?= "more.php?id=".$movie['id'] ?>">Подробнее</a>
		</div>
	</div>
	<div class="movie-list--item-image" style="background-image: url(<?=getMovieLink("./data/img",$movie['id'])?>)"></div>
	<div class="movie-list--item-wrapper">
		<div class="movie-list--item-head">
			<div class="movie-list--item-title"> <?= $movie['title']?> </div>
			<div class="movie-list--item-subtitle"><?= $movie['original-title']?></div>
		</div>
		<div class="movie-list--item-description"><?= getShortText($movie['description'], 300)?></div>
	</div>
	<div class="movie-list--item-bottom">
		<div class="movie-list--item-bottom-time">
			<div class="movie-list--item-bottom-time-clock" style="background-image: url(/res/img/clock.png)"></div>
			<?= "{$movie['duration']} мин. / ".getMovieLengthInHours($movie['duration']) ?> </div>
		<div class="movie-list--item-bottom-info"> <?= implode("," ,$movie['genres'])?> </div>
	</div>
</div>
