-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Maj 2015, 09:23
-- Wersja serwera: 5.6.21
-- Wersja PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `plan`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grupa`
--

CREATE TABLE IF NOT EXISTS `grupa` (
`Id_Grupa` int(6) unsigned NOT NULL,
  `Kierunek` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `Rok` int(11) DEFAULT NULL,
  `Semestr` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `grupa`
--

INSERT INTO `grupa` (`Id_Grupa`, `Kierunek`, `Rok`, `Semestr`) VALUES
(1, 'Rachunkowość', 2, 1),
(2, 'Masażysta', 1, 1),
(3, 'Stomatologia', 2, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lekcja`
--

CREATE TABLE IF NOT EXISTS `lekcja` (
`Id_Lekcji` int(6) unsigned NOT NULL,
  `Id_Zajec` int(6) unsigned NOT NULL,
  `CzasRozpoczecia` datetime DEFAULT NULL,
  `CzasZakonczenia` datetime DEFAULT NULL,
  `Sala` int(6) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `lekcja`
--

INSERT INTO `lekcja` (`Id_Lekcji`, `Id_Zajec`, `CzasRozpoczecia`, `CzasZakonczenia`, `Sala`) VALUES
(1, 1, '2015-04-14 08:00:00', '2015-04-14 16:00:00', 1),
(2, 2, '2015-04-17 08:00:00', '2015-04-17 14:00:00', 2),
(3, 3, '2015-04-20 08:00:00', '2015-04-20 12:00:00', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciel`
--

CREATE TABLE IF NOT EXISTS `nauczyciel` (
`Id_Nauczyciela` int(6) unsigned NOT NULL,
  `Imie` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `Nazwisko` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `nauczyciel`
--

INSERT INTO `nauczyciel` (`Id_Nauczyciela`, `Imie`, `Nazwisko`) VALUES
(1, 'Paweł', 'Zawadzki'),
(2, 'Albert', 'Rogiński'),
(3, 'Paweł', 'Rogoziński');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmiot`
--

CREATE TABLE IF NOT EXISTS `przedmiot` (
`Id_Przedmiotu` int(6) unsigned NOT NULL,
  `Przedmiot` varchar(35) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `przedmiot`
--

INSERT INTO `przedmiot` (`Id_Przedmiotu`, `Przedmiot`) VALUES
(1, 'Programowanie aplikacji internetowy'),
(2, 'Administrowanie systemami baz danyc'),
(3, 'język angielski');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
`Id_Sali` int(6) unsigned NOT NULL,
  `Sala` varchar(5) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `sala`
--

INSERT INTO `sala` (`Id_Sali`, `Sala`) VALUES
(1, '201'),
(2, '202'),
(3, '203');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zajecia`
--

CREATE TABLE IF NOT EXISTS `zajecia` (
`Id_Zajec` int(6) unsigned NOT NULL,
  `Nauczyciel` int(6) unsigned DEFAULT NULL,
  `Grupa` int(6) unsigned DEFAULT NULL,
  `Przedmiot` int(6) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zajecia`
--

INSERT INTO `zajecia` (`Id_Zajec`, `Nauczyciel`, `Grupa`, `Przedmiot`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 3, 3),
(12, 2, 2, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `grupa`
--
ALTER TABLE `grupa`
 ADD PRIMARY KEY (`Id_Grupa`), ADD KEY `Id_Grupa` (`Id_Grupa`);

--
-- Indexes for table `lekcja`
--
ALTER TABLE `lekcja`
 ADD PRIMARY KEY (`Id_Zajec`), ADD UNIQUE KEY `Id_Zajec` (`Id_Zajec`), ADD KEY `Id_Zajec_2` (`Id_Zajec`), ADD KEY `Id_Lekcji` (`Id_Lekcji`), ADD KEY `Id_Zajec_3` (`Id_Zajec`), ADD KEY `Id_Lekcji_2` (`Id_Lekcji`), ADD KEY `Id_Zajec_4` (`Id_Zajec`), ADD KEY `Sala` (`Sala`), ADD KEY `Id_Zajec_5` (`Id_Zajec`);

--
-- Indexes for table `nauczyciel`
--
ALTER TABLE `nauczyciel`
 ADD PRIMARY KEY (`Id_Nauczyciela`), ADD KEY `Id_Nauczyciela` (`Id_Nauczyciela`), ADD KEY `Id_Nauczyciela_2` (`Id_Nauczyciela`), ADD KEY `Id_Nauczyciela_3` (`Id_Nauczyciela`);

--
-- Indexes for table `przedmiot`
--
ALTER TABLE `przedmiot`
 ADD PRIMARY KEY (`Id_Przedmiotu`), ADD KEY `Id_Przedmiotu` (`Id_Przedmiotu`), ADD KEY `Id_Przedmiotu_2` (`Id_Przedmiotu`);

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
 ADD PRIMARY KEY (`Id_Sali`), ADD KEY `Id_Sali` (`Id_Sali`);

--
-- Indexes for table `zajecia`
--
ALTER TABLE `zajecia`
 ADD PRIMARY KEY (`Id_Zajec`), ADD KEY `Grupa` (`Grupa`), ADD KEY `Nauczyciel` (`Nauczyciel`), ADD KEY `Grupa_2` (`Grupa`), ADD KEY `Przedmiot` (`Przedmiot`), ADD KEY `Grupa_3` (`Grupa`), ADD KEY `Przedmiot_2` (`Przedmiot`), ADD KEY `Id_Zajecia` (`Id_Zajec`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `grupa`
--
ALTER TABLE `grupa`
MODIFY `Id_Grupa` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `lekcja`
--
ALTER TABLE `lekcja`
MODIFY `Id_Lekcji` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `nauczyciel`
--
ALTER TABLE `nauczyciel`
MODIFY `Id_Nauczyciela` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
MODIFY `Id_Przedmiotu` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `sala`
--
ALTER TABLE `sala`
MODIFY `Id_Sali` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `zajecia`
--
ALTER TABLE `zajecia`
MODIFY `Id_Zajec` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `lekcja`
--
ALTER TABLE `lekcja`
ADD CONSTRAINT `Lekcja_ibfk_1` FOREIGN KEY (`Sala`) REFERENCES `sala` (`Id_Sali`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `Lekcja_ibfk_2` FOREIGN KEY (`Id_Zajec`) REFERENCES `zajecia` (`Id_Zajec`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `zajecia`
--
ALTER TABLE `zajecia`
ADD CONSTRAINT `Zajecia_ibfk_1` FOREIGN KEY (`Nauczyciel`) REFERENCES `nauczyciel` (`Id_Nauczyciela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `Zajecia_ibfk_2` FOREIGN KEY (`Grupa`) REFERENCES `grupa` (`Id_Grupa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `Zajecia_ibfk_3` FOREIGN KEY (`Przedmiot`) REFERENCES `przedmiot` (`Id_Przedmiotu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
