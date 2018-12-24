-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 18 Des 2018 pada 16.58
-- Versi Server: 5.6.11
-- Versi PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `smart_watering_db`
--
CREATE DATABASE IF NOT EXISTS `smart_watering_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `smart_watering_db`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_penyiraman`
--

CREATE TABLE IF NOT EXISTS `jadwal_penyiraman` (
  `id_jadwal` int(3) NOT NULL AUTO_INCREMENT,
  `jadwal_penyiraman` time NOT NULL,
  `taman` varchar(15) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `jadwal_penyiraman`
--

INSERT INTO `jadwal_penyiraman` (`id_jadwal`, `jadwal_penyiraman`, `taman`) VALUES
(2, '08:00:00', 'taman belakang'),
(3, '17:00:00', 'taman depan'),
(4, '07:00:00', 'taman belakang'),
(5, '16:00:00', 'taman depan'),
(6, '09:00:00', 'taman depan'),
(7, '09:00:00', 'taman belakang'),
(8, '22:55:00', 'taman depan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyiraman`
--

CREATE TABLE IF NOT EXISTS `penyiraman` (
  `id_penyiraman` int(3) NOT NULL AUTO_INCREMENT,
  `waktu_mulai` time NOT NULL,
  `waktu_berhenti` time NOT NULL,
  `taman` varchar(15) NOT NULL,
  `status_penyiraman` int(3) NOT NULL,
  PRIMARY KEY (`id_penyiraman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_kelembaban`
--

CREATE TABLE IF NOT EXISTS `status_kelembaban` (
  `id_suhu` int(3) NOT NULL AUTO_INCREMENT,
  `status_suhu` int(2) NOT NULL,
  `taman` varchar(15) NOT NULL,
  PRIMARY KEY (`id_suhu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `akses` enum('Admin','Editor','Author') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `akses`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin'),
(2, 'editor', 'ab41949825606da179db7c89ddcedcc167b64847', 'Editor'),
(3, 'author', 'f64cd8e32f5ac7553c150bd05d6f2252bb73f68d', 'Author');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
