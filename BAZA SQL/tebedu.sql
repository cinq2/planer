-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 07 Mar 2015, 18:05
-- Wersja serwera: 5.5.40-0ubuntu1
-- Wersja PHP: 5.5.12-2ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `tebedu`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grupa`
--

CREATE TABLE IF NOT EXISTS `grupa` (
`Id_Grupa` int(11) NOT NULL,
  `Kierunek` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `Rok` int(11) DEFAULT NULL,
  `Semestr` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `grupa`
--

INSERT INTO `grupa` (`Id_Grupa`, `Kierunek`, `Rok`, `Semestr`) VALUES
(1, 'Technik Informatyk', 1, 1),
(2, 'Rachunkowość', 1, 1),
(3, 'Technik Masażysta', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lekcja`
--

CREATE TABLE IF NOT EXISTS `lekcja` (
`Id_Lekcji` int(11) NOT NULL,
  `Id_Zajec` int(11) NOT NULL,
  `CzasRozpoczecia` datetime DEFAULT NULL,
  `CzasZakonczenia` datetime DEFAULT NULL,
  `Sala` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `lekcja`
--

INSERT INTO `lekcja` (`Id_Lekcji`, `Id_Zajec`, `CzasRozpoczecia`, `CzasZakonczenia`, `Sala`) VALUES
(1, 1, '2015-03-04 08:00:00', '2015-03-04 16:00:00', 201),
(2, 2, '2015-03-20 08:00:00', '2015-03-20 12:30:00', 202),
(3, 3, '2015-03-31 08:00:00', '2015-03-31 13:20:00', 203);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciel`
--

CREATE TABLE IF NOT EXISTS `nauczyciel` (
`Id_Nauczyciela` int(11) NOT NULL,
  `Imie` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `Nazwisko` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `nauczyciel`
--

INSERT INTO `nauczyciel` (`Id_Nauczyciela`, `Imie`, `Nazwisko`) VALUES
(1, 'Paweł', 'Rogoziński'),
(2, 'Paweł', 'Zawadzki'),
(3, 'Albert', 'Roziński');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmiot`
--

CREATE TABLE IF NOT EXISTS `przedmiot` (
`Id_Przedmiotu` int(11) NOT NULL,
  `Przedmiot` varchar(35) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `przedmiot`
--

INSERT INTO `przedmiot` (`Id_Przedmiotu`, `Przedmiot`) VALUES
(1, 'Systemy'),
(2, 'Bazy danych'),
(3, 'Tworzenie stron internetowych');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
`Id_Sali` int(11) NOT NULL,
  `Sala` varchar(5) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `sala`
--

INSERT INTO `sala` (`Id_Sali`, `Sala`) VALUES
(1, '201'),
(2, '202'),
(3, '203');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` smallint(6) NOT NULL,
  `login` varchar(128) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `descripton` varchar(128) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `descripton`) VALUES
(1, 'patryk', 'dc513ea4fbdaa7a14786ffdebc4ef64e', 'haha');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zajecia`
--

CREATE TABLE IF NOT EXISTS `zajecia` (
`Id_Zajecia` int(11) NOT NULL,
  `Nauczyciel` int(11) DEFAULT NULL,
  `Grupa` int(11) DEFAULT NULL,
  `Przedmiot` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `zajecia`
--

INSERT INTO `zajecia` (`Id_Zajecia`, `Nauczyciel`, `Grupa`, `Przedmiot`) VALUES
(1, 1, 0, 0),
(2, 1, 0, 0),
(3, 2, 0, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `grupa`
--
ALTER TABLE `grupa`
 ADD PRIMARY KEY (`Id_Grupa`);

--
-- Indexes for table `lekcja`
--
ALTER TABLE `lekcja`
 ADD PRIMARY KEY (`Id_Lekcji`);

--
-- Indexes for table `nauczyciel`
--
ALTER TABLE `nauczyciel`
 ADD PRIMARY KEY (`Id_Nauczyciela`);

--
-- Indexes for table `przedmiot`
--
ALTER TABLE `przedmiot`
 ADD PRIMARY KEY (`Id_Przedmiotu`);

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
 ADD PRIMARY KEY (`Id_Sali`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `zajecia`
--
ALTER TABLE `zajecia`
 ADD PRIMARY KEY (`Id_Zajecia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `grupa`
--
ALTER TABLE `grupa`
MODIFY `Id_Grupa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `lekcja`
--
ALTER TABLE `lekcja`
MODIFY `Id_Lekcji` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `nauczyciel`
--
ALTER TABLE `nauczyciel`
MODIFY `Id_Nauczyciela` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
MODIFY `Id_Przedmiotu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `sala`
--
ALTER TABLE `sala`
MODIFY `Id_Sali` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
MODIFY `id_user` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `zajecia`
--
ALTER TABLE `zajecia`
MODIFY `Id_Zajecia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
