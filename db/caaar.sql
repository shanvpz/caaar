-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2016 at 12:47 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(20) NOT NULL,
  `company` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `seat` int(10) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `speed` int(20) NOT NULL,
  `utility` varchar(50) NOT NULL,
  `imgname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `company`, `name`, `budget`, `seat`, `fuel`, `speed`, `utility`, `imgname`) VALUES
(1, 'Nissan', 'Qashqai', '200000', 5, 'Petrol', 47, 'sport', 'img1.jpg'),
(2, 'Volkswagen ', 'Golf', '300000', 4, 'Petrol', 32, 'family', 'img2.jpg'),
(3, 'Hundai ', 'Tucson', '600000', 8, 'Diesel', 60, 'fundrive', 'img3.jpg'),
(4, 'Tata ', 'Nano', '200000', 4, 'Petrol', 32, 'offroad', 'img4.jpg'),
(5, 'Hundai ', 'Tucson', '1500000', 8, 'Diesel', 60, 'topdown', 'img5.jpg'),
(6, 'Audi', 'A5', '150000', 4, 'Petrol', 42, 'family', 'img6.jpg'),
(7, 'Toyota', 'Corolla', '20000', 4, 'Petrol', 32, 'family', 'img7.jpg'),
(8, 'Suzuki', 'Swift', '300000', 4, 'Diesel', 49, 'family', 'img8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE IF NOT EXISTS `description` (
  `id` int(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `rating` int(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `description`, `rating`) VALUES
(1, 'The Nissan Qashqai is a compact crossover produced by the Japanese car manufacturer Nissan since 2006. For the first generation, the Qashqai sold under the name Nissan Dualis in Japan and Australia. Now in its second generation, which was released in 2014, the new model is only badged as Qashqai. The original Qashqai replaced the off-road capable body-on-frame Mistral/Terrano II as Nissan''s SUV offering and its P32L automobile platform will be also used by other forthcoming Nissan crossover SUVs.', 0),
(2, 'The Volkswagen Golf (About this sound listen (help·info)) or Volkswagen Golf GTI is a small family car produced by the German manufacturer Volkswagen since 1974, marketed worldwide across seven generations, in various body configurations and under various nameplates – as the Volkswagen Rabbit in the United States and Canada (Mk1 and Mk5), and as the Volkswagen Caribe in Mexico (Mk1).\r\n\r\nThe original Golf Mk1 was a front-wheel drive, front-engined replacement for the air-cooled, rear-engined, rear-wheel drive Volkswagen Beetle. Historically, the Golf is Volkswagen''s best-selling model and the world''s second best-selling model,[dubious – discuss] with more than 29 million built by 2012.[1][not in citation given]', 0),
(3, 'In the U.S., the Tucson is offered in base GLS, mid-line SE, and top-tier Limited (formerly LX) trim levels for 2007 models. Earlier 2005 and 2006 models were offered as GL/GLS/Limited. Standard equipment includes air conditioning, cruise control, six airbags, electronic stability control, a CD player, alloy wheels, remote keyless entry, and premium cloth seats. The SE adds to the roster with contrasting gray body cladding, a different alloy design, an AM/FM/Cassette/CD as well as fog lights and a front windshield wiper de-icing grid. The Limited adds leather seating surfaces, a 6-disc in dash CD changer, body-colored cladding, automatic climate control, and heated seats. The SE and Limited are only available with the 2.7 L V6. The GLS comes only with the 2.0-litre four-cylinder.', 0),
(4, 'The Tata Nano is a city car manufactured by Tata Motors. Made and sold in India, the Nano was initially launched with a price of one lakh rupees or ?100,000 (US$1,500),[4] which has increased with time. Designed to lure India''s burgeoning middle classes away from two-wheelers, it received much publicity.\r\n\r\nIts current price means the claim "world''s cheapest car" remains true today', 0),
(5, 'In the U.S., the Tucson is offered in base GLS, mid-line SE, and top-tier Limited (formerly LX) trim levels for 2007 models. Earlier 2005 and 2006 models were offered as GL/GLS/Limited. Standard equipment includes air conditioning, cruise control, six airbags, electronic stability control, a CD player, alloy wheels, remote keyless entry, and premium cloth seats. The SE adds to the roster with contrasting gray body cladding, a different alloy design, an AM/FM/Cassette/CD as well as fog lights and a front windshield wiper de-icing grid. The Limited adds leather seating surfaces, a 6-disc in dash CD changer, body-colored cladding, automatic climate control, and heated seats. The SE and Limited are only available with the 2.7 L V6. The GLS comes only with the 2.0-litre four-cylinder.', 0),
(6, 'The Audi A5 (internally designated Typ 8T) is an entry-level luxury car produced by the German automobile manufacturer Audi since 2007. The A5 range comprises the coupé, cabriolet, and "Sportback" (a four-door liftback featuring a roof line with a steeply raked rear window with integrated trunk lid) versions of the fourth generation (B8) Audi A4 saloon and estate models.', 0),
(7, 'The Toyota Corolla is a line of subcompact and compact cars manufactured by Toyota. Introduced in 1966, the Corolla was the best-selling car worldwide by 1974 and has been one of the best-selling cars in the world since then. In 1997, the Corolla became the best selling nameplate in the world, surpassing the Volkswagen Beetle.[1] Toyota reached the milestone of 40 million Corollas sold over eleven generations in July 2013.[2] The series has undergone several major redesigns.', 0),
(8, 'The Suzuki Swift began in 1985 as a marketing and manufacturing rebadge of the Suzuki Cultus, a supermini (or subcompact) manufactured and marketed worldwide across three generations and four body configurations—three-door hatchback, four-door sedan, five-door hatchback and two-door convertible—and using the Suzuki G engine family.\r\n\r\nThe Swift was marketed in the Japanese domestic market (JDM) as the Cultus and elsewhere as the Suzuki Swift, Suzuki Forsa, Suzuki Jazz, Chevrolet Swift, Chevrolet Sprint and Sprint Metro, Geo and Chevrolet Metro, Pontiac Firefly, Maruti 1000, Holden Barina and Subaru Justy. Versions of the second generation Cultus were also produced until 2007 in India and the car remains in production today in Pakistan and China. For more information on the initial versions of the Swift, see: Suzuki Cultus and Geo Metro.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
