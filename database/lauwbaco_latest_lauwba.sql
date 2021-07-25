-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 05:02 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lauwbaco_latest_lauwba`
--
CREATE DATABASE IF NOT EXISTS `lauwbaco_latest_lauwba` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `lauwbaco_latest_lauwba`;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `id_tutor` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `descriptions` text COLLATE latin1_general_ci NOT NULL,
  `tentang` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `colors` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `telepon` char(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `kebangsaan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ttl` date NOT NULL,
  `gender` enum('Male','Female') COLLATE latin1_general_ci NOT NULL,
  `education` longtext COLLATE latin1_general_ci NOT NULL,
  `skill` longtext COLLATE latin1_general_ci NOT NULL,
  `project` longtext COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_tutor`)
) ENGINE=MyISAM AUTO_INCREMENT=169 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id_tutor`, `nama`, `descriptions`, `tentang`, `gambar`, `username`, `colors`, `alamat`, `telepon`, `email`, `kebangsaan`, `ttl`, `gender`, `education`, `skill`, `project`) VALUES
(16, 'Kuntadi, SP', '', '<p>CS &amp;&nbsp;dministration</p>', 'Febriani_riwis_sari_s_kom_trainer_lauwba_copy.jpg', 'adijaya23', '#b71c1c', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(12, 'Siti Zulaiha, S.Kom.', '', '<p>Fr. Trainer &amp; Developer WEB</p>\r\n', 'siti_zulaiha_s_kom_trainer_lauwba1.jpg', 'sitizulaiha411', '#880E4F', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(17, 'M. Arief Firdaus, M.Kom.', '', '<p>Fr. Senior Programmer &amp; Trainer Web &amp; Mobile Apps</p>\r\n', 'm_arief_firdaus_m_kom_trainer_lauwba_techno.jpg', '', '#311B92', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(2, 'Dhimas Adi Satria, S.Kom, M.Kom.', '', '<p>Fr. Trainer Design Grafis &amp; Video Editing</p>\r\n', 'dhimas_adi_satria_m_kom_lauwba.png', 'dhiems', '#1A237E', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(15, 'Arlianti, S.T.,M.Kom.', '', '<p>Fr. Trainer Web Dev. Mksr</p>', 'arliyanti_Nurdin_m_kom_trainer_lauwba.jpg', '', '#0D47A1', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(19, 'Ariesna, S.Si', '', '<p><span>Chief Financial Officer</span></p>', 'ariesna_s_si_trainer_lauwba.jpg', '', '#01579B', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(8, 'Zelvia Olga Maharani, A.Md', '', '<p>IT Trainer &amp;&nbsp; Dev.</p>\r\n', 'almuwahid_s_kom_trainer_lauwba.jpg', 'zelviaolga78', '#006064', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(7, 'Dhyto Abubakar', '', '<p>Fr. Trainer Android Dev. Mksr</p>', 'fordhydo_abubakar_trainer_lauwba.jpg', '', '#004D40', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(3, 'Yudha Pedyanto', '', '<p>Fr. Senior Programmer &amp; Trainer Mobile Apps</p>\r\n', 'suhudi_s_kom_trainer_lauwba.jpg', '', '#1B5E20', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(6, 'Erwin Aji Nugroho', '', '<p>Fr. IT Trainer &amp; Developer Mobile Apps</p>\r\n', 'erwin-aji-nugroho.jpg', '', '#33691E', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(18, 'Sigit Suryono, M.Kom.', '', '<p>Chief Operation Officer</p>\r\n', 'sigit_suryono_s_kom_m_kom_trainer_lauwba.jpg', 'sigitsuryono25', '#263238', '', '', '', '', '0000-00-00', 'Male', '[{\"qualification\":\"d\",\"principal_studies\":\"123\",\"institution\":\"123\",\"year\":\"12345\"}]', '', '[{\"project\":\"a\",\"institution\":\"d\",\"platform\":\"a\",\"year\":\"1234\",\"url\":\"http:\\/\\/ss.com\"}]'),
(14, 'Fauzan Arif', '', '<p>Fr. Trainer Android &amp; Flutter</p>\r\n', 'fauzan-arif.png', '', '#F57F17', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(9, 'Agus Kurniadin Khaer', '', 'Trainer Mobile Apps', 'FB_IMG_1603720192934.jpg', 'aguskhaer90', '#827717', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(11, 'Annisa Lathifah', '', 'Instruktur TF', 'annisa-lathifah.jpg', '', '', '', '', '', '', '0000-00-00', 'Male', '', '', ''),
(20, 'Hardiansah, M.Kom.', '', 'President Direktor', 'hardiansah.jpg', 'hardiansah123', '', '', '', '', '', '0000-00-00', 'Male', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
