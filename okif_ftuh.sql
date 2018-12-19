-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 03:41 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `okif_ftuh`
--

-- --------------------------------------------------------

--
-- Table structure for table `hmif`
--

CREATE TABLE IF NOT EXISTS `hmif` (
  `id_hmif` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hmif` varchar(50) NOT NULL,
  `nim_hmif` varchar(10) NOT NULL,
  `jabatan_hmif` varchar(50) NOT NULL,
  `foto_hmif` varchar(200) NOT NULL,
  PRIMARY KEY (`id_hmif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hmif`
--

INSERT INTO `hmif` (`id_hmif`, `nama_hmif`, `nim_hmif`, `jabatan_hmif`, `foto_hmif`) VALUES
(1, 'Bayazid Sustami M. N', 'D42115501', 'Ketua Umum HMIF FT-UH', '894c459b5886fd44b6dfbdfe452c7a0a.png'),
(2, 'Zulkifli', 'D42115701', 'Sekertaris Umum HMIF FT-UH', '0cbe978a9550d426671526bf259ba117.png'),
(3, 'Cici Purnamasari', 'D42116314', 'Bendahara Umum HMIF FT-UH', '719c9c36b75230266ac93331325937f7.png'),
(5, 'Muh. Raedi Radifan', 'D42116314', 'Koordinator Kompartemen Kesekretariatan', 'f7be0c7d58f28accab036d1646ae1ad9.png'),
(6, 'Muh. Fathin Abdillah', 'D42116017', 'Koordinator Kompartemen Pengabdian Masyarakat', 'd9ec0372e0b62bd85b4ecabc1ae2fdea.png');

-- --------------------------------------------------------

--
-- Table structure for table `infokom`
--

CREATE TABLE IF NOT EXISTS `infokom` (
  `id_hmif` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hmif` varchar(50) NOT NULL,
  `nim_hmif` varchar(10) NOT NULL,
  PRIMARY KEY (`id_hmif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `infokom`
--

INSERT INTO `infokom` (`id_hmif`, `nama_hmif`, `nim_hmif`) VALUES
(1, 'Asri Oktianawati', 'D42116503');

-- --------------------------------------------------------

--
-- Table structure for table `kesek`
--

CREATE TABLE IF NOT EXISTS `kesek` (
  `id_hmif` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hmif` varchar(50) NOT NULL,
  `nim_hmif` varchar(10) NOT NULL,
  PRIMARY KEY (`id_hmif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kesek`
--

INSERT INTO `kesek` (`id_hmif`, `nama_hmif`, `nim_hmif`) VALUES
(1, 'Tuti Amalia', 'D42116014');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `id_hmif` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hmif` varchar(50) NOT NULL,
  `nim_hmif` varchar(10) NOT NULL,
  PRIMARY KEY (`id_hmif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_hmif`, `nama_hmif`, `nim_hmif`) VALUES
(1, 'Ayu Lestari Ramadani', 'D42116005'),
(2, 'Astuti Mayangsari', 'D42116003'),
(3, 'Ibnu Gaury', 'D42116009');

-- --------------------------------------------------------

--
-- Table structure for table `pengmas`
--

CREATE TABLE IF NOT EXISTS `pengmas` (
  `id_hmif` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hmif` varchar(50) NOT NULL,
  `nim_hmif` varchar(10) NOT NULL,
  PRIMARY KEY (`id_hmif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengmas`
--

INSERT INTO `pengmas` (`id_hmif`, `nama_hmif`, `nim_hmif`) VALUES
(1, 'Rizky Alfiansyah', 'D42116007');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE IF NOT EXISTS `proker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  `kompartemen` varchar(50) NOT NULL,
  `detail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id`, `judul`, `jadwal`, `kompartemen`, `detail`) VALUES
(1, 'Lokakarya Administrasi', 'Juli', 'Kesekretariatan', 'Mengkaji pedoman dasar administrasi'),
(2, 'Kegiatan Skala Nasional', 'September-November', 'Pendidikan', 'Membentuk wadah pengembangan dan pengaplikasian di'),
(3, 'Bakti Sosial', 'Oktober-November', 'Pengabdian Mansyarakat', 'Sebagai salah satu bentuk pelaksanaan tridharma pe'),
(4, 'Informatics TV', 'September', 'Informasi dan Komunikasi', 'Memperkenalkan OKIF FT-UH ');

-- --------------------------------------------------------

--
-- Table structure for table `psdm`
--

CREATE TABLE IF NOT EXISTS `psdm` (
  `id_hmif` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hmif` varchar(50) NOT NULL,
  `nim_hmif` varchar(10) NOT NULL,
  PRIMARY KEY (`id_hmif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `psdm`
--

INSERT INTO `psdm` (`id_hmif`, `nama_hmif`, `nim_hmif`) VALUES
(1, 'Malyana Ariani', 'D42116301');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
