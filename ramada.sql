-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 07:39 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramada`
--

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `epfnum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `chequenum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`epfnum`, `reason`, `amount`, `chequenum`, `created_at`, `updated_at`) VALUES
('emp1', 'Mother', 25000.00, 'cheque01', '2018-11-27 12:08:39', '2018-11-27 12:08:39'),
('emp2', 'Father', 25000.00, 'cheque02', '2018-11-27 12:08:59', '2018-11-27 12:08:59'),
('emp3', 'Employee', 50000.00, 'cheque03', '2018-11-27 12:09:19', '2018-11-27 12:09:19'),
('emp4', 'Father', 25000.00, 'cheque04', '2018-11-27 12:09:35', '2018-11-27 12:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventId` int(10) UNSIGNED NOT NULL,
  `eventName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eventDate` date DEFAULT NULL,
  `venue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalExpenses` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventId`, `eventName`, `creator`, `eventDate`, `venue`, `startTime`, `endTime`, `details`, `totalExpenses`, `created_at`, `updated_at`) VALUES
(1, 'Event 01', 'Admin', '2018-11-05', 'At the Hotel', '05:00:00', '13:00:00', 'Event 01 details', NULL, '2018-11-27 12:15:17', '2018-11-27 12:15:17'),
(2, 'Event 02', 'Admin', '2019-11-21', 'Venue 02', '05:00:00', '15:00:00', 'Event 02 Details', NULL, '2018-11-27 12:19:50', '2018-11-27 12:19:52'),
(3, 'Event 03', 'Admin', '2018-11-12', 'Venue 03', '05:00:00', '18:00:00', 'Event 03 Details', NULL, '2018-11-27 12:19:55', '2018-11-27 12:19:56'),
(4, 'Event 04', 'Admin', '2018-11-05', 'Venue 04', '05:00:00', '18:00:00', 'Event 04 Details', NULL, '2018-11-27 12:19:58', '2018-11-27 12:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `event_expenses`
--

CREATE TABLE `event_expenses` (
  `eventId` int(10) UNSIGNED NOT NULL,
  `expenseDetail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalExpenses` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endTime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_items`
--

CREATE TABLE `event_items` (
  `eventId` int(10) UNSIGNED NOT NULL,
  `itemName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalExpenses` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startTime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endTime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` double NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chequenum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `amount`, `category`, `chequenum`, `discription`, `created_at`, `updated_at`) VALUES
(1, 100000, 'Donation', 'incomecheque01', 'Income Description 01', '2018-11-27 12:28:03', '2018-11-27 12:28:03'),
(2, 50000, 'Other', 'incomecheque02', 'Income Description 02', '2018-11-27 12:29:14', '2018-11-27 12:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(10) UNSIGNED NOT NULL,
  `epfnum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chequenum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guarantor01` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guarantor02` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restamount` double(8,2) NOT NULL DEFAULT '16500.00',
  `timeleft` int(11) NOT NULL DEFAULT '10',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `epfnum`, `chequenum`, `guarantor01`, `guarantor02`, `restamount`, `timeleft`, `status`, `created_at`, `updated_at`) VALUES
(1, 'emp01', 'loancheque01', 'emp3', 'emp4', 14850.00, 9, 'active', '2018-11-27 12:30:08', '2018-11-27 12:33:33'),
(2, 'emp2', 'loanchque02', 'emp3', 'emp4', 16500.00, 10, 'active', '2018-11-27 12:32:46', '2018-11-27 12:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `epfNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`epfNumber`, `firstName`, `lastName`, `gender`, `department`, `email`, `contact`, `address`) VALUES
('emp1', 'Madushan', 'Rathnayake', 'Male', 'Department1', 'madushansachintha@gmail.com', '071 9247080', '104/A,Ganepola,kotugoda'),
('emp2', 'Moniru', 'Wijesuriya', 'Male', 'Department2', 'moniru@gmail.com', '0719247034', 'Address 01'),
('emp3', 'Kushan', 'Abeywikrama', 'Male', 'Department1', 'kushan@gmail.com', '0776485724', 'Address03'),
('emp4', 'Pasan', 'Ekanayake', 'Male', 'Department3', 'pasan@gmail.com', '0719247089', 'Address04');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2018_11_15_090054_create_members_table', 1),
(40, '2018_11_17_161546_create_donations_table', 1),
(41, '2018_11_17_161927_create_total_balances_table', 1),
(42, '2018_11_22_134608_create_payments_table', 1),
(43, '2018_11_23_033910_create_events_table', 1),
(44, '2018_11_23_115624_create_event_items_table', 1),
(45, '2018_11_23_115707_create_event_expenses_table', 1),
(46, '2018_11_26_095556_create_messages_table', 1),
(47, '2018_11_26_110834_create_incomes_table', 1),
(48, '2018_11_26_155443_create_loans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `firstName`, `lastName`, `email`, `contact`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Sachintha', 'Rathnayake', 'madushansachintha@gmail.com', '0719247080', 100.00, '2018-11-27 12:23:58', '2018-11-27 12:23:59'),
(2, 'Asanka ', 'Nirwan', 'asanka@gmail.com', '0711234567', 50.00, '2018-11-27 12:26:34', '2018-11-27 12:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `total_balances`
--

CREATE TABLE `total_balances` (
  `id` int(10) UNSIGNED NOT NULL,
  `total` double(8,2) NOT NULL DEFAULT '0.00',
  `operationvalue` double(8,2) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `total_balances`
--

INSERT INTO `total_balances` (`id`, `total`, `operationvalue`, `type`, `created_at`, `updated_at`) VALUES
(1, 100000.00, 0.00, 'Initialize', '2018-11-27 12:03:28', '2018-11-27 12:03:31'),
(2, 75000.00, 25000.00, 'Expense', '2018-11-27 12:08:39', '2018-11-27 12:08:39'),
(3, 50000.00, 25000.00, 'Expense', '2018-11-27 12:08:59', '2018-11-27 12:08:59'),
(4, 0.00, 50000.00, 'Expense', '2018-11-27 12:09:19', '2018-11-27 12:09:19'),
(5, -25000.00, 25000.00, 'Expense', '2018-11-27 12:09:35', '2018-11-27 12:09:35'),
(6, 75000.00, 100000.00, 'Income', '2018-11-27 12:28:03', '2018-11-27 12:28:03'),
(7, 125000.00, 50000.00, 'Income', '2018-11-27 12:29:14', '2018-11-27 12:29:14'),
(8, 110000.00, 15000.00, 'Expense', '2018-11-27 12:30:08', '2018-11-27 12:30:08'),
(9, 95000.00, 15000.00, 'Expense', '2018-11-27 12:32:46', '2018-11-27 12:32:46'),
(10, 96650.00, 1650.00, 'Income', '2018-11-27 12:33:33', '2018-11-27 12:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$.m3jTNbKq/kOdRRTanUl/OkdbZxIGgyJ6MbaZd7MitaqMgegTc5k6', 'Admin', 'u8tKNCjDFeidQ18rONIe7cpL3SsWLuRthQLkwM90qmitsf29Noz9sF7EDq9K', NULL, NULL),
(2, 'Secretary', 'secretary@gmail.com', NULL, '$2y$10$vW0VeDEG.M1F3TQwGPXHiesy2q0IblfQA/0L5dUxRc6lGwsy.uto.', 'Secretary', NULL, NULL, NULL),
(3, 'President', 'president@gmail.com', NULL, '$2y$10$Jghc7Zn0B5PQgTV76d0rveUuwSVtoZ3xI.z9kxbdkZov/elUE4bNy', 'President', NULL, NULL, NULL),
(4, 'VicePresident', 'vicepresident@gmail.com', NULL, '$2y$10$6B6Wu7HPJseTjGNVsK1P8urrjzz6t26U2zXeaNih3n8K3sqeXvkhG', 'VicePresident', NULL, NULL, NULL),
(5, 'Treasure', 'treasure@gmail.com', NULL, '$2y$10$jxjMNvZtVVYqOtdKlslcE.ZHKzat.l4M98Pk9anTLhTl4SVSFtGoW', 'Treasure', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`epfnum`),
  ADD UNIQUE KEY `donations_epfnum_unique` (`epfnum`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventId`),
  ADD UNIQUE KEY `events_eventid_unique` (`eventId`);

--
-- Indexes for table `event_expenses`
--
ALTER TABLE `event_expenses`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `event_items`
--
ALTER TABLE `event_items`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `incomes_id_unique` (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`epfNumber`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_balances`
--
ALTER TABLE `total_balances`
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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_expenses`
--
ALTER TABLE `event_expenses`
  MODIFY `eventId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_items`
--
ALTER TABLE `event_items`
  MODIFY `eventId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `total_balances`
--
ALTER TABLE `total_balances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
