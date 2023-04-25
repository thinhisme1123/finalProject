create database `ManageFilmWeb`;

use `ManageFilmWeb`;

create table `FilmInfo` (
	`fId` varchar(10),
	`fName` varchar(50),
	`fDesc` varchar(200),
	`fDir` varchar(50),
	`fCountry` varchar(50),
	`fGenre` varchar(20),
	`fDuration` varchar(20),
	`fYear` int,
	`fPosterPath` varchar(20),
	`fActor` varchar(200)
);

create table `userAcc` (
	`userid` varchar(10),
	`username` varchar(20),
	`userpass` varchar(50)
);

insert into `FilmInfo` values
	('AM', 'Ant Man', 'Armed with a super-suit with the astonishing ability to shrink in scale but increase in strength, cat burglar Scott Lang must embrace his inner hero and help his mentor, Dr. Hank Pym, pull off a plan that will save the world.', 'Peyton Reed', 'America', 'Action', '117', 2015, 'antman.jpg', 'Paul Rudd, Michael Douglas, Corey Stoll'),
	('AVEG', 'Avengers: End Game', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos actions and restore balance to the universe.', 'Anthony Russo, Joe Russo', 'America', 'Action', '181', 2019, 'avenge1.jpg', 'Robert Downney Jr., Chris Evans, Mark Ruffalo'),
	('AVIW', 'Avengers: Infinity War', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.', 'Anthony Russo, Joe Russo', 'America', 'Sci-fi', '149', 2018, 'avenge2.jpg', 'Robert Downney Jr., Chris Hemsworth, Mark ruffalo'),
	('BG', 'Bo Gia', 'Ba Sang makes daily sacrifices to support his dysfunctional family, which includes his siblings and his YouTuber son.', 'Tran Thanh, Ngoc Dang Vu', 'Vietnam', 'Comedy', '128', 2021, 'bogia.jpg', 'Tran Thanh, Tuan Tran, Ngan Chi'),
	('JW3', 'John Wick 3', 'John Wick is on the run after killing a member of the international assassins guild, and with a $14 million price tag on his head, he is the target of hit men and women everywhere.', 'Chad Stahelski', 'America', 'Thriller', '130', 2019, 'johnwick3.jpg', 'Keanu Reeves, Keanu Reeves, Ian McShane'),
	('JK', 'Joker', 'The rise of Arthur Fleck, from aspiring stand-up comedian and pariah to Gotham''s clown prince and leader of the revolution.', 'Todd Phillips', 'Canada', 'Thriller', '122', 2019, 'joker.jpg', 'Joaquin Phoenix, Robert De Niro, Robert De Niro'),
	('MB', 'Mat Biec', 'The movie tells the one-sided love story of a young man, Ngan, for his girlfriend from childhood, Ha Lan.', 'Victor Vu', 'Vietnam', 'Romance', '117', 2019, 'matbiec.jpg', 'Truc Anh, Tran Nghia, Tran Phong'),
	('NBN', 'Nha Ba Nu', 'Mrs. Nu is a domineering matriarch who runs her three-generational household the same way she runs her successful crab noodle soup stall. In short, she runs a tight ship in all aspects of life. However, when three generations live under one roof, sparks are bound to fly - and not necessarily the good kind. Feeling suffocated under her mother''s oppressive glare, Nu''s youngest daughter Nhi decides to elope with her carefree boyfriend John. But the young couple soon realizes how unprepared they are for their future together.', 'Tran Thanh', 'Vietnam', 'Romance', '117', 2023, 'nhabanu.jpg', 'Huynh Uyen An, Song Luan, Le Giang'),
	('DSMM', 'Doctor Strange in the Multiverse of Madness', 'Doctor Strange teams up with a mysterious teenage girl from his dreams who can travel across multiverses, to battle multiple threats, including other-universe versions of himself, which threaten to wipe out millions across the multiverse. They seek help from Wanda the Scarlet Witch, Wong and others.', 'Sam Raimi', 'America', 'Fantasy', '126', 2022, 'phuthuytoithuong.jpg', 'Benedict Cumberbatch, Benedict Cumberbatch, Chiwetel Ejiofor'),
	('R', 'Rom', 'Movie story revolves around the life, fate of street children, homeless, specializing in selling lottery results every afternoon.', 'Tran Thanh Huy', 'Vietnam', 'Drama', '79', 2019, 'rom.jpg', 'Tran Anh Khoa, Anh Tu, Jayvee Mai The Hiep'),
	('TG', 'The Glory', 'A woman lives for absolute revenge against her childhood bullies who destroyed her life.', 'Unknown', 'Korea', 'Drama', '42', 2022, 'theglory.jpg', 'Song Hye-Kyo, Lee Do-Hyun, Lee Do-Hyun'),
	('TLOU', 'The Last of Us', 'After a global pandemic destroys civilization, a hardened survivor takes charge of a 14-year-old girl who may be humanity''s last hope.', 'Neil Druckmann, Craig Mazin', 'America, Canada', 'Adventure', '40', 2023, 'thelastofus.png', 'Pedro Pascal, Bella Ramsey, Anna Torv'),
	('TQ', 'Trang Quynh', 'A clever prankster attempts to exonerate his beloved teacher from a troubling conviction that involves a wily bureaucrat.', 'Duc Thinh', 'Vietnam', 'Comedy', '98', 2019, 'trangquynh.jpg', 'Tran Quoc Anh, Cong Duong, Kha Nhu'),
	('U', 'Us', 'A family''s serene beach vacation turns to chaos when their doppelgängers appear and begin to terrorize them.', 'Jordan Peele', 'America, China, Japan', 'Horror', '116', 2019, 'us.jpg', 'Lupita Nyong''o, Winston Duke, Winston Duke'),
	('M', 'Muoi: The Curse Returns', 'Linh accepts the invitation to visit Hang, her long lost best friend at a old house in a nearby city. During her stay, Linh discovers the haunted portrait of Muoi and its curse throughout years of anger. Linh has to make a life and death decision of either running away or facing the curse in order to save her friend. Little does she know, while slowly unfolding the darkest secret behind this haunted portrait, Linh is falling deeper into the most horrific trap, which was contrived... specifically, just for her.', 'Hang Trinh', 'Vietnam', 'Horror', '95', 2022, 'muoi.png', 'Hong Anh, Binh Minh, Chi Pu'),
	('KD', 'Kingdom', 'While strange rumors about their ill King grip a kingdom, the crown prince becomes their only hope against a mysterious plague overtaking the land.', 'Unknown', 'Korea', 'Horror', '45', 2019, 'kingdom.jpg', 'Ju Ji-Hoon, Bae Doona, Kim Sungkyu'),
	('Su', 'Suzume', 'A modern action adventure road story where a 17-year-old girl named Suzume helps a mysterious young man close doors from the other side that are releasing disasters all over in Japan.', 'Makoto Shinkai', 'Japan', 'Anime', '122', 2022, 'suzume.jpg', 'Nanoka Hara, Hokuto Matsumura, Eri Fukatsu'),
	('YN', 'Your name', 'Two strangers find themselves linked in a bizarre way. When a connection forms, will distance be the only thing to keep them apart?', 'Makoto Shinkai', 'Japan', 'Anime', '106', 2016, 'yourname.jpg', 'Ryunosuke Kamiki, Mone Kamishiraishi, Ryo Narita'),
	('LCU', 'Last Chance U: Basketball', 'Explore an honest and gritty look inside the world of community college basketball.', 'Unknown', 'America', 'Sport', '60', 2021, 'basketball.jpg', 'Dezmond Washington, Rob Robinson, Kenneth Hunter'),
	('PH', 'Pearl Habor', 'A tale of war and romance mixed in with history. The story follows two lifelong friends and a beautiful nurse who are caught up in the horror of an infamous Sunday morning in 1941.', 'Michael Bay', 'America', 'War', '183', 2001, 'pearlhabor.jpg', 'Ben Affleck, Josh Hartnett, Kate Beckinsale');


insert into `userAcc` values
	('AD', 'admin', '123456');