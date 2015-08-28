-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2015 at 11:51 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bible`
--

-- --------------------------------------------------------

--
-- Table structure for table `bible_answer`
--

CREATE TABLE IF NOT EXISTS `bible_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `condition` int(1) DEFAULT '0' COMMENT '1 is true, null is false',
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=195 ;

--
-- Dumping data for table `bible_answer`
--

INSERT INTO `bible_answer` (`id`, `question_id`, `answer`, `condition`, `note`) VALUES
(7, 1, 'Pillar of Fire', NULL, ''),
(8, 1, 'Pillar of Gold', NULL, ''),
(9, 1, 'Pillar of Smoke', NULL, ''),
(10, 1, 'Pillar of Cloud', 1, ''),
(11, 1, 'None', NULL, ''),
(12, 2, '7', 1, ''),
(13, 2, '3', NULL, ''),
(14, 2, '5', NULL, ''),
(15, 2, '9', NULL, ''),
(16, 2, 'None', NULL, ''),
(17, 3, '7', NULL, ''),
(18, 3, '40', 1, ''),
(19, 3, '10', NULL, ''),
(20, 3, '90', NULL, ''),
(21, 3, '1', NULL, ''),
(22, 4, 'Levi', NULL, ''),
(23, 4, 'Benjamin', NULL, ''),
(24, 4, 'Dan', 1, ''),
(25, 4, 'Joseph', NULL, ''),
(26, 4, 'None', NULL, ''),
(27, 5, 'Goats'' hair', 1, ''),
(28, 5, 'Silk', NULL, ''),
(29, 5, 'Linen', NULL, ''),
(30, 5, 'Ox hair', NULL, ''),
(31, 5, 'Lambs'' wool', NULL, ''),
(32, 6, 'Blue', NULL, ''),
(33, 6, 'Green', 1, ''),
(34, 6, 'Scarlet', NULL, ''),
(35, 6, 'Purple', NULL, ''),
(36, 6, 'None', NULL, ''),
(37, 7, '1', NULL, ''),
(38, 7, '3', NULL, ''),
(39, 7, '2', 1, ''),
(40, 7, '4', NULL, ''),
(41, 7, '6', NULL, ''),
(42, 8, 'Silver', NULL, ''),
(43, 8, 'Brass', NULL, ''),
(44, 8, 'Wood', NULL, ''),
(45, 8, 'Gold', 1, ''),
(46, 8, 'Rubies', NULL, ''),
(47, 9, 'Moses', NULL, ''),
(48, 9, 'Bezaleel', 1, ''),
(49, 9, 'Joshua', NULL, ''),
(50, 9, 'Dan', NULL, ''),
(51, 9, 'None', NULL, ''),
(52, 10, 'Fig', NULL, ''),
(53, 10, 'Pomegranate', 1, ''),
(54, 10, 'Olive', NULL, ''),
(55, 10, 'Date', NULL, ''),
(56, 10, 'None', NULL, ''),
(57, 11, '14700', 1, ''),
(58, 11, '24000', NULL, ''),
(59, 11, 'None', NULL, ''),
(60, 11, '16500', NULL, ''),
(61, 12, 'Roses', NULL, ''),
(62, 12, 'Manna', NULL, ''),
(63, 12, 'Wheat', NULL, ''),
(64, 12, 'Almonds', 1, ''),
(65, 13, '50.00%', NULL, ''),
(66, 13, '10.00%', 1, ''),
(67, 13, '100.00%', NULL, ''),
(68, 13, '25.00%', NULL, ''),
(69, 25, 'Isaiah', NULL, ''),
(70, 25, 'Enoch', NULL, ''),
(71, 25, 'Daniel', NULL, ''),
(72, 25, 'Elijah', 1, ''),
(73, 26, 'James', 1, ''),
(74, 26, 'Peter', NULL, ''),
(75, 26, 'Philip', NULL, ''),
(76, 26, 'Andrew', NULL, ''),
(77, 26, 'Thomas', NULL, ''),
(78, 27, 'Ancient Egyptian non-believers', NULL, ''),
(79, 27, 'People of Sodom', NULL, ''),
(80, 27, 'Angels who abandoned their estate', 1, ''),
(81, 27, 'People of Gomorrah', NULL, ''),
(82, 28, 'Insult', NULL, ''),
(83, 28, 'Flatter', 1, ''),
(84, 28, 'Appease', NULL, ''),
(85, 28, 'Enrage', NULL, ''),
(86, 28, 'Lie', NULL, ''),
(87, 29, 'Isaiah', NULL, ''),
(88, 29, 'Daniel', NULL, ''),
(89, 29, 'Elijah', NULL, ''),
(90, 29, 'Ezekiel', NULL, ''),
(91, 29, 'Enoch', 1, ''),
(92, 30, 'Clouds without water', NULL, ''),
(93, 30, 'Trees without fruit', NULL, ''),
(94, 30, 'Raging waves', NULL, ''),
(95, 30, 'Wandering stars', NULL, ''),
(96, 30, 'All of the above', 1, ''),
(97, 34, 'Mouths', NULL, ''),
(98, 34, 'Sun', NULL, ''),
(99, 34, 'Heaven', 1, ''),
(100, 34, 'Door', NULL, ''),
(101, 33, '20', NULL, ''),
(102, 33, '70', 1, ''),
(103, 33, '90', NULL, ''),
(104, 33, '120', NULL, ''),
(105, 32, 'Egyptians', NULL, ''),
(106, 32, 'Philistines', NULL, ''),
(107, 32, 'Anakims', 1, ''),
(108, 32, 'Jebusites', NULL, ''),
(109, 31, 'Gold', NULL, ''),
(110, 31, 'Brass', 1, ''),
(111, 31, 'Milk and honey', NULL, ''),
(112, 31, 'Iron', NULL, ''),
(113, 35, 'Began to rebuild the temple in Jerusalem.', 1, ''),
(114, 35, 'Wrote a letter to King Darius for permission.', NULL, ''),
(115, 35, 'Went up to Jerusalem to inspect the ruins.', NULL, ''),
(116, 35, 'Rode around the ruins seven times and shouted.', NULL, ''),
(117, 36, 'Hagabah', NULL, ''),
(118, 36, 'Nethinim', NULL, ''),
(119, 36, 'Giddel', NULL, ''),
(120, 36, 'Jozadak', 1, ''),
(121, 37, 'Tattenai, Shethar, Bozni and the Persians', 1, ''),
(122, 37, 'Pashur and Hadid', NULL, ''),
(123, 37, 'Magbish', NULL, ''),
(124, 37, 'Kadmiel', NULL, ''),
(125, 38, 'The last year of his reign', NULL, ''),
(126, 38, 'The fourth year', NULL, ''),
(127, 38, 'The 20th year', NULL, ''),
(128, 38, 'The first year of his reign', 1, ''),
(129, 39, 'In the month of Abib', NULL, ''),
(130, 39, 'The 2nd year of King Artaxerxes reign', NULL, ''),
(131, 39, 'The 21st year of King Cyrus&#39;s reign', NULL, ''),
(132, 39, 'The 6th year of King Darius&#39; reign', 1, ''),
(133, 40, 'Feast of Weeks', NULL, ''),
(134, 40, 'Passover', 1, ''),
(135, 40, 'Unleavened Bread', NULL, ''),
(136, 40, 'First Fruits', NULL, ''),
(137, 41, 'To face his enemies', NULL, ''),
(138, 41, 'To go in to the king&#39;s presence', NULL, ''),
(139, 41, 'To go up to the temple in Jerusalem', NULL, ''),
(140, 41, 'To seek, do and teach the law of God', 1, ''),
(141, 42, 'John', NULL, ''),
(142, 42, 'God', NULL, ''),
(143, 42, 'Jesus', 1, ''),
(144, 42, 'Peter', NULL, ''),
(145, 43, 'Christ', NULL, ''),
(146, 43, 'Elijah', NULL, ''),
(147, 43, 'Apostle', 1, ''),
(148, 43, 'Prophet', NULL, ''),
(149, 44, 'Jesus', 1, ''),
(150, 44, 'Paul', NULL, ''),
(151, 44, 'John', 0, ''),
(152, 44, 'Peter', NULL, ''),
(153, 45, 'Holy', NULL, ''),
(154, 45, 'Blessed', NULL, ''),
(155, 45, 'Apparent', NULL, ''),
(156, 45, 'Secret', 1, ''),
(157, 46, 'Curse them', NULL, ''),
(158, 46, 'Gather them', 1, ''),
(159, 46, 'Disown them', NULL, ''),
(160, 46, 'Kill them', NULL, ''),
(161, 47, 'Passover', NULL, ''),
(162, 47, 'Weeks', NULL, ''),
(163, 47, 'Tabernacles', 1, ''),
(164, 47, 'Dedication', NULL, ''),
(165, 48, 'Mount Nebo', 1, ''),
(166, 48, 'Mount Hor', NULL, ''),
(167, 48, 'Mount Sinai', NULL, ''),
(168, 48, 'Egypt', NULL, ''),
(169, 49, 'Judah', NULL, ''),
(170, 49, 'Levi', 1, ''),
(171, 49, 'Benjamin', NULL, ''),
(172, 49, 'Joseph', NULL, ''),
(173, 49, 'Reuben', NULL, ''),
(174, 50, 'A temple', NULL, ''),
(175, 50, 'Ark', 1, ''),
(176, 50, 'Gold', NULL, ''),
(177, 50, 'Harvest', NULL, ''),
(178, 51, 'Pharaoh', NULL, ''),
(179, 51, 'Nebuchadnezzar', NULL, ''),
(180, 51, 'Philistines', 1, ''),
(181, 51, 'Assyrians', NULL, ''),
(182, 52, 'Israelites', NULL, ''),
(183, 52, 'Gentiles', NULL, ''),
(184, 52, 'Philistines', NULL, ''),
(185, 52, 'Levites', 1, ''),
(186, 53, 'Tent', 1, ''),
(187, 53, 'Temple', NULL, ''),
(188, 53, 'House', NULL, ''),
(189, 53, 'Shrine', NULL, ''),
(190, 54, 'Isaac', NULL, ''),
(191, 54, 'Nathan', 1, ''),
(192, 54, 'Daniel', NULL, ''),
(193, 54, 'Gideon', NULL, ''),
(194, 54, 'Azariah', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `bible_category`
--

CREATE TABLE IF NOT EXISTS `bible_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bible_category`
--

INSERT INTO `bible_category` (`id`, `name`) VALUES
(3, 'Level'),
(4, 'Category'),
(5, 'Subject'),
(6, 'Book');

-- --------------------------------------------------------

--
-- Table structure for table `bible_level`
--

CREATE TABLE IF NOT EXISTS `bible_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT '0',
  `name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `bible_level`
--

INSERT INTO `bible_level` (`id`, `category_id`, `name`, `value`) VALUES
(7, 3, 'All', 'all'),
(8, 3, 'Beginner', 'beg'),
(9, 3, 'Novice', 'nov'),
(10, 3, 'Intermediate', 'int'),
(11, 3, 'Advanced', 'adv'),
(12, 3, 'Expert', 'exp'),
(13, 4, 'Places/Geography', 'places-geography'),
(14, 4, 'Things/Objects', 'things-objects'),
(15, 4, 'History/Timeline', 'history-timeline'),
(16, 4, 'Terms/Words', 'terms-words'),
(17, 4, 'Laws', 'laws'),
(18, 4, 'Events', 'events'),
(19, 4, 'God', 'god');

-- --------------------------------------------------------

--
-- Table structure for table `bible_level_question`
--

CREATE TABLE IF NOT EXISTS `bible_level_question` (
  `level_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`level_id`,`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bible_level_question`
--

INSERT INTO `bible_level_question` (`level_id`, `question_id`) VALUES
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(7, 5),
(7, 6),
(7, 7),
(7, 8),
(7, 9),
(7, 10),
(7, 11),
(7, 12),
(7, 13),
(7, 25),
(7, 26),
(7, 27),
(7, 28),
(7, 29),
(7, 30),
(7, 31),
(7, 32),
(7, 33),
(7, 34),
(7, 35),
(7, 36),
(7, 37),
(7, 38),
(7, 39),
(7, 40),
(7, 41),
(7, 42),
(7, 43),
(7, 44),
(7, 45),
(7, 46),
(7, 47),
(7, 48),
(7, 49),
(7, 50),
(7, 51),
(7, 52),
(7, 53),
(7, 54),
(11, 37),
(15, 44),
(15, 47),
(15, 48),
(17, 47),
(18, 47),
(18, 48),
(18, 49),
(19, 42),
(19, 44);

-- --------------------------------------------------------

--
-- Table structure for table `bible_question`
--

CREATE TABLE IF NOT EXISTS `bible_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `multiple_choice` int(1) DEFAULT '0',
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `explanation` text COLLATE utf8_unicode_ci,
  `reference` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

--
-- Dumping data for table `bible_question`
--

INSERT INTO `bible_question` (`id`, `question`, `img`, `video`, `multiple_choice`, `note`, `explanation`, `reference`) VALUES
(1, 'What did the Israelites see at the tabernacle door that told them God was there?', NULL, NULL, 0, '', NULL, NULL),
(2, 'For how many days did God command the Israelites to eat unleavened bread?', NULL, NULL, 0, '', NULL, NULL),
(3, 'How many days and nights did Moses stay with God, creating the ten commandments?', NULL, NULL, 0, '', NULL, NULL),
(4, 'What other tribe assisted in building and furnishing the tabernacle?', NULL, NULL, 0, '', NULL, NULL),
(5, 'The curtains for the tent over the tabernacle were made of what?', NULL, NULL, 0, '', NULL, NULL),
(6, 'What color was not included in the curtain for the tabernacle door?', NULL, NULL, 0, '', NULL, NULL),
(7, 'How many cherubims were made to put on the mercy seat of the ark?', NULL, NULL, 0, '', NULL, NULL),
(8, 'Of what were the tabernacle candlesticks made?', NULL, NULL, 0, '', NULL, NULL),
(9, 'What was the name of the chief workman of the tabernacle?', NULL, NULL, 0, '', NULL, NULL),
(10, 'What fruit likeness was placed upon the hem of the robes to be worn by Aaron and his sons?', NULL, NULL, 0, '', NULL, NULL),
(11, 'How many people died in the plague caused by the rebellion of Korah against Moses?', NULL, NULL, 0, '', NULL, NULL),
(12, 'When Aaron''s staff blossoms in front of the Tabernacle, what else does it produce?', NULL, NULL, 0, '', NULL, NULL),
(13, 'What percent of the Israelites tithes were the Levites instructed to tithe to God?', NULL, NULL, 0, '', NULL, NULL),
(25, 'What prophet does James reference when discussing the power of prayer?', NULL, NULL, 0, '', 'James urges his brethren to pray for one another and uses Elijah''s prayer for rain as an example of the power of prayer.', 'James 5:17'),
(26, 'Jude was a brother to what apostle?', NULL, NULL, 0, '', 'The Book of Jude opens with a reference to Jude being James''s brother.', 'Jude 1:1'),
(27, 'According to Jude, who are &#39;reserved in everlasting chains under darkness&#39;?', NULL, NULL, 0, '', 'Jude wanted to remind believers of what happens when they deny God, showing that even wayward Angels have their place in eternal darkness.', 'Jude 1:6'),
(28, 'Jude says murmurers and complainers use their words to do what?', NULL, NULL, 0, '', 'Ungodly men who grumble and complain will use their words to flatter in order to take advantage of believers and secure their own selfish desires.', 'Jude 1:16'),
(29, 'Jude references what prophet, who told of God&#39;s future judgment to convict the ungodly among them?', NULL, NULL, 0, '', 'Jude uses Enoch''s prophesy to show God''s judgment is a part of His design.', 'Jude 1:14'),
(30, 'To what does Jude compare ungodly men?', NULL, NULL, 0, '', 'These ungodly men feast greedily among the godly; they appear to be powerful and wise, yet they are empty.', 'Jude 1:12'),
(31, 'Moses addressed the Israelites before his death. He told them that if they kept God&#39;s commandments, they would enter a land where they would dig what out of the hills?', NULL, NULL, 0, '', 'Moses said of the Promised Land, ''a land whose stones [are] iron, and out of whose hills thou mayest dig brass.', 'Deuteronomy 8:9'),
(32, 'Moses told the Israelites that after crossing the Jordan, they would possess a people great and tall. These people were children of whom?', NULL, NULL, 0, '', 'The people Moses spoke of were the Anakims. The men sent ahead into Canaan spoke of their great size in Numbers 13.', 'Deuteronomy 9:2'),
(33, 'How many were in Jacob&#39;s family when they went down to Egypt?', NULL, NULL, 0, '', 'According to Deuteronomy 10:22, Exodus 1:5, and Genesis 46:27, there were threescore and ten, or seventy, persons.', 'Deuteronomy 10:22'),
(34, 'If the Israelites turned aside to serve and worship other gods, the Lord&#39;s wrath would be kindled and He would shut up what?', NULL, NULL, 0, '', 'The Israelites were warned that if they turned aside, the Lord would shut up the heaven, and there would be no rain on the land.', 'Deuteronomy 11:17'),
(35, 'What did Zerubbabel and Jeshua do in response to the prophesy of Haggai and Zechariah?', NULL, NULL, 0, '', 'They began the rebuilding of the temple in Jerusalem.', 'Ezra 5:2'),
(36, 'Jeshua was the son of who?', NULL, NULL, 0, '', 'Jeshua was the son of Jozadak.', 'Ezra 5:2'),
(37, 'Who wrote a letter to King Darius against the rebuilding of the temple in Jerusalem?', NULL, NULL, 0, '', 'Tattenai, Shethar, Boznai and the Persians wrote to King Darius against the rebuilding of the temple in Jerusalem.', 'Ezra 5:6'),
(38, 'In what year of his reign did King Cyrus issue a decree to rebuild the house of God?', NULL, NULL, 0, '', 'In the first year of his reign King Darius issued a decree to rebuild the house of God.', 'Ezra 5:13'),
(39, 'When did the Israelites finish rebuilding the second temple?', NULL, NULL, 0, '', 'The Israelites finished building the temple in the 6th year of the reign of King Darius.', 'Ezra 6:15'),
(40, 'What was the first feast celebrated by the Israelites in the second temple during the reign of King Darius?', NULL, NULL, 0, '', 'Passover was the first feast celebrated by the Israelites in the second temple.', 'Ezra 6:19'),
(41, 'What did Ezra prepare his heart to do?', NULL, NULL, 0, '', 'Ezra prepared his heart to seek, do and teach the law of God.', 'Ezra 7:10'),
(42, 'In the beginning was the Word and the Word was with God and the Word was God.Who is this talking about?', NULL, NULL, 0, '', 'This verse is referring to Jesus.', 'John 1:1'),
(43, 'The Jews sent priests and Levites to ask John the Baptist if he was three different people. Which one is not included?', NULL, NULL, 0, '', 'They asked him who he was and confessed he was not the Christ. They asked him if he was Elijah and he said he was not. They asked him if he was a prophet and he said no.', 'John 1:21'),
(44, 'Who was to come after John the Baptist whose sandal thong he was unworthy to untie?', NULL, NULL, 0, '', 'Jesus, the Messiah was to come after John the Baptist.', 'John 1:27'),
(45, '&#39;The ________ [things belong] unto the LORD our God: but those [things which are] revealed [belong] unto us and to our children for ever, that [we] may do all the words of this law.&#39;', NULL, NULL, 0, '', 'God reveals to us only that which we need to know; only He is omniscient.', 'Deuteronomy 29:29'),
(46, 'Before his death, Moses promised the Israelites that after the blessings and curses, if they returned to the Lord, the Lord would do what to them?', NULL, NULL, 0, '', 'The Lord will gather them from all the nations; He will also bring them back into the land their fathers.', 'Deuteronomy 30:3'),
(47, 'Moses commanded the Israelites to read the Law during which feast?', NULL, NULL, 0, '', 'Before his death, Moses commanded the Israelites: ''In the feast of tabernacles, thou shalt read this law before all Israel in their hearing.''', 'Deuteronomy 31:10'),
(48, 'Where did Moses die?', NULL, NULL, 0, '', 'The Lord told Moses to go up to Mount Nebo in the land of Moab, where he would die. From Mount Nebo, Moses could see the promised land, even though he would never enter it.', 'Deuteronomy 32:49'),
(49, 'Before his death, Moses blessed the Israelite tribes. To which tribe did he say, &#39;[Let] thy Thummim and thy Urim [be] with thy holy one&#39;?', NULL, NULL, 0, '', 'Moses spoke this to the tribe of Levi. In Exodus 28:30, Aaron (a Levite and the first priest) was commanded to wear the Urim and Thummim.', 'Deuteronomy 33:8'),
(50, 'David gathered all of Israel to bring what to Kirjathjearim?', NULL, NULL, 0, '', 'So David gathered all Israel together, from Shihor of Egypt even unto the entering of Hemath, to bring the ark of God from Kirjathjearim.', '1 Chronicles 13:5'),
(51, 'Who went to war against David when he was anointed king?', NULL, NULL, 0, '', 'And when the Philistines heard that David was anointed king over all Israel, all the Philistines went up to seek David. And David heard of it, and went out against them.', '1 Chronicles 14:8'),
(52, 'Who did David select to carry the ark?', NULL, NULL, 0, '', 'Then David said, None ought to carry the ark of God but the Levites: for them hath the LORD chosen to carry the ark of God, and to minister unto him for ever.', '1 Chronicles 15:2'),
(53, 'What was the first structure that David built to hold the ark?', NULL, NULL, 0, '', 'So they brought the ark of God, and set it in the midst of the tent that David had pitched for it.', '1 Chronicles 16:1'),
(54, 'Which prophet did David use to speak to God about the ark?', NULL, NULL, 0, '', 'Now it came to pass, as David sat in his house, that David said to Nathan the prophet, Lo, I dwell in an house of cedars, but the ark of the covenant of the LORD remaineth under curtains.', '1 Chronicles 17:1');

-- --------------------------------------------------------

--
-- Table structure for table `bible_user`
--

CREATE TABLE IF NOT EXISTS `bible_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bible_user`
--

INSERT INTO `bible_user` (`id`, `email`, `password`, `created`) VALUES
(1, 'binlieu777@yahoo.com', '$2a$08$UtYOM9WNIlprjNV.YhChGuEJMxTWiGQNyYhudp9jJXQQJ20A4srbS', '2015-04-03 17:23:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
