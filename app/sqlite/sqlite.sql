
CREATE TABLE `athletes` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `versus` TEXT,
  `athlete_image` TEXT ,
  `user_id` INTEGER,
  `sport_id` INTEGER,
  `subcategory_id` INTEGER
);



INSERT INTO `athletes` (`id`, `name`, `versus`, `athlete_image`, `user_id`, `sport_id`, `subcategory_id`) VALUES
(1, 'Malik', 'Canada', 'uploads/gael.jpg', 8, 1, 0),
(2, 'Tristan', 'USA', 'uploads/big_boss.jpg', 8, 1, 0),
(11, 'Malik', 'China', '', 6, 1, 0),
(13, 'Tristan', 'Russia', '', 6, 2, 0),
(14, 'Tristan', 'Tristan', 'uploads/gael.jpg', 8, 1, 0),
(15, 'Ma', 'Ma', 'uploads/gael.jpg', 8, 1, 0),
(16, 'Mathieu', 'Ma', '', 6, 2, 2),
(17, 'Bruno', 'sa', '', 8, 1, 5);


CREATE TABLE `athletes_events` (
  `id` INTEGER PRIMARY KEY ASC,
  `athlete_id` INTEGER,
  `event_id` INTEGER
);



INSERT INTO `athletes_events` (`id`, `athlete_id`, `event_id`) VALUES
(1, 1, 1),
(3, 1, 3),
(4, 9, 1),
(6, 10, 1),
(9, 13, 1),
(10, 1, 4),
(11, 2, 4),
(12, 11, 4),
(13, 14, 1),
(14, 15, 1),
(15, 16, 3),
(16, 17, 1);



CREATE TABLE `categories` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT 
);



INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'books'),
(2, 'music'),
(3, 'electronics');



CREATE TABLE `events` (
  `id` INTEGER PRIMARY KEY ASC,
  `title` TEXT,
  `score` INTEGER
);


INSERT INTO `events` (`id`, `title`, `score`) VALUES
(1, 'Championship', 15),
(3, 'Semi-Finals', 166),
(4, 'QuarterFinals', 89);


CREATE TABLE `reviews` (
  `id` INTEGER PRIMARY KEY ASC,
  `athlete_id` INTEGER,
  `name` TEXT NOT NULL,
  `email` TEXT NOT NULL,
  `text` TEXT NOT NULL
);


INSERT INTO `reviews` (`id`, `athlete_id`, `name`, `email`, `text`) VALUES
(1, 1, 'The War ', 'MM@gmail.com', 'This was a tough one');


CREATE TABLE `sportchoices` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT ,
  `created` TEXT ,
  `modified` TEXT 
);



INSERT INTO `sportchoices` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Football', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(2, 'Basketball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(3, 'Soccer', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(4, 'Rugby', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(5, 'Badminton', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(6, 'Fistball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(7, 'Tennis', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(8, 'Cadillac', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(9, 'Volleyball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(10, 'Archery', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(11, 'Karate', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(12, 'Netball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(13, 'Baseball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(14, 'Slamball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(15, 'Softball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(16, 'Bat-and-Trap', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(17, 'Cricket', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(18, 'Punchball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(19, 'Stickball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(20, 'T-ball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(21, 'Quidditch', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(22, 'Skateboarding', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(23, 'Skysurfing', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(24, 'Surfing', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(25, 'Wakeboarding', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(26, 'Curving', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(27, 'Rock Climbing', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(28, 'Kin-Ball', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(29, 'Yukigassen', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(30, 'Ice climbing', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(31, 'Air Climbing', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(32, 'Hiking', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(33, 'Mountaineering', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(34, 'Cycling', '2015-11-09 17:42:47', '2015-11-09 17:42:47'),
(35, 'Coasteering', '2015-11-09 17:42:47', '2015-11-09 17:42:47');


CREATE TABLE IF NOT EXISTS `sports` (
  `id` INTEGER PRIMARY KEY ASC,
  `sport` TEXT
);


INSERT INTO `sports` (`id`, `sport`) VALUES
(1, 'Football'),
(2, 'BaseBall'),
(3, 'a');



CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` INTEGER PRIMARY KEY ASC,
  `category_id` INTEGER,
  `name` TEXT
);


INSERT INTO `subcategories` (`id`, `category_id`, `name`) VALUES
(1, 1, 'fiction'),
(2, 1, 'biography'),
(3, 1, 'children'),
(4, 2, 'classical'),
(5, 2, 'rock'),
(6, 2, 'jazz'),
(7, 3, 'camera'),
(8, 3, 'audio'),
(9, 3, 'tv');


CREATE TABLE IF NOT EXISTS `users` (
  `id` INTEGER PRIMARY KEY ASC,
  `username` TEXT,
  `password` TEXT,
  `role` TEXT,
  `email` TEXT,
  `active` INTEGER
);


INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `active`) VALUES
(6, 'user', '$2a$10$n7c8uvn3RleqvlPqw2H26.K/iVOWHOXjUbQnN34kEhymjtrTJU7Ey', 'user', 'MMalikMo@gmail.com', 1),
(8, 'admin', '$2a$10$EscvhRQ0vqEww1dJTIiaZO8nor0sfEowNbuTMo4Dwysfa.7eGRohe', 'admin', 'Admin@gmail.com', 1),
(9, 'Malik', '$2a$10$Pib3kkZQNoRjeNMiK9Nqk.kkPKNirMKnsGJ11/K/JajrgLrQsDJpm', 'user', 'MM@g.com', 0),
(16, 'bruh', '$2a$10$veOBaLObkxwNS7YmZy7b7.Z5alkMTa9oY99fEPvTrUe6tdwwx.Oou', 'visitor', 'MMalikMo@gmail.com', 0),
(17, 'lol', '$2a$10$vPaU1tYduikoPVNBmCSG7uHpph9xO63VhI2f0fhxvaUO21xS8ShVS', 'user', 'MMalikMo@gmail.com', 1),
(18, 'lol', '$2a$10$XTv5CDxW7k/.jqAtAXXEJucsvgdZodA9jiZqfvQbXXbIuREtnUEQ6', 'user', 'MMalikMo@gmail.com', 0),
(19, 'lol', '$2a$10$7YJ9LwG8CElo9lgBcu85duffI7cP/7xjQjfGX5FAQBIgipOaoftlC', 'user', 'MMalikMo@gmail.com', 0),
(20, 'lol', '$2a$10$nEyzk4b3qg8h3kAt66ezuuBtMwsz9RSHqd8xGc1lgFexSuzVi7UmC', 'user', 'MMalikMo@gmail.com', 0),
(21, 'lol', '$2a$10$zZy2JrMmBlgFQDFQHM8ehezRKz/kBA6wrW75aTBoEqjh5iS6I5IQq', 'user', 'MMalikMo@gmail.com', 0),
(22, 'lol', '$2a$10$my84KLsZcWcBiY04BN0nZeAWS4RT7LF9OqplaIB67wShXOILIqGsi', 'user', 'MMalikMo@gmail.com', 0),
(23, 'lol', '$2a$10$s.feSDh7mIyMRqnrQhncYu/sGrj3lezbhpcYgAcTxv2zAUj5vTMAm', 'user', 'MMalikMo@gmail.com', 1),
(24, 'lol', '$2a$10$N9uzwvjNSs17pWu/NiQ/4eA.LKfmox0g8OApHJnXuvYnFkSomCffS', 'user', 'MMalikMo@gmail.com', 0),
(25, 'lol', '$2a$10$/qlqXqJW9de1PZS3oBkt5.axbTijvSxusB3ovdnZgvmSlGlGVrdM2', 'user', 'MMalikMo@gmail.com', 0),
(26, 'lol', '$2a$10$lTzDEPUmtZiHpAmdu66BuumuOZcsA.LlXbQWPxv5mgqgyRJdu3W2u', 'user', 'MMalikMo@gmail.com', 0),
(27, 'lol', '$2a$10$kcOGXTbujjDbqR3LtemCL.9z/9c1Reu3J9TK2/e1GABG08qJabcR2', 'user', 'MMalikMo@gmail.com', 0),
(28, 'lol', '$2a$10$KCVC7cxGbZ2STS1zYSX/meEfTN3Y3YUO8msxNcZhSeACgbwclEIvy', 'user', 'MMalikMo@gmail.com', 0),
(29, 'lol', '$2a$10$k3YgyfWFI9O90dFqDF2sm.o4cdHS9JnrIEQvQxdHD.hLaneZgGX8.', 'user', 'MMalikMo@gmail.com', 0),
(30, 'lol', '$2a$10$WVZEbFli9NRrYuGRcGr1deQJg2QaDQa.ShvUDqbRz9N25MXg/dedG', 'user', 'malik.mottawi@gmail.com', 0),
(31, 'lol', '$2a$10$okKuisKFR6uBXhthU/p19e16YcN822p56uIfwvjSyzlq6KJqUxUT2', 'user', 'malik.mottawi@gmail.com', 0),
(32, 'lol2', '$2a$10$C8FZJHJz75sKm3vQ8aaiJuTB1fEXdFhWGyvAHBRmWzl.eSVXqhvQG', 'user', 'malik.mottawi@gmail.com', 1),
(33, 'lol3', '$2a$10$ygcD7IznI6Tj2HVJjq47dO/kvIE06pirTjm7ubGz0y3oCxqM2KQVK', 'user', 'malik.mottawi@gmail.com', 0),
(34, 'lol4', '$2a$10$TKLmAuLINtM.d/S0pjWTxuiyMbnhWQyF.RkyIlAmfecs2aUNPkAwe', 'user', 'malik.mottawi@gmail.com', 0),
(35, 'lol5', '$2a$10$f4O/NxU3Lr3DsFoLeR2s4u9KDtku6wl05.blwH3x8TlE/snU9Ko3W', 'user', 'malik.mottawi@gmail.com', 0),
(36, 'lil', '$2a$10$0idtPtgRBB39Upi4HYuopeX0LfFd/uRHr5annpsjbEwQ6AMCvZbAy', 'user', 'malik.mottawi@gmail.com', 0),
(39, 'lol6', '$2a$10$3O7UnRwJsnacJVyysL1iUe54LkemJZSf/XVSHSKG2gFnMg3/t7vYO', 'user', 'malik.mottawi@gmail.com', 0),
(40, 'lk', '$2a$10$4VtJX.PuME1hJD0hmdcO2O7CAEsv4Z3QiZlhP.oSm51hoA2DBm5b2', 'admin', 'malik.mottawi@gmail.com', 1),
(41, 'ma', '$2a$10$EiPMPD4NbYFQI52j/pDeuOfYJwyUipMpeVrRiQ5sdJZZ798R7avVm', 'visitor', 'malik.mottawi@gmail.com', 1),
(42, 'exemple', '$2a$10$kiZ7X8KUx6Q.nfqPIoNu0O/.jfa1QO66hFnHL2WTrJXsItGHyhkkC', 'visitor', 'malik.mottawi@gmail.com', 0),
(43, 'bruh', '$2a$10$O4fKVDU9XLlEAzKacJF07OWiC6tpGtk4caHGVHRjm.sRIHyVEcE7K', 'user', 'MMalikMo@gmail.com', 1);

