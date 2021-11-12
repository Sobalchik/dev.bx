<?php
/** @var array $movie */
?>

<div class="more">
	<div class="more-header">
		<div class="title-heart-wrapper">
			<div class="more-header-title"><?=$movie['title']?></div>
			<div class="more-header-heart" style="background-image: url(/res/img/heart.png)"></div>
		</div>
		<div class="subtitle-age-wrapper">
			<div class="more-header-subtitle"><?=$movie['original-title']?></div>
			<div class="more-header-age"><?=$movie['age-restriction']."+"?></div>
		</div>
	</div>
	<div class="more-content">
		<div class="more-content-image" style="background-image: url(<?=getMovieLink("./data/img",$movie['id'])?>)"></div>
		<div class="more-content-information">
			<div class="more-content-information-rating">
				<?php for ($i = 0; $i < floor($movie['rating']); $i++): ?>
					<div class="more-content-information-rating--item-cube<?=getColorByRating($movie['rating'])?> "></div>
				<?php endfor; ?>

				<?php for ($i = 0; $i < 10-floor($movie['rating']); $i++): ?>
				<div class="more-content-information-rating--item-cube"></div>
				<?php endfor;?>
				<div class="more-content-information-rating--item-round<?=getColorByRating($movie['rating'])?>"><?=number_format ($movie['rating'],1)?></div>
			</div>
			<div class="more-content-information-about-word">О фильме</div>
			<div class="more-content-information-describe">
				<div class="more-content-information-describe-column"><p>Год производства: </p> <p>Режиссер: </p> <p>В главных ролях: </p>
				</div>
				<div class="more-content-information-describe--item">
					<div class="more-content-information-describe--item-year"><?=$movie['release-date']?></div>
					<div class="more-content-information-describe--item-director"><?=$movie['director']?></div>
					<div class="more-content-information-describe--item-cast"><?=implode(", ",$movie['cast'])?></div>
				</div>
			</div>
			<div class="more-content-information-description-word">Описание</div>
			<div class="more-content-information-description"><?=$movie['description']?></div>
		</div>
	</div>
</div>