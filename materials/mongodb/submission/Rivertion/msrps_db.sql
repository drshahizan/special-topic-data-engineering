-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 04:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msrps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_list`
--

CREATE TABLE `client_list` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=not verified, 1 = verified',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_list`
--

INSERT INTO `client_list` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `email`, `password`, `avatar`, `last_login`, `status`, `date_added`, `date_updated`) VALUES
(1, 'John', 'D', 'Smith', 'Male', 'jsmith@sample.com', '1254737c076cf867dc53d60a0364f38e', 'uploads/client-1.png?v=1640150031', NULL, 1, '2021-12-22 12:06:25', '2021-12-22 13:13:51'),
(3, 'Claire', 'C', 'Blake', 'Female', 'cblake@sample.com', '4744ddea876b11dcb1d169fadf494418', NULL, NULL, 1, '2021-12-22 15:38:32', NULL),
(4, 'Mikhel', '', 'Adam', 'Male', 'mikhel_adam@hotmail.com', 'f64a9341b182ab361c59dab992bd2321', NULL, NULL, 1, '2023-05-27 23:09:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genre_list`
--

CREATE TABLE `genre_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre_list`
--

INSERT INTO `genre_list` (`id`, `name`, `description`, `date_created`, `date_updated`) VALUES
(1, 'Comedy', 'Comedy', '2021-12-22 09:34:57', NULL),
(2, 'Action', 'Action', '2021-12-22 09:35:06', NULL),
(3, 'Horror', 'Horror', '2021-12-22 09:35:14', NULL),
(4, 'Thriller', 'Thriller', '2021-12-22 09:35:30', NULL),
(5, 'Fiction', 'Fiction', '2021-12-22 09:35:40', NULL),
(6, 'Romance', 'Romance', '2021-12-22 09:35:49', NULL),
(7, 'Crime', 'Crime', '2021-12-22 09:36:00', NULL),
(8, 'Drama', 'Drama', '2021-12-22 09:36:51', NULL),
(9, 'RomCom', 'RomanticComedy', '2021-12-22 09:37:21', NULL),
(10, 'Martial Arts', 'Martial Arts', '2021-12-22 09:37:33', NULL),
(11, 'Sci-Fi', 'Science Fiction', '2021-12-22 09:37:59', NULL),
(12, 'Adventure', 'Adventure', '2021-12-22 09:38:14', NULL),
(13, 'Fantasy', 'Fantasy', '2021-12-22 09:38:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message_list`
--

CREATE TABLE `message_list` (
  `id` int(30) NOT NULL,
  `fullname` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message_list`
--

INSERT INTO `message_list` (`id`, `fullname`, `contact`, `email`, `message`, `status`, `date_created`) VALUES
(1, 'John D Smith', '091236546798', 'jsmith@sample.com', 'This is a sample inquiry only.', 1, '2021-12-21 13:31:03'),
(2, 'Claire Blake', '09123456789', 'cblake@sample.com', 'This is my sample inquiry', 1, '2021-12-21 16:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `movie_list`
--

CREATE TABLE `movie_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `genres` text NOT NULL,
  `director` text NOT NULL,
  `produced` text NOT NULL,
  `writter` text NOT NULL,
  `actors` text NOT NULL,
  `description` text NOT NULL,
  `image_path` text DEFAULT NULL,
  `trailer_link` text DEFAULT NULL,
  `release_date` date NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_list`
--

INSERT INTO `movie_list` (`id`, `title`, `genres`, `director`, `produced`, `writter`, `actors`, `description`, `image_path`, `trailer_link`, `release_date`, `date_created`, `date_updated`) VALUES
(1, 'The Tomorrow War', '5,11', 'Christopher McKay', 'David Ellison, Dana Goldberg, Don Granger, David S. Goyer, Jules Daly, and Adam Kolbrenner', 'Zach Dean', 'Christopher Michael Pratt, Yvonne Strahovski, Ryan Kiera Armstrong, J. K. Simmons, Betty Gilpin, Sam Richardson, Edwin Hodge, Jasmine Mathews, Keith Powers', 'In December 2022, biology teacher and former Green Beret, Dan Forester, fails to get a job at the Army Research Laboratory. During the broadcast of the World Cup, soldiers from the year 2051 arrive to warn that, in their time, humanity is on the brink of extinction due to a war with alien invaders, referred to as the \"Whitespikes.\" In November 2048, the Whitespikes suddenly appear in northern Russia and proceed to kill the majority of the humans within three years. In response, the world\'s present-day militaries are sent into the future via a wormhole device called the \"Jumplink,\" but fewer than 30% survive their seven-day deployment, prompting an international draft.\r\n\r\nDan receives his draft notice and tells his wife Emmy and daughter, Muri. Emmy suggests that they should run and talks Dan into visiting his estranged father James, a mechanical engineer, for help in removing the draft band attached to his arm. Dan\'s father left him and his mother after he returned from the Vietnam War because he felt he was too dangerous to remain with them. Dan says he does not want his father\'s help and leaves. Dan reports to basic training with other draftees where they are briefed by future soldiers. Dan deduces with fellow draftee Charlie, a scientist, that all draftees have died before the war starts to prevent a paradox.', 'uploads/movie-1.png?v=1640157585', NULL, '2021-07-02', '2021-12-22 11:19:12', '2021-12-22 15:19:45'),
(2, 'Outside the Wire', '5,11', 'Mikael Håfström', 'Brian Kavanaugh-Jones\r\nAnthony Mackie\r\nBen Pugh\r\nErica Steinberg\r\nJason Spire\r\nArash Amel', 'Rowan Athale, Rob Yescombe, Alice Allemano', '	\r\nAnthony Mackie\r\nDamson Idris\r\nEmily Beecham\r\nMichael Kelly\r\nPilou Asbæk', 'In 2036, a civil war between pro-Russian insurgents and local resistances in Ukraine leads the US to deploy peacekeeping forces. During an operation, a team of United States Marines and robotic soldiers, individually referred to by the acronym \"G.U.M.P.\", are ambushed. Disobeying an order, drone pilot 1st Lt. Harp deploys a Hellfire missile in a drone strike against a suspected enemy launcher, killing two Marines caught in the killzone but saving the 38 Marines who would have been killed by the launcher. As punishment, Harp is sent to Camp Nathaniel, the US base of operations in Ukraine where he is assigned to Captain Leo, a highly advanced and experimental android super-soldier masquerading as a human officer.\r\n\r\nHarp and Leo set out on a mission to prevent terrorist Victor Koval from gaining control of a network of Cold War–era nuclear missile silos, under the cover of delivering vaccines to a refugee camp. On the way, they respond to a reported attack on a friendly aid truck, resulting in a stand-off between the Marines and armed locals. After a G.U.M.P. shoots a local who threw a rock, Captain Leo negotiates a peaceful solution by giving the locals the contents of the aid truck. However, pro-Russian insurgents ambush the locals and Marines, leading to a firefight. This forces Leo and Harp to travel to the refugee camp on foot, while the Marines remain behind to engage the insurgents.\r\n\r\nAfter arriving at the refugee compound, Leo and Harp are shot at by an insurgent, who kills some civilians. Leo tortures the insurgent for information, before leaving him to be killed by the gathered mob. Leo and Harp meet their contact Sofiya, a resistance leader. Sofiya leads them to an arms dealer who knows the location of a bank vault containing nuclear launch codes that Koval is looking for. Harp and Leo travel to the bank and are met by Koval\'s forces which include several G.U.M.P.s. While Harp helps rescue civilians caught in a crossfire between US and Russian G.U.M.P.s, Leo retrieves the codes but cannot find Koval. A drone strike called in by Eckhart destroys the bank and several buildings, leading the military command to believe both Koval dead and Leo destroyed.\r\n\r\nHarp reunites with Leo who tells him that he has his own plans for the codes, and has been manipulating Harp into helping him evade the eye of military command. He knocks out Harp and leaves him on the side of the road where he is picked up by Sofiya\'s men. Leo meets with Koval to give him the codes but kills him when Koval refuses to give Leo access to a nuclear missile silo. Harp informs Sofiya and his commander of Leo\'s actions, and they realize that Leo is planning to launch the nuclear missiles to strike the United States, in order to prevent them from fighting more wars in the future. Harp volunteers to infiltrate the silo and finds Leo has taken over. He disables Leo but not before Leo initiates the launch of a missile, explaining that his goal was for the android super-soldier program to end in failure. Harp escapes as the silo is destroyed by a drone strike before the missile can launch; destroying Leo. Harp returns to Camp Nathaniel and receives praise from his commander, who informs him that he is returning home. Harp then leaves the base.', 'uploads/movie-2.png?v=1640157558', NULL, '2021-01-15', '2021-12-22 14:07:45', '2021-12-22 15:19:18'),
(3, 'Movie', '2,12', 'Adam', 'Ara', 'Dinie', 'Adam, Mikhel, Dinie, Muhaimin', 'TEsting', NULL, NULL, '2023-05-03', '2023-05-27 23:42:04', NULL),
(4, 'Bridgerton', '6', 'Chris Van Dusen', 'Chris Van Dusen', 'Chris Van Dusen', 'Nicola Coughlan,Julie Andrews,Luke Newton', 'Wealth, lust and betrayal set against the backdrop of Regency-era England, seen through the eyes of the powerful Bridgerton family', NULL, NULL, '2023-05-12', '2023-05-28 10:24:15', '2023-05-28 10:28:28'),
(5, 'The Little Mermaid', '12,13,6', 'Rob Marshall', 'adam', 'adam', 'Halle Bailey,Jonah Hauer-King,Melissa McCarthy', 'Cast & crew\r\nUser reviews\r\nTrivia\r\nIMDbPro\r\n\r\nThe Little Mermaid\r\n2023\r\nPG\r\n2h 15m\r\nIMDb RATING\r\nYOUR RATING\r\nPOPULARITY\r\nJavier Bardem, Melissa McCarthy, Halle Bailey, and Jonah Hauer-King in The Little Mermaid (2023)\r\n\r\nWatch and you\'ll see, some day I\'ll be, part of your world! Watch the new trailer for #TheLittleMermaid and see the movie in theaters May 26!\r\nPlay trailer2:21\r\nA young mermaid makes a deal with a sea witch to trade her beautiful voice for human legs so she can discover the world above water and impress a prince.', NULL, NULL, '2023-05-26', '2023-05-28 10:26:04', '2023-05-28 10:28:52'),
(6, 'Oppenheimer', '2,12,7', '\r\nChristopher Nolan', '\r\nChristopher Nolan', '\r\nChristopher Nolan', '\r\nCillian Murphy,Emily Blunt,Matt Damon', 'The story of American scientist J. Robert Oppenheimer and his role in the development of the atomic bomb.', NULL, NULL, '2023-07-21', '2023-05-28 10:28:12', NULL),
(7, 'Indiana Jones and the Dial of Destiny', '2,12', 'James Mangold', 'Jez Butterworth,John-Henry Butterworth,David Koepp', 'Jez Butterworth,John-Henry Butterworth,David Koepp', 'Harrison Ford,Phoebe Waller-Bridge,Mads Mikkelsen\r\n', 'Archaeologist Indiana Jones races against time to retrieve a legendary artifact that can change the course of history.', NULL, NULL, '2023-09-13', '2023-05-28 10:30:36', NULL),
(8, 'The Flash', '2,5,11', 'Andy Muschietti', 'Andy Muschietti', 'Andy Muschietti', 'Ben Affleck,Sasha Calle,Michael Keaton', 'Barry Allen uses his super speed to change the past, but his attempt to save his family creates a world without super heroes, forcing him to race for his life in order to save the future', NULL, NULL, '2023-06-14', '2023-05-28 10:32:09', NULL),
(9, '\"FUBAR\"', '2', 'Arnold Schwarzenegger', 'Arnold Schwarzenegger', 'Arnold Schwarzenegger', 'Arnold Schwarzenegger, Monica Barbaro', 'Arnold Schwarzenegger is back to remind the masses how a classic action star gets it done with \"FUBAR.\" The Netflix series about a retired CIA employee who discovers his daughter is also an operative marks Arnie\'s first time headlining in a series. With main support from Monica Barbaro, Fortune Feimster, and Adam Pally — and more than a few allusions to True Lies — \"FUBAR\" might be this year\'s throwback action hit.', NULL, NULL, '2023-05-24', '2023-05-28 10:33:08', NULL),
(10, 'The Machine', '2,1', 'Christopher Nolan', 'Christopher Nolan', 'Christopher Nolan', 'Mark Hamill, Bert Kreischer', 'Stand-up comedian Bert Kreischer turns his signature bit—about his college exploits with Russian mobsters—into a fictional action comedy. Teaming up with Kreischer is Mark Hamill, playing his estranged father in one of the oddest buddy action comedies since ... well, since last year\'s The Unbearable Weight of Massive Talent.', NULL, NULL, '2024-07-11', '2023-05-28 10:34:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review_list`
--

CREATE TABLE `review_list` (
  `id` int(30) NOT NULL,
  `movie_id` int(30) NOT NULL,
  `title` text NOT NULL,
  `comment` text NOT NULL,
  `rating` float NOT NULL DEFAULT 0,
  `client_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_list`
--

INSERT INTO `review_list` (`id`, `movie_id`, `title`, `comment`, `rating`, `client_id`, `date_created`, `date_updated`) VALUES
(2, 2, 'Sample review', 'It is really a very nice movie.', 5, 1, '2021-12-22 14:47:53', NULL),
(3, 1, 'Nice', 'This is a nice movie.', 4, 1, '2021-12-22 15:28:26', NULL),
(4, 2, 'Sample Review 2', 'This movie is awesome.', 5, 3, '2021-12-22 15:44:12', NULL),
(6, 1, 'Awesome', 'This is awesome.', 5, 3, '2021-12-22 16:10:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sentiment_keywords`
--

CREATE TABLE `sentiment_keywords` (
  `id` int(30) NOT NULL,
  `keyword` text NOT NULL,
  `score` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sentiment_keywords`
--

INSERT INTO `sentiment_keywords` (`id`, `keyword`, `score`) VALUES
(1, 'great', 5),
(2, 'Good', 4),
(3, 'Nice', 4),
(4, 'Amazing', 5),
(5, 'Fantastic', 5),
(6, 'very', 5),
(7, 'Best', 5),
(8, 'Wonderful', 5),
(9, 'adore', 4),
(10, 'adoring', 4),
(11, 'adoringly', 5),
(12, 'affordable', 4),
(13, 'afford', 4),
(14, 'amaze', 4),
(15, 'amazed', 4),
(16, 'appreciable', 4),
(17, 'applaud', 4),
(18, 'Bad', 1),
(19, 'awesome', 5),
(20, 'award', 5),
(21, 'win', 5),
(22, 'winning', 5),
(23, 'loss', 1),
(24, 'lose', 2),
(25, 'beautiful', 5),
(26, 'bonus', 3),
(27, 'bonuses', 3),
(28, 'brightest', 5),
(29, 'brighter', 4),
(30, 'bright', 3),
(31, 'classic', 3),
(32, 'dazzle', 3),
(33, 'dazling', 4),
(34, 'dedicated', 3),
(35, 'delight', 3),
(36, 'delightful', 4),
(37, 'delightfully', 5),
(38, 'delightfulness', 5),
(39, 'excelent', 5),
(40, 'excellant', 5),
(41, 'exceeded', 5),
(42, 'exceeds', 5),
(43, 'excel', 4),
(44, 'famous', 4),
(45, 'famously', 5),
(46, 'fine', 3),
(47, 'finest', 4),
(48, 'abnormal', 1),
(49, 'abolish', 1),
(50, 'don\'t', 1),
(51, 'dont', 1),
(52, 'wont', 1),
(53, 'absurd', 2),
(54, 'absurdity', 1),
(55, 'absurdly', 2),
(56, 'absurdness', 1),
(57, 'alarmed', 3),
(58, 'Alarming', 2),
(59, 'alarmingly', 1),
(60, 'badly', 1),
(61, 'bash', 2),
(62, 'bashed', 3),
(63, 'bashful', 1),
(64, 'bashing', 3),
(65, 'bias', 2),
(66, 'biased', 3),
(67, 'careless', 2),
(68, 'carelessness', 1),
(69, 'concern', 3),
(70, 'concerned', 3),
(71, 'condemn', 2),
(72, 'condemnable', 3),
(73, 'defect', 3),
(74, 'defective', 2),
(75, 'devilry', 1),
(76, 'danger', 3),
(77, 'dangerous', 1),
(78, 'harm', 3),
(79, 'harmful', 1),
(80, 'disgrace', 3),
(81, 'disgraced', 3),
(82, 'disgraceful', 2),
(83, 'disgracefully', 1);

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Movie Recommendation System'),
(6, 'short_name', 'MRS'),
(11, 'logo', 'uploads/logo-1640136453.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover-1640136453.png'),
(15, 'content', 'Array'),
(16, 'email', 'mso@utm.my'),
(17, 'contact', '0123456789'),
(18, 'from_time', '11:00'),
(19, 'to_time', '21:30'),
(20, 'address', 'Universiti Teknologi Malaysia'),
(21, 'church_name', 'ABC Baptist Church'),
(22, 'religion', 'Baptist');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=not verified, 1 = verified',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `status`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', NULL, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/avatar-1.png?v=1639468007', NULL, 1, 1, '2021-01-20 14:02:37', '2021-12-14 15:47:08'),
(3, 'Claire', NULL, 'Blake', 'cblake', '4744ddea876b11dcb1d169fadf494418', 'uploads/avatar-3.png?v=1639467985', NULL, 2, 1, '2021-12-14 15:46:25', '2021-12-14 15:46:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_list`
--
ALTER TABLE `client_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre_list`
--
ALTER TABLE `genre_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_list`
--
ALTER TABLE `message_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_list`
--
ALTER TABLE `movie_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_list`
--
ALTER TABLE `review_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `sentiment_keywords`
--
ALTER TABLE `sentiment_keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_list`
--
ALTER TABLE `client_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `genre_list`
--
ALTER TABLE `genre_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `message_list`
--
ALTER TABLE `message_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie_list`
--
ALTER TABLE `movie_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review_list`
--
ALTER TABLE `review_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sentiment_keywords`
--
ALTER TABLE `sentiment_keywords`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review_list`
--
ALTER TABLE `review_list`
  ADD CONSTRAINT `review_list_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie_list` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_list_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client_list` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
