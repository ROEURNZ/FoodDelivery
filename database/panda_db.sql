-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 06:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panda_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfood`
--

CREATE TABLE `addfood` (
  `add_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` varchar(225) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `cate_img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `description`, `name`, `cate_img`) VALUES
(1, 'dinnerfood', 'Dinner', 'IMG-65ffece064e7b3.24838755.jpg'),
(2, 'For breakfast', 'Breakfast', 'IMG-65ffee10d38bf6.04519532.jpg'),
(3, 'This is the coffee people to like to drink coffee', 'Coffee', 'IMG-65ffee6856bdf0.01694635.jpg'),
(4, 'Great food type you wish to have.', 'Khmer Curry', 'IMG-65ffefd87543c1.28815199.jpeg'),
(5, 'Potatoes, bread, rice, pasta, and cereals.', 'Starchy food', 'IMG-65fff0c8af7629.30100471.png'),
(6, 'For people want to diet', 'Salad', 'IMG-65fff0eac44b66.31455060.png'),
(7, 'Have this in our restaurant ', 'Pizza', 'IMG-65fff10c3968d5.30218642.png'),
(8, 'The best sea food in Camport.', 'Sea food', 'IMG-65fff18d4cf0d7.01219013.jpg'),
(9, 'All kinds of soup you need is here.', 'Khmer Soup', 'IMG-65fff212d453d4.64582944.png'),
(10, 'Many drink in my restaurant', 'Soft Drink', 'IMG-65fff2feed7b61.96707362.jpg'),
(11, 'For you', 'Hamburger', 'IMG-65fff49164ac73.01378557.jpg'),
(13, '', 'India', 'IMG-6603066ea0f682.28074602.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `contents` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `date`, `user_id`, `restaurant_id`, `contents`) VALUES
(1, '2024-03-26 11:47:52', 6, 8, 'I like food'),
(2, '2024-03-27 12:02:28', 6, 5, 'I like this restaurant'),
(3, '2024-03-27 12:38:17', 6, 5, 'the best food');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `favorite_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`favorite_id`, `user_id`, `restaurant_id`) VALUES
(1, 9, 5),
(2, 6, 1),
(3, 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `Food_id` int(10) UNSIGNED NOT NULL,
  `Foodname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `food_img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`Food_id`, `Foodname`, `description`, `price`, `category_id`, `food_img`) VALUES
(1, 'Mango Coffee', 'New taste ', '2', 3, 'IMG-65ffee99cd9639.19350549.jpg'),
(2, 'Banh Sung', 'Have this food for you ', '1', 2, 'IMG-65ffef220bf987.92467222.jpg'),
(3, 'Pizza Cheese', 'Have this food in my restaurant', '3', 7, 'popular3.png'),
(4, 'Pizza', 'New ', '4', 7, 'popular3.png'),
(5, 'Pepci', 'Drink in my restaurant', '1', 10, 'popular3.png'),
(6, 'Chicken Food', 'the best food', '5', 5, 'IMG-65fff34a614d13.48357251.jpeg'),
(7, 'Pizza With Salad', 'For people want to taste new food', '5', 7, 'IMG-65fff39c8df1d5.68999453.jpg'),
(8, 'Air Fryer Steak', 'The air fryer truly is a lifesaver when it comes to easy-cleanup recipes, including steak!', '6', 5, 'IMG-65fff3ddc6e366.21242004.jpeg'),
(9, 'Fried Chicken', 'New food', '3', 1, 'IMG-65fff4f7889a92.39230643.jpg'),
(10, 'Samlor korkor', ' samlor korkor has a better claim to being the true national dish of Cambodia.', '8', 4, 'IMG-65fff559854044.01947697.png'),
(11, 'Somlor Proher', 'Khmer cuisine has a long and diverse history. With a variety of flavours and dishes.', '6', 4, 'IMG-65fff6bb1c8892.81021734.png'),
(12, 'Prahok Ktis', 'Prahok Ktis is a dip made of fermented fish paste (pharok), minced pork, and coconut cream. ', '5', 4, 'popular3.png'),
(14, 'Somlor kako', '', '3', 13, 'IMG-660306a84be8b9.38573391.png');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderDetail_id` int(11) UNSIGNED NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `action` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `useraddress` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderDetail_id`, `foodname`, `user_id`, `quantity`, `restaurant_id`, `total_price`, `action`, `time`, `useraddress`) VALUES
(1, 'Mango Coffee', 6, 2, 8, '4', 5, '2024-03-24 04:45:40', 'ផ្សារ រំលង, ផ្លូវជាតិលេខ ៦'),
(2, 'Pizza Cheese', 6, 2, 5, '6', 5, '2024-03-24 08:40:36', 'ផ្សារ រំលង, ផ្លូវជាតិលេខ ៦'),
(3, 'Pizza', 6, 2, 5, '8', 5, '2024-03-24 08:40:36', 'ផ្សារ រំលង, ផ្លូវជាតិលេខ ៦'),
(4, 'Pizza With Salad', 6, 2, 5, '10', 5, '2024-03-24 08:40:36', 'ផ្សារ រំលង, ផ្លូវជាតិលេខ ៦'),
(5, 'Banh Sung', 6, 1, 8, '1', 0, '2024-03-26 11:48:50', 'Passerelles numériques Cambodia'),
(6, 'Pizza Cheese', 6, 1, 5, '3', 5, '2024-03-27 12:00:36', 'ផ្សារ រំលង, ផ្លូវជាតិលេខ ៦'),
(7, 'Pizza', 6, 1, 5, '4', 5, '2024-03-27 12:00:36', 'ផ្សារ រំលង, ផ្លូវជាតិលេខ ៦'),
(8, 'Pizza Cheese', 6, 1, 5, '3', 5, '2024-03-27 12:39:03', 'Passerelles numériques Cambodia'),
(9, 'Pizza', 6, 1, 5, '4', 5, '2024-03-27 12:39:03', 'Passerelles numériques Cambodia');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `view_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `content` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`view_id`, `date`, `user_id`, `restaurant_id`, `content`) VALUES
(1, '2024-03-24 04:45:40', 6, 8, 'Out of stock in my restaurant'),
(2, '2024-03-24 04:45:40', 6, 8, 'Do you want another food?');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(10) UNSIGNED NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `address` varchar(225) NOT NULL,
  `time_open` varchar(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_close` varchar(11) DEFAULT NULL,
  `res_img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `restaurant_name`, `address`, `time_open`, `description`, `user_id`, `time_close`, `res_img`) VALUES
(1, 'RTK BEEFE', 'Phnom Penh', '08:30', 'No', 2, '19:00', 'trending1.png'),
(2, 'Lk', 'Borey sorla 371, Sensok, PP', '09:00', 'Sell food 24hr', 3, '22:54', 'IMG-65f797638e3dd8.55237124.jpg'),
(3, 'IT FOOD ', 'Pnc, Tropang Chhuk, Obek kaorm, Phnom Penh', '16:00', 'Please support my new Restuarant. Thank you😘', 4, '23:00', 'trending1.png'),
(5, 'Tank Kok Restaurant', 'Kompong Thom, Tank kok', '08:30', 'The restaurant has a lot of food.', 7, '17:30', 'IMG-660230305a6a40.00718946.jpg'),
(6, 'ZA ZA - KPC', 'KompongChhnang', '07:00', 'Nice', 12, '22:00', 'IMG-65f7986c8ff899.84886960.jpg'),
(7, 'SANA SHOP', 'phnom penh', '07:30', 'Please support my restaurant', 11, '22:30', 'IMG-65f79824817bc9.68642511.png'),
(8, 'PM', 'Borey sorla 371, Sensok, PP', '07:00', 'Sell food for 24hr', 13, '23:00', 'IMG-65fff569ef4c80.28574478.jpg'),
(9, 'SANA RESTAURANT', 'phnom penh', '05:00', 'Quick service and great food for you.', 14, '19:00', 'IMG-65fff5eec21f03.85703986.png'),
(10, 'PNC Cateen', 'borey sorla, Phnom Penh', '06:30', '', 19, '18:35', '');

-- --------------------------------------------------------

--
-- Table structure for table `res_categories`
--

CREATE TABLE `res_categories` (
  `res_categoryID` int(10) UNSIGNED NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_categories`
--

INSERT INTO `res_categories` (`res_categoryID`, `restaurant_id`, `category_id`) VALUES
(1, 6, 1),
(2, 8, 2),
(3, 8, 3),
(4, 9, 4),
(5, 9, 5),
(6, 5, 6),
(7, 5, 7),
(8, 9, 8),
(9, 9, 9),
(10, 5, 10),
(11, 6, 11),
(12, 5, 12),
(13, 10, 13);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_type`) VALUES
(1, 'Customer'),
(2, 'Owner'),
(3, 'Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `phoneNumber` varchar(225) DEFAULT NULL,
  `user_img` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `gender`, `role_id`, `phoneNumber`, `user_img`) VALUES
(1, 'Voeun Chanthou', 'voeunchanthou74@gmail.com', '$2y$10$gAW00z/rsEy7qKGSLNZ5DeUhJCv3i1tCFaQQMZKmJHYAwJ.MtHYi2', 'M', 4, '070898032', 'IMG-65ede9fd0e1407.79484555.jpg'),
(2, 'ROEURN', 'roeurnkaki@gmail.com', '$2y$10$njj3WOjG3bgI4BcYHiIS/e8G15rpXLTFo5iLKPlyCq88yJ9bxpnO2', 'M', 2, '0719163052', 'IMG-65d9f4f69e5411.43011126.jpg'),
(3, 'Pheaktra', 'pheaktra.mao@student.passerellesnumeriques.org', '$2y$10$mchxOvu7/MGIEJMkPCf3eeG465B5eKh0nF4fzqG1k1ZzsICXOqqjm', 'F', 2, '0886461253', 'IMG-65d9f4f69e5411.43011126.jpg'),
(6, 'roth', 'roth@gmail.com', '$2y$10$ODZkL/OVMrG0AfHrDKPiNuh/LrncBK8p5.f1rfDnuuJ32ac5WoM3e', 'M', 1, '0747939554', 'IMG-6603075cad3b85.48422010.jpg'),
(7, 'sothea', 'sothea@gmail.com', '$2y$10$Gpx1v0Z3hRk/Ssc23ViCEO7nFUz4EjLMhjsvPk5omSV/SWilfwLsS', 'M', 2, '089903043', 'IMG-65d9f4f69e5411.43011126.jpg'),
(9, 'Rady', 'rady@gmail.com', '$2y$10$NNNfJkfONa8g5icAIJia9.4Kqn9HKz9eZL21UAI2lqi/v4/9EWB2q', 'M', 1, '09876545', 'IMG-65edb284915d97.99013425.jpg'),
(10, 'Bunthoeun', 'bunthoeun@gmail.com', '$2y$10$ZIsAwpeQI/1J5H79jMq8buJUim.Ch65kAtLWCOP3GwQPq.kI8KjtS', 'M', 3, '09476874', 'IMG-65d9f4f69e5411.43011126.jpg'),
(11, 'Chuon Veasna', 'chuonveasna500@gmail.com', '$2y$10$QjNR3CotAmtjptnUl/r8XOuauopRcD6aMR3Bty5Y2cDTW3ml4s5VK', 'M', 2, '0718911019', 'IMG-65d9f4f69e5411.43011126.jpg'),
(12, 'ZA ZA', 'sreynuch.thoeun@student.passerellesnumeriques.org', '$2y$10$bfIUBsKxpHw/OWUh6xnb6ek4VK3ArCkBp9OGuCYsJChqPVCYIgZx.', 'F', 2, '0319612352', 'IMG-65d9f4f69e5411.43011126.jpg'),
(13, 'Pheaktra', 'sokpheaktra140@gmail.com', '$2y$10$7qGcK./MXqYM498v2JsiZ.8lD5Ofr0Hvo9CImAkl4rbpWpfhcJ5ay', 'F', 2, '093721594', 'IMG-65d9f4f69e5411.43011126.jpg'),
(14, 'Chuon Veasna', 'veasna.chuon@student.passerellesnumeriques.org', '$2y$10$Vldmm.9ganzQyTIV1Q6QyOjQi7f2XTj7F95RyiN9HUS3q8Gu38Xm2', 'M', 2, '1234567890', 'IMG-65d9f4f69e5411.43011126.jpg'),
(19, 'Chanthou', 'chanthou.voeun@student.passerellesnumeriques.org', '$2y$10$Bj7uJ.FAFBiq/RRItSHeKOwVN3KDph2mqD6OxtFW/QmwNgns8gclq', 'M', 2, '09756654', 'IMG-65d9f4f69e5411.43011126.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_user_id_index` (`user_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`favorite_id`),
  ADD KEY `favorites_user_id_index` (`user_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`Food_id`),
  ADD KEY `foods_category_id_index` (`category_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderDetail_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`view_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `res_categories`
--
ALTER TABLE `res_categories`
  ADD PRIMARY KEY (`res_categoryID`),
  ADD KEY `res_categories_restaurant_id_index` (`restaurant_id`),
  ADD KEY `res_categories_category_id_index` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `favorite_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `Food_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderDetail_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `view_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `res_categories`
--
ALTER TABLE `res_categories`
  MODIFY `res_categoryID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
