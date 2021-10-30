-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 09:53 PM
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
-- Database: `eat24`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand1`
--

CREATE TABLE `brand1` (
  `brandid` int(10) NOT NULL,
  `brandname` varchar(20) NOT NULL,
  `fssaino` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `logo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand1`
--

INSERT INTO `brand1` (`brandid`, `brandname`, `fssaino`, `address`, `logo`) VALUES
(1, 'wow momo', 'Fcgh', 'kolkata', 'wow.webp'),
(2, 'KFC', 'Fcgh', 'kolkata', 'kfc.webp'),
(3, 'Domino\'s', 'ghjk', 'kolkata', 'domino.webp');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(50) NOT NULL,
  `pid` int(50) NOT NULL,
  `uid` int(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `p_quantity` int(50) NOT NULL,
  `amount` double NOT NULL,
  `status` text NOT NULL,
  `brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `pid`, `uid`, `date`, `p_quantity`, `amount`, `status`, `brand`) VALUES
(1, 4, 1, '2021-06-29', 2, 500, 'NotDelivered', 'KFC');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(10) NOT NULL,
  `brandid` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(200) NOT NULL,
  `quantity` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `brandid`, `name`, `price`, `quantity`, `type`, `img`) VALUES
(1, 3, 'Pizza', 250, 4, 'veg', 'pizza.webp'),
(2, 2, 'Burger', 350, 4, 'Non veg', 'burger.png'),
(3, 1, 'Momos', 250, 4, 'veg', 'momos.webp'),
(4, 2, 'Chicken', 250, 4, 'Non veg', 'chicken.webp'),
(5, 1, 'Chaap', 350, 4, 'Non veg', 'chap.jfif'),
(6, 2, 'Noodle', 250, 4, 'veg', 'noodle.png'),
(7, 3, 'Biryani', 250, 4, 'Non veg', 'briyani.webp'),
(8, 1, 'Panner', 250, 4, 'veg', 'paneer.jfif'),
(9, 1, 'Steamed Momo', 250, 2, 'veg', 'momo3.jpg'),
(10, 1, 'Soup Momo', 250, 2, 'Non veg', 'soup-momos.jpg'),
(11, 1, 'Chicken Momo', 250, 2, 'Non veg', 'chicken-momos.jpg'),
(12, 1, 'Panner Momo', 350, 2, 'veg', 'cheese-momos.jpg'),
(13, 3, 'Chicken Dominator', 350, 2, 'Non veg', 'chicken pizza.jpg'),
(14, 3, 'Cheese & Tomato', 250, 2, 'veg', 'cheese_and_tomato.png'),
(15, 3, 'Veggie Pizza', 250, 2, 'veg', 'vegpizza.jpg'),
(16, 3, 'Pepper Barbeque & On', 250, 2, 'veg', 'Pepper_Barbeque_&_Onion.jpg'),
(17, 3, 'Indian Chicken Tikka', 350, 2, 'Non veg', 'IndianChickenTikka.jpg'),
(18, 3, 'Non Veg Supreme', 250, 2, 'Non veg', 'Non-Veg_Supreme.jpg'),
(19, 2, '2 Popcorn Rice bowls', 350, 2, 'veg', '2-popcorn-rice-bowls-with-8-hot-wings.jpg'),
(20, 2, 'Big 2 Bucket', 350, 2, 'Non veg', 'big 2 bucket.jpg'),
(21, 2, '5 pc Veg Strips', 250, 2, 'veg', '4-pc-veg-strips.jpg'),
(22, 2, '4 pc Chicken wings- ', 350, 2, 'Non veg', '4pc chicken wings.jpg'),
(23, 2, 'Buddy Meal', 250, 2, 'veg', 'buddy meal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mobile`, `address`, `password`) VALUES
(1, 'Soma', 'xyz@hmail.com', '6788967676', 'gh', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand1`
--
ALTER TABLE `brand1`
  ADD PRIMARY KEY (`brandid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand1`
--
ALTER TABLE `brand1`
  MODIFY `brandid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `o_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
