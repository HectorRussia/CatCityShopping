-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 08:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cat_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cat`
--

CREATE TABLE `add_cat` (
  `id_cat` int(11) NOT NULL,
  `type_cat` varchar(100) COLLATE utf8_bin NOT NULL,
  `title_cat` varchar(100) COLLATE utf8_bin NOT NULL,
  `born_cat` varchar(100) COLLATE utf8_bin NOT NULL,
  `price_cat` varchar(100) COLLATE utf8_bin NOT NULL,
  `gender_cat` varchar(100) COLLATE utf8_bin NOT NULL,
  `image1` varchar(100) COLLATE utf8_bin NOT NULL,
  `image2` varchar(100) COLLATE utf8_bin NOT NULL,
  `image3` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `add_cat`
--

INSERT INTO `add_cat` (`id_cat`, `type_cat`, `title_cat`, `born_cat`, `price_cat`, `gender_cat`, `image1`, `image2`, `image3`, `date`) VALUES
(2, '1', 'Soft fur friendly affectionate cute.', '17/10/2022', '27.5', 'male', 'cat1.jpg', 'cat2.jpg', 'cat3.jpg', '2023-10-17 10:22:36'),
(3, '2', 'Soft fur, friendly, shy, young but cute.', '2/10/2023', '20.2', 'male', 'british1.jpg', 'british2.jpg', 'brititsh3.jpg', '2023-10-17 11:01:20'),
(6, '1', 'Playful, cute, friendly, mischievous, short ears, soft fur.', '4/5/2022', '23.5', 'female', 'dsadsa.jpg', 'dsads.jpg', 'dsad.jpg', '2023-10-18 11:09:21'),
(7, '1', 'Playful, cute, friendly, mischievous, short ears, soft fur.', '14/5/2023', '20.5', 'female', '7484dcfba298e2d2555aa35905d68639.jpg', '20157d3da8de5bd579bdf3ef154142e6.jpg', '751023e32e34b152d18af5879816c2ef.jpg', '2023-10-18 12:16:28'),
(8, '1', 'Shy, soft fur, short ears, good at eating.', '5/8/2023', '28.5', 'male', 'ef52bc093c0a7916a373da0ad67a0c53.jpg', 'b04618bc13c81460e39fd0378c1ddeaa.jpg', '21e5456f09f8b98e7ab16e75f15a52fd.jpg', '2023-10-18 12:25:31'),
(9, '1', 'Playful, cute, good at eating, affectionate, soft fur', '14/2/2022', '1000', 'male', '5c7a64a85ffab3380fb1f468543ba39a.jpg', '691669bfd765aca9ba26507132a9d6de.jpg', 'c47aca74549bacccc407ccdd55c6c8f5.jpg', '2023-11-02 15:17:22'),
(10, '1', 'Affectionate, soft fur, friendly, good at eating, strong.', '22/5/2022', '2000', 'male', 'd380298c1c8f8506e67d902df715eb14.jpg', 'cf63395fec16452e59a7c398b29d4555.jpg', '28c5d46b661748eedad942a67ef3121e.jpg', '2023-10-18 12:31:52'),
(11, '2', 'Short ears soft fur friendly good at eating cute.', '18/4/2023', '1680', 'male', '10e153bc31ec3c23ed1d208da675737d.jpg', '4b8306c4f17ec3dc1d7596a29d352b3e.jpg', '166741ccf45a4518f99b1f330e316d4d.jpg', '2023-11-22 11:35:38'),
(12, '2', 'layful, cute, friendly, mischievous, short ears,', '23/12/2022', '2000', 'male', '6b5ed1e077392885d2cd0e39544f0eb4.jpg', 'd2006285216c5b776a9e1487d24c09b6.jpg', 'e92ad60dc6b124f1113c82e36c72b535.jpg', '2023-11-22 18:02:23'),
(13, '3', 'Shy, soft fur, short ears, good at eating.', '5/10/2023', '1500', 'female', '8b010cd208bd7ef56c8a5b0845f51491.jpg', '62aeffe17b52b016341ab927a1d7d38a.jpg', 'fc8a90d4a327ed003616f0ba4f15e06f.jpg', '2023-11-22 18:04:21'),
(15, '3', 'Affectionate, soft fur, friendly, good at eating,', '10/6/2023', '1600', 'female', '2.jpg', '22.jpg', '23.jpg', '2023-11-22 18:07:28'),
(16, '3', 'Playful, cute, good at eating, affectionate, soft .', '2/12/2022', '2200', 'male', '3.jpg', '32.jpg', '33.jpg', '2023-11-22 18:09:51'),
(17, '4', 'layful, cute, friendly, mischievous, short ears,', '10/2/2023', '2500', 'female', 'rd11.jpg', 'rd12.jpg', 'rd13.jpg', '2023-11-22 18:47:33'),
(18, '4', 'layful, cute, friendly, mischievous, short ears,', '5/6/2023', '2700', 'male', 'rd21.jpg', 'rd22.jpg', 'rd23.jpg', '2023-11-22 18:47:42'),
(19, '4', 'Shy, soft fur, short ears, good at eating.', '9/7/2023', '3000', 'female', 'rd31.jpg', 'rd32.jpg', 'rd33.jpg', '2023-11-22 18:47:52'),
(20, '5', 'Affectionate, soft fur, friendly, good at eating,', '11/11/2022', '1800', 'male', 'amc11.jpg', 'amc12.jpg', 'amc13.jpg', '2023-11-22 18:45:35'),
(21, '5', 'layful, cute, friendly, mischievous, long ears,', '9/10/2022', '2200', 'male', 'amc21.jpg', 'amc22.jpg', 'amc23.jpg', '2023-11-22 18:45:47'),
(22, '5', 'layful, cute, friendly, mischievous, short ears,', '1/2/2023', '2400', 'female', 'amc31.jpg', 'amc32.jpg', 'amc33.jpg', '2023-11-22 18:46:00'),
(23, '6', 'Shy, soft fur, short ears, good at eating.', '7/5/2023', '2400', 'male', 'muskin11.jpg', 'muskin12.jpg', 'muskin13.jpg', '2023-11-22 18:38:32'),
(24, '6', 'Shy, soft fur, short ears, good at eating.', '3/5/2023', '2100', 'male', 'muskin23.jpg', 'muskin22.jpg', 'muskin21.jpg', '2023-11-22 18:39:47'),
(25, '6', 'Shy, soft fur, short ears, good at eating.', '17/6/2023', '2000', 'female', 'muskin31.jpg', 'muskin31.jpg', 'muskin31.jpg', '2023-11-22 18:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `add_products`
--

CREATE TABLE `add_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `product_title` varchar(100) COLLATE utf8_bin NOT NULL,
  `product_type` varchar(30) COLLATE utf8_bin NOT NULL,
  `product_price` varchar(100) COLLATE utf8_bin NOT NULL,
  `stock` varchar(100) COLLATE utf8_bin NOT NULL,
  `product_image1` varchar(100) COLLATE utf8_bin NOT NULL,
  `product_image2` varchar(100) COLLATE utf8_bin NOT NULL,
  `product_image3` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `add_products`
--

INSERT INTO `add_products` (`product_id`, `product_name`, `product_title`, `product_type`, `product_price`, `stock`, `product_image1`, `product_image2`, `product_image3`, `date`) VALUES
(1, 'Royal canin can', 'Royal Canin Hairball Care Thin Slices in Gravy Wet Cat ', '2', '14.50', '30', '6c0e725c790125d72629176caa440e2d.jpg', '6c0e725c790125d72629176caa440e2d.jpg', '6c0e725c790125d72629176caa440e2d.jpg', '2023-11-14 13:03:07'),
(2, 'The one 2 kg', 'Brand Purina ONE Flavor Salmon Age Range ', '1', '40.00', '15', 'cbbcc5dd0cffb7701a0941980f1da6a7.jpg', 'cbbcc5dd0cffb7701a0941980f1da6a7.jpg', 'cbbcc5dd0cffb7701a0941980f1da6a7.jpg', '2023-11-14 13:09:35'),
(3, 'Royal canin 3kg', 'The British Shorthair is known to be the inspiration ', '1', '40.00', '15', '92ds6.jpg', '92ds6.jpg', '92ds6.jpg', '2023-11-14 13:09:41'),
(4, 'Pro Plan STERILISED 2kg', 'Canned food for sterilized and neutered cats', '1', '30.00', '10', '770bdfa622c862bc6195adcd2827ec67.jpg', '770bdfa622c862bc6195adcd2827ec67.jpg', '770bdfa622c862bc6195adcd2827ec67.jpg', '2023-11-14 13:45:45'),
(5, 'Royal Canin Feline Health', 'Royal Canin Adult 7+ Thin Slices in Gravy is formulated', '2', '2.00', '20', '2e7c172402908a940588eed1c716d8b9.jpg', '2e7c172402908a940588eed1c716d8b9.jpg', '2e7c172402908a940588eed1c716d8b9.jpg', '2023-11-14 13:47:39'),
(6, 'Dreamies Cat Treats Tukey', 'Dreamies Cat Tukey 60g X 8 Pack Bulk Deal! ', '3', '2.00', '10', 'bf0b5390d23aaa30f8bbf1aef104cf49.jpg', 'bf0b5390d23aaa30f8bbf1aef104cf49.jpg', 'bf0b5390d23aaa30f8bbf1aef104cf49.jpg', '2023-11-14 13:50:39'),
(7, 'Beds Mattress', 'Pet Bed is ideal for your puppy to sleep on especially', '4', '10.00', '7', '1414c181e9973e70e617fb3ce77b10a4.jpg', '1414c181e9973e70e617fb3ce77b10a4.jpg', '1414c181e9973e70e617fb3ce77b10a4.jpg', '2023-11-14 13:51:57'),
(8, 'Round Cat Bed Fabric', 'Our cat beds are made of very comfortable fabric', '4', '12.00', '5', '3a2f6ba5c85654f63eb87e3d8751af66.jpg', '3a2f6ba5c85654f63eb87e3d8751af66.jpg', '3a2f6ba5c85654f63eb87e3d8751af66.jpg', '2023-11-14 13:54:18'),
(9, 'Pet Kennel with Beige', 'About this item Use bolt and nuts assemble the carrier  ', '6', '15.00', '4', '552d480e2123e45eaafcee33f5edd781.jpg', '552d480e2123e45eaafcee33f5edd781.jpg', '552d480e2123e45eaafcee33f5edd781.jpg', '2023-11-14 13:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(100) COLLATE utf8_bin NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `cat_boarding`
--

CREATE TABLE `cat_boarding` (
  `boarding_id` int(10) NOT NULL,
  `user_id` int(20) NOT NULL,
  `name_cat` varchar(30) COLLATE utf8_bin NOT NULL,
  `start_board` varchar(30) COLLATE utf8_bin NOT NULL,
  `end_board` varchar(30) COLLATE utf8_bin NOT NULL,
  `detail_boarding` varchar(100) COLLATE utf8_bin NOT NULL,
  `date_boarding` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cat_boarding`
--

INSERT INTO `cat_boarding` (`boarding_id`, `user_id`, `name_cat`, `start_board`, `end_board`, `detail_boarding`, `date_boarding`) VALUES
(1, 2, 'snow', '21/11/2023', '23/11/2023', 'shy eat a lot', '2023-11-21 18:26:01'),
(2, 2, 'Jibi', '30/11/2023', '1/12/2023', 'shy , Eat a lot, don\'t like the cold weather.', '2023-11-21 18:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `cat_orders`
--

CREATE TABLE `cat_orders` (
  `order_cat_id` int(11) NOT NULL,
  `id_cat` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `invoice_cat` int(20) NOT NULL,
  `Total_price` double NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cat_orders`
--

INSERT INTO `cat_orders` (`order_cat_id`, `id_cat`, `user_id`, `invoice_cat`, `Total_price`, `order_date`, `status`) VALUES
(1, 11, 4, 1648903200, 1680, '2023-11-22 11:37:24', 'pending'),
(2, 2, 4, 752086882, 27.5, '2023-11-22 13:08:36', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `complete_buy`
--

CREATE TABLE `complete_buy` (
  `order_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `amount_due` double NOT NULL,
  `image_qr` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `complete_buy`
--

INSERT INTO `complete_buy` (`order_id`, `user_id`, `amount_due`, `image_qr`, `date`) VALUES
(1, 2, 42, 'tick.jpg', '2023-11-18 12:36:19'),
(2, 4, 54.5, 'tick.jpg', '2023-11-18 12:37:19'),
(3, 4, 55, 'tick.jpg', '2023-11-18 18:45:03'),
(4, 4, 4, 'tick.jpg', '2023-11-20 15:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `complete_buy_cat`
--

CREATE TABLE `complete_buy_cat` (
  `order_cat_id` int(10) NOT NULL,
  `user_id` int(20) NOT NULL,
  `total_price` double NOT NULL,
  `image_qr` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `complete_buy_cat`
--

INSERT INTO `complete_buy_cat` (`order_cat_id`, `user_id`, `total_price`, `image_qr`, `date`) VALUES
(1, 4, 1680, 'tick.jpg', '2023-11-22 11:37:33'),
(2, 4, 27.5, '1jpg.jpg', '2023-11-22 13:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(30) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `product_id` int(30) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_date`, `order_status`) VALUES
(1, 2, 1566840245, 2, 1, '2023-11-18 12:31:27', 0),
(2, 2, 1566840245, 5, 1, '2023-11-18 12:31:27', 0),
(3, 4, 770638444, 1, 1, '2023-11-18 12:36:56', 0),
(4, 4, 770638444, 2, 1, '2023-11-18 12:36:56', 0),
(5, 4, 1862243421, 3, 1, '2023-11-18 18:44:44', 0),
(6, 4, 1862243421, 9, 1, '2023-11-18 18:44:44', 0),
(7, 4, 532533131, 6, 2, '2023-11-20 15:13:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `preorder_cat`
--

CREATE TABLE `preorder_cat` (
  `order_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `invoice_cat` int(30) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `preorder_cat`
--

INSERT INTO `preorder_cat` (`order_id`, `user_id`, `invoice_cat`, `order_date`) VALUES
(1, 4, 1648903200, '2023-11-22 11:37:24'),
(2, 4, 752086882, '2023-11-22 13:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `time_grooming`
--

CREATE TABLE `time_grooming` (
  `Time_id` int(11) NOT NULL,
  `add_time` varchar(100) COLLATE utf8_bin NOT NULL,
  `status` enum('busy','available') COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `time_grooming`
--

INSERT INTO `time_grooming` (`Time_id`, `add_time`, `status`) VALUES
(1, '09:00-10:00', 'available'),
(2, '11:00-12:00', 'busy'),
(3, '13:00-14:00', 'available'),
(4, '15:00-16:00', 'available'),
(5, '17:00-18:00', 'busy'),
(6, '19:00-20:00', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `type_cat`
--

CREATE TABLE `type_cat` (
  `type_id` int(11) NOT NULL,
  `type_cats` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `type_cat`
--

INSERT INTO `type_cat` (`type_id`, `type_cats`) VALUES
(1, 'scottish'),
(2, 'british'),
(3, 'persian'),
(4, 'ragdoll'),
(5, 'american_curl'),
(6, 'munchkin');

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `product_id` int(11) NOT NULL,
  `type_products` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`product_id`, `type_products`) VALUES
(1, 'Pellet food'),
(2, 'Wet food'),
(3, 'snack'),
(4, 'mattress'),
(5, 'barf'),
(6, 'cage'),
(7, 'toy');

-- --------------------------------------------------------

--
-- Table structure for table `user_grooming`
--

CREATE TABLE `user_grooming` (
  `grooming_id` int(11) NOT NULL,
  `Time_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `name_cat` varchar(30) COLLATE utf8_bin NOT NULL,
  `detail_grooming` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_grooming`
--

INSERT INTO `user_grooming` (`grooming_id`, `Time_id`, `user_id`, `name_cat`, `detail_grooming`, `date`) VALUES
(1, 1, 2, 'MOMO', 'Trimming hair short ', '2023-11-22 11:13:17'),
(2, 4, 2, 'Moji', 'Trimming hair short', '2023-11-21 14:44:13'),
(3, 4, 2, 'Jibi', 'Trimming hair short ', '2023-11-21 14:44:53'),
(4, 3, 2, 'snow', 'shy , scared , don\'t like the cold weather.', '2023-11-21 18:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(10) NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_surname` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password_hash` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_address` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_contact` varchar(20) COLLATE utf8_bin NOT NULL,
  `user_ip` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `user_surname`, `email`, `password_hash`, `user_address`, `user_contact`, `user_ip`) VALUES
(2, 'horn', 'catcat', 'bigcat@hotmail.com', '$2y$10$q2ClVfFgvFXs1tZYOFdlwOe5U6C8.kkqR0ORIIw1skQoLy5oswHJu', 'thail 001', '0876532452', '::1'),
(4, 'meow_horn2', 'catcat', 'smaillcat@hotmail.com', '$2y$10$Iybw3kJ2iReJSUrBztKAgu.MhuO0GwYTyPMZcKCBEkd/SvQHZ5tl2', 'kuhnbon27 48 road hightway 10220', '0804543243', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` double NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `total_products` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(1, 2, 42, 1566840245, 2, '2023-11-18 12:31:27', 'pending'),
(2, 4, 54.5, 770638444, 2, '2023-11-18 12:36:56', 'pending'),
(3, 4, 55, 1862243421, 2, '2023-11-18 18:44:44', 'pending'),
(4, 4, 4, 532533131, 1, '2023-11-20 15:13:58', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cat`
--
ALTER TABLE `add_cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `add_products`
--
ALTER TABLE `add_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `cat_boarding`
--
ALTER TABLE `cat_boarding`
  ADD PRIMARY KEY (`boarding_id`);

--
-- Indexes for table `cat_orders`
--
ALTER TABLE `cat_orders`
  ADD PRIMARY KEY (`order_cat_id`);

--
-- Indexes for table `complete_buy`
--
ALTER TABLE `complete_buy`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `complete_buy_cat`
--
ALTER TABLE `complete_buy_cat`
  ADD PRIMARY KEY (`order_cat_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `preorder_cat`
--
ALTER TABLE `preorder_cat`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `time_grooming`
--
ALTER TABLE `time_grooming`
  ADD PRIMARY KEY (`Time_id`);

--
-- Indexes for table `type_cat`
--
ALTER TABLE `type_cat`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_grooming`
--
ALTER TABLE `user_grooming`
  ADD PRIMARY KEY (`grooming_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_cat`
--
ALTER TABLE `add_cat`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `add_products`
--
ALTER TABLE `add_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cat_boarding`
--
ALTER TABLE `cat_boarding`
  MODIFY `boarding_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cat_orders`
--
ALTER TABLE `cat_orders`
  MODIFY `order_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complete_buy`
--
ALTER TABLE `complete_buy`
  MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complete_buy_cat`
--
ALTER TABLE `complete_buy_cat`
  MODIFY `order_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `preorder_cat`
--
ALTER TABLE `preorder_cat`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `time_grooming`
--
ALTER TABLE `time_grooming`
  MODIFY `Time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `type_cat`
--
ALTER TABLE `type_cat`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_grooming`
--
ALTER TABLE `user_grooming`
  MODIFY `grooming_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
