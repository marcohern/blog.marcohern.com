
SET @lslug = 'preparing-for-the-google-interview';

DELETE FROM images WHERE id IN(1);
DELETE FROM posts WHERE lslug = @lslug;

INSERT INTO images(
	id, name, type, density, profile, width, height,
	image, created_at)
VALUES
(1, 'googleplex', 'image/jpg', 'original','original',3264,2448,
	LOAD_FILE(CONCAT(@EXPORT_DIR ,'/','googleplex.jpg')), NOW()
);

INSERT INTO posts(id, lang, lslug, title, uslug, descr, body, user_id, cover, visible, created_at) VALUES
(1, 'en',
	@lslug,
	'Preparing for the Google Interview',
	'preparing-for-the-google-interview',
	'My experience on preparing for the google interview.',
	LOAD_FILE(CONCAT(@EXPORT_DIR ,'/','body.en.html')),
	1,'googleplex',
	'true',
	NOW()
);

INSERT INTO posts(id, lang, lslug, title, uslug, descr, body, user_id, cover, visible, created_at) VALUES
(2, 'es',
	@lslug,
	'Preparación para una entrevista con Google',
	'preparacion-para-una-entrevista-con-google',
	'Mi experiencia preparandome para una entrevista con google.',
	LOAD_FILE(CONCAT(@EXPORT_DIR ,'/','body.es.html')),
	1,'googleplex',
	'true',
	NOW()
);
