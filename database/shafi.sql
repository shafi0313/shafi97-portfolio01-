-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 11:27 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shafi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `name_about` varchar(100) NOT NULL,
  `profile_about` varchar(100) NOT NULL,
  `email_about` varchar(50) NOT NULL,
  `phone_about` varchar(25) NOT NULL,
  `text_about` varchar(500) NOT NULL,
  `image_about` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `name_about`, `profile_about`, `email_about`, `phone_about`, `text_about`, `image_about`) VALUES
(1, '', '', '', '', 'I have rice experience over 4+. years working with Front end design, jquery, bootstrap, html5, css3 in building website.I believe in quality and professionalism.my Goal is to delivery perfectly result to my clients always. very fast work , wonderfull result.', 'testimonial-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id_address` int(10) NOT NULL,
  `text_address` varchar(100) NOT NULL,
  `font_icon_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id_address`, `text_address`, `font_icon_address`) VALUES
(1, 'Mirpur-2, Dhaka.', 'fas fa-map-marker-alt'),
(2, '+8801725-848515', 'fas fa-phone'),
(3, 'msh.shafiul@gmail.com', 'fas fa-envelope');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id_counter` int(11) NOT NULL,
  `icon_counter` varchar(50) NOT NULL,
  `count_counter` int(50) NOT NULL,
  `title_counter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id_counter`, `icon_counter`, `count_counter`, `title_counter`) VALUES
(21, 'ion-checkmark-round', 50, 'WORKS COMPLETED'),
(22, 'ion-ios-calendar-outline', 4, 'YEARS OF EXPERIENCE'),
(23, 'ion-ios-people', 30, 'TOTAL CLIENTS');

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `id_intro` int(11) NOT NULL,
  `name_intro` varchar(80) NOT NULL,
  `skill_intro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`id_intro`, `name_intro`, `skill_intro`) VALUES
(1, 'Md. Shafiul Hasan', 'Web Developer,Web Designer,Frontend Developer,Graphic Designer');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Md. Shafiul Hasan', '', 'shafi', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `title_portfolio` varchar(50) NOT NULL,
  `work_portfolio` varchar(50) NOT NULL,
  `date_portfolio` date NOT NULL,
  `link_portfolio` varchar(50) NOT NULL,
  `image_portfolio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `title_portfolio`, `work_portfolio`, `date_portfolio`, `link_portfolio`, `image_portfolio`) VALUES
(3, 'Aam Foundation', 'Web Design', '2019-01-16', 'http://www.aamfoundation.com/', 'work-1.jpg'),
(4, 'Blogger', 'Costomize', '2017-07-11', 'https://shafi1997.blogspot.com/', 'work-2.jpg'),
(5, 'ibdplex', 'Web Design', '2018-12-11', 'http://ibdplex.net/', 'work-3.jpg'),
(6, 'MAIT', 'Web Design', '2018-10-17', 'https://mait.netlify.com/', 'work-5.jpg'),
(7, 'HGKM', 'Web Design', '2018-08-15', 'https://hgcm.netlify.com/', 'work-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `icon_service` varchar(50) NOT NULL,
  `title_service` varchar(20) NOT NULL,
  `text_service` varchar(100) NOT NULL,
  `date_service` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `icon_service`, `title_service`, `text_service`, `date_service`) VALUES
(1, 'fab fa-html5', 'Web Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi minima perferendis porro', '0000-00-00'),
(3, 'fa fa-code', 'WEB DEVELOPMENT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi minima perferendis porro', '0000-00-00'),
(5, 'fab fa-wordpress', 'Wordpress', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi minima perferendis porro', '0000-00-00'),
(6, 'fab fa-blogger', 'Blogger', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi minima perferendis porro', '0000-00-00'),
(7, 'fab fa-viacoin', 'Graphics Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi minima perferendis porro', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(20) NOT NULL,
  `title_skill` varchar(20) NOT NULL,
  `level_skill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id_skill`, `title_skill`, `level_skill`) VALUES
(1, 'HTML', 85),
(2, 'CSS3', 75),
(3, 'PHP', 70),
(4, 'JavaScript', 60),
(5, 'Wordpress', 50);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id_social` int(11) NOT NULL,
  `icon_social` varchar(100) NOT NULL,
  `link_social` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id_social`, `icon_social`, `link_social`) VALUES
(1, 'ion-social-facebook', 'https://www.facebook.com/Shafi.1995'),
(2, 'ion-social-twitter', 'https://twitter.com/shafi_1997');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testimonial` int(11) NOT NULL,
  `name_testimonial` varchar(50) NOT NULL,
  `text_testimonial` varchar(500) NOT NULL,
  `image_testimonial` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id_testimonial`, `name_testimonial`, `text_testimonial`, `image_testimonial`) VALUES
(2, 'Mishu Husain', 'Shafis skills were really appreciated for web development with cool css and visual effects. The code is well commented. The seriousness of his work being worth more than whathe asked for, we found it was quite fair by doubling what he asked for. Do not hesitate to give him a bonus of encouragement', 'testimonial-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id_counter`);

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id_intro`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id_social`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testimonial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id_counter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
  MODIFY `id_intro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id_social` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testimonial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
