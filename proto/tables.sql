-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Version du serveur :  10.5.10-MariaDB-1:10.5.10+maria~buster
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cavril_db1`
--

-- --------------------------------------------------------

--
-- Structure de la table `amf_news`
--

CREATE TABLE `mutuelles_individuelles` (
  `id` int(11) NOT NULL,
  `date_naissance` timestamp NULL DEFAULT current_timestamp(),
  `regime` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour la table `amf_news`
--
ALTER TABLE `mutuelles_individuelles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour la table `amf_news`
--
ALTER TABLE `mutuelles_individuelles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `regimes` (
  `id` int(11) NOT NULL,
  `titre` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour la table `amf_news`
--
ALTER TABLE `regimes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour la table `amf_news`
--
ALTER TABLE `regimes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

