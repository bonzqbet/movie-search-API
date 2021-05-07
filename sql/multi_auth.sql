-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 11:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_05_090658_create_post_tbl', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$vxCPWT7ei6lerX4vqhrk3.hLv2PsAX4bE9X7V26mGROQxV4Krzu.y', '2021-05-05 00:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imdbID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Poster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Rated` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Released` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Runtime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Director` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Writer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Actors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Plot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Awards` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ratings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Metascore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imdbRating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imdbVotes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DVD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BoxOffice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Production` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Response` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Title`, `Year`, `imdbID`, `Type`, `Poster`, `Rated`, `Released`, `Runtime`, `Genre`, `Director`, `Writer`, `Actors`, `Plot`, `Language`, `Country`, `Awards`, `Ratings`, `Metascore`, `imdbRating`, `imdbVotes`, `DVD`, `BoxOffice`, `Production`, `Website`, `Response`, `created_at`, `updated_at`) VALUES
(405, 'Batman v Superman: Dawn of Justice', '2016', 'tt2975590', 'movie', 'https://m.media-amazon.com/images/M/MV5BYThjYzcyYzItNTVjNy00NDk0LTgwMWQtYjMwNmNlNWJhMzMyXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', 'PG-13', '25 Mar 2016', '152 min', 'Action, Adventure, Sci-Fi', 'Zack Snyder', 'Chris Terrio, David S. Goyer, Bob Kane (Batman created by), Bill Finger (Batman created by), Jerry Siegel (Superman created by), Joe Shuster (Superman created by), William Moulton Marston (character created by: Wonder Woman)', 'Ben Affleck, Henry Cavill, Amy Adams, Jesse Eisenberg', 'Fearing that the actions of Superman are left unchecked, Batman takes on the Man of Steel, while the world wrestles with what kind of a hero it really needs.', 'English', 'USA', '14 wins & 33 nominations.', 'a:3:{i:0;a:2:{s:6:\"Source\";s:23:\"Internet Movie Database\";s:5:\"Value\";s:6:\"6.4/10\";}i:1;a:2:{s:6:\"Source\";s:15:\"Rotten Tomatoes\";s:5:\"Value\";s:3:\"29%\";}i:2;a:2:{s:6:\"Source\";s:10:\"Metacritic\";s:5:\"Value\";s:6:\"44/100\";}}', '44', '6.4', '645,241', '25 Nov 2016', '$330,360,194', 'Cruel and Unusual, Warner Bros., Syncopy, Atlas Entertainment, DC Entertainment', 'N/A', 'True', '2021-05-07 08:32:48', '2021-05-07 08:32:48'),
(406, '2 Fast 2 Furious', '2003', 'tt0322259', 'movie', 'https://m.media-amazon.com/images/M/MV5BMzExYjcyYWMtY2JkOC00NDUwLTg2OTgtMDI3MGY2OWQzMDE2XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', 'PG-13', '06 Jun 2003', '107 min', 'Action, Crime, Thriller', 'John Singleton', 'Gary Scott Thompson (characters), Michael Brandt (story), Derek Haas (story), Gary Scott Thompson (story), Michael Brandt (screenplay), Derek Haas (screenplay)', 'Paul Walker, Tyrese Gibson, Eva Mendes, Cole Hauser', 'Former cop Brian O\'Conner is called upon to bust a dangerous criminal and he recruits the help of a former childhood friend and street racer who has a chance to redeem himself.', 'English, Spanish', 'USA, Germany', '4 wins & 13 nominations.', 'a:3:{i:0;a:2:{s:6:\"Source\";s:23:\"Internet Movie Database\";s:5:\"Value\";s:6:\"5.9/10\";}i:1;a:2:{s:6:\"Source\";s:15:\"Rotten Tomatoes\";s:5:\"Value\";s:3:\"36%\";}i:2;a:2:{s:6:\"Source\";s:10:\"Metacritic\";s:5:\"Value\";s:6:\"38/100\";}}', '38', '5.9', '254,018', '01 Jan 2015', '$127,154,901', 'Universal/Universal Int', 'N/A', 'True', '2021-05-07 08:32:58', '2021-05-07 08:32:58'),
(407, 'The Fast and the Furious', '2001', 'tt0232500', 'movie', 'https://m.media-amazon.com/images/M/MV5BNzlkNzVjMDMtOTdhZC00MGE1LTkxODctMzFmMjkwZmMxZjFhXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX300.jpg', 'PG-13', '22 Jun 2001', '106 min', 'Action, Crime, Thriller', 'Rob Cohen', 'Ken Li (magazine article \"Racer X\"), Gary Scott Thompson (screen story), Gary Scott Thompson (screenplay), Erik Bergquist (screenplay), David Ayer (screenplay)', 'Paul Walker, Vin Diesel, Michelle Rodriguez, Jordana Brewster', 'Los Angeles police officer Brian O\'Conner must decide where his loyalty really lies when he becomes enamored with the street racing world he has been sent undercover to destroy.', 'English, Spanish', 'USA, Germany', '11 wins & 18 nominations.', 'a:3:{i:0;a:2:{s:6:\"Source\";s:23:\"Internet Movie Database\";s:5:\"Value\";s:6:\"6.8/10\";}i:1;a:2:{s:6:\"Source\";s:15:\"Rotten Tomatoes\";s:5:\"Value\";s:3:\"53%\";}i:2;a:2:{s:6:\"Source\";s:10:\"Metacritic\";s:5:\"Value\";s:6:\"58/100\";}}', '58', '6.8', '352,173', '10 Sep 2015', '$144,533,925', 'Universal Pictures, Neal H. Moritz Productions, Original Film', 'N/A', 'True', '2021-05-07 08:33:07', '2021-05-07 08:33:07'),
(408, 'The Invincible Iron Man', '2007', 'tt0903135', 'movie', 'https://m.media-amazon.com/images/M/MV5BOGRmZDg1YjMtMDA5YS00OTFjLTgyMjQtNDgzNTIyNzAwZDg0L2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SX300.jpg', 'PG-13', '23 Jan 2007', '83 min', 'Animation, Action, Adventure, Fantasy, Sci-Fi', 'Patrick Archibald, Jay Oliva, Frank Paur', 'Avi Arad (story), Greg Johnson (story), Craig Kyle (story), Greg Johnson (screenplay), Stan Lee (comic book), Don Heck (comic book), Larry Lieber (comic book), Jack Kirby (comic book)', 'Marc Worden, Gwendoline Yeo, Fred Tatasciore, Rodney Saulsberry', 'When a cocky industrialist\'s efforts to raise an ancient Chinese temple leads him to be seriously wounded and captured by enemy forces, he must use his ideas for a revolutionary power armor in order to fight back as a superhero.', 'English', 'USA', '2 nominations.', 'a:2:{i:0;a:2:{s:6:\"Source\";s:23:\"Internet Movie Database\";s:5:\"Value\";s:6:\"5.9/10\";}i:1;a:2:{s:6:\"Source\";s:15:\"Rotten Tomatoes\";s:5:\"Value\";s:3:\"46%\";}}', 'N/A', '5.9', '6,962', '06 Oct 2016', 'N/A', 'Marvel Studios Inc., Marvel Enterprises', 'N/A', 'True', '2021-05-07 08:33:14', '2021-05-07 08:33:14'),
(409, 'Star Wars: Episode IV - A New Hope', '1977', 'tt0076759', 'movie', 'https://m.media-amazon.com/images/M/MV5BNzVlY2MwMjktM2E4OS00Y2Y3LWE3ZjctYzhkZGM3YzA1ZWM2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg', 'PG', '25 May 1977', '121 min', 'Action, Adventure, Fantasy, Sci-Fi', 'George Lucas', 'George Lucas', 'Mark Hamill, Harrison Ford, Carrie Fisher, Peter Cushing', 'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire\'s world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious Darth Vader.', 'English', 'USA, UK', 'Won 6 Oscars. Another 57 wins & 29 nominations.', 'a:3:{i:0;a:2:{s:6:\"Source\";s:23:\"Internet Movie Database\";s:5:\"Value\";s:6:\"8.6/10\";}i:1;a:2:{s:6:\"Source\";s:15:\"Rotten Tomatoes\";s:5:\"Value\";s:3:\"92%\";}i:2;a:2:{s:6:\"Source\";s:10:\"Metacritic\";s:5:\"Value\";s:6:\"90/100\";}}', '90', '8.6', '1,245,210', '10 Oct 2016', '$460,998,507', 'Lucasfilm Ltd.', 'N/A', 'True', '2021-05-07 08:33:22', '2021-05-07 08:33:22'),
(411, 'Rogue One: A Star Wars Story 1', '2016 1', 'tt3748528 1', 'movie 1', 'https://m.media-amazon.com/images/M/MV5BMjEwMzMxODIzOV5BMl5BanBnXkFtZTgwNzg3OTAzMDI@._V1_SX300.jpg 1', 'PG-13 1', '16 Dec 2016 1', '133 min 1', 'Action, Adventure, Sci-Fi 1', 'Gareth Edwards 1', 'Chris Weitz (screenplay by), Tony Gilroy (screenplay by), John Knoll (story by), Gary Whitta (story by), George Lucas (based on characters created by) 1', 'Felicity Jones, Diego Luna, Alan Tudyk, Donnie Yen 1', 'The daughter of an Imperial scientist joins the Rebel Alliance in a risky move to steal the plans for the Death Star. 1', 'English 1', 'USA 1', 'Nominated for 2 Oscars. Another 24 wins & 81 nominations. 1', 'a:3:{i:0;a:2:{s:6:\"Source\";s:23:\"Internet Movie Database\";s:5:\"Value\";s:8:\"7.8/10 1\";}i:1;a:2:{s:6:\"Source\";s:15:\"Rotten Tomatoes\";s:5:\"Value\";s:5:\"84% 1\";}i:2;a:2:{s:6:\"Source\";s:10:\"Metacritic\";s:5:\"Value\";s:8:\"65/100 1\";}}', '65 1', '7.8 1', '563,671 1', '24 Mar 2017 1', '$532,177,324 1', 'Lucasfilm Ltd. 1', 'N/A 1', 'True 1', '2021-05-07 08:34:58', '2021-05-07 01:37:30'),
(412, 'Naruto: Shippûden', '2007–2017', 'tt0988824', 'series', 'https://m.media-amazon.com/images/M/MV5BMTE5NzIwMGUtYTE1MS00MDUxLTgyZjctOWVkZDAxM2M4ZWQ4XkEyXkFqcGdeQXVyNjc2NjA5MTU@._V1_SX300.jpg', 'TV-PG', '28 Oct 2009', '24 min', 'Animation, Action, Adventure, Comedy, Drama, Fantasy', 'N/A', 'Masashi Kishimoto', 'Junko Takeuchi, Maile Flanagan, Kate Higgins, Chie Nakamura', 'Naruto Uzumaki, is a loud, hyperactive, adolescent ninja who constantly searches for approval and recognition, as well as to become Hokage, who is acknowledged as the leader and strongest of all ninja in the village.', 'English, Japanese', 'Japan', '2 wins & 10 nominations.', 'a:1:{i:0;a:2:{s:6:\"Source\";s:23:\"Internet Movie Database\";s:5:\"Value\";s:6:\"8.6/10\";}}', 'N/A', '8.6', '87,977', NULL, NULL, NULL, NULL, 'True', '2021-05-07 08:48:03', '2021-05-07 08:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, 1, '$2y$10$mhNBS1INn6SZQjAi24kkyeYZeRkd8ZRNu8zqepF8Xa.DnlDbADfhq', NULL, '2021-05-05 00:09:04', '2021-05-05 00:09:04'),
(2, 'user', 'user@user.com', NULL, 0, '$2y$10$AS5xXkbxwvuUzG0yZ61/suLwkXRsrL44BjE8XjLnseh1MrFkT/UZC', NULL, '2021-05-05 00:09:04', '2021-05-05 00:09:04'),
(3, 'derdah', 'derdah@derdah.com', NULL, NULL, '$2y$10$KG5K/Hw2Q/9VIZ.d1PDPEezRIuXORL1oQmstg.WEfU2IhmQ12hIiS', NULL, '2021-05-05 00:14:43', '2021-05-05 00:14:43'),
(4, 'bonzqbet', 'bonzqbet@bonzqbet.com', NULL, NULL, '$2y$10$zYHf0m7fFk1AXx8PnvFrPOELJcm75QX/HIsooeADqoQJ5/Eo4WzXu', NULL, '2021-05-07 01:49:33', '2021-05-07 01:49:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=414;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
