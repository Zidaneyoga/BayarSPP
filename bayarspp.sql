-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 11:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayarspp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayars`
--

CREATE TABLE `bayars` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nominal` varchar(255) NOT NULL,
  `bulan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') NOT NULL,
  `tanggal` date DEFAULT NULL,
  `status` enum('Lunas','Belum') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bayars`
--

INSERT INTO `bayars` (`id`, `foto`, `nominal`, `bulan`, `tanggal`, `status`, `created_at`, `updated_at`) VALUES
(14, '150-2.jpg', '100000', 'Maret', '2022-05-06', 'Lunas', '2022-05-23 08:53:50', '2022-05-23 08:53:50'),
(15, '150-2.jpg', '100000', 'Maret', '2022-05-06', 'Lunas', '2022-05-23 08:55:54', '2022-05-23 08:55:54'),
(16, '150-2.jpg', '100000', 'Maret', '2022-05-06', 'Lunas', '2022-05-23 08:59:57', '2022-05-23 08:59:57'),
(17, '150-2.jpg', '100000', 'April', '2022-05-24', 'Lunas', '2022-05-23 19:45:49', '2022-05-23 19:45:49'),
(18, 'Skyline apparel.png', '100000', 'Maret', '2022-06-09', 'Belum', '2022-05-23 23:19:54', '2022-05-23 23:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Beverages', 'Soft drinks, coffees, teas, beers, and ales', NULL, NULL),
(2, 'Condiments', 'Sweet and savory sauces, relishes, spreads, and seasonings', NULL, NULL),
(3, 'Confections', 'Desserts, candies, and sweet breads', NULL, NULL),
(4, 'Dairy Products', 'Cheeses', NULL, NULL),
(5, 'Grains/Cereals', 'Breads, crackers, pasta, and cereal', NULL, NULL),
(6, 'Meat/Poultry', 'Prepared meats', NULL, NULL),
(7, 'Produce', 'Dried fruit and bean curd', NULL, NULL),
(8, 'Seafood', 'Seaweed and fish', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `contact_name`, `address`, `city`, `postal_code`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Alfreds Futterkiste', 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209.000000', 'Germany', NULL, NULL),
(2, 'Ana Trujillo Emparedados y helados', 'Ana Trujillo', 'Avda. de la ConstituciÃ³n 2222', 'MÃ©xico D.F.', '5021.000000', 'Mexico', NULL, NULL),
(3, 'Antonio Moreno TaquerÃ­a', 'Antonio Moreno', 'Mataderos 2312', 'MÃ©xico D.F.', '5023.000000', 'Mexico', NULL, NULL),
(4, 'Around the Horn', 'Thomas Hardy', '120 Hanover Sq.', 'London', '', 'UK', NULL, NULL),
(5, 'Berglunds snabbkÃ¶p', 'Christina Berglund', 'BerguvsvÃ¤gen 8', 'LuleÃ¥', '', 'Sweden', NULL, NULL),
(6, 'Blauer See Delikatessen', 'Hanna Moos', 'Forsterstr. 57', 'Mannheim', '68306.000000', 'Germany', NULL, NULL),
(7, 'Blondel pÃ¨re et fils', 'FrÃ©dÃ©rique Citeaux', '24, place KlÃ©ber', 'Strasbourg', '67000.000000', 'France', NULL, NULL),
(8, 'BÃ³lido Comidas preparadas', 'MartÃ­n Sommer', 'C/ Araquil, 67', 'Madrid', '28023.000000', 'Spain', NULL, NULL),
(9, 'Bon app\'', 'Laurence Lebihans', '12, rue des Bouchers', 'Marseille', '13008.000000', 'France', NULL, NULL),
(10, 'Bottom-Dollar Marketse', 'Elizabeth Lincoln', '23 Tsawassen Blvd.', 'Tsawassen', '', 'Canada', NULL, NULL),
(11, 'B\'s Beverages', 'Victoria Ashworth', 'Fauntleroy Circus', 'London', '', 'UK', NULL, NULL),
(12, 'Cactus Comidas para llevar', 'Patricio Simpson', 'Cerrito 333', 'Buenos Aires', '1010.000000', 'Argentina', NULL, NULL),
(13, 'Centro comercial Moctezuma', 'Francisco Chang', 'Sierras de Granada 9993', 'MÃ©xico D.F.', '5022.000000', 'Mexico', NULL, NULL),
(14, 'Chop-suey Chinese', 'Yang Wang', 'Hauptstr. 29', 'Bern', '3012.000000', 'Switzerland', NULL, NULL),
(15, 'ComÃ©rcio Mineiro', 'Pedro Afonso', 'Av. dos LusÃ­adas, 23', 'SÃ£o Paulo', '', 'Brazil', NULL, NULL),
(16, 'Consolidated Holdings', 'Elizabeth Brown', 'Berkeley Gardens 12 Brewery', 'London', '', 'UK', NULL, NULL),
(17, 'Drachenblut Delikatessend', 'Sven Ottlieb', 'Walserweg 21', 'Aachen', '52066.000000', 'Germany', NULL, NULL),
(18, 'Du monde entier', 'Janine Labrune', '67, rue des Cinquante Otages', 'Nantes', '44000.000000', 'France', NULL, NULL),
(19, 'Eastern Connection', 'Ann Devon', '35 King George', 'London', '', 'UK', NULL, NULL),
(20, 'Ernst Handel', 'Roland Mendel', 'Kirchgasse 6', 'Graz', '8010.000000', 'Austria', NULL, NULL),
(21, 'Familia Arquibaldo', 'Aria Cruz', 'Rua OrÃ³s, 92', 'SÃ£o Paulo', '', 'Brazil', NULL, NULL),
(22, 'FISSA Fabrica Inter. Salchichas S.A.', 'Diego Roel', 'C/ Moralzarzal, 86', 'Madrid', '28034.000000', 'Spain', NULL, NULL),
(23, 'Folies gourmandes', 'Martine RancÃ©', '184, chaussÃ©e de Tournai', 'Lille', '59000.000000', 'France', NULL, NULL),
(24, 'Folk och fÃ¤ HB', 'Maria Larsson', 'Ã…kergatan 24', 'BrÃ¤cke', '', 'Sweden', NULL, NULL),
(25, 'Frankenversand', 'Peter Franken', 'Berliner Platz 43', 'MÃ¼nchen', '80805.000000', 'Germany', NULL, NULL),
(26, 'France restauration', 'Carine Schmitt', '54, rue Royale', 'Nantes', '44000.000000', 'France', NULL, NULL),
(27, 'Franchi S.p.A.', 'Paolo Accorti', 'Via Monte Bianco 34', 'Torino', '10100.000000', 'Italy', NULL, NULL),
(28, 'Furia Bacalhau e Frutos do Mar', 'Lino Rodriguez', 'Jardim das rosas n. 32', 'Lisboa', '1675.000000', 'Portugal', NULL, NULL),
(29, 'GalerÃ­a del gastrÃ³nomo', 'Eduardo Saavedra', 'Rambla de CataluÃ±a, 23', 'Barcelona', '8022.000000', 'Spain', NULL, NULL),
(30, 'Godos Cocina TÃ­pica', 'JosÃ© Pedro Freyre', 'C/ Romero, 33', 'Sevilla', '41101.000000', 'Spain', NULL, NULL),
(31, 'Gourmet Lanchonetes', 'AndrÃ© Fonseca', 'Av. Brasil, 442', 'Campinas', '', 'Brazil', NULL, NULL),
(32, 'Great Lakes Food Market', 'Howard Snyder', '2732 Baker Blvd.', 'Eugene', '97403.000000', 'USA', NULL, NULL),
(33, 'GROSELLA-Restaurante', 'Manuel Pereira', '5Âª Ave. Los Palos Grandes', 'Caracas', '1081.000000', 'Venezuela', NULL, NULL),
(34, 'Hanari Carnes', 'Mario Pontes', 'Rua do PaÃ§o, 67', 'Rio de Janeiro', '', 'Brazil', NULL, NULL),
(35, 'HILARIÃ“N-Abastos', 'Carlos HernÃ¡ndez', 'Carrera 22 con Ave. Carlos Soublette #8-35', 'San CristÃ³bal', '5022.000000', 'Venezuela', NULL, NULL),
(36, 'Hungry Coyote Import Store', 'Yoshi Latimer', 'City Center Plaza 516 Main St.', 'Elgin', '97827.000000', 'USA', NULL, NULL),
(37, 'Hungry Owl All-Night Grocers', 'Patricia McKenna', '8 Johnstown Road', 'Cork', '', 'Ireland', NULL, NULL),
(38, 'Island Trading', 'Helen Bennett', 'Garden House Crowther Way', 'Cowes', '', 'UK', NULL, NULL),
(39, 'KÃ¶niglich Essen', 'Philip Cramer', 'Maubelstr. 90', 'Brandenburg', '14776.000000', 'Germany', NULL, NULL),
(40, 'La corne d\'abondance', 'Daniel Tonini', '67, avenue de l\'Europe', 'Versailles', '78000.000000', 'France', NULL, NULL),
(41, 'La maison d\'Asie', 'Annette Roulet', '1 rue Alsace-Lorraine', 'Toulouse', '31000.000000', 'France', NULL, NULL),
(42, 'Laughing Bacchus Wine Cellars', 'Yoshi Tannamuri', '1900 Oak St.', 'Vancouver', '', 'Canada', NULL, NULL),
(43, 'Lazy K Kountry Store', 'John Steel', '12 Orchestra Terrace', 'Walla Walla', '99362.000000', 'USA', NULL, NULL),
(44, 'Lehmanns Marktstand', 'Renate Messner', 'Magazinweg 7', 'Frankfurt a.M.', '60528.000000', 'Germany', NULL, NULL),
(45, 'Let\'s Stop N Shop', 'Jaime Yorres', '87 Polk St. Suite 5', 'San Francisco', '94117.000000', 'USA', NULL, NULL),
(46, 'LILA-Supermercado', 'Carlos GonzÃ¡lez', 'Carrera 52 con Ave. BolÃ­var #65-98 Llano Largo', 'Barquisimeto', '3508.000000', 'Venezuela', NULL, NULL),
(47, 'LINO-Delicateses', 'Felipe Izquierdo', 'Ave. 5 de Mayo Porlamar', 'I. de Margarita', '4980.000000', 'Venezuela', NULL, NULL),
(48, 'Lonesome Pine Restaurant', 'Fran Wilson', '89 Chiaroscuro Rd.', 'Portland', '97219.000000', 'USA', NULL, NULL),
(49, 'Magazzini Alimentari Riuniti', 'Giovanni Rovelli', 'Via Ludovico il Moro 22', 'Bergamo', '24100.000000', 'Italy', NULL, NULL),
(50, 'Maison Dewey', 'Catherine Dewey', 'Rue Joseph-Bens 532', 'Bruxelles', '', 'Belgium', NULL, NULL),
(51, 'MÃ¨re Paillarde', 'Jean FresniÃ¨re', '43 rue St. Laurent', 'MontrÃ©al', '', 'Canada', NULL, NULL),
(52, 'Morgenstern Gesundkost', 'Alexander Feuer', 'Heerstr. 22', 'Leipzig', '4179.000000', 'Germany', NULL, NULL),
(53, 'North/South', 'Simon Crowther', 'South House 300 Queensbridge', 'London', '', 'UK', NULL, NULL),
(54, 'OcÃ©ano AtlÃ¡ntico Ltda.', 'Yvonne Moncada', 'Ing. Gustavo Moncada 8585 Piso 20-A', 'Buenos Aires', '1010.000000', 'Argentina', NULL, NULL),
(55, 'Old World Delicatessen', 'Rene Phillips', '2743 Bering St.', 'Anchorage', '99508.000000', 'USA', NULL, NULL),
(56, 'Ottilies KÃ¤seladen', 'Henriette Pfalzheim', 'Mehrheimerstr. 369', 'KÃ¶ln', '50739.000000', 'Germany', NULL, NULL),
(57, 'Paris spÃ©cialitÃ©s', 'Marie Bertrand', '265, boulevard Charonne', 'Paris', '75012.000000', 'France', NULL, NULL),
(58, 'Pericles Comidas clÃ¡sicas', 'Guillermo FernÃ¡ndez', 'Calle Dr. Jorge Cash 321', 'MÃ©xico D.F.', '5033.000000', 'Mexico', NULL, NULL),
(59, 'Piccolo und mehr', 'Georg Pipps', 'Geislweg 14', 'Salzburg', '5020.000000', 'Austria', NULL, NULL),
(60, 'Princesa Isabel Vinhoss', 'Isabel de Castro', 'Estrada da saÃºde n. 58', 'Lisboa', '1756.000000', 'Portugal', NULL, NULL),
(61, 'Que DelÃ­cia', 'Bernardo Batista', 'Rua da Panificadora, 12', 'Rio de Janeiro', '', 'Brazil', NULL, NULL),
(62, 'Queen Cozinha', 'LÃºcia Carvalho', 'Alameda dos CanÃ rios, 891', 'SÃ£o Paulo', '', 'Brazil', NULL, NULL),
(63, 'QUICK-Stop', 'Horst Kloss', 'TaucherstraÃŸe 10', 'Cunewalde', '1307.000000', 'Germany', NULL, NULL),
(64, 'Rancho grande', 'Sergio GutiÃ©rrez', 'Av. del Libertador 900', 'Buenos Aires', '1010.000000', 'Argentina', NULL, NULL),
(65, 'Rattlesnake Canyon Grocery', 'Paula Wilson', '2817 Milton Dr.', 'Albuquerque', '87110.000000', 'USA', NULL, NULL),
(66, 'Reggiani Caseifici', 'Maurizio Moroni', 'Strada Provinciale 124', 'Reggio Emilia', '42100.000000', 'Italy', NULL, NULL),
(67, 'Ricardo Adocicados', 'Janete Limeira', 'Av. Copacabana, 267', 'Rio de Janeiro', '', 'Brazil', NULL, NULL),
(68, 'Richter Supermarkt', 'Michael Holz', 'Grenzacherweg 237', 'GenÃ¨ve', '1203.000000', 'Switzerland', NULL, NULL),
(69, 'Romero y tomillo', 'Alejandra Camino', 'Gran VÃ­a, 1', 'Madrid', '28001.000000', 'Spain', NULL, NULL),
(70, 'SantÃ© Gourmet', 'Jonas Bergulfsen', 'Erling Skakkes gate 78', 'Stavern', '4110.000000', 'Norway', NULL, NULL),
(71, 'Save-a-lot Markets', 'Jose Pavarotti', '187 Suffolk Ln.', 'Boise', '83720.000000', 'USA', NULL, NULL),
(72, 'Seven Seas Imports', 'Hari Kumar', '90 Wadhurst Rd.', 'London', '', 'UK', NULL, NULL),
(73, 'Simons bistro', 'Jytte Petersen', 'VinbÃ¦ltet 34', 'KÃ¸benhavn', '1734.000000', 'Denmark', NULL, NULL),
(74, 'SpÃ©cialitÃ©s du monde', 'Dominique Perrier', '25, rue Lauriston', 'Paris', '75016.000000', 'France', NULL, NULL),
(75, 'Split Rail Beer & Ale', 'Art Braunschweiger', 'P.O. Box 555', 'Lander', '82520.000000', 'USA', NULL, NULL),
(76, 'SuprÃªmes dÃ©lices', 'Pascale Cartrain', 'Boulevard Tirou, 255', 'Charleroi', '', 'Belgium', NULL, NULL),
(77, 'The Big Cheese', 'Liz Nixon', '89 Jefferson Way Suite 2', 'Portland', '97201.000000', 'USA', NULL, NULL),
(78, 'The Cracker Box', 'Liu Wong', '55 Grizzly Peak Rd.', 'Butte', '59801.000000', 'USA', NULL, NULL),
(79, 'Toms SpezialitÃ¤ten', 'Karin Josephs', 'Luisenstr. 48', 'MÃ¼nster', '44087.000000', 'Germany', NULL, NULL),
(80, 'Tortuga Restaurante', 'Miguel Angel Paolino', 'Avda. Azteca 123', 'MÃ©xico D.F.', '5033.000000', 'Mexico', NULL, NULL),
(81, 'TradiÃ§Ã£o Hipermercados', 'Anabela Domingues', 'Av. InÃªs de Castro, 414', 'SÃ£o Paulo', '', 'Brazil', NULL, NULL),
(82, 'Trail\'s Head Gourmet Provisioners', 'Helvetius Nagy', '722 DaVinci Blvd.', 'Kirkland', '98034.000000', 'USA', NULL, NULL),
(83, 'Vaffeljernet', 'Palle Ibsen', 'SmagslÃ¸get 45', 'Ã…rhus', '8200.000000', 'Denmark', NULL, NULL),
(84, 'Victuailles en stock', 'Mary Saveley', '2, rue du Commerce', 'Lyon', '69004.000000', 'France', NULL, NULL),
(85, 'Vins et alcools Chevalier', 'Paul Henriot', '59 rue de l\'Abbaye', 'Reims', '51100.000000', 'France', NULL, NULL),
(86, 'Die Wandernde Kuh', 'Rita MÃ¼ller', 'Adenauerallee 900', 'Stuttgart', '70563.000000', 'Germany', NULL, NULL),
(87, 'Wartian Herkku', 'Pirkko Koskitalo', 'Torikatu 38', 'Oulu', '90110.000000', 'Finland', NULL, NULL),
(88, 'Wellington Importadora', 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '', 'Brazil', NULL, NULL),
(89, 'White Clover Markets', 'Karl Jablonski', '305 - 14th Ave. S. Suite 3B', 'Seattle', '98128.000000', 'USA', NULL, NULL),
(90, 'Wilman Kala', 'Matti Karttunen', 'Keskuskatu 45', 'Helsinki', '21240.000000', 'Finland', NULL, NULL),
(91, 'Wolski', 'Zbyszek', 'ul. Filtrowa 68', 'Walla', '', 'Poland', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_pembayarans`
--

CREATE TABLE `data_pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` int(11) NOT NULL,
  `kelas` enum('X','XI','XII') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` enum('RPL','TKJ','ELIN','MEKATRONIKA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan_bayar` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` enum('X','XI','XII') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` enum('RPL','TKJ','ELIN','MEKATRONIKA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelepon` bigint(20) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `foto`, `nisn`, `nama`, `jenis_kelamin`, `kelas`, `jurusan`, `notelepon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'workers-it-company-working-computer.jpg', 1234, 'Bagas', 'Laki-Laki', 'XI', 'RPL', 345678876, 'Malang', NULL, '2022-05-24 00:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_02_18_111324_create_order_details_table', 1),
(3, '2022_02_18_112039_create_products_table', 2),
(4, '2022_02_18_112411_create_orders_table', 3),
(5, '2022_02_19_010520_create_customers_table', 4),
(6, '2022_02_19_011005_create_categories_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `employee_id` bigint(20) NOT NULL,
  `order_date` date NOT NULL,
  `shipper_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `employee_id`, `order_date`, `shipper_id`, `created_at`, `updated_at`) VALUES
(10248, 90, 5, '1996-07-04', 3, NULL, NULL),
(10249, 81, 6, '1996-07-05', 1, NULL, NULL),
(10250, 34, 4, '1996-07-08', 2, NULL, NULL),
(10251, 84, 3, '1996-07-08', 1, NULL, NULL),
(10252, 76, 4, '1996-07-09', 2, NULL, NULL),
(10253, 34, 3, '1996-07-10', 2, NULL, NULL),
(10254, 14, 5, '1996-07-11', 2, NULL, NULL),
(10255, 68, 9, '1996-07-12', 3, NULL, NULL),
(10256, 88, 3, '1996-07-15', 2, NULL, NULL),
(10257, 35, 4, '1996-07-16', 3, NULL, NULL),
(10258, 20, 1, '1996-07-17', 1, NULL, NULL),
(10259, 13, 4, '1996-07-18', 3, NULL, NULL),
(10260, 55, 4, '1996-07-19', 1, NULL, NULL),
(10261, 61, 4, '1996-07-19', 2, NULL, NULL),
(10262, 65, 8, '1996-07-22', 3, NULL, NULL),
(10263, 20, 9, '1996-07-23', 3, NULL, NULL),
(10264, 24, 6, '1996-07-24', 3, NULL, NULL),
(10265, 7, 2, '1996-07-25', 1, NULL, NULL),
(10266, 87, 3, '1996-07-26', 3, NULL, NULL),
(10267, 25, 4, '1996-07-29', 1, NULL, NULL),
(10268, 33, 8, '1996-07-30', 3, NULL, NULL),
(10269, 89, 5, '1996-07-31', 1, NULL, NULL),
(10270, 87, 1, '1996-08-01', 1, NULL, NULL),
(10271, 75, 6, '1996-08-01', 2, NULL, NULL),
(10272, 65, 6, '1996-08-02', 2, NULL, NULL),
(10273, 63, 3, '1996-08-05', 3, NULL, NULL),
(10274, 85, 6, '1996-08-06', 1, NULL, NULL),
(10275, 49, 1, '1996-08-07', 1, NULL, NULL),
(10276, 80, 8, '1996-08-08', 3, NULL, NULL),
(10277, 52, 2, '1996-08-09', 3, NULL, NULL),
(10278, 5, 8, '1996-08-12', 2, NULL, NULL),
(10279, 44, 8, '1996-08-13', 2, NULL, NULL),
(10280, 5, 2, '1996-08-14', 1, NULL, NULL),
(10281, 69, 4, '1996-08-14', 1, NULL, NULL),
(10282, 69, 4, '1996-08-15', 1, NULL, NULL),
(10283, 46, 3, '1996-08-16', 3, NULL, NULL),
(10284, 44, 4, '1996-08-19', 1, NULL, NULL),
(10285, 63, 1, '1996-08-20', 2, NULL, NULL),
(10286, 63, 8, '1996-08-21', 3, NULL, NULL),
(10287, 67, 8, '1996-08-22', 3, NULL, NULL),
(10288, 66, 4, '1996-08-23', 1, NULL, NULL),
(10289, 11, 7, '1996-08-26', 3, NULL, NULL),
(10290, 15, 8, '1996-08-27', 1, NULL, NULL),
(10291, 61, 6, '1996-08-27', 2, NULL, NULL),
(10292, 81, 1, '1996-08-28', 2, NULL, NULL),
(10293, 80, 1, '1996-08-29', 3, NULL, NULL),
(10294, 65, 4, '1996-08-30', 2, NULL, NULL),
(10295, 85, 2, '1996-09-02', 2, NULL, NULL),
(10296, 46, 6, '1996-09-03', 1, NULL, NULL),
(10297, 7, 5, '1996-09-04', 2, NULL, NULL),
(10298, 37, 6, '1996-09-05', 2, NULL, NULL),
(10299, 67, 4, '1996-09-06', 2, NULL, NULL),
(10300, 49, 2, '1996-09-09', 2, NULL, NULL),
(10301, 86, 8, '1996-09-09', 2, NULL, NULL),
(10302, 76, 4, '1996-09-10', 2, NULL, NULL),
(10303, 30, 7, '1996-09-11', 2, NULL, NULL),
(10304, 80, 1, '1996-09-12', 2, NULL, NULL),
(10305, 55, 8, '1996-09-13', 3, NULL, NULL),
(10306, 69, 1, '1996-09-16', 3, NULL, NULL),
(10307, 48, 2, '1996-09-17', 2, NULL, NULL),
(10308, 2, 7, '1996-09-18', 3, NULL, NULL),
(10309, 37, 3, '1996-09-19', 1, NULL, NULL),
(10310, 77, 8, '1996-09-20', 2, NULL, NULL),
(10311, 18, 1, '1996-09-20', 3, NULL, NULL),
(10312, 86, 2, '1996-09-23', 2, NULL, NULL),
(10313, 63, 2, '1996-09-24', 2, NULL, NULL),
(10314, 65, 1, '1996-09-25', 2, NULL, NULL),
(10315, 38, 4, '1996-09-26', 2, NULL, NULL),
(10316, 65, 1, '1996-09-27', 3, NULL, NULL),
(10317, 48, 6, '1996-09-30', 1, NULL, NULL),
(10318, 38, 8, '1996-10-01', 2, NULL, NULL),
(10319, 80, 7, '1996-10-02', 3, NULL, NULL),
(10320, 87, 5, '1996-10-03', 3, NULL, NULL),
(10321, 38, 3, '1996-10-03', 2, NULL, NULL),
(10322, 58, 7, '1996-10-04', 3, NULL, NULL),
(10323, 39, 4, '1996-10-07', 1, NULL, NULL),
(10324, 71, 9, '1996-10-08', 1, NULL, NULL),
(10325, 39, 1, '1996-10-09', 3, NULL, NULL),
(10326, 8, 4, '1996-10-10', 2, NULL, NULL),
(10327, 24, 2, '1996-10-11', 1, NULL, NULL),
(10328, 28, 4, '1996-10-14', 3, NULL, NULL),
(10329, 75, 4, '1996-10-15', 2, NULL, NULL),
(10330, 46, 3, '1996-10-16', 1, NULL, NULL),
(10331, 9, 9, '1996-10-16', 1, NULL, NULL),
(10332, 51, 3, '1996-10-17', 2, NULL, NULL),
(10333, 87, 5, '1996-10-18', 3, NULL, NULL),
(10334, 84, 8, '1996-10-21', 2, NULL, NULL),
(10335, 37, 7, '1996-10-22', 2, NULL, NULL),
(10336, 60, 7, '1996-10-23', 2, NULL, NULL),
(10337, 25, 4, '1996-10-24', 3, NULL, NULL),
(10338, 55, 4, '1996-10-25', 3, NULL, NULL),
(10339, 51, 2, '1996-10-28', 2, NULL, NULL),
(10340, 9, 1, '1996-10-29', 3, NULL, NULL),
(10341, 73, 7, '1996-10-29', 3, NULL, NULL),
(10342, 25, 4, '1996-10-30', 2, NULL, NULL),
(10343, 44, 4, '1996-10-31', 1, NULL, NULL),
(10344, 89, 4, '1996-11-01', 2, NULL, NULL),
(10345, 63, 2, '1996-11-04', 2, NULL, NULL),
(10346, 65, 3, '1996-11-05', 3, NULL, NULL),
(10347, 21, 4, '1996-11-06', 3, NULL, NULL),
(10348, 86, 4, '1996-11-07', 2, NULL, NULL),
(10349, 75, 7, '1996-11-08', 1, NULL, NULL),
(10350, 41, 6, '1996-11-11', 2, NULL, NULL),
(10351, 20, 1, '1996-11-11', 1, NULL, NULL),
(10352, 28, 3, '1996-11-12', 3, NULL, NULL),
(10353, 59, 7, '1996-11-13', 3, NULL, NULL),
(10354, 58, 8, '1996-11-14', 3, NULL, NULL),
(10355, 4, 6, '1996-11-15', 1, NULL, NULL),
(10356, 86, 6, '1996-11-18', 2, NULL, NULL),
(10357, 46, 1, '1996-11-19', 3, NULL, NULL),
(10358, 41, 5, '1996-11-20', 1, NULL, NULL),
(10359, 72, 5, '1996-11-21', 3, NULL, NULL),
(10360, 7, 4, '1996-11-22', 3, NULL, NULL),
(10361, 63, 1, '1996-11-22', 2, NULL, NULL),
(10362, 9, 3, '1996-11-25', 1, NULL, NULL),
(10363, 17, 4, '1996-11-26', 3, NULL, NULL),
(10364, 19, 1, '1996-11-26', 1, NULL, NULL),
(10365, 3, 3, '1996-11-27', 2, NULL, NULL),
(10366, 29, 8, '1996-11-28', 2, NULL, NULL),
(10367, 83, 7, '1996-11-28', 3, NULL, NULL),
(10368, 20, 2, '1996-11-29', 2, NULL, NULL),
(10369, 75, 8, '1996-12-02', 2, NULL, NULL),
(10370, 14, 6, '1996-12-03', 2, NULL, NULL),
(10371, 41, 1, '1996-12-03', 1, NULL, NULL),
(10372, 62, 5, '1996-12-04', 2, NULL, NULL),
(10373, 37, 4, '1996-12-05', 3, NULL, NULL),
(10374, 91, 1, '1996-12-05', 3, NULL, NULL),
(10375, 36, 3, '1996-12-06', 2, NULL, NULL),
(10376, 51, 1, '1996-12-09', 2, NULL, NULL),
(10377, 72, 1, '1996-12-09', 3, NULL, NULL),
(10378, 24, 5, '1996-12-10', 3, NULL, NULL),
(10379, 61, 2, '1996-12-11', 1, NULL, NULL),
(10380, 37, 8, '1996-12-12', 3, NULL, NULL),
(10381, 46, 3, '1996-12-12', 3, NULL, NULL),
(10382, 20, 4, '1996-12-13', 1, NULL, NULL),
(10383, 4, 8, '1996-12-16', 3, NULL, NULL),
(10384, 5, 3, '1996-12-16', 3, NULL, NULL),
(10385, 75, 1, '1996-12-17', 2, NULL, NULL),
(10386, 21, 9, '1996-12-18', 3, NULL, NULL),
(10387, 70, 1, '1996-12-18', 2, NULL, NULL),
(10388, 72, 2, '1996-12-19', 1, NULL, NULL),
(10389, 10, 4, '1996-12-20', 2, NULL, NULL),
(10390, 20, 6, '1996-12-23', 1, NULL, NULL),
(10391, 17, 3, '1996-12-23', 3, NULL, NULL),
(10392, 59, 2, '1996-12-24', 3, NULL, NULL),
(10393, 71, 1, '1996-12-25', 3, NULL, NULL),
(10394, 36, 1, '1996-12-25', 3, NULL, NULL),
(10395, 35, 6, '1996-12-26', 1, NULL, NULL),
(10396, 25, 1, '1996-12-27', 3, NULL, NULL),
(10397, 60, 5, '1996-12-27', 1, NULL, NULL),
(10398, 71, 2, '1996-12-30', 3, NULL, NULL),
(10399, 83, 8, '1996-12-31', 3, NULL, NULL),
(10400, 19, 1, '1997-01-01', 3, NULL, NULL),
(10401, 65, 1, '1997-01-01', 1, NULL, NULL),
(10402, 20, 8, '1997-01-02', 2, NULL, NULL),
(10403, 20, 4, '1997-01-03', 3, NULL, NULL),
(10404, 49, 2, '1997-01-03', 1, NULL, NULL),
(10405, 47, 1, '1997-01-06', 1, NULL, NULL),
(10406, 62, 7, '1997-01-07', 1, NULL, NULL),
(10407, 56, 2, '1997-01-07', 2, NULL, NULL),
(10408, 23, 8, '1997-01-08', 1, NULL, NULL),
(10409, 54, 3, '1997-01-09', 1, NULL, NULL),
(10410, 10, 3, '1997-01-10', 3, NULL, NULL),
(10411, 10, 9, '1997-01-10', 3, NULL, NULL),
(10412, 87, 8, '1997-01-13', 2, NULL, NULL),
(10413, 41, 3, '1997-01-14', 2, NULL, NULL),
(10414, 21, 2, '1997-01-14', 3, NULL, NULL),
(10415, 36, 3, '1997-01-15', 1, NULL, NULL),
(10416, 87, 8, '1997-01-16', 3, NULL, NULL),
(10417, 73, 4, '1997-01-16', 3, NULL, NULL),
(10418, 63, 4, '1997-01-17', 1, NULL, NULL),
(10419, 68, 4, '1997-01-20', 2, NULL, NULL),
(10420, 88, 3, '1997-01-21', 1, NULL, NULL),
(10421, 61, 8, '1997-01-21', 1, NULL, NULL),
(10422, 27, 2, '1997-01-22', 1, NULL, NULL),
(10423, 31, 6, '1997-01-23', 3, NULL, NULL),
(10424, 51, 7, '1997-01-23', 2, NULL, NULL),
(10425, 41, 6, '1997-01-24', 2, NULL, NULL),
(10426, 29, 4, '1997-01-27', 1, NULL, NULL),
(10427, 59, 4, '1997-01-27', 2, NULL, NULL),
(10428, 66, 7, '1997-01-28', 1, NULL, NULL),
(10429, 37, 3, '1997-01-29', 2, NULL, NULL),
(10430, 20, 4, '1997-01-30', 1, NULL, NULL),
(10431, 10, 4, '1997-01-30', 2, NULL, NULL),
(10432, 75, 3, '1997-01-31', 2, NULL, NULL),
(10433, 60, 3, '1997-02-03', 3, NULL, NULL),
(10434, 24, 3, '1997-02-03', 2, NULL, NULL),
(10435, 16, 8, '1997-02-04', 2, NULL, NULL),
(10436, 7, 3, '1997-02-05', 2, NULL, NULL),
(10437, 87, 8, '1997-02-05', 1, NULL, NULL),
(10438, 79, 3, '1997-02-06', 2, NULL, NULL),
(10439, 51, 6, '1997-02-07', 3, NULL, NULL),
(10440, 71, 4, '1997-02-10', 2, NULL, NULL),
(10441, 55, 3, '1997-02-10', 2, NULL, NULL),
(10442, 20, 3, '1997-02-11', 2, NULL, NULL),
(10443, 66, 8, '1997-02-12', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 10248, 11, 12, NULL, NULL),
(2, 10248, 42, 10, NULL, NULL),
(3, 10248, 72, 5, NULL, NULL),
(4, 10249, 14, 9, NULL, NULL),
(5, 10249, 51, 40, NULL, NULL),
(6, 10250, 41, 10, NULL, NULL),
(7, 10250, 51, 35, NULL, NULL),
(8, 10250, 65, 15, NULL, NULL),
(9, 10251, 22, 6, NULL, NULL),
(10, 10251, 57, 15, NULL, NULL),
(11, 10251, 65, 20, NULL, NULL),
(12, 10252, 20, 40, NULL, NULL),
(13, 10252, 33, 25, NULL, NULL),
(14, 10252, 60, 40, NULL, NULL),
(15, 10253, 31, 20, NULL, NULL),
(16, 10253, 39, 42, NULL, NULL),
(17, 10253, 49, 40, NULL, NULL),
(18, 10254, 24, 15, NULL, NULL),
(19, 10254, 55, 21, NULL, NULL),
(20, 10254, 74, 21, NULL, NULL),
(21, 10255, 2, 20, NULL, NULL),
(22, 10255, 16, 35, NULL, NULL),
(23, 10255, 36, 25, NULL, NULL),
(24, 10255, 59, 30, NULL, NULL),
(25, 10256, 53, 15, NULL, NULL),
(26, 10256, 77, 12, NULL, NULL),
(27, 10257, 27, 25, NULL, NULL),
(28, 10257, 39, 6, NULL, NULL),
(29, 10257, 77, 15, NULL, NULL),
(30, 10258, 2, 50, NULL, NULL),
(31, 10258, 5, 65, NULL, NULL),
(32, 10258, 32, 6, NULL, NULL),
(33, 10259, 21, 10, NULL, NULL),
(34, 10259, 37, 1, NULL, NULL),
(35, 10260, 41, 16, NULL, NULL),
(36, 10260, 57, 50, NULL, NULL),
(37, 10260, 62, 15, NULL, NULL),
(38, 10260, 70, 21, NULL, NULL),
(39, 10261, 21, 20, NULL, NULL),
(40, 10261, 35, 20, NULL, NULL),
(41, 10262, 5, 12, NULL, NULL),
(42, 10262, 7, 15, NULL, NULL),
(43, 10262, 56, 2, NULL, NULL),
(44, 10263, 16, 60, NULL, NULL),
(45, 10263, 24, 28, NULL, NULL),
(46, 10263, 30, 60, NULL, NULL),
(47, 10263, 74, 36, NULL, NULL),
(48, 10264, 2, 35, NULL, NULL),
(49, 10264, 41, 25, NULL, NULL),
(50, 10265, 17, 30, NULL, NULL),
(51, 10265, 70, 20, NULL, NULL),
(52, 10266, 12, 12, NULL, NULL),
(53, 10267, 40, 50, NULL, NULL),
(54, 10267, 59, 70, NULL, NULL),
(55, 10267, 76, 15, NULL, NULL),
(56, 10268, 29, 10, NULL, NULL),
(57, 10268, 72, 4, NULL, NULL),
(58, 10269, 33, 60, NULL, NULL),
(59, 10269, 72, 20, NULL, NULL),
(60, 10270, 36, 30, NULL, NULL),
(61, 10270, 43, 25, NULL, NULL),
(62, 10271, 33, 24, NULL, NULL),
(63, 10272, 20, 6, NULL, NULL),
(64, 10272, 31, 40, NULL, NULL),
(65, 10272, 72, 24, NULL, NULL),
(66, 10273, 10, 24, NULL, NULL),
(67, 10273, 31, 15, NULL, NULL),
(68, 10273, 33, 20, NULL, NULL),
(69, 10273, 40, 60, NULL, NULL),
(70, 10273, 76, 33, NULL, NULL),
(71, 10274, 71, 20, NULL, NULL),
(72, 10274, 72, 7, NULL, NULL),
(73, 10275, 24, 12, NULL, NULL),
(74, 10275, 59, 6, NULL, NULL),
(75, 10276, 10, 15, NULL, NULL),
(76, 10276, 13, 10, NULL, NULL),
(77, 10277, 28, 20, NULL, NULL),
(78, 10277, 62, 12, NULL, NULL),
(79, 10278, 44, 16, NULL, NULL),
(80, 10278, 59, 15, NULL, NULL),
(81, 10278, 63, 8, NULL, NULL),
(82, 10278, 73, 25, NULL, NULL),
(83, 10279, 17, 15, NULL, NULL),
(84, 10280, 24, 12, NULL, NULL),
(85, 10280, 55, 20, NULL, NULL),
(86, 10280, 75, 30, NULL, NULL),
(87, 10281, 19, 1, NULL, NULL),
(88, 10281, 24, 6, NULL, NULL),
(89, 10281, 35, 4, NULL, NULL),
(90, 10282, 30, 6, NULL, NULL),
(91, 10282, 57, 2, NULL, NULL),
(92, 10283, 15, 20, NULL, NULL),
(93, 10283, 19, 18, NULL, NULL),
(94, 10283, 60, 35, NULL, NULL),
(95, 10283, 72, 3, NULL, NULL),
(96, 10284, 27, 15, NULL, NULL),
(97, 10284, 44, 21, NULL, NULL),
(98, 10284, 60, 20, NULL, NULL),
(99, 10284, 67, 5, NULL, NULL),
(100, 10285, 1, 45, NULL, NULL),
(101, 10285, 40, 40, NULL, NULL),
(102, 10285, 53, 36, NULL, NULL),
(103, 10286, 35, 100, NULL, NULL),
(104, 10286, 62, 40, NULL, NULL),
(105, 10287, 16, 40, NULL, NULL),
(106, 10287, 34, 20, NULL, NULL),
(107, 10287, 46, 15, NULL, NULL),
(108, 10288, 54, 10, NULL, NULL),
(109, 10288, 68, 3, NULL, NULL),
(110, 10289, 3, 30, NULL, NULL),
(111, 10289, 64, 9, NULL, NULL),
(112, 10290, 5, 20, NULL, NULL),
(113, 10290, 29, 15, NULL, NULL),
(114, 10290, 49, 15, NULL, NULL),
(115, 10290, 77, 10, NULL, NULL),
(116, 10291, 13, 20, NULL, NULL),
(117, 10291, 44, 24, NULL, NULL),
(118, 10291, 51, 2, NULL, NULL),
(119, 10292, 20, 20, NULL, NULL),
(120, 10293, 18, 12, NULL, NULL),
(121, 10293, 24, 10, NULL, NULL),
(122, 10293, 63, 5, NULL, NULL),
(123, 10293, 75, 6, NULL, NULL),
(124, 10294, 1, 18, NULL, NULL),
(125, 10294, 17, 15, NULL, NULL),
(126, 10294, 43, 15, NULL, NULL),
(127, 10294, 60, 21, NULL, NULL),
(128, 10294, 75, 6, NULL, NULL),
(129, 10295, 56, 4, NULL, NULL),
(130, 10296, 11, 12, NULL, NULL),
(131, 10296, 16, 30, NULL, NULL),
(132, 10296, 69, 15, NULL, NULL),
(133, 10297, 39, 60, NULL, NULL),
(134, 10297, 72, 20, NULL, NULL),
(135, 10298, 2, 40, NULL, NULL),
(136, 10298, 36, 40, NULL, NULL),
(137, 10298, 59, 30, NULL, NULL),
(138, 10298, 62, 15, NULL, NULL),
(139, 10299, 19, 15, NULL, NULL),
(140, 10299, 70, 20, NULL, NULL),
(141, 10300, 66, 30, NULL, NULL),
(142, 10300, 68, 20, NULL, NULL),
(143, 10301, 40, 10, NULL, NULL),
(144, 10301, 56, 20, NULL, NULL),
(145, 10302, 17, 40, NULL, NULL),
(146, 10302, 28, 28, NULL, NULL),
(147, 10302, 43, 12, NULL, NULL),
(148, 10303, 40, 40, NULL, NULL),
(149, 10303, 65, 30, NULL, NULL),
(150, 10303, 68, 15, NULL, NULL),
(151, 10304, 49, 30, NULL, NULL),
(152, 10304, 59, 10, NULL, NULL),
(153, 10304, 71, 2, NULL, NULL),
(154, 10305, 18, 25, NULL, NULL),
(155, 10305, 29, 25, NULL, NULL),
(156, 10305, 39, 30, NULL, NULL),
(157, 10306, 30, 10, NULL, NULL),
(158, 10306, 53, 10, NULL, NULL),
(159, 10306, 54, 5, NULL, NULL),
(160, 10307, 62, 10, NULL, NULL),
(161, 10307, 68, 3, NULL, NULL),
(162, 10308, 69, 1, NULL, NULL),
(163, 10308, 70, 5, NULL, NULL),
(164, 10309, 4, 20, NULL, NULL),
(165, 10309, 6, 30, NULL, NULL),
(166, 10309, 42, 2, NULL, NULL),
(167, 10309, 43, 20, NULL, NULL),
(168, 10309, 71, 3, NULL, NULL),
(169, 10310, 16, 10, NULL, NULL),
(170, 10310, 62, 5, NULL, NULL),
(171, 10311, 42, 6, NULL, NULL),
(172, 10311, 69, 7, NULL, NULL),
(173, 10312, 28, 4, NULL, NULL),
(174, 10312, 43, 24, NULL, NULL),
(175, 10312, 53, 20, NULL, NULL),
(176, 10312, 75, 10, NULL, NULL),
(177, 10313, 36, 12, NULL, NULL),
(178, 10314, 32, 40, NULL, NULL),
(179, 10314, 58, 30, NULL, NULL),
(180, 10314, 62, 25, NULL, NULL),
(181, 10315, 34, 14, NULL, NULL),
(182, 10315, 70, 30, NULL, NULL),
(183, 10316, 41, 10, NULL, NULL),
(184, 10316, 62, 70, NULL, NULL),
(185, 10317, 1, 20, NULL, NULL),
(186, 10318, 41, 20, NULL, NULL),
(187, 10318, 76, 6, NULL, NULL),
(188, 10319, 17, 8, NULL, NULL),
(189, 10319, 28, 14, NULL, NULL),
(190, 10319, 76, 30, NULL, NULL),
(191, 10320, 71, 30, NULL, NULL),
(192, 10321, 35, 10, NULL, NULL),
(193, 10322, 52, 20, NULL, NULL),
(194, 10323, 15, 5, NULL, NULL),
(195, 10323, 25, 4, NULL, NULL),
(196, 10323, 39, 4, NULL, NULL),
(197, 10324, 16, 21, NULL, NULL),
(198, 10324, 35, 70, NULL, NULL),
(199, 10324, 46, 30, NULL, NULL),
(200, 10324, 59, 40, NULL, NULL),
(201, 10324, 63, 80, NULL, NULL),
(202, 10325, 6, 6, NULL, NULL),
(203, 10325, 13, 12, NULL, NULL),
(204, 10325, 14, 9, NULL, NULL),
(205, 10325, 31, 4, NULL, NULL),
(206, 10325, 72, 40, NULL, NULL),
(207, 10326, 4, 24, NULL, NULL),
(208, 10326, 57, 16, NULL, NULL),
(209, 10326, 75, 50, NULL, NULL),
(210, 10327, 2, 25, NULL, NULL),
(211, 10327, 11, 50, NULL, NULL),
(212, 10327, 30, 35, NULL, NULL),
(213, 10327, 58, 30, NULL, NULL),
(214, 10328, 59, 9, NULL, NULL),
(215, 10328, 65, 40, NULL, NULL),
(216, 10328, 68, 10, NULL, NULL),
(217, 10329, 19, 10, NULL, NULL),
(218, 10329, 30, 8, NULL, NULL),
(219, 10329, 38, 20, NULL, NULL),
(220, 10329, 56, 12, NULL, NULL),
(221, 10330, 26, 50, NULL, NULL),
(222, 10330, 72, 25, NULL, NULL),
(223, 10331, 54, 15, NULL, NULL),
(224, 10332, 18, 40, NULL, NULL),
(225, 10332, 42, 10, NULL, NULL),
(226, 10332, 47, 16, NULL, NULL),
(227, 10333, 14, 10, NULL, NULL),
(228, 10333, 21, 10, NULL, NULL),
(229, 10333, 71, 40, NULL, NULL),
(230, 10334, 52, 8, NULL, NULL),
(231, 10334, 68, 10, NULL, NULL),
(232, 10335, 2, 7, NULL, NULL),
(233, 10335, 31, 25, NULL, NULL),
(234, 10335, 32, 6, NULL, NULL),
(235, 10335, 51, 48, NULL, NULL),
(236, 10336, 4, 18, NULL, NULL),
(237, 10337, 23, 40, NULL, NULL),
(238, 10337, 26, 24, NULL, NULL),
(239, 10337, 36, 20, NULL, NULL),
(240, 10337, 37, 28, NULL, NULL),
(241, 10337, 72, 25, NULL, NULL),
(242, 10338, 17, 20, NULL, NULL),
(243, 10338, 30, 15, NULL, NULL),
(244, 10339, 4, 10, NULL, NULL),
(245, 10339, 17, 70, NULL, NULL),
(246, 10339, 62, 28, NULL, NULL),
(247, 10340, 18, 20, NULL, NULL),
(248, 10340, 41, 12, NULL, NULL),
(249, 10340, 43, 40, NULL, NULL),
(250, 10341, 33, 8, NULL, NULL),
(251, 10341, 59, 9, NULL, NULL),
(252, 10342, 2, 24, NULL, NULL),
(253, 10342, 31, 56, NULL, NULL),
(254, 10342, 36, 40, NULL, NULL),
(255, 10342, 55, 40, NULL, NULL),
(256, 10343, 64, 50, NULL, NULL),
(257, 10343, 68, 4, NULL, NULL),
(258, 10343, 76, 15, NULL, NULL),
(259, 10344, 4, 35, NULL, NULL),
(260, 10344, 8, 70, NULL, NULL),
(261, 10345, 8, 70, NULL, NULL),
(262, 10345, 19, 80, NULL, NULL),
(263, 10345, 42, 9, NULL, NULL),
(264, 10346, 17, 36, NULL, NULL),
(265, 10346, 56, 20, NULL, NULL),
(266, 10347, 25, 10, NULL, NULL),
(267, 10347, 39, 50, NULL, NULL),
(268, 10347, 40, 4, NULL, NULL),
(269, 10347, 75, 6, NULL, NULL),
(270, 10348, 1, 15, NULL, NULL),
(271, 10348, 23, 25, NULL, NULL),
(272, 10349, 54, 24, NULL, NULL),
(273, 10350, 50, 15, NULL, NULL),
(274, 10350, 69, 18, NULL, NULL),
(275, 10351, 38, 20, NULL, NULL),
(276, 10351, 41, 13, NULL, NULL),
(277, 10351, 44, 77, NULL, NULL),
(278, 10351, 65, 10, NULL, NULL),
(279, 10352, 24, 10, NULL, NULL),
(280, 10352, 54, 20, NULL, NULL),
(281, 10353, 11, 12, NULL, NULL),
(282, 10353, 38, 50, NULL, NULL),
(283, 10354, 1, 12, NULL, NULL),
(284, 10354, 29, 4, NULL, NULL),
(285, 10355, 24, 25, NULL, NULL),
(286, 10355, 57, 25, NULL, NULL),
(287, 10356, 31, 30, NULL, NULL),
(288, 10356, 55, 12, NULL, NULL),
(289, 10356, 69, 20, NULL, NULL),
(290, 10357, 10, 30, NULL, NULL),
(291, 10357, 26, 16, NULL, NULL),
(292, 10357, 60, 8, NULL, NULL),
(293, 10358, 24, 10, NULL, NULL),
(294, 10358, 34, 10, NULL, NULL),
(295, 10358, 36, 20, NULL, NULL),
(296, 10359, 16, 56, NULL, NULL),
(297, 10359, 31, 70, NULL, NULL),
(298, 10359, 60, 80, NULL, NULL),
(299, 10360, 28, 30, NULL, NULL),
(300, 10360, 29, 35, NULL, NULL),
(301, 10360, 38, 10, NULL, NULL),
(302, 10360, 49, 35, NULL, NULL),
(303, 10360, 54, 28, NULL, NULL),
(304, 10361, 39, 54, NULL, NULL),
(305, 10361, 60, 55, NULL, NULL),
(306, 10362, 25, 50, NULL, NULL),
(307, 10362, 51, 20, NULL, NULL),
(308, 10362, 54, 24, NULL, NULL),
(309, 10363, 31, 20, NULL, NULL),
(310, 10363, 75, 12, NULL, NULL),
(311, 10363, 76, 12, NULL, NULL),
(312, 10364, 69, 30, NULL, NULL),
(313, 10364, 71, 5, NULL, NULL),
(314, 10365, 11, 24, NULL, NULL),
(315, 10366, 65, 5, NULL, NULL),
(316, 10366, 77, 5, NULL, NULL),
(317, 10367, 34, 36, NULL, NULL),
(318, 10367, 54, 18, NULL, NULL),
(319, 10367, 65, 15, NULL, NULL),
(320, 10367, 77, 7, NULL, NULL),
(321, 10368, 21, 5, NULL, NULL),
(322, 10368, 28, 13, NULL, NULL),
(323, 10368, 57, 25, NULL, NULL),
(324, 10368, 64, 35, NULL, NULL),
(325, 10369, 29, 20, NULL, NULL),
(326, 10369, 56, 18, NULL, NULL),
(327, 10370, 1, 15, NULL, NULL),
(328, 10370, 64, 30, NULL, NULL),
(329, 10370, 74, 20, NULL, NULL),
(330, 10371, 36, 6, NULL, NULL),
(331, 10372, 20, 12, NULL, NULL),
(332, 10372, 38, 40, NULL, NULL),
(333, 10372, 60, 70, NULL, NULL),
(334, 10372, 72, 42, NULL, NULL),
(335, 10373, 58, 80, NULL, NULL),
(336, 10373, 71, 50, NULL, NULL),
(337, 10374, 31, 30, NULL, NULL),
(338, 10374, 58, 15, NULL, NULL),
(339, 10375, 14, 15, NULL, NULL),
(340, 10375, 54, 10, NULL, NULL),
(341, 10376, 31, 42, NULL, NULL),
(342, 10377, 28, 20, NULL, NULL),
(343, 10377, 39, 20, NULL, NULL),
(344, 10378, 71, 6, NULL, NULL),
(345, 10379, 41, 8, NULL, NULL),
(346, 10379, 63, 16, NULL, NULL),
(347, 10379, 65, 20, NULL, NULL),
(348, 10380, 30, 18, NULL, NULL),
(349, 10380, 53, 20, NULL, NULL),
(350, 10380, 60, 6, NULL, NULL),
(351, 10380, 70, 30, NULL, NULL),
(352, 10381, 74, 14, NULL, NULL),
(353, 10382, 5, 32, NULL, NULL),
(354, 10382, 18, 9, NULL, NULL),
(355, 10382, 29, 14, NULL, NULL),
(356, 10382, 33, 60, NULL, NULL),
(357, 10382, 74, 50, NULL, NULL),
(358, 10383, 13, 20, NULL, NULL),
(359, 10383, 50, 15, NULL, NULL),
(360, 10383, 56, 20, NULL, NULL),
(361, 10384, 20, 28, NULL, NULL),
(362, 10384, 60, 15, NULL, NULL),
(363, 10385, 7, 10, NULL, NULL),
(364, 10385, 60, 20, NULL, NULL),
(365, 10385, 68, 8, NULL, NULL),
(366, 10386, 24, 15, NULL, NULL),
(367, 10386, 34, 10, NULL, NULL),
(368, 10387, 24, 15, NULL, NULL),
(369, 10387, 28, 6, NULL, NULL),
(370, 10387, 59, 12, NULL, NULL),
(371, 10387, 71, 15, NULL, NULL),
(372, 10388, 45, 15, NULL, NULL),
(373, 10388, 52, 20, NULL, NULL),
(374, 10388, 53, 40, NULL, NULL),
(375, 10389, 10, 16, NULL, NULL),
(376, 10389, 55, 15, NULL, NULL),
(377, 10389, 62, 20, NULL, NULL),
(378, 10389, 70, 30, NULL, NULL),
(379, 10390, 31, 60, NULL, NULL),
(380, 10390, 35, 40, NULL, NULL),
(381, 10390, 46, 45, NULL, NULL),
(382, 10390, 72, 24, NULL, NULL),
(383, 10391, 13, 18, NULL, NULL),
(384, 10392, 69, 50, NULL, NULL),
(385, 10393, 2, 25, NULL, NULL),
(386, 10393, 14, 42, NULL, NULL),
(387, 10393, 25, 7, NULL, NULL),
(388, 10393, 26, 70, NULL, NULL),
(389, 10393, 31, 32, NULL, NULL),
(390, 10394, 13, 10, NULL, NULL),
(391, 10394, 62, 10, NULL, NULL),
(392, 10395, 46, 28, NULL, NULL),
(393, 10395, 53, 70, NULL, NULL),
(394, 10395, 69, 8, NULL, NULL),
(395, 10396, 23, 40, NULL, NULL),
(396, 10396, 71, 60, NULL, NULL),
(397, 10396, 72, 21, NULL, NULL),
(398, 10397, 21, 10, NULL, NULL),
(399, 10397, 51, 18, NULL, NULL),
(400, 10398, 35, 30, NULL, NULL),
(401, 10398, 55, 120, NULL, NULL),
(402, 10399, 68, 60, NULL, NULL),
(403, 10399, 71, 30, NULL, NULL),
(404, 10399, 76, 35, NULL, NULL),
(405, 10399, 77, 14, NULL, NULL),
(406, 10400, 29, 21, NULL, NULL),
(407, 10400, 35, 35, NULL, NULL),
(408, 10400, 49, 30, NULL, NULL),
(409, 10401, 30, 18, NULL, NULL),
(410, 10401, 56, 70, NULL, NULL),
(411, 10401, 65, 20, NULL, NULL),
(412, 10401, 71, 60, NULL, NULL),
(413, 10402, 23, 60, NULL, NULL),
(414, 10402, 63, 65, NULL, NULL),
(415, 10403, 16, 21, NULL, NULL),
(416, 10403, 48, 70, NULL, NULL),
(417, 10404, 26, 30, NULL, NULL),
(418, 10404, 42, 40, NULL, NULL),
(419, 10404, 49, 30, NULL, NULL),
(420, 10405, 3, 50, NULL, NULL),
(421, 10406, 1, 10, NULL, NULL),
(422, 10406, 21, 30, NULL, NULL),
(423, 10406, 28, 42, NULL, NULL),
(424, 10406, 36, 5, NULL, NULL),
(425, 10406, 40, 2, NULL, NULL),
(426, 10407, 11, 30, NULL, NULL),
(427, 10407, 69, 15, NULL, NULL),
(428, 10407, 71, 15, NULL, NULL),
(429, 10408, 37, 10, NULL, NULL),
(430, 10408, 54, 6, NULL, NULL),
(431, 10408, 62, 35, NULL, NULL),
(432, 10409, 14, 12, NULL, NULL),
(433, 10409, 21, 12, NULL, NULL),
(434, 10410, 33, 49, NULL, NULL),
(435, 10410, 59, 16, NULL, NULL),
(436, 10411, 41, 25, NULL, NULL),
(437, 10411, 44, 40, NULL, NULL),
(438, 10411, 59, 9, NULL, NULL),
(439, 10412, 14, 20, NULL, NULL),
(440, 10413, 1, 24, NULL, NULL),
(441, 10413, 62, 40, NULL, NULL),
(442, 10413, 76, 14, NULL, NULL),
(443, 10414, 19, 18, NULL, NULL),
(444, 10414, 33, 50, NULL, NULL),
(445, 10415, 17, 2, NULL, NULL),
(446, 10415, 33, 20, NULL, NULL),
(447, 10416, 19, 20, NULL, NULL),
(448, 10416, 53, 10, NULL, NULL),
(449, 10416, 57, 20, NULL, NULL),
(450, 10417, 38, 50, NULL, NULL),
(451, 10417, 46, 2, NULL, NULL),
(452, 10417, 68, 36, NULL, NULL),
(453, 10417, 77, 35, NULL, NULL),
(454, 10418, 2, 60, NULL, NULL),
(455, 10418, 47, 55, NULL, NULL),
(456, 10418, 61, 16, NULL, NULL),
(457, 10418, 74, 15, NULL, NULL),
(458, 10419, 60, 60, NULL, NULL),
(459, 10419, 69, 20, NULL, NULL),
(460, 10420, 9, 20, NULL, NULL),
(461, 10420, 13, 2, NULL, NULL),
(462, 10420, 70, 8, NULL, NULL),
(463, 10420, 73, 20, NULL, NULL),
(464, 10421, 19, 4, NULL, NULL),
(465, 10421, 26, 30, NULL, NULL),
(466, 10421, 53, 15, NULL, NULL),
(467, 10421, 77, 10, NULL, NULL),
(468, 10422, 26, 2, NULL, NULL),
(469, 10423, 31, 14, NULL, NULL),
(470, 10423, 59, 20, NULL, NULL),
(471, 10424, 35, 60, NULL, NULL),
(472, 10424, 38, 49, NULL, NULL),
(473, 10424, 68, 30, NULL, NULL),
(474, 10425, 55, 10, NULL, NULL),
(475, 10425, 76, 20, NULL, NULL),
(476, 10426, 56, 5, NULL, NULL),
(477, 10426, 64, 7, NULL, NULL),
(478, 10427, 14, 35, NULL, NULL),
(479, 10428, 46, 20, NULL, NULL),
(480, 10429, 50, 40, NULL, NULL),
(481, 10429, 63, 35, NULL, NULL),
(482, 10430, 17, 45, NULL, NULL),
(483, 10430, 21, 50, NULL, NULL),
(484, 10430, 56, 30, NULL, NULL),
(485, 10430, 59, 70, NULL, NULL),
(486, 10431, 17, 50, NULL, NULL),
(487, 10431, 40, 50, NULL, NULL),
(488, 10431, 47, 30, NULL, NULL),
(489, 10432, 26, 10, NULL, NULL),
(490, 10432, 54, 40, NULL, NULL),
(491, 10433, 56, 28, NULL, NULL),
(492, 10434, 11, 6, NULL, NULL),
(493, 10434, 76, 18, NULL, NULL),
(494, 10435, 2, 10, NULL, NULL),
(495, 10435, 22, 12, NULL, NULL),
(496, 10435, 72, 10, NULL, NULL),
(497, 10436, 46, 5, NULL, NULL),
(498, 10436, 56, 40, NULL, NULL),
(499, 10436, 64, 30, NULL, NULL),
(500, 10436, 75, 24, NULL, NULL),
(501, 10437, 53, 15, NULL, NULL),
(502, 10438, 19, 15, NULL, NULL),
(503, 10438, 34, 20, NULL, NULL),
(504, 10438, 57, 15, NULL, NULL),
(505, 10439, 12, 15, NULL, NULL),
(506, 10439, 16, 16, NULL, NULL),
(507, 10439, 64, 6, NULL, NULL),
(508, 10439, 74, 30, NULL, NULL),
(509, 10440, 2, 45, NULL, NULL),
(510, 10440, 16, 49, NULL, NULL),
(511, 10440, 29, 24, NULL, NULL),
(512, 10440, 61, 90, NULL, NULL),
(513, 10441, 27, 50, NULL, NULL),
(514, 10442, 11, 30, NULL, NULL),
(515, 10442, 54, 80, NULL, NULL),
(516, 10442, 66, 60, NULL, NULL),
(517, 10443, 11, 6, NULL, NULL),
(518, 10443, 28, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `supplier_id`, `category_id`, `unit`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Chais', 1, 1, '10 boxes x 20 bags', 18, NULL, NULL),
(2, 'Chang', 1, 1, '24 - 12 oz bottles', 19, NULL, NULL),
(3, 'Aniseed Syrup', 1, 2, '12 - 550 ml bottles', 10, NULL, NULL),
(4, 'Chef Anton\'s Cajun Seasoning', 2, 2, '48 - 6 oz jars', 22, NULL, NULL),
(5, 'Chef Anton\'s Gumbo Mix', 2, 2, '36 boxes', 21.35, NULL, NULL),
(6, 'Grandma\'s Boysenberry Spread', 3, 2, '12 - 8 oz jars', 25, NULL, NULL),
(7, 'Uncle Bob\'s Organic Dried Pears', 3, 7, '12 - 1 lb pkgs.', 30, NULL, NULL),
(8, 'Northwoods Cranberry Sauce', 3, 2, '12 - 12 oz jars', 40, NULL, NULL),
(9, 'Mishi Kobe Niku', 4, 6, '18 - 500 g pkgs.', 97, NULL, NULL),
(10, 'Ikura', 4, 8, '12 - 200 ml jars', 31, NULL, NULL),
(11, 'Queso Cabrales', 5, 4, '1 kg pkg.', 21, NULL, NULL),
(12, 'Queso Manchego La Pastora', 5, 4, '10 - 500 g pkgs.', 38, NULL, NULL),
(13, 'Konbu', 6, 8, '2 kg box', 6, NULL, NULL),
(14, 'Tofu', 6, 7, '40 - 100 g pkgs.', 23.25, NULL, NULL),
(15, 'Genen Shouyu', 6, 2, '24 - 250 ml bottles', 15.5, NULL, NULL),
(16, 'Pavlova', 7, 3, '32 - 500 g boxes', 17.45, NULL, NULL),
(17, 'Alice Mutton', 7, 6, '20 - 1 kg tins', 39, NULL, NULL),
(18, 'Carnarvon Tigers', 7, 8, '16 kg pkg.', 62.5, NULL, NULL),
(19, 'Teatime Chocolate Biscuits', 8, 3, '10 boxes x 12 pieces', 9.2, NULL, NULL),
(20, 'Sir Rodney\'s Marmalade', 8, 3, '30 gift boxes', 81, NULL, NULL),
(21, 'Sir Rodney\'s Scones', 8, 3, '24 pkgs. x 4 pieces', 10, NULL, NULL),
(22, 'Gustaf\'s KnÃ¤ckebrÃ¶d', 9, 5, '24 - 500 g pkgs.', 21, NULL, NULL),
(23, 'TunnbrÃ¶d', 9, 5, '12 - 250 g pkgs.', 9, NULL, NULL),
(24, 'GuaranÃ¡ FantÃ¡stica', 10, 1, '12 - 355 ml cans', 4.5, NULL, NULL),
(25, 'NuNuCa NuÃŸ-Nougat-Creme', 11, 3, '20 - 450 g glasses', 14, NULL, NULL),
(26, 'GumbÃ¤r GummibÃ¤rchen', 11, 3, '100 - 250 g bags', 31.23, NULL, NULL),
(27, 'Schoggi Schokolade', 11, 3, '100 - 100 g pieces', 43.9, NULL, NULL),
(28, 'RÃ¶ssle Sauerkraut', 12, 7, '25 - 825 g cans', 45.6, NULL, NULL),
(29, 'ThÃ¼ringer Rostbratwurst', 12, 6, '50 bags x 30 sausgs.', 123.79, NULL, NULL),
(30, 'Nord-Ost Matjeshering', 13, 8, '10 - 200 g glasses', 25.89, NULL, NULL),
(31, 'Gorgonzola Telino', 14, 4, '12 - 100 g pkgs', 12.5, NULL, NULL),
(32, 'Mascarpone Fabioli', 14, 4, '24 - 200 g pkgs.', 32, NULL, NULL),
(33, 'Geitost', 15, 4, '500 g', 2.5, NULL, NULL),
(34, 'Sasquatch Ale', 16, 1, '24 - 12 oz bottles', 14, NULL, NULL),
(35, 'Steeleye Stout', 16, 1, '24 - 12 oz bottles', 18, NULL, NULL),
(36, 'Inlagd Sill', 17, 8, '24 - 250 g jars', 19, NULL, NULL),
(37, 'Gravad lax', 17, 8, '12 - 500 g pkgs.', 26, NULL, NULL),
(38, 'CÃ´te de Blaye', 18, 1, '12 - 75 cl bottles', 263.5, NULL, NULL),
(39, 'Chartreuse verte', 18, 1, '750 cc per bottle', 18, NULL, NULL),
(40, 'Boston Crab Meat', 19, 8, '24 - 4 oz tins', 18.4, NULL, NULL),
(41, 'Jack\'s New England Clam Chowder', 19, 8, '12 - 12 oz cans', 9.65, NULL, NULL),
(42, 'Singaporean Hokkien Fried Mee', 20, 5, '32 - 1 kg pkgs.', 14, NULL, NULL),
(43, 'Ipoh Coffee', 20, 1, '16 - 500 g tins', 46, NULL, NULL),
(44, 'Gula Malacca', 20, 2, '20 - 2 kg bags', 19.45, NULL, NULL),
(45, 'RÃ¸gede sild', 21, 8, '1k pkg.', 9.5, NULL, NULL),
(46, 'Spegesild', 21, 8, '4 - 450 g glasses', 12, NULL, NULL),
(47, 'Zaanse koeken', 22, 3, '10 - 4 oz boxes', 9.5, NULL, NULL),
(48, 'Chocolade', 22, 3, '10 pkgs.', 12.75, NULL, NULL),
(49, 'Maxilaku', 23, 3, '24 - 50 g pkgs.', 20, NULL, NULL),
(50, 'Valkoinen suklaa', 23, 3, '12 - 100 g bars', 16.25, NULL, NULL),
(51, 'Manjimup Dried Apples', 24, 7, '50 - 300 g pkgs.', 53, NULL, NULL),
(52, 'Filo Mix', 24, 5, '16 - 2 kg boxes', 7, NULL, NULL),
(53, 'Perth Pasties', 24, 6, '48 pieces', 32.8, NULL, NULL),
(54, 'TourtiÃ¨re', 25, 6, '16 pies', 7.45, NULL, NULL),
(55, 'PÃ¢tÃ© chinois', 25, 6, '24 boxes x 2 pies', 24, NULL, NULL),
(56, 'Gnocchi di nonna Alice', 26, 5, '24 - 250 g pkgs.', 38, NULL, NULL),
(57, 'Ravioli Angelo', 26, 5, '24 - 250 g pkgs.', 19.5, NULL, NULL),
(58, 'Escargots de Bourgogne', 27, 8, '24 pieces', 13.25, NULL, NULL),
(59, 'Raclette Courdavault', 28, 4, '5 kg pkg.', 55, NULL, NULL),
(60, 'Camembert Pierrot', 28, 4, '15 - 300 g rounds', 34, NULL, NULL),
(61, 'Sirop d\'Ã©rable', 29, 2, '24 - 500 ml bottles', 28.5, NULL, NULL),
(62, 'Tarte au sucre', 29, 3, '48 pies', 49.3, NULL, NULL),
(63, 'Vegie-spread', 7, 2, '15 - 625 g jars', 43.9, NULL, NULL),
(64, 'Wimmers gute SemmelknÃ¶del', 12, 5, '20 bags x 4 pieces', 33.25, NULL, NULL),
(65, 'Louisiana Fiery Hot Pepper Sauce', 2, 2, '32 - 8 oz bottles', 21.05, NULL, NULL),
(66, 'Louisiana Hot Spiced Okra', 2, 2, '24 - 8 oz jars', 17, NULL, NULL),
(67, 'Laughing Lumberjack Lager', 16, 1, '24 - 12 oz bottles', 14, NULL, NULL),
(68, 'Scottish Longbreads', 8, 3, '10 boxes x 8 pieces', 12.5, NULL, NULL),
(69, 'Gudbrandsdalsost', 15, 4, '10 kg pkg.', 36, NULL, NULL),
(70, 'Outback Lager', 7, 1, '24 - 355 ml bottles', 15, NULL, NULL),
(71, 'FlÃ¸temysost', 15, 4, '10 - 500 g pkgs.', 21.5, NULL, NULL),
(72, 'Mozzarella di Giovanni', 14, 4, '24 - 200 g pkgs.', 34.8, NULL, NULL),
(73, 'RÃ¶d Kaviar', 17, 8, '24 - 150 g jars', 15, NULL, NULL),
(74, 'Longlife Tofu', 4, 7, '5 kg pkg.', 10, NULL, NULL),
(75, 'RhÃ¶nbrÃ¤u Klosterbier', 12, 1, '24 - 0.5 l bottles', 7.75, NULL, NULL),
(76, 'LakkalikÃ¶Ã¶ri', 23, 1, '500 ml', 18, NULL, NULL),
(77, 'Original Frankfurter grÃ¼ne SoÃŸe', 12, 2, '12 boxes', 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sekolahs`
--

CREATE TABLE `sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npsn` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sekolahs`
--

INSERT INTO `sekolahs` (`id`, `name`, `foto`, `alamat`, `jenis_kelamin`, `npsn`, `nisn`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dandy', NULL, 'Malang', 'Laki-laki', 12345, 1234, 'admin@gmail.com', NULL, '$2y$10$mXcbrggS3v7QGikBDdj./OCYtSiUxWsoEagPDsluMMaaNTy1QBHwi', NULL, '2022-05-24 00:05:05', '2022-05-24 00:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rekening` int(11) DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `tahun`, `nominal`, `no_rekening`, `gambar`, `created_at`, `updated_at`) VALUES
(1, '2022', '13568', 3568, NULL, '2022-05-23 18:57:19', '2022-05-23 18:57:19'),
(2, '2023', '200000', 56375, NULL, '2022-05-24 00:19:22', '2022-05-24 00:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` int(11) NOT NULL,
  `kelas_jurusan` enum('X RPL','X TKJ','X ELIN','X MEKATRONIKA','XI RPL','XI TKJ','XI ELIN','XI MEKATRONIKA','XII RPL','XII TKJ','XII ELIN','XII MEKATRONIKA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_name` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Lunas','Belum Lunas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`customer_id`, `customer_name`, `nisn`, `kelas_jurusan`, `contact_name`, `tanggal`, `jumlah_bayar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bagas', 1234, 'X RPL', 'Januari', '2022-01-07', 'Rp. 100.000', 'Lunas', NULL, NULL),
(2, 'Edo', 2345, 'X TKJ', 'Februari', '2022-02-07', 'Rp. 100.000', 'Lunas', NULL, '2022-05-22 00:10:24'),
(3, 'Budi', 3455, 'X ELIN', 'Maret', '2022-03-07', 'Rp. 100.000', 'Lunas', NULL, NULL),
(4, 'Octavia', 4567, 'X MEKATRONIKA', 'April', '2022-04-07', 'Rp. 100.000', 'Belum Lunas', NULL, NULL),
(5, 'Ryan', 5678, 'XI RPL', 'Mei', '2022-05-07', 'Rp. 100.000', 'Belum Lunas', NULL, NULL),
(6, 'Albert', 6789, 'XI TKJ', 'Juni', '2022-06-07', 'Rp. 100.000', 'Belum Lunas', NULL, NULL),
(7, 'Steaven', 7891, 'XI ELIN', 'Juli', '2022-07-07', 'Rp. 100.000', 'Lunas', NULL, NULL),
(8, 'Dian', 8912, 'XI MEKATRONIKA', 'Agustus', '2022-08-07', 'Rp. 100.000', 'Belum Lunas', NULL, NULL),
(9, 'Widya', 9123, 'XII RPL', 'September', '2022-09-07', 'Rp. 100.000', 'Belum Lunas', NULL, NULL),
(10, 'Ayu', 7563, 'XII TKJ', 'Oktober', '2022-10-07', 'Rp. 100.000', 'Lunas', NULL, NULL),
(11, 'Wiliam', 7656, 'XII ELIN', 'November', '2022-11-07', 'Rp. 100.000', 'Belum Lunas', NULL, NULL),
(12, 'Leonardo', 8758, 'XII MEKATRONIKA', 'Desember', '2022-12-07', 'Rp. 100.000', 'Lunas', NULL, '2022-05-21 23:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npsn` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `foto`, `alamat`, `npsn`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SMKN 8 Malang', 'large-modern-office-building.jpg', 'JL. Teluk Pacitan, Malang', 987654, 'asta@smkn8malang.sch.id', NULL, '$2y$10$iByrXGGsBvNUiH9hSjPUMe4KnZtL/qNXnww.6tuxZZUWvM/ca.4ky', NULL, '2022-05-23 04:53:33', '2022-05-24 00:15:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayars`
--
ALTER TABLE `bayars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `data_pembayarans`
--
ALTER TABLE `data_pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sekolahs`
--
ALTER TABLE `sekolahs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sekolahs_email_unique` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayars`
--
ALTER TABLE `bayars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `data_pembayarans`
--
ALTER TABLE `data_pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10444;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=519;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `sekolahs`
--
ALTER TABLE `sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
