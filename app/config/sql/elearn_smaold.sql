-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.33-community - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for elearn_sma
CREATE DATABASE IF NOT EXISTS `elearn_sma` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `elearn_sma`;


-- Dumping structure for table elearn_sma.acos
CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=781 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.acos: 737 rows
DELETE FROM `acos`;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
	(1, NULL, NULL, NULL, 'controllers', 1, 1474),
	(2, 1, NULL, NULL, 'Pages', 2, 21),
	(3, 2, NULL, NULL, 'display', 3, 4),
	(4, 1, NULL, NULL, 'Assets', 22, 59),
	(5, 4, NULL, NULL, 'index', 23, 24),
	(6, 4, NULL, NULL, 'view', 25, 26),
	(7, 4, NULL, NULL, 'add', 27, 28),
	(8, 4, NULL, NULL, 'edit', 29, 30),
	(9, 4, NULL, NULL, 'delete', 31, 32),
	(10, 4, NULL, NULL, 'administrator_index', 33, 34),
	(11, 4, NULL, NULL, 'administrator_view', 35, 36),
	(12, 4, NULL, NULL, 'administrator_add', 37, 38),
	(13, 4, NULL, NULL, 'administrator_edit', 39, 40),
	(14, 4, NULL, NULL, 'administrator_delete', 41, 42),
	(15, 1, NULL, NULL, 'Groups', 60, 87),
	(16, 15, NULL, NULL, 'index', 61, 62),
	(17, 15, NULL, NULL, 'view', 63, 64),
	(18, 15, NULL, NULL, 'add', 65, 66),
	(19, 15, NULL, NULL, 'edit', 67, 68),
	(20, 15, NULL, NULL, 'delete', 69, 70),
	(21, 15, NULL, NULL, 'administrator_index', 71, 72),
	(22, 15, NULL, NULL, 'administrator_view', 73, 74),
	(23, 15, NULL, NULL, 'administrator_add', 75, 76),
	(24, 15, NULL, NULL, 'administrator_edit', 77, 78),
	(25, 15, NULL, NULL, 'administrator_delete', 79, 80),
	(26, 1, NULL, NULL, 'Pengumumen', 88, 121),
	(27, 26, NULL, NULL, 'index', 89, 90),
	(28, 26, NULL, NULL, 'view', 91, 92),
	(29, 26, NULL, NULL, 'add', 93, 94),
	(30, 26, NULL, NULL, 'edit', 95, 96),
	(31, 26, NULL, NULL, 'delete', 97, 98),
	(32, 26, NULL, NULL, 'administrator_index', 99, 100),
	(33, 26, NULL, NULL, 'administrator_view', 101, 102),
	(34, 26, NULL, NULL, 'administrator_add', 103, 104),
	(35, 26, NULL, NULL, 'administrator_edit', 105, 106),
	(36, 26, NULL, NULL, 'administrator_delete', 107, 108),
	(37, 1, NULL, NULL, 'Tugas', 122, 149),
	(38, 37, NULL, NULL, 'index', 123, 124),
	(39, 37, NULL, NULL, 'view', 125, 126),
	(40, 37, NULL, NULL, 'add', 127, 128),
	(41, 37, NULL, NULL, 'edit', 129, 130),
	(42, 37, NULL, NULL, 'delete', 131, 132),
	(43, 37, NULL, NULL, 'administrator_index', 133, 134),
	(44, 37, NULL, NULL, 'administrator_view', 135, 136),
	(45, 37, NULL, NULL, 'administrator_add', 137, 138),
	(46, 37, NULL, NULL, 'administrator_edit', 139, 140),
	(47, 37, NULL, NULL, 'administrator_delete', 141, 142),
	(48, 1, NULL, NULL, 'Users', 150, 181),
	(49, 48, NULL, NULL, 'index', 151, 152),
	(50, 48, NULL, NULL, 'view', 153, 154),
	(51, 48, NULL, NULL, 'add', 155, 156),
	(52, 48, NULL, NULL, 'edit', 157, 158),
	(53, 48, NULL, NULL, 'delete', 159, 160),
	(54, 48, NULL, NULL, 'administrator_index', 161, 162),
	(55, 48, NULL, NULL, 'administrator_view', 163, 164),
	(56, 48, NULL, NULL, 'administrator_add', 165, 166),
	(57, 48, NULL, NULL, 'administrator_edit', 167, 168),
	(58, 48, NULL, NULL, 'administrator_delete', 169, 170),
	(59, 48, NULL, NULL, 'login', 171, 172),
	(60, 48, NULL, NULL, 'logout', 173, 174),
	(61, 1, NULL, NULL, 'FileTugas', 182, 209),
	(62, 61, NULL, NULL, 'index', 183, 184),
	(63, 61, NULL, NULL, 'view', 185, 186),
	(64, 61, NULL, NULL, 'add', 187, 188),
	(65, 61, NULL, NULL, 'edit', 189, 190),
	(66, 61, NULL, NULL, 'delete', 191, 192),
	(67, 61, NULL, NULL, 'administrator_index', 193, 194),
	(68, 61, NULL, NULL, 'administrator_view', 195, 196),
	(69, 61, NULL, NULL, 'administrator_add', 197, 198),
	(70, 61, NULL, NULL, 'administrator_edit', 199, 200),
	(71, 61, NULL, NULL, 'administrator_delete', 201, 202),
	(72, 48, NULL, NULL, 'initDB', 175, 176),
	(73, 2, NULL, NULL, 'uploadFiles', 5, 6),
	(74, 4, NULL, NULL, 'uploadFiles', 43, 44),
	(75, 61, NULL, NULL, 'uploadFiles', 203, 204),
	(76, 15, NULL, NULL, 'uploadFiles', 81, 82),
	(77, 26, NULL, NULL, 'uploadFiles', 109, 110),
	(78, 37, NULL, NULL, 'uploadFiles', 143, 144),
	(79, 48, NULL, NULL, 'uploadFiles', 177, 178),
	(80, 1, NULL, NULL, 'Answers', 210, 229),
	(81, 80, NULL, NULL, 'index', 211, 212),
	(82, 80, NULL, NULL, 'view', 213, 214),
	(83, 80, NULL, NULL, 'add', 215, 216),
	(84, 80, NULL, NULL, 'edit', 217, 218),
	(85, 80, NULL, NULL, 'delete', 219, 220),
	(86, 80, NULL, NULL, 'uploadFiles', 221, 222),
	(87, 1, NULL, NULL, 'Questions', 230, 279),
	(88, 87, NULL, NULL, 'index', 231, 232),
	(89, 87, NULL, NULL, 'view', 233, 234),
	(90, 87, NULL, NULL, 'add', 235, 236),
	(91, 87, NULL, NULL, 'edit', 237, 238),
	(92, 87, NULL, NULL, 'delete', 239, 240),
	(93, 87, NULL, NULL, 'uploadFiles', 241, 242),
	(94, 1, NULL, NULL, 'QuizzPoints', 280, 305),
	(95, 94, NULL, NULL, 'index', 281, 282),
	(96, 94, NULL, NULL, 'view', 283, 284),
	(97, 94, NULL, NULL, 'add', 285, 286),
	(98, 94, NULL, NULL, 'edit', 287, 288),
	(99, 94, NULL, NULL, 'delete', 289, 290),
	(100, 94, NULL, NULL, 'uploadFiles', 291, 292),
	(101, 1, NULL, NULL, 'Quizzes', 306, 323),
	(102, 101, NULL, NULL, 'index', 307, 308),
	(103, 101, NULL, NULL, 'view', 309, 310),
	(104, 101, NULL, NULL, 'add', 311, 312),
	(105, 101, NULL, NULL, 'edit', 313, 314),
	(106, 101, NULL, NULL, 'delete', 315, 316),
	(107, 101, NULL, NULL, 'uploadFiles', 317, 318),
	(108, 1, NULL, NULL, 'Quizzs', 324, 361),
	(109, 108, NULL, NULL, 'index', 325, 326),
	(110, 108, NULL, NULL, 'view', 327, 328),
	(111, 108, NULL, NULL, 'add', 329, 330),
	(112, 108, NULL, NULL, 'edit', 331, 332),
	(113, 108, NULL, NULL, 'delete', 333, 334),
	(114, 108, NULL, NULL, 'uploadFiles', 335, 336),
	(115, 1, NULL, NULL, 'Labs', 362, 423),
	(116, 115, NULL, NULL, 'index', 363, 364),
	(117, 115, NULL, NULL, 'view', 365, 366),
	(118, 115, NULL, NULL, 'add', 367, 368),
	(119, 115, NULL, NULL, 'edit', 369, 370),
	(120, 115, NULL, NULL, 'delete', 371, 372),
	(121, 115, NULL, NULL, 'administrator_index', 373, 374),
	(122, 115, NULL, NULL, 'administrator_view', 375, 376),
	(123, 115, NULL, NULL, 'administrator_add', 377, 378),
	(124, 115, NULL, NULL, 'administrator_edit', 379, 380),
	(125, 115, NULL, NULL, 'administrator_delete', 381, 382),
	(126, 115, NULL, NULL, 'uploadFiles', 383, 384),
	(127, 48, NULL, NULL, 'home', 179, 180),
	(128, 26, NULL, NULL, 'home', 111, 112),
	(129, 1, NULL, NULL, '.DSStor', 424, 425),
	(345, 87, NULL, NULL, 'edit_uraian', 251, 252),
	(344, 87, NULL, NULL, 'edit_single', 249, 250),
	(343, 87, NULL, NULL, 'add_single', 247, 248),
	(136, 1, NULL, NULL, 'Forum', 426, 699),
	(137, 136, NULL, NULL, 'Categories', 427, 462),
	(138, 137, NULL, NULL, 'index', 428, 429),
	(139, 137, NULL, NULL, 'view', 430, 431),
	(140, 137, NULL, NULL, 'moderate', 432, 433),
	(141, 137, NULL, NULL, 'feed', 434, 435),
	(142, 137, NULL, NULL, 'admin_index', 436, 437),
	(143, 137, NULL, NULL, 'admin_add_forum', 438, 439),
	(144, 137, NULL, NULL, 'admin_edit_forum', 440, 441),
	(145, 137, NULL, NULL, 'admin_delete_forum', 442, 443),
	(146, 137, NULL, NULL, 'admin_add_category', 444, 445),
	(147, 137, NULL, NULL, 'admin_edit_category', 446, 447),
	(148, 137, NULL, NULL, 'admin_delete_category', 448, 449),
	(149, 137, NULL, NULL, 'build_acl', 450, 451),
	(150, 137, NULL, NULL, 'uploadFiles', 452, 453),
	(151, 137, NULL, NULL, 'add', 454, 455),
	(152, 137, NULL, NULL, 'edit', 456, 457),
	(153, 137, NULL, NULL, 'delete', 458, 459),
	(154, 136, NULL, NULL, 'Home', 463, 488),
	(155, 154, NULL, NULL, 'index', 464, 465),
	(156, 154, NULL, NULL, 'feed', 466, 467),
	(157, 154, NULL, NULL, 'help', 468, 469),
	(158, 154, NULL, NULL, 'rules', 470, 471),
	(159, 154, NULL, NULL, 'admin_index', 472, 473),
	(160, 154, NULL, NULL, 'admin_settings', 474, 475),
	(161, 154, NULL, NULL, 'build_acl', 476, 477),
	(162, 154, NULL, NULL, 'uploadFiles', 478, 479),
	(163, 154, NULL, NULL, 'add', 480, 481),
	(164, 154, NULL, NULL, 'edit', 482, 483),
	(165, 154, NULL, NULL, 'view', 484, 485),
	(166, 154, NULL, NULL, 'delete', 486, 487),
	(167, 136, NULL, NULL, 'Install', 489, 520),
	(168, 167, NULL, NULL, 'index', 490, 491),
	(169, 167, NULL, NULL, 'check_database', 492, 493),
	(170, 167, NULL, NULL, 'create_tables', 494, 495),
	(171, 167, NULL, NULL, 'setup_users', 496, 497),
	(172, 167, NULL, NULL, 'finished', 498, 499),
	(173, 167, NULL, NULL, 'create_admin', 500, 501),
	(174, 167, NULL, NULL, 'patch', 502, 503),
	(175, 167, NULL, NULL, 'upgrade_1_8', 504, 505),
	(176, 167, NULL, NULL, 'build_acl', 506, 507),
	(177, 167, NULL, NULL, 'uploadFiles', 508, 509),
	(178, 167, NULL, NULL, 'add', 510, 511),
	(179, 167, NULL, NULL, 'edit', 512, 513),
	(180, 167, NULL, NULL, 'view', 514, 515),
	(181, 167, NULL, NULL, 'delete', 516, 517),
	(182, 136, NULL, NULL, 'Posts', 521, 540),
	(183, 182, NULL, NULL, 'index', 522, 523),
	(184, 182, NULL, NULL, 'add', 524, 525),
	(185, 182, NULL, NULL, 'edit', 526, 527),
	(186, 182, NULL, NULL, 'delete', 528, 529),
	(187, 182, NULL, NULL, 'report', 530, 531),
	(188, 182, NULL, NULL, 'build_acl', 532, 533),
	(189, 182, NULL, NULL, 'uploadFiles', 534, 535),
	(190, 182, NULL, NULL, 'view', 536, 537),
	(191, 136, NULL, NULL, 'Reports', 541, 566),
	(192, 191, NULL, NULL, 'admin_index', 542, 543),
	(193, 191, NULL, NULL, 'admin_topics', 544, 545),
	(194, 191, NULL, NULL, 'admin_posts', 546, 547),
	(195, 191, NULL, NULL, 'admin_users', 548, 549),
	(196, 191, NULL, NULL, 'build_acl', 550, 551),
	(197, 191, NULL, NULL, 'uploadFiles', 552, 553),
	(198, 191, NULL, NULL, 'add', 554, 555),
	(199, 191, NULL, NULL, 'edit', 556, 557),
	(200, 191, NULL, NULL, 'index', 558, 559),
	(201, 191, NULL, NULL, 'view', 560, 561),
	(202, 191, NULL, NULL, 'delete', 562, 563),
	(203, 136, NULL, NULL, 'Search', 567, 586),
	(204, 203, NULL, NULL, 'index', 568, 569),
	(205, 203, NULL, NULL, 'proxy', 570, 571),
	(206, 203, NULL, NULL, 'build_acl', 572, 573),
	(207, 203, NULL, NULL, 'uploadFiles', 574, 575),
	(208, 203, NULL, NULL, 'add', 576, 577),
	(209, 203, NULL, NULL, 'edit', 578, 579),
	(210, 203, NULL, NULL, 'view', 580, 581),
	(211, 203, NULL, NULL, 'delete', 582, 583),
	(212, 136, NULL, NULL, 'Staff', 587, 624),
	(213, 212, NULL, NULL, 'admin_index', 588, 589),
	(214, 212, NULL, NULL, 'admin_add_access', 590, 591),
	(215, 212, NULL, NULL, 'admin_edit_access', 592, 593),
	(216, 212, NULL, NULL, 'admin_delete_access', 594, 595),
	(217, 212, NULL, NULL, 'admin_add_access_level', 596, 597),
	(218, 212, NULL, NULL, 'admin_edit_access_level', 598, 599),
	(219, 212, NULL, NULL, 'admin_delete_access_level', 600, 601),
	(220, 212, NULL, NULL, 'admin_add_moderator', 602, 603),
	(221, 212, NULL, NULL, 'admin_edit_moderator', 604, 605),
	(222, 212, NULL, NULL, 'admin_delete_moderator', 606, 607),
	(223, 212, NULL, NULL, 'build_acl', 608, 609),
	(224, 212, NULL, NULL, 'uploadFiles', 610, 611),
	(225, 212, NULL, NULL, 'add', 612, 613),
	(226, 212, NULL, NULL, 'edit', 614, 615),
	(227, 212, NULL, NULL, 'index', 616, 617),
	(228, 212, NULL, NULL, 'view', 618, 619),
	(229, 212, NULL, NULL, 'delete', 620, 621),
	(230, 136, NULL, NULL, 'Topics', 625, 648),
	(231, 230, NULL, NULL, 'index', 626, 627),
	(232, 230, NULL, NULL, 'add', 628, 629),
	(233, 230, NULL, NULL, 'edit', 630, 631),
	(234, 230, NULL, NULL, 'feed', 632, 633),
	(235, 230, NULL, NULL, 'delete', 634, 635),
	(236, 230, NULL, NULL, 'report', 636, 637),
	(237, 230, NULL, NULL, 'view', 638, 639),
	(238, 230, NULL, NULL, 'moderate', 640, 641),
	(239, 230, NULL, NULL, 'build_acl', 642, 643),
	(240, 230, NULL, NULL, 'uploadFiles', 644, 645),
	(241, 136, NULL, NULL, 'Users', 649, 694),
	(242, 241, NULL, NULL, 'index', 650, 651),
	(243, 241, NULL, NULL, 'view', 652, 653),
	(244, 241, NULL, NULL, 'add', 654, 655),
	(245, 241, NULL, NULL, 'edit', 656, 657),
	(246, 241, NULL, NULL, 'delete', 658, 659),
	(247, 241, NULL, NULL, 'administrator_index', 660, 661),
	(248, 241, NULL, NULL, 'administrator_view', 662, 663),
	(249, 241, NULL, NULL, 'administrator_add', 664, 665),
	(250, 241, NULL, NULL, 'administrator_edit', 666, 667),
	(251, 241, NULL, NULL, 'administrator_delete', 668, 669),
	(252, 241, NULL, NULL, 'login', 670, 671),
	(253, 241, NULL, NULL, 'logout', 672, 673),
	(254, 241, NULL, NULL, 'home', 674, 675),
	(255, 241, NULL, NULL, 'initDB', 676, 677),
	(256, 241, NULL, NULL, 'uploadFiles', 678, 679),
	(257, 87, NULL, NULL, 'add_success', 243, 244),
	(258, 136, NULL, NULL, 'Home', 695, 698),
	(381, 4, NULL, NULL, 'guru', 47, 48),
	(261, 4, NULL, NULL, 'find', 45, 46),
	(263, 1, NULL, NULL, 'Books', 700, 723),
	(264, 263, NULL, NULL, 'search', 701, 702),
	(265, 263, NULL, NULL, 'show_books', 703, 704),
	(266, 263, NULL, NULL, 'books_view', 705, 706),
	(267, 263, NULL, NULL, 'view', 707, 708),
	(337, 335, NULL, NULL, 'view', 829, 830),
	(338, 335, NULL, NULL, 'add', 831, 832),
	(339, 335, NULL, NULL, 'edit', 833, 834),
	(340, 335, NULL, NULL, 'delete', 835, 836),
	(273, 1, NULL, NULL, 'Englishses', 724, 751),
	(274, 273, NULL, NULL, 'form_add', 725, 726),
	(275, 273, NULL, NULL, 'form_edit', 727, 728),
	(276, 273, NULL, NULL, 'index', 729, 730),
	(277, 273, NULL, NULL, 'view', 731, 732),
	(278, 273, NULL, NULL, 'add', 733, 734),
	(279, 273, NULL, NULL, 'edit', 735, 736),
	(280, 273, NULL, NULL, 'delete', 737, 738),
	(281, 273, NULL, NULL, 'search', 739, 740),
	(282, 273, NULL, NULL, 'show_words', 741, 742),
	(283, 273, NULL, NULL, 'words_view', 743, 744),
	(336, 335, NULL, NULL, 'index', 827, 828),
	(287, 1, NULL, NULL, 'Indos', 752, 779),
	(288, 287, NULL, NULL, 'index', 753, 754),
	(289, 287, NULL, NULL, 'form_add', 755, 756),
	(290, 287, NULL, NULL, 'form_edit', 757, 758),
	(291, 287, NULL, NULL, 'search', 759, 760),
	(292, 287, NULL, NULL, 'show_words', 761, 762),
	(293, 287, NULL, NULL, 'words_view', 763, 764),
	(294, 287, NULL, NULL, 'view', 765, 766),
	(295, 287, NULL, NULL, 'add', 767, 768),
	(296, 287, NULL, NULL, 'edit', 769, 770),
	(297, 287, NULL, NULL, 'delete', 771, 772),
	(299, 115, NULL, NULL, 'find', 385, 386),
	(335, 1, NULL, NULL, 'Pelajarans', 826, 843),
	(342, 87, NULL, NULL, 'current_add', 245, 246),
	(377, 94, NULL, NULL, 'export_xls', 297, 298),
	(383, 359, NULL, NULL, 'uploadFiles', 875, 876),
	(305, 108, NULL, NULL, 'take_quiz', 337, 338),
	(306, 108, NULL, NULL, 'do_quizz', 339, 340),
	(307, 108, NULL, NULL, 'results', 341, 342),
	(308, 108, NULL, NULL, 'view_all', 343, 344),
	(350, 1, NULL, NULL, 'QuizzsQuestions', 844, 863),
	(310, 1, NULL, NULL, 'Rents', 780, 799),
	(311, 310, NULL, NULL, 'index', 781, 782),
	(312, 310, NULL, NULL, 'booking', 783, 784),
	(362, 359, NULL, NULL, 'add', 869, 870),
	(361, 359, NULL, NULL, 'view', 867, 868),
	(360, 359, NULL, NULL, 'index', 865, 866),
	(359, 1, NULL, NULL, 'UraianAnswers', 864, 881),
	(319, 1, NULL, NULL, 'UserMessages', 800, 825),
	(320, 319, NULL, NULL, 'index', 801, 802),
	(321, 319, NULL, NULL, 'checkunread', 803, 804),
	(322, 319, NULL, NULL, 'view', 805, 806),
	(323, 319, NULL, NULL, 'read', 807, 808),
	(324, 319, NULL, NULL, 'add', 809, 810),
	(325, 319, NULL, NULL, 'edit', 811, 812),
	(326, 319, NULL, NULL, 'delete', 813, 814),
	(327, 319, NULL, NULL, 'get_siswa_dropdown', 815, 816),
	(329, 241, NULL, NULL, 'change_password', 680, 681),
	(382, 4, NULL, NULL, 'siswa', 49, 50),
	(346, 87, NULL, NULL, 'filter', 253, 254),
	(347, 94, NULL, NULL, 'history', 293, 294),
	(348, 94, NULL, NULL, 'print_history', 295, 296),
	(351, 350, NULL, NULL, 'index', 845, 846),
	(352, 350, NULL, NULL, 'view', 847, 848),
	(353, 350, NULL, NULL, 'add', 849, 850),
	(354, 350, NULL, NULL, 'edit', 851, 852),
	(355, 350, NULL, NULL, 'delete', 853, 854),
	(356, 350, NULL, NULL, 'deleteEntries', 855, 856),
	(363, 359, NULL, NULL, 'edit', 871, 872),
	(364, 359, NULL, NULL, 'delete', 873, 874),
	(366, 319, NULL, NULL, 'uploadFiles', 817, 818),
	(367, 241, NULL, NULL, 'siswa', 682, 683),
	(368, 241, NULL, NULL, 'guru', 684, 685),
	(369, 80, NULL, NULL, 'edit_single', 223, 224),
	(370, 263, NULL, NULL, 'uploadFiles', 709, 710),
	(371, 273, NULL, NULL, 'uploadFiles', 745, 746),
	(372, 287, NULL, NULL, 'uploadFiles', 773, 774),
	(373, 115, NULL, NULL, 'ebook', 387, 388),
	(374, 115, NULL, NULL, 'lifeskill', 389, 390),
	(375, 115, NULL, NULL, 'carachter', 391, 392),
	(376, 335, NULL, NULL, 'uploadFiles', 837, 838),
	(378, 350, NULL, NULL, 'uploadFiles', 857, 858),
	(379, 310, NULL, NULL, 'uploadFiles', 785, 786),
	(384, 2, NULL, NULL, 'upload_files', 7, 8),
	(385, 80, NULL, NULL, 'upload_files', 225, 226),
	(386, 4, NULL, NULL, 'home', 51, 52),
	(387, 4, NULL, NULL, 'upload_files', 53, 54),
	(388, 263, NULL, NULL, 'upload_files', 711, 712),
	(389, 273, NULL, NULL, 'upload_files', 747, 748),
	(390, 61, NULL, NULL, 'upload_files', 205, 206),
	(391, 15, NULL, NULL, 'upload_files', 83, 84),
	(392, 287, NULL, NULL, 'upload_files', 775, 776),
	(393, 115, NULL, NULL, 'video', 393, 394),
	(394, 115, NULL, NULL, 'find_category', 395, 396),
	(395, 115, NULL, NULL, 'find_category_video', 397, 398),
	(396, 115, NULL, NULL, 'view_thumb', 399, 400),
	(397, 115, NULL, NULL, 'view_thumb_video', 401, 402),
	(398, 115, NULL, NULL, 'view_video', 403, 404),
	(399, 115, NULL, NULL, 'upload_files', 405, 406),
	(400, 335, NULL, NULL, 'upload_files', 839, 840),
	(401, 26, NULL, NULL, 'category', 113, 114),
	(402, 26, NULL, NULL, 'upload_files', 115, 116),
	(403, 1, NULL, NULL, 'Profiles', 882, 899),
	(404, 403, NULL, NULL, 'index', 883, 884),
	(405, 403, NULL, NULL, 'view', 885, 886),
	(406, 403, NULL, NULL, 'add', 887, 888),
	(407, 403, NULL, NULL, 'edit', 889, 890),
	(408, 403, NULL, NULL, 'delete', 891, 892),
	(409, 403, NULL, NULL, 'uploadFiles', 893, 894),
	(411, 87, NULL, NULL, 'kelas', 255, 256),
	(412, 87, NULL, NULL, 'pelajaran', 257, 258),
	(413, 87, NULL, NULL, 'home', 259, 260),
	(414, 87, NULL, NULL, 'proses', 261, 262),
	(415, 87, NULL, NULL, 'select_tryout', 263, 264),
	(416, 87, NULL, NULL, 'salin_tryout', 265, 266),
	(417, 87, NULL, NULL, 'quizz', 267, 268),
	(418, 87, NULL, NULL, 'view_pdf', 269, 270),
	(419, 87, NULL, NULL, 'import_question', 271, 272),
	(420, 87, NULL, NULL, 'viewquizz_pdf', 273, 274),
	(421, 87, NULL, NULL, 'upload_files', 275, 276),
	(422, 94, NULL, NULL, 'home', 299, 300),
	(423, 94, NULL, NULL, 'upload_files', 301, 302),
	(424, 101, NULL, NULL, 'upload_files', 319, 320),
	(425, 108, NULL, NULL, 'view_single', 345, 346),
	(426, 108, NULL, NULL, 'kelas', 347, 348),
	(427, 108, NULL, NULL, 'pelajaran', 349, 350),
	(428, 108, NULL, NULL, 'add_single', 351, 352),
	(429, 108, NULL, NULL, 'update_quizz_select', 353, 354),
	(430, 108, NULL, NULL, 'view_pdf', 355, 356),
	(431, 108, NULL, NULL, 'upload_files', 357, 358),
	(432, 350, NULL, NULL, 'upload_files', 859, 860),
	(433, 310, NULL, NULL, 'upload_files', 787, 788),
	(434, 1, NULL, NULL, 'Subjects', 900, 923),
	(435, 434, NULL, NULL, 'index', 901, 902),
	(436, 434, NULL, NULL, 'home', 903, 904),
	(437, 434, NULL, NULL, 'kelas', 905, 906),
	(438, 434, NULL, NULL, 'ensiklopedia', 907, 908),
	(439, 434, NULL, NULL, 'view', 909, 910),
	(440, 434, NULL, NULL, 'add', 911, 912),
	(441, 434, NULL, NULL, 'edit', 913, 914),
	(442, 434, NULL, NULL, 'delete', 915, 916),
	(443, 434, NULL, NULL, 'uploadFiles', 917, 918),
	(444, 434, NULL, NULL, 'upload_files', 919, 920),
	(445, 37, NULL, NULL, 'upload_files', 145, 146),
	(446, 359, NULL, NULL, 'upload_files', 877, 878),
	(447, 319, NULL, NULL, 'sent', 819, 820),
	(448, 319, NULL, NULL, 'upload_files', 821, 822),
	(449, 241, NULL, NULL, 'presentase_siswa', 686, 687),
	(450, 241, NULL, NULL, 'presentase_guru', 688, 689),
	(451, 241, NULL, NULL, 'upload_files', 690, 691),
	(452, 2, NULL, NULL, 'build_acl', 9, 10),
	(453, 2, NULL, NULL, 'add', 11, 12),
	(454, 2, NULL, NULL, 'edit', 13, 14),
	(455, 2, NULL, NULL, 'index', 15, 16),
	(456, 2, NULL, NULL, 'view', 17, 18),
	(457, 2, NULL, NULL, 'delete', 19, 20),
	(458, 80, NULL, NULL, 'build_acl', 227, 228),
	(459, 4, NULL, NULL, 'build_acl', 55, 56),
	(460, 263, NULL, NULL, 'build_acl', 713, 714),
	(461, 263, NULL, NULL, 'add', 715, 716),
	(462, 263, NULL, NULL, 'edit', 717, 718),
	(463, 263, NULL, NULL, 'index', 719, 720),
	(464, 263, NULL, NULL, 'delete', 721, 722),
	(465, 273, NULL, NULL, 'build_acl', 749, 750),
	(466, 61, NULL, NULL, 'build_acl', 207, 208),
	(467, 15, NULL, NULL, 'build_acl', 85, 86),
	(468, 287, NULL, NULL, 'build_acl', 777, 778),
	(469, 115, NULL, NULL, 'build_acl', 407, 408),
	(470, 335, NULL, NULL, 'build_acl', 841, 842),
	(471, 26, NULL, NULL, 'build_acl', 117, 118),
	(472, 403, NULL, NULL, 'upload_files', 895, 896),
	(473, 403, NULL, NULL, 'build_acl', 897, 898),
	(474, 87, NULL, NULL, 'build_acl', 277, 278),
	(475, 94, NULL, NULL, 'build_acl', 303, 304),
	(476, 101, NULL, NULL, 'build_acl', 321, 322),
	(477, 108, NULL, NULL, 'build_acl', 359, 360),
	(478, 350, NULL, NULL, 'build_acl', 861, 862),
	(479, 310, NULL, NULL, 'build_acl', 789, 790),
	(480, 310, NULL, NULL, 'add', 791, 792),
	(481, 310, NULL, NULL, 'edit', 793, 794),
	(482, 310, NULL, NULL, 'view', 795, 796),
	(483, 310, NULL, NULL, 'delete', 797, 798),
	(484, 434, NULL, NULL, 'build_acl', 921, 922),
	(485, 37, NULL, NULL, 'build_acl', 147, 148),
	(486, 359, NULL, NULL, 'build_acl', 879, 880),
	(487, 319, NULL, NULL, 'build_acl', 823, 824),
	(488, 241, NULL, NULL, 'build_acl', 692, 693),
	(489, 137, NULL, NULL, 'upload_files', 460, 461),
	(490, 258, NULL, NULL, 'upload_files', 696, 697),
	(491, 167, NULL, NULL, 'upload_files', 518, 519),
	(492, 182, NULL, NULL, 'upload_files', 538, 539),
	(493, 191, NULL, NULL, 'upload_files', 564, 565),
	(494, 203, NULL, NULL, 'upload_files', 584, 585),
	(495, 212, NULL, NULL, 'upload_files', 622, 623),
	(496, 230, NULL, NULL, 'upload_files', 646, 647),
	(497, 1, NULL, NULL, 'Forum-new', 924, 1229),
	(498, 497, NULL, NULL, 'Categories', 925, 960),
	(499, 498, NULL, NULL, 'index', 926, 927),
	(500, 498, NULL, NULL, 'view', 928, 929),
	(501, 498, NULL, NULL, 'moderate', 930, 931),
	(502, 498, NULL, NULL, 'feed', 932, 933),
	(503, 498, NULL, NULL, 'admin_index', 934, 935),
	(504, 498, NULL, NULL, 'admin_add_forum', 936, 937),
	(505, 498, NULL, NULL, 'admin_edit_forum', 938, 939),
	(506, 498, NULL, NULL, 'admin_delete_forum', 940, 941),
	(507, 498, NULL, NULL, 'admin_add_category', 942, 943),
	(508, 498, NULL, NULL, 'admin_edit_category', 944, 945),
	(509, 498, NULL, NULL, 'admin_delete_category', 946, 947),
	(510, 498, NULL, NULL, 'uploadFiles', 948, 949),
	(511, 498, NULL, NULL, 'upload_files', 950, 951),
	(512, 498, NULL, NULL, 'build_acl', 952, 953),
	(513, 498, NULL, NULL, 'add', 954, 955),
	(514, 498, NULL, NULL, 'edit', 956, 957),
	(515, 498, NULL, NULL, 'delete', 958, 959),
	(516, 497, NULL, NULL, 'Home', 961, 988),
	(517, 516, NULL, NULL, 'index', 962, 963),
	(518, 516, NULL, NULL, 'feed', 964, 965),
	(519, 516, NULL, NULL, 'help', 966, 967),
	(520, 516, NULL, NULL, 'rules', 968, 969),
	(521, 516, NULL, NULL, 'admin_index', 970, 971),
	(522, 516, NULL, NULL, 'admin_settings', 972, 973),
	(523, 516, NULL, NULL, 'uploadFiles', 974, 975),
	(524, 516, NULL, NULL, 'upload_files', 976, 977),
	(525, 516, NULL, NULL, 'build_acl', 978, 979),
	(526, 516, NULL, NULL, 'add', 980, 981),
	(527, 516, NULL, NULL, 'edit', 982, 983),
	(528, 516, NULL, NULL, 'view', 984, 985),
	(529, 516, NULL, NULL, 'delete', 986, 987),
	(530, 497, NULL, NULL, 'Install', 989, 1052),
	(531, 530, NULL, NULL, 'index', 990, 991),
	(532, 530, NULL, NULL, 'check_database', 992, 993),
	(533, 530, NULL, NULL, 'create_tables', 994, 995),
	(534, 530, NULL, NULL, 'setup_users', 996, 997),
	(535, 530, NULL, NULL, 'finished', 998, 999),
	(536, 530, NULL, NULL, 'create_admin', 1000, 1001),
	(537, 530, NULL, NULL, 'patch', 1002, 1003),
	(538, 530, NULL, NULL, 'upgrade_1_8', 1004, 1005),
	(539, 530, NULL, NULL, 'uploadFiles', 1006, 1007),
	(540, 530, NULL, NULL, 'upload_files', 1008, 1009),
	(541, 530, NULL, NULL, 'build_acl', 1010, 1011),
	(542, 530, NULL, NULL, 'add', 1012, 1013),
	(543, 530, NULL, NULL, 'edit', 1014, 1015),
	(544, 530, NULL, NULL, 'view', 1016, 1017),
	(545, 530, NULL, NULL, 'delete', 1018, 1019),
	(546, 497, NULL, NULL, 'Posts', 1053, 1072),
	(547, 546, NULL, NULL, 'index', 1054, 1055),
	(548, 546, NULL, NULL, 'add', 1056, 1057),
	(549, 546, NULL, NULL, 'edit', 1058, 1059),
	(550, 546, NULL, NULL, 'delete', 1060, 1061),
	(551, 546, NULL, NULL, 'report', 1062, 1063),
	(552, 546, NULL, NULL, 'uploadFiles', 1064, 1065),
	(553, 546, NULL, NULL, 'upload_files', 1066, 1067),
	(554, 546, NULL, NULL, 'build_acl', 1068, 1069),
	(555, 546, NULL, NULL, 'view', 1070, 1071),
	(556, 497, NULL, NULL, 'Reports', 1073, 1098),
	(557, 556, NULL, NULL, 'admin_index', 1074, 1075),
	(558, 556, NULL, NULL, 'admin_topics', 1076, 1077),
	(559, 556, NULL, NULL, 'admin_posts', 1078, 1079),
	(560, 556, NULL, NULL, 'admin_users', 1080, 1081),
	(561, 556, NULL, NULL, 'uploadFiles', 1082, 1083),
	(562, 556, NULL, NULL, 'upload_files', 1084, 1085),
	(563, 556, NULL, NULL, 'build_acl', 1086, 1087),
	(564, 556, NULL, NULL, 'add', 1088, 1089),
	(565, 556, NULL, NULL, 'edit', 1090, 1091),
	(566, 556, NULL, NULL, 'index', 1092, 1093),
	(567, 556, NULL, NULL, 'view', 1094, 1095),
	(568, 556, NULL, NULL, 'delete', 1096, 1097),
	(569, 497, NULL, NULL, 'Search', 1099, 1118),
	(570, 569, NULL, NULL, 'index', 1100, 1101),
	(571, 569, NULL, NULL, 'proxy', 1102, 1103),
	(572, 569, NULL, NULL, 'uploadFiles', 1104, 1105),
	(573, 569, NULL, NULL, 'upload_files', 1106, 1107),
	(574, 569, NULL, NULL, 'build_acl', 1108, 1109),
	(575, 569, NULL, NULL, 'add', 1110, 1111),
	(576, 569, NULL, NULL, 'edit', 1112, 1113),
	(577, 569, NULL, NULL, 'view', 1114, 1115),
	(578, 569, NULL, NULL, 'delete', 1116, 1117),
	(579, 497, NULL, NULL, 'Staff', 1119, 1156),
	(580, 579, NULL, NULL, 'admin_index', 1120, 1121),
	(581, 579, NULL, NULL, 'admin_add_access', 1122, 1123),
	(582, 579, NULL, NULL, 'admin_edit_access', 1124, 1125),
	(583, 579, NULL, NULL, 'admin_delete_access', 1126, 1127),
	(584, 579, NULL, NULL, 'admin_add_access_level', 1128, 1129),
	(585, 579, NULL, NULL, 'admin_edit_access_level', 1130, 1131),
	(586, 579, NULL, NULL, 'admin_delete_access_level', 1132, 1133),
	(587, 579, NULL, NULL, 'admin_add_moderator', 1134, 1135),
	(588, 579, NULL, NULL, 'admin_edit_moderator', 1136, 1137),
	(589, 579, NULL, NULL, 'admin_delete_moderator', 1138, 1139),
	(590, 579, NULL, NULL, 'uploadFiles', 1140, 1141),
	(591, 579, NULL, NULL, 'upload_files', 1142, 1143),
	(592, 579, NULL, NULL, 'build_acl', 1144, 1145),
	(593, 579, NULL, NULL, 'add', 1146, 1147),
	(594, 579, NULL, NULL, 'edit', 1148, 1149),
	(595, 579, NULL, NULL, 'index', 1150, 1151),
	(596, 579, NULL, NULL, 'view', 1152, 1153),
	(597, 579, NULL, NULL, 'delete', 1154, 1155),
	(598, 497, NULL, NULL, 'Topics', 1157, 1180),
	(599, 598, NULL, NULL, 'index', 1158, 1159),
	(600, 598, NULL, NULL, 'add', 1160, 1161),
	(601, 598, NULL, NULL, 'edit', 1162, 1163),
	(602, 598, NULL, NULL, 'feed', 1164, 1165),
	(603, 598, NULL, NULL, 'delete', 1166, 1167),
	(604, 598, NULL, NULL, 'report', 1168, 1169),
	(605, 598, NULL, NULL, 'view', 1170, 1171),
	(606, 598, NULL, NULL, 'moderate', 1172, 1173),
	(607, 598, NULL, NULL, 'uploadFiles', 1174, 1175),
	(608, 598, NULL, NULL, 'upload_files', 1176, 1177),
	(609, 598, NULL, NULL, 'build_acl', 1178, 1179),
	(610, 497, NULL, NULL, 'Users', 1181, 1226),
	(611, 610, NULL, NULL, 'index', 1182, 1183),
	(612, 610, NULL, NULL, 'siswa', 1184, 1185),
	(613, 610, NULL, NULL, 'presentase_siswa', 1186, 1187),
	(614, 610, NULL, NULL, 'guru', 1188, 1189),
	(615, 610, NULL, NULL, 'presentase_guru', 1190, 1191),
	(616, 610, NULL, NULL, 'view', 1192, 1193),
	(617, 610, NULL, NULL, 'add', 1194, 1195),
	(618, 610, NULL, NULL, 'edit', 1196, 1197),
	(619, 610, NULL, NULL, 'delete', 1198, 1199),
	(620, 610, NULL, NULL, 'administrator_index', 1200, 1201),
	(621, 610, NULL, NULL, 'administrator_view', 1202, 1203),
	(622, 610, NULL, NULL, 'administrator_add', 1204, 1205),
	(623, 610, NULL, NULL, 'administrator_edit', 1206, 1207),
	(624, 610, NULL, NULL, 'administrator_delete', 1208, 1209),
	(625, 610, NULL, NULL, 'login', 1210, 1211),
	(626, 610, NULL, NULL, 'logout', 1212, 1213),
	(627, 610, NULL, NULL, 'home', 1214, 1215),
	(628, 610, NULL, NULL, 'change_password', 1216, 1217),
	(629, 610, NULL, NULL, 'initDB', 1218, 1219),
	(630, 610, NULL, NULL, 'uploadFiles', 1220, 1221),
	(631, 610, NULL, NULL, 'upload_files', 1222, 1223),
	(632, 610, NULL, NULL, 'build_acl', 1224, 1225),
	(633, 530, NULL, NULL, 'Install', 1020, 1051),
	(634, 633, NULL, NULL, 'index', 1021, 1022),
	(635, 633, NULL, NULL, 'check_database', 1023, 1024),
	(636, 633, NULL, NULL, 'create_tables', 1025, 1026),
	(637, 633, NULL, NULL, 'setup_users', 1027, 1028),
	(638, 633, NULL, NULL, 'finished', 1029, 1030),
	(639, 633, NULL, NULL, 'create_admin', 1031, 1032),
	(640, 633, NULL, NULL, 'patch', 1033, 1034),
	(641, 633, NULL, NULL, 'upgrade_1_8', 1035, 1036),
	(642, 633, NULL, NULL, 'uploadFiles', 1037, 1038),
	(643, 633, NULL, NULL, 'upload_files', 1039, 1040),
	(644, 633, NULL, NULL, 'build_acl', 1041, 1042),
	(645, 633, NULL, NULL, 'add', 1043, 1044),
	(646, 633, NULL, NULL, 'edit', 1045, 1046),
	(647, 633, NULL, NULL, 'view', 1047, 1048),
	(648, 633, NULL, NULL, 'delete', 1049, 1050),
	(649, 1, NULL, NULL, 'Acl', 1230, 1351),
	(650, 649, NULL, NULL, 'AclAcos', 1231, 1258),
	(651, 650, NULL, NULL, 'load', 1232, 1233),
	(652, 650, NULL, NULL, 'delete', 1234, 1235),
	(653, 650, NULL, NULL, 'children', 1236, 1237),
	(654, 650, NULL, NULL, 'add', 1238, 1239),
	(655, 650, NULL, NULL, 'update', 1240, 1241),
	(656, 650, NULL, NULL, 'success', 1242, 1243),
	(657, 650, NULL, NULL, 'failure', 1244, 1245),
	(658, 650, NULL, NULL, 'uploadFiles', 1246, 1247),
	(659, 650, NULL, NULL, 'upload_files', 1248, 1249),
	(660, 650, NULL, NULL, 'build_acl', 1250, 1251),
	(661, 650, NULL, NULL, 'edit', 1252, 1253),
	(662, 650, NULL, NULL, 'index', 1254, 1255),
	(663, 650, NULL, NULL, 'view', 1256, 1257),
	(664, 649, NULL, NULL, 'AclAros', 1259, 1288),
	(665, 664, NULL, NULL, 'load', 1260, 1261),
	(666, 664, NULL, NULL, 'delete', 1262, 1263),
	(667, 664, NULL, NULL, 'children', 1264, 1265),
	(668, 664, NULL, NULL, 'add', 1266, 1267),
	(669, 664, NULL, NULL, 'update', 1268, 1269),
	(670, 664, NULL, NULL, 'test', 1270, 1271),
	(671, 664, NULL, NULL, 'success', 1272, 1273),
	(672, 664, NULL, NULL, 'failure', 1274, 1275),
	(673, 664, NULL, NULL, 'uploadFiles', 1276, 1277),
	(674, 664, NULL, NULL, 'upload_files', 1278, 1279),
	(675, 664, NULL, NULL, 'build_acl', 1280, 1281),
	(676, 664, NULL, NULL, 'edit', 1282, 1283),
	(677, 664, NULL, NULL, 'index', 1284, 1285),
	(678, 664, NULL, NULL, 'view', 1286, 1287),
	(679, 649, NULL, NULL, 'Acl', 1289, 1350),
	(680, 679, NULL, NULL, 'admin_index', 1290, 1291),
	(681, 679, NULL, NULL, 'admin_aros', 1292, 1293),
	(682, 679, NULL, NULL, 'admin_acos', 1294, 1295),
	(683, 679, NULL, NULL, 'admin_permissions', 1296, 1297),
	(684, 679, NULL, NULL, 'success', 1298, 1299),
	(685, 679, NULL, NULL, 'failure', 1300, 1301),
	(686, 679, NULL, NULL, 'uploadFiles', 1302, 1303),
	(687, 679, NULL, NULL, 'upload_files', 1304, 1305),
	(688, 679, NULL, NULL, 'build_acl', 1306, 1307),
	(689, 679, NULL, NULL, 'add', 1308, 1309),
	(690, 679, NULL, NULL, 'edit', 1310, 1311),
	(691, 679, NULL, NULL, 'index', 1312, 1313),
	(692, 679, NULL, NULL, 'view', 1314, 1315),
	(693, 679, NULL, NULL, 'delete', 1316, 1317),
	(694, 679, NULL, NULL, 'AclPermissions', 1318, 1349),
	(695, 694, NULL, NULL, 'exists', 1319, 1320),
	(696, 694, NULL, NULL, 'create', 1321, 1322),
	(697, 694, NULL, NULL, 'aros', 1323, 1324),
	(698, 694, NULL, NULL, 'acos', 1325, 1326),
	(699, 694, NULL, NULL, 'revoke', 1327, 1328),
	(700, 694, NULL, NULL, 'success', 1329, 1330),
	(701, 694, NULL, NULL, 'failure', 1331, 1332),
	(702, 694, NULL, NULL, 'uploadFiles', 1333, 1334),
	(703, 694, NULL, NULL, 'upload_files', 1335, 1336),
	(704, 694, NULL, NULL, 'build_acl', 1337, 1338),
	(705, 694, NULL, NULL, 'add', 1339, 1340),
	(706, 694, NULL, NULL, 'edit', 1341, 1342),
	(707, 694, NULL, NULL, 'index', 1343, 1344),
	(708, 694, NULL, NULL, 'view', 1345, 1346),
	(709, 694, NULL, NULL, 'delete', 1347, 1348),
	(710, 497, NULL, NULL, 'Home', 1227, 1228),
	(711, 4, NULL, NULL, 'add2', 57, 58),
	(712, 1, NULL, NULL, 'Grades', 1352, 1397),
	(713, 712, NULL, NULL, 'index', 1353, 1354),
	(714, 712, NULL, NULL, 'siswa', 1355, 1356),
	(715, 712, NULL, NULL, 'presentase_siswa', 1357, 1358),
	(716, 712, NULL, NULL, 'guru', 1359, 1360),
	(717, 712, NULL, NULL, 'presentase_guru', 1361, 1362),
	(718, 712, NULL, NULL, 'view', 1363, 1364),
	(719, 712, NULL, NULL, 'add', 1365, 1366),
	(720, 712, NULL, NULL, 'edit', 1367, 1368),
	(721, 712, NULL, NULL, 'delete', 1369, 1370),
	(722, 712, NULL, NULL, 'administrator_index', 1371, 1372),
	(723, 712, NULL, NULL, 'administrator_view', 1373, 1374),
	(724, 712, NULL, NULL, 'administrator_add', 1375, 1376),
	(725, 712, NULL, NULL, 'administrator_edit', 1377, 1378),
	(726, 712, NULL, NULL, 'administrator_delete', 1379, 1380),
	(727, 712, NULL, NULL, 'login', 1381, 1382),
	(728, 712, NULL, NULL, 'logout', 1383, 1384),
	(729, 712, NULL, NULL, 'home', 1385, 1386),
	(730, 712, NULL, NULL, 'change_password', 1387, 1388),
	(731, 712, NULL, NULL, 'initDB', 1389, 1390),
	(732, 712, NULL, NULL, 'uploadFiles', 1391, 1392),
	(733, 712, NULL, NULL, 'upload_files', 1393, 1394),
	(734, 712, NULL, NULL, 'build_acl', 1395, 1396),
	(735, 1, NULL, NULL, 'Kelas', 1398, 1443),
	(736, 735, NULL, NULL, 'index', 1399, 1400),
	(737, 735, NULL, NULL, 'siswa', 1401, 1402),
	(738, 735, NULL, NULL, 'presentase_siswa', 1403, 1404),
	(739, 735, NULL, NULL, 'guru', 1405, 1406),
	(740, 735, NULL, NULL, 'presentase_guru', 1407, 1408),
	(741, 735, NULL, NULL, 'view', 1409, 1410),
	(742, 735, NULL, NULL, 'add', 1411, 1412),
	(743, 735, NULL, NULL, 'edit', 1413, 1414),
	(744, 735, NULL, NULL, 'delete', 1415, 1416),
	(745, 735, NULL, NULL, 'administrator_index', 1417, 1418),
	(746, 735, NULL, NULL, 'administrator_view', 1419, 1420),
	(747, 735, NULL, NULL, 'administrator_add', 1421, 1422),
	(748, 735, NULL, NULL, 'administrator_edit', 1423, 1424),
	(749, 735, NULL, NULL, 'administrator_delete', 1425, 1426),
	(750, 735, NULL, NULL, 'login', 1427, 1428),
	(751, 735, NULL, NULL, 'logout', 1429, 1430),
	(752, 735, NULL, NULL, 'home', 1431, 1432),
	(753, 735, NULL, NULL, 'change_password', 1433, 1434),
	(754, 735, NULL, NULL, 'initDB', 1435, 1436),
	(755, 735, NULL, NULL, 'uploadFiles', 1437, 1438),
	(756, 735, NULL, NULL, 'upload_files', 1439, 1440),
	(757, 735, NULL, NULL, 'build_acl', 1441, 1442),
	(758, 115, NULL, NULL, 'index_old', 409, 410),
	(759, 115, NULL, NULL, 'find_category2', 411, 412),
	(760, 115, NULL, NULL, 'download', 413, 414),
	(761, 115, NULL, NULL, 'generatexml', 415, 416),
	(762, 115, NULL, NULL, 'search', 417, 418),
	(763, 115, NULL, NULL, 'search_video', 419, 420),
	(764, 115, NULL, NULL, 'editxml', 421, 422),
	(765, 1, NULL, NULL, 'Monitorings', 1444, 1473),
	(766, 765, NULL, NULL, 'index', 1445, 1446),
	(767, 765, NULL, NULL, 'view', 1447, 1448),
	(768, 765, NULL, NULL, 'add', 1449, 1450),
	(769, 765, NULL, NULL, 'edit', 1451, 1452),
	(770, 765, NULL, NULL, 'delete', 1453, 1454),
	(771, 765, NULL, NULL, 'login', 1455, 1456),
	(772, 765, NULL, NULL, 'logout', 1457, 1458),
	(773, 765, NULL, NULL, 'home', 1459, 1460),
	(774, 765, NULL, NULL, 'setup', 1461, 1462),
	(775, 765, NULL, NULL, 'change_password', 1463, 1464),
	(776, 765, NULL, NULL, 'initDB', 1465, 1466),
	(777, 765, NULL, NULL, 'uploadFiles', 1467, 1468),
	(778, 765, NULL, NULL, 'upload_files', 1469, 1470),
	(779, 765, NULL, NULL, 'build_acl', 1471, 1472),
	(780, 26, NULL, NULL, 'video', 119, 120);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.answers
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(32) NOT NULL,
  `details` text NOT NULL,
  `true` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.answers: 0 rows
DELETE FROM `answers`;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.aros
CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.aros: 12 rows
DELETE FROM `aros`;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
	(1, NULL, 'Group', 6, NULL, 1, 2),
	(2, NULL, 'Group', 1, NULL, 3, 8),
	(3, NULL, 'Group', 2, NULL, 9, 14),
	(4, NULL, 'Group', 3, NULL, 15, 24),
	(5, 2, 'User', 1, NULL, 4, 5),
	(6, 2, 'User', 2, NULL, 6, 7),
	(7, 4, 'User', 3, NULL, 16, 17),
	(8, 3, 'User', 4, NULL, 10, 11),
	(15, 4, 'User', 11, NULL, 18, 19),
	(16, 4, 'User', 12, NULL, 20, 21),
	(21, 3, 'User', 17, NULL, 12, 13),
	(22, 4, 'User', 18, NULL, 22, 23);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.aros_acos
CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.aros_acos: 147 rows
DELETE FROM `aros_acos`;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
	(1, 2, 1, '1', '1', '1', '1'),
	(2, 4, 1, '-1', '-1', '-1', '-1'),
	(3, 4, 6, '1', '1', '1', '1'),
	(4, 4, 64, '1', '1', '1', '1'),
	(5, 4, 65, '1', '1', '1', '1'),
	(6, 4, 5, '1', '1', '1', '1'),
	(7, 4, 62, '1', '1', '1', '1'),
	(8, 4, 116, '1', '1', '1', '1'),
	(9, 4, 27, '1', '1', '1', '1'),
	(10, 4, 28, '1', '1', '1', '1'),
	(11, 4, 38, '1', '1', '1', '1'),
	(12, 4, 40, '1', '1', '1', '1'),
	(13, 4, 117, '1', '1', '1', '1'),
	(14, 4, 39, '1', '1', '1', '1'),
	(15, 4, 128, '1', '1', '1', '1'),
	(100, 4, 137, '1', '1', '1', '1'),
	(17, 3, 242, '-1', '-1', '-1', '-1'),
	(18, 3, 245, '-1', '-1', '-1', '-1'),
	(19, 3, 246, '-1', '-1', '-1', '-1'),
	(20, 3, 244, '-1', '-1', '-1', '-1'),
	(21, 4, 254, '1', '1', '1', '1'),
	(22, 4, 243, '1', '1', '1', '1'),
	(23, 4, 329, '1', '1', '1', '1'),
	(24, 3, 325, '-1', '-1', '-1', '-1'),
	(25, 3, 326, '-1', '-1', '-1', '-1'),
	(26, 4, 319, '1', '1', '1', '1'),
	(27, 4, 325, '-1', '-1', '-1', '-1'),
	(28, 4, 326, '-1', '-1', '-1', '-1'),
	(29, 4, 252, '1', '1', '1', '1'),
	(30, 4, 253, '1', '1', '1', '1'),
	(31, 4, 310, '1', '1', '1', '1'),
	(32, 4, 109, '-1', '-1', '-1', '-1'),
	(33, 4, 305, '1', '1', '1', '1'),
	(34, 4, 306, '1', '1', '1', '1'),
	(35, 4, 307, '1', '1', '1', '1'),
	(36, 3, 305, '-1', '-1', '-1', '-1'),
	(37, 3, 306, '-1', '-1', '-1', '-1'),
	(38, 3, 307, '-1', '-1', '-1', '-1'),
	(39, 3, 310, '-1', '-1', '-1', '-1'),
	(40, 3, 99, '-1', '-1', '-1', '-1'),
	(41, 4, 261, '1', '1', '1', '1'),
	(42, 4, 299, '1', '1', '1', '1'),
	(43, 4, 94, '1', '1', '1', '1'),
	(44, 4, 99, '-1', '-1', '-1', '-1'),
	(45, 4, 288, '1', '1', '1', '1'),
	(46, 4, 291, '1', '1', '1', '1'),
	(47, 4, 292, '1', '1', '1', '1'),
	(48, 4, 293, '1', '1', '1', '1'),
	(49, 4, 294, '1', '1', '1', '1'),
	(50, 4, 276, '1', '1', '1', '1'),
	(51, 4, 281, '1', '1', '1', '1'),
	(52, 4, 282, '1', '1', '1', '1'),
	(53, 4, 283, '1', '1', '1', '1'),
	(54, 4, 277, '1', '1', '1', '1'),
	(55, 4, 263, '1', '1', '1', '1'),
	(56, 4, 367, '1', '1', '1', '1'),
	(57, 4, 368, '1', '1', '1', '1'),
	(58, 4, 347, '1', '1', '1', '1'),
	(59, 4, 348, '1', '1', '1', '1'),
	(60, 4, 360, '1', '1', '1', '1'),
	(61, 4, 361, '1', '1', '1', '1'),
	(62, 4, 363, '1', '1', '1', '1'),
	(63, 4, 377, '1', '1', '1', '1'),
	(64, 4, 373, '1', '1', '1', '1'),
	(65, 4, 374, '1', '1', '1', '1'),
	(66, 4, 375, '1', '1', '1', '1'),
	(134, 3, 127, '1', '1', '1', '1'),
	(68, 4, 436, '1', '1', '1', '1'),
	(69, 4, 437, '1', '1', '1', '1'),
	(70, 4, 438, '1', '1', '1', '1'),
	(71, 4, 394, '1', '1', '1', '1'),
	(72, 4, 396, '1', '1', '1', '1'),
	(73, 4, 393, '1', '1', '1', '1'),
	(74, 4, 395, '1', '1', '1', '1'),
	(75, 4, 397, '1', '1', '1', '1'),
	(76, 4, 398, '1', '1', '1', '1'),
	(77, 4, 29, '1', '1', '1', '1'),
	(78, 4, 381, '1', '1', '1', '1'),
	(79, 4, 8, '1', '1', '1', '1'),
	(80, 4, 9, '1', '1', '1', '1'),
	(81, 4, 413, '1', '1', '1', '1'),
	(82, 4, 414, '1', '1', '1', '1'),
	(83, 4, 417, '1', '1', '1', '1'),
	(84, 4, 418, '1', '1', '1', '1'),
	(85, 4, 420, '1', '1', '1', '1'),
	(86, 4, 401, '1', '1', '1', '1'),
	(87, 4, 449, '1', '1', '1', '1'),
	(88, 4, 7, '1', '1', '1', '1'),
	(89, 4, 382, '1', '1', '1', '1'),
	(90, 4, 108, '-1', '-1', '-1', '-1'),
	(91, 3, 498, '1', '1', '1', '1'),
	(92, 3, 546, '1', '1', '1', '1'),
	(93, 3, 556, '1', '1', '1', '1'),
	(94, 3, 598, '1', '1', '1', '1'),
	(95, 4, 498, '1', '1', '1', '1'),
	(96, 4, 546, '1', '1', '1', '1'),
	(97, 4, 556, '1', '1', '1', '1'),
	(98, 4, 598, '1', '1', '1', '1'),
	(99, 3, 182, '1', '1', '1', '1'),
	(101, 3, 137, '1', '1', '1', '1'),
	(102, 3, 258, '1', '1', '1', '1'),
	(103, 4, 258, '1', '1', '1', '1'),
	(104, 4, 182, '1', '1', '1', '1'),
	(105, 3, 191, '1', '1', '1', '1'),
	(106, 4, 191, '1', '1', '1', '1'),
	(107, 3, 203, '1', '1', '1', '1'),
	(108, 4, 203, '1', '1', '1', '1'),
	(109, 3, 212, '1', '1', '1', '1'),
	(110, 4, 212, '1', '1', '1', '1'),
	(111, 3, 230, '1', '1', '1', '1'),
	(112, 4, 230, '1', '1', '1', '1'),
	(113, 3, 241, '1', '1', '1', '1'),
	(114, 4, 241, '1', '1', '1', '1'),
	(116, 3, 434, '1', '1', '1', '1'),
	(117, 3, 115, '1', '1', '1', '1'),
	(118, 3, 26, '1', '1', '1', '1'),
	(119, 3, 319, '1', '1', '1', '1'),
	(120, 3, 4, '1', '1', '1', '1'),
	(121, 3, 419, '1', '1', '1', '1'),
	(122, 3, 88, '1', '1', '1', '1'),
	(123, 3, 411, '1', '1', '1', '1'),
	(124, 3, 412, '1', '1', '1', '1'),
	(125, 3, 414, '1', '1', '1', '1'),
	(126, 3, 416, '1', '1', '1', '1'),
	(127, 3, 415, '1', '1', '1', '1'),
	(128, 3, 93, '1', '1', '1', '1'),
	(129, 3, 421, '1', '1', '1', '1'),
	(130, 3, 89, '1', '1', '1', '1'),
	(131, 3, 418, '1', '1', '1', '1'),
	(132, 3, 420, '1', '1', '1', '1'),
	(135, 3, 59, '1', '1', '1', '1'),
	(136, 3, 60, '1', '1', '1', '1'),
	(137, 3, 52, '1', '1', '1', '1'),
	(138, 3, 79, '1', '1', '1', '1'),
	(139, 3, 50, '1', '1', '1', '1'),
	(140, 3, 90, '1', '1', '1', '1'),
	(141, 3, 343, '1', '1', '1', '1'),
	(142, 3, 257, '1', '1', '1', '1'),
	(143, 3, 342, '1', '1', '1', '1'),
	(144, 3, 92, '1', '1', '1', '1'),
	(145, 3, 91, '1', '1', '1', '1'),
	(146, 3, 344, '1', '1', '1', '1'),
	(147, 3, 345, '1', '1', '1', '1'),
	(148, 3, 346, '1', '1', '1', '1'),
	(149, 3, 413, '1', '1', '1', '1'),
	(150, 3, 735, '1', '1', '1', '1'),
	(151, 3, 765, '1', '1', '1', '1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.assets
CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` int(11) NOT NULL,
  `matapelajaran` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(160) NOT NULL,
  `jenis` smallint(3) NOT NULL,
  `created_by` smallint(1) NOT NULL,
  `content` longtext,
  `file` varchar(100) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `mimetype` varchar(255) DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.assets: 0 rows
DELETE FROM `assets`;
/*!40000 ALTER TABLE `assets` DISABLE KEYS */;
/*!40000 ALTER TABLE `assets` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `details` text,
  `cover` varchar(300) DEFAULT NULL,
  `type` smallint(1) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.categories: 13 rows
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `parentId`, `details`, `cover`, `type`, `created`, `modified`) VALUES
	(46, 'Tutorial', NULL, NULL, NULL, 2, '2014-05-10', '2014-05-10'),
	(12, 'Dokumenter Indonesia', NULL, 'Dokumenter Indonesia', NULL, 2, '2014-09-12', '2014-09-12'),
	(4, 'Fiksi', NULL, NULL, 'img/fiksi.png', 1, '2012-11-20', '2014-05-09'),
	(5, 'Komputer', NULL, NULL, 'img/komputer.png', 1, '2013-11-20', '0000-00-00'),
	(3, 'Character Building', NULL, NULL, 'img/ebookcarachter.png', 1, '2013-11-20', '0000-00-00'),
	(1, 'BSE(Buku Sekolah Elektronik)', NULL, NULL, 'img/bse2.png', 1, '2014-04-03', '2014-05-09'),
	(15, 'Carachter Building', NULL, 'Carachter Building', NULL, 2, '0000-00-00', '0000-00-00'),
	(14, 'Life Skill', NULL, 'Life Skill', NULL, 2, '2014-09-12', '2014-09-12'),
	(43, 'Mata Pelajaran', NULL, NULL, NULL, 2, '2014-05-10', '2014-05-10'),
	(13, 'Iptek', NULL, NULL, NULL, 2, '2014-05-10', '2014-05-10'),
	(45, 'Umum', NULL, NULL, NULL, 2, '2014-05-10', '2014-05-10'),
	(7, 'Biografi', NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
	(8, 'Kamus', NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.englishses
CREATE TABLE IF NOT EXISTS `englishses` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `words` varchar(200) NOT NULL,
  `details` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.englishses: 12 rows
DELETE FROM `englishses`;
/*!40000 ALTER TABLE `englishses` DISABLE KEYS */;
INSERT INTO `englishses` (`id`, `words`, `details`, `created`, `modified`) VALUES
	(3, 'Dictionary', 'Test', '2010-12-10 08:36:19', '2010-12-10 08:36:19'),
	(4, 'Peanuts', 'Test', '2010-12-10 08:38:38', '2010-12-10 08:38:38'),
	(5, 'Peanuts', 'Test', '2010-12-10 08:40:27', '2010-12-13 21:16:12'),
	(6, 'Taufiq', '', '2010-12-10 09:18:23', '2010-12-10 09:18:23'),
	(7, 'anonk', '', '2010-12-13 21:42:15', '2010-12-13 21:44:26'),
	(11, 'Love', '', '2010-12-14 04:05:35', '2010-12-14 04:05:35'),
	(10, 'Pen', '', '2010-12-14 04:02:30', '2010-12-14 04:02:30'),
	(12, 'kiss', NULL, '2010-12-14 04:34:39', '2010-12-14 04:40:28'),
	(13, 'where', NULL, '2010-12-14 04:42:43', '2010-12-14 04:42:43'),
	(14, 'book', NULL, '2010-12-24 23:49:00', '2010-12-24 23:49:00'),
	(15, 'ledger', NULL, '2010-12-24 23:50:48', '2010-12-24 23:50:48'),
	(16, 'table', NULL, '2010-12-25 02:49:46', '2011-08-29 03:04:26');
/*!40000 ALTER TABLE `englishses` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.englishses_indos
CREATE TABLE IF NOT EXISTS `englishses_indos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `englishse_id` bigint(20) NOT NULL,
  `indo_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.englishses_indos: 19 rows
DELETE FROM `englishses_indos`;
/*!40000 ALTER TABLE `englishses_indos` DISABLE KEYS */;
INSERT INTO `englishses_indos` (`id`, `englishse_id`, `indo_id`) VALUES
	(16, 5, 14),
	(13, 6, 13),
	(12, 6, 12),
	(21, 7, 11),
	(15, 5, 7),
	(14, 5, 10),
	(19, 6, 11),
	(22, 7, 13),
	(23, 10, 15),
	(32, 11, 16),
	(25, 11, 17),
	(27, 11, 18),
	(33, 12, 16),
	(31, 12, 18),
	(34, 13, 19),
	(35, 14, 20),
	(36, 15, 4),
	(38, 16, 21),
	(39, 16, 22);
/*!40000 ALTER TABLE `englishses_indos` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.file_tugas
CREATE TABLE IF NOT EXISTS `file_tugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tugas_id` int(11) NOT NULL,
  `siswa_id` bigint(30) NOT NULL,
  `description` text,
  `file` varchar(400) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `mimetype` varchar(255) NOT NULL,
  `filesize` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.file_tugas: 5 rows
DELETE FROM `file_tugas`;
/*!40000 ALTER TABLE `file_tugas` DISABLE KEYS */;
INSERT INTO `file_tugas` (`id`, `tugas_id`, `siswa_id`, `description`, `file`, `dir`, `mimetype`, `filesize`, `created`, `modified`) VALUES
	(44, 23, 18, 'ini penyerahan ke 2', 'Ilmu_Pengetahuan_Sosial_untuk_SMP_MTs.pdf', 'files/tugas', 'application/pdf', 17700215, '2014-04-21 12:23:52', '2014-04-21 12:23:52'),
	(43, 23, 18, 'Ini saya serahkan ya pak', '3_silabus_bhs_inggris_sma_1.doc', 'files/tugas', 'application/msword', 642560, '2014-04-21 12:23:13', '2014-04-21 12:23:13'),
	(45, 24, 18, 'asdnasdbjksadsahdkjsad', 'form_d_fault_import_pertanyaan_4.xls', 'files/tugas', 'application/octet-stream', 31232, '2014-05-20 16:41:29', '2014-05-20 16:41:29'),
	(46, 27, 18, 'Ini tugas saya pak', 'all.png', 'files/tugas', 'image/png', 374285, '2014-06-11 17:50:55', '2014-06-11 17:50:55'),
	(47, 28, 18, 'ini tugas saya pak, tolong di cek', 'surat_pengunduran_ichan.docx', 'files\\tugas', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 68079, '2014-11-29 12:21:01', '2014-11-29 12:21:01');
/*!40000 ALTER TABLE `file_tugas` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forums_access
CREATE TABLE IF NOT EXISTS `forums_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_level_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `access_level_id` (`access_level_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Users with certain access';

-- Dumping data for table elearn_sma.forums_access: ~0 rows (approximately)
DELETE FROM `forums_access`;
/*!40000 ALTER TABLE `forums_access` DISABLE KEYS */;
/*!40000 ALTER TABLE `forums_access` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forums_access_levels
CREATE TABLE IF NOT EXISTS `forums_access_levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `level` int(11) NOT NULL,
  `is_admin` smallint(6) NOT NULL DEFAULT '0',
  `is_super` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Access levels for users';

-- Dumping data for table elearn_sma.forums_access_levels: ~4 rows (approximately)
DELETE FROM `forums_access_levels`;
/*!40000 ALTER TABLE `forums_access_levels` DISABLE KEYS */;
INSERT INTO `forums_access_levels` (`id`, `title`, `level`, `is_admin`, `is_super`) VALUES
	(1, 'Member', 1, 0, 0),
	(2, 'Moderator', 4, 0, 0),
	(3, 'Super Moderator', 7, 0, 1),
	(4, 'Administrator', 10, 1, 1);
/*!40000 ALTER TABLE `forums_access_levels` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forums_forums
CREATE TABLE IF NOT EXISTS `forums_forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_level_id` smallint(6) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `orderNo` smallint(6) NOT NULL DEFAULT '0',
  `accessView` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `access_level_id` (`access_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Containing forums';

-- Dumping data for table elearn_sma.forums_forums: ~1 rows (approximately)
DELETE FROM `forums_forums`;
/*!40000 ALTER TABLE `forums_forums` DISABLE KEYS */;
INSERT INTO `forums_forums` (`id`, `access_level_id`, `title`, `slug`, `status`, `orderNo`, `accessView`) VALUES
	(1, 0, 'Cupcake Forums', 'cupcake-forums', 0, 1, 0);
/*!40000 ALTER TABLE `forums_forums` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forums_forum_categories
CREATE TABLE IF NOT EXISTS `forums_forum_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `access_level_id` smallint(6) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `orderNo` smallint(6) NOT NULL DEFAULT '0',
  `topic_count` int(11) NOT NULL DEFAULT '0',
  `post_count` int(11) NOT NULL DEFAULT '0',
  `accessRead` smallint(6) NOT NULL DEFAULT '0',
  `accessPost` smallint(6) NOT NULL DEFAULT '1',
  `accessReply` smallint(6) NOT NULL DEFAULT '1',
  `accessPoll` smallint(6) NOT NULL DEFAULT '1',
  `settingPostCount` smallint(6) NOT NULL DEFAULT '1',
  `settingAutoLock` smallint(6) NOT NULL DEFAULT '1',
  `lastTopic_id` int(11) NOT NULL DEFAULT '0',
  `lastPost_id` int(11) NOT NULL DEFAULT '0',
  `lastUser_id` int(11) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lastTopic_id` (`lastTopic_id`),
  KEY `lastPost_id` (`lastPost_id`),
  KEY `lastUser_id` (`lastUser_id`),
  KEY `forum_id` (`forum_id`),
  KEY `parent_id` (`parent_id`),
  KEY `access_level_id` (`access_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Forum categories to post topics to';

-- Dumping data for table elearn_sma.forums_forum_categories: ~1 rows (approximately)
DELETE FROM `forums_forum_categories`;
/*!40000 ALTER TABLE `forums_forum_categories` DISABLE KEYS */;
INSERT INTO `forums_forum_categories` (`id`, `forum_id`, `parent_id`, `access_level_id`, `title`, `slug`, `description`, `status`, `orderNo`, `topic_count`, `post_count`, `accessRead`, `accessPost`, `accessReply`, `accessPoll`, `settingPostCount`, `settingAutoLock`, `lastTopic_id`, `lastPost_id`, `lastUser_id`, `created`, `modified`) VALUES
	(1, 1, 0, 0, 'General Discussion', 'general-discussion', 'This is a forum category, which is a child of the forum. You can add, edit or delete these categories by visiting the administration panel, but first you would need to give a user admin rights.', 0, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '2012-06-19 19:39:46', '2012-06-19 19:39:46');
/*!40000 ALTER TABLE `forums_forum_categories` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forums_moderators
CREATE TABLE IF NOT EXISTS `forums_moderators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `forum_category_id` (`forum_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Moderators to forums';

-- Dumping data for table elearn_sma.forums_moderators: ~0 rows (approximately)
DELETE FROM `forums_moderators`;
/*!40000 ALTER TABLE `forums_moderators` DISABLE KEYS */;
/*!40000 ALTER TABLE `forums_moderators` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forums_polls
CREATE TABLE IF NOT EXISTS `forums_polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Polls attached to topics';

-- Dumping data for table elearn_sma.forums_polls: ~0 rows (approximately)
DELETE FROM `forums_polls`;
/*!40000 ALTER TABLE `forums_polls` DISABLE KEYS */;
/*!40000 ALTER TABLE `forums_polls` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forums_poll_options
CREATE TABLE IF NOT EXISTS `forums_poll_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) NOT NULL,
  `option` varchar(100) NOT NULL,
  `vote_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `poll_id` (`poll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Options/Questions for a poll';

-- Dumping data for table elearn_sma.forums_poll_options: ~0 rows (approximately)
DELETE FROM `forums_poll_options`;
/*!40000 ALTER TABLE `forums_poll_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `forums_poll_options` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forums_poll_votes
CREATE TABLE IF NOT EXISTS `forums_poll_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) NOT NULL,
  `poll_option_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `poll_id` (`poll_id`),
  KEY `poll_option_id` (`poll_option_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Votes for polls';

-- Dumping data for table elearn_sma.forums_poll_votes: ~0 rows (approximately)
DELETE FROM `forums_poll_votes`;
/*!40000 ALTER TABLE `forums_poll_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `forums_poll_votes` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forums_posts
CREATE TABLE IF NOT EXISTS `forums_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `userIP` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topic_id` (`topic_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Posts to topics';

-- Dumping data for table elearn_sma.forums_posts: ~0 rows (approximately)
DELETE FROM `forums_posts`;
/*!40000 ALTER TABLE `forums_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `forums_posts` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forums_reported
CREATE TABLE IF NOT EXISTS `forums_reported` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `itemType` varchar(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Reported topics, posts, users, etc';

-- Dumping data for table elearn_sma.forums_reported: ~0 rows (approximately)
DELETE FROM `forums_reported`;
/*!40000 ALTER TABLE `forums_reported` DISABLE KEYS */;
/*!40000 ALTER TABLE `forums_reported` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forums_topics
CREATE TABLE IF NOT EXISTS `forums_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(110) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `type` smallint(6) NOT NULL DEFAULT '0',
  `post_count` int(11) NOT NULL DEFAULT '0',
  `view_count` int(11) NOT NULL DEFAULT '0',
  `firstPost_id` int(11) NOT NULL,
  `lastPost_id` int(11) NOT NULL,
  `lastUser_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `firstPost_id` (`firstPost_id`),
  KEY `lastPost_id` (`lastPost_id`),
  KEY `lastUser_id` (`lastUser_id`),
  KEY `forum_category_id` (`forum_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Discussion topics';

-- Dumping data for table elearn_sma.forums_topics: ~0 rows (approximately)
DELETE FROM `forums_topics`;
/*!40000 ALTER TABLE `forums_topics` DISABLE KEYS */;
/*!40000 ALTER TABLE `forums_topics` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forum_access
CREATE TABLE IF NOT EXISTS `forum_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_level_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `access_level_id` (`access_level_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Users with certain access';

-- Dumping data for table elearn_sma.forum_access: ~1 rows (approximately)
DELETE FROM `forum_access`;
/*!40000 ALTER TABLE `forum_access` DISABLE KEYS */;
INSERT INTO `forum_access` (`id`, `access_level_id`, `user_id`, `created`) VALUES
	(1, 4, 1, '2010-06-15 01:08:20');
/*!40000 ALTER TABLE `forum_access` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forum_access_levels
CREATE TABLE IF NOT EXISTS `forum_access_levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `level` int(11) NOT NULL,
  `is_admin` smallint(6) NOT NULL DEFAULT '0',
  `is_super` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Access levels for users';

-- Dumping data for table elearn_sma.forum_access_levels: ~4 rows (approximately)
DELETE FROM `forum_access_levels`;
/*!40000 ALTER TABLE `forum_access_levels` DISABLE KEYS */;
INSERT INTO `forum_access_levels` (`id`, `title`, `level`, `is_admin`, `is_super`) VALUES
	(1, 'Member', 1, 0, 0),
	(2, 'Moderator', 4, 0, 0),
	(3, 'Super Moderator', 7, 0, 1),
	(4, 'Administrator', 10, 1, 1);
/*!40000 ALTER TABLE `forum_access_levels` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forum_forums
CREATE TABLE IF NOT EXISTS `forum_forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_level_id` smallint(6) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `orderNo` smallint(6) NOT NULL DEFAULT '0',
  `accessView` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `access_level_id` (`access_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Containing forums';

-- Dumping data for table elearn_sma.forum_forums: ~1 rows (approximately)
DELETE FROM `forum_forums`;
/*!40000 ALTER TABLE `forum_forums` DISABLE KEYS */;
INSERT INTO `forum_forums` (`id`, `access_level_id`, `title`, `slug`, `status`, `orderNo`, `accessView`) VALUES
	(1, 0, 'Forum Sekolah', 'cupcake-forums', 0, 1, 0);
/*!40000 ALTER TABLE `forum_forums` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forum_forum_categories
CREATE TABLE IF NOT EXISTS `forum_forum_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `access_level_id` smallint(6) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `orderNo` smallint(6) NOT NULL DEFAULT '0',
  `topic_count` int(11) NOT NULL DEFAULT '0',
  `post_count` int(11) NOT NULL DEFAULT '0',
  `accessRead` smallint(6) NOT NULL DEFAULT '0',
  `accessPost` smallint(6) NOT NULL DEFAULT '1',
  `accessReply` smallint(6) NOT NULL DEFAULT '1',
  `accessPoll` smallint(6) NOT NULL DEFAULT '1',
  `settingPostCount` smallint(6) NOT NULL DEFAULT '1',
  `settingAutoLock` smallint(6) NOT NULL DEFAULT '1',
  `lastTopic_id` int(11) NOT NULL DEFAULT '0',
  `lastPost_id` int(11) NOT NULL DEFAULT '0',
  `lastUser_id` int(11) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lastTopic_id` (`lastTopic_id`),
  KEY `lastPost_id` (`lastPost_id`),
  KEY `lastUser_id` (`lastUser_id`),
  KEY `forum_id` (`forum_id`),
  KEY `parent_id` (`parent_id`),
  KEY `access_level_id` (`access_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Forum categories to post topics to';

-- Dumping data for table elearn_sma.forum_forum_categories: ~3 rows (approximately)
DELETE FROM `forum_forum_categories`;
/*!40000 ALTER TABLE `forum_forum_categories` DISABLE KEYS */;
INSERT INTO `forum_forum_categories` (`id`, `forum_id`, `parent_id`, `access_level_id`, `title`, `slug`, `description`, `status`, `orderNo`, `topic_count`, `post_count`, `accessRead`, `accessPost`, `accessReply`, `accessPoll`, `settingPostCount`, `settingAutoLock`, `lastTopic_id`, `lastPost_id`, `lastUser_id`, `created`, `modified`) VALUES
	(1, 1, 0, 0, 'Forum Umum', 'general-discussion', 'Forum Umum', 0, 1, 1, 6, 0, 1, 1, 1, 0, 0, 1, 6, 16, '2010-06-15 01:05:36', '2012-09-06 14:28:57'),
	(2, 1, 0, 0, 'Antar PTK', 'antar-ptk', 'Antar PTK Forum', 0, 2, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, '2012-08-09 03:03:10', '2012-08-09 03:04:07'),
	(3, 1, 0, 0, 'Antar Siswa', 'antar-siswa', 'Antar Siswa', 0, 3, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, '2012-08-09 03:03:56', '2012-08-09 03:03:56');
/*!40000 ALTER TABLE `forum_forum_categories` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forum_moderators
CREATE TABLE IF NOT EXISTS `forum_moderators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `forum_category_id` (`forum_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Moderators to forums';

-- Dumping data for table elearn_sma.forum_moderators: ~0 rows (approximately)
DELETE FROM `forum_moderators`;
/*!40000 ALTER TABLE `forum_moderators` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_moderators` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forum_polls
CREATE TABLE IF NOT EXISTS `forum_polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Polls attached to topics';

-- Dumping data for table elearn_sma.forum_polls: ~0 rows (approximately)
DELETE FROM `forum_polls`;
/*!40000 ALTER TABLE `forum_polls` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_polls` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forum_poll_options
CREATE TABLE IF NOT EXISTS `forum_poll_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) NOT NULL,
  `option` varchar(100) NOT NULL,
  `vote_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `poll_id` (`poll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Options/Questions for a poll';

-- Dumping data for table elearn_sma.forum_poll_options: ~0 rows (approximately)
DELETE FROM `forum_poll_options`;
/*!40000 ALTER TABLE `forum_poll_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_poll_options` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forum_poll_votes
CREATE TABLE IF NOT EXISTS `forum_poll_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) NOT NULL,
  `poll_option_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `poll_id` (`poll_id`),
  KEY `poll_option_id` (`poll_option_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Votes for polls';

-- Dumping data for table elearn_sma.forum_poll_votes: ~0 rows (approximately)
DELETE FROM `forum_poll_votes`;
/*!40000 ALTER TABLE `forum_poll_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_poll_votes` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forum_posts
CREATE TABLE IF NOT EXISTS `forum_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `userIP` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topic_id` (`topic_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Posts to topics';

-- Dumping data for table elearn_sma.forum_posts: ~6 rows (approximately)
DELETE FROM `forum_posts`;
/*!40000 ALTER TABLE `forum_posts` DISABLE KEYS */;
INSERT INTO `forum_posts` (`id`, `topic_id`, `user_id`, `userIP`, `content`, `created`, `modified`) VALUES
	(1, 1, 1, '::1', 'Testing content fo topic one', '2010-06-15 01:27:58', '2010-06-15 01:27:58'),
	(2, 1, 1, '::1', 'Dibalas Dengan Cepat', '2010-06-25 04:48:11', '2010-06-25 04:48:11'),
	(3, 1, 1, '127.0.0.1', 'Testing', '2011-09-09 14:02:05', '2011-09-09 14:02:05'),
	(4, 1, 1, '127.0.0.1', '[quote="admin" date="2010-06-15 01:27:58"]Testing content fo topic one[/quote]\r\nsdfjkhsdjfhhsdfks', '2012-08-13 22:00:30', '2012-08-13 22:00:30'),
	(5, 1, 1, '127.0.0.1', '[quote="admin" date="2011-09-09 14:02:05"]Testing[/quote]\r\nisi baru', '2012-08-13 22:02:59', '2012-08-13 22:02:59'),
	(6, 1, 16, '::1', 'Ini taufiq', '2012-09-06 14:28:56', '2012-09-06 14:28:56');
/*!40000 ALTER TABLE `forum_posts` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forum_reported
CREATE TABLE IF NOT EXISTS `forum_reported` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `itemType` varchar(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Reported topics, posts, users, etc';

-- Dumping data for table elearn_sma.forum_reported: ~0 rows (approximately)
DELETE FROM `forum_reported`;
/*!40000 ALTER TABLE `forum_reported` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_reported` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.forum_topics
CREATE TABLE IF NOT EXISTS `forum_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(110) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `type` smallint(6) NOT NULL DEFAULT '0',
  `post_count` int(11) NOT NULL DEFAULT '0',
  `view_count` int(11) NOT NULL DEFAULT '0',
  `firstPost_id` int(11) NOT NULL,
  `lastPost_id` int(11) NOT NULL,
  `lastUser_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `firstPost_id` (`firstPost_id`),
  KEY `lastPost_id` (`lastPost_id`),
  KEY `lastUser_id` (`lastUser_id`),
  KEY `forum_category_id` (`forum_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Discussion topics';

-- Dumping data for table elearn_sma.forum_topics: ~1 rows (approximately)
DELETE FROM `forum_topics`;
/*!40000 ALTER TABLE `forum_topics` DISABLE KEYS */;
INSERT INTO `forum_topics` (`id`, `forum_category_id`, `user_id`, `title`, `slug`, `status`, `type`, `post_count`, `view_count`, `firstPost_id`, `lastPost_id`, `lastUser_id`, `created`, `modified`) VALUES
	(1, 1, 1, 'Test Topic 1', 'test-topic-1', 0, 0, 6, 73, 1, 6, 16, '2010-06-15 01:27:58', '2012-09-06 14:28:56');
/*!40000 ALTER TABLE `forum_topics` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.grades
CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.grades: 4 rows
DELETE FROM `grades`;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;
INSERT INTO `grades` (`id`, `name`, `keterangan`, `created`, `modified`) VALUES
	(10, '10', 'KELAS 10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(11, '11', 'KELAS 11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(12, '12', 'KELAS 12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(13, 'Umum', 'Umum', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `grades` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.groups: 3 rows
DELETE FROM `groups`;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
	(1, 'Admin', '2010-11-18 15:51:13', '2010-11-18 15:51:13'),
	(2, 'Guru', '2010-11-18 15:51:21', '2010-11-18 15:51:21'),
	(3, 'Siswa', '2010-11-18 15:51:28', '2010-11-18 15:51:28');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.indos
CREATE TABLE IF NOT EXISTS `indos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `words` varchar(200) NOT NULL,
  `details` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.indos: 20 rows
DELETE FROM `indos`;
/*!40000 ALTER TABLE `indos` DISABLE KEYS */;
INSERT INTO `indos` (`id`, `words`, `details`, `created`, `modified`) VALUES
	(3, 'kamus', NULL, '2010-12-10 08:33:36', '2010-12-10 08:33:36'),
	(4, 'buku besar', NULL, '2010-12-10 08:33:37', '2010-12-24 23:50:48'),
	(5, 'kamus', NULL, '2010-12-10 08:34:56', '2010-12-10 08:34:56'),
	(6, 'buku besar', NULL, '2010-12-10 08:34:57', '2010-12-10 08:34:57'),
	(7, 'kacang', NULL, '2010-12-10 08:38:38', '2010-12-10 08:38:38'),
	(8, 'kedelai', NULL, '2010-12-10 08:38:38', '2010-12-10 08:38:38'),
	(9, 'anu', NULL, '2010-12-10 08:44:03', '2010-12-10 08:44:03'),
	(10, 'sampo', NULL, '2010-12-10 09:17:00', '2010-12-10 09:17:00'),
	(11, 'keren', '', '2010-12-10 09:18:23', '2010-12-13 21:42:57'),
	(12, 'cool', NULL, '2010-12-10 09:18:23', '2010-12-10 09:18:23'),
	(13, 'ganteng', NULL, '2010-12-10 09:18:23', '2010-12-10 09:18:23'),
	(14, 'comma', NULL, '2010-12-13 21:16:12', '2010-12-13 21:16:12'),
	(15, 'pulpen', NULL, '2010-12-14 04:02:30', '2010-12-14 04:02:30'),
	(16, 'cinta', NULL, '2010-12-14 04:05:35', '2010-12-14 04:41:16'),
	(17, 'kasih', NULL, '2010-12-14 04:05:35', '2010-12-14 04:05:35'),
	(18, 'sayang', NULL, '2010-12-14 04:05:35', '2010-12-14 04:34:39'),
	(19, 'Dimana', NULL, '2010-12-14 04:42:43', '2010-12-14 04:42:43'),
	(20, 'buku', NULL, '2010-12-24 23:49:00', '2010-12-24 23:49:00'),
	(21, 'meja', NULL, '2010-12-25 02:49:46', '2010-12-25 02:49:46'),
	(22, 'mejo', NULL, '2011-08-29 03:04:26', '2011-08-29 03:04:26');
/*!40000 ALTER TABLE `indos` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.kelas
CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `grade_id` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.kelas: 2 rows
DELETE FROM `kelas`;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` (`id`, `name`, `grade_id`, `keterangan`, `created`, `modified`) VALUES
	(1, 'KELAS 10 A', '10', 'kelas 10 A', '2014-11-26 18:10:03', '2014-11-26 18:10:07'),
	(2, 'KELAS 10 B', '10', 'Kelas 10 B', '2014-11-26 18:24:13', '2014-11-26 18:24:13');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.labs
CREATE TABLE IF NOT EXISTS `labs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` int(11) DEFAULT NULL,
  `matapelajaran` int(11) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `penerbit` varchar(200) DEFAULT NULL,
  `pengarang` varchar(200) DEFAULT NULL,
  `produksi` varchar(200) DEFAULT NULL,
  `sutradara` varchar(200) DEFAULT NULL,
  `jumlahhalaman` int(10) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `details` text,
  `cover` varchar(300) DEFAULT NULL,
  `type` smallint(1) DEFAULT NULL,
  `labtype` smallint(2) DEFAULT NULL,
  `isflip` smallint(1) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `pdffile` varchar(255) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `mimetype` varchar(255) DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8138 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.labs: 247 rows
DELETE FROM `labs`;
/*!40000 ALTER TABLE `labs` DISABLE KEYS */;
INSERT INTO `labs` (`id`, `kelas`, `matapelajaran`, `author`, `title`, `penerbit`, `pengarang`, `produksi`, `sutradara`, `jumlahhalaman`, `tahun`, `details`, `cover`, `type`, `labtype`, `isflip`, `file`, `pdffile`, `dir`, `mimetype`, `filesize`, `created`, `modified`) VALUES
	(5020, 0, 0, 0, 'Di atas sajadah Cinta habib', '', '', NULL, NULL, 300, '2014', 'Di atas sajadah Cinta habib', 'files/ebooks/5020/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5020/pdf/DiatassajadahCinta_habib.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5019, 0, 0, 0, 'self hypnosis', '', '', NULL, NULL, 300, '2014', '7 Days to Profitable Blogging', 'files/ebooks/5019/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5019/pdf/self_hypnosis.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5016, 0, 0, 0, 'zen membebaskan pikiran', '', '', NULL, NULL, 300, '2014', 'zen membebaskan pikiran', 'files/ebooks/5016/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5016/pdf/zen_membebaskan_pikiran.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5018, 0, 0, 0, 'Cantik Natural', '', '', NULL, NULL, 300, '2014', 'Cantik Natural', 'files/ebooks/5018/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5018/pdf/Cantik-Natural.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5015, 0, 0, 0, 'Wealth Strategy ala Kiyosaki', '', '', NULL, NULL, 300, '2014', 'Wealth Strategy ala Kiyosaki', 'files/ebooks/5015/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5015/pdf/Wealth_Strategy_ala_Kiyosaki.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5014, 0, 0, 0, 'Mindset Sukses Bebas Finansial Jennie S Bev', '', '', NULL, NULL, 300, '2014', 'Mindset Sukses Bebas Finansial Jennie S Bev', 'files/ebooks/5014/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5014/pdf/MindsetSukses_BebasFinansial_JennieSBev.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5012, 0, 0, 0, 'Membuat Keramik itu Mudah', '', '', NULL, NULL, 300, '2014', 'Membuat Keramik itu Mudah', 'files/ebooks/5012/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5012/pdf/Membuat_Keramik_itu_Mudah.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5013, 0, 0, 0, 'MenjadiWebmasterDalam30Hari', '', '', NULL, NULL, 300, '2014', 'Menginstalasi Perangkat Jaringan Lokal (LAN)', 'files/ebooks/5013/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5013/pdf/MenjadiWebmasterDalam30Hari.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5009, 0, 0, 0, 'Mastering Kode HTML', '', '', NULL, NULL, 300, '2014', 'Mastering_Kode_HTMl\r\n', 'files/ebooks/5009/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5009/pdf/Mastering_Kode_HTMl.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5010, 0, 0, 0, 'Melukis Digital Dengan Adobe Photoshop 7', '', '', NULL, NULL, 300, '2014', 'Melukis_Digital_Dengan_Adobe_Photoshop_7', 'files/ebooks/5010/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5010/pdf/Melukis_Digital_Dengan_Adobe_Photoshop_7.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5011, 0, 0, 0, 'memandang dunia', '', '', NULL, NULL, 300, '2014', 'memandang dunia', 'files/ebooks/5011/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5011/pdf/memandang_dunia.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5008, 0, 0, 0, 'Garam', '', '', NULL, NULL, 300, '2014', 'Garam', 'files/ebooks/5008/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5008/pdf/Garam.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5007, 0, 0, 0, 'ebook managing people strategy', '', '', NULL, NULL, 300, '2014', 'ebook managing people strategy', 'files/ebooks/5007/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5007/pdf/ebook_managing_people_strategy.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5006, 0, 0, 0, 'dasar dasar islam sayyid abu al ala al mawdudi', '', '', NULL, NULL, 300, '2014', 'dasar dasar islam sayyid abu al ala al mawdudi', 'files/ebooks/5006/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5006/pdf/dasar_dasar_islam_sayyid_abu_al_ala_al_mawdudi.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5005, 0, 0, 0, 'Cara membentuk anak kreatif', '', '', NULL, NULL, 300, '2014', 'Cara membentuk anak kreatif', 'files/ebooks/5005/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5005/pdf/Cara_membentuk_anak_kreatif.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5004, 0, 0, 0, 'Dialog Dengan Jin Muslim', '', '', NULL, NULL, 300, '2014', 'MenjadiWebmasterDalam30Hari', 'files/ebooks/5004/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5004/pdf/Dialog Dengan Jin Muslim.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5003, 0, 0, 0, 'CakePHP Application Development', '', '', NULL, NULL, 300, '2014', 'CakePHP Application Development', 'files/ebooks/5003/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5003/pdf/CakePHP.Application.Development.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(5001, 0, 0, 0, 'Awaken the Giant Within Indonesia', '', '', NULL, NULL, 300, '2014', 'CakePHP', 'files/ebooks/5001/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/5001/pdf/Awaken-the-Giant-Within-Indonesia-.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4018, 0, 0, 0, 'Sebelas Patriot', '', '', NULL, NULL, 300, '2014', 'Sebelas Patriot', 'files/ebooks/4018/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4018/pdf/sebelas-patriot.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4019, 0, 0, 0, 'Siti Nurbaya', '', '', NULL, NULL, 300, '2014', 'Siti Nurbaya', 'files/ebooks/4019/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4019/pdf/Siti Nurbaya - Marah Rusli.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4016, 0, 0, 0, 'Rubuhnya Surau Kami', '', '', NULL, NULL, 300, '2014', 'Rubuhnya Surau Kami', 'files/ebooks/4016/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4016/pdf/Rubuhnya Surau Kami (Kumpulan Cerpen).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4015, 0, 0, 0, 'Misteri Kain Kafan Jesus', '', '', NULL, NULL, 300, '2014', 'Misteri Kain Kafan Jesus', 'files/ebooks/4015/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4015/pdf/Misteri Kain Kafan Jesus - Julia Navarro.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4014, 0, 0, 0, 'Malaikat Keadilan', '', '', NULL, NULL, 300, '2014', 'Malaikat Keadilan', 'files/ebooks/4014/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4014/pdf/Malaikat Keadilan - Sidney Sheldon.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4008, 0, 0, 0, 'Harry potter 4', 'kementrian pendidikan dan kebudayaan', 'kementrian pendidikan dan kebudayaan', NULL, NULL, 300, '2014', 'Harry Potter 4', 'files/ebooks/4008/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4008/pdf/HP_04. Harry Potter and the Goblet of Fire_ID.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4009, 0, 0, 0, 'Harry potter 5', 'kementrian pendidikan dan kebudayaan', 'kementrian pendidikan dan kebudayaan', NULL, NULL, 300, '2014', 'Harry Potter 5', 'files/ebooks/4009/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4009/pdf/HP_05. Harry Potter and the Order of the Phoenix_ID.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4010, 0, 0, 0, 'Harry potter 6', 'kementrian pendidikan dan kebudayaan', 'kementrian pendidikan dan kebudayaan', NULL, NULL, 300, '2014', 'Harry Potter 6', 'files/ebooks/4010/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4010/pdf/HP_06. Harry Potter and the Half-Blood Prince_ID.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4011, 0, 0, 0, 'Jaka & Dara', '', '', NULL, NULL, 300, '2014', 'Jaka & Dara', 'files/ebooks/4011/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4011/pdf/Jaka & Dara.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4012, 0, 0, 0, 'HP_05. Harry Potter and the Order of the Phoenix_ID.pdf', '', '', NULL, NULL, 300, '2014', 'Jaka Dan Dara', 'files/ebooks/4012/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4012/pdf/Jaka & Dara.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4013, 0, 0, 0, 'Sang Pujangga Lengkap', '', '', NULL, NULL, 300, '2014', 'Sang Pujangga Lengkap', 'files/ebooks/4013/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4013/pdf/Kahlil_Gibran_-_Sang_Pujaanlengkap.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4007, 0, 0, 0, 'Harry potter 3', 'kementrian pendidikan dan kebudayaan', 'kementrian pendidikan dan kebudayaan', NULL, NULL, 300, '2014', 'Harry Potter 3', 'files/ebooks/4007/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4007/pdf/HP_03. Harry Potter and the Prisoner of Azkaban_ID.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4006, 0, 0, 0, 'Harry potter 2', 'kementrian pendidikan dan kebudayaan', 'kementrian pendidikan dan kebudayaan', NULL, NULL, 300, '2014', 'Harimau - Harimau', 'files/ebooks/4006/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4006/pdf/HP_02. Harry Potter and the Chamber of Secrets_ID.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4005, 0, 0, 0, 'Harry potter 1', 'kementrian pendidikan dan kebudayaan', 'kementrian pendidikan dan kebudayaan', NULL, NULL, 300, '2014', 'Harry potter 1', 'files/ebooks/4005/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4005/pdf/HP_01. Harry Potter dan Batu Bertuah - J.K. Rowling.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4004, 0, 0, 0, 'Harimau - Harimau', 'kementrian pendidikan dan kebudayaan', 'kementrian pendidikan dan kebudayaan', NULL, NULL, 300, '2014', 'Harimau - Harimau', 'files/ebooks/4004/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4004/pdf/Harimau-harimau - Mochtar Lubis.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4002, 0, 0, 0, 'Bekirsar Merah', 'kementrian pendidikan dan kebudayaan', 'kementrian pendidikan dan kebudayaan', NULL, NULL, 300, '2014', 'Bekirsar Merah', 'files/ebooks/4002/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4002/pdf/Ahmad Tohari - Bekisar Merah - Ahmad Tohari.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4003, 0, 0, 0, 'Gadis Cilik', 'kementrian pendidikan dan kebudayaan', 'kementrian pendidikan dan kebudayaan', NULL, NULL, 300, '2014', 'Gadis Cilik', 'files/ebooks/4003/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4003/pdf/Gadiscilik.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(4001, 0, 0, 0, 'Abu Nawas Sang Penggeli Hati', 'kementrian pendidikan dan kebudayaan', 'kementrian pendidikan dan kebudayaan', NULL, NULL, 300, '2014', 'Abu Nawas Sang Penggeli Hati', 'files/ebooks/4001/pageflipdata/pages/cover.jpg', 4, 1, 1, '', 'files/ebooks/4001/pdf/Abu Nawas Sang Penggeli Hati - MB. Rahimsyah.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(153, 0, 0, 0, 'pembentukan karakter taqwa ', '', '', 'arie', 'arie', 0, '2007', 'cahaya akbar', 'img/pembentukan_karakter_taqwa_(Low)_COVER.jpg', 15, 2, 0, 'pembentukan_karakter_taqwa_Low.flv', '', 'files\\labs', 'application/octet-stream', 17569237, '2014-04-13', '2014-04-13'),
	(154, 0, 0, 0, 'perenungan dan motivasi', '', '', 'khayla', 'arie', 0, '0000', 'cahaya akbar', 'img/2014-04-13-052629perenungan_dan_motivasi_COVER.jpg', 15, 2, 0, 'perenungan_dan_motivasi.FLV', '', 'files\\labs', 'application/octet-stream', 18127704, '2014-04-13', '2014-04-13'),
	(155, 0, 0, 0, 'KESADARAN DIRI', '', '', 'arie', 'arie', 0, '2007', 'khayla', 'img/KESADARAN_DIRI_COVER.jpg', 15, 2, 0, 'KESADARAN_DIRI.mp4', '', 'files\\labs', 'video/mp4', 4268483, '2014-04-13', '2014-04-13'),
	(8001, 0, 0, 0, 'menentukan-isi-petunjuk-kerja-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-isi-petunjuk-kerja-bagian-2', 'img/smapetunjuk.png', 43, 2, 0, 'menentukan-isi-petunjuk-kerja-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8002, 0, 0, 0, 'menentukan-isi-petunjuk-kerja-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-isi-petunjuk-kerja-bagian-3', 'img/smapetunjuk.png', 43, 2, 0, 'menentukan-isi-petunjuk-kerja-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8003, 0, 0, 0, 'menentukan-isi-petunjuk-kerja-bagian-4', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-isi-petunjuk-kerja-bagian-4', 'img/smapetunjuk.png', 43, 2, 0, 'menentukan-isi-petunjuk-kerja-bagian-4.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8004, 0, 0, 0, 'menentukan-jenis-karangan-dan-pengembangan-karangan-seg1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-jenis-karangan-dan-pengembangan-karangan-seg1', 'img/smajeniskarangan.png', 43, 2, 0, 'menentukan-jenis-karangan-dan-pengembangan-karangan-seg1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8005, 0, 0, 0, 'menentukan-jenis-karangan-dan-pengembangan-karangan-seg2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-jenis-karangan-dan-pengembangan-karangan-seg2', 'img/smajeniskarangan.png', 43, 2, 0, 'menentukan-jenis-karangan-dan-pengembangan-karangan-seg2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8006, 0, 0, 0, 'menentukan-jenis-karangan-dan-pengembangan-karangan-seg3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-jenis-karangan-dan-pengembangan-karangan-seg3', 'img/smajeniskarangan.png', 43, 2, 0, 'menentukan-jenis-karangan-dan-pengembangan-karangan-seg3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8007, 0, 0, 0, 'menentukan-kalimat-efektif-penjelas-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-kalimat-efektif-penjelas-bagian-1', 'img/smakalimatefektif.png', 43, 2, 0, 'menentukan-kalimat-efektif-penjelas-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8008, 0, 0, 0, 'menentukan-kalimat-efektif-penjelas-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-kalimat-efektif-penjelas-bagian-2', 'img/smakalimatefektif.png', 43, 2, 0, 'menentukan-kalimat-efektif-penjelas-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8009, 0, 0, 0, 'menentukan-kalimat-efektif-penjelas-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-kalimat-efektif-penjelas-bagian-3', 'img/smakalimatefektif.png', 43, 2, 0, 'menentukan-kalimat-efektif-penjelas-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8013, 0, 0, 0, 'menentukan-kalimat-kritikesai-dan-resensi-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-kalimat-kritikesai-dan-resensi-bagian-1', 'img/smakritik.png', 43, 2, 0, 'menentukan-kalimat-kritikesai-dan-resensi-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8014, 0, 0, 0, 'menentukan-kalimat-kritikesai-dan-resensi-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-kalimat-kritikesai-dan-resensi-bagian-2', 'img/smakritik.png', 43, 2, 0, 'menentukan-kalimat-kritikesai-dan-resensi-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8015, 0, 0, 0, 'menentukan-kalimat-kritikesai-dan-resensi-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-kalimat-kritikesai-dan-resensi-bagian-3', 'img/smakritik.png', 43, 2, 0, 'menentukan-kalimat-kritikesai-dan-resensi-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8016, 0, 0, 0, 'menentukan-kalimat-kritikesai-dan-resensi-bagian-4', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menentukan-kalimat-kritikesai-dan-resensi-bagian-4', 'img/smakritik.png', 43, 2, 0, 'menentukan-kalimat-kritikesai-dan-resensi-bagian-4.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8017, 0, 0, 0, 'paragraf-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'paragraf-bagian-1', 'img/smaparagraf.png', 43, 2, 0, 'paragraf-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8018, 0, 0, 0, 'paragraf-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'paragraf-bagian-2', 'img/smaparagraf.png', 43, 2, 0, 'paragraf-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8019, 0, 0, 0, 'paragraf-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'paragraf-bagian-3', 'img/smaparagraf.png', 43, 2, 0, 'paragraf-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8020, 0, 0, 0, 'paragraf-bagian-4', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'paragraf-bagian-4', 'img/smaparagraf.png', 43, 2, 0, 'paragraf-bagian-4.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8025, 0, 0, 0, 'giving-advice-_you-should-take-a-rest_-seg1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'giving-advice-_you-should-take-a-rest_-seg1', 'img/smaadvice.png', 43, 2, 0, 'giving-advice-_you-should-take-a-rest_-seg1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8026, 0, 0, 0, 'giving-advice-_you-should-take-a-rest_-seg2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'giving-advice-_you-should-take-a-rest_-seg2', 'img/smaadvice.png', 43, 2, 0, 'giving-advice-_you-should-take-a-rest_-seg2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8027, 0, 0, 0, 'giving-advice-_you-should-take-a-rest_-seg3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'giving-advice-_you-should-take-a-rest_-seg3', 'img/smaadvice.png', 43, 2, 0, 'giving-advice-_you-should-take-a-rest_-seg3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8028, 0, 0, 0, 'the-word-means-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'the-word-means-bagian-1', 'img/smawords.png', 43, 2, 0, 'the-word-means-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8029, 0, 0, 0, 'the-word-means-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'the-word-means-bagian-2', 'img/smawords.png', 43, 2, 0, 'the-word-means-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8030, 0, 0, 0, 'the-word-means-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'the-word-means-bagian-3', 'img/smawords.png', 43, 2, 0, 'the-word-means-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8031, 0, 0, 0, 'whould-you-like-to-have-dinner-seg1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'whould-you-like-to-have-dinner-seg1', 'img/smadinner.png', 43, 2, 0, 'whould-you-like-to-have-dinner-seg1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8032, 0, 0, 0, 'whould-you-like-to-have-dinner-seg2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'whould-you-like-to-have-dinner-seg2', 'img/smadinner.png', 43, 2, 0, 'whould-you-like-to-have-dinner-seg2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8033, 0, 0, 0, 'whould-you-like-to-have-dinner-seg3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'whould-you-like-to-have-dinner-seg3', 'img/smadinner.png', 43, 2, 0, 'whould-you-like-to-have-dinner-seg3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8041, 0, 0, 0, 'jaringan-tumbuhan-berdasarkan-struktur-sel-seg1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'jaringan-tumbuhan-berdasarkan-struktur-sel-seg1', 'img/smajaringantumbuhan.png', 43, 2, 0, 'jaringan-tumbuhan-berdasarkan-struktur-sel-seg1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8042, 0, 0, 0, 'jaringan-tumbuhan-berdasarkan-struktur-sel-seg2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'jaringan-tumbuhan-berdasarkan-struktur-sel-seg2', 'img/smajaringantumbuhan.png', 43, 2, 0, 'jaringan-tumbuhan-berdasarkan-struktur-sel-seg2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8043, 0, 0, 0, 'jaringan-tumbuhan-berdasarkan-struktur-sel-seg3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'jaringan-tumbuhan-berdasarkan-struktur-sel-seg3', 'img/smajaringantumbuhan.png', 43, 2, 0, 'jaringan-tumbuhan-berdasarkan-struktur-sel-seg3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8044, 0, 0, 0, 'mendiskripsikan-sistem-peredaran-darah-manusia-seg1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'mendiskripsikan-sistem-peredaran-darah-manusia-seg1', 'img/smaperedarandarah.png', 43, 2, 0, 'mendiskripsikan-sistem-peredaran-darah-manusia-seg1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8045, 0, 0, 0, 'mendiskripsikan-sistem-peredaran-darah-manusia-seg2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'mendiskripsikan-sistem-peredaran-darah-manusia-seg2', 'img/smaperedarandarah.png', 43, 2, 0, 'mendiskripsikan-sistem-peredaran-darah-manusia-seg2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8046, 0, 0, 0, 'mendiskripsikan-sistem-peredaran-darah-manusia-seg3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'mendiskripsikan-sistem-peredaran-darah-manusia-seg3', 'img/smaperedarandarah.png', 43, 2, 0, 'mendiskripsikan-sistem-peredaran-darah-manusia-seg3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8047, 0, 0, 0, 'mengidentifikasi-struktur-dan-fungsi-organel-sel-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'mengidentifikasi-struktur-dan-fungsi-organel-sel-bagian-1', 'img/smasel.png', 43, 2, 0, 'mengidentifikasi-struktur-dan-fungsi-organel-sel-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8048, 0, 0, 0, 'mengidentifikasi-struktur-dan-fungsi-organel-sel-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'mengidentifikasi-struktur-dan-fungsi-organel-sel-bagian-2', 'img/smasel.png', 43, 2, 0, 'mengidentifikasi-struktur-dan-fungsi-organel-sel-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8049, 0, 0, 0, 'mengidentifikasi-struktur-dan-fungsi-organel-sel-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'mengidentifikasi-struktur-dan-fungsi-organel-sel-bagian-3', 'img/smasel.png', 43, 2, 0, 'mengidentifikasi-struktur-dan-fungsi-organel-sel-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8050, 0, 0, 0, 'mengidentifikasi-struktur-dan-fungsi-organel-sel-bagian-4', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'mengidentifikasi-struktur-dan-fungsi-organel-sel-bagian-4', 'img/smasel.png', 43, 2, 0, 'mengidentifikasi-struktur-dan-fungsi-organel-sel-bagian-4.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8051, 0, 0, 0, 'metabolisme-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'metabolisme-bagian-1', 'img/smametabolisme.png', 43, 2, 0, 'metabolisme-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8052, 0, 0, 0, 'metabolisme-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'metabolisme-bagian-2', 'img/smametabolisme.png', 43, 2, 0, 'metabolisme-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8053, 0, 0, 0, 'metabolisme-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'metabolisme-bagian-3', 'img/smametabolisme.png', 43, 2, 0, 'metabolisme-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8054, 0, 0, 0, 'metabolisme-bagian-4', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'metabolisme-bagian-4', 'img/smametabolisme.png', 43, 2, 0, 'metabolisme-bagian-4.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8055, 0, 0, 0, 'sintesis-protein-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'sintesis-protein-bagian-1', 'img/smaprotein.png', 43, 2, 0, 'sintesis-protein-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8056, 0, 0, 0, 'sintesis-protein-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'sintesis-protein-bagian-2', 'img/smaprotein.png', 43, 2, 0, 'sintesis-protein-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8057, 0, 0, 0, 'sintesis-protein-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'sintesis-protein-bagian-3', 'img/smaprotein.png', 43, 2, 0, 'sintesis-protein-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8058, 0, 0, 0, 'unggul-dengan-bioteknologi-seg-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'unggul-dengan-bioteknologi-seg-1', 'img/smabiotek.png', 43, 2, 0, 'unggul-dengan-bioteknologi-seg-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8059, 0, 0, 0, 'unggul-dengan-bioteknologi-seg-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'unggul-dengan-bioteknologi-seg-2', 'img/smabiotek.png', 43, 2, 0, 'unggul-dengan-bioteknologi-seg-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8060, 0, 0, 0, 'unggul-dengan-bioteknologi-seg-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'unggul-dengan-bioteknologi-seg-3', 'img/smabiotek.png', 43, 2, 0, 'unggul-dengan-bioteknologi-seg-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(152, 0, 0, 0, 'Motivasi dan Inspirasi', '', '', 'arie', 'arie', 0, '2008', 'cahaya akbar', 'img/Motivasi_dan_Inspirasi_COVER.jpg', 15, 2, 0, 'Motivasi_dan_Inspirasi.mp4', '', 'files\\labs', 'video/mp4', 7325432, '2014-04-13', '2014-04-13'),
	(149, 0, 0, 0, 'keruntuhan evolusi darwin ', '', '', 'arie', 'arie', 0, '2007', 'cahaya akbar', 'img/keruntuhan_evolusi_darwin_1_COVER.jpg', 13, 2, 0, 'keruntuhan_evolusi_darwin_1.mp4', '', 'files\\labs', 'video/mp4', 37028807, '2014-04-13', '2014-04-13'),
	(8063, 0, 0, 0, 'koperasi-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'koperasi-bagian-1', 'img/smakoperasi.png', 43, 2, 0, 'koperasi-bagian-1.flv', 'files/labs', '', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8064, 0, 0, 0, 'koperasi-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'koperasi-bagian-2', 'img/smakoperasi.png', 43, 2, 0, 'koperasi-bagian-2.flv', 'files/labs', '', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8065, 0, 0, 0, 'koperasi-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'koperasi-bagian-3', 'img/smakoperasi.png', 43, 2, 0, 'koperasi-bagian-3.flv', 'files/labs', '', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8066, 0, 0, 0, 'koperasi-bagian-4', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'koperasi-bagian-4', 'img/smakoperasi.png', 43, 2, 0, 'koperasi-bagian-4.flv', 'files/labs', '', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8067, 0, 0, 0, 'pendapatan-nasional-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'pendapatan-nasional-bagian-1', 'img/smapendpatannasional.png', 43, 2, 0, 'pendapatan-nasional-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8068, 0, 0, 0, 'pendapatan-nasional-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'pendapatan-nasional-bagian-2', 'img/smapendpatannasional.png', 43, 2, 0, 'pendapatan-nasional-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8069, 0, 0, 0, 'pendapatan-nasional-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'pendapatan-nasional-bagian-3', 'img/smapendpatannasional.png', 43, 2, 0, 'pendapatan-nasional-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8070, 0, 0, 0, 'perilaku-produsen-dan-konsumen-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'perilaku-produsen-dan-konsumen-bagian-1', 'img/smaperilakukonsumenprodusen.png', 43, 2, 0, 'perilaku-produsen-dan-konsumen-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8071, 0, 0, 0, 'perilaku-produsen-dan-konsumen-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'perilaku-produsen-dan-konsumen-bagian-2', 'img/smaperilakukonsumenprodusen.png', 43, 2, 0, 'perilaku-produsen-dan-konsumen-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8072, 0, 0, 0, 'perilaku-produsen-dan-konsumen-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'perilaku-produsen-dan-konsumen-bagian-3', 'img/smaperilakukonsumenprodusen.png', 43, 2, 0, 'perilaku-produsen-dan-konsumen-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8073, 0, 0, 0, 'perilaku-produsen-dan-konsumen-bagian-4', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'perilaku-produsen-dan-konsumen-bagian-4', 'img/smaperilakukonsumenprodusen.png', 43, 2, 0, 'perilaku-produsen-dan-konsumen-bagian-4.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(148, 0, 0, 0, 'Keindahan Molekul Air Zam-Zam', '', '', 'khayla', 'khayla', 0, '2009', 'cahaya akbar', 'img/Keindahan_Molekul_Air_Zam-Zam_COVER.jpg', 13, 2, 0, 'Keindahan_Molekul_Air_Zam_Zam.mp4', '', 'files\\labs', 'video/mp4', 4647137, '2014-04-13', '2014-04-13'),
	(147, 0, 0, 0, 'kehebatan Allah_saintifik lebah', '', '', 'arie', 'arie', 0, '2008', 'cahaya akbar', 'img/kehebatan_Allah_saintifik_lebah_COVER.jpg', 13, 2, 0, 'kehebatan_Allah_saintifik_lebah.mp4', '', 'files\\labs', 'video/mp4', 17556930, '2014-04-13', '2014-04-13'),
	(146, 0, 0, 0, 'Hakikat Penciptaan Manusia', '', '', 'khayla', 'arie', 0, '2009', 'cahaya akbar', 'img/Hakikat_Penciptaan_Manusia_COVER.jpg', 13, 2, 0, 'Hakikat_Penciptaan_Manusia.mp4', '', 'files\\labs', 'video/mp4', 27364002, '2014-04-13', '2014-04-13'),
	(145, 0, 0, 0, 'FAKTA PENCIPTAAN 1_4', '', '', 'arie', 'arie', 0, '2008', 'cahaya akbar', 'img/2014-04-13-040610FAKTA_PENCIPTAAN_1_4_COVER.jpg', 13, 2, 0, 'FAKTA_PENCIPTAAN_1_40.flv', '', 'files\\labs', 'application/octet-stream', 19683574, '2014-04-13', '2014-04-13'),
	(144, 0, 0, 0, 'NOKIA MASA DEPAN (NOKIA FUTURE VISION)', '', '', 'arie', 'arie', 0, '2008', 'cahaya akbar', 'img/NOKIA_MASA_DEPAN_(NOKIA_FUTURE_VISION)_COVER.jpg', 13, 2, 0, 'NOKIA_MASA_DEPAN_NOKIA_FUTURE_VISION.mp4', '', 'files\\labs', 'video/mp4', 12477632, '2014-04-13', '2014-04-13'),
	(138, 0, 0, 0, 'masuknya Jepang', '', '', 'arie', 'arie', 0, '2007', 'cahaya akbar', 'img/masuknya_Jepang_COVER.jpg', 12, 2, 0, 'masuknya_Jepang.WMV', '', 'files\\labs', 'video/x-ms-wmv', 29230841, '2014-04-13', '2014-04-13'),
	(132, 0, 0, 0, 'Kreasi Unik Kerajinan Daun Kelapa ', '', '', 'khayla', 'arie', 0, '2007', 'cahaya akbar', 'img/Kreasi_Unik_Kerajinan_Daun_Kelapa_(High)_COVER.jpg', 14, 2, 0, 'Kreasi_Unik_Kerajinan_Daun_Kelapa_High.flv', '', 'files\\labs', 'application/octet-stream', 22259038, '2014-04-13', '2014-04-13'),
	(131, 0, 0, 0, 'kerajinan tangan kreatif ', '', '', 'arie', 'khayla', 0, '2010', 'cahaya akbar', 'img/kerajinan_tangan_kreatif_(High)_COVER.jpg', 14, 2, 0, 'kerajinan_tangan_kreatif_High.flv', '', 'files\\labs', 'application/octet-stream', 30160593, '2014-04-13', '2014-04-13'),
	(130, 0, 0, 0, 'kerajinan tangan kotak pensil1', '', '', 'arie', 'arie', 0, '2008', 'cahaya akbar', 'img/kerajinan_tangan_kotak_pensil1.avi_(Low)_COVER.jpg', 14, 2, 0, 'kerajinan_tangan_kotak_pensil1_avi_Low.flv', '', 'files\\labs', 'application/octet-stream', 12570492, '2014-04-13', '2014-04-13'),
	(129, 0, 0, 0, 'kerajinan kaca pyrex', '', '', 'arie', 'arie', 0, '2007', 'cahaya akbar', 'img/kerajinan_kaca_pyrex_(Low)_COVER.jpg', 14, 2, 0, 'kerajinan_kaca_pyrex_Low.flv', '', 'files\\labs', 'application/octet-stream', 45790596, '2014-04-13', '2014-04-13'),
	(128, 0, 0, 0, 'Kerajinan Batok Kelapa ', '', '', 'arie', 'arie', 0, '2009', 'cahaya akbar', 'img/Kerajinan_Batok_Kelapa_(High)_COVER.jpg', 14, 2, 0, 'Kerajinan_Batok_Kelapa_High.flv', '', 'files\\labs', 'application/octet-stream', 41564293, '2014-04-13', '2014-04-13'),
	(127, 0, 0, 0, 'hiasan rumah kerajinan tangan (High) COVER', '', '', 'arie', 'arie', 0, '2007', 'cahaya akbar', 'img/hiasan_rumah_kerajinan_tangan_(High)_COVER.jpg', 14, 2, 0, 'hiasan_rumah_kerajinan_tangan_High.flv', '', 'files\\labs', 'application/octet-stream', 28184236, '2014-04-13', '2014-04-13'),
	(124, 0, 0, 0, 'Papuan Indeoendence', '', '', '', '', 0, '2011', '', 'img/Irian_Jaya_-_Fighting_for_W._Papuan_Independence_-Indonesia_COVER.jpg', 12, 2, 0, 'Irian_Jaya_Fighting_for_W_Papuan_Independence_Indonesia.avi', '', 'files\\labs', 'video/avi', 44126212, '2014-04-12', '2014-04-12'),
	(122, 0, 0, 0, 'Penciptaan 4', '', '', '', '', 0, '2011', '', 'img/FAKTA_PENCIPTAAN_4_4_COVER.jpg', 13, 2, 0, 'FAKTA_PENCIPTAAN_4_4.flv', '', 'files\\labs', 'application/octet-stream', 18172851, '2014-04-12', '2014-04-12'),
	(120, 0, 0, 0, 'Penciptaan 2', '', '', '', '', 0, '2011', '', 'img/FAKTA_PENCIPTAAN_2_4_COVER.jpg', 13, 2, 0, 'FAKTA_PENCIPTAAN_2_4.flv', '', 'files\\labs', 'application/octet-stream', 15176061, '2014-04-12', '2014-04-12'),
	(121, 0, 0, 0, 'Penciptaan 3', '', '', '', '', 0, '2011', '', 'img/FAKTA_PENCIPTAAN_3_4_COVER.jpg', 13, 2, 0, 'FAKTA_PENCIPTAAN_3_4.flv', '', 'files\\labs', 'application/octet-stream', 18065784, '2014-04-12', '2014-04-12'),
	(119, 0, 0, 0, 'Penciptaan 1', '', '', '', '', 0, '2011', '', 'img/FAKTA_PENCIPTAAN_1_4_COVER.jpg', 13, 2, 0, 'FAKTA_PENCIPTAAN_1_4.flv', '', 'files\\labs', 'application/octet-stream', 19683574, '2014-04-12', '2014-04-12'),
	(118, 0, 0, 0, 'Bosan Hidup Biasa Biasa Saja', '', '', '', '', 0, '2011', '', 'img/bosan_hidup_biasa_biasa_saja_COVER.jpg', 15, 2, 0, 'bosan_hidup_biasa_biasa_saja.FLV', '', 'files\\labs', 'application/octet-stream', 11029745, '2014-04-12', '2014-04-12'),
	(113, 0, 0, 0, 'Fakta Seputar Proklamasi', '', '', '', '', 0, '2011', '', 'img/Pakta_seputar_proklamasi_COVER.jpg', 12, 2, 0, 'Pakta_seputar_proklamasi.avi', '', 'files\\labs', 'video/avi', 14565064, '2014-04-11', '2014-04-11'),
	(112, 0, 0, 0, 'Drs. Muhammad Hatta', '', '', '', '', 0, '2011', '', 'img/Drs._Muhammad_Hatta_COVER.jpg', 12, 2, 0, 'Drs_Muhammad_Hatta.avi', '', 'files\\labs', 'video/avi', 8207208, '2014-04-11', '2014-04-11'),
	(111, 0, 0, 0, 'Candi - Candi di Jawa Tengah dan Jawa Timur', '', '', 'Youtube', '', 0, '2011', '', 'img/Candi-candi_di_Jawa_Tengah_dan_Jawa_Timur_-_YouTube_COVER.jpg', 12, 2, 0, 'Candi_candi_di_Jawa_Tengah_dan_Jawa_Timur_YouTube.mp4', '', 'files\\labs', 'video/mp4', 47626850, '2014-04-11', '2014-04-11'),
	(107, 0, 0, 0, 'Bahan kimia bagian 2', '', '', 'TV Edukasi', 'TV Edukasi', 0, '2011', 'Bahan kimia bagian 2', 'img/2014-05-09-192148kimia.png', 46, 2, 0, 'bahan_kimia_bagian_2.flv', '', 'files/labs', 'video/x-flv', 39198944, '2014-05-09', '2014-05-09'),
	(8098, 0, 0, 0, 'mendeskripsikan-wilayah-pewilayahan-di-dunia-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'mendeskripsikan-wilayah-pewilayahan-di-dunia-bagian-1', 'img/smawilayahdunia.png', 43, 2, 0, 'mendeskripsikan-wilayah-pewilayahan-di-dunia-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8099, 0, 0, 0, 'mendeskripsikan-wilayah-pewilayahan-di-dunia-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'mendeskripsikan-wilayah-pewilayahan-di-dunia-bagian-2', 'img/smawilayahdunia.png', 43, 2, 0, 'mendeskripsikan-wilayah-pewilayahan-di-dunia-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8100, 0, 0, 0, 'mendeskripsikan-wilayah-pewilayahan-di-dunia-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'mendeskripsikan-wilayah-pewilayahan-di-dunia-bagian-3', 'img/smawilayahdunia.png', 43, 2, 0, 'mendeskripsikan-wilayah-pewilayahan-di-dunia-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8101, 0, 0, 0, 'mendeskripsikan-wilayah-pewilayahan-di-dunia-bagian-4', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'mendeskripsikan-wilayah-pewilayahan-di-dunia-bagian-4', 'img/smawilayahdunia.png', 43, 2, 0, 'mendeskripsikan-wilayah-pewilayahan-di-dunia-bagian-4.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8102, 0, 0, 0, 'sumber-daya-alam-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'sumber-daya-alam-bagian-1', 'img/smasda.png', 43, 2, 0, 'sumber-daya-alam-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8103, 0, 0, 0, 'sumber-daya-alam-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'sumber-daya-alam-bagian-2', 'img/smasda.png', 43, 2, 0, 'sumber-daya-alam-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8104, 0, 0, 0, 'sumber-daya-alam-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'sumber-daya-alam-bagian-3', 'img/smasda.png', 43, 2, 0, 'sumber-daya-alam-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(105, 0, 0, 0, 'Gejala listrik statis bagian 2', '', '', 'TV Edukasi', 'TV Edukasi', 0, '2011', 'Gejala listrik statis bagian 2', 'img/2014-05-09-191758listrik.png', 44, 2, 0, 'gejala_listrik_statis_bagian_2.flv', '', 'files/labs', 'video/x-flv', 24513946, '2014-05-09', '2014-05-09'),
	(104, 0, 0, 0, 'Gejala listrik statis bagian 1', '', '', 'TV Edukasi', 'TV Edukasi', 0, '2011', 'Gejala listrik statis bagian 1', 'img/listrik.png', 44, 2, 0, 'gejala_listrik_statis_bagian_1.flv', '', 'files/labs', 'video/x-flv', 31403854, '2014-05-10', '2014-05-10'),
	(103, 0, 0, 0, 'Balada si Monas', '', '', 'TV Edukasi', 'TV Edukasi', 0, '2011', 'Balada si Monas', 'img/monas.png', 45, 2, 0, 'balada_si_monas.flv', '', 'files/labs', 'video/x-flv', 52853035, '2014-05-10', '2014-05-10'),
	(100, 0, 0, 0, 'Menu Sehat', '', '', 'TV Edukasi', 'TV Edukasi', 0, '2011', 'Menu Sehat', 'img/2014-05-09-185230ipa.png', 43, 2, 0, 'menu_sehat.flv', '', 'files/labs', 'video/x-flv', 18875043, '2014-05-09', '2014-05-09'),
	(99, 0, 0, 0, 'Melengkapi pantun bagian 2', '', '', 'TV Edukasi', 'TV Edukasi', 0, '2011', 'Melengkapi pantun bagian 2', 'img/2014-05-09-184832pantun1.png', 43, 2, 0, 'melengkapi_pantun_bagian_2.flv', '', 'files/labs', 'video/x-flv', 30148270, '2014-05-09', '2014-05-09'),
	(98, 0, 0, 0, 'Melengkapi pantun bagian 1', '', '', 'TV Edukasi', 'TV Edukasi', 0, '2011', 'Melengkapi pantun bagian 1', 'img/pantun1.png', 43, 2, 0, 'melengkapi_pantun_bagian_1.flv', '', 'files/labs', 'video/x-flv', 26123270, '2014-05-10', '2014-05-10'),
	(7010, 0, 0, 0, '101 Ways to Promote Your Website', '', '', NULL, NULL, 300, '2014', '101 Ways to Promote Your Website', 'files/ebooks/7010/pageflipdata/pages/cover.jpg', 7, 1, 1, '', 'files/ebooks/7010/pdf/101 Ways to Promote Your Website.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(7007, 0, 0, 0, '100 Tips & Trick Linux', '', '', NULL, NULL, 300, '2014', '100 Tips & Trick Linux', 'files/ebooks/7007/pageflipdata/pages/cover.jpg', 7, 1, 1, '', 'files/ebooks/7007/pdf/100 Tips & Trick Linux.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(7006, 0, 0, 0, '100 Deadliest Karate Moves', '', '', NULL, NULL, 300, '2014', '100 Deadliest Karate Moves', 'files/ebooks/7006/pageflipdata/pages/cover.jpg', 7, 1, 1, '', 'files/ebooks/7006/pdf/100 Deadliest Karate Moves.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(7005, 0, 0, 0, '100 Greatest Science Discoveries of All Time', '', '', NULL, NULL, 300, '2014', '100 Greatest Science Discoveries of All Time', 'files/ebooks/7005/pageflipdata/pages/cover.jpg', 7, 1, 1, '', 'files/ebooks/7005/pdf/100 Greatest Science Discoveries of All Time.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(8117, 0, 0, 0, 'sel-elektrokimia-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'sel-elektrokimia-bagian-1', 'img/smaelektrokimia.png', 43, 2, 0, 'sel-elektrokimia-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8118, 0, 0, 0, 'sel-elektrokimia-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'sel-elektrokimia-bagian-2', 'img/smaelektrokimia.png', 43, 2, 0, 'sel-elektrokimia-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8119, 0, 0, 0, 'sel-elektrokimia-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'sel-elektrokimia-bagian-3', 'img/smaelektrokimia.png', 43, 2, 0, 'sel-elektrokimia-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(1107, 10, 0, 0, 'Wahana Matematika Siswa Kelas 10', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Wahana Matematika Siswa Kelas 10', 'files/ebooks/1107/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1107/pdf/Wahana Matematika (IPS).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1106, 10, 0, 0, 'Sosiologi Siswa Kelas 10', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Sosiologi Siswa Kelas 10', 'files/ebooks/1106/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1106/pdf/Sosiologi.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1105, 10, 0, 0, 'Sejarah Siswa Kelas 10', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Sejarah Siswa Kelas 10', 'files/ebooks/1105/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1105/pdf/Kelas_10_SMA_Sejarah_Siswa.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1104, 10, 0, 0, 'Matematika Siswa Kelas 10', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Matematika Siswa Kelas 11', 'files/ebooks/1104/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1104/pdf/Kelas_10_SMA_Matematika_Siswa.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1103, 10, 0, 0, 'Bahasa Indonesia Siswa Kelas 10', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Bahasa Indonesia Siswa Kelas 11', 'files/ebooks/1103/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1103/pdf/Kelas_10_SMA_Bhs_Indonesia_Siswa.pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1102, 11, 0, 0, 'Seni Dan Budaya Kelas 11', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Seni Dan Budaya Kelas 11', 'files/ebooks/1102/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1102/pdf/Seni Budaya (Buku Siswa).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(8129, 0, 0, 0, 'menggunakan-aturan-pada-bentuk-akar-seg1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menggunakan-aturan-pada-bentuk-akar-seg1', 'img/smaakar.png', 43, 2, 0, 'menggunakan-aturan-pada-bentuk-akar-seg1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8130, 0, 0, 0, 'menggunakan-aturan-pada-bentuk-akar-seg2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menggunakan-aturan-pada-bentuk-akar-seg2', 'img/smaakar.png', 43, 2, 0, 'menggunakan-aturan-pada-bentuk-akar-seg2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8131, 0, 0, 0, 'menggunakan-aturan-pada-bentuk-akar-seg3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'menggunakan-aturan-pada-bentuk-akar-seg3', 'img/smaakar.png', 43, 2, 0, 'menggunakan-aturan-pada-bentuk-akar-seg3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8132, 0, 0, 0, 'perkalian-matriks', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'perkalian-matriks', 'img/smaxmatriks.png', 43, 2, 0, 'perkalian-matriks.flv', 'files/labs', '', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8133, 0, 0, 0, 'persamaan-lingkaran-bagian-1', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'persamaan-lingkaran-bagian-1', 'img/smapersamaanlingkaran.png', 43, 2, 0, 'persamaan-lingkaran-bagian-1.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8134, 0, 0, 0, 'persamaan-lingkaran-bagian-2', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'persamaan-lingkaran-bagian-2', 'img/smapersamaanlingkaran.png', 43, 2, 0, 'persamaan-lingkaran-bagian-2.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8135, 0, 0, 0, 'persamaan-lingkaran-bagian-3', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'persamaan-lingkaran-bagian-3', 'img/smapersamaanlingkaran.png', 43, 2, 0, 'persamaan-lingkaran-bagian-3.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8136, 0, 0, 0, 'persamaan-lingkaran-bagian-4', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'persamaan-lingkaran-bagian-4', 'img/smapersamaanlingkaran.png', 43, 2, 0, 'persamaan-lingkaran-bagian-4.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(8137, 0, 0, 0, 'ruang-sample', '', '', 'Indonesia', 'Indonesia', 0, '2013', 'ruang-sample', 'img/smpsample.png', 43, 2, 0, 'ruang-sample.flv', '', 'files/labs', 'video/flv', 8000, '2014-03-26', '2014-03-26'),
	(1101, 11, 0, 0, 'SEJARAH Kelas 11', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'SEJARAH Kelas 11', 'files/ebooks/1101/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1101/pdf/Sejarah Indonesia (Buku Siswa).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1100, 11, 0, 0, 'Pendidikan Kewirausahaan Kelas 11', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Pendidikan Kewirausahaan Kelas 11', 'files/ebooks/1100/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1100/pdf/Prakarya dan Kewirausahaan (Buku Siswa).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1099, 11, 0, 0, 'Pendidikan Kesehatan Dan Jasmani Kelas 11', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Pendidikan Kesehatan Dan Jasmani Kelas 11', 'files/ebooks/1099/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1099/pdf/Pendidikan Jasmani, Olahraga, dan Kesehatan (Buku Siswa).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1098, 11, 0, 0, 'Agama Kristen Kelas 11', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Agama Kristen Kelas 11', 'files/ebooks/1098/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1098/pdf/Pendidikan Agama Kristen dan Budi Pekerti (Buku Siswa).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1097, 11, 0, 0, 'Agama Kongucu Kelas 11', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Agama Kongucu Kelas 11', 'files/ebooks/1097/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1097/pdf/Pendidikan Agama Khonghucu dan Budi Pekerti (Buku Siswa).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1096, 11, 0, 0, 'Agama Katolik Kelas 11', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Agama Katolik Kelas 11', 'files/ebooks/1096/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1096/pdf/Pendidikan Agama Katolik dan Budi Pekerti (Buku Siswa).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1095, 11, 0, 0, 'Agama Islam Kelas 11', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Agama Islam Kelas 11', 'files/ebooks/1095/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1095/pdf/Pendidikan Agama Islam dan Budi Pekerti (Buku Siswa).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1094, 11, 0, 0, 'Agama Hindu Kelas 11', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Agama Hindu Kelas 11', 'files/ebooks/1094/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1094/pdf/Pendidikan Agama Hindu dan Budi Pekerti (Buku Siswa).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1091, 11, 0, 0, 'Bahasa Indonesia Kelas 11', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Bahasa Indonesia Kelas 11', 'files/ebooks/1091/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1091/pdf/Bahasa Indonesia Ekspresi Diri dan Akademik (Buku Siswa).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(1092, 11, 0, 0, 'Bahasa Inggris Kelas 11', 'Kementerian Pendidikan Dan Kebudayaan', 'Kementerian Pendidikan Dan Kebudayaan', NULL, NULL, 300, '2014', 'Bahasa Inggris Kelas 11', 'files/ebooks/1092/pageflipdata/pages/cover.jpg', 1, 1, 1, '', 'files/ebooks/1092/pdf/Bahasa Inggris (Buku Siswa).pdf', NULL, NULL, NULL, '2014-10-14', '2014-10-15'),
	(700, 10, NULL, 1, 'Prakarya dan Kewirausahaan Siswa', 'Penerbit BSE', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 196, '2013', 'Kelas 10 SMA Prakarya dan Kewirausahaan Siswa', 'files/ebooks/700/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/700/pdf/Kelas_10_SMA_Prakarya_dan_Kewirausahaan_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(701, 10, NULL, 1, 'Sejarah Indonesia Siswa', 'Penerbit BSE', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 168, '2013', 'Kelas 10 SMA Sejarah Indonesia Siswa', 'files/ebooks/701/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/701/pdf/Kelas_10_SMA_Sejarah_Indonesia_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(702, 10, NULL, 1, 'Seni Budaya Siswa', 'Penerbit BSE', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 452, '2013', 'Kelas 10 SMA Seni Budaya Siswa', 'files/ebooks/702/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/702/pdf/Kelas_10_SMA_Seni_Budaya_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(703, 10, NULL, 1, 'Bahasa Inggris Siswa', 'Penerbit BSE', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 121, '2013', 'Kelas 10 SMA Bahasa Inggris Siswa', 'files/ebooks/703/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/703/pdf/Kelas_10_SMA_Bahasa_Inggris_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(704, 10, NULL, 1, 'Matematika Siswa Semester 1', 'Penerbit BSE', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 229, '2013', 'Kelas 10 SMA Matematika Siswa Semester 1', 'files/ebooks/704/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/704/pdf/Kelas_10_SMA_Matematika_Siswa_Semester_1.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(705, 10, NULL, 1, 'Pendidikan Agama Hindu dan Budi Pekerti Siswa', 'Penerbit BSE', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 216, '2013', 'Kelas 10 SMA Pendidikan Agama Hindu dan Budi Pekerti Siswa', 'files/ebooks/705/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/705/pdf/Kelas_10_SMA_Pendidikan_Agama_Hindu_dan_Budi_Pekerti_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(706, 10, NULL, 1, 'Pendidikan Agama Islam dan Budi Pekerti Siswa', 'Penerbit BSE', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 208, '2013', 'Kelas 10 SMA Pendidikan Agama Islam dan Budi Pekerti Siswa', 'files/ebooks/706/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/706/pdf/Kelas_10_SMA_Pendidikan_Agama_Islam_dan_Budi_Pekerti_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(707, 10, NULL, 1, 'Penjaskes Siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 184, '2013', 'Kelas 10 SMA Penjaskes Siswa', 'files/ebooks/707/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/707/pdf/Kelas_10_SMA_Penjaskes_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(708, 11, NULL, 1, 'Bahasa Inggris Siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 117, '2013', 'Kelas 11 SMA Bahasa Inggris Siswa', 'files/ebooks/708/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/708/pdf/Kelas_11_SMA_Bahasa_Inggris_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(709, 11, NULL, 1, 'Matematika Siswa Semester 1', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 209, '2013', 'Kelas 11 SMA Matematika Siswa Semester 1', 'files/ebooks/709/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/709/pdf/Kelas_11_SMA_Matematika_Siswa_Semester_1.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(710, 11, NULL, 1, 'Pendidikan Agama Islam dan Budi Pekerti Siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 212, '2013', 'Kelas 11 SMA Pendidikan Agama Islam dan Budi Pekerti Siswa', 'files/ebooks/710/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/710/pdf/Kelas_11_SMA_Pendidikan_Agama_Islam_dan_Budi_Pekerti_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(711, 11, NULL, 1, 'Penjaskes Siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 173, '2013', 'Kelas 11 SMA Penjaskes Siswa', 'files/ebooks/711/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/711/pdf/Kelas_11_SMA_Penjaskes_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(712, 11, NULL, 1, 'Prakarya dan Kewirausahaan Siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 216, '2013', 'Kelas 11 SMA Prakarya dan Kewirausahaan Siswa', 'files/ebooks/712/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/712/pdf/Kelas_11_SMA_Prakarya_dan_Kewirausahaan_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(713, 11, NULL, 1, 'Sejarah Indonesia Siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 221, '2013', 'Kelas 11 SMA Sejarah Indonesia Siswa', 'files/ebooks/713/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/713/pdf/Kelas_11_SMA_Sejarah_Indonesia_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(714, 11, NULL, 1, 'Seni Budaya Siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 136, '2013', 'Kelas 11 SMA Seni Budaya Siswa', 'files/ebooks/714/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/714/pdf/Kelas_11_SMA_Seni_Budaya_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(715, 11, NULL, 1, 'Bahasa Indonesia Siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 173, '2013', 'Kelas 11 SMA Bahasa Indonesia Siswa', 'files/ebooks/715/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/715/pdf/Kelas_11_SMA_Bahasa_Indonesia_Siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(716, 10, NULL, 1, 'Memahami Geografi 1 SMA MA Kelas 10 Bagja Waluya 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Bagja Waluya', NULL, NULL, 294, '2009', 'Memahami Geografi 1 SMA MA Kelas 10 Bagja Waluya 2009', 'files/ebooks/716/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/716/pdf/Memahami_Geografi_1_SMA_MA_Kelas_10_Bagja_Waluya_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(717, 10, NULL, 1, 'Panduan Pembelajaran Biologi Kelas 10 Suwarno 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Suwarno', NULL, NULL, 244, '2009', 'Panduan Pembelajaran Biologi Kelas 10 Suwarno 2009', 'files/ebooks/717/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/717/pdf/Panduan_Pembelajaran_Biologi_Kelas_10_Suwarno_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(718, 10, NULL, 1, 'Pendidikan Agama Islam Kelas 10 Husni Thoyar 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Husni Thoyar', NULL, NULL, 266, '2011', 'Pendidikan Agama Islam Kelas 10 Husni Thoyar 2011', 'files/ebooks/718/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/718/pdf/Pendidikan_Agama_Islam_Kelas_10_Husni_Thoyar_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(719, 10, NULL, 1, 'Pendidikan Agama Khonghucu Kelas 10 Tan Djin Meng dan Indira Agustin 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Tan Djin Meng dan Indira Agustin', NULL, NULL, 249, '2011', 'Pendidikan Agama Khonghucu Kelas 10 Tan Djin Meng dan Indira Agustin 2011', 'files/ebooks/719/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/719/pdf/Pendidikan_Agama_Khonghucu_Kelas_10_Tan_Djin_Meng_dan_Indira_Agustin_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(720, 10, NULL, 1, 'Pendidikan Jasmani Olahraga dan Kesehatan Kelas 10 Yusup Hidayat Sindhu Cindar Bumi Rizal Alamsyah 2', 'Kementrian Pendidikan dan Kebudayaan', 'Yusup Hidayat Sindhu Cindar Bumi Rizal Alamsyah', NULL, NULL, 270, '2010', 'Pendidikan Jasmani Olahraga dan Kesehatan Kelas 10 Yusup Hidayat Sindhu Cindar Bumi Rizal Alamsyah 2010', 'files/ebooks/720/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/720/pdf/Pendidikan_Jasmani_Olahraga_dan_Kesehatan_Kelas_10_Yusup_Hidayat_Sindhu_Cindar_Bumi_Rizal_Alamsyah_2010.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(721, 10, NULL, 1, 'Pendidikan Kewarganegaraan Kelas 10 Atik Hartati Sarwono 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Atik Hartati Sarwono', NULL, NULL, 285, '2011', 'Pendidikan Kewarganegaraan Kelas 10 Atik Hartati Sarwono 2011', 'files/ebooks/721/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/721/pdf/Pendidikan_Kewarganegaraan_Kelas_10_Atik_Hartati_Sarwono_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(722, 10, NULL, 1, 'Seni Tari Kelas 10  Alien Wiriatunnisa Yulia Hendrilianti 2010', 'Kementrian Pendidikan dan Kebudayaan', 'Alien Wiriatunnisa Yulia Hendrilianti', NULL, NULL, 244, '2010', 'Seni Tari Kelas 10  Alien Wiriatunnisa Yulia Hendrilianti 2010', 'files/ebooks/722/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/722/pdf/Seni_Tari_Kelas_10__Alien_Wiriatunnisa_Yulia_Hendrilianti_2010.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(723, 10, NULL, 1, 'Sosiologi Kontekstual Kelas 10 Atik Catur Budiati 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Atik Catur Budiati', NULL, NULL, 164, '2009', 'Sosiologi Kontekstual Kelas 10 Atik Catur Budiati 2009', 'files/ebooks/723/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/723/pdf/Sosiologi_Kontekstual_Kelas_10_Atik_Catur_Budiati_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(724, 10, NULL, 1, 'Tanoshii Nihongo 1 Buku Pelajaran Bahasa Jepang Kelas 10 Mulyono Erwin H Nuryadin 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Mulyono Erwin H Nuryadin', NULL, NULL, 248, '2011', 'Tanoshii Nihongo 1 Buku Pelajaran Bahasa Jepang Kelas 10 Mulyono Erwin H Nuryadin 2011', 'files/ebooks/724/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/724/pdf/Tanoshii_Nihongo_1_Buku_Pelajaran_Bahasa_Jepang_Kelas_10_Mulyono_Erwin_H_Nuryadin_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(725, 10, NULL, 1, '2Tanoshii Nihongo 1 Buku Pelajaran Bahasa Jepang Kelas 10 Mulyono Erwin H Nuryadin 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Mulyono Erwin H Nuryadin', NULL, NULL, 248, '2011', '2Tanoshii Nihongo 1 Buku Pelajaran Bahasa Jepang Kelas 10 Mulyono Erwin H Nuryadin 2011', 'files/ebooks/725/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/725/pdf/2Tanoshii_Nihongo_1_Buku_Pelajaran_Bahasa_Jepang_Kelas_10_Mulyono_Erwin_H_Nuryadin_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(726, 10, NULL, 1, 'Belajar Efektif Bahasa Indonesia Kelas 10 E Kusnadi H Andang Purwoto Siti Aisah 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Kusnadi H Andang Purwoto Siti Aisah', NULL, NULL, 282, '2009', 'Belajar Efektif Bahasa Indonesia Kelas 10 E Kusnadi H Andang Purwoto Siti Aisah 2009', 'files/ebooks/726/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/726/pdf/Belajar_Efektif_Bahasa_Indonesia_Kelas_10_E_Kusnadi_H_Andang_Purwoto_Siti_Aisah_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(727, 10, NULL, 1, 'Cakrawala Sejarah 1 Kelas 10 Wardaya 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Wardaya', NULL, NULL, 146, '2009', 'Cakrawala Sejarah 1 Kelas 10 Wardaya 2009', 'files/ebooks/727/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/727/pdf/Cakrawala_Sejarah_1_Kelas_10_Wardaya_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(728, 10, NULL, 1, 'Developing English Competencies Kelas 10 Ahmad Doddy Ahmat sugeng Effendi 2008', 'Kementrian Pendidikan dan Kebudayaan', 'Ahmad Doddy Ahmat sugeng Effendi', NULL, NULL, 194, '2008', 'Developing English Competencies Kelas 10 Ahmad Doddy Ahmat sugeng Effendi 2008', 'files/ebooks/728/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/728/pdf/Developing_English_Competencies_Kelas_10_Ahmad_Doddy_Ahmat_sugeng_Effendi_2008.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(729, 10, NULL, 1, 'Ekonomi Kelas 10 Mintasih Indriayu 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Mintasih Indriayu', NULL, NULL, 242, '2009', 'Ekonomi Kelas 10 Mintasih Indriayu 2009', 'files/ebooks/729/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/729/pdf/Ekonomi_Kelas_10_Mintasih_Indriayu_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(730, 10, NULL, 1, 'Inter Languange Kelas 10 Joko Priyana Virga Renitasari AR irjayani 2008', 'Kementrian Pendidikan dan Kebudayaan', 'Joko Priyana Virga Renitasari AR irjayani', NULL, NULL, 217, '2008', 'Inter Languange Kelas 10 Joko Priyana Virga Renitasari AR irjayani 2008', 'files/ebooks/730/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/730/pdf/Inter_Languange_Kelas_10_Joko_Priyana_Virga_Renitasari_AR_irjayani_2008.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(731, 10, NULL, 1, 'Kelas 10 SMA Teknologi Informasi dan Komunikasi 1 Eko Supriyadi', 'Kementrian Pendidikan dan Kebudayaan', 'Eko Supriyadi', NULL, NULL, 302, NULL, 'Kelas 10 SMA Teknologi Informasi dan Komunikasi 1 Eko Supriyadi', 'files/ebooks/731/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/731/pdf/Kelas_10_SMA_Teknologi_Informasi_dan_Komunikasi_1_Eko_Supriyadi.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(732, 10, NULL, 1, 'Kimia 1 Kelas 10 Budi Utami Agung Nugroho Catur Saputro Lina Maha 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Budi Utami Agung Nugroho Catur Saputro Lina Maha', NULL, NULL, 260, '2009', 'Kimia 1 Kelas 10 Budi Utami Agung Nugroho Catur Saputro Lina Maha 2009', 'files/ebooks/732/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/732/pdf/Kimia_1_Kelas_10_Budi_Utami_Agung_Nugroho_Catur_Saputro_Lina_Maha_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(733, 11, NULL, 1, 'Inter Languange IPA IPS Kelas 11 Joko Priyana Riandi Anita P Mumpuni 2008', 'Kementrian Pendidikan dan Kebudayaan', 'Joko Priyana Riandi Anita P Mumpuni', NULL, NULL, 236, '2008', 'Inter Languange IPA IPS Kelas 11 Joko Priyana Riandi Anita P Mumpuni 2008', 'files/ebooks/733/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/733/pdf/Inter_Languange_IPA_IPS_Kelas_11_Joko_Priyana_Riandi_Anita_P_Mumpuni_2008.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(734, 11, NULL, 1, 'Kimia 2 Kelas 11 Ari Harnanto Ruminten 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Ari Harnanto Ruminten', NULL, NULL, 302, '2009', 'Kimia 2 Kelas 11 Ari Harnanto Ruminten 2009', 'files/ebooks/734/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/734/pdf/Kimia_2_Kelas_11_Ari_Harnanto_Ruminten_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(735, 11, NULL, 1, 'Kompetensi Fisika Kelas 11 Siswanto Sukaryadi 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Siswanto Sukaryadi', NULL, NULL, 252, '2009', 'Kompetensi Fisika Kelas 11 Siswanto Sukaryadi 2009', 'files/ebooks/735/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/735/pdf/Kompetensi_Fisika_Kelas_11_Siswanto_Sukaryadi_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(736, 11, NULL, 1, 'Pendidikan Agama Islam Kelas 11 Asep Puji Syukur Evi Susanti 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Asep Puji Syukur Evi Susanti', NULL, NULL, 272, '2011', 'Pendidikan Agama Islam Kelas 11 Asep Puji Syukur Evi Susanti 2011', 'files/ebooks/736/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/736/pdf/Pendidikan_Agama_Islam_Kelas_11_Asep_Puji_Syukur_Evi_Susanti_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(737, 11, NULL, 1, 'Pendidikan Jasmani Olahraga dan Kesehatan Kelas 11 Tarmudi B Hafid Ahmad Rithaudin 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Tarmudi B Hafid Ahmad Rithaudin', NULL, NULL, 322, '2011', 'Pendidikan Jasmani Olahraga dan Kesehatan Kelas 11 Tarmudi B Hafid Ahmad Rithaudin 2011', 'files/ebooks/737/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/737/pdf/Pendidikan_Jasmani_Olahraga_dan_Kesehatan_Kelas_11_Tarmudi_B_Hafid_Ahmad_Rithaudin_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(738, 11, NULL, 1, 'Pendidikan Kewarganegaraan Kelas 11 Rini Setyani Dyah Hartati 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Rini Setyani Dyah Hartati', NULL, NULL, 216, '2011', 'Pendidikan Kewarganegaraan Kelas 11 Rini Setyani Dyah Hartati 2011', 'files/ebooks/738/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/738/pdf/Pendidikan_Kewarganegaraan_Kelas_11_Rini_Setyani_Dyah_Hartati_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(739, 11, NULL, 1, 'Praktis Belajar Seni Tari Kelas 11 Elly Laelasari Ria Sabaria 2010 2', 'Kementrian Pendidikan dan Kebudayaan', 'Laelasari Ria Sabaria', NULL, NULL, 188, '2010', 'Praktis Belajar Seni Tari Kelas 11 Elly Laelasari Ria Sabaria 2010 2', 'files/ebooks/739/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/739/pdf/Praktis_Belajar_Seni_Tari_Kelas_11_Elly_Laelasari_Ria_Sabaria_2010_2.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(740, 11, NULL, 1, 'Sejarah 2 Kelas 11 Tarunasena M 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Tarunasena', NULL, NULL, 344, '2009', 'Sejarah 2 Kelas 11 Tarunasena M 2009', 'files/ebooks/740/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/740/pdf/Sejarah_2_Kelas_11_Tarunasena_M_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(741, 11, NULL, 1, 'Sosiologi Kelas 11 Vina Dwi Laning 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Vina Dwi Laning', NULL, NULL, 130, '2009', 'Sosiologi Kelas 11 Vina Dwi Laning 2009', 'files/ebooks/741/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/741/pdf/Sosiologi_Kelas_11_Vina_Dwi_Laning_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(742, 11, NULL, 1, 'Tanoshii Nihongo 2 Buku Pelajaran Bahasa Jepang Kelas 11 Mulyono Erwin H Nuryadin 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Mulyono Erwin H Nuryadin', NULL, NULL, 264, '2011', 'Tanoshii Nihongo 2 Buku Pelajaran Bahasa Jepang Kelas 11 Mulyono Erwin H Nuryadin 2011', 'files/ebooks/742/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/742/pdf/Tanoshii_Nihongo_2_Buku_Pelajaran_Bahasa_Jepang_Kelas_11_Mulyono_Erwin_H_Nuryadin_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(743, 11, NULL, 1, 'Teknologi Informasi Komunikasi XI semester 2 Kelas 11 Onno W Purbo 2008', 'Kementrian Pendidikan dan Kebudayaan', 'Onno W Purbo', NULL, NULL, 118, '2008', 'Teknologi Informasi Komunikasi XI semester 2 Kelas 11 Onno W Purbo 2008', 'files/ebooks/743/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/743/pdf/Teknologi_Informasi_Komunikasi_XI_semester_2_Kelas_11_Onno_W_Purbo_2008.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(744, 11, NULL, 1, 'Terampil Berbahasa Indonesia 2 Bahasa Kelas 11 Gunawan Budi Santoso Wendi Widya RD Uti D 2008', 'Kementrian Pendidikan dan Kebudayaan', 'Gunawan Budi Santoso Wendi Widya RD Uti D', NULL, NULL, 258, '2008', 'Terampil Berbahasa Indonesia 2 Bahasa Kelas 11 Gunawan Budi Santoso Wendi Widya RD Uti D 2008', 'files/ebooks/744/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/744/pdf/Terampil_Berbahasa_Indonesia_2_Bahasa_Kelas_11_Gunawan_Budi_Santoso_Wendi_Widya_RD_Uti_D_2008.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(745, 11, NULL, 1, 'Antropologi Mengungkap Keragaman Budaya 1 Kelas 11 Tedi Sutardi 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Tedi Sutardi', NULL, NULL, 140, '2009', 'Antropologi Mengungkap Keragaman Budaya 1 Kelas 11 Tedi Sutardi 2009', 'files/ebooks/745/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/745/pdf/Antropologi_Mengungkap_Keragaman_Budaya_1_Kelas_11_Tedi_Sutardi_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(746, 11, NULL, 1, 'Biologi Kelas 11 Suaha Bakhtiar 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Suaha Bakhtiar', NULL, NULL, 274, '2011', 'Biologi Kelas 11 Suaha Bakhtiar 2011', 'files/ebooks/746/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/746/pdf/Biologi_Kelas_11_Suaha_Bakhtiar_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(747, 11, NULL, 1, 'Cakrawala Sejarah Bahasa Kelas 11 Wardaya 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Wardaya', NULL, NULL, 170, '2009', 'Cakrawala Sejarah Bahasa Kelas 11 Wardaya 2009', 'files/ebooks/747/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/747/pdf/Cakrawala_Sejarah_Bahasa_Kelas_11_Wardaya_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(748, 11, NULL, 1, 'Developing English Competencies Kelas 11 Ahmad Doddy Ahmat sugeng Effendi 2008', 'Kementrian Pendidikan dan Kebudayaan', 'Ahmad Doddy Ahmat sugeng Effendi', NULL, NULL, 257, '2008', 'Developing English Competencies Kelas 11 Ahmad Doddy Ahmat sugeng Effendi 2008', 'files/ebooks/748/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/748/pdf/Developing_English_Competencies_Kelas_11_Ahmad_Doddy_Ahmat_sugeng_Effendi_2008.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(749, 11, NULL, 1, 'Gelanggang Pendidikan Jasmani Olahraga dan Kesehatan Kelas 11 Khairul Hadziq Milka Nurfitri 2010', 'Kementrian Pendidikan dan Kebudayaan', 'Khairul Hadziq Milka Nurfitri', NULL, NULL, 260, '2010', 'Gelanggang Pendidikan Jasmani Olahraga dan Kesehatan Kelas 11 Khairul Hadziq Milka Nurfitri 2010', 'files/ebooks/749/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/749/pdf/Gelanggang_Pendidikan_Jasmani_Olahraga_dan_Kesehatan_Kelas_11_Khairul_Hadziq_Milka_Nurfitri_2010.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(750, 11, NULL, 1, 'Geografi Kelas 11 Eni Anjayani Tri Haryanto 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Eni Anjayani Tri Haryanto', NULL, NULL, 252, '2009', 'Geografi Kelas 11 Eni Anjayani Tri Haryanto 2009', 'files/ebooks/750/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/750/pdf/Geografi_Kelas_11_Eni_Anjayani_Tri_Haryanto_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(751, 12, NULL, 1, 'Fisika Kelas 12 Joko Budiyanto 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Joko Budiyanto', NULL, NULL, 310, '2009', 'Fisika Kelas 12 Joko Budiyanto 2009', 'files/ebooks/751/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/751/pdf/Fisika_Kelas_12_Joko_Budiyanto_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(752, 12, NULL, 1, 'Generasi Telematika Teknologi Informasi Dan Komunikasi Kelas 12 Dede Imat Mutakin Hendra Firmansyah ', 'Kementrian Pendidikan dan Kebudayaan', 'Dede Imat Mutakin Hendra Firmansyah', NULL, NULL, 228, '2010', 'Generasi Telematika Teknologi Informasi Dan Komunikasi Kelas 12 Dede Imat Mutakin Hendra Firmansyah 2010', 'files/ebooks/752/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/752/pdf/Generasi_Telematika_Teknologi_Informasi_Dan_Komunikasi_Kelas_12_Dede_Imat_Mutakin_Hendra_Firmansyah_2010.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(753, 12, NULL, 1, 'Inter Language IPA IPS Kelas 12 Joko Priyana Tryani Retno Putri Saridewi Yulianti 2008', 'Kementrian Pendidikan dan Kebudayaan', 'Joko Priyana Tryani Retno Putri Saridewi Yulianti', NULL, NULL, 232, '2008', 'Inter Language IPA IPS Kelas 12 Joko Priyana Tryani Retno Putri Saridewi Yulianti 2008', 'files/ebooks/753/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/753/pdf/Inter_Language_IPA_IPS_Kelas_12_Joko_Priyana_Tryani_Retno_Putri_Saridewi_Yulianti_2008.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(754, 12, NULL, 1, 'Khazanah Matematika 3 IPS Kelas 12 Rosihan Ari Y Indriyastuti 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Rosihan Ari Y Indriyastuti', NULL, NULL, 248, '2009', 'Khazanah Matematika 3 IPS Kelas 12 Rosihan Ari Y Indriyastuti 2009', 'files/ebooks/754/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/754/pdf/Khazanah_Matematika_3_IPS_Kelas_12_Rosihan_Ari_Y_Indriyastuti_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(755, 12, NULL, 1, 'Mudah dan aktif Belajar Kimia 3 IPA Kelas 12 Yayan Sunarya Agus Setiabudi 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Yayan Sunarya Agus Setiabudi', NULL, NULL, 308, '2009', 'Mudah dan aktif Belajar Kimia 3 IPA Kelas 12 Yayan Sunarya Agus Setiabudi 2009', 'files/ebooks/755/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/755/pdf/Mudah_dan_aktif_Belajar_Kimia_3_IPA_Kelas_12_Yayan_Sunarya_Agus_Setiabudi_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(756, 12, NULL, 1, 'Nuansa Geografi 3 Kelas 12 Saptanti Rahayu Eny Wiji Lestari Maryadi 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Saptanti Rahayu Eny Wiji Lestari Maryadi', NULL, NULL, 154, '2009', 'Nuansa Geografi 3 Kelas 12 Saptanti Rahayu Eny Wiji Lestari Maryadi 2009', 'files/ebooks/756/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/756/pdf/Nuansa_Geografi_3_Kelas_12_Saptanti_Rahayu_Eny_Wiji_Lestari_Maryadi_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(757, 12, NULL, 1, 'Pelajaran Bahasa Arab Kelas 12 Darsono Sururi Abdul Jalal 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Darsono Sururi Abdul Jalal', NULL, NULL, 189, '2011', 'Pelajaran Bahasa Arab Kelas 12 Darsono Sururi Abdul Jalal 2011', 'files/ebooks/757/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/757/pdf/Pelajaran_Bahasa_Arab_Kelas_12_Darsono_Sururi_Abdul_Jalal_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(758, 12, NULL, 1, 'Pendidikan Agama Islam Kelas 12 Husni Thoyar 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Husni Thoyar', NULL, NULL, 266, '2011', 'Pendidikan Agama Islam Kelas 12 Husni Thoyar 2011', 'files/ebooks/758/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/758/pdf/Pendidikan_Agama_Islam_Kelas_12_Husni_Thoyar_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(759, 12, NULL, 1, 'Pendidikan Jasmani Olahraga dan Kesehatan Kelas 12 Joko Sumpeno Dedy Joko Budi Santoso 2010', 'Kementrian Pendidikan dan Kebudayaan', 'Joko Sumpeno Dedy Joko Budi Santoso', NULL, NULL, 276, '2010', 'Pendidikan Jasmani Olahraga dan Kesehatan Kelas 12 Joko Sumpeno Dedy Joko Budi Santoso 2010', 'files/ebooks/759/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/759/pdf/Pendidikan_Jasmani_Olahraga_dan_Kesehatan_Kelas_12_Joko_Sumpeno_Dedy_Joko_Budi_Santoso_2010.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(760, 12, NULL, 1, 'Pendidikan Kewarganegaraan Kelas 12 Atik Hartati Sarwono 2011', 'Kementrian Pendidikan dan Kebudayaan', 'Atik Hartati Sarwono', NULL, NULL, 240, '2011', 'Pendidikan Kewarganegaraan Kelas 12 Atik Hartati Sarwono 2011', 'files/ebooks/760/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/760/pdf/Pendidikan_Kewarganegaraan_Kelas_12_Atik_Hartati_Sarwono_2011.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(761, 12, NULL, 1, 'Praktis Belajar Kimia IPA Kelas 12 Iman Rahayu 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Iman Rahayu', NULL, NULL, 206, '2009', 'Praktis Belajar Kimia IPA Kelas 12 Iman Rahayu 2009', 'files/ebooks/761/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/761/pdf/Praktis_Belajar_Kimia_IPA_Kelas_12_Iman_Rahayu_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(762, 12, NULL, 1, 'Sejarah 3 Kelas 12 Sh Musthofa Suryandari Tutik Mulyati 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Sh Musthofa Suryandari Tutik Mulyati', NULL, NULL, 188, '2009', 'Sejarah 3 Kelas 12 Sh Musthofa Suryandari Tutik Mulyati 2009', 'files/ebooks/762/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/762/pdf/Sejarah_3_Kelas_12_Sh_Musthofa_Suryandari_Tutik_Mulyati_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(763, 12, NULL, 1, 'Seni Tari Kelas 12  Alien Wiriatunnisa Yulia Hendrilianti 2010', 'Kementrian Pendidikan dan Kebudayaan', 'Alien Wiriatunnisa Yulia Hendrilianti', NULL, NULL, 244, '2010', 'Seni Tari Kelas 12  Alien Wiriatunnisa Yulia Hendrilianti 2010', 'files/ebooks/763/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/763/pdf/Seni_Tari_Kelas_12__Alien_Wiriatunnisa_Yulia_Hendrilianti_2010.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(764, 12, NULL, 1, 'Sosiologi 3 Kelas 12 Wida Widianti 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Wida Widianti', NULL, NULL, 142, '2009', 'Sosiologi 3 Kelas 12 Wida Widianti 2009', 'files/ebooks/764/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/764/pdf/Sosiologi_3_Kelas_12_Wida_Widianti_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(765, 12, NULL, 1, 'Teknologi Informasi Dan Komunikasi Kelas 12 Ali Muhson Denny Ardia Rahman 2010', 'Kementrian Pendidikan dan Kebudayaan', 'Ali Muhson Denny Ardia Rahman', NULL, NULL, 164, '2010', 'Teknologi Informasi Dan Komunikasi Kelas 12 Ali Muhson Denny Ardia Rahman 2010', 'files/ebooks/765/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/765/pdf/Teknologi_Informasi_Dan_Komunikasi_Kelas_12_Ali_Muhson_Denny_Ardia_Rahman_2010.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(766, 12, NULL, 1, 'Teknologi Informasi Komunikasi XII semester 1 Kelas 12 Siswanto dan Nanang Kuswana 2008', 'Kementrian Pendidikan dan Kebudayaan', 'Siswanto dan Nanang Kuswana', NULL, NULL, 153, '2008', 'Teknologi Informasi Komunikasi XII semester 1 Kelas 12 Siswanto dan Nanang Kuswana 2008', 'files/ebooks/766/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/766/pdf/Teknologi_Informasi_Komunikasi_XII_semester_1_Kelas_12_Siswanto_dan_Nanang_Kuswana_2008.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(767, 12, NULL, 1, 'Aktif & Kreatif Berbahasa Indonesia Kelas 12 Yudi Irawan Adi Abdul Somad dan Aminudin 2008', 'Kementrian Pendidikan dan Kebudayaan', 'Yudi Irawan Adi Abdul Somad dan Aminudin', NULL, NULL, 184, '2008', 'Aktif & Kreatif Berbahasa Indonesia Kelas 12 Yudi Irawan Adi Abdul Somad dan Aminudin 2008', 'files/ebooks/767/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/767/pdf/Aktif_&_Kreatif_Berbahasa_Indonesia_Kelas_12_Yudi_Irawan_Adi_Abdul_Somad_dan_Aminudin_2008.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(768, 12, NULL, 1, 'Antropologi 2 Kelas 12 Emmy Indriyawati 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Emmy Indriyawati', NULL, NULL, 203, '2009', 'Antropologi 2 Kelas 12 Emmy Indriyawati 2009', 'files/ebooks/768/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/768/pdf/Antropologi_2_Kelas_12_Emmy_Indriyawati_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(769, 12, NULL, 1, 'Biologi 3 Kelas 12 Subardi Nuryani Shidiq Pramono 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Subardi Nuryani Shidiq Pramono', NULL, NULL, 130, '2009', 'Biologi 3 Kelas 12 Subardi Nuryani Shidiq Pramono 2009', 'files/ebooks/769/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/769/pdf/Biologi_3_Kelas_12_Subardi_Nuryani_Shidiq_Pramono_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(770, 12, NULL, 1, 'Developing English Competencies IPS Kelas 12 Ahmad Doddy ahmat Sugeng Effendi 2008', 'Kementrian Pendidikan dan Kebudayaan', 'Ahmad Doddy ahmat Sugeng Effendi', NULL, NULL, 186, '2008', 'Developing English Competencies IPS Kelas 12 Ahmad Doddy ahmat Sugeng Effendi 2008', 'files/ebooks/770/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/770/pdf/Developing_English_Competencies_IPS_Kelas_12_Ahmad_Doddy_ahmat_Sugeng_Effendi_2008.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(771, 12, NULL, 1, 'Ekonomi 3 Kelas 12 Sukardi 2009', 'Kementrian Pendidikan dan Kebudayaan', 'Sukardi', NULL, NULL, 150, '2009', 'Ekonomi 3 Kelas 12 Sukardi 2009', 'files/ebooks/771/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/771/pdf/Ekonomi_3_Kelas_12_Sukardi_2009.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(772, 10, NULL, 1, 'buku alquran hadis MA 10 siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 152, '2013', 'buku alquran hadis MA 10 siswa', 'files/ebooks/772/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/772/pdf/buku_alquran_hadis_MA_10_siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(773, 10, NULL, 1, 'buku bahasa arab MA 10 guru', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 140, '2013', 'buku bahasa arab MA 10 guru', 'files/ebooks/773/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/773/pdf/buku_bahasa_arab_MA_10_guru.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(774, 10, NULL, 1, 'buku bahasa arab MA 10 siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 120, '2013', 'buku bahasa arab MA 10 siswa', 'files/ebooks/774/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/774/pdf/buku_bahasa_arab_MA_10_siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(775, 10, NULL, 1, 'buku fikih MA 10 guru', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 192, '2013', 'buku fikih MA 10 guru', 'files/ebooks/775/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/775/pdf/buku_fikih_MA_10_guru.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(776, 10, NULL, 1, 'buku fikih MA 10 siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 180, '2013', 'buku fikih MA 10 siswa', 'files/ebooks/776/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/776/pdf/buku_fikih_MA_10_siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(777, 10, NULL, 1, 'buku ski MA 10 guru', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 88, '2013', 'buku ski MA 10 guru', 'files/ebooks/777/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/777/pdf/buku_ski_MA_10_guru.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(778, 10, NULL, 1, 'buku ski MA 10 siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 112, '2013', 'buku ski MA 10 siswa', 'files/ebooks/778/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/778/pdf/buku_ski_MA_10_siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(779, 10, NULL, 1, 'buku akidah akhlak MA 10 guru', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 124, '2013', 'buku akidah akhlak MA 10 guru', 'files/ebooks/779/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/779/pdf/buku_akidah_akhlak_MA_10_guru.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(780, 10, NULL, 1, 'buku akidah akhlak MA 10 siswa', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 220, '2013', 'buku akidah akhlak MA 10 siswa', 'files/ebooks/780/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/780/pdf/buku_akidah_akhlak_MA_10_siswa.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00'),
	(781, 10, NULL, 1, 'buku_alquran_hadis_MA_10_guru', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 160, '2013', 'buku_alquran_hadis_MA_10_guru', 'files/ebooks/781/pageflipdata/pages/cover.jpg', 5, 1, 1, '', 'files/ebooks/781/pdf/buku_alquran_hadis_MA_10_guru.pdf', NULL, NULL, NULL, '0000-00-00', '0000-00-00');
/*!40000 ALTER TABLE `labs` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.master_kelas
CREATE TABLE IF NOT EXISTS `master_kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(400) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.master_kelas: 6 rows
DELETE FROM `master_kelas`;
/*!40000 ALTER TABLE `master_kelas` DISABLE KEYS */;
INSERT INTO `master_kelas` (`id`, `nama_kelas`, `keterangan`, `created`, `modified`) VALUES
	(3, '1', 'kelas 1', '2010-04-22 18:36:51', '2011-08-16 21:41:45'),
	(4, '2', 'kelas 2', '2011-08-21 01:41:20', '2011-08-21 01:41:20'),
	(5, '3', 'Kelas 3', '2011-10-11 01:02:24', '2011-10-11 01:02:24'),
	(6, '4', 'Kelas 4', '2011-10-11 01:02:34', '2011-10-11 01:02:34'),
	(7, '5', 'Kelas 5', '2011-10-11 01:02:55', '2011-10-11 01:02:55'),
	(8, '6', 'Kelas 6', '2011-10-11 01:03:10', '2011-10-11 01:03:10');
/*!40000 ALTER TABLE `master_kelas` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.monitorings
CREATE TABLE IF NOT EXISTS `monitorings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(255) NOT NULL,
  `nama_video` varchar(255) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.monitorings: 3 rows
DELETE FROM `monitorings`;
/*!40000 ALTER TABLE `monitorings` DISABLE KEYS */;
INSERT INTO `monitorings` (`id`, `nama_kelas`, `nama_video`, `keterangan`, `created`, `modified`) VALUES
	(1, 'Kelas 10', 'kelas10', 'Monitoring Kelas 10', '2014-11-28 09:07:34', '2014-11-28 11:35:45'),
	(2, 'Kelas 11', 'kelas11', 'Kelas 11 video', '2014-11-28 09:19:18', '2014-11-28 09:19:18'),
	(3, 'Kelas 12', 'kelas12', 'Kelas 12 video', '2014-11-28 09:19:39', '2014-11-28 11:36:20');
/*!40000 ALTER TABLE `monitorings` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.pelajarans
CREATE TABLE IF NOT EXISTS `pelajarans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.pelajarans: 14 rows
DELETE FROM `pelajarans`;
/*!40000 ALTER TABLE `pelajarans` DISABLE KEYS */;
INSERT INTO `pelajarans` (`id`, `nama`, `alias`, `created`, `modified`) VALUES
	(1, 'Matematika', 'matematika', '2011-11-26 02:10:08', '2011-11-26 02:10:08'),
	(2, 'Fisika', 'fisika', '2011-11-26 02:10:08', '2011-11-26 02:10:08'),
	(3, 'Biologi', 'biologi', '2011-11-26 02:10:08', '2011-11-26 02:10:08'),
	(4, 'Bahasa Indonesia', 'bahasa-indonesia', '2011-11-26 02:10:08', '2011-11-26 02:10:08'),
	(5, 'Bahasa Inggris', 'bahasa-inggris', '2011-11-26 02:10:08', '2011-11-26 02:10:08'),
	(6, 'PPKN', 'pkn', '2011-11-26 02:10:08', '2011-11-26 02:10:08'),
	(8, 'Kimia', 'kimia', '2012-06-11 04:57:13', '2012-06-11 04:57:13'),
	(9, 'TIK', 'tik', '2012-06-11 04:57:27', '2012-06-11 04:57:27'),
	(10, 'Sosiologi', 'sosiologi', '2012-06-11 04:57:38', '2012-06-11 04:57:38'),
	(11, 'Sejarah', 'sejarah', '2012-06-11 04:58:09', '2012-06-11 04:58:09'),
	(12, 'Geografi', 'geografi', '2012-06-11 04:58:20', '2012-06-11 04:58:20'),
	(13, 'Ekonomi', 'ekonomi', '2012-06-11 04:58:27', '2012-06-11 04:58:27'),
	(14, 'Peta Indonesia Interaktif', 'peta', '2012-06-11 04:58:44', '2012-06-11 04:58:44'),
	(15, 'Umum', 'Umum', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `pelajarans` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.pengumumans
CREATE TABLE IF NOT EXISTS `pengumumans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scope` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(15) NOT NULL,
  `file` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `mimetype` varchar(255) NOT NULL,
  `filesize` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `expiration_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.pengumumans: 0 rows
DELETE FROM `pengumumans`;
/*!40000 ALTER TABLE `pengumumans` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengumumans` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(32) DEFAULT NULL,
  `status` tinyint(2) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `license_key` varchar(100) DEFAULT NULL,
  `val_sync` varchar(100) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping structure for table elearn_sma.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quizz_id` int(32) NOT NULL,
  `question` text NOT NULL,
  `tipe` tinyint(2) NOT NULL,
  `level` int(3) NOT NULL,
  `kelas` int(3) NOT NULL,
  `pelajaran_id` int(11) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `target` tinyint(2) NOT NULL,
  `point_nilai` int(11) DEFAULT NULL,
  `answer2` text,
  `answer_a` text NOT NULL,
  `answer_b` text NOT NULL,
  `answer_c` text NOT NULL,
  `answer_d` text NOT NULL,
  `answer_true` tinyint(2) NOT NULL,
  `images` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.questions: 0 rows
DELETE FROM `questions`;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.quizzs
CREATE TABLE IF NOT EXISTS `quizzs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) NOT NULL,
  `user_id` int(32) NOT NULL,
  `title` mediumtext NOT NULL,
  `pelajaran_id` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `time` varchar(32) DEFAULT NULL,
  `details` text NOT NULL,
  `published` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.quizzs: 0 rows
DELETE FROM `quizzs`;
/*!40000 ALTER TABLE `quizzs` DISABLE KEYS */;
/*!40000 ALTER TABLE `quizzs` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.quizzs_questions
CREATE TABLE IF NOT EXISTS `quizzs_questions` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `quizz_id` bigint(50) unsigned NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.quizzs_questions: 0 rows
DELETE FROM `quizzs_questions`;
/*!40000 ALTER TABLE `quizzs_questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `quizzs_questions` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.quizz_points
CREATE TABLE IF NOT EXISTS `quizz_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `siswa` bigint(30) NOT NULL,
  `points` text NOT NULL,
  `details` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `quizz_id` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.quizz_points: 0 rows
DELETE FROM `quizz_points`;
/*!40000 ALTER TABLE `quizz_points` DISABLE KEYS */;
/*!40000 ALTER TABLE `quizz_points` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.subjects
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `name` varchar(400) DEFAULT NULL,
  `grade` int(2) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `grade_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `pelajaran_id` smallint(11) DEFAULT NULL,
  `filetype` varchar(1) DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `folder_name` varchar(255) NOT NULL,
  `icon` varchar(500) NOT NULL,
  `comments` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=234 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.subjects: 36 rows
DELETE FROM `subjects`;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` (`id`, `name`, `grade`, `type`, `grade_id`, `vendor_id`, `pelajaran_id`, `filetype`, `file_name`, `folder_name`, `icon`, `comments`, `created`, `modified`) VALUES
	(112, 'Jawa', 0, 2, 13, 1, 14, '0', 'jawa.swf', 'pembelajaran/ensiklopedia/112/', 'img/Screen_Shot_2014-05-10_at_5.29.12_AM.png', '', '2014-05-10 05:33:03', '2014-05-10 05:33:17'),
	(111, 'Sumatera', 0, 2, 13, 1, 14, '0', 'sumatera.swf', 'pembelajaran/ensiklopedia/111/', 'img/Screen_Shot_2014-05-10_at_5.15.07_AM.png', '', '2014-05-10 05:26:51', '2014-05-10 05:27:28'),
	(113, 'Bali Nusa', 0, 2, 13, 1, 14, '0', 'bali-nusa.swf', 'pembelajaran/ensiklopedia/113/', 'img/Screen_Shot_2014-05-10_at_5.35.10_AM.png', '', '2014-05-10 05:36:24', '2014-05-10 05:36:28'),
	(114, 'Sulawesi', 0, 2, 13, 1, 14, '0', 'sulawesi.swf', 'pembelajaran/ensiklopedia/114/', 'img/Screen_Shot_2014-05-10_at_5.38.22_AM.png', '', '2014-05-10 05:38:45', '2014-05-10 05:38:47'),
	(115, 'Papua', 0, 2, 13, 1, 14, '0', 'papua.swf', 'pembelajaran/ensiklopedia/115/', 'img/Screen_Shot_2014-05-10_at_5.39.20_AM.png', '', '2014-05-10 05:42:12', '2014-05-10 05:42:18'),
	(170, 'Elektronika', 0, 2, 13, NULL, 15, '0', 'INDEX.swf', 'pembelajaran/ensiklopedia/170/', 'img/2014-11-29-143652elektronika.jpg', '', '2014-11-29 14:36:52', '2014-11-29 14:36:57'),
	(171, 'Geologi', 0, 2, 13, NULL, 15, '0', 'intro_geologi.swf', 'pembelajaran/ensiklopedia/171/', 'img/geologi.jpg', '', '2014-11-29 21:45:52', '2014-11-29 21:45:57'),
	(173, 'Hewan', 0, 2, 13, NULL, 15, '0', 'INDEX.swf', 'pembelajaran/ensiklopedia/173/', 'img/2014-11-29-145808hewan.jpg', '', '2014-11-29 14:58:08', '2014-11-29 14:58:10'),
	(174, 'Tubuh Manusia', 0, 2, 13, NULL, 15, '0', 'intro_tubuh_manusia.swf', 'pembelajaran/ensiklopedia/174/', 'img/tubuh_manusia.jpg', '', '2014-11-29 22:04:06', '2014-11-29 22:04:13'),
	(201, 'Biologi 1', 0, 1, 10, 0, 3, '0', 'index.swf', 'pembelajaran/201/', 'img/Biologi kelas 10.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(202, 'Biologi 2', 0, 1, 11, 0, 3, '0', 'index.swf', 'pembelajaran/202/', 'img/Biologi kelas 11.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(203, 'Biologi 3', 0, 1, 12, 0, 3, '0', 'index.swf', 'pembelajaran/203/', 'img/Biologi kelas 12.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(204, 'Ekonomi 1', 0, 1, 10, 0, 13, '0', 'index.swf', 'pembelajaran/204/', 'img/Ekonomi kelas 10.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(205, 'Ekonomi 2', 0, 1, 11, 0, 13, '0', 'index.swf', 'pembelajaran/205/', 'img/Ekonomi kelas 11.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(206, 'Ekonomi 3', 0, 1, 12, 0, 13, '0', 'index.swf', 'pembelajaran/206/', 'img/Ekonomi kelas 12.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(207, 'Fisika 1', 0, 1, 10, 0, 2, '0', 'index.swf', 'pembelajaran/207/', 'img/Fisika kelas 10.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(208, 'Fisika 2', 0, 1, 11, 0, 2, '0', 'index.swf', 'pembelajaran/208/', 'img/Fisika kelas 11.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(209, 'Fisika 3', 0, 1, 12, 0, 2, '0', 'index.swf', 'pembelajaran/209/', 'img/Fisika kelas 12.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(210, 'Geografi 1', 0, 1, 10, 0, 12, '0', 'index.swf', 'pembelajaran/210/', 'img/Geografi kelas 10.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(211, 'Geografi 2', 0, 1, 11, 0, 12, '0', 'index.swf', 'pembelajaran/211/', 'img/Geografi kelas 11.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(212, 'Geografi 3', 0, 1, 12, 0, 12, '0', 'index.swf', 'pembelajaran/212/', 'img/Geografi kelas 12.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(213, 'Kimia 1', 0, 1, 10, 0, 8, '0', 'index.swf', 'pembelajaran/213/', 'img/Kimia kelas 10.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(214, 'Kimia 2', 0, 1, 11, 0, 8, '0', 'index.swf', 'pembelajaran/214/', 'img/Kimia kelas 11.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(215, 'Kimia 3', 0, 1, 12, 0, 8, '0', 'index.swf', 'pembelajaran/215/', 'img/Kimia kelas 12.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(216, 'Matematika 1', 0, 1, 10, 0, 1, '0', 'index.swf', 'pembelajaran/216/', 'img/Matematika kelas 10.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(217, 'Matematika 2', 0, 1, 11, 0, 1, '0', 'index.swf', 'pembelajaran/217/', 'img/Matematika kelas 11.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(218, 'Matematika 3', 0, 1, 12, 0, 1, '0', 'index.swf', 'pembelajaran/218/', 'img/Matematika kelas 12.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(219, 'Sejarah 1', 0, 1, 10, 0, 11, '0', 'index.swf', 'pembelajaran/219/', 'img/Sejarah kelas 10.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(220, 'Sejarah 2', 0, 1, 11, 0, 11, '0', 'index.swf', 'pembelajaran/220/', 'img/Sejarah kelas 11.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(221, 'Sejarah 3', 0, 1, 12, 0, 11, '0', 'index.swf', 'pembelajaran/221/', 'img/Sejarah kelas 12.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(222, 'Sosiologi 1', 0, 1, 10, 0, 10, '0', 'index.swf', 'pembelajaran/222/', 'img/Sosiologi kelas 10.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(223, 'Sosiologi 2', 0, 1, 11, 0, 10, '0', 'index.swf', 'pembelajaran/223/', 'img/Sosiologi kelas 11.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(224, 'Sosiologi 3', 0, 1, 12, 0, 10, '0', 'index.swf', 'pembelajaran/224/', 'img/Sosiologi kelas 12.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(225, 'TIK 1', 0, 1, 10, 0, 9, '0', 'index.swf', 'pembelajaran/225/', 'img/TIK kelas 10.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(226, 'TIK 2', 0, 1, 11, 0, 9, '0', 'index.swf', 'pembelajaran/226/', 'img/TIK kelas 11.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13'),
	(227, 'TIK 3', 0, 1, 12, 0, 9, '0', 'index.swf', 'pembelajaran/227/', 'img/TIK kelas 12.jpg', '', '2014-05-10 03:37:13', '2014-05-10 03:37:13');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.tugas
CREATE TABLE IF NOT EXISTS `tugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` int(11) NOT NULL,
  `pelajaran_id` int(11) NOT NULL,
  `author` int(30) NOT NULL,
  `tahun_ajaran_id` int(11) NOT NULL,
  `semester` tinyint(2) NOT NULL,
  `title` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `start_date` datetime NOT NULL,
  `expiration_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.tugas: 1 rows
DELETE FROM `tugas`;
/*!40000 ALTER TABLE `tugas` DISABLE KEYS */;
INSERT INTO `tugas` (`id`, `kelas`, `pelajaran_id`, `author`, `tahun_ajaran_id`, `semester`, `title`, `content`, `start_date`, `expiration_date`) VALUES
	(28, 1, 1, 1, 1, 1, 'ini tugas kelas 1', 'Ini deskripsi tugas saya', '2014-11-28 05:50:00', '2014-11-30 05:50:00');
/*!40000 ALTER TABLE `tugas` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.uraian_answers
CREATE TABLE IF NOT EXISTS `uraian_answers` (
  `id` bigint(60) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(40) NOT NULL,
  `question_id` bigint(40) NOT NULL,
  `quizz_id` bigint(40) NOT NULL,
  `jawaban_uraian` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.uraian_answers: 0 rows
DELETE FROM `uraian_answers`;
/*!40000 ALTER TABLE `uraian_answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `uraian_answers` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `kelas` int(11) DEFAULT NULL,
  `sex` tinyint(1) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `signature` varchar(255) NOT NULL,
  `locale` varchar(3) NOT NULL DEFAULT 'eng',
  `timezone` varchar(4) NOT NULL DEFAULT '-8',
  `totalPosts` int(10) NOT NULL,
  `totalTopics` int(10) NOT NULL,
  `currentLogin` datetime DEFAULT NULL,
  `lastLogin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.users: 6 rows
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `nama`, `kelas`, `sex`, `group_id`, `created`, `modified`, `status`, `signature`, `locale`, `timezone`, `totalPosts`, `totalTopics`, `currentLogin`, `lastLogin`) VALUES
	(1, 'admin', '0d1a6e7162122a6f7bdde78121bd310dfde7ace4', 'Admin', 0, 0, 1, '2010-11-18 15:51:40', '2012-08-14 05:00:09', 0, '', 'ind', '+7', 0, 0, '2012-08-14 05:00:09', '2012-08-09 02:41:37'),
	(2, '034801341', 'dfffa0d5c5b6d57c350c7253b4739f822c126033', 'Suparno', 0, 0, 1, '2010-11-18 16:04:44', '2010-12-23 03:56:34', 0, '', 'eng', '-8', 0, 0, NULL, NULL),
	(12, '101125173610', '3c31b20a3fcd1e6ac0ae84274503fe3d5c0df43d', 'Taufiq Ridha', 2, 0, 3, '2010-12-19 03:32:31', '2011-08-29 02:58:15', 0, '', 'eng', '-8', 0, 0, NULL, NULL),
	(4, 'yuna', 'f9d26f0f8471254ef948f2af524913a56a0f4cea', 'Anonk', NULL, 0, 2, '2010-11-26 17:58:03', '2012-06-11 05:56:31', 0, '', 'eng', '-8', 0, 0, NULL, NULL),
	(17, 'raffa', 'e518f180f6a904f40cd21a44be1e9fed5c028ff6', 'Raffa', 2, 1, 2, '2011-11-28 10:01:02', '2011-11-28 10:01:02', 0, '', 'eng', '-8', 0, 0, NULL, NULL),
	(18, 'siswa', '8621e8e8c3569bd931f585c0b47298b340133951', 'Sample Siswa', 1, 1, 3, '2011-12-06 20:04:35', '2012-06-29 06:03:43', 0, '', 'eng', '-8', 0, 0, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.user_messages
CREATE TABLE IF NOT EXISTS `user_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `from` bigint(30) NOT NULL,
  `to` bigint(30) NOT NULL,
  `subject` varchar(300) DEFAULT NULL,
  `message` text NOT NULL,
  `sent` int(1) NOT NULL DEFAULT '0',
  `read` varchar(1) NOT NULL DEFAULT '0',
  `file` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `mimetype` varchar(255) NOT NULL,
  `filesize` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.user_messages: 14 rows
DELETE FROM `user_messages`;
/*!40000 ALTER TABLE `user_messages` DISABLE KEYS */;
INSERT INTO `user_messages` (`id`, `from`, `to`, `subject`, `message`, `sent`, `read`, `file`, `dir`, `mimetype`, `filesize`, `created`, `modified`) VALUES
	(117, 1, 18, 'kesini', '', 1, '0', '', '', '', '', '2014-05-16 14:35:45', '2014-05-16 14:35:45'),
	(116, 1, 18, 're:re:Ini email baru', 'oke', 1, '0', '', '', '', '', '2014-05-16 14:34:54', '2014-05-16 14:34:54'),
	(115, 0, 0, NULL, '', 0, '1', '', '', '', '', '2014-05-16 02:02:43', '2014-05-16 02:02:43'),
	(114, 0, 0, NULL, '', 0, '1', '', '', '', '', '2014-05-16 02:02:42', '2014-05-16 02:02:42'),
	(111, 0, 0, NULL, '', 0, '1', '', '', '', '', '2014-05-16 02:02:20', '2014-05-16 02:02:20'),
	(112, 0, 0, NULL, '', 0, '1', '', '', '', '', '2014-05-16 02:02:21', '2014-05-16 02:02:21'),
	(113, 18, 1, 're:Ini email baru', 'Baik Pak<br />\r\nTerima kasih', 1, '1', '', '', '', '', '2014-05-16 02:02:28', '2014-05-16 02:02:41'),
	(110, 1, 18, 'Ini email baru', 'email baru ya uut', 1, '1', '', '', '', '', '2014-05-16 02:01:06', '2014-05-16 02:02:17'),
	(106, 0, 0, NULL, '', 0, '1', '', '', '', '', '2014-03-26 01:57:39', '2014-03-26 01:57:39'),
	(107, 0, 0, NULL, '', 0, '1', '', '', '', '', '2014-03-26 01:57:40', '2014-03-26 01:57:40'),
	(108, 0, 0, NULL, '', 0, '1', '', '', '', '', '2014-03-26 01:58:51', '2014-03-26 01:58:51'),
	(109, 0, 0, NULL, '', 0, '1', '', '', '', '', '2014-03-26 01:58:52', '2014-03-26 01:58:52'),
	(105, 18, 1, 'Dengan attachement', 'Dengan attach file', 1, '1', 'FORM_BOS_2.xlsx', 'mail-attachment', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', '30382', '2014-03-26 01:57:18', '2014-03-26 01:58:50'),
	(118, 1, 12, 'Halllo Taufiq Ridha', 'Hallo taufiq ridha', 1, '0', '6309906627_b5706c42e4_b.jpg', 'mail-attachment', 'image/jpeg', '725945', '2014-11-28 06:19:55', '2014-11-28 06:19:55');
/*!40000 ALTER TABLE `user_messages` ENABLE KEYS */;


-- Dumping structure for table elearn_sma.vendors
CREATE TABLE IF NOT EXISTS `vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table elearn_sma.vendors: 0 rows
DELETE FROM `vendors`;
/*!40000 ALTER TABLE `vendors` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendors` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
