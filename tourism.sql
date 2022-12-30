-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 10:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_id` int(11) NOT NULL,
  `Package_id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Booking_date` date NOT NULL DEFAULT current_timestamp(),
  `Booking_type` varchar(20) NOT NULL,
  `Booking_total` int(11) NOT NULL,
  `Person` int(11) NOT NULL,
  `Booking_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Booking_id`, `Package_id`, `Customer_id`, `Booking_date`, `Booking_type`, `Booking_total`, `Person`, `Booking_desc`) VALUES
(1, 3, 2, '2021-09-08', 'Online', 78000, 6, '5 day trip which includes stay at your hotel with transportation(air conditioned).'),
(2, 1, 1, '2021-09-08', 'Online', 20000, 2, '5 day trip which includes stay at your hotel with transportation(air conditioned).'),
(3, 4, 5, '2021-09-12', 'Online', 60000, 4, '5 day trip which includes stay at your hotel with transportation(air conditioned).'),
(4, 2, 9, '2021-09-12', 'Online', 75000, 5, '5 day trip which includes stay at your hotel with transportation(air conditioned).'),
(5, 1, 5, '2021-09-14', 'Online', 20000, 2, '5 day trip which includes stay at your hotel with transportation(air conditioned).'),
(6, 3, 14, '2021-09-14', 'Online', 65000, 5, '5 day trip which includes stay at your hotel with transportation(air conditioned).');

-- --------------------------------------------------------

--
-- Table structure for table `booking_hotel`
--

CREATE TABLE `booking_hotel` (
  `Booking_id` int(11) NOT NULL,
  `Hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_hotel`
--

INSERT INTO `booking_hotel` (`Booking_id`, `Hotel_id`) VALUES
(1, 2),
(2, 1),
(3, 3),
(4, 1),
(5, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `booking_transportation`
--

CREATE TABLE `booking_transportation` (
  `Booking_id` int(11) NOT NULL,
  `Transportation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_transportation`
--

INSERT INTO `booking_transportation` (`Booking_id`, `Transportation_id`) VALUES
(1, 2),
(2, 1),
(3, 2),
(4, 2),
(5, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `Customer_name` varchar(100) NOT NULL,
  `Customer_email` varchar(70) NOT NULL,
  `Customer_password` varchar(100) NOT NULL,
  `Customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `Customer_name`, `Customer_email`, `Customer_password`, `Customer_address`) VALUES
(1, 'Muhammad Ali', 'mali@gmail.com', 'password1', 'A-87, Block-9, Rehman Colony '),
(2, 'Abdullah', 'abdullah@gmail.com', 'password2', 'F-19, Street-2, Saima Tower'),
(3, 'Ayesha', 'ayesha@gmail.com', 'password3', 'B-22, Sector D-3, Gulistan-e-Rizwan'),
(4, 'Moosa', 'moosa@gmail.com', 'password4', 'B-7, Block-5, Shershah Bagh'),
(5, 'Farhan', 'farhan@gmail.com', 'password5', 'D-24, Sulaiman Heights'),
(6, 'Zahid', 'zahid@live.com', 'password6', 'C-9, Airport Road'),
(7, 'Kamran', 'kami@mail.com', 'password7', 'B-23, Jamshed Colony'),
(8, 'Talha', 'talha@yahoo.com', 'password8', 'B-14, Nazimabad'),
(9, 'Mariam', 'mariam@gmail.com', 'password9', 'C-6, FB Area'),
(10, 'Hashim', 'hashim@yahoo.com', 'password10', 'F-18, PECHS'),
(11, 'Majid', 'majid@gmail.com', 'password11', 'B-34, Bufferzone'),
(12, 'Ibrahim', 'ibrahim@yahoo.com', 'password12', 'B-8,Defence'),
(13, 'Hamza', 'hamza@gmail.com', 'password13', 'C-8,Gulistan-e-Johar'),
(14, 'Fatima', 'fatima@gmail.com', 'password14', 'B-16, Malir');

-- --------------------------------------------------------

--
-- Table structure for table `customer_booking`
--

CREATE TABLE `customer_booking` (
  `Booking_id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_booking`
--

INSERT INTO `customer_booking` (`Booking_id`, `Customer_id`) VALUES
(1, 2),
(2, 1),
(3, 5),
(4, 9),
(5, 5),
(6, 14);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `Customer_id` int(11) NOT NULL,
  `Customer_contact_no` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`Customer_id`, `Customer_contact_no`) VALUES
(1, 445646465),
(2, 987198797),
(3, 139875641),
(4, 478975645),
(5, 198789465),
(6, 455473736),
(7, 877766756),
(8, 989247421),
(9, 459435422),
(9, 435253242),
(10, 324908509),
(11, 294937952),
(12, 531324099),
(13, 989375352),
(14, 843829342);

-- --------------------------------------------------------

--
-- Table structure for table `customer_package`
--

CREATE TABLE `customer_package` (
  `Customer_id` int(11) NOT NULL,
  `Package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_package`
--

INSERT INTO `customer_package` (`Customer_id`, `Package_id`) VALUES
(2, 3),
(1, 1),
(5, 4),
(9, 2),
(5, 1),
(14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Hotel_id` int(11) NOT NULL,
  `Hotel_name` text DEFAULT NULL,
  `Hotel_type` text DEFAULT NULL,
  `Hotel_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Hotel_id`, `Hotel_name`, `Hotel_type`, `Hotel_desc`) VALUES
(1, 'Crown Plaza', '4 star', 'Located in the heart of Murree which provides easy access to tourist spots in Murree. Well furnished rooms, cooperative staff and quick service. It also has a branch in Skardu. '),
(2, 'Spotlight Hotel', '4 star', 'Best place to stay for a holiday in the beautiful Naran Valley. The hotel provides best service with efficient staff.'),
(3, 'Royal Galaxy', '4 star', 'Stay at the Royal Galaxy Hotel on your next visit to Hunza Valley where you will be provided world class facilities to make your trip memorable.');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_info`
--

CREATE TABLE `hotel_info` (
  `Hotel_id` int(11) NOT NULL,
  `Hotel_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_info`
--

INSERT INTO `hotel_info` (`Hotel_id`, `Hotel_address`) VALUES
(1, 'Mall Road, Murree'),
(1, 'Shaheen Road, Skardu'),
(2, 'Khan Road, Naran Valley'),
(3, 'Wazir Road, Hunza Valley');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_id` int(11) NOT NULL,
  `Package_name` varchar(100) NOT NULL,
  `Package_type` varchar(100) NOT NULL,
  `Package_desc` varchar(100) NOT NULL,
  `Amount_per_person` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_id`, `Package_name`, `Package_type`, `Package_desc`, `Amount_per_person`) VALUES
(1, 'Murree Package', 'Couple Package', '5 days trip starting from Islamabad. Will be visiting many tourist spots around Murree. Hotel and tr', 10000),
(2, 'Skardu Package', 'Family Package', '5 days exploring beautiful landscapes in Skardu. Hotel and transportation included.', 15000),
(3, 'Naran Package', 'Family Package', '5 days of adventure in the beautiful Naran Kaghan Valley which includes visit to numerous lakes and ', 13000),
(4, 'Hunza Package', 'Family Package', '5 days exploring the beauty and culture of Hunza Valley. Hotel and transportation included', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `Transportation_id` int(11) NOT NULL,
  `Transportation_type` varchar(100) NOT NULL,
  `Transportation_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`Transportation_id`, `Transportation_type`, `Transportation_desc`) VALUES
(1, 'Toyota Corolla', 'Well maintained, fully air conditioned and max capacity of 5 people'),
(2, 'Toyota Hilux', 'Fully air conditioned, suitable for use in mountainous terrain and a larger capacity of 7-8 people.'),
(3, 'Toyota Hiace', 'Fully air conditioned with a capacity of 15-17 people');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_id`);

--
-- Indexes for table `booking_hotel`
--
ALTER TABLE `booking_hotel`
  ADD PRIMARY KEY (`Booking_id`);

--
-- Indexes for table `booking_transportation`
--
ALTER TABLE `booking_transportation`
  ADD PRIMARY KEY (`Booking_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`),
  ADD KEY `EmailId` (`Customer_email`),
  ADD KEY `EmailId_2` (`Customer_email`);

--
-- Indexes for table `customer_booking`
--
ALTER TABLE `customer_booking`
  ADD PRIMARY KEY (`Booking_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hotel_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`Transportation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `booking_hotel`
--
ALTER TABLE `booking_hotel`
  MODIFY `Booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `booking_transportation`
--
ALTER TABLE `booking_transportation`
  MODIFY `Booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_booking`
--
ALTER TABLE `customer_booking`
  MODIFY `Booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
