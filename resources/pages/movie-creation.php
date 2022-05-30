<form action="add-movie-service.php" method="POST">
<div style="margin-left: 40px; margin-top: 40px">
	<div class="text-field">
		<label class="text-field__label" for="TITLE">Название</label>
		<input class="text-field__input" type="text" name="TITLE" id="TITLE">
	</div>
	<div class="text-field">
		<input class="text-field__input" type="hidden" name="ORIGINAL_TITLE" id="ORIGINAL_TITLE" value="ENG">
	</div>
	<div class="text-field">
		<label class="text-field__label" for="DESCRIPTION">Описание</label>
		<textarea class="text-field__input" name="DESCRIPTION" id="DESCRIPTION"></textarea>
	</div>
	<div class="text-field">
		<label class="text-field__label" for="DURATION">Длительность в минутах</label>
		<input class="text-field__input" type="text" name="DURATION" id="DURATION">
	</div>
	<div class="text-field">
		<label class="text-field__label" for="AGE_RESTRICTION">Возрастное ограничение</label>
		<input class="text-field__input" type="text" name="AGE_RESTRICTION" id="AGE_RESTRICTION">
	</div>
	<div class="text-field">
		<label class="text-field__label" for="RELEASE_DATE">Дата выхода</label>
		<input class="text-field__input" type="text" name="RELEASE_DATE" id="RELEASE_DATE">
	</div>
	<div class="text-field">
		<label class="text-field__label" for="RATING">Рейтинг</label>
		<input class="text-field__input" type="text" name="RATING" id="RATING">
	</div>
	<div class="text-field">
		<label class="text-field__label" for="DIRECTOR">Режиссер</label>
		<input class="text-field__input" type="text" name="DIRECTOR" id="DIRECTOR">
	</div>
	<button type="submit" class="header-request-add">Добавить</button>
</div>
</form>

