-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 11:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `simp_admin`
--

CREATE TABLE `simp_admin` (
  `sipmAdminFirstName` varchar(255) NOT NULL,
  `sipmAdminLastName` varchar(250) NOT NULL,
  `sipmAdminEmail` varchar(300) NOT NULL,
  `sipmAdminPassword` varchar(500) NOT NULL,
  `sipmAdminProImg` varchar(450) NOT NULL,
  `dateReg` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `simp_admin`
--

INSERT INTO `simp_admin` (`sipmAdminFirstName`, `sipmAdminLastName`, `sipmAdminEmail`, `sipmAdminPassword`, `sipmAdminProImg`, `dateReg`, `id`) VALUES
('Dudu', 'Yemi', 'dudu@gmail.com', '$2y$10$KMjw4YQm.yoGNHC.M18seepFMssF8dII4hEpw9PRvayHqp/dSKrF.', '', '2022-09-23 16:38:24', 1),
('Admin', 'Hb', 'sharkzy@gmail.com', '$2y$10$LExrqV2Jcw4zULFKSfh/cO0tSHiedOGS5FA5qE2OwefKzuZzG/0x.', '', '2022-09-25 14:30:30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sipmusers`
--

CREATE TABLE `sipmusers` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(250) NOT NULL,
  `simp_UserName` varchar(255) NOT NULL,
  `simpUser_Email` varchar(250) NOT NULL,
  `simpUser_Password` varchar(543) NOT NULL,
  `sipmUser_FirstName` varchar(500) NOT NULL,
  `sipmUser_SecondName` varchar(450) NOT NULL,
  `sipmUser_CommunityName` varchar(100) NOT NULL,
  `sipmUser_HidePro` varchar(56) NOT NULL,
  `simpUser_ZipCode` varchar(100) NOT NULL,
  `sipmUser_ProfileImg` varchar(350) NOT NULL,
  `sipmUser_Verify` tinyint(4) NOT NULL DEFAULT 0,
  `simpUser_AccDelete` tinyint(4) NOT NULL DEFAULT 0,
  `simpUserReg_Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sipmusers`
--

INSERT INTO `sipmusers` (`id`, `unique_id`, `simp_UserName`, `simpUser_Email`, `simpUser_Password`, `sipmUser_FirstName`, `sipmUser_SecondName`, `sipmUser_CommunityName`, `sipmUser_HidePro`, `simpUser_ZipCode`, `sipmUser_ProfileImg`, `sipmUser_Verify`, `simpUser_AccDelete`, `simpUserReg_Date`) VALUES
(1, '7352_1662468022', 'Dudu', 'dudu@gmail.com', '$2y$10$hct5XXBoOgJXc9ujSb4y8.nXgrp84eiK08uywHDikycSmQ0bzVosO', 'Ganiu', 'Dudu', 'Dalemo Alakuko', '', '100254', '../images/uploadImg/1663816045_IMG_1014.JPG', 1, 0, '2022-09-06 12:40:23'),
(2, '288_1662582710', 'jibewamhi', 'jibewa@gmail.com', '$2y$10$yoryqbqr2yJ5gFDQBUh/quE7s.2YlLU9rETRg6GX1KlNEvaVmuNxy', 'Adeleye', 'Kudroh', 'Fagba', '', '222222', '../images/uploadImg/1666023474_64f62190-2162-406e-8d77-948a7a2c4b0f.jpg', 1, 0, '2022-09-07 20:31:50'),
(3, '824_1662926803', 'Admin@giantpro', 'AdminGiantpro@gmail.com', '$2y$10$Uz2I1.e0Hbro6E7bjhey9uCMA3V8T7smieMVt/ngmhHXUGuFmU/bK', 'Admin', 'Giantpro', 'Banana Island', '', '101234', '../images/uploadImg/1663816220_IMG_1163.PNG', 1, 0, '2022-09-11 20:06:43'),
(5, '176_1664295803', 'HighQ', 'high@gmail.com', '$2y$10$vt7tHVpKmm/89VhsHqHC1OD/jY1wk.PIuC8CSZmrLlA44LKu7Gq2O', 'HighQ', 'Innovation', 'Agbado', 'hideprofile', '123001', '../images/uploadImg/1664295882_IMG_1019.HEIC', 1, 0, '2022-09-27 16:23:23'),
(6, '6548_1667857342', 'Kanyinsola', 'Kanyin@gmail.com', '$2y$10$DWB46Iy1ZHGfc4Wgwm4MYOTqrMVYtx4CsM0tGzisvrymLkVxUiDNy', 'Adeyemi', 'Kanyinsola', 'cresent Avenue', '', '119373', '../images/uploadImg/1667857776_f66d0fe5-c833-45a8-ba3c-043e408c6074.jpg', 1, 0, '2022-11-07 21:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `sipmusersads`
--

CREATE TABLE `sipmusersads` (
  `id` int(11) NOT NULL,
  `simp_Cid` int(11) NOT NULL,
  `sipmuser_PostId` varchar(1000) NOT NULL,
  `simpUser_AdsTitle` varchar(250) NOT NULL,
  `sipmUser_AdsType` varchar(100) NOT NULL,
  `sipmUser_AdsDescripion` text NOT NULL,
  `sipmUser_AdsCategory` varchar(450) NOT NULL,
  `sipmUser_AdsPrice` varchar(1000) NOT NULL,
  `sipmUser_AdsNegotiation` varchar(45) NOT NULL,
  `sipmUser_AdsContactName` varchar(250) NOT NULL,
  `sipmUser_AdsContactNumber` varchar(240) NOT NULL,
  `sipmUser_AdsContactEmail` varchar(254) NOT NULL,
  `sipmUser_AdsContactAddress` varchar(345) NOT NULL,
  `sipmUser_AdsVerified` tinyint(4) NOT NULL DEFAULT 0,
  `simpUser_FeaturedAds` tinyint(4) NOT NULL DEFAULT 0,
  `sipmUser_AdsDelete` tinyint(4) NOT NULL DEFAULT 0,
  `simpUser_AdsDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sipmusersads`
--

INSERT INTO `sipmusersads` (`id`, `simp_Cid`, `sipmuser_PostId`, `simpUser_AdsTitle`, `sipmUser_AdsType`, `sipmUser_AdsDescripion`, `sipmUser_AdsCategory`, `sipmUser_AdsPrice`, `sipmUser_AdsNegotiation`, `sipmUser_AdsContactName`, `sipmUser_AdsContactNumber`, `sipmUser_AdsContactEmail`, `sipmUser_AdsContactAddress`, `sipmUser_AdsVerified`, `simpUser_FeaturedAds`, `sipmUser_AdsDelete`, `simpUser_AdsDate`) VALUES
(1, 3, '9738_1667853528?', 'Tesla S Gold', 'personal', 'The Tesla Model S is a battery-powered liftback car serving as the flagship model of Tesla, Inc. The Model S features a dual-motor, all-wheel drive layout, although earlier versions of the Model S featured a rear-motor and rear-wheel drive layout. Tesla, Inc', 'Vehicles', '$600,000.00', 'Negotiable', 'Giantpro', '+181573537', 'Giantpro@gmail.com', '124 Terrace Plot , michigan', 2, 0, 0, '2022-11-07 20:38:48'),
(2, 3, '860_1667853751?', 'Tesla Model 3', 'personal', 'The Tesla Model 3 is an electric four-door sedan developed by Tesla. The Model 3 Standard Range Plus version delivers an EPA-rated all-electric range of 250 miles (402 km) and the Long Range versions deliver 322 miles (518 km).', 'Vehicles', '$900,000.00', 'Not Negotiable', 'Giantpro', '+181573537', 'Giantpro@gmail.com', '124 Terrace Plot , michigan', 1, 0, 0, '2022-11-07 20:42:31'),
(3, 2, '9110_1667854396?', 'Couche Set', 'business', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorem architecto laboriosam rerum sit sapiente? Amet,\r\ntenetur. Ipsa placeat nostrum, minus quos iure blanditiis ut eos aliquid illo tenetur mollitia.', 'Furnitures', '$20000', 'Not Negotiable', 'Adeleye Jibewa', '8185401275', 'adeleye@gmail.com', '2731 SW 21st Ter', 1, 0, 0, '2022-11-07 20:53:16'),
(4, 3, '6342_1667854658?', 'GT-R Model 3#', 'personal', 'The Nissan GT-R (Japanese: 日産・GT-R, Nissan GT-R), is a high-performance sports car and grand tourer produced by Nissan, unveiled in 2007.[3][4][5] It is the successor to the Skyline GT-R, a high performance variant of the Nissan Skyline. Although this car was the sixth-generation model to bear the GT-R name, the model is no longer part of the Nissan Skyline model line up since that name is now reserved for Nissan&#039;s luxury-sport vehicles', 'Vehicles', '$900,000.00', 'Not Negotiable', 'Giantpro', '+181573537', 'Giantpro@gmail.com', '124 Terrace Plot , michigan', 1, 0, 0, '2022-11-07 20:57:38'),
(5, 2, '1461_1667855017?', 'PRIME STEAK', 'business', 'A stunning combination of contemporary American fare with Italian influences. Delight in prime steaks, homemade pastas, fresh salads, and exquisite seafood. Excellent Reviews. Food, Drinks and Ambiance', 'Restaurant', '$20,000,000.00', 'Negotiable', 'Adeleye Jibewa', '8185401275', 'adeleye@gmail.com', '2731 SW 21st Ter', 1, 0, 0, '2022-11-07 21:03:37'),
(6, 5, '8208_1667856000?', 'React Dev', 'personal', 'React developer with Strong proficiency in JavaScript, object model, DOM manipulation and event handlers, data structures, algorithms, JSX, and Babel. Complete understanding of ReactJS and its main fundamentals like JSX, Virtual DOM, component lifecycle, etc', 'Job/Employments', '$750', 'Not Negotiable', 'HighQ Innovation', '877626426', 'High@gmail.com', '135, Milly Avn H-Q.', 1, 0, 0, '2022-11-07 21:20:00'),
(7, 1, '2578_1667856307?', 'Apple macbook pro', 'personal', 'Apple MacBook Pro 13-inch 2020 is a macOS laptop with a 13.30-inch display that has a resolution of 1600x2560 pixels. It is powered by a Core i5 processor and it comes with 8GB of RAM. The Apple MacBook Pro 13-inch 2020 packs 256GB of SSD storage. Graphics are powered by Intel Integrated Iris Plus Graphics 645', 'Electronic/Gadget', '$2,000', 'Negotiable', 'Duduyemi', '8185401275', 'dudu@gmail.com', '2731 SW 21st Ter', 1, 0, 0, '2022-11-07 21:25:07'),
(8, 1, '6259_1667856649?', 'Iphone 14 pro max', 'personal', 'The Apple iPhone 14 Pro and Pro Max introduce a host of new features unique to the Pro series, including Apple&#039;s glorious Dynamic Island and a 48-megapixel', 'Electronic/Gadget', '$750', 'Not Negotiable', 'Duduyemi', '8185401275', 'dudu@gmail.com', '2731 SW 21st Ter', 1, 0, 0, '2022-11-07 21:30:49'),
(9, 6, '1435_1667857658?', 'Duplex House Plans Modern  Family Home', 'business', 'Duplex house plans | Modern 2 story home 269.8 m2 | 2778 sq. feet | Townhouse plans | 2 Family House Plans Duplex house plans no: 269DU Skillion ---------------------------------------------------- BUY THIS PLAN - 2 Storey house design FULL CONCEPT HOUSE PLANS. Play it safe with our low cost plans with copyright release. - 6 Bedroom + 2 Study Nooks - 4 Bathrooms - 2 Living Areas - Balcony - Kitchen with pantry - Popular two family house plan ---------------------------- Total Area : 269.8…', 'Real Estate', '$900,000.00', 'Negotiable', 'Agent Kanyinsola', '+181573537', 'Kanyin@gmail.com', '124 Terrace Plot , michigan', 1, 0, 0, '2022-11-07 21:47:38'),
(10, 1, '4542_1667858091?', 'NikeSkipo', 'personal', 'Nike is a leading manufacturer of sports-related products, including shoes, apparel and equipment. Many people from all over the world are familiar with the brand, as it has a global presence that earns more than $18 billion in revenue', 'Shopping', '$750', 'Not Negotiable', 'Duduyemi', '8185401275', 'dudu@gmail.com', '2731 SW 21st Ter', 1, 0, 0, '2022-11-07 21:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `sipmusersads_img`
--

CREATE TABLE `sipmusersads_img` (
  `id` int(11) NOT NULL,
  `simp_Cid` int(11) NOT NULL,
  `simpUser_ImgId` varchar(1000) NOT NULL,
  `simpUser_AdsImg` varchar(345) NOT NULL,
  `simpUser_ImgName` varchar(250) NOT NULL,
  `sipmUser_AdsImgVerified` tinyint(4) NOT NULL DEFAULT 0,
  `sipmUser_AdsImgDelete` tinyint(4) NOT NULL DEFAULT 0,
  `sipmUser_AdsImgDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sipmusersads_img`
--

INSERT INTO `sipmusersads_img` (`id`, `simp_Cid`, `simpUser_ImgId`, `simpUser_AdsImg`, `simpUser_ImgName`, `sipmUser_AdsImgVerified`, `sipmUser_AdsImgDelete`, `sipmUser_AdsImgDate`) VALUES
(1, 3, '9738_1667853528?', '1667853528_39241_tes gold.jpg', 'Tesla S Gold', 2, 0, '2022-11-07 20:38:48'),
(2, 3, '860_1667853751?', '1667853751_32082_tesla s.jpg', 'Tesla Model 3', 1, 0, '2022-11-07 20:42:31'),
(3, 2, '9110_1667854396?', '1667854396_57926_product-details-1.jpg', 'Couche Set', 1, 0, '2022-11-07 20:53:16'),
(4, 3, '6342_1667854658?', '1667854658_60133_gtrs.jpg', 'GT-R Model 3#', 1, 0, '2022-11-07 20:57:38'),
(5, 2, '1461_1667855017?', '1667855017_16321_rest.jpg', 'PRIME STEAK', 1, 0, '2022-11-07 21:03:37'),
(6, 5, '8208_1667856000?', '1667856001_84491_react.jpg', 'React Dev', 1, 0, '2022-11-07 21:20:01'),
(7, 1, '2578_1667856307?', '1667856308_92821_mac.jpg', 'Apple macbook pro', 1, 0, '2022-11-07 21:25:08'),
(8, 1, '6259_1667856649?', '1667856649_42340_14 pro max.jpg', 'Iphone 14 pro max', 1, 0, '2022-11-07 21:30:49'),
(9, 6, '1435_1667857658?', '1667857658_35112_dup.jpg', 'Duplex House Plans Modern  Family Home', 1, 0, '2022-11-07 21:47:38'),
(10, 1, '4542_1667858091?', '1667858091_73598_nikebla.jpg', 'NikeSkipo', 1, 0, '2022-11-07 21:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `sipm_message`
--

CREATE TABLE `sipm_message` (
  `id` int(11) NOT NULL,
  `incomingMessId` varchar(150) NOT NULL,
  `outGoingMessId` varchar(150) NOT NULL,
  `sipmUser_Mess` text NOT NULL,
  `MessDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `MessStatus` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sipm_message`
--

INSERT INTO `sipm_message` (`id`, `incomingMessId`, `outGoingMessId`, `sipmUser_Mess`, `MessDate`, `MessStatus`) VALUES
(1, '288_1662582710', '7352_1662468022', 'Hello babe', '2022-10-27 20:47:57', 0),
(2, '288_1662582710', '7352_1662468022', 'hello babe', '2022-10-27 21:57:05', 0),
(3, '288_1662582710', '7352_1662468022', 'hey dear', '2022-10-27 22:01:38', 0),
(4, '288_1662582710', '7352_1662468022', 'hello', '2022-10-27 22:03:48', 0),
(5, '288_1662582710', '7352_1662468022', 'hello', '2022-10-27 22:04:23', 0),
(6, '288_1662582710', '7352_1662468022', 'Hello dear', '2022-10-28 10:22:46', 0),
(7, '288_1662582710', '288_1662582710', 'hello mah', '2022-10-30 17:49:12', 0),
(8, '288_1662582710', '824_1662926803', 'hey sweetheart', '2022-10-30 18:59:50', 0),
(9, '288_1662582710', '824_1662926803', 'hey dear', '2022-10-31 19:29:30', 0),
(10, '288_1662582710', '824_1662926803', '', '2022-10-31 19:29:31', 0),
(11, '288_1662582710', '824_1662926803', 'heloo dearasjksdkl', '2022-11-01 14:11:01', 0),
(12, '288_1662582710', '824_1662926803', 'hello dear', '2022-11-02 12:23:26', 0),
(13, '288_1662582710', '824_1662926803', 'hey', '2022-11-02 12:33:06', 0),
(14, '288_1662582710', '824_1662926803', 'hedkojijyuyjgyj', '2022-11-02 12:49:32', 0),
(15, '288_1662582710', '824_1662926803', 'hey babe', '2022-11-02 12:53:33', 0),
(16, '288_1662582710', '824_1662926803', 'hello', '2022-11-02 12:55:01', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `simp_admin`
--
ALTER TABLE `simp_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipmusers`
--
ALTER TABLE `sipmusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipmusersads`
--
ALTER TABLE `sipmusersads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sipmuser_PostId` (`sipmuser_PostId`(768)),
  ADD KEY `simp_Cid` (`simp_Cid`);

--
-- Indexes for table `sipmusersads_img`
--
ALTER TABLE `sipmusersads_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `simp_Cid` (`simp_Cid`),
  ADD KEY `simpUser_ImgId` (`simpUser_ImgId`(768));

--
-- Indexes for table `sipm_message`
--
ALTER TABLE `sipm_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `simp_admin`
--
ALTER TABLE `simp_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sipmusers`
--
ALTER TABLE `sipmusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sipmusersads`
--
ALTER TABLE `sipmusersads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sipmusersads_img`
--
ALTER TABLE `sipmusersads_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sipm_message`
--
ALTER TABLE `sipm_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
