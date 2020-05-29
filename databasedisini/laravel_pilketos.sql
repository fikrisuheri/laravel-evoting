-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2020 at 05:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_pilketos`
--

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `periode` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `updated_at` time DEFAULT NULL,
  `created_at` time DEFAULT NULL,
  `jumlahsuara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id`, `nama`, `visi`, `misi`, `periode`, `foto`, `updated_at`, `created_at`, `jumlahsuara`) VALUES
(9, 'Kandidat A', 'Lorem Ipsum color do si amet Lorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si amet', 'Lorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si amet', 1, '1590765433_download (2).png', NULL, NULL, 1),
(10, 'Kandidat B', 'Lorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si amet', 'Lorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si amet', 1, '1590765458_download (1).jpeg', NULL, NULL, 0),
(11, 'Kandidat C', 'Lorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si amet', 'Lorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si ametLorem Ipsum color do si amet', 1, '1590765491_images.png', NULL, NULL, 1),
(12, 'Kandidat D', 'asssssssssssssssssss', 'saaaaaaaaaaaaaaaaaaaaaa', 1, '1590765576_images.jpeg', '15:21:03', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `id` int(11) NOT NULL,
  `username` varchar(6) NOT NULL,
  `periode` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id`, `username`, `periode`, `status`, `updated_at`, `created_at`) VALUES
(600, '3XS1QI', 1, 1, '2020-05-29', '2020-05-29'),
(601, 'UBU8I3', 1, 1, '2020-05-29', '2020-05-29'),
(602, 'WMDZ73', 1, 2, '2020-05-29', '2020-05-29'),
(603, '377EIU', 1, 2, '2020-05-29', '2020-05-29'),
(604, 'EQA6XN', 1, 1, '2020-05-29', '2020-05-29'),
(605, 'HFZNJ2', 1, 2, '2020-05-29', '2020-05-29'),
(606, 'G4SRDJ', 1, 2, '2020-05-29', '2020-05-29'),
(607, 'R73VCA', 1, 2, '2020-05-29', '2020-05-29'),
(608, '5459JZ', 1, 2, '2020-05-29', '2020-05-29'),
(609, 'E6LPII', 1, 2, '2020-05-29', '2020-05-29'),
(610, 'ZBJ8MM', 1, 2, '2020-05-29', '2020-05-29'),
(611, 'OBL874', 1, 2, '2020-05-29', '2020-05-29'),
(612, '68YMNG', 1, 2, '2020-05-29', '2020-05-29'),
(613, 'W5WKD6', 1, 2, '2020-05-29', '2020-05-29'),
(614, '6MS5SI', 1, 2, '2020-05-29', '2020-05-29'),
(615, 'CMNRT8', 1, 2, '2020-05-29', '2020-05-29'),
(616, 'GDXX12', 1, 2, '2020-05-29', '2020-05-29'),
(617, 'XZ6FWU', 1, 2, '2020-05-29', '2020-05-29'),
(618, 'TSCSLP', 1, 2, '2020-05-29', '2020-05-29'),
(619, '9G62PV', 1, 2, '2020-05-29', '2020-05-29'),
(620, 'XZYZ4E', 1, 2, '2020-05-29', '2020-05-29'),
(621, 'GY6YO7', 1, 2, '2020-05-29', '2020-05-29'),
(622, 'Y0FAQM', 1, 2, '2020-05-29', '2020-05-29'),
(623, 'Y9LCUG', 1, 2, '2020-05-29', '2020-05-29'),
(624, 'LBI2TW', 1, 2, '2020-05-29', '2020-05-29'),
(625, 'U2S4VC', 1, 2, '2020-05-29', '2020-05-29'),
(626, 'Z0PP7E', 1, 2, '2020-05-29', '2020-05-29'),
(627, 'QX0DRU', 1, 2, '2020-05-29', '2020-05-29'),
(628, 'GCOM4I', 1, 2, '2020-05-29', '2020-05-29'),
(629, 'YSZFTP', 1, 2, '2020-05-29', '2020-05-29'),
(630, 'DWHP0C', 1, 2, '2020-05-29', '2020-05-29'),
(631, 'B2A00I', 1, 2, '2020-05-29', '2020-05-29'),
(632, '9TWWYZ', 1, 2, '2020-05-29', '2020-05-29'),
(633, 'BP2Z5L', 1, 2, '2020-05-29', '2020-05-29'),
(634, '8UHOE2', 1, 2, '2020-05-29', '2020-05-29'),
(635, 'BAFDCK', 1, 2, '2020-05-29', '2020-05-29'),
(636, 'LH2D2G', 1, 2, '2020-05-29', '2020-05-29'),
(637, '1YEQRO', 1, 2, '2020-05-29', '2020-05-29'),
(638, 'NDO3SP', 1, 2, '2020-05-29', '2020-05-29'),
(639, 'XIZYLX', 1, 2, '2020-05-29', '2020-05-29'),
(640, 'RW6WCA', 1, 2, '2020-05-29', '2020-05-29'),
(641, '8J4C7D', 1, 2, '2020-05-29', '2020-05-29'),
(642, 'Z4H8F7', 1, 2, '2020-05-29', '2020-05-29'),
(643, '0PCT99', 1, 2, '2020-05-29', '2020-05-29'),
(644, 'UITF3G', 1, 2, '2020-05-29', '2020-05-29'),
(645, 'GW45EY', 1, 2, '2020-05-29', '2020-05-29'),
(646, '14F1NL', 1, 2, '2020-05-29', '2020-05-29'),
(647, 'F8GCA1', 1, 2, '2020-05-29', '2020-05-29'),
(648, '36J98L', 1, 2, '2020-05-29', '2020-05-29'),
(649, 'BF9LG9', 1, 2, '2020-05-29', '2020-05-29'),
(650, 'GEOTK9', 1, 2, '2020-05-29', '2020-05-29'),
(651, 'T6ANRS', 1, 2, '2020-05-29', '2020-05-29'),
(652, '4MYB23', 1, 2, '2020-05-29', '2020-05-29'),
(653, '2WEP6A', 1, 2, '2020-05-29', '2020-05-29'),
(654, '4AG72L', 1, 2, '2020-05-29', '2020-05-29'),
(655, 'KJIP3A', 1, 2, '2020-05-29', '2020-05-29'),
(656, 'VWQSDW', 1, 2, '2020-05-29', '2020-05-29'),
(657, 'FVZVZR', 1, 2, '2020-05-29', '2020-05-29'),
(658, '7E283V', 1, 2, '2020-05-29', '2020-05-29'),
(659, '9AFDCY', 1, 2, '2020-05-29', '2020-05-29'),
(660, 'CRP059', 1, 2, '2020-05-29', '2020-05-29'),
(661, 'VM0PU3', 1, 2, '2020-05-29', '2020-05-29'),
(662, 'D239ID', 1, 2, '2020-05-29', '2020-05-29'),
(663, 'ZETDUJ', 1, 2, '2020-05-29', '2020-05-29'),
(664, '01YDEM', 1, 2, '2020-05-29', '2020-05-29'),
(665, '94M74Y', 1, 2, '2020-05-29', '2020-05-29'),
(666, 'PJXE9W', 1, 2, '2020-05-29', '2020-05-29'),
(667, 'A4XYP8', 1, 2, '2020-05-29', '2020-05-29'),
(668, 'UM79QQ', 1, 2, '2020-05-29', '2020-05-29'),
(669, 'YQBE0M', 1, 2, '2020-05-29', '2020-05-29'),
(670, 'N8GZ7X', 1, 2, '2020-05-29', '2020-05-29'),
(671, '7TWIXP', 1, 2, '2020-05-29', '2020-05-29'),
(672, 'CQVC8D', 1, 2, '2020-05-29', '2020-05-29'),
(673, 'Q7H2FY', 1, 2, '2020-05-29', '2020-05-29'),
(674, '9TSQXD', 1, 2, '2020-05-29', '2020-05-29'),
(675, '7CLIBP', 1, 2, '2020-05-29', '2020-05-29'),
(676, 'F6FI8E', 1, 2, '2020-05-29', '2020-05-29'),
(677, 'K8WHW1', 1, 2, '2020-05-29', '2020-05-29'),
(678, 'QOOJ5C', 1, 2, '2020-05-29', '2020-05-29'),
(679, 'B25YML', 1, 2, '2020-05-29', '2020-05-29'),
(680, '4UBMQE', 1, 2, '2020-05-29', '2020-05-29'),
(681, '5N1YS2', 1, 2, '2020-05-29', '2020-05-29'),
(682, 'AD18IO', 1, 2, '2020-05-29', '2020-05-29'),
(683, '45OXTD', 1, 2, '2020-05-29', '2020-05-29'),
(684, '9UBDTQ', 1, 2, '2020-05-29', '2020-05-29'),
(685, 'A57HXA', 1, 2, '2020-05-29', '2020-05-29'),
(686, 'X6JL1O', 1, 2, '2020-05-29', '2020-05-29'),
(687, 'JWKHGC', 1, 2, '2020-05-29', '2020-05-29'),
(688, 'HKFHLO', 1, 2, '2020-05-29', '2020-05-29'),
(689, '6HM7XW', 1, 2, '2020-05-29', '2020-05-29'),
(690, 'HDGIBJ', 1, 2, '2020-05-29', '2020-05-29'),
(691, 'DO1072', 1, 2, '2020-05-29', '2020-05-29'),
(692, 'CJ9YF3', 1, 2, '2020-05-29', '2020-05-29'),
(693, 'MYYHPA', 1, 2, '2020-05-29', '2020-05-29'),
(694, 'XB281Z', 1, 2, '2020-05-29', '2020-05-29'),
(695, 'JL58XW', 1, 2, '2020-05-29', '2020-05-29'),
(696, '11A7XP', 1, 2, '2020-05-29', '2020-05-29'),
(697, 'FDHT4G', 1, 2, '2020-05-29', '2020-05-29'),
(698, 'FW21EX', 1, 2, '2020-05-29', '2020-05-29'),
(699, '8FSD02', 1, 2, '2020-05-29', '2020-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id` int(11) NOT NULL,
  `periode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `periode`) VALUES
(1, '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `nama`) VALUES
(1, 'Sudah Voting'),
(2, 'Belum Voting');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_yt`
--

CREATE TABLE `tbl_yt` (
  `urlyt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_yt`
--

INSERT INTO `tbl_yt` (`urlyt`) VALUES
('XqRdEeacB-w');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'ff', 'admin@s.com', NULL, '$2y$10$LiPwFGtZf7/jG4H1gbWr8eU.0.2flnkKusgdP/T8fWEsVBvYspmPO', NULL, '2019-05-19 21:00:31', '2019-05-19 21:00:31'),
(3, 'FikriSuheri', 'admin@admin.com', NULL, '$2y$10$Xi3auSUpCoGVYpXPvmoj4uOTYLKsW7WN.celG4hNreMdfHyzwtd0i', NULL, '2019-08-29 00:00:00', NULL),
(4, 'Fikri Suheri', 'admin@gmail.com', NULL, '$2y$10$3webPbBxcjhS5yF0mxafOOEcnoWWUjJewHdX4DITwPcK/x6gYQZWi', NULL, '2020-05-29 08:12:49', '2020-05-29 08:12:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `periode` (`periode`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `periode` (`periode`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=700;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD CONSTRAINT `kandidat_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `periode` (`id`);

--
-- Constraints for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD CONSTRAINT `pemilih_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `periode` (`id`),
  ADD CONSTRAINT `pemilih_ibfk_3` FOREIGN KEY (`status`) REFERENCES `tbl_status` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
