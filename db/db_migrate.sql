CREATE TABLE language
(
	ID   varchar(2)   not null,
	NAME varchar(500) not null,

	Primary KEY (ID)
);

CREATE TABLE movie_title
(
	MOVIE_ID    int          not null,
	LANGUAGE_ID varchar(2)   not null,
	TITLE       varchar(500) not null,

	FOREIGN KEY FK_MT_MOVIE (MOVIE_ID)
		references movie (ID)
		ON DELETE RESTRICT
		ON UPDATE RESTRICT,
	FOREIGN KEY FK_MT_LANGUAGE (LANGUAGE_ID)
		references language (ID)
		ON DELETE RESTRICT
		ON UPDATE RESTRICT
);

INSERT INTO language (ID, NAME)
VALUES ('ru', 'Русский'),
       ('en', 'English'),
       ('de', 'Deutsch');

INSERT INTO movie_title(MOVIE_ID, LANGUAGE_ID, TITLE)
SELECT movie.ID, language.ID, movie.TITLE
FROM movie,
     language
where language.ID = 'ru';


ALTER TABLE movie
	DROP TITLE;