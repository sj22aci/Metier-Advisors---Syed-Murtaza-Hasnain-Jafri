-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 01:37 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metier-advisors`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `counsellors_id` int(10) UNSIGNED NOT NULL,
  `counsellors_name` varchar(30) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `message` text NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `counsellors_id`, `counsellors_name`, `user_id`, `date`, `time`, `message`, `payment`) VALUES
(18, 4, 'Uzair Khan', 2, '2023-01-10', '14:00:00', 'Need an appointment regarding undergraduate studies', 'Bank Transfer'),
(29, 1, 'Ali Khan', 2, '2023-01-09', '16:37:00', 'test', 'Bank Transfer'),
(30, 1, 'Ali Khan', 1, '2023-01-10', '17:00:00', 'hello', 'Bank Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`) VALUES
(1, 'Why It Is Important to Choose a Career That Aligns with Your Values', 'To choose a career that aligns with one\'s values\r\n\r\nWhen it comes to choosing a career, it is important to consider what is most important to you and what you value most in life. This is because choosing a career that aligns with your values can lead to a more fulfilling and satisfying professional life.\r\n\r\nOne reason why it is important to choose a career that aligns with your values is that it can help you feel more motivated and engaged in your work. When you are doing work that aligns with your values, you are more likely to feel a sense of purpose and meaning in what you do. This can make it easier to stay focused and motivated, even when the going gets tough.\r\n\r\nIn addition, choosing a career that aligns with your values can help you feel more fulfilled and satisfied with your professional life. When you are doing work that aligns with your values, you are more likely to feel a sense of accomplishment and pride in what you do. This can lead to a greater sense of satisfaction and overall well-being.\r\n\r\nAnother reason why it is important to choose a career that aligns with your values is that it can help you build more positive relationships with your colleagues and clients. When you are doing work that aligns with your values, you are more likely to have a positive attitude and be more understanding and empathetic towards others. This can lead to stronger and more collaborative working relationships, which can be beneficial for your career in the long run.\r\n\r\nIn conclusion, choosing a career that aligns with your values is important because it can lead to a more fulfilling and satisfying professional life. It can help you feel more motivated and engaged in your work, feel more fulfilled and satisfied, and build more positive relationships with others. So, if you are considering your career options, take some time to think about what you value most in life and choose a career that aligns with those values.'),
(2, 'Recent Scholarships That Are Available', 'There are many scholarships available to students of all ages and backgrounds. Some scholarships are open to anyone who meets certain criteria, while others are specifically designed for certain groups of people, such as students of a particular race, gender, or field of study. Here are a few recent scholarships that are currently available:\r\n\r\nThe Gates Scholarship: This scholarship is open to high school seniors who are planning to attend college in the fall. It is designed for students who have demonstrated leadership, service, and academic achievement, and who have financial need. The scholarship covers the cost of tuition, fees, and other expenses for four years of college.\r\n\r\nThe Horatio Alger Scholarship: This scholarship is open to high school seniors who have faced significant financial hardship and are planning to pursue higher education. It provides financial assistance to students who have demonstrated integrity, perseverance, and a strong commitment to their education.\r\n\r\nThe Coca-Cola Scholars Program: This scholarship is open to high school seniors who have demonstrated leadership, academic achievement, and a commitment to community service. It provides financial assistance to students who are planning to attend college in the fall.\r\n\r\nThe Google Lime Scholarship: This scholarship is open to undergraduate and graduate students with disabilities who are pursuing a degree in computer science or a related field. It provides financial assistance to students who are committed to using their skills and knowledge to make a positive impact in the field of technology.\r\n\r\nThe National Science Foundation Graduate Research Fellowship: This fellowship is open to graduate students who are pursuing a degree in science, technology, engineering, or mathematics (STEM). It provides financial assistance to students who are conducting research in these fields and who have the potential to become leaders in their field.\r\n\r\nThese are just a few of the many scholarships that are currently available. If you are interested in finding more scholarship opportunities, you can search online or speak with your school\'s financial aid office for more information.'),
(3, 'The Best Universities for Students to Join', 'When it comes to choosing a university, there are many factors to consider, including location, cost, size, and academic programs. While there is no one \"best\" university that is right for every student, there are certainly some universities that stand out as being particularly strong in certain areas. Here are a few universities that are often cited as being among the best for students:\r\n\r\nMassachusetts Institute of Technology (MIT): Located in Cambridge, Massachusetts, MIT is known for its strong programs in science, technology, engineering, and math. It is also home to a number of renowned research centers and institutes, and has a strong track record of producing successful graduates.\r\n\r\nStanford University: Located in Palo Alto, California, Stanford is known for its strong programs in a wide range of fields, including business, engineering, and the liberal arts. It is also home to a number of renowned research centers and institutes, and has a strong track record of producing successful graduates.\r\n\r\nHarvard University: Located in Cambridge, Massachusetts, Harvard is one of the most prestigious universities in the world. It is known for its strong programs in a wide range of fields, including the sciences, humanities, and business. It is also home to a number of renowned research centers and institutes, and has a strong track record of producing successful graduates.\r\n\r\nUniversity of Oxford: Located in Oxford, England, the University of Oxford is one of the oldest and most prestigious universities in the world. It is known for its strong programs in a wide range of fields, including the sciences, humanities, and business. It is also home to a number of renowned research centers and institutes, and has a strong track record of producing successful graduates.\r\n\r\nCalifornia Institute of Technology (Caltech): Located in Pasadena, California, Caltech is known for its strong programs in science and engineering. It is also home to a number of renowned research centers and institutes, and has a strong track record of producing successful graduates.\r\n\r\nAgain, these are just a few examples of the many universities that are considered to be among the best for students. Ultimately, the best university for you will depend on your individual needs and goals. It is important to carefully research and consider your options before making a decision.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(16, 'Murtaza Jafri', 'murtazahasnainj5@gmail.com', 'I need help regarding my subjects, please guide me which counsellor I should go for');

-- --------------------------------------------------------

--
-- Table structure for table `counsellors`
--

CREATE TABLE `counsellors` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `bio` text NOT NULL,
  `pay` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counsellors`
--

INSERT INTO `counsellors` (`id`, `name`, `bio`, `pay`, `image`) VALUES
(1, 'Ali Khan', 'Hi, my name is Ali Khan and I am a career counsellor with over 10 years of experience in helping individuals discover and pursue their dream careers. I hold a Master\'s degree in Counselling Psychology and am a certified career coach.', '$50/hr', 'Images/counsellor1.jpg'),
(2, 'Mustafa Baig', 'Hi, my name is Mustafa Baig and I am a career counsellor with a wealth of experience in helping individuals discover and pursue their dream careers. I hold a Master\'s degree in Human Resources Management and have been working in the field for over 15 years.', '$60/hr', 'Images/counsellor2.jpg'),
(3, 'Shamyl Khan', 'Hi, my name is Shamyl Khan and I am a career counsellor with a passion for helping individuals discover and pursue their dream careers. I hold a Master\'s degree in Career Development and have been working in the field for over 7 years.', '$30/hr', 'Images/counsellor3.jpg'),
(4, 'Uzair Khan', 'Hi, my name is Uzair Khan and I am a career counsellor with a passion for helping individuals discover and pursue their dream careers. I hold a Master\'s degree in Career Development and have been working in the field for over 9 years.', '$45/hr', 'Images/counsellor4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `resume_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`id`, `name`, `email`, `resume_path`) VALUES
(6, 'Murtaza Jafri', 'murtazahasnainj5@gmail.com', 'Career-Uploadfiles/upload63b891ecb344d-Syed Murtaza Hasnain Jafri CV (1).docx'),
(7, 'Murtaza Jafri', 'murtazahasnainj5@gmail.com', 'Career-Uploadfiles/upload63b9f5fa79ec2-Syed Murtaza Hasnain Jafri CV (1).docx');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_description` text NOT NULL,
  `requirements` text NOT NULL,
  `pay_range` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_title`, `job_description`, `requirements`, `pay_range`) VALUES
(1, 'Senior Guidance Counselor', 'The Senior Guidance Counselor is responsible for providing academic, personal, and career counseling to students in a high school or post-secondary educational institution. The Counselor works with students to develop academic plans, set goals, and make informed decisions about their future. They also provide support and resources to students facing personal or social challenges.', 'A Master\'s degree in Counseling or a related field\r\nAt least 5 years of experience working as a Counselor in a school or post-secondary educational setting\r\nProficiency with computer programs and databases for record-keeping and reporting purposes', '$40-$80/hr'),
(2, 'Junior Guidance Counselor', 'The Junior Guidance Counselor is responsible for providing academic, personal, and career counseling to students in a high school or post-secondary educational institution. The Counselor works with students to develop academic plans, set goals, and make informed decisions about their future. They also provide support and resources to students facing personal or social challenges.', 'A Master\'s degree in Counseling or a related field\r\nAt least 1 year of experience working as a Counselor in a school or post-secondary educational setting\r\nAbility to work independently and as part of a team', '$20-$50/hr');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'murtazaj5', '$2y$10$S9OSFqn3bbweDMfcng5TJOGRZVyp57Cr5ztUqpKNSlNRgQYtT8WbS', '2023-01-07 02:45:16'),
(2, 'tester1', '$2y$10$d/0zsc1ZU0uRZmByR.TdVefx1Jk/20fNpT9Ij2EsRt6NLrYD8Cmzy', '2023-01-07 21:14:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `counsellors_id` (`counsellors_id`,`counsellors_name`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counsellors`
--
ALTER TABLE `counsellors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `id_2` (`id`,`name`),
  ADD KEY `id` (`id`,`name`);

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `counsellors`
--
ALTER TABLE `counsellors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`counsellors_id`,`counsellors_name`) REFERENCES `counsellors` (`id`, `name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
