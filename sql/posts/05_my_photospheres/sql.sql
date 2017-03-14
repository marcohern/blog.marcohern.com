SET @lslug = 'testing-panorama-viewers' COLLATE utf8_unicode_ci;

DELETE FROM images WHERE name = @lslug;
DELETE FROM posts WHERE lslug = @lslug;

INSERT INTO images(
	name, type, density, profile, width, height,
	image, created_at)
VALUES
(@lslug, 'image/jpg', 'original','original',1920,1080,NULL, NOW());


INSERT INTO posts(id, lang, lslug, title, uslug, descr, body, css, scripts, user_id, cover, visible, created_at) VALUES
(7, 'en',
	@lslug,
	'Testing Photo Sphere (Panorama) viewers',
	'testing-panorama-viewers',
	'I explain how I deployed photosphere (360 panorama) viewers on my blog using my own photopheres, which I took with my cellphone camera.',
	'',
	'/lib/pannellum/css/pannellum.css',
	'/lib/pannellum/js/libpannellum.js\n/lib/pannellum/js/pannellum.js\n/js/posts/testing-panorama-viewers.js',
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
	'/lib/pannellum/css/pannellum.css',
	'/lib/pannellum/js/libpannellum.js\n/lib/pannellum/js/pannellum.js\n/js/posts/testing-panorama-viewers.js',
	1,'testing-panorama-viewers',
	'true',
	NOW()
);
