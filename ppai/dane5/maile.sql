-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Lis 2022, 13:18
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mojedane`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `maile`
--

CREATE TABLE `maile` (
  `id` int(3) NOT NULL,
  `mail` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `maile`
--

INSERT INTO `maile` (`id`, `mail`) VALUES
(1, 'apostolos.stober@gov.pl'),
(2, 'birgit.merkel@gov.pl'),
(3, 'camilla.franzen@erzeszow.pl'),
(4, 'carlos.vogl@erzeszow.pl'),
(5, 'carmela.steffens@erzeszow.pl'),
(6, 'celal.limmer@gov.pl'),
(7, 'christiane.schultz@erzeszow.pl'),
(8, 'cynthia.brinkmann@gov.pl'),
(9, 'elizabeth.bunge@gov.pl'),
(10, 'frieda.burmester@gov.pl'),
(11, 'guido.mertes@erzeszow.pl'),
(12, 'helga.korte@gov.pl'),
(13, 'ingo.wesemann@erzeszow.pl'),
(14, 'jeremy.wernicke@erzeszow.pl'),
(15, 'jose.kamp@erzeszow.pl'),
(16, 'maya.horn@erzeszow.pl'),
(17, 'mike.knaus@erzeszow.pl'),
(18, 'natali.schaarschmidt@gov.pl'),
(19, 'reza.markgraf@gov.pl'),
(20, 'sandro.wisniewski@erzeszow.pl'),
(21, 'severin.fleischer@erzeszow.pl'),
(22, 'sibel.mathes@gov.pl'),
(23, 'ulf.link@gov.pl'),
(24, 'vera.mollmann@erzeszow.pl'),
(25, 'wiltrud.greger@erzeszow.pl'),
(26, 'wulf.holm@erzeszow.pl'),
(27, 'turkan.till@example.com'),
(28, 'claudia.knoll@example.com'),
(29, 'zeljko.mock@example.com'),
(30, 'gunhild.welz@example.com'),
(31, 'christin.hack@example.com'),
(32, 'bayram.hubert@example.com'),
(33, 'robin.holscher@example.com'),
(34, 'agatha.pahl@example.com'),
(35, 'pascale.kolbeck@example.com'),
(36, 'hans-willi.wacker@example.com'),
(37, 'alf.walker@example.com'),
(38, 'konstantinos.heidrich@example.com'),
(39, 'evamaria.schott@example.com'),
(40, 'ellinor.spies@example.com'),
(41, 'monique.kuch@example.com'),
(42, 'edith.grunwald@example.com'),
(43, 'sylvana.lehr@example.com'),
(44, 'mechthild.rupp@example.com'),
(45, 'yilmaz.linz@example.com'),
(46, 'hans-gerhard.wiegel@example.com'),
(47, 'ottmar.baur@example.com'),
(48, 'henryk.oppermann@example.com'),
(49, 'raphaela.linnemann@example.com'),
(50, 'gerolf.ulmer@example.com'),
(51, 'konstantinos.haak@example.com'),
(52, 'sibel.kahl@example.com'),
(53, 'hansgeorg.huck@example.com'),
(54, 'christine.fromme@example.com'),
(55, 'vincent.schonfeld@example.com'),
(56, 'gottlob.dunker@example.com'),
(57, 'max.holzwarth@example.com'),
(58, 'renate.tewes@example.com'),
(59, 'margot.jakobs@example.com'),
(60, 'luise.kreft@example.com'),
(61, 'richard.wegmann@example.com'),
(62, 'michelle.schone@example.com'),
(63, 'frederic.sohn@example.com'),
(64, 'metin.duda@example.com'),
(65, 'bert.stephan@example.com'),
(66, 'pascal.rottger@example.com'),
(67, 'dusan.schwalm@example.com'),
(68, 'hans-gerd.fenzl@example.com'),
(69, 'regina.neubauer@example.com'),
(70, 'irmtrud.pelzer@example.com'),
(71, 'undine.miller@example.com'),
(72, 'pavel.klar@example.com'),
(73, 'kathy.beetz@example.com'),
(74, 'kate.rohl@example.com'),
(75, 'grete.buhl@example.com'),
(76, 'vadim.cordes@example.com'),
(77, 'ernst-august.feist@example.com'),
(78, 'wieland.kretschmann@example.com'),
(79, 'veronique.ostermann@example.com'),
(80, 'sieglinde.kuhn@example.com'),
(81, 'nicolaus.bohl@example.com'),
(82, 'rotraut.ganz@example.com'),
(83, 'luzia.romer@example.com'),
(84, 'anna-marie.goller@example.com'),
(85, 'igor.menne@example.com'),
(86, 'belinda.mattern@example.com'),
(87, 'brunhild.prufer@example.com'),
(88, 'karl.hartig@example.com'),
(89, 'darius.ehrmann@example.com'),
(90, 'friedlinde.roscher@example.com'),
(91, 'leon.sperber@example.com'),
(92, 'artur.bartels@example.com'),
(93, 'ramon.grosch@example.com'),
(94, 'hans-martin.lenk@example.com'),
(95, 'alf.steinhoff@example.com'),
(96, 'joana.wurfel@example.com'),
(97, 'marco.blechschmidt@example.com'),
(98, 'rico.hartmann@example.com'),
(99, 'giesela.kerscher@example.com'),
(100, 'irma.herb@example.com'),
(101, 'hans-ulrich.kropp@example.com'),
(102, 'nicole.ruther@example.com'),
(103, 'ernest.friess@example.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `maile`
--
ALTER TABLE `maile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `maile`
--
ALTER TABLE `maile`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
