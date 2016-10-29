#remote dir
SET @EXPORT_DIR = '/home/marcoher/tmp/02_int_to_roman';
SET @lslug = 'int-to-romans';

DELETE FROM images WHERE name = @lslug;
DELETE FROM posts WHERE lslug = @lslug;

INSERT INTO images(
	name, type, density, profile, width, height,
	image, created_at)
VALUES
(@lslug, 'image/jpg', 'original','original',3840,2160,
	LOAD_FILE(CONCAT(@EXPORT_DIR ,'/','int_to_romans.jpg')), NOW()
);


INSERT INTO posts(id, lang, lslug, title, uslug, descr, body, user_id, cover, visible, created_at) VALUES
(3, 'en',
	@lslug,
	'Converting Integers to Roman Numerals',
	'converting-integers-to-roman-numerals',
	'Explanation and code for converting whole numbers into roman numerals.',
	LOAD_FILE(CONCAT(@EXPORT_DIR ,'/','body.en.html')),
	1,'int-to-romans',
	'true',
	NOW()
);

INSERT INTO posts(id, lang, lslug, title, uslug, descr, body, user_id, cover, visible, created_at) VALUES
(4, 'es',
	@lslug,
	'Convirtiendo números enteros a números romanos',
	'Convirtiendo números enteros a números romanos',
	'Explicación y demostración de código para convertir numeros enteros decimales a números romanos.',
	LOAD_FILE(CONCAT(@EXPORT_DIR ,'/','body.es.html')),
	1,'int-to-romans',
	'true',
	NOW()
);
