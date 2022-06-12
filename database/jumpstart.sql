-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 08:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jumpstart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_ram` varchar(5) NOT NULL,
  `item_storage` varchar(50) NOT NULL,
  `item_price` decimal(8,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  `item_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_ram`, `item_storage`, `item_price`, `item_image`, `item_register`, `item_status`) VALUES
(1, 'Samsung', 'Samsung Galaxy 10', '4', '64', '14499.00', './assets/products/1.png', '2020-03-28 11:08:57', 1),
(2, 'Redmi', 'Redmi Note 7', '6', '32', '8999.00', './assets/products/2.png', '2020-03-28 11:08:57', 1),
(3, 'Redmi', 'Redmi Note 6', '8', '32', '16990.00', './assets/products/3.png', '2020-03-28 11:08:57', 1),
(4, 'Redmi', 'Redmi Note 5', '3', '32', '11499.00', './assets/products/4.png', '2020-03-28 11:08:57', 1),
(5, 'Redmi', 'Redmi Note 4', '2', '16', '9999.00', './assets/products/5.png', '2020-03-28 11:08:57', 1),
(6, 'Redmi', 'Redmi Note 8', '1', '32', '10990.00', './assets/products/6.png', '2020-03-28 11:08:57', 1),
(7, 'Redmi', 'Redmi Note 9', '4', '128', '5999.00', './assets/products/8.png', '2020-03-28 11:08:57', 1),
(8, 'Redmi', 'Redmi Note', '6', '32', '19990.00', './assets/products/10.png', '2020-03-28 11:08:57', 1),
(9, 'Samsung', 'Samsung Galaxy S6', '8', '16', '8999.00', './assets/products/11.png', '2020-03-28 11:08:57', 1),
(10, 'Samsung', 'Samsung Galaxy S7', '1', '64', '29999.00', './assets/products/12.png', '2020-03-28 11:08:57', 1),
(11, 'Apple', 'Apple iPhone 5', '2', '32', '5999.00', './assets/products/13.png', '2020-03-28 11:08:57', 1),
(12, 'Apple', 'Apple iPhone 6', '3', '64', '4999.00', './assets/products/14.png', '2020-03-28 11:08:57', 1),
(13, 'Apple', 'Apple iPhone 7', '4', '128', '61990.00', './assets/products/15.png', '2020-03-28 11:08:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `register_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`, `register_date`) VALUES
(1, 'Daily', 'Tuition', 'tuition@gamil.com', '123', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', 'kashyap@gmail.com', '123', '2020-03-28 13:07:17'),
(3, 'hello', 'hello', 'hello@gmail.com', 'hello', '2022-04-15 23:33:53'),
(4, 'Aung', 'Thu', 'aaungthu663@gmail.com', '123', '2022-04-16 23:58:58'),
(6, 'Nadi', 'Lin', 'nadi@gmail.com', 'nadi', '2022-04-29 18:39:05'),
(7, 'ge', 'ge', 'gege@gmail.com', 'gege', '2022-04-29 18:59:21'),
(8, 'arnt', 'zay', 'arnt@gmail.com', 'arnt', '2022-04-29 19:02:29'),
(9, 'tat', 'tat', 'tat@gmail.com', 'tat', '2022-04-29 19:04:45'),
(10, 'htet', 'ag', 'htet@gmail.com', 'htet', '2022-04-29 20:08:31'),
(11, 'Thu', 'Thu', 'thu@gmail.com', 'thu', '2022-04-29 20:21:27'),
(12, 'hein', 'htet', 'hein@gmail.com', 'hein', '2022-05-14 13:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`cart_id`, `user_id`, `item_id`) VALUES
(2, 1, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
