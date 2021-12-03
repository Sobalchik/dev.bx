<?php
/** @var array $movie */
?>
<div class="movie-list--item">
	<div class="movie-list--item-overlay">
		<div class="movie-list--item-overlay-more">
			<a class="movie-list--item-overlay-more-link" href="<?= "more.php?id=". htmlspecialchars($movie['ID']) ?>">Подробнее</a>
		</div>
	</div>
	<div class="movie-list--item-image" style="background-image: url(<?=htmlspecialchars(getMovieLink("./data/img",$movie['ID']))?>)"></div>
	<div class="movie-list--item-wrapper">
		<div class="movie-list--item-head">
			<div class="movie-list--item-title"> <?= htmlspecialchars($movie['TITLE'])?> </div>
			<div class="movie-list--item-subtitle"><?= htmlspecialchars($movie['ORIGINAL-TITLE'])?></div>
		</div>
		<div class="movie-list--item-description"><?= htmlspecialchars(getShortText($movie['DESCRIPTION'], 300))?></div>
	</div>
	<div class="movie-list--item-bottom">
		<div class="movie-list--item-bottom-time">
			<div class="movie-list--item-bottom-time-clock" style="background-image: url(/res/img/clock.png)"></div>
			<?= htmlspecialchars("{$movie['DURATION']} мин. / ".(getMovieLengthInHours($movie['DURATION']))) ?> </div>
		<div class="movie-list--item-bottom-info"> <?= htmlspecialchars($movie['GENRE'])?> </div>
	</div>
</div>
