-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 28, 2022 at 12:28 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4ipdw_roulliergall`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_categories`
--

CREATE TABLE `t_categories` (
  `id_categoy` int(11) NOT NULL,
  `name_category` varchar(16) DEFAULT NULL COMMENT 'nom de la catégorie'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_categories`
--

INSERT INTO `t_categories` (`id_categoy`, `name_category`) VALUES
(1, 'Basalte'),
(2, 'Calcaire'),
(3, 'Quartzite'),
(4, 'Marbre'),
(5, 'Granit');

-- --------------------------------------------------------

--
-- Table structure for table `t_civility`
--

CREATE TABLE `t_civility` (
  `id_civility` int(11) NOT NULL,
  `sex_abreviation_civility` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_civility`
--

INSERT INTO `t_civility` (`id_civility`, `sex_abreviation_civility`) VALUES
(1, 'Mr'),
(2, 'Mme');

-- --------------------------------------------------------

--
-- Table structure for table `t_country`
--

CREATE TABLE `t_country` (
  `id_country` int(11) NOT NULL,
  `name_country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_country`
--

INSERT INTO `t_country` (`id_country`, `name_country`) VALUES
(1, 'Belgique'),
(2, 'France'),
(3, 'Angleterre'),
(4, 'Pays-Bas'),
(5, 'Italie');

-- --------------------------------------------------------

--
-- Table structure for table `t_products`
--

CREATE TABLE `t_products` (
  `id_product` int(11) NOT NULL COMMENT 'clé primaire',
  `name_product` varchar(30) DEFAULT NULL COMMENT 'nom du produit',
  `description_product` text COMMENT 'texte descriptif du produit',
  `fk_id_category_product` int(30) DEFAULT NULL COMMENT 'catégorie du produit',
  `image_product` varchar(64) DEFAULT NULL COMMENT 'lien image du produit',
  `price_product` decimal(10,0) DEFAULT NULL COMMENT 'prix du produit au m2',
  `is_favorite_product` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'indication si le produit est favori ou non'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_products`
--

INSERT INTO `t_products` (`id_product`, `name_product`, `description_product`, `fk_id_category_product`, `image_product`, `price_product`, `is_favorite_product`) VALUES
(1, 'Basalte Brun', 'Le marbre blanc de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 1, 'model/model_media/Pierres/basalte1.jpg', '25', 0),
(2, 'Basalte Gris', 'Le basalte gris de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 1, 'model/model_media/Pierres/basalte2.jpg', '22', 0),
(3, 'Basalte Anthracite', 'Le basalte anthracite de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 1, 'model/model_media/Pierres/basalte3.jpg', '26', 0),
(4, 'Basalte Noir', 'Le basalte noir de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 1, 'model/model_media/Pierres/basalte4.jpg', '23', 0),
(5, 'Calcaire Gris', 'Le calcaire gris de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 2, 'model/model_media/Pierres/calcaire1.jpg', '31', 0),
(6, 'Calcaire Jaune', 'Le calcaire jaune de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 2, 'model/model_media/Pierres/calcaire2.jpg', '27', 0),
(7, 'Calcaire Beige', 'Le calcaire beige de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 2, 'model/model_media/Pierres/calcaire3.jpg', '32', 0),
(8, 'Calcaire Noir', 'Le calcaire gris de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 2, 'model/model_media/Pierres/calcaire4.jpg', '29', 0),
(9, 'Quartzite Mauve', 'Le granit mauve de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 3, 'model/model_media/Pierres/quartzite1.jpg', '27', 0),
(10, 'Quartzite tacheté', 'Le granit tacheté de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 3, 'model/model_media/Pierres/quartzite2.jpeg', '26', 0),
(11, 'Quartzite paillette', 'Le granit paillette de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 3, 'model/model_media/Pierres/quartzite3.png', '29', 0),
(12, 'Quartzite camouflage', 'Le granit camouflage de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 3, 'model/model_media/Pierres/quartzite4.jpg', '25', 0),
(13, 'Le Bleu Macauba', 'Le bleu Macauba, ou autrement appelé Bleu Aria, est une pierre naturelle faisant partie de la famille des quartzites. C’est une pierre d’exception constituée de cristaux de quartz soudés offrant des couleurs vives et brillantes.\r\n        Le bleu Macauba, datant de la période du Précambrien, est originaire du Brésil tout comme le granit Bleu Bahia. Il est particulièrement prisé par les férus de décoration intérieure, notamment pour l’aménagement des salles de bain.\r\n        La carrière exploitée pour cette pierre, est située à proximité de la ville de Salvador à l’extrémité ouest du Brésil.\r\n        Le Bleu Macauba est apprécié notamment pour ses caractéristiques de solidité, avec une résistance équivalente à celle du garnit. C’est dû notamment au fait que ce soit un quartzite.\r\n        Au contraire du granit bleu Bahia, le Bleu Macauba présente un éventail de teintes plus ou moins intenses allant du bleu profond à un bleu ciel très clair, à la limite du blanc. Chaque tranche de cette pierre est unique en son genre au vu de la grande variété d’intensités et nuances.\r\n        ', 4, 'model/model_media/Pierres/marbre1.jpeg', '41', 0),
(14, 'Marbre Blanc Calacatta', 'Le marbre blanc de Carrare type Calacatta est une pierre originaire de la ville de Carrare dans le nord de l’Italie, datant de la période Jurassique.\r\n        Le fond de ce marbre est très blanc, similaire au marbre Carrare Statuario. Les veines sont grises et or, dans le cas du Calacatta Oro, ce qui lui donne une très belle énergie.\r\n        Le contraste entre le fond très blanc et les veines plus ou moins épaisses, généralement concentrées et aléatoirement réparties donnent une certaine profondeur aux créations et une dimension architecturale intemporelle.\r\n        Généralement les tranches sont découpées en livre ouvert pour permettre le positionnement symétrique des veines, ce qui permet de mettre en valeur le marbre.\r\n        Les larges parties blanches procurent une grande luminosité caractéristique du marbre blanc italien et tout particulièrement de la région de Carrare qui a fait sa réputation de capitale du Marbre.\r\n        ', 4, 'model/model_media/Pierres/marbre2.jpeg', '55', 0),
(15, 'Le marbre rouge de Vérone', 'Le marbre rouge de Vérone est une pierre calcaire non métamorphique de la région de Vérone en Italie comme peut l’indiquer son nom.\r\n        Cette pierre calcaire date de la période Jurassique et plus particulièrement de la période du Lyas.\r\n        Elle est de couleur rouge avec des nodules plus clairs, souvent riche en fossiles comme des ammonites.\r\n        Il s’agit d’un marbre très décoratif grâce à ses nuances de rouge différentes qui peuvent de temps en temps se mêler à des colorations jaunes ou vertes.\r\n        L’apparition discrète de spirales d’ammonites ne font que parfaire cette pierre et apportera un plus dans votre décoration et tout particulièrement avec une finition polie.\r\n        es caractéristiques techniques de ce marbre lui permettent de s’utiliser presque partout et se retrouve beaucoup en Italie et en Europe. Il est utilisé et apprécié depuis l’époque Romaine et reste de nos jours très recherché pour ses facultés décoratives.\r\n        Si vous avez déjà eu la chance de voyager à Venise vous l’avez certainement vu dans presque toutes les rues.\r\n        ', 4, 'model/model_media/Pierres/marbre3.jpg', '38', 0),
(16, 'Le marbre vert Guatemala', 'Contrairement à son nom, le marbre vert Guatemala ne vient pas d’Amérique du Sud mais d’Inde et plus exactement de la province de Rajasthan au centre du pays. Cette zone géographique est extrêmement riche et variée en granits et autre pierres naturelles.\r\n        Il existe de nombreuse petites carrières et il est donc possible de trouver cette pierre sous de nombreux noms différents comme : Vert Serpent, Vert du Rajasthan, Vert Guatemala Indien, Vert Imperial, et bien d’autres.\r\n        Ce marbre est d’un vert foncé et constant avec de belles veines d’un vert plus clair et très lumineuses. Cette variation de verts mettra naturellement la pierre et votre projet en valeur et tout particulièrement en finition polie.\r\n        Scientifiquement cette pierre est une Serpentinite comme le Green Forest et autres variations de la gamme « forest » mais il est communément considéré sur le marché de la pierre naturelle comme un marbre.\r\n        Il peut s’utiliser aussi bien en intérieur qu’en extérieur mais doit être régulièrement entretenu avec un hydrofuge qui le protègera de toutes attaques acides.\r\n        De nombreux designers l’utilisent dans les salles d’eau pour apporter une touche de nature et d’exotisme.\r\n        ', 4, 'model/model_media/Pierres/marbre4.jpg', '42', 0),
(17, 'Le Kashmir White', 'Pierre granitique, le Kashmir White est un beau granit indien de la région de MelurTaluk datant de l’ère précambrienne.\r\n        Ce granit fait partie des plus clairs que l’on puisse trouver dans des budgets raisonnables.\r\n        C’est un granit très fin avec des alternatives de beige gris et des pépites couleur grenat.\r\n        Sa couleur très raffinée et ses nuances délicates font penser à un filet d’eau coulant sur du sable, ce qui offre une large palette de possibilité.\r\n        \r\n        Utilisable en extérieur ou en intérieur, comme en plan de travail ou il offre des motifs fins et doux en version polie, ou pour une couleur plus uniforme en version flammée.\r\n        Ce granit très polyvalent gagne à être connu, mais devient de plus en plus rare en raison des problèmes politiques dans la région d’extraction.\r\n        Ses caractéristiques techniques vous permettent de le mettre absolument partout alors n’hésitez plus et faites courir votre imagination.\r\n        Ce granit vous offre une couleur claire et des motifs aléatoires qui font penser à un doux veinage continue et se différencie ainsi des autres granits plus uniformes.\r\n        Pour une couleur encore plus riche optez pour le Kashmir Gold.\r\n        ', 5, 'model/model_media/Pierres/granit1.jpeg', '35', 0),
(18, 'Le granit Bleu Pearl', 'Le granit Bleu Pearl est une pierre granitique originaire de la région de Vestfold en Norvège, datant de la période Permien, d’une couleur bleu gris noir avec des écailles bleues étincelantes de syénite.\r\n        Cette période a notamment connue l’apparition du premier dinosaure volant ainsi que du premier déplacement bipède.\r\n        C’est un granit extraordinaire, sa couleur est très uniforme et il s’accorde très facilement avec d’autres couleurs.\r\n        Ce granit est aussi connu sous les noms de Blue Opale, Labrador Blue ou Marina Pearl.\r\n        Il est parfait pour tout type d’utilisation et apportera un aspect luxe incontestable grâce à ses paillettes bleues.\r\n        Ne pensez pas que le granit est une pierre funéraire et triste, grâce à ses écailles bleues ressemblant à des ailes de papillons, elle scintillera de façon constante à chaque regard.\r\n        Ce granit s’utilise très souvent en plan de travail ou îlot de cuisine mais pas uniquement. Il est parfait pour les revêtements de sols ou pour les façades de bâtiments auxquels il apportera sobriété, chaleur ainsi qu’un éclat sans précédent.\r\n        Marbre Import vous conseille une utilisation en finition polie pour profiter au maximum de ses reflets bleus mais toutes les autres finitions sont bien entendu possibles.\r\n        ', 5, 'model/model_media/Pierres/granit2.jpg', '32', 0),
(19, 'Le Granit G633', 'Le granit G633 est une pierre granitique à grains fins, originaire de la province de Fujian en Chine, essentiellement composée de biotite grise et de granodiorite, datant de la période Précambrienne.\r\n        Il existe plusieurs carrières différentes et la couleur peut sensiblement changée d’un lieu à l’autre. Marbre Import vous garantit que toute commande sera extraite du même bloc et de la même partie de la montagne.\r\n        Ce granit peut avoir différentes finitions qui transforment légèrement son aspect visuel.\r\n        Sa couleur grise claire apporte un aspect à la fois clair et très peu salissant et peut donc se retrouver partout en extérieur. Il s’utilise aussi en intérieur en finition polie associé avec une autre couleur plus claire qui apportera du contraste.\r\n        Très utilisé dans tous domaines de par ses caractéristiques physiques et son uniformité de couleur, en particulier dans les cuisines pour les plans de travail mais aussi et surtout dans la décoration de jardin et d’extérieur, sans oublier l’architecture urbaine.\r\n        Ce granit est très proche du granit G603 mais ses grains sont bien plus fins ce qui le donne grand favori dans le domaine de la sculpture et de la gravure.\r\n        Marbre Import vous assure une uniformité des grains et de la couleur en maîtrisant les différents lieux d’extractions.\r\n        ', 5, 'model/model_media/Pierres/granit3.jpg', '43', 0),
(20, 'Le Granit G654', 'Cette pierre granitique à grains fins est originaire de la province de Fujian en Chine et est composée de Quartz diorite, datant de la période Précambrienne.\r\n        Le Granit G654 est un granit de couleur gris anthracite qui devient de plus en plus populaire grâce à cette couleur chic, sobre et uniforme.\r\n        Le contraste entre la pierre claire et le gris anthracite de ce granit donne un effet pur qui fait ressortir tous les détails du bâtiment. Ce granit est un vrai passe partout qui valorise toutes les couleurs plus claires qui l’entourent.\r\n        La finition flammée brossée vous apportera un esprit naturel et un revêtement antiglisse parfaitement adapté à tous vos projets.\r\n        Ce granit est très utilisé par les architectes et de plus en plus recherché pour tout type d’utilisation et tout particulièrement en extérieur. De plus le G654 s’associe très facilement avec toutes les pierres calcaires claires très fréquemment utilisées en ville.\r\n        Les nombreux choix de finition de ce granit le rendent également très prisé des architectes travaillant à la fois l’intérieur et l’extérieur.\r\n        Il est facile de retrouver ce granit sur toutes les plus belles places du monde et tout particulièrement dans des villes comme Paris et Bordeaux ou les bâtiments sont en pierre calcaire.', 5, 'model/model_media/Pierres/granit4.jpeg', '38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_projects`
--

CREATE TABLE `t_projects` (
  `id_project` int(11) NOT NULL COMMENT 'clé primaire',
  `image_project` varchar(100) DEFAULT NULL COMMENT 'lien image du projet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_projects`
--

INSERT INTO `t_projects` (`id_project`, `image_project`) VALUES
(1, 'model/model_media/ProjetsImages/basalte2_1.jpg'),
(2, 'model/model_media/ProjetsImages/granit1_1.jpg'),
(3, 'model/model_media/ProjetsImages/granit2_1.jpg'),
(4, 'model/model_media/ProjetsImages/marbre1_1.jpg'),
(5, 'model/model_media/ProjetsImages/marbre2_1.jpg'),
(6, 'model/model_media/ProjetsImages/quartzite1_1.jpg'),
(7, 'model/model_media/ProjetsImages/pierrecalcaire2_1.jpg'),
(8, 'model/model_media/ProjetsImages/basalte1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_socio_professional_category`
--

CREATE TABLE `t_socio_professional_category` (
  `id_socio_professional_category` int(11) NOT NULL,
  `name_socio_professional_category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_socio_professional_category`
--

INSERT INTO `t_socio_professional_category` (`id_socio_professional_category`, `name_socio_professional_category`) VALUES
(1, 'Entreprise'),
(2, 'Particulier'),
(3, 'ASBL');

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `id_user` int(11) NOT NULL COMMENT 'clé primaire',
  `fk_id_civility_user` int(2) DEFAULT NULL COMMENT 'civilité de l''utilisateur',
  `name_user` varchar(64) DEFAULT NULL COMMENT 'nom de l''utilisateur',
  `firstname_user` varchar(64) DEFAULT NULL COMMENT 'prénom de l''utilisateur',
  `email_user` varchar(64) DEFAULT NULL COMMENT 'email de l''utilisateur',
  `fk_id_socio_professional_category_user` int(11) DEFAULT NULL COMMENT 'catégorie socio-professionnel de l''utilisateur',
  `address_user` varchar(100) DEFAULT NULL COMMENT 'adresse de l''utilisateur',
  `postal_code_user` int(11) DEFAULT NULL COMMENT 'code postale de l''utilisateur',
  `city_user` varchar(100) DEFAULT NULL COMMENT 'ville de l''utilisateur',
  `fk_id_country_user` int(50) DEFAULT NULL COMMENT 'pays de l''utilisateur',
  `phone_number_user` varchar(50) DEFAULT NULL COMMENT 'numéro de téléphone de l''uitilisateur',
  `birthday_user` date DEFAULT NULL COMMENT 'date anniversaire de l''utilisateur',
  `password_user` varchar(50) DEFAULT NULL COMMENT 'mot de passe de l''utilisateur',
  `image_profil_user` varchar(100) DEFAULT NULL COMMENT 'lien vers l''image de profil de l''utilisateur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`id_user`, `fk_id_civility_user`, `name_user`, `firstname_user`, `email_user`, `fk_id_socio_professional_category_user`, `address_user`, `postal_code_user`, `city_user`, `fk_id_country_user`, `phone_number_user`, `birthday_user`, `password_user`, `image_profil_user`) VALUES
(1, 1, 'Roullier-gall', 'Alban', 'alban-roullier-gall@hotmail.com', 2, '29 rue lesbroussart', 1080, 'Bruxelles', 1, '0478/05.34.80', '1992-04-28', 'x4501004', 'model/model_media/UsersPictures/photo_identité.jpg'),
(2, 2, 'Bouklouze', 'Anissa', 'anissa-bouklouze@hotmail.com', 2, '20 rue de la toison doré', 7000, 'Mons', 1, '0479/52.79.63', '1994-02-02', '131677', 'model/model_media/UsersPictures/photo_identité.jpg'),
(3, 1, 'Botquin', 'Yohan', 'yohan-botquin@hotmail.com', 1, '10 rue de la Font Michaux', 1400, 'Nivelles', 3, '0469/52.99.33', '1993-05-19', 'anelka', 'model/model_media/UsersPictures/photo_identité.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_categories`
--
ALTER TABLE `t_categories`
  ADD PRIMARY KEY (`id_categoy`);

--
-- Indexes for table `t_civility`
--
ALTER TABLE `t_civility`
  ADD PRIMARY KEY (`id_civility`);

--
-- Indexes for table `t_country`
--
ALTER TABLE `t_country`
  ADD PRIMARY KEY (`id_country`);

--
-- Indexes for table `t_products`
--
ALTER TABLE `t_products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category_product` (`fk_id_category_product`);

--
-- Indexes for table `t_projects`
--
ALTER TABLE `t_projects`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `t_socio_professional_category`
--
ALTER TABLE `t_socio_professional_category`
  ADD PRIMARY KEY (`id_socio_professional_category`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_civility_user` (`fk_id_civility_user`),
  ADD KEY `id_socio_professional_category_user` (`fk_id_socio_professional_category_user`),
  ADD KEY `id_country_user` (`fk_id_country_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_categories`
--
ALTER TABLE `t_categories`
  MODIFY `id_categoy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_civility`
--
ALTER TABLE `t_civility`
  MODIFY `id_civility` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_country`
--
ALTER TABLE `t_country`
  MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_products`
--
ALTER TABLE `t_products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT COMMENT 'clé primaire', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `t_projects`
--
ALTER TABLE `t_projects`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT COMMENT 'clé primaire', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_socio_professional_category`
--
ALTER TABLE `t_socio_professional_category`
  MODIFY `id_socio_professional_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT COMMENT 'clé primaire', AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_products`
--
ALTER TABLE `t_products`
  ADD CONSTRAINT `id_category_product` FOREIGN KEY (`fk_id_category_product`) REFERENCES `t_categories` (`id_categoy`);

--
-- Constraints for table `t_users`
--
ALTER TABLE `t_users`
  ADD CONSTRAINT `id_civility_user` FOREIGN KEY (`fk_id_civility_user`) REFERENCES `t_civility` (`id_civility`),
  ADD CONSTRAINT `id_country_user` FOREIGN KEY (`fk_id_country_user`) REFERENCES `t_country` (`id_country`),
  ADD CONSTRAINT `id_socio_professional_category_user` FOREIGN KEY (`fk_id_socio_professional_category_user`) REFERENCES `t_socio_professional_category` (`id_socio_professional_category`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
