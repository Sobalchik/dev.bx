<?php
/** @var array $movie */
?>
<div class="movie-list--item">
	<div class="movie-list--item-overlay">
		<div class="movie-list--item-overlay-more">
			<a class="movie-list--item-overlay-more-link" href="<?= "more.php?id=".$movie['ID'] ?>">Подробнее</a>
		</div>
	</div>
	<div class="movie-list--item-image" style="background-image: url(<?=getMovieLink("./data/img",$movie['ID'])?>)"></div>
	<div class="movie-list--item-wrapper">
		<div class="movie-list--item-head">
			<div class="movie-list--item-title"> <?= $movie['TITLE']?> </div>
			<div class="movie-list--item-subtitle"><?= $movie['ORIGINAL-TITLE']?></div>
		</div>
		<div class="movie-list--item-description"><?= getShortText($movie['DESCRIPTION'], 300)?></div>
	</div>
	<div class="movie-list--item-bottom">
		<div class="movie-list--item-bottom-time">
			<div class="movie-list--item-bottom-time-clock" style="background-image: url(/res/img/clock.png)"></div>
			<?= "{$movie['DURATION']} мин. / ".getMovieLengthInHours($movie['DURATION']) ?> </div>
		<div class="movie-list--item-bottom-info"> <?= $movie['GENRE']?> </div>
	</div>
</div>
