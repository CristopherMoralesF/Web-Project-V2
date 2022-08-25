/* ------------------- Data Base creation ------------------- */
DROP DATABASE IF EXISTS CHAT_PROYECTO; 
CREATE DATABASE CHAT_PROYECTO; 
USE CHAT_PROYECTO; 

/* ------------------- Tables creation ------------------- */
DROP TABLE IF EXISTS ROLES; 
DROP TABLE IF EXISTS USUARIOS; 
DROP TABLE IF EXISTS RATE; 
DROP TABLE IF EXISTS HILO; 
DROP TABLE IF EXISTS MENSAJE;

CREATE TABLE ROLES (
	ID_ROLE 	INT NOT NULL PRIMARY KEY ,
    TIPO_ROLE 	VARCHAR(25) NOT NULL
); 

CREATE TABLE USUARIOS (
	ID_USUARIO 		INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    NOMBRE_USUARIO	VARCHAR(50) NOT NULL, 
    CONTRASEÑA 		VARCHAR(25) NOT NULL, 
    ROLE_USUARIO 	INT NOT NULL, 
    ESTADO 			BOOLEAN, 
    CDATE date DEFAULT NULL,
    FOREIGN KEY (ROLE_USUARIO) REFERENCES ROLES (ID_ROLE) ON DELETE CASCADE ON UPDATE CASCADE 
); 

CREATE TABLE RATE (
	ID_RATE 	INT NOT NULL PRIMARY KEY, 
    TIPO_RATE 	VARCHAR(25)
); 

CREATE TABLE HILO (
	ID_HILO 	INT NOT NULL PRIMARY KEY, 
    NOMBRE_HILO VARCHAR(25), 
    ID_RATE 	INT NOT NULL, 
    FOREIGN KEY (ID_RATE) REFERENCES RATE (ID_RATE) ON DELETE CASCADE ON UPDATE CASCADE 
); 

CREATE TABLE MENSAJE (
	ID_COMENTARIO 	INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    ID_USUARIO 		INT NOT NULL, 
    ID_HILO 		INT NOT NULL, 
    FECHA 			DATE NOT NULL, 
    MENSAJE VARCHAR(1000) NOT NULL,
    FOREIGN KEY (ID_USUARIO) REFERENCES USUARIOS (ID_USUARIO) ON DELETE CASCADE ON UPDATE CASCADE, 
    FOREIGN KEY (ID_HILO) REFERENCES HILO (ID_HILO) ON DELETE CASCADE ON UPDATE CASCADE 
); 

CREATE TABLE LOG_TYPE (
    LOG_TYPE_ID INT NOT NULL PRIMARY KEY,
    LOG_DESCRIPTION VARCHAR(25)
);

CREATE TABLE AUDIT_LOGS (
	ID_LOG 			INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    ID_USUARIO		INT NOT NULL,
    LOG_DESCRIPTION 	VARCHAR(100) NOT NULL, 
    LOG_TYPE        VARCHAR(25) NOT NULL, 
    FECHA        	DATE NOT NULL,
    FOREIGN KEY (ID_USUARIO) REFERENCES USUARIOS (ID_USUARIO) ON DELETE CASCADE ON UPDATE CASCADE, 
    FOREIGN KEY (ID_LOG) REFERENCES LOG_TYPE (LOG_TYPE_ID) ON DELETE CASCADE ON UPDATE CASCADE 

);

/* ------------------- Insert Values ------------------- */
INSERT INTO ROLES VALUES
	(1, 'Admin'), 
    (2, 'Moderador'),
    (3, 'Usuario'); 
    
SELECT * FROM USUARIOS;

INSERT INTO USUARIOS VALUES 
	(1,'Cristopher Morales', 'Cris123',1, TRUE,NOW()),
    (2,'Roberto Rodriguez','Rob123',2,TRUE,NOW()),
    (3,'Diego Lee','Diego123',3,TRUE,NOW());


INSERT INTO RATE VALUES
	(1, 'TP'),
    (2, '+15'),
    (3, '+18'),
    (4, '+25');
    
INSERT INTO HILO VALUES 
	(1, 'Peliculas',2),
    (2, 'Musica', 1), 
    (3, 'Videojuegos',3),
    (4, 'Comida',1),
    (5, 'Jardineria',1),
    (6, 'Viajes',3),
    (7, 'Economia',4),
    (8, 'Ciencia',3),
    (9, 'Mascotas',1);


INSERT INTO MENSAJE VALUES
(1,1,7,'2022-01-01',' New Horizons, much like its predecessors, operates outside of the boundaries of most games. While the most tension youll ever feel is while sprinting away from wasps, theres a warmth and comfort in the code which you wont find almost anywhere else.'),
(2,2,3,'2022-02-01',' fans and first-time players are going to find themselves losing hours at a time gathering materials, creating new furniture, and making their island undeniably theirs. Every moment is unashamedly blissful, with excellently-written characters that truly feel alive and an island paradise that gives infinitely back more than you put in. Back when Animal Crossing: New Leaf hit the shelves all those years ago and created a whole new generation of fans, many people were wondering how Nintendo could possibly top it, but here we have our answer. This is a masterpiece that has been well worth waiting for.'),
(3,2,3,'2022-03-01','Telegraph,With a game this broad and lengthy, thereâ€™s more to discuss than I could fit in one review, but suffice it to say, this a game that Nintendo have clearly worked incredibly hard to get right. It shines at every moment, from the wind rustling through the trees, to the sunset glinting off the water to the jaunty tunes at the start of the day fading into more relaxing melodies in the evening. Add dozens of much needed quality of life features (hello player customisation, autosave, couch co-op, and eight-player online play) and it all adds up to the perfect DIY recipe for the most chilled out, relaxing, and engaging life simulator ever.'),
(4,1,1,'2022-04-01','VG247,Animal Crossing: New Horizons is everything I hoped it would be, and itâ€™s yet another stellar release that showcases a confident Nintendo at its best. It is excellent, and is easily another must-own Switch title â€“ at least, if you can understand and embrace Animal Crossingâ€™s uniquely lazy pace.'),
(5,3,6,'2022-05-01','Nintendo Insider,Above all else, Animal Crossing: New Horizons is an unbeatable feel-good experience and an essential purchase for anyone that owns a Nintendo Switch. As heartwarming as it is wholesome, Nintendo has delivered meaningful changes that help to structure your peaceful island existence. Every day has the potential to offer something new, and, thanks to that, it will be a game that many will enjoy investing countless hours (and Bells) in. Oh, and heroically leaping across rivers with the Vault Pole will never get old.'),
(6,1,9,'2022-06-01','Trusted Reviews,Animal Crossing: New Horizons is the best game Ive played this year, and immediately cements itself as one of the generations defining experiences. Fans will be playing it for years, watching as the seasons roll by and unveil the true potential of what has been created here.'),
(7,1,6,'2022-07-01','VGC,Nintendos comforting life sim is a tranquil haven at a time the world needs it most.,2020-03-16'),
(8,1,6,'2022-02-15','God is a Geek,A beautiful, welcoming game that is everything and anything you want it to be. This is one youll play all year and beyond, and its exactly what the world needs right now.'),
(9,1,6,'2022-02-15','This game is the best one I have ever play'),
(10,1,4,'2022-04-01','This game is the best one I have ever play'),
(11,1,5,'2022-04-01','This game is the best one I have ever play'),
(12,1,9,'2022-06-01','This game is the best one I have ever play'),
(13,1,8,'2022-06-01','This game is the best one I have ever play'),
(14,1,7,'2022-06-01','This game is the best one I have ever play'),
(15,1,3,'2022-06-15','This game is the best one I have ever play'),
(16,1,4,'2022-06-15','This game is the best one I have ever play'),
(17,3,2,'2020-03-15','MMORPG.com,As much as I love Animal Crossing, I suppose I expected just a lot more than what weâ€™ve seen in New Leaf and Pocket Camp. I would even throw my hands up in elation if Gyroids made their triumphant return as audible and visual furniture once again.  Despite some of these minor misgivings, and lost opportunities in my estimation, Animal Crossing: New Horizons delivers on an island building simulation that will not disappoint. If youâ€™re headed to the island, say â€œHiâ€ to Nook for me.'),
(18,3,9,'2022-04-15','Slant Magazine,By consolidating so much power in your hands, the game threatens to upend the Animal Crossing vision of community living.'),
(19,3,9,'2022-05-15','Hardcore Gamer,Animal Crossing has always been a series where every little thing leads to something productive. Doing nothing and staring off into the sky is relaxing, decorating houses is fun and catching critters feels rewarding. Thereâ€™s never been a real â€œpointâ€ to Animal Crossing but thatâ€™s what makes it enjoyable, as every person can enjoy and do what they like at their own pace. New Horizons nails this feeling more than ever, with so many options and lots of things to collect and enjoy. While itâ€™s easy to play in short bursts, itâ€™s often hard to stop playing when ideas keep coming and experimentation is so much fun when thereâ€™s little to no consequences. New Horizons is by far the best Animal Crossing and anyone looking for a way to relax or get creative should not miss out.'),
(20,2,3,'2022-06-15','Impulsegamer,Animal Crossing New Horizons is pure fun and proves that this game still has it! So what are you waiting for, go out there and build your island and meet a colourful assortment of animals that will call your island home! Recommended from start to finish and then back again!'),
(21,1,4,'2022-07-18','PLAY! Zine,Animal Crossing: New Horizons is a definitive Animal Crossing experience, no fan should miss. Lots of great additions, make for the most customizable game the series ever had. Build homes and furniture, but also change entire island landscapes, in this everlasting source - of things to do.');

INSERT INTO LOG_TYPE VALUES
	(1, 'UPDATE'), 
    (2, 'DELETE'),
	(3, 'CREATE'), 
    (4, 'TRANSACTION ERROR');

    


