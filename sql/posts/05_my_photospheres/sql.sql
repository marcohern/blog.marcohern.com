SET @lslug = 'testing-panorama-viewers';

DELETE FROM images WHERE name = @lslug;
DELETE FROM posts WHERE lslug = @lslug;

INSERT INTO images(
	name, type, density, profile, width, height,
	image, created_at)
VALUES
(@lslug, 'image/jpg', 'original','original',3840,2160,NULL, NOW());


INSERT INTO posts(id, lang, lslug, title, uslug, descr, body, css, scripts, user_id, cover, visible, created_at) VALUES
(7, 'en',
	@lslug,
	'Testing Photo Sphere (Panorama) viewers',
	'testing-panorama-viewers',
	'I explain how I deployed photosphere (360 panorama) viewers on my blog using my own photopheres, which I took with my cellphone camera.',
	'',
	1,'testing-panorama-viewers',
	'true',
	NOW()
);

INSERT INTO posts(id, lang, lslug, title, uslug, descr, body, css, scripts, user_id, cover, visible, created_at) VALUES
(8, 'es',
	@lslug,
	'Probando visores de Foto-espheras (Panoramas)',
	'probando-visores-de-panoramas',
	'Explico como logre implementar en mi blog visores para mis propias Foto-esferas que yo he tomado con la camara de mi movil.',
	'',
	1,'testing-panorama-viewers',
	'true',
	NOW()
);
