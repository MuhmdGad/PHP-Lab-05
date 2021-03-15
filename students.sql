-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 10:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT current_timestamp(),
  `firstname` char(20) DEFAULT NULL,
  `lastname` char(20) DEFAULT NULL,
  `fullname` char(40) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `address` char(30) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `phone` int(11) UNSIGNED NOT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`id`, `firstname`, `lastname`, `fullname`, `email`, `address`, `gender`, `phone`, `password`) VALUES
(1, 'Abdullah', 'Ahmed', 'Abdullah Ahmed Sanad', 'AbdullahAhmedSanad@gmail.com', 'Luxor', 'Male', 10022393, '163'),
(2, 'Ahmed', 'Mohamed', 'Ahmed Abdallah Mohamed', 'AhmedAbdallahMohamed@yahoo.com', 'Mansoura', 'Male', 10028339, '166'),
(3, 'Ahmed', 'Salem', 'Ahmed Elbaiomy Mahmoud Salem', 'AhmedElbaiomyMahmoud Salem@hotmail.com', 'Tanta', 'Male', 10006873, '166'),
(4, 'Ahmed', 'Behery', 'Ahmed Mahmoud Behery', 'AhmedMahmoudBehery@yahoo.com', 'Mansoura', 'Male', 10025520, '166'),
(5, 'Alaa', 'Elbehery', 'Alaa Mohammed Mohammed Elbehery', 'AlaaMohammedMohammedElbehery@gmail.com', 'Luxor', 'Female', 10003019, '166'),
(6, 'Ali', 'Hassan', 'Ali Ebrahim Abdelaziz Hassan', 'AliEbrahimAbdelazizHassan@outlook.com', 'Luxor', 'Male', 10007681, '166'),
(7, 'Alshaymaa', 'Hawass', 'Alshaymaa Ebrahim Ebrahim Hawass', 'AlshaymaaEbrahimHawass@outlook.com', 'Ismailia', 'Female', 10028726, '166'),
(8, 'Alshimaa', 'Ibrahim', 'Alshimaa Safwat Ibrahim', 'AlshimaaSafwatIbrahim@yahoo.com', 'Tanta', 'Female', 10026642, '166'),
(9, 'asmaa', 'elalfy', 'asmaa younis elsaqa elalfy', 'asmaayounis elsaqa elalfy@yahoo.com', 'Tanta', 'Male', 10007662, '166'),
(10, 'Assem', 'Hassan', 'Assem Gamal Mohamed Ali Hassan', 'AssemGamalMohamedAliHassan@yahoo.com', 'Tanta', 'Male', 10025788, '166'),
(11, 'Aya', 'Ibrahim', 'Aya Maher Ali Ibrahim', 'AyaMaherAliIbrahim@outlook.com', 'Tanta', 'Female', 10000999, '166'),
(12, 'Basel', 'Arafa', 'Basel Rabia Mahmoud Arafa', 'BaselRabiaMahmoudArafa@hotmail.com', 'Giza', 'Male', 10026849, '166'),
(13, 'Ekhlas', 'Hassan', 'Ekhlas Mohammed Ali Hassan', 'EkhlasMohammedAliHassan@outlook.com', 'Luxor', 'Female', 10021134, '166'),
(14, 'Eslam', 'Elshaabany', 'Eslam Mohamed Zaki Elshaabany', 'EslamMohamedZakiElshaabany@hotmail.com', 'Portsiad', 'Male', 10009902, '166'),
(15, 'Esraa', 'Farhat', 'Esraa Mohamed Taha Farhat', 'EsraaMohamedTahaFarhat@hotmail.com', 'Giza', 'Female', 10027917, '166'),
(16, 'Hebat', 'Mohammed', 'Hebat Allah Ayman Mohammed', 'HebatAllahAymanMohammed@yahoo.com', 'Giza', 'Female', 10021290, '166'),
(17, 'Islam', 'Ali', 'Islam Ahmed Abdou Ali', 'IslamAhmedAbdouAli@gmail.com', 'Ismailia', 'Male', 10003261, '166'),
(18, 'Kariman', 'Anees', 'Kariman Shawki Shawki Anees', 'KarimanShawkiShawkiAnees@yahoo.com', 'Tanta', 'Female', 10020328, '166'),
(19, 'Maha', 'Elburj', 'Maha Elsayed Mohammed Aly Elburj', 'MahaElsayedMohammedAlyElburj@gmail.com', 'Luxor', 'Female', 10026878, '166'),
(20, 'Mahmoud', 'Hassan', 'Mahmoud Mohammed Ibrahim Hassan', 'MahmoudMohammedIbrahimHassan@gmail.com', 'Mansoura', 'Male', 10027703, '166'),
(21, 'Mohamed', 'Mohamed', 'Mohamed Ashraf Mohamed Mohamed', 'MohamedAshrafMohamedMohamed@yahoo.com', 'Luxor', 'Male', 10014432, '166'),
(23, 'mohamed', 'eldesoky', 'mohamed magdy hanafy eldesoky', 'mohamedmagdyhanafyeldesoky@yahoo.com', 'Tanta', 'Male', 10024856, '166'),
(24, 'Mohamed', 'Zayan', 'Mohamed Shaban Ahmed mohamed Zayan', 'MohamedShabanAhmedmohamedZayan@yahoo.com', 'Tanta', 'Male', 10012367, '166'),
(25, 'Mohamed', 'Elsayed', 'Mohamed Taha Gadelmawla Elsayed', 'MohamedTahaGadelmawlaElsayed@hotmail.com', 'Mansoura', 'Male', 10011263, '166'),
(26, 'Muhammed', 'Abdallah', 'Muhammed Abdurahman Ali Abdallah', 'MuhammedAbdurahmanAliAbdallah@hotmail.com', 'Tanta', 'Male', 10012660, '166'),
(27, 'Nada', 'Askora', 'Nada Ahmed Ibrahim Attia Askora', 'NadaAhmedIbrahimAttiaAskora@gmail.com', 'Ismailia', 'Female', 10019177, '111111'),
(28, 'Nadine', 'Abdelhamid', 'Nadine Abdelfattah Abdelhamid', 'NadineAbdelfattahAbdelhamid@outlook.com', 'Ismailia', 'Female', 10010429, '166'),
(29, 'Nouran', 'Elshaer', 'Nouran Magdy Mohamed Elshaer', 'NouranMagdyMohamedElshaer@yahoo.com', 'Cairo', 'Female', 10025522, '166'),
(30, 'Omar', 'Ibrahim', 'Omar Abd ElAziz ElSaeed Ibrahim', 'OmarAbdElAzizElSaeedIbrahim@yahoo.com', 'Luxor', 'Male', 10001051, '166'),
(32, 'Riham', 'Alkashlan', 'Riham walid mohamed atia alkashlan', 'RihamwalidmohamedatiaAlkashlan@outlook.com', 'Mansoura', 'Female', 10000242, '11177'),
(33, 'Salah', 'mohamed', 'Salah gamal mohamed', 'Salahgamalmohamed@hotmail.com', 'Aswan', 'Male', 10025152, '166'),
(34, 'Sara', 'AboElfrag', 'Sara Mohamed Mahmoud MohamedAboElfrag', 'SaraMohamedAboElfrag@gmail.com', 'Mansoura', 'Female', 10025677, '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
