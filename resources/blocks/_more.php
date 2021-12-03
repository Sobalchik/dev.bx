<?php
/** @var array $movie */
?>
<div class="more">
	<div class="more-header">
		<div class="title-heart-wrapper">
			<div class="more-header-title"><?=htmlspecialchars($movie['TITLE'])?></div>
			<div class="more-header-heart" style="background-image: url(/res/img/heart.png)"></div>
		</div>
		<div class="subtitle-age-wrapper">
			<div class="more-header-subtitle"><?=htmlspecialchars($movie['ORIGINAL_TITLE'])?></div>
			<div class="more-header-age"><?=htmlspecialchars($movie['AGE_RESTRICTION'])."+"?></div>
		</div>
	</div>
	<div class="more-content">
		<div class="more-content-image" style="background-image: url(<?=htmlspecialchars(getMovieLink("./data/img",$movie['ID']))?>)"></div>
		<div class="more-content-information">
			<div class="more-content-information-rating">
				<?php for ($i = 0; $i < floor($movie['RATING']); $i++): ?>
					<div class="more-content-information-rating--item-cube<?=getColorByRating($movie['RATING'])?> "></div>
				<?php endfor; ?>

				<?php for ($i = 0; $i < 10-floor($movie['RATING']); $i++): ?>
				<div class="more-content-information-rating--item-cube"></div>
				<?php endfor;?>
				<div class="more-content-information-rating--item-round<?=getColorByRating($movie['RATING'])?>"><?=number_format ($movie['RATING'],1)?></div>
			</div>
			<div class="more-content-information-about-word">О фильме</div>
			<div class="more-content-information-describe">
				<div class="more-content-information-describe-column"><p>Год производства: </p> <p>Режиссер: </p> <p>В главных ролях: </p>
				</div>
				<div class="more-content-information-describe--item">
					<div class="more-content-information-describe--item-year"><?=htmlspecialchars($movie['RELEASE_DATE'])?></div>
					<div class="more-content-information-describe--item-director"><?=htmlspecialchars($movie['NAME'])?></div>
					<div class="more-content-information-describe--item-cast"><?=htmlspecialchars($movie['CAST'])?></div>
				</div>
			</div>
			<div class="more-content-information-description-word">Описание</div>
			<div class="more-content-information-description"><?=htmlspecialchars($movie['DESCRIPTION'])?></div>
		</div>
	</div>
</div>