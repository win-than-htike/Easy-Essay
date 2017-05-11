-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 06:32 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `easyessay`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`c_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `name`, `description`, `created_date`, `updated_date`) VALUES
(1, 'Travel', '', '2017-05-10 00:00:00', '2017-05-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `essay`
--

CREATE TABLE IF NOT EXISTS `essay` (
`e_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `introduction` text NOT NULL,
  `body` text NOT NULL,
  `conclusion` text NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `essay`
--

INSERT INTO `essay` (`e_id`, `category_id`, `user_id`, `title`, `teacher_name`, `introduction`, `body`, `conclusion`, `created_date`, `updated_date`) VALUES
(2, 1, 1, 'My Family Travel', 'Travel Essay', 'In my life, I have gone on many memorable trips. I look forward to my families annual trip to Georgia every year, and I will never forget our trip to Graceland or all the different family events we’ve gone to out east. But the one trip that has stayed in my mind and had the greatest impact on me wasn’t a family trip. It was my synagogue’s youth group trip to Cincinnati. ', 'Every year my temple youth group takes all it’s freshmen on a special trip to Cincinnati, as part of their confirmation in the Jewish faith. We all got up early on a Friday and the bus departed at seven. After an exhaustingly long bus ride it was time for our first destination. We all got dressed up in our good clothes and arrived at a church. Actually it wasn’t a church. It was the first reformed Jewish temple ever established in the world. The founders wanted to create a place of worship that was seemingly identical to the norm (Christianity.) The temple had an Ottoman-esque interior, roofed with elaborately painted domes, lined with traditional wooden pews, with a massive organ in the back that’s pipes snaked up the wall like ivy. There was even a steeple (back when the temple was first built, the neighboring church made their steeple taller because they didn’t want to be outdone by jews.) The only tip-off that this wasn’t a church was that there were no crosses.\r\n\r\nAnother destination was the Hebrew Union College where we got a tour of their records room which included historic religious artifacts from a translated scroll by medieval-era Chinese Jews to a Gutenberg bible. We were taken through their Holocaust memorial, a sobering tour including filmed interviews of survivors.\r\n\r\nBoth of these stops held a special weight that has impacted my view on life. I had never taken my religion seriously. But seeing where my practice began, relics from Jews around the world and the evil that was the holocaust changed that. It made me realize that for thousands of years people have fought to keep this religion alive and it is my duty to keep it and pass it on and fight for it too.\r\n\r\nThe whole trip wasn’t all serious however. I also had some of the most fun in my entire life. I roomed with three of my friends. On the first night when we were changing for the Sabbath, a girl came to our door and one answered even though none of us were fully clothed. We pushed him out the door and promptly locked him out. About five minutes later we realized that he had no clothes. He promptly showed up at the door in girls clothing, somewhat angry but laughing at our prank. He ended up having to go to services in a pink sweatshirt and girls-jeans. The Rabbi was obviously bemused to say the least.\r\n\r\nOn the last night the four of us were just relaxing when all of a sudden another kid from the adjoining hotel room burst through the door wearing a t-shirt, boxers and snow-boots shouting “Get everything off the floor!” Any confusion was suddenly swept away when we saw water come flowing into our room. A pipe had burst and we spent the night with an inch of water covering the floor.', 'This trip was three years ago. But of it is still vivid in my memory. It instilled faith in me and built camaraderie amongst my peers (some are now my best friends) and it has given me memories that I will cherish forever. ', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`u_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `email`, `password`, `phone`, `created_date`, `updated_date`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 123, '2017-05-10 00:00:00', '2017-05-10 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `essay`
--
ALTER TABLE `essay`
 ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `essay`
--
ALTER TABLE `essay`
MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
