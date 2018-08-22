-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 05:10 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sl1n`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `average` (`rat` INT, `count` INT) RETURNS FLOAT BEGIN
 DECLARE NUM FLOAT;
 SET NUM=rat/count;
RETURN NUM;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `animilia`
--

CREATE TABLE `animilia` (
  `Sci_Name` varchar(100) NOT NULL,
  `Common_Name` varchar(100) NOT NULL,
  `Habitat` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Nativity` varchar(100) NOT NULL,
  `Active_Time` varchar(100) NOT NULL,
  `Diet_Type` varchar(100) NOT NULL,
  `Covering` varchar(20) DEFAULT NULL,
  `legged` int(20) DEFAULT NULL,
  `P_color` varchar(100) DEFAULT NULL,
  `Migration_Period` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animilia`
--

INSERT INTO `animilia` (`Sci_Name`, `Common_Name`, `Habitat`, `Category`, `Nativity`, `Active_Time`, `Diet_Type`, `Covering`, `legged`, `P_color`, `Migration_Period`) VALUES
('Ailurus fulgens', 'Red panda', 'high-altitude forest ', 'Arboreal', 'yes', 'late afternoon and early evening hours', 'Omnivore', ' Fur', 4, 'Reddish-Brown', NULL),
('Amtilope Cervicapra', 'BLackbuck', 'Plains', 'Terrestrial', 'Yes', 'Day', 'Herbivore', 'Hair', 4, 'Black', NULL),
('Anas acuta', 'Northern Pintail', 'sheltered estuaries, brackish marshes and coastal lagoons', 'Aves', 'No', '', 'Carnivore\r\n', 'Feathers', 2, 'Bluish gray', 'February-June'),
('Boselaphus Tragocamelus', 'Nilgai', 'Scrub Forests & Grassy Plains', 'Terrestrial', 'Yes', 'Day', 'Herbivore', 'Hair', 4, 'Black', NULL),
('Crocodylinae', 'Crocodile', 'Salty swamps and brackish coastal waters', 'Amphibian', 'Yes', 'All Day', 'Carnivore', 'Scales', 4, 'Grey', NULL),
('Elephaus Maximus', 'Asian Elephants', 'Grassy Plains', 'Terrestrial', 'Yes', 'Morning and Evening', 'Herbivore', 'Thick Skin', 4, 'Gray', NULL),
('Grus leucogeranus', 'Siberian Cranes', 'Wetlands', 'Aves', 'No', '', 'Carnivore', 'Feathers', 2, 'White', 'january-June'),
('Gyps indicus', 'Vulture', 'Deserts, savannas and grassland near a water source', 'Aves', 'Yes', 'All Day', 'Carnivore', 'Feather', 2, 'Pale Red', NULL),
('Himantopus himantopus', 'Black Winged Stilt', 'Coastal habitats', 'Aves', 'No', '', 'Carnivore', 'Feathers', 2, 'Black and White', 'February-June'),
('Luscinia svecica', 'Bluethroat', 'Tundra of Alaska and the Yukon Territory', 'Aves', 'No', '', 'Carnivore', 'Feathers', 2, 'Blue throat with red in center', 'February-June'),
('Merops persicus', 'Blue-Cheeked Bee-Eater', 'Sub-tropical semi-desert ', 'Aves', 'No', '', 'Carnivore', 'Feathers', 2, 'Green and Blue', 'October-June'),
('Moschus chrysogaster', 'Alpine Musk Deer', 'to the eastern Himalayas in Nepal, Bhutan and India to the highlands of central China.', 'Terrestrial', 'Yes', 'Between dusk and dawn', 'Herbivore', 'Brittle Hairs', 4, 'Sandy brown', NULL),
('Motacilla flava', 'Yellow Wagtail', 'Rushy pastures ,meadows, hay fields', 'Aves', 'No', '', 'Carnivore', 'Feathers', 2, 'Yellow', 'October-November '),
('Neofelis Nebulosa', 'Clouded Leopard', 'Tropical Rainforest', 'Terrestrial', 'Yes', 'Night', 'Carnivore', 'Hairs', 4, 'grey or ochreous ', NULL),
('Nilgiritragus hylocrius', 'Nilgiri tahr', 'rugged hills and mountain slopes', 'Terrestrial', 'Yes', 'early morning and late afternoon', '', 'herbivore', 4, 'Greyish', NULL),
('Oriolus oriolus', 'Eurasian Golden Oriole', '', 'Aves', 'No', 'Broadleaf forests and plantations, copses, riverine forest', 'Carnivore', 'Feathers', 2, 'Yellow and black', 'February-June'),
('Panthera Leo Persica', 'Asiatic lion', 'Forest With Dense Vegetation', 'terrestrial', 'Yes', 'Night', 'carnivore', 'Hair', 4, 'sandy or buffish grey', NULL),
('Panthera Tigris Tigris', 'Royal Bengal Tiger', 'Tropical Forest', 'Terrestrial', 'Yes', 'Night', 'Carnivore', 'Hair', 4, 'orange  with white beneath', NULL),
('Panthera Uncia', 'Snow Leopard', 'at altitudes between 9,800 and 17,000 feet in the high, rugged mountains of Central Asia', 'Terrestrial', 'Yes', 'Dusk & Night', 'Carnivore', 'Hair', 4, 'smokey-gray of its coat patterned with dark gray', NULL),
('Pelecanus onocrotalus', 'Great White Pelican', 'VShallow, warm water of lakes, deltas, marshes and swamps', 'Aves', 'No', '', 'carnivore', 'Feathers', 2, 'White', 'February-June'),
('Phonecopterus Roseus', 'Gretaer Flamingo', 'shallow water bodies, including saline lagoons, salt pans, estuaries, and large saline or alkaline l', 'Aerial', 'No', 'Day & Night', 'Omnivore', 'Feathers', 2, 'Pinkish', 'November-February'),
('Prionailurus viverrinus', 'Fishing cat', 'evergreen and tropical dry forest', 'Terrestrial', 'Yes', 'Night', 'Carnivore', 'Hair', 4, 'Grey With Black Strips', NULL),
('Ratufa indica', 'Indian giant squirrel', 'Trees', 'Arboreal', 'Yes', 'early hours of the morning and in the evening', 'Herbivore', 'Hair', 4, 'creamy-beige, buff, tan, rust, brown, or even a dark seal brown', NULL),
('Rhinoceros unicornis', 'One-Horned Rhinoceros', 'Foothills of the Himalayas.', 'Terrestrial', 'Yes', 'early mornings, late afternoons and at night, but rest during hot days', 'Herbivore', 'Thick Skin', 4, 'silver-brown', NULL),
('Sarkidiornis melanotos', 'Comb Duck', 'Swamps, rivers and lakes', 'Aves', 'No', '', 'Carnivore', 'Feathers', 2, 'Blue-black or green-black ', 'November-February'),
('Semnopithecus', 'Hanuman Langur', 'tropical, dry thorn shrub, pine and alpine forests', 'Terrestrial', 'Yes', 'Day', 'Herbivore', 'Hair', 4, 'pale pink color', NULL),
('Sturnus vulgaris', 'Starling', '', 'Aves', 'No', 'Open moorland to salt marshes.', 'Carnivore', 'Feathers', 2, 'Brown', 'February-June'),
('Sus scrofa cristatus', 'Indian wild Boar', 'Grasslands, taiga, tropical rainforests, but they prefer life in deciduous forests.', 'Terrestrial', 'Yes', ' Between dusk and dawn.', 'Omnivorous', 'Hard and rough skin', 4, 'Grayish Black', NULL),
('Ursus thibetanus laniger', 'Himalayan Black bear', 'Mountainous areas and jungles.', 'Terristrial', 'Yes', 'All Day', 'Carnivore', 'Thick Fur', 4, 'Black', NULL),
('Vulpus Bengalensis', 'Bengal Fox', 'open grassland, thorny scrub, semi-desert and arid environments.', 'Terrestrial', 'Yes', 'Early Morning & Night', 'Carnivore', 'Hair', 4, ' buff orange but changes according to seasons', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ani_reserve`
--

CREATE TABLE `ani_reserve` (
  `S_Name` varchar(100) NOT NULL,
  `Reserve_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ani_reserve`
--

INSERT INTO `ani_reserve` (`S_Name`, `Reserve_Name`) VALUES
('	Fishing cat', 'RANTHAMBORE NATIONAL PARK'),
('Ailurus fulgens', 'BALPHAKRAM NATIONAL PARK'),
('Amtilope Cervicapra', 'BANDHAVGARH NATIONAL PARK'),
('Boselaphus Tragocamelus', 'KANHA NATIONAL PARK'),
('Crocodylinae', 'BHITARKALIKA NATIONAL PARK'),
('Elephaus Maximus', 'BANDIPUR NATIONAL PARK'),
('Elephaus Maximus', 'RAJAJI NATIONAL PARK'),
('Elephaus Maximus', 'SIMLIPAL NATIONAL PARK'),
('Gyps indicus', 'BANDIPUR NATIONAL PARK'),
('Moschus chrysogaster', 'KANHA NATIONAL PARK'),
('Neofelis Nebulosa', 'NAMDAPHA NATIONAL PARK'),
('Neofelis Nebulosa', 'SIMLIPAL NATIONAL PARK'),
('Nilgiritragus hylocrius', 'MUKURTHI NATIONAL PARK'),
('Panthera Leo Persica', 'SANJAY GANDHI NATIONAL PARK'),
('Panthera Leo Persica', 'SASAN-GIR WILDLIFE SANCTUARY'),
('Panthera Tigris Tigris', 'INDRAVATI(KUTRU) NATIONAL PARK'),
('Panthera Tigris Tigris', 'KHIRGANGA NATIONAL PARK'),
('Panthera Tigris Tigris', 'SANJAY GANDHI NATIONAL PARK'),
('Panthera Tigris Tigris', 'SIMLIPAL NATIONAL PARK'),
('Panthera Tigris Tigris', 'SUNDERBANS NATIONAL PARK'),
('Panthera Tigris Tigris', 'TADOBA NATIONAL PARK'),
('Panthera Uncia', 'GANGOTRI NATIONAL PARK'),
('Panthera Uncia', 'GREAT HIMALAYAN NATIONAL PARK'),
('Panthera Uncia', 'HEMIS NATIONAL PARK'),
('Panthera Uncia', 'KHANGCHENDZONGA NATIONAL PARK'),
('Ratufa indica', 'BANDIPUR NATIONAL PARK'),
('Rhinoceros unicornis', 'JALDAPARA NATIONAL PARK'),
('Rhinoceros unicornis', 'KHIRGANGA NATIONAL PARK'),
('Semnopithecus', 'SANJAY GANDHI NATIONAL PARK'),
('Sus scrofa cristatus', 'BHITARKALIKA NATIONAL PARK'),
('Vulpus Bengalensis', 'KANHA NATIONAL PARK');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile_no` int(20) NOT NULL,
  `BDate` date NOT NULL,
  `Timing` varchar(2) NOT NULL,
  `User_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`Name`, `Email`, `Mobile_no`, `BDate`, `Timing`, `User_id`) VALUES
('Rishabh', 'rishabaha@gmail.com', 12, '2017-11-03', '', ''),
('Rishabh', 'rishabaha@gmail.com', 12345, '2017-11-03', '', ''),
('Rishabh', 'rishabaha@gmail.com', 123, '2017-11-09', '', ''),
('Rishabh', 'rishabaha@gmail.com', 111, '2017-11-05', '', ''),
('Rishabh', 'rishabaha@gmail.com', 12345555, '2017-11-09', '', ''),
('Rishabh', 'rishabaha@gmail.com', 11, '2017-11-09', '', ''),
('Harish', 'sample', 123, '2017-11-07', '', ''),
('Rishabh', 'rishabaha@gmail.com', 123, '2017-11-15', '', ''),
('Rishabh', 'rishabaha@gmail.com', 2147483647, '2017-11-03', '', ''),
('Rishabh', 'rishabaha@gmail.com', 2147483647, '2017-11-10', '', ''),
('Rishabh', 'sample', 123, '2017-11-02', '', ''),
('Rishabh', 'advaitgokhale25@gail.com', 457457, '2017-11-01', '', ''),
('Harish', 'harish@gmail.com', 9666666, '2017-11-03', '', ''),
('rere', 'rere@gmail.com', 9898980, '2017-10-04', '', ''),
('RISHABH', 'rishabaha@gmail.com', 2147483647, '2017-11-08', '', ''),
('Rishabh', 'rishabaha@gmail.com', 2147483647, '2017-11-15', '', ''),
('Rishabh', 'rishabaha@gmail.com', 2147483647, '2017-11-16', '', ''),
('RISHABH', 'sample', 2147483647, '2017-11-16', '', ''),
('Rishabh', 'sample', 2147483647, '2017-11-09', '', ''),
('Rishabh', 'rishabaha@gmail.com', 2147483647, '2017-11-09', '', ''),
('RISHABH', 'ritzjain25@gmail.com', 2147483647, '2017-11-09', '', ''),
('Rishabh', 'harish@gmail.com', 2147483647, '2017-11-08', '', ''),
('Rishabh', 'email1', 2147483647, '2017-11-01', '', ''),
('Rishabh', 'advaitgokhale25@gail.com', 2147483647, '2017-11-01', '', ''),
('Rishabh', 'me', 2147483647, '2017-11-10', '', ''),
('Rishabh', 'myemail', 2147483647, '2017-11-09', '', ''),
('yomomma', 'myemail', 987654321, '2017-11-01', '', ''),
('Rishabh', 'myemail', 900008787, '2017-11-01', '', ''),
('Rishabh', 'myemail', 2147483647, '2017-11-29', '', ''),
('Rishabh', 'myemail', 2147483647, '2017-11-14', '', ''),
('RISHABH', 'sample', 2147483647, '2017-11-08', '', ''),
('Rishabh', 'sample', 2147483647, '2017-11-09', '', ''),
('RISHABH', 'rishabaha@gmail.com', 2147483647, '2017-11-03', '', ''),
('RISHABH', 'rishabaha@gmail.com', 2147483647, '2017-11-21', '', ''),
('RISHABH', 'rishabaha@gmail.com', 2147483647, '2017-11-08', '', ''),
('Rishabh', 'rishabaha@gmail.com', 2147483647, '2017-11-02', '', ''),
('RISHABH', 'rishabaha@gmail.com', 2147483647, '2017-11-09', '', ''),
('RISHABH', 'myemail', 123, '2017-11-15', '', ''),
('RISHABH', 'rishabaha@gmail.com', 123, '2017-11-10', '', ''),
('RISHABH', 'rishabaha@gmail.com', 2147483647, '0000-00-00', '', ''),
('RISHABH', 'rishabaha@gmail.com', 2147483647, '2017-11-10', '', ''),
('RISHABH', 'rishabaha@gmail.com', 2147483647, '0000-00-00', '', ''),
('RISHABH', 'qw@gmail.com', 123, '2017-11-02', '', ''),
('Rishabh', 'rishabaha@gmail.com', 2147483647, '2017-11-09', '', ''),
('RISHABH', 'rishabaha@gmail.com', 2147483647, '2017-10-12', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `deleted_entry`
--

CREATE TABLE `deleted_entry` (
  `Dfname` varchar(10) NOT NULL,
  `Dlname` varchar(10) NOT NULL,
  `Dage` int(5) NOT NULL,
  `Daadhaar` int(15) NOT NULL,
  `DB_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleted_entry`
--

INSERT INTO `deleted_entry` (`Dfname`, `Dlname`, `Dage`, `Daadhaar`, `DB_id`) VALUES
('Rishabh', 'Shah', 6, 3, 'rishabaha@gmail.com'),
('Rishabh', 'Shah', 6, 3, 'rishabaha@gmail.com'),
('Advait', 'Shah', 5, 55, 'rishabaha@gmail.com'),
('Rishabh', 'Shah', 6, 7, 'rishabaha@gmail.com'),
('Harish', 'Gokhale', 5, 7, 'rishabaha@gmail.com'),
('Rishabh', 'Gokhale', 7, 4, 'rishabaha@gmail.com'),
('Advait', 'Shah', 6, 6, 'rishabaha@gmail.com'),
('Don', 'Gokhale', 5, 3, 'rishabaha@gmail.com'),
('Rishabh', 'Shah', 5, 7, 'rishabaha@gmail.com'),
('Don', 'Shah', 7, 9, 'rishabaha@gmail.com'),
('W', 'Q', 3, 4, 'rishabaha@gmail.com'),
('QQ', 'WW', 4, 4, 'rishabaha@gmail.com'),
('W', 'Q', 4, 1, 'rishabaha@gmail.com'),
('arere', 'rereboi', 5, 12345, 'rere@gmail.com'),
('Rishabh', 'Shah', 5, 6, 'myemail'),
('Advait', 'Gokhale', 5, 5, 'myemail'),
('Rishabh', 'Shah', 5, 324234636, 'rishabaha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `RESERVE` varchar(50) NOT NULL,
  `Book` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`RESERVE`, `Book`) VALUES
('SUNDERBANS', 'rishabaha@gmail.com'),
('TADOBA', 'qw@gmail.com'),
('TADOBA', 'qw@gmail.com'),
('KANHA', 'rishabaha@gmail.com'),
('KANHA', 'rishabaha@gmail.com'),
('KANHA', 'rishabaha@gmail.com'),
('TADOBA', 'rishabaha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Food_Name` varchar(100) NOT NULL,
  `Base_Source` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `pass`
-- (See below for the actual view)
--
CREATE TABLE `pass` (
`fname` varchar(20)
,`lname` varchar(20)
,`age` int(10)
,`adhaar` int(20)
,`B_id` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `adhaar` int(20) NOT NULL,
  `B_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`fname`, `lname`, `age`, `adhaar`, `B_id`) VALUES
('Advait', 'Gokhale', 21, 2147483647, 'rishabaha@gmail.com'),
('Rishabh', 'Shah', 21, 2147483647, 'rishabaha@gmail.com');

--
-- Triggers `passenger`
--
DELIMITER $$
CREATE TRIGGER `DELE` BEFORE DELETE ON `passenger` FOR EACH ROW BEGIN
INSERT INTO deleted_entry(Dfname,Dlname,Dage,Daadhaar,DB_id)
SELECT old.fname,old.lname,old.age,old.adhaar,old.B_id FROM passenger WHERE B_id = old.B_id LIMIT 1;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `FULL NAME` varchar(100) NOT NULL,
  `SPORT` varchar(100) NOT NULL,
  `CLUB` varchar(100) NOT NULL,
  `LEVEL` varchar(100) NOT NULL,
  `TOURNAMENT` varchar(100) NOT NULL,
  `COLLEGE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`FULL NAME`, `SPORT`, `CLUB`, `LEVEL`, `TOURNAMENT`, `COLLEGE`) VALUES
('RUSHABH KOCHAR', 'CRICKET', 'DECCAN GYMKHANA CRICKET CLUB', 'STATE', 'SUMIT\'16', 'VIT'),
('RISHABH SHAH', 'CRICKET', 'COEP CRICKET CLUB', 'NATIONAL', 'RANJI TROPHY', 'MIT'),
('SHUBHAM SURANA', 'CRICKET ', 'DECCAN GYMKHANA', 'STATE', 'SUMIT\'16', 'MIT COE'),
('BHAVESH JAIN', 'FOOTBALL', 'POLICE GROUND FOOTBALL CLUB', 'STATE', 'SUBROTA CUP', 'VIIT'),
('ABHAY  SAMDADIYA', 'FOOTBALL', 'MIT FOOTBALL CLUB', 'STATE', 'SUMMIT\'16', 'MIT'),
('PUNIT JAIN', 'TENNIS', 'DECCAN GYMKHANA TENNIS CLUB', 'STATE', 'U-21 TENNIS TROPHY', 'COEP'),
('ANAND SAMDADIYA', 'TENNIS', 'NAVNATH SHETHE TENNIS COACHING CLUB', 'NATIONAL', 'PRO TENNIS CUP', 'D.Y.PATIL');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `Res_Name` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Area_Covered(sqkm)` int(10) NOT NULL,
  `Working _Months` varchar(100) NOT NULL,
  `Best_Months` varchar(100) NOT NULL,
  `Info_Link` varchar(200) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Review_Count` int(11) NOT NULL,
  `AVERAGE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`Res_Name`, `State`, `Area_Covered(sqkm)`, `Working _Months`, `Best_Months`, `Info_Link`, `Rating`, `Review_Count`, `AVERAGE`) VALUES
('	\r\nCAMPBELL BAY NATIONAL PARK', 'ANDAMAN AND NICOBAR ISLANDS', 427, 'THROUGHOUT THE YEAR', 'MARCH-OCTOBER', 'https://en.wikipedia.org/wiki/Campbell_Bay_National_Park', 0, 0, 0),
('	\r\nGREAT HIMALAYAN NATIONAL PARK', 'HIMACHAL PRADESH', 754, 'SEPTEMBER-JUNE', 'MARCH-JUNE & SEPTEMBER-NOVEMBER', 'https://en.wikipedia.org/wiki/Great_Himalayan_National_Park', 0, 0, 0),
('ANSHI NATIONAL PARK', 'KARNATAKA', 417, 'SEPTEMBER-JUNE', 'NOVEMBER-JUNE', 'https://en.wikipedia.org/wiki/Kali_Tiger_Reserve', 0, 0, 0),
('BALPHAKRAM NATIONAL PARK', 'MEGHALAYA', 220, 'OCTOBER-MAY', 'OCTOBER-MAY', 'https://en.wikipedia.org/wiki/Balphakram_National_Park', 0, 0, 0),
('BANDHAVGARH NATIONAL PARK', 'MADHYA PRADESH', 1536, 'OCTOBER-JUNE', 'OCTOBER-JUNE', 'https://en.wikipedia.org/wiki/Bandhavgarh_National_Park', 0, 0, 0),
('BANDIPUR NATIONAL PARK', 'KARNATAKA', 874, 'SEPTEMBER-JULY', 'NOVEMBER-MARCH', '\r\nhttps://en.wikipedia.org/wiki/Bandipur_National_Park', 3, 0, 0),
('BETLA NATIONAL PARK', 'JHARKHAND', 226, 'OCTOBER-MAY', 'OCTOBER-FEBRUARY', '\r\nhttps://en.wikipedia.org/wiki/Betla_National_Park', 0, 0, 0),
('BHITARKALIKA NATIONAL PARK', 'ODISHA', 145, 'SEPTEMBER-MAY', 'DECEMBER-MAY', '\r\nhttps://en.wikipedia.org/wiki/Bhitarkalika_National_Park', 0, 0, 0),
('BISON (RAJBARI) NATIONAL PARK', 'TRIPURA', 32, 'OCTOBER-MAY', 'NOVEMBER-FEBRUARY', 'https://en.wikipedia.org/wiki/Bison_National_Park', 0, 0, 0),
('BUXA NATIONAL PARK', 'WEST BENGAL', 117, 'SEPTEMBER-JUNE', 'JANUARY-MAY', '\r\nhttps://en.wikipedia.org/wiki/Buxa_National_Park', 0, 0, 0),
('CHANDOLI NATIONAL PARK', 'MAHARASHTRA', 318, 'SEPTEMBER-MAY', 'OCTOBER-FEBRUARY', 'https://en.wikipedia.org/wiki/Chandoli_National_Park', 0, 0, 0),
('DACHIGAM NATIONAL PARK', 'JAMMU AND KASHMIR', 141, 'OCTOBER-APRIL', 'JANUARY-APRIL', 'https://en.wikipedia.org/wiki/Dachigam_National_Park', 0, 0, 0),
('DESERT NATIONAL PARK', 'RAJASTHAN', 3162, 'JULY-MAY', 'JANUARY-APRIL', '\r\nhttps://en.wikipedia.org/wiki/Desert_National_Park', 0, 0, 0),
('DIBRU-SAIKHOWA NATIONAL PARK', 'ASSAM', 340, 'SEPTEMBER-MAY', 'JANUARY-APRIL', '\r\nhttps://en.wikipedia.org/wiki/Dibru_Saikhowa_National_Park', 0, 0, 0),
('DUDHAWA NATIONAL PARK', 'UTTAR PRADESH', 490, 'SEPTEMBER-MAY', 'NOVEMBER-APRIL', '\r\nhttps://en.wikipedia.org/wiki/Dudhawa_National_Park', 0, 0, 0),
('ERAVIKULUM NATIONAL PARK', 'KERALA', 97, 'OCTOBER-MAY', 'FEBRUARY-MAY', '\r\nhttps://en.wikipedia.org/wiki/Eravikulu_National_Park', 0, 0, 0),
('GALATHEA BAY NATIONAL PARK', 'ANDAMAN AND NICOBAR ISLANDS', 110, 'SEPTEMBER-MAY', 'DECEMBER-APRIL', 'https://en.wikipedia.org/wiki/Galathea_Bay_National_Park', 0, 0, 0),
('GANGOTRI NATIONAL PARK', 'UTTARAKHAND', 2390, 'AUGUST-MAY', 'NOVEMBER-APRIL', '\r\nhttps://en.wikipedia.org/wiki/Gangotri_National_Park', 0, 0, 0),
('GURU GHASIDAS(SANJAY) NATIONAL PARK', 'CHHATTISGARH', 1441, 'SEPTEMBER-MAY', 'DECEMBER-APRIL', '\r\nhttps://en.wikipedia.org/wiki/Guru_Ghasidas_National_Park', 0, 0, 0),
('HEMIS NATIONAL PARK', 'JAMMU&KASHMIR', 4400, 'FEBRUARY-OCTOBER', 'FEBRUARY-JUNE', 'https://en.wikipedia.org/wiki/Hemis_National_Park', 0, 0, 0),
('INDERKILLA NATIONAL PARK', 'HIMACHAL PRADESH', 104, 'OCTOBER-MAY', 'JANUARY-MAY', 'https://en.wikipedia.org/wiki/Inderkilla_National_Park', 0, 0, 0),
('INDIRA GANDHI(ANNAMALAI) NATIONAL PARK', 'TAMIL NADU', 117, 'OCTOBER-APRIL', 'JANUARY-APRIL', 'https://en.wikipedia.org/wiki/Indira Gandhi_(Annamalai)_National_Park', 0, 0, 0),
('INDIRA PRIYADARSHINI PENCH NATIONAL PARK', 'MADHYA PRADESH', 293, 'SEPTEMBER-MAY', 'NOVEMBER-APRIL', 'https://en.wikipedia.org/wiki/indira_Priyadarshini_Pench_National_Park', 0, 0, 0),
('INDRAVATI(KUTRU) NATIONAL PARK', 'CHHATTISGARH', 1259, 'NOVEMBER-MAY', 'NOVEMBER-JUNE', '\r\nhttps://en.wikipedia.org/wiki/Indravati_National_Park', 0, 0, 0),
('INTANKI NATIONAL PARK', 'NAGALAND', 202, 'OCTOBER-MAY', 'JANUARY-APRIL', '\r\nhttps://en.wikipedia.org/wiki/Intanki_National_Park', 0, 0, 0),
('JALDAPARA NATIONAL PARK', 'WEST BENGAL', 216, 'SEPTEMBER-MAY', 'DECEMBER-MARCH', '\r\nhttps://en.wikipedia.org/wiki/Jaldapara_National_Park', 0, 0, 0),
('JIM CORBETT NATIONAL PARK', 'UTTARAKHAND', 798, 'NOVEMBER-JUNE', 'DECEMBER-MARCH', 'https://en.wikipedia.org/wiki/Jim_Corbett_National_Park', 0, 0, 0),
('KALESAR NATIONAL PARK', 'HARYANA', 50, 'OCTOBER-MAY', 'JANUARY-APRIL', '\r\nhttps://en.wikipedia.org/wiki/Valmiki_National_Park\r\nhttps://en.wikipedia.org/wiki/Kalesar_National_Park', 0, 0, 0),
('KANGER VALLEY NATIONAL PARK', 'CHHATTISGARH', 200, 'AUGUST-APRIL', 'NOVEMBER-APRIL', '\r\nhttps://en.wikipedia.org/wiki/Kanger_Valley_National_Park', 0, 0, 0),
('KANHA NATIONAL PARK', 'KERELA', 940, 'OCTOBER-MID JUNE', 'OCTOBER-MARCH', 'https://en.wikipedia.org/wiki/Kaziranga_National_Park', 0, 0, 0),
('KAZIRANGA NATIONAL PARK', 'ASSAM', 430, 'NOVEMBER-MAY', 'NOVEMBER-APRIL', 'https://en.wikipedia.org/wiki/Kaziranga_National_Park', 0, 0, 0),
('KEIBUL LANJAO NATIONAL PARK', 'MANIPUR', 40, 'JANUARY-DECEMBER', 'FEBRUARY-MAY', 'https://en.wikipedia.org/wiki/Keibul_Lanjao_National_Park', 0, 0, 0),
('KHANGCHENDZONGA NATIONAL PARK', 'SIKKIM', 1784, 'SEPTEMBER-MAY', 'JANUARY-APRIL', 'https://en.wikipedia.org/wiki/Khangchendzonga_National_Park', 0, 0, 0),
('KHIRGANGA NATIONAL PARK', 'HIMACHAL PRADESH', 710, 'AUGUST-APRIL', 'DECEMBER-APRIL', '\r\nhttps://en.wikipedia.org/wiki/Khirganga_National_Park', 0, 0, 0),
('KISHTWAR NATIONAL PARK', 'JAMMU AND KASHMIR', 425, 'SEPTEMBER-OCTOBER & FBRUARY-MAY', 'SEPTEMBER-OCTOBER & FBRUARY-MAY', 'https://en.wikipedia.org/wiki/Kishtwar_National_Park', 0, 0, 0),
('MAHATMA GANDHI MARINE(WANDOOR) NATIONAL PARK', 'ANDAMAN AND NICOBAR ISLANDS ', 282, 'SEPTEMBER-MAY', 'NOVEMBER-MAY', '\r\nhttps://en.wikipedia.org/wiki/Mahatma_Gandi_Marine_National_Park', 0, 0, 0),
('MAHAVEER HARINA VANASTHALI NATIONAL PARK', 'TELANGANA', 15, 'SEPTEMBER-JUNE', 'NOVEMBER-MAY', 'https://en.wikipedia.org/wiki/Mahaveer_Harina_Vanasthali_National_Park', 0, 0, 0),
('MANAS WILDLIFE SANCTUARY', 'ASSAM', 950, 'OCTOBER-APRIL', 'NOVEMBER-APRIL', 'https://en.wikipedia.org/wiki/Manas_National_Park', 0, 0, 0),
('MARINE(GULF OF KACHCHH) NATIONAL PARK', 'GUJARAT', 163, 'OCTOBER-MAY', 'NOVEMBER-MARCH', 'https://en.wikipedia.org/wiki/Marine_National_Park', 0, 0, 0),
('MOLLEM NATIONAL PARK', 'GOA', 107, 'OCTOBER-MAY', 'NOVEMBER-MARCH', 'https://en.wikipedia.org/wiki/Mollem_National_Park', 0, 0, 0),
('MOULING NATIONAL PARK', 'ARUNACHAL PRADESH', 483, 'SEPTEMBER-MAY', 'NOVEMBER-APRIL', 'https://en.wikipedia.org/wiki/Mouling_National_Park', 0, 0, 0),
('MUDUMALAI NATIONAL PARK', 'TAMILNADU', 104, 'THROUGHOUT THE YEAR', 'FEBRUARY_MAY & SEPTEMBER-OCTOBER', 'https://en.wikipedia.org/wiki/Mudumalai_National_Park', 0, 0, 0),
('MUKUNDRA HILLS NATIONAL PARK', 'RAJASTHAN', 201, 'THROUGHOUT THE YEAR', 'THROUGHOUT THE YEAR', '\r\nhttps://en.wikipedia.org/wiki/Mukundra_Hills_National_Park', 0, 0, 0),
('MUKURTHI NATIONAL PARK', 'TAMIL NADU', 178, 'OCTOBER-MAY', 'NOVEMBER-APRIL', '\r\nhttps://en.wikipedia.org/wiki/Mukurthi_National_Park', 0, 0, 0),
('MURLEL NATIONAL PARK', 'MIZORAM', 100, 'SEPTEMBER-MAY', 'NOVEMBER-APRIL', '\r\nhttps://en.wikipedia.org/wiki/Murlel_National_Park', 0, 0, 0),
('NAGARAHOLE(RAJIV GANDHI) NATIONAL PARK', 'KARNATAKA', 643, 'OCTOBER-MAY', 'OCTOBER-MAY', '\r\nhttps://en.wikipedia.org/wiki/Nagarahole_National_Park', 0, 0, 0),
('NAMDAPHA NATIONAL PARK', 'ARUNACHAL PRADESH', 1808, 'OCTOBER-MAY', 'OCTOBER-MARCH', 'https://en.wikipedia.org/wiki/Namdapha_National_Park', 0, 0, 0),
('NAMERI NATIONAL PARK', 'ASSAM', 200, 'OCTOBER-MAY', 'NOVEMBER-MARCH', 'https://en.wikipedia.org/wiki/Nameri_National_Park', 0, 0, 0),
('NANDA DEVI NATIONAL PARK', 'UTTARAKHANDA', 624, 'MAY-NOVEMBER', 'JUNE-SEPTEMBER', '\r\nhttps://en.wikipedia.org/wiki/Nanda_Devi_National_Park', 0, 0, 0),
('NEORA VALLEY NATIONAL PARK', 'WEST BENGAL', 160, 'SEPTEMBER-MAY', 'OCTOBER-DECEBER & MARCH-APIL', 'https://en.wikipedia.org/wiki/Neora_Valley_National_Park', 0, 0, 0),
('PANNA NATIONAL PARK', 'MADHYA PRADESH', 543, 'OCTOBER-MAY', 'NOVEMBER-FEBRUARY', 'https://en.wikipedia.org/wiki/Panna_National_Park', 0, 0, 0),
('PAPIKONDA NATIONAL PARK', 'ANDHRA PRADESH', 1013, 'SEPTEMBER-MAY', 'OCTOBER-APRIL', 'https://en.wikipedia.org/wiki/Papikonda_National_Park', 0, 0, 0),
('PIN VALLEY NATIONAL PARK', 'HIMACHAL PRADESH', 675, 'AUGUST-NOVEMBER', 'THROUGHOUT THE YEAR', 'https://en.wikipedia.org/wiki/Pin_Valley_National_Park', 0, 0, 0),
('RAJAJI NATIONAL PARK', 'UTTARAKHANDA', 820, 'NOVEMBER-JUNE', 'FEBRUARYY-APRIL', 'https://en.wikipedia.org/wiki/Rajaji_National_Park', 0, 0, 0),
('RANI JHASNSI NATIONAL PARK', 'ANDAMAN AND NICOBAR NATIONAL PARK', 257, 'OCTOBER-MAY', 'NOVEMBER-MAY', 'https://en.wikipedia.org/wiki/rANI_Jhansi_National_Park', 0, 0, 0),
('RANI ZANSHI NATIONAL PARK', 'ANDAMAN AND NICOBAR ISLAND', 256, 'NOVEMBER-JUNE', 'NOVEMBER-JUNE', 'https://en.wikipedia.org/wiki/Rani_Zanshi_National_Park', 0, 0, 0),
('RANTHAMBORE NATIONAL PARK', 'RAJASTHAN', 1334, 'OCTOBER-JUNE', 'OCTOBER-APRIL', 'https://en.wikipedia.org/wiki/Ranthambore_National_Park', 0, 0, 0),
('SANJAY GANDHI NATIONAL PARK', 'MAHARASHTRA', 104, 'October-June', 'October-June', 'https://sgnp.maharashtra.gov.in', 0, 0, 0),
('SASAN-GIR WILDLIFE SANCTUARY', 'GUJARAT', 1412, 'OCTOBER-MAY', 'NOVEMBER-MARCH', 'https://en.wikipedia.org/wiki/Gir_Forest_National_Park', 0, 0, 0),
('SATPURA NATIONAL PARK', 'MADHYA PRADESH', 585, 'OCTOBER-MAY', 'NOVEMBER-MARCH', '\r\nhttps://en.wikipedia.org/wiki/Satpura_National_Park', 0, 0, 0),
('SILENT VALLEY NATIONAL PARK', 'KERALA', 90, 'OCTOBER-JUNE', 'DECEMBER-APRIL', '\r\nhttps://en.wikipedia.org/wiki/Silent_Valley_National_Park', 0, 0, 0),
('SIMLIPAL NATIONAL PARK', 'ODISHA', 845, 'OCTOBER-JUNE', 'OCTOBER-JUNE', '\r\nhttps://en.wikipedia.org/wiki/Smlipal_National_Park', 0, 0, 0),
('SRI VENKATESWARA NATIONAL PARK', 'ANDHRA PRADESH', 354, 'OCTOBER-MAY', 'NOVEMBER-FEBRUARY', '\r\nhttps://en.wikipedia.org/wiki/Sri_Venkateswara_National_Park', 0, 0, 0),
('SUNDERBANS NATIONAL PARK', 'WEST BENGAL', 4624, 'AUGUST-MARCH', 'NOVEMBER-MARCH', 'https://en.wikipedia.org/wiki/Sundarbans_National_Park', 70, 23, 3.04348),
('TADOBA NATIONAL PARK', 'MAHARASHTRA', 625, 'JULY-MAY', 'OCTOBER-MARCH', 'https://en.wikipedia.org/wiki/Tadoba_Andhari_Tiger_Projec', 0, 0, 0),
('VALMIKI NATIONAL PARK', 'BIHAR', 336, 'SEPTEMBER-MAY', 'NOVMBER-MARCH', '\r\nhttps://en.wikipedia.org/wiki/Valmiki_National_Park', 0, 0, 0),
('VANSDA NATIONAL PARK', 'GUJARAT', 25, 'OCTOBER-JUNE', 'NOVEMBER-APRIL', 'https://en.wikipedia.org/wiki/Vansda_National_Park', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `safari`
--

CREATE TABLE `safari` (
  `Saf_ID` int(10) NOT NULL,
  `Vehicle` varchar(10) NOT NULL,
  `Capacity` int(10) NOT NULL,
  `Available_Seats` int(100) NOT NULL,
  `Cost_Perhead` int(10) NOT NULL,
  `Rs_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `safari`
--

INSERT INTO `safari` (`Saf_ID`, `Vehicle`, `Capacity`, `Available_Seats`, `Cost_Perhead`, `Rs_Name`) VALUES
(1000, 'JEEP', 12, 12, 20000, 'RANTHAMBORE NATIONAL PARK'),
(1001, 'JEEP', 12, 10, 25000, 'TADOBA NATIONAL PARK'),
(1011, 'CANTER', 24, 21, 22000, 'KANHA NATIONAL PARK'),
(1021, 'CANTER', 24, 6, 25000, 'SUNDERBANS NATIONAL PARK'),
(1031, 'JEEP', 12, 12, 23000, 'JIM CORBETT NATIONAL PARK'),
(1041, 'ELEPHANTS', 16, 16, 15000, 'MANAS WILDLIFE SANCTUARY'),
(1051, 'CANTER', 24, 24, 30000, 'SASAN-GIR WILDLIFE SANCTUARY'),
(1061, 'CYCLE RICK', 30, 30, 22000, 'KAZIRANGA NATIONAL PARK'),
(1071, 'CANTER', 24, 24, 30000, 'HEMIS NATIONAL PARK'),
(1081, 'JEEP', 12, 12, 27000, 'BANDHAVGARH NATIONAL PARK'),
(2001, 'JEEP', 10, 10, 500, 'RANTHAMBORE NATIONAL PARK'),
(2011, 'CANTER', 20, 20, 800, 'HEMIS NATIONAL PARK'),
(2021, 'JEEP', 120, 12, 400, 'KANHA NATIONAL PARK'),
(2031, 'JEEP', 12, 12, 400, 'MANAS WILDLIFE SANCTUARY'),
(2041, 'CANTER', 25, 25, 700, 'SASAN-GIR WILDLIFE SANCTUARY'),
(2051, 'JEEP', 10, 10, 600, 'JIM CORBETT NATIONAL PARK'),
(2061, 'CANTER', 25, 25, 600, 'BANDHAVGARH NATIONAL PARK'),
(2071, 'JEEP', 12, 6, 500, 'TADOBA NATIONAL PARK'),
(2081, 'CANTER', 30, 2, 1000, 'SUNDERBANS NATIONAL PARK'),
(2091, 'CANTER', 24, 24, 700, 'DESERT NATIONAL PARK'),
(3001, 'JEEP', 12, 12, 700, 'DESERT NATIONAL PARK'),
(3011, 'JEEP', 10, 10, 700, 'GANGOTRI NATIONAL PARK'),
(3021, 'JEEP', 12, 12, 700, 'GANGOTRI NATIONAL PARK'),
(3031, 'CANTER', 30, 30, 800, 'NAMDAPHA NATIONAL PARK'),
(3041, 'JEEP', 12, 12, 600, 'NAMDAPHA NATIONAL PARK'),
(3051, 'JEEP', 12, 12, 600, 'KHANGCHENDZONGA NATIONAL PARK'),
(3061, 'CANTER', 24, 24, 800, 'INDRAVATI(KUTRU) NATIONAL PARK'),
(3071, 'CANTER', 24, 20, 800, 'BANDIPUR NATIONAL PARK'),
(3081, 'JEEP', 12, 12, 600, 'BANDIPUR NATIONAL PARK'),
(3091, 'JEEP', 12, 12, 600, 'SIMLIPAL NATIONAL PARK'),
(4001, 'JEEP', 12, 12, 600, '	\r\nGREAT HIMALAYAN NATIONAL PARK'),
(4011, 'JEEP', 12, 12, 600, 'KHIRGANGA NATIONAL PARK'),
(4021, 'JEEP', 12, 12, 600, 'NAGARAHOLE(RAJIV GANDHI) NATIONAL PARK'),
(4031, 'JEEP', 12, 12, 700, 'NANDA DEVI NATIONAL PARK'),
(4041, 'JEEP', 12, 12, 600, 'NANDA DEVI NATIONAL PARK'),
(4051, 'JEEP', 12, 12, 600, 'PANNA NATIONAL PARK'),
(4061, 'CANTER', 24, 24, 900, 'PANNA NATIONAL PARK'),
(4071, 'CANTER', 24, 24, 800, 'CHANDOLI NATIONAL PARK'),
(4081, 'JEEP', 12, 12, 600, 'CHANDOLI NATIONAL PARK'),
(4091, 'JEEP', 12, 12, 600, 'PAPIKONDA NATIONAL PARK'),
(5001, 'CANTER', 24, 24, 900, 'PAPIKONDA NATIONAL PARK');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` int(20) NOT NULL,
  `SName` varchar(100) NOT NULL,
  `S_Contact` varchar(20) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Sex` char(2) NOT NULL,
  `superid` int(10) NOT NULL,
  `R_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `SName`, `S_Contact`, `Designation`, `Sex`, `superid`, `R_Name`) VALUES
(10321, 'RAJESH PATEL', '9876546534', 'SUPERVISOR', 'M', 10321, 'RANTHAMBORE NATIONAL PARK'),
(10322, 'AHMED ANSARI', '9876554356', 'GUIDE', 'M', 10321, 'RANTHAMBORE NATIONAL PARK'),
(10323, 'GAYATRI BACHHAV', '9876562345', 'DRIVER', 'F', 10321, 'RANTHAMBORE NATIONAL PARK'),
(10324, 'RUCHA KULKARNI', '9876552345', 'GUIDE', 'F', 10321, 'SUNDERBANS NATIONAL PARK'),
(10325, 'RAMESH PAWAR', '9876546591', 'SUPERVISOR', 'M', 10325, 'SUNDERBANS NATIONAL PARK'),
(10326, 'PAULO DAM', '9876554534', 'DRIVER', 'F', 10324, 'SUNDERBANS NATIONAL PARK'),
(10327, 'SURESH PAWAR', '9976546534', 'CARETAKER', 'M', 10324, 'SUNDERBANS NATIONAL PARK'),
(10328, 'PRIYA CHAWDHARI', '9896546534', 'SUPERVISOR', 'F', 10328, 'TADOBA NATIONAL PARK'),
(10329, 'ESHA SHARMA', '9876946534', 'GUIDE', 'M', 10328, 'TADOBA NATIONAL PARK'),
(10330, 'GOVIND GUETTA', '9876596534', 'DRIVER', 'M', 10328, 'TADOBA NATIONAL PARK');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `T_Numbers` int(10) NOT NULL,
  `Sf_ID` int(10) NOT NULL,
  `Tr_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `Tourist_ID` int(10) NOT NULL,
  `T_Name` int(100) NOT NULL,
  `T_Contact` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `AADHAAR` int(12) NOT NULL,
  `TT_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `pass`
--
DROP TABLE IF EXISTS `pass`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pass`  AS  select `passenger`.`fname` AS `fname`,`passenger`.`lname` AS `lname`,`passenger`.`age` AS `age`,`passenger`.`adhaar` AS `adhaar`,`passenger`.`B_id` AS `B_id` from `passenger` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animilia`
--
ALTER TABLE `animilia`
  ADD PRIMARY KEY (`Sci_Name`);

--
-- Indexes for table `ani_reserve`
--
ALTER TABLE `ani_reserve`
  ADD PRIMARY KEY (`S_Name`,`Reserve_Name`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Food_Name`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD UNIQUE KEY `Pno` (`fname`,`lname`,`age`,`adhaar`,`B_id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`Res_Name`);

--
-- Indexes for table `safari`
--
ALTER TABLE `safari`
  ADD PRIMARY KEY (`Saf_ID`),
  ADD KEY `Rs_Name` (`Rs_Name`),
  ADD KEY `Rs_Name_2` (`Rs_Name`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`),
  ADD KEY `superid` (`superid`),
  ADD KEY `R_Name` (`R_Name`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`T_Numbers`),
  ADD KEY `Sf_ID` (`Sf_ID`),
  ADD KEY `Tr_ID` (`Tr_ID`);

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`Tourist_ID`),
  ADD KEY `TT_ID` (`TT_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `safari`
--
ALTER TABLE `safari`
  ADD CONSTRAINT `safari_ibfk_1` FOREIGN KEY (`Rs_Name`) REFERENCES `reserve` (`Res_Name`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`superid`) REFERENCES `staff` (`Staff_ID`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`R_Name`) REFERENCES `reserve` (`Res_Name`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`Sf_ID`) REFERENCES `safari` (`Saf_ID`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`Tr_ID`) REFERENCES `tourist` (`Tourist_ID`);

--
-- Constraints for table `tourist`
--
ALTER TABLE `tourist`
  ADD CONSTRAINT `tourist_ibfk_1` FOREIGN KEY (`TT_ID`) REFERENCES `tourist` (`Tourist_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
