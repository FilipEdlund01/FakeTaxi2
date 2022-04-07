-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 07. dub 2022, 22:38
-- Verze serveru: 10.4.22-MariaDB
-- Verze PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `taxidb`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `location`
--

CREATE TABLE `location` (
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `location`
--

INSERT INTO `location` (`latitude`, `longitude`) VALUES
('4654', '535'),
('', ''),
('', ''),
('4654', '535'),
('4654', '535'),
('4654', '535'),
('47.607088939995585', '27.39990234375'),
('-5.244127581489541', ' 34.45312500000001.');

-- --------------------------------------------------------

--
-- Struktura tabulky `newride`
--

CREATE TABLE `newride` (
  `id` int(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `newride`
--

INSERT INTO `newride` (`id`, `time`, `date`, `phone`) VALUES
(1, '11:01', '2022-04-07', 702071677),
(2, '11:05', '2022-04-01', 702071677),
(3, '11:13', '2022-04-06', 702071677),
(4, '15:06', '2022-04-06', 702071677),
(5, '16:08', '2022-03-31', 702071677),
(6, '23:34', '2022-04-02', 702071677);

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Filip Edlund', 'edlundfilip84@gmail.com', 'edlundfilip84@gmail.com', '$2y$10$oFlJZ.FQcfoDn0qqiiAvXu3UqAL01eckHXuAyHTFE9X6Dcvra0xBC'),
(2, 'Jonas Edlund', 'edlundfilip@gmail.com', 'edlundfilip@gmail.com', '$2y$10$734vEnZv74/O53ynm6DMneHLiI1bVrxPV3ky8AC5KHmKI5w6Gm8NO'),
(3, 'Filip Edlund', 'edlundfili@gmail.com', 'edlunir', '$2y$10$TW7YHHEoZEfZTg1bsNV2z.LAa.XMqjZiUdCXVu1sNnWaTA5ZhCEuS'),
(4, 'Jonas E', 'edlulip@gmail.com', 'edlu', '$2y$10$yCsoV4IR5Yx/DiToYclQI.aJVNE/0QJ893WNAsjMEVUgiop3bkriC'),
(5, 'Filip Edlu', 'edluilip84@gmail.com', 'e45', '$2y$10$m6IA3lgLIc5vk7m1EgkUBetNYwJIGL4iE6bk7DQxkwREWI0ncdqi6'),
(6, 'Ruben', 'dobes@gmail.com', 'rubino', '$2y$10$11rPK.mBMw4E5z/mifU7fuoKePZoep2GX9nFd4KesEwvnqpVctKQG'),
(7, 'Filip Edlund2828', 'edlfilip8258284@gmail.com', 'edlunir8725585', '$2y$10$Tk12FM6oY/uD599IW6lSYO.HRnVbm175Fa0thZU4IXGtFzRLrH2Em'),
(8, 'dasdsaads', 'adssdadsa@gmail.com', 'rubino455555', '$2y$10$nSIyzZoFHdf34pCqcdcQ6eZS2OoHnvGsNB4Lg1bgsdoJnmszK9ugi'),
(9, 'Filip Edlund/3883', 'edlund866776767filip84@gmail.com', 'rubino564564654', '$2y$10$WKqAHNg7fNaILBEzsAQ19u//9SsJvgH4UHNAh.kTSEXb4q5MH6u32'),
(10, 'Filip Edlundtttjtj', 'edlundjtjtzjtzjtzjtzjfilip84@gmail.com', 'rubinojtjtjtzjtjtj', '$2y$10$aeXSF7S08GtxNeZyNnGjqO54nZYi/E/9cFNkoVYyT8FCmCCEWgN1u'),
(11, 'Filip Edlundfefef', 'efefefefdlundfilip84@gmail.com', 'rubinofefefeef', '$2y$10$sDT6AuxvWt6TpfSB1X2VTugQ0ncX1CtSw.ZJILFV66/O0NPPDKHm.'),
(12, 'Filip Edlund/3883rčrččr', 'edlund86677676847filip84@gmail.com', 'rubinorrčrčr', '$2y$10$LYrBL2MbVyzSSGYIGTozZuPNBUIY3itPMJwLMEdTYORsQa0IKe3Ge');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `newride`
--
ALTER TABLE `newride`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `newride`
--
ALTER TABLE `newride`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
