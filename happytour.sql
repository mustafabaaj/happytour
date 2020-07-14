-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2020 at 12:08 AM
-- Server version: 8.0.18
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happytour`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps_countries`
--

CREATE TABLE `apps_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apps_countries`
--

INSERT INTO `apps_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `cerinte`
--

CREATE TABLE `cerinte` (
  `id_tipCalatorie` int(11) NOT NULL,
  `tipCerinte` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cerinte`
--

INSERT INTO `cerinte` (`id_tipCalatorie`, `tipCerinte`) VALUES
(2, 'dgfhgfh'),
(3, 'Pachet sosire + visa'),
(4, 'visa + zbor'),
(5, 'Pachet sosire'),
(6, 'zbor'),
(7, 'visa'),
(8, 'Group');

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `id` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `cnp` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nume` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenume` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numer_telefon` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `oras` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zi_nastere` datetime NOT NULL,
  `apartament` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `localitate` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `strada` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cod_postal` int(50) NOT NULL,
  `numar_pasaport` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numarVisa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_inregistrare` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`id`, `id_agent`, `cnp`, `nume`, `prenume`, `email`, `numer_telefon`, `oras`, `zi_nastere`, `apartament`, `localitate`, `strada`, `cod_postal`, `numar_pasaport`, `numarVisa`, `gender`, `data_inregistrare`) VALUES
(8, 1, '19806254302312', '5ara', 'cozam', 'mustafa.baaj1998@gmail.com', '213123 ', 'asdasd', '2020-05-14 00:00:00', '25', 'Romania', 'matei basarab', 0, '253235', '124214', 'female', '2020-07-01 00:00:00'),
(10, 5, '1990321410089', 'asdasdasd', 'asdasdasdasd', 'unknow@gmail.com', '0767543413 ', 'Bucuresti', '2020-00-00 00:00:00', '11', 'Bucharest', 'Baiculesti 21', 13192, '100923', '238299', 'male', '2020-01-01 00:00:00'),
(11, 8, '19806231231', 'ja7sh', 'Mustafa', 'mustafa.baaj@softvision.com', '1231 ', 'bucuresti', '2020-05-14 00:00:00', '25', 'bucuresti', 'matei basarab', 0, '213123', '1232', 'male', '2020-07-14 00:00:00'),
(12, 8, '198031231312', 'Baaj', 'Mustafa', 'mustafa.baaj@softvision.com', '21312 ', '3', '1997-03-26 00:00:00', '25', 'bucuresti', 'asdasdadasd', 0, '123123', '31231', 'male', '2020-01-14 00:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
  `numeAgent` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numarMembri` int(11) NOT NULL,
  `numarZile` int(11) NOT NULL,
  `tipcerinte` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipCaltorie` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipPachet` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stare` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zbor` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `visa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `asigurare` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pachetSosire` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `destinatie` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comentariu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastUpdate` date NOT NULL,
  `dataPlecare` date NOT NULL,
  `dataSosire` date NOT NULL,
  `pozaPasaport` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avans` int(11) NOT NULL,
  `totalPlata` int(11) NOT NULL,
  `numarFamilie` int(11) NOT NULL,
  `numarPersoane` int(11) NOT NULL,
  `adulti` int(11) NOT NULL,
  `copii` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `factura`
--

INSERT INTO `factura` (`id`, `numeAgent`, `numarMembri`, `numarZile`, `tipcerinte`, `tipCaltorie`, `tipPachet`, `stare`, `zbor`, `visa`, `asigurare`, `pachetSosire`, `destinatie`, `comentariu`, `lastUpdate`, `dataPlecare`, `dataSosire`, `pozaPasaport`, `avans`, `totalPlata`, `numarFamilie`, `numarPersoane`, `adulti`, `copii`) VALUES
(1, 'andreea', 3, 12, 'Pachet sosire + zbor + visa', 'Avion', 'Family pack ', 'Ne platit', 'Zbor ', 'Visa', 'Asigurare', 'Pachet sosire', 'Albania', 'asdasdasd', '2020-05-14', '2020-05-14', '2021-06-01', '89488618_2667927523319968_9062663779501735936_n.jpg ', 500, 12121, 11, 111, 123, 12),
(2, 'Dragos', 2, 7, 'Pachet sosire + zbor + visa', 'Avion', 'Relationship pack ', 'platit', 'Zbor ', 'Visa', 'Asigurare', 'Pachet sosire', 'Albania', 'asdasdasd', '2020-05-14', '2020-05-14', '2021-06-01', '89488618_2667927523319968_9062663779501735936_n.jpg ', 500, 2300, 1, 2, 2, 0),
(3, 'asdasd', 1, 2, 'asdasd', 'asdasd', 'asdads', 'asd', 'asdasd', 'asdasd', 'asd', 'asdsa', 'asda', 'asda', '2020-07-01', '2020-07-09', '2020-08-20', 'asdasd', 1, 50012301, 1, 1, 1, 1),
(4, 'asdasd', 1, 2, 'asdasd', 'asdasd', 'asdads', 'asd', 'asdasd', 'asdasd', 'asd', 'asdsa', 'asda', 'asda', '2020-07-01', '2020-07-09', '2020-08-20', 'asdasd', 1, 1, 1, 1, 1, 1),
(5, 'mustafa', 3, 3, 'Pachet sosire + zbor + visa', 'Avion', 'Family pack ', 'Confirmat', 'Zbor ', 'Visa', 'Asigurare', 'Pachet sosire', 'Austria', 'asdasdasd', '2020-05-14', '2020-05-14', '2020-07-01', '1361577a1614de6d4.jpg ', 123, 1000, 11, 12, 12, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tipcalatorie`
--

CREATE TABLE `tipcalatorie` (
  `id_tipCalatorie` int(11) NOT NULL,
  `tipCalatorie` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tipcalatorie`
--

INSERT INTO `tipcalatorie` (`id_tipCalatorie`, `tipCalatorie`) VALUES
(6, 'asd'),
(7, 'mustafa'),
(8, 'f16'),
(9, 'dsada'),
(10, 'yhkhjk'),
(11, 'AFASDA'),
(12, 'FDSGDFGD');

-- --------------------------------------------------------

--
-- Table structure for table `total_user`
--

CREATE TABLE `total_user` (
  `id` int(11) NOT NULL,
  `months` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `total` int(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `total_user`
--

INSERT INTO `total_user` (`id`, `months`, `total`, `create_date`) VALUES
(1, 'Jan', 20, '2020-05-15 01:55:34'),
(2, 'Feb', 50, '2020-05-15 01:55:34'),
(3, 'MAR', 100, '2020-05-15 02:05:36'),
(4, 'Apr', 20, '2020-05-15 02:05:36'),
(5, 'May', 90, '2020-05-15 02:05:36'),
(6, 'Jun', 123, '2020-05-15 02:05:36'),
(7, 'Jul', 134, '2020-05-15 02:05:36'),
(8, 'Aug', 24, '2020-05-15 02:05:36'),
(9, 'Sept', 412, '2020-05-15 02:05:36'),
(10, 'Oct', 45, '2020-05-15 02:05:36'),
(11, 'Nov', 55, '2020-05-15 02:05:36'),
(12, 'Dec', 500, '2020-05-15 02:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `create_at`) VALUES
(6, 'asd', '$2y$10$sEJpQnELWr4DkpDsYhaZ1usUNCL78yMHm.g6BQ9w7i9Cd0oLALs3C', '2020-01-26 20:52:44'),
(7, 'abdo', '$2y$10$giCiIUMjB3a3jsscO8zq7uZFGPWqhH3QdiuobTAZCgBWMCCsMfyy.', '2020-06-30 15:40:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps_countries`
--
ALTER TABLE `apps_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cerinte`
--
ALTER TABLE `cerinte`
  ADD PRIMARY KEY (`id_tipCalatorie`);

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agent` (`id_agent`);

--
-- Indexes for table `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipcalatorie`
--
ALTER TABLE `tipcalatorie`
  ADD PRIMARY KEY (`id_tipCalatorie`);

--
-- Indexes for table `total_user`
--
ALTER TABLE `total_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `total` (`total`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps_countries`
--
ALTER TABLE `apps_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `cerinte`
--
ALTER TABLE `cerinte`
  MODIFY `id_tipCalatorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tipcalatorie`
--
ALTER TABLE `tipcalatorie`
  MODIFY `id_tipCalatorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `total_user`
--
ALTER TABLE `total_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
