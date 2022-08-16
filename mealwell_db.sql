-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 06:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mealwell_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'Meal Super', '$2y$10$vJ6nxWTe/tk0sZtPd1MEruq1DHm3xIDABVnrXZOJsA0zDTaAUoZwS');

-- --------------------------------------------------------

--
-- Table structure for table `bmi_calculator`
--

CREATE TABLE `bmi_calculator` (
  `height` decimal(4,2) NOT NULL,
  `weight` decimal(4,2) NOT NULL,
  `bmi_result` decimal(4,2) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'HealthyEating'),
(2, 'NutriSafe'),
(3, 'HealthyRecipe');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comments` longtext NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comments`, `comment_date`, `name`) VALUES
(1, 'What a great bootcamp MOAT academy is!', '2022-08-09 15:47:52', 'Adefisayo Adeniji'),
(2, 'One of the best tutors ever met! ', '2022-08-09 15:51:10', 'Mrs Abiola'),
(4, 'What a sound mind. An embodiment of programming languages!', '2022-08-09 15:54:52', 'Mr Yemi (AfricPoet)');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `contact_name`, `contact_message`, `created_at`) VALUES
(1, 'Adeife', 'How do i get a consultation', '2022-08-08 14:04:14'),
(2, 'Fifehanmi', 'why is my weight 100kg', '2022-08-08 14:33:29'),
(3, 'Fifehanmi', 'why is my weight 100kg', '2022-08-08 14:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT current_timestamp(),
  `post_title` varchar(255) NOT NULL,
  `post_contents` longtext NOT NULL,
  `post_video` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `date_posted`, `post_title`, `post_contents`, `post_video`, `post_image`, `category_id`, `admin_id`) VALUES
(2, '2022-08-10 17:31:16', 'Healthy Eating', '<p>Every man wants to live a <strong>healthy life</strong> yet not everyone knows the way around it. It feels like a man who receives incomplete education yet he\'s left more confused than the fellow who is unlearned.</p><p>Can you relate with this? …Are you in such category of people?</p><p>Contrary to the verity of the age long saying that \"You are what you eat\", people now eat yet without caution. A healthy dietary pattern will save you from all forms of malnutrition, and any diet related disease. You must have seen people with one or two diet related health challenge whether a neighbor, friend, colleague at work and many more</p><p>I am sure you don\'t want to join these group of people.</p><p>If yes, I have what to need to be healthy</p><p>Firstly, let\'s define what healthy eating is:</p><p>To a layman, it means what, when, why, and how I eat to stay without diseases that are food related</p><p><strong>Few tips to note</strong></p><blockquote><p><i>Varieties of foods across food groups</i></p><p><i>Varieties within each food group</i></p><p><i>These are grains, legumes, roots and tubers, vegetables&nbsp;</i></p><p><i>Moderation in quantity (Sugar, Sodium, alcohol, and fat intake)</i></p></blockquote><p>Excess intake of the aforementioned food components have been linked to some certain non-communicable diet related disease conditions such as: diabetes, hypertension, cancer, and many more</p><p>It is important to note that if you are to ensure a healthy eating pattern, it has to be religiously followed through what it\'s effect to be seen.</p>', '', 'ch8251879991660149076.jpg', 1, NULL),
(3, '2022-08-10 17:39:21', 'Safe Food...Anyone?', '<p>This topic is important for all who desires to live long. Since, no man can possibly do without food forever, there is a need to pay attention to the safety of what we eat.&nbsp;</p><p>Food is that edible substance required for the sustenance of human body as it comprises nutrients and phytochemicals for growth and development. Having understood what food is and its importance to human health, it is safe to understand the urgency required for our foods to be safe that is, to be harmless when consumed.</p><blockquote><h4>“World Health Organization defines food safety as the assurance that you get as a consumer, that you won\'t be harmed when you eat food according to its intended use.”</h4></blockquote><p>The following are the factors responsible for foods to be unsafe;</p><blockquote><p>Improper Agricultural Practices</p><p>Poor Hygiene at all stages of the food chain&nbsp;</p><p>Lack of preventive controls in food processing operations&nbsp;</p><p>Misuse of Chemicals and Additives; additives used above permitted levels&nbsp;</p><p>Inappropriate storage and handling.&nbsp;</p><p>Microbiological Contaminants&nbsp;</p><p>Biological toxins</p><p>Pesticide and Vertinary Residues e.t.c&nbsp;</p><p>Counterfeiting, adulteration, mis-branding e.t.c</p></blockquote>', '', 'ch7876788181660149561.jpg', 2, NULL),
(4, '2022-08-10 17:41:05', 'Safe Food...Anyone?', '<p>This topic is important for all who desires to live long. Since, no man can possibly do without food forever, there is a need to pay attention to the safety of what we eat.&nbsp;</p><p>Food is that edible substance required for the sustenance of human body as it comprises nutrients and phytochemicals for growth and development. Having understood what food is and its importance to human health, it is safe to understand the urgency required for our foods to be safe that is, to be harmless when consumed.</p><blockquote><h4>“World Health Organization defines food safety as the assurance that you get as a consumer, that you won\'t be harmed when you eat food according to its intended use.”</h4></blockquote><p>The following are the factors responsible for foods to be unsafe;</p><blockquote><ul><li>Improper Agricultural Practices</li><li>Poor Hygiene at all stages of the food chain&nbsp;</li><li>Lack of preventive controls in food processing operations&nbsp;</li><li>Misuse of Chemicals and Additives; additives used above permitted levels&nbsp;</li><li>Inappropriate storage and handling.&nbsp;</li><li>Microbiological Contaminants&nbsp;</li><li>Biological toxins</li><li>Pesticide and Vertinary Residues e.t.c&nbsp;</li><li>Counterfeiting, adulteration, mis-branding e.t.c</li></ul></blockquote>', '', 'ch20278167361660149665.jpg', 2, NULL),
(5, '2022-08-10 17:41:41', 'Safe Food...Anyone?', '<p>This topic is important for all who desires to live long. Since, no man can possibly do without food forever, there is a need to pay attention to the safety of what we eat.&nbsp;</p><p>Food is that edible substance required for the sustenance of human body as it comprises nutrients and phytochemicals for growth and development. Having understood what food is and its importance to human health, it is safe to understand the urgency required for our foods to be safe that is, to be harmless when consumed.</p><blockquote><h4>“World Health Organization defines food safety as the assurance that you get as a consumer, that you won\'t be harmed when you eat food according to its intended use.”</h4></blockquote><p>The following are the factors responsible for foods to be unsafe;</p><blockquote><p>Improper Agricultural Practices</p><p>Poor Hygiene at all stages of the food chain&nbsp;</p><p>Lack of preventive controls in food processing operations&nbsp;</p><p>Misuse of Chemicals and Additives; additives used above permitted levels&nbsp;</p><p>Inappropriate storage and handling.&nbsp;</p><p>Microbiological Contaminants&nbsp;</p><p>Biological toxins</p><p>Pesticide and Vertinary Residues e.t.c&nbsp;</p><p>Counterfeiting, adulteration, mis-branding e.t.c</p></blockquote>', '', 'ch20975879001660149701.jpg', 2, NULL),
(6, '2022-08-10 17:43:03', 'Healthy Eating', '<p>Every man wants to live a <strong>healthy life</strong> yet not everyone knows the way around it. It feels like a man who receives incomplete education yet he\'s left more confused than the fellow who is unlearned.</p><p>Can you relate with this? …Are you in such category of people?</p><p>Contrary to the verity of the age long saying that \"You are what you eat\", people now eat yet without caution. A healthy dietary pattern will save you from all forms of malnutrition, and any diet related disease. You must have seen people with one or two diet related health challenge whether a neighbor, friend, colleague at work and many more</p><p>I am sure you don\'t want to join these group of people.</p><p>If yes, I have what to need to be healthy</p><p>Firstly, let\'s define what healthy eating is:</p><p>To a layman, it means what, when, why, and how I eat to stay without diseases that are food related</p><p><strong>Few tips to note</strong></p><blockquote><p><i>Varieties of foods across food groups</i></p><p><i>Varieties within each food group</i></p><p><i>These are grains, legumes, roots and tubers, vegetables&nbsp;</i></p><p><i>Moderation in quantity (Sugar, Sodium, alcohol, and fat intake)</i></p></blockquote><p>Excess intake of the aforementioned food components have been linked to some certain non-communicable diet related disease conditions such as: diabetes, hypertension, cancer, and many more</p><p>It is important to note that if you are to ensure a healthy eating pattern, it has to be religiously followed through what it\'s effect to be seen.</p>', '', 'ch7302882141660149783.jpg', 1, NULL),
(7, '2022-08-10 17:43:40', 'Healthy Eating', '<p>Every man wants to live a <strong>healthy life</strong> yet not everyone knows the way around it. It feels like a man who receives incomplete education yet he\'s left more confused than the fellow who is unlearned.</p><p>Can you relate with this? …Are you in such category of people?</p><p>Contrary to the verity of the age long saying that \"You are what you eat\", people now eat yet without caution. A healthy dietary pattern will save you from all forms of malnutrition, and any diet related disease. You must have seen people with one or two diet related health challenge whether a neighbor, friend, colleague at work and many more</p><p>I am sure you don\'t want to join these group of people.</p><p>If yes, I have what to need to be healthy</p><p>Firstly, let\'s define what healthy eating is:</p><p>To a layman, it means what, when, why, and how I eat to stay without diseases that are food related</p><p><strong>Few tips to note</strong></p><blockquote><p><i>Varieties of foods across food groups</i></p><p><i>Varieties within each food group</i></p><p><i>These are grains, legumes, roots and tubers, vegetables&nbsp;</i></p><p><i>Moderation in quantity (Sugar, Sodium, alcohol, and fat intake)</i></p></blockquote><p>Excess intake of the aforementioned food components have been linked to some certain non-communicable diet related disease conditions such as: diabetes, hypertension, cancer, and many more</p><p>It is important to note that if you are to ensure a healthy eating pattern, it has to be religiously followed through what it\'s effect to be seen.</p>', '', 'ch13765851401660149820.jpg', 1, NULL),
(8, '2022-08-10 17:51:32', 'Recipe for MoiMoi', '<p>&nbsp;</p><p><strong>What is Moi-Moi?</strong></p><p>I’ll explain what this dish is all about in case you’ve never heard of it before. Moin moin is a savory steamed traditional Nigerian main dish made from peeled black-eyed peas, peppers, onions, and other condiments like fish, crayfish, boiled egg, animal liver, and other enriching condiments.</p><p>This meal is a favorite in almost any Nigerian home. It is also known as olele, bean pudding, Moi Moi, or moin moin.&nbsp;</p><p><strong>Moin Moin/ Moi moi</strong>&nbsp;is traditionally steamed inside a pot using leaves such as the” Ewe eran” (Thaumatococcus daniellii) or banana leaves.</p><p>Other heat-proof bowls like aluminum foil, and baking pans are also suitable.</p><p><strong>Ingredients for making Moin Moi</strong>n</p><ul><li><strong>Black-eyed Peas or Honey Beans –&nbsp;</strong>Best to use black-eyed peas or honey beans (Ewa oloyin)</li><li><strong>Peppers –&nbsp;</strong>It’s best to use a<strong>&nbsp;</strong>combination of peppers like red bell peppers (tatashe) and scotch bonnet(rodo) for a deeper flavor profile.</li><li><strong>Onion –&nbsp;</strong>Onions, as always, bring out the flavor in the food.</li><li><strong>Crayfish –&nbsp;</strong>you can ground the dry crayfish with the beans or use powdered crayfish.</li><li><strong>Vegetable Oil/Palm oil –&nbsp;</strong>You can use palm oil, vegetable oil, or a mixture.&nbsp;</li><li><strong>Chicken bouillon Cubes –&nbsp;</strong>Add this for taste.</li><li><strong>Fish</strong>&nbsp;– This is optional but a great addition. The fish is boiled and cut into chunks. I like to use Mackerel or Salmon.</li><li><strong>Hard-boiled Eggs –&nbsp;</strong>Also a great addition!</li><li><strong>Boiled beef liver –&nbsp;</strong>This is also optional. It will make a great filing in the mix. I love it because beef liver is nutrient-dense.&nbsp;</li><li><strong>Salt –&nbsp;</strong>Add salt to taste</li></ul><p><strong>How to make Moi Moi</strong></p><ul><li><strong>Soak the beans.&nbsp;</strong>It would be best to soak your beans for about 10 to 20 minutes. Dryer beans tend to be ready faster, while less dry beans will take a little longer.</li><li><strong>Peel your beans.</strong>&nbsp;You can peel your beans manually by rubbing them together between your palms. That is a long process, so I have found a shortcut for peeling. I use a food processor. This is a fast way to peel your beans.</li><li><strong>Sieve the skin of the beans&nbsp;</strong>out. After peeling, wash your beans and sieve out the skin until you get clean beans. The skin would float itself while the seed would go down. You can soak the beans for 10 minutes more to make them softer.</li><li><strong>Blend the beans and other ingredients –&nbsp;</strong>Add the beans into the blender with pepper and onions. Add bouillon cubes, salt, and crayfish. Add a cup of water to blend.</li><li><strong>Turn the batter into a bowl.&nbsp;</strong>Inside the batter, add the groundnut oil and mix.</li><li><strong>Add fish chunks or liver.&nbsp;</strong>You can add boiled fish already cut into chunks or pour in liver cut into small pieces. Keep mixing.</li><li><strong>Prepare the bowls –&nbsp;</strong>Depending on what you want to use for your Moi Moi, wash it and oil the plates</li><li><strong>Portion the batter to the bowls.&nbsp;</strong></li><li><strong>Add the boiled egg on top.&nbsp;</strong>Add your boiled egg on top. You don’t have to push it deep into the mix.</li><li><strong>Put the pot on the stove and add boiled water.</strong></li><li><strong>Arrange the Moi Moi in the pot and cover.&nbsp;</strong>Allow it to steam for like 45 minutes. If you notice that the water in the pot has dried up, carefully add more water.</li></ul><p><strong>Carefully remove the Moi Moi from the plate and enjoy.</strong></p>', '', 'ch11402339211660150292.jpg', 3, NULL),
(9, '2022-08-10 17:56:17', 'Recipe for MoiMoi', '<p><strong>What is Moi-Moi?</strong></p><p>I’ll explain what this dish is all about in case you’ve never heard of it before. Moin moin is a savory steamed traditional Nigerian main dish made from peeled black-eyed peas, peppers, onions, and other condiments like fish, crayfish, boiled egg, animal liver, and other enriching condiments.</p><p>This meal is a favorite in almost any Nigerian home. It is also known as olele, bean pudding, Moi Moi, or moin moin.&nbsp;</p><p><strong>Moin Moin/ Moi moi</strong>&nbsp;is traditionally steamed inside a pot using leaves such as the” Ewe eran” (Thaumatococcus daniellii) or banana leaves.</p><p>Other heat-proof bowls like aluminum foil, and baking pans are also suitable.</p><p><strong>Ingredients for making Moin Moi</strong>n</p><ul><li><strong>Black-eyed Peas or Honey Beans –&nbsp;</strong>Best to use black-eyed peas or honey beans (Ewa oloyin)</li><li><strong>Peppers –&nbsp;</strong>It’s best to use a<strong>&nbsp;</strong>combination of peppers like red bell peppers (tatashe) and scotch bonnet(rodo) for a deeper flavor profile.</li><li><strong>Onion –&nbsp;</strong>Onions, as always, bring out the flavor in the food.</li><li><strong>Crayfish –&nbsp;</strong>you can ground the dry crayfish with the beans or use powdered crayfish.</li><li><strong>Vegetable Oil/Palm oil –&nbsp;</strong>You can use palm oil, vegetable oil, or a mixture.&nbsp;</li><li><strong>Chicken bouillon Cubes –&nbsp;</strong>Add this for taste.</li><li><strong>Fish</strong>&nbsp;– This is optional but a great addition. The fish is boiled and cut into chunks. I like to use Mackerel or Salmon.</li><li><strong>Hard-boiled Eggs –&nbsp;</strong>Also a great addition!</li><li><strong>Boiled beef liver –&nbsp;</strong>This is also optional. It will make a great filing in the mix. I love it because beef liver is nutrient-dense.&nbsp;</li><li><strong>Salt –&nbsp;</strong>Add salt to taste</li></ul><p><strong>How to make Moi Moi</strong></p><ul><li><strong>Soak the beans.&nbsp;</strong>It would be best to soak your beans for about 10 to 20 minutes. Dryer beans tend to be ready faster, while less dry beans will take a little longer.</li><li><strong>Peel your beans.</strong>&nbsp;You can peel your beans manually by rubbing them together between your palms. That is a long process, so I have found a shortcut for peeling. I use a food processor. This is a fast way to peel your beans.</li><li><strong>Sieve the skin of the beans&nbsp;</strong>out. After peeling, wash your beans and sieve out the skin until you get clean beans. The skin would float itself while the seed would go down. You can soak the beans for 10 minutes more to make them softer.</li><li><strong>Blend the beans and other ingredients –&nbsp;</strong>Add the beans into the blender with pepper and onions. Add bouillon cubes, salt, and crayfish. Add a cup of water to blend.</li><li><strong>Turn the batter into a bowl.&nbsp;</strong>Inside the batter, add the groundnut oil and mix.</li><li><strong>Add fish chunks or liver.&nbsp;</strong>You can add boiled fish already cut into chunks or pour in liver cut into small pieces. Keep mixing.</li><li><strong>Prepare the bowls –&nbsp;</strong>Depending on what you want to use for your Moi Moi, wash it and oil the plates</li><li><strong>Portion the batter to the bowls.&nbsp;</strong></li><li><strong>Add the boiled egg on top.&nbsp;</strong>Add your boiled egg on top. You don’t have to push it deep into the mix.</li><li><strong>Put the pot on the stove and add boiled water.</strong></li><li><strong>Arrange the Moi Moi in the pot and cover.&nbsp;</strong>Allow it to steam for like 45 minutes. If you notice that the water in the pot has dried up, carefully add more water.</li></ul><p><strong>Carefully remove the Moi Moi from the plate and enjoy.</strong></p>', '', 'ch9761337841660150577.jpg', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(45) NOT NULL,
  `user_lname` varchar(45) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_gender` varchar(45) NOT NULL,
  `user_dob` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_firstname`, `user_lname`, `user_email`, `user_password`, `user_gender`, `user_dob`, `created_at`) VALUES
(1, 'Adefisayo', 'Adeniji', 'adenijiadefeesayo97@gmail.com', '$2y$10$uzsdhdAuc4HaplO2apKShOdMVqz7XUnBujBNl0DVRmP/LwHMf/vQG', '', '0000-00-00', '2022-07-02 19:07:03'),
(5, 'Adefisayo', 'Adeniji', 'a.adefisayoesther@gmail.com', '$2y$10$Cg0rTvBTPNmsrcwHptuEFuXJ3HCalMnQeIxQBw6TXhCYxUKjDSprW', 'Male', '0000-00-00', '2022-07-02 19:17:59'),
(6, 'Adefisayo', 'Adeniji', 'adenijiade@gmail.com', '$2y$10$FaHdX04oO/ADVR18Nvl3DuYJDbNf9AYcm7oNxls7gx2M7lJJGuLAq', 'Female', '1997-02-03', '2022-07-03 12:39:30'),
(7, 'Ololade', 'Adeniji', 'lolly@gmail.com', '$2y$10$5fXc4Mau8pVSLJpqjh5wfeAqWY1VhWMYkhiysyiAKieZ/5eS0EfWy', 'Female', '1999-05-15', '2022-07-03 14:19:29'),
(8, 'Tola', 'Adeniji', 'adetola@gmail.com', '$2y$10$9dGwXWlDGKV5PII4jBn3RefVLHcgJ33xBAYH/AZAUaM0zLxL1n6/y', 'Female', '2022-07-07', '2022-07-07 13:35:41'),
(9, 'Olamide', 'Akinfenwa', 'olamide@gmail.com', '$2y$10$cIjcw/fA6/99CXb.f6tx0.RmXRzaSSUpq9POH2ItbissVRIf0k5WW', 'Male', '1997-08-16', '2022-08-07 13:23:52'),
(10, 'Esther', 'Igbekele', 'esther@gmail.com', '$2y$10$MHkuNiroNcpEn167bGItj.ao.PM/ox620KvtWbNCJtaNldnFFr0H.', 'Female', '1994-02-08', '2022-08-08 14:47:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bmi_calculator`
--
ALTER TABLE `bmi_calculator`
  ADD KEY `fk_bmi_calculator_user_id_idx` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `fk_post_admin_id_idx` (`admin_id`),
  ADD KEY `fk_post_category_id_idx` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email_UNIQUE` (`user_email`),
  ADD UNIQUE KEY `user_password_UNIQUE` (`user_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bmi_calculator`
--
ALTER TABLE `bmi_calculator`
  ADD CONSTRAINT `fk_bmi_calculator_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_admin_id` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_post_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
