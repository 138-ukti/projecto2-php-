-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 02:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_o2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `b_title` varchar(100) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `email`, `b_title`, `content`, `time`) VALUES
(1, 'Rishad', 'wdrishad@gmail.com', 'First Blog', 'Hello World , Rishad', '0000-00-00 00:00:00'),
(3, 'Rishad', 'wdrishad@gmail.com', 'plant', 'Hello', '2022-09-19 11:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `price` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `specialized` varchar(100) NOT NULL,
  `whtsapp_no` varchar(20) NOT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`id`, `name`, `designation`, `specialized`, `whtsapp_no`, `email`) VALUES
(1, 'SHARIA PARVIN', 'vhghjgjjk', 'hjvhjhjjhhj', '2565656', 'wdrishad@gmail.com'),
(2, 'Five Star', 'sfdds', 'dsafdas', '.20202', 'm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  `deu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `total`, `given`, `deu`) VALUES
(1, 1600, 4941, -3341);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `e_time` datetime NOT NULL,
  `location` varchar(50) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `details`, `e_time`, `location`, `img`) VALUES
(1, 'SHARIA PARVIN', 'Hello all', '2022-09-08 13:25:00', 'Dhaka', '2.jpg'),
(2, 'vjhj', 'nchgdhfv', '2022-09-22 14:08:00', 'hggj', ''),
(3, 'SHARIA PARVIN', 'xfdfg', '2022-09-24 15:36:00', 'hggj', ''),
(4, 'Coxs bazar', 'my', '2022-09-12 15:39:00', 'dhaka', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `upload_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `id`, `email`, `feedback`, `upload_time`) VALUES
('Mosnur Ahmed', 3, 'm@gmail.com', 'vv', '2022-08-31 14:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `cus_name` varchar(100) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `cus_pn` varchar(100) NOT NULL,
  `cus_add` varchar(200) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `total_cost` float NOT NULL,
  `d_status` varchar(200) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`cus_name`, `cus_email`, `cus_pn`, `cus_add`, `pro_name`, `total_cost`, `d_status`, `id`) VALUES
('Mosnur Ahmed', 'm@gmail.com', '01980793945', 'UIU', 'E - Shopier\n', 1000, 'Delivered', 1),
('Mosnur Ahmed', 'm@gmail.com', '01980793945', 'UIU', 'Sun Flower\nSun Flower\n', 10000, 'Delivered', 2),
('Mosnur Ahmed', 'm@gmail.com', '01980793945', 'UIU', 'E - Shopier\nE - Shopier\n', 2000, 'Delivered', 3),
('Mosnur Ahmed', 'm@gmail.com', '01980793945', 'UIU', 'E - Shopier\nE - Shopier\nE - Shopier\n', 3000, 'Pending', 4);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` longblob NOT NULL,
  `price` double NOT NULL,
  `description` varchar(500) NOT NULL,
  `stock` varchar(20) NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `img`, `price`, `description`, `stock`) VALUES
(2, 'SHARIA PARVIN', '', 30, 'xdfdfd ', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` longblob NOT NULL,
  `price` float NOT NULL,
  `type` varchar(20) NOT NULL,
  `stock` varchar(20) NOT NULL DEFAULT 'Available',
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `price`, `type`, `stock`, `details`) VALUES
(1, 'E - Shopier', 0x41737472615f69636f6e2e77656270, 1000, 'Flower Plants', 'Available', 'nothing to say  '),
(2, 'Sun Flower', 0x666164655f76616c6f72616e745f69636f6e5f323239342e77656270, 5000, 'Flower Plants', 'Available', 'I need it desperately. '),
(3, 'Five Star', 0x72657374617572616e742e6a7067, 4500, 'Flower Plants', 'Available', 'ghvvhvh'),
(4, 'Coxs bazar', 0x53637265656e73686f742028323136292e706e67, 20, 'Fruit Plants', 'Available', 'dcfd'),
(5, 'SHARIA PARVIN', 0x646f776e6c6f61642e6a7067, 88, 'Vegetable Seeds', 'Available', 'm,jkjk'),
(6, 'sunflower', 0x646f776e6c6f61642e6a7067, 452, 'Flower Plants', 'Available', 'sunflower');

-- --------------------------------------------------------

--
-- Table structure for table `recycle`
--

CREATE TABLE `recycle` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `r_product`
--

CREATE TABLE `r_product` (
  `id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_product`
--

INSERT INTO `r_product` (`id`, `u_name`, `u_email`, `p_name`, `description`, `time`) VALUES
(3, 'Mosnur Ahmed', 'm@gmail.com', 'zccx', 'zxzxc', '2022-08-31 12:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `p_number` char(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  `premium` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `address`, `p_number`, `password`, `role`, `premium`, `gender`) VALUES
(1, 'wdrishad@gmail.com', 'Rishad', 'Baridhara', '1705978622', '1234', 'admin', 'no', 'male'),
(2, 'm@gmail.com', 'Mosnur Ahmed', 'UIU', '01980793945', '123456', 'user', 'premium', 'Male'),
(3, 'sharia@gmail.com', 'Sharia Parvin', 'dhaka', '01705555656', '12345', 'admin', 'not premium', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recycle`
--
ALTER TABLE `recycle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_product`
--
ALTER TABLE `r_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `consult`
--
ALTER TABLE `consult`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recycle`
--
ALTER TABLE `recycle`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `r_product`
--
ALTER TABLE `r_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
