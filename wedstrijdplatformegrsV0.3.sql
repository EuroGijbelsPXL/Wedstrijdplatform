-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 04 dec 2015 om 13:58
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `wedstrijdplatformegrs`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `algemene_gegevens`
--

CREATE TABLE IF NOT EXISTS `algemene_gegevens` (
  `alg_geg_id` int(6) NOT NULL AUTO_INCREMENT,
  `naam_nl` varchar(255) DEFAULT NULL,
  `naam_fr` varchar(255) DEFAULT NULL,
  `organisator` varchar(100) DEFAULT NULL,
  `begindatum` date DEFAULT NULL,
  `einddatum` date DEFAULT NULL,
  PRIMARY KEY (`alg_geg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `banner_id` int(10) NOT NULL AUTO_INCREMENT,
  `banner_nl` varchar(100) DEFAULT NULL,
  `banner_fr` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Website banner' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `codes`
--

CREATE TABLE IF NOT EXISTS `codes` (
  `code_id` int(20) NOT NULL AUTO_INCREMENT,
  `wedstrijd_id` int(6) NOT NULL,
  `gebruiker_id` int(10) NOT NULL,
  `code` varchar(12) NOT NULL,
  PRIMARY KEY (`code_id`),
  KEY `wedstrijd_id` (`wedstrijd_id`),
  KEY `gebruiker_id` (`gebruiker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contactgegevens`
--

CREATE TABLE IF NOT EXISTS `contactgegevens` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `straat_nl` varchar(100) DEFAULT NULL,
  `straat_fr` varchar(100) DEFAULT NULL,
  `huisnummer` int(6) DEFAULT NULL,
  `bus` varchar(6) DEFAULT NULL,
  `gemeente_id` int(4) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefoon` varchar(15) DEFAULT NULL,
  `form_email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`contact_id`),
  KEY `gemeente_id` (`gemeente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contactpersonen`
--

CREATE TABLE IF NOT EXISTS `contactpersonen` (
  `contactpersoon_id` int(10) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(55) DEFAULT NULL,
  `naam` varchar(55) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefoon` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`contactpersoon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `deelnemende_winkels`
--

CREATE TABLE IF NOT EXISTS `deelnemende_winkels` (
  `deelname_id` int(20) NOT NULL AUTO_INCREMENT,
  `winkel_id` int(5) NOT NULL,
  `wedstrijd_id` int(6) NOT NULL,
  PRIMARY KEY (`deelname_id`),
  KEY `winkel_id` (`winkel_id`),
  KEY `wedstrijd_id` (`wedstrijd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `footer_id` int(10) NOT NULL AUTO_INCREMENT,
  `organisator` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `jaar` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`footer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='footer van de pagina' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `gebruiker_id` int(10) NOT NULL AUTO_INCREMENT,
  `naam` varchar(55) DEFAULT NULL,
  `voornaam` varchar(55) DEFAULT NULL,
  `geboortedatum` date DEFAULT NULL,
  `geslacht` char(1) DEFAULT NULL,
  `burg_staat` varchar(25) DEFAULT NULL,
  `gemeente_id` int(4) DEFAULT NULL,
  `straat` varchar(100) DEFAULT NULL,
  `huisnummer` int(6) DEFAULT NULL,
  `bus` varchar(6) DEFAULT NULL,
  `speelkansen` int(3) NOT NULL DEFAULT '0',
  `hoofdprijslot` int(3) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `favoriete_winkel` varchar(100) DEFAULT NULL,
  `taal` varchar(15) DEFAULT NULL,
  `nieuwsbrief` tinyint(1) NOT NULL DEFAULT '0',
  `profiel_volledig` tinyint(1) NOT NULL DEFAULT '0',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gebruiker_id`),
  KEY `gemeente_id` (`gemeente_id`),
  KEY `gemeente_id_2` (`gemeente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gemeentes`
--

CREATE TABLE IF NOT EXISTS `gemeentes` (
  `gemeente_id` int(4) NOT NULL AUTO_INCREMENT,
  `gemeente_nl` varchar(55) NOT NULL,
  `gemeente_fr` varchar(55) NOT NULL,
  `postcode` int(4) NOT NULL,
  PRIMARY KEY (`gemeente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `homepaginas`
--

CREATE TABLE IF NOT EXISTS `homepaginas` (
  `homepagina_id` int(10) NOT NULL AUTO_INCREMENT,
  `speelmee_nl` varchar(100) DEFAULT NULL,
  `speelmee_fr` varchar(100) DEFAULT NULL,
  `speluitleg_nl` varchar(255) DEFAULT NULL,
  `speluitleg_fr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`homepagina_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kleuren`
--

CREATE TABLE IF NOT EXISTS `kleuren` (
  `kleur_id` int(10) NOT NULL AUTO_INCREMENT,
  `achtergrond_body` varchar(10) NOT NULL DEFAULT '#FFFFFF',
  `achtergrond_content` varchar(10) NOT NULL DEFAULT '#FFFFFF',
  `titel` varchar(10) NOT NULL DEFAULT '#FFFFFF',
  `subtitel` varchar(10) NOT NULL DEFAULT '#FFFFFF',
  `navigatiebalk` varchar(10) NOT NULL DEFAULT '#FFFFFF',
  `tekst_nav_na` varchar(10) NOT NULL DEFAULT '#FFFFFF',
  `tekst_nav_a` varchar(10) NOT NULL DEFAULT '#FFFFFF',
  `hyperlinks` varchar(10) NOT NULL DEFAULT '#FFFFFF',
  `tekst` varchar(10) NOT NULL DEFAULT '#FFFFFF',
  `knoppen` varchar(10) NOT NULL DEFAULT '#FFFFFF',
  `knoptekst` varchar(10) NOT NULL DEFAULT '#FFFFFF',
  `login_achtergrond` varchar(10) NOT NULL DEFAULT '#FFFFFF',
  PRIMARY KEY (`kleur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `logos`
--

CREATE TABLE IF NOT EXISTS `logos` (
  `logo_id` int(10) NOT NULL AUTO_INCREMENT,
  `logo_naam` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`logo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Website logo' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `prijzen`
--

CREATE TABLE IF NOT EXISTS `prijzen` (
  `prijs_id` int(10) NOT NULL AUTO_INCREMENT,
  `wedstrijd_id` int(6) NOT NULL,
  `type_id` int(10) NOT NULL,
  `naam_nl` int(100) NOT NULL,
  `naam_fr` int(100) NOT NULL,
  `afbeelding` int(255) NOT NULL,
  `omschrijving_nl` int(255) DEFAULT NULL,
  `omschrijving_fr` int(255) DEFAULT NULL,
  `aantal` int(10) NOT NULL,
  `winkans` int(3) NOT NULL,
  PRIMARY KEY (`prijs_id`),
  KEY `wedstrijd_id` (`wedstrijd_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `recepten`
--

CREATE TABLE IF NOT EXISTS `recepten` (
  `recept_id` int(10) NOT NULL AUTO_INCREMENT,
  `website_id` int(10) NOT NULL,
  `titel_nl` varchar(100) DEFAULT NULL,
  `titel_fr` varchar(100) DEFAULT NULL,
  `soort_nl` varchar(50) DEFAULT NULL,
  `soort_fr` varchar(50) DEFAULT NULL,
  `afbeelding` varchar(100) DEFAULT NULL,
  `bereiding_nl` varchar(255) DEFAULT NULL,
  `bereiding_fr` varchar(255) DEFAULT NULL,
  `aantal_personen` int(3) DEFAULT NULL,
  `bereidingstijd` varchar(10) DEFAULT NULL,
  `ingrediëten_nl` varchar(255) DEFAULT NULL,
  `ingrediëten_fr` varchar(255) DEFAULT NULL,
  `materialen_nl` varchar(255) DEFAULT NULL,
  `materialen_fr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`recept_id`),
  KEY `website_id` (`website_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='De recepten van de website' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `speelkansen`
--

CREATE TABLE IF NOT EXISTS `speelkansen` (
  `speelkans_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` int(2) NOT NULL,
  `profiel` int(2) NOT NULL,
  `nieuwsbrief` int(2) NOT NULL,
  PRIMARY KEY (`speelkans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `spellen`
--

CREATE TABLE IF NOT EXISTS `spellen` (
  `spel_id` int(10) NOT NULL AUTO_INCREMENT,
  `naam_nl` int(255) DEFAULT NULL,
  `naam_fr` int(255) DEFAULT NULL,
  PRIMARY KEY (`spel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `type_id` int(10) NOT NULL AUTO_INCREMENT,
  `naam_nl` varchar(50) DEFAULT NULL,
  `naam_fr` varchar(50) DEFAULT NULL,
  `prioriteit` int(3) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `websites`
--

CREATE TABLE IF NOT EXISTS `websites` (
  `website_id` int(10) NOT NULL AUTO_INCREMENT,
  `banner_id` int(10) NOT NULL,
  `logo_id` int(10) NOT NULL,
  `kleur_id` int(10) NOT NULL,
  `footer_id` int(10) NOT NULL,
  `homepagina_id` int(10) NOT NULL,
  `contact_id` int(10) NOT NULL,
  `alg_geg_id` int(6) NOT NULL,
  PRIMARY KEY (`website_id`),
  KEY `banner_id` (`banner_id`),
  KEY `logo_id` (`logo_id`),
  KEY `kleur_id` (`kleur_id`),
  KEY `footer_id` (`footer_id`),
  KEY `homepagina_id` (`homepagina_id`),
  KEY `contact_id` (`contact_id`),
  KEY `alg_geg_id` (`alg_geg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wedstrijden`
--

CREATE TABLE IF NOT EXISTS `wedstrijden` (
  `wedstrijd_id` int(6) NOT NULL AUTO_INCREMENT,
  `website_id` int(10) NOT NULL,
  `alg_geg_id` int(6) NOT NULL,
  `wed_reg_id` int(6) NOT NULL,
  `speelkans_id` int(10) NOT NULL,
  `spel_id` int(10) NOT NULL,
  PRIMARY KEY (`wedstrijd_id`),
  KEY `website_id` (`website_id`),
  KEY `alg_geg_id` (`alg_geg_id`),
  KEY `wed_reg_id` (`wed_reg_id`),
  KEY `speelkans_id` (`speelkans_id`),
  KEY `spel_id` (`spel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wedstrijdreglementen`
--

CREATE TABLE IF NOT EXISTS `wedstrijdreglementen` (
  `wed_reg_id` int(6) NOT NULL AUTO_INCREMENT,
  `reglement_nl` varchar(255) DEFAULT NULL,
  `reglement_fr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`wed_reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `winkels`
--

CREATE TABLE IF NOT EXISTS `winkels` (
  `winkel_id` int(5) NOT NULL AUTO_INCREMENT,
  `contactpersoon_id` int(10) NOT NULL,
  `bedrijfsnaam` varchar(55) NOT NULL,
  `straat_nl` varchar(55) NOT NULL,
  `straat_fr` varchar(55) NOT NULL,
  `huisnummer` int(6) NOT NULL,
  `bus` varchar(6) NOT NULL,
  `coordinaten` varchar(255) DEFAULT NULL,
  `gemeente_id` int(4) NOT NULL,
  `btw_nummer` varchar(35) NOT NULL,
  PRIMARY KEY (`winkel_id`),
  KEY `gemeente_id` (`gemeente_id`),
  KEY `contactpersoon_id` (`contactpersoon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `winnaars`
--

CREATE TABLE IF NOT EXISTS `winnaars` (
  `winnaar_id` int(10) NOT NULL,
  `gebruiker_id` int(10) NOT NULL,
  `prijs_id` int(10) NOT NULL,
  `winkel_id` int(5) NOT NULL,
  KEY `gebruiker_id` (`gebruiker_id`),
  KEY `prijs_id` (`prijs_id`),
  KEY `winkel_id` (`winkel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `codes`
--
ALTER TABLE `codes`
  ADD CONSTRAINT `codes_ibfk_1` FOREIGN KEY (`wedstrijd_id`) REFERENCES `wedstrijden` (`wedstrijd_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codes_ibfk_2` FOREIGN KEY (`gebruiker_id`) REFERENCES `gebruikers` (`gebruiker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `contactgegevens`
--
ALTER TABLE `contactgegevens`
  ADD CONSTRAINT `contactgegevens_ibfk_1` FOREIGN KEY (`gemeente_id`) REFERENCES `gemeentes` (`gemeente_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `deelnemende_winkels`
--
ALTER TABLE `deelnemende_winkels`
  ADD CONSTRAINT `deelnemende_winkels_ibfk_1` FOREIGN KEY (`winkel_id`) REFERENCES `winkels` (`winkel_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `deelnemende_winkels_ibfk_2` FOREIGN KEY (`wedstrijd_id`) REFERENCES `wedstrijden` (`wedstrijd_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD CONSTRAINT `gebruikers_ibfk_1` FOREIGN KEY (`gemeente_id`) REFERENCES `gemeentes` (`gemeente_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `prijzen`
--
ALTER TABLE `prijzen`
  ADD CONSTRAINT `prijzen_ibfk_1` FOREIGN KEY (`wedstrijd_id`) REFERENCES `wedstrijden` (`wedstrijd_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `prijzen_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `types` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `recepten`
--
ALTER TABLE `recepten`
  ADD CONSTRAINT `recepten_ibfk_1` FOREIGN KEY (`website_id`) REFERENCES `websites` (`website_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `websites`
--
ALTER TABLE `websites`
  ADD CONSTRAINT `websites_ibfk_1` FOREIGN KEY (`banner_id`) REFERENCES `banners` (`banner_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `websites_ibfk_2` FOREIGN KEY (`logo_id`) REFERENCES `logos` (`logo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `websites_ibfk_3` FOREIGN KEY (`kleur_id`) REFERENCES `kleuren` (`kleur_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `websites_ibfk_4` FOREIGN KEY (`footer_id`) REFERENCES `footers` (`footer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `websites_ibfk_5` FOREIGN KEY (`homepagina_id`) REFERENCES `homepaginas` (`homepagina_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `websites_ibfk_6` FOREIGN KEY (`contact_id`) REFERENCES `contactgegevens` (`contact_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `websites_ibfk_7` FOREIGN KEY (`alg_geg_id`) REFERENCES `algemene_gegevens` (`alg_geg_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `wedstrijden`
--
ALTER TABLE `wedstrijden`
  ADD CONSTRAINT `wedstrijden_ibfk_1` FOREIGN KEY (`website_id`) REFERENCES `websites` (`website_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `wedstrijden_ibfk_2` FOREIGN KEY (`alg_geg_id`) REFERENCES `websites` (`website_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `wedstrijden_ibfk_3` FOREIGN KEY (`wed_reg_id`) REFERENCES `wedstrijdreglementen` (`wed_reg_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `wedstrijden_ibfk_4` FOREIGN KEY (`speelkans_id`) REFERENCES `speelkansen` (`speelkans_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `wedstrijden_ibfk_5` FOREIGN KEY (`spel_id`) REFERENCES `spellen` (`spel_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `winkels`
--
ALTER TABLE `winkels`
  ADD CONSTRAINT `winkels_ibfk_1` FOREIGN KEY (`gemeente_id`) REFERENCES `gemeentes` (`gemeente_id`),
  ADD CONSTRAINT `winkels_ibfk_2` FOREIGN KEY (`contactpersoon_id`) REFERENCES `contactpersonen` (`contactpersoon_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `winnaars`
--
ALTER TABLE `winnaars`
  ADD CONSTRAINT `winnaars_ibfk_1` FOREIGN KEY (`gebruiker_id`) REFERENCES `gebruikers` (`gebruiker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `winnaars_ibfk_2` FOREIGN KEY (`prijs_id`) REFERENCES `prijzen` (`prijs_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `winnaars_ibfk_3` FOREIGN KEY (`winkel_id`) REFERENCES `winkels` (`winkel_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
