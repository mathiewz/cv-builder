SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `competence` (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(50) NOT NULL,
    idCateg int NOT NULL,
    niveau int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (idCateg) REFERENCES comp_categ(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
