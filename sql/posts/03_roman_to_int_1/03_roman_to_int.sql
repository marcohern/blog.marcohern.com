SET @lslug = 'roman-to-int';

DELETE FROM images WHERE name = @lslug;
DELETE FROM posts WHERE lslug = @lslug;

INSERT INTO images(
	name, type, density, profile, width, height,
	image, created_at)
VALUES
(@lslug, 'image/jpg', 'original','original',3840,2160,NULL, NOW());


INSERT INTO posts(id, lang, lslug, title, uslug, descr, body, user_id, cover, visible, created_at) VALUES
(5, 'en',
	@lslug,
	'Converting Roman Numerals to Integers',
	'converting-roman-numerals-to-integers',
	'Explanation and code for converting roman numerals into decimal numbers.',
	'',
	1,'roman-to-int',
	'true',
	NOW()
);

INSERT INTO posts(id, lang, lslug, title, uslug, descr, body, user_id, cover, visible, created_at) VALUES
(6, 'es',
	@lslug,
	'Convirtiendo números romanos a números decimales',
	'convirtiendo-numeros-romanos-a-numeros-decimales',
	'Explicación y demostración de código para convertir números romanos a números enteros decimales.',
	'',
	1,'roman-to-int',
	'true',
	NOW()
);
