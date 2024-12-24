-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2024 at 01:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_Name` varchar(255) NOT NULL,
  `last_Name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_Name`, `last_Name`, `gender`, `username`, `password`, `create_at`) VALUES
(4, 'Koem', 'chea', 'Male', 'koemchea12@gmail.com', '1234567', '2024-11-11 23:35:47'),
(5, 'seng', 'panha', 'Female', 'senpanha998@gmail.com', 'nhapan123', '2024-11-12 20:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `book_list`
--

CREATE TABLE `book_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `aboutBook` text NOT NULL,
  `admin` varchar(255) NOT NULL,
  `source_file` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_list`
--

INSERT INTO `book_list` (`id`, `name`, `author`, `aboutBook`, `admin`, `source_file`, `image_path`, `create_at`) VALUES
(85, 'Improper Riemann Integrals', 'Ioannis M. Roussos', 'គ្មាន', 'លឹម គឹមជា', '../source file/Improper Riemann Integrals ( PDFDrive ).pdf', '../image/Screenshot 2024-11-18 105125.png', '2024-11-18 10:54:33'),
(87, 'Mathematics Part I', 'មិនស្គាល់ឈ្មោះ', 'គ្មាន', 'លឹម គឹមជា', '../source file/NCERT Class 12 Mathematics Part 1 ( PDFDrive ).pdf', '../image/Screenshot 2024-11-18 105958.png', '2024-11-18 11:00:48'),
(88, 'CBSE Board Mathematics', 'មិនស្គាល់ឈ្មោះ', 'គ្មាន', 'លឹម គឹមជា', '../source file/CBSE Mathematics for Class XII - Part I ( PDFDrive ).pdf', '../image/Screenshot 2024-11-18 110118.png', '2024-11-18 11:04:45'),
(89, 'Mathematics for Class XII', 'Dinesh Khattar', 'គ្មាន', 'លឹម គឹមជា', '../source file/CBSE Mathematics for Class XII - Part I ( PDFDrive ).pdf', '../image/Screenshot 2024-11-18 110535.png', '2024-11-18 11:09:50'),
(90, 'Analysis I', 'Terence Tao', 'គ្មាន', 'លឹម គឹមជា', '../source file/Analysis I ( PDFDrive ).pdf', '../image/Screenshot 2024-11-18 111127.png', '2024-11-18 11:13:09'),
(91, 'Analysis II', 'Terence Tao', 'គ្មាន', 'លឹម គឹមជា', '../source file/Analysis II ( PDFDrive ).pdf', '../image/Screenshot 2024-11-18 111333.png', '2024-11-18 11:14:42'),
(92, 'Problems and Solutions in Math-Finance', 'Wiley', 'គ្មាន', 'លឹម គឹមជា', '../source file/Problems_and_Solutions_in_Mathematical_Finance_Equity_Derivatives.pdf', '../image/Screenshot 2024-11-18 111524.png', '2024-11-18 11:17:39'),
(94, 'Raiden Shogun : The God of Eternity', 'Neth Vireak', 'A tale of a woman who was participated in the Archon war and then she hide herself from reality', 'Loem Koemchea', '../source file/Shogun.pdf', '../image/1000.jpg', '2024-11-18 11:30:33'),
(95, 'Math', 'Neth Vireak', 'គ្មាន', 'លឹម គឹមជា', '../source file/Thomas Richards - Math, Grade 7-Spectrum (2008).pdf', '../image/Screenshot 2024-11-18 121027.png', '2024-11-18 13:01:34'),
(98, 'Math WorkBook 7', 'Beverly Nance', 'គ្មាន', 'លឹម គឹមជា', '../source file/Beverly_Nance_Math_Workbook_Grade_7_Classroom_Complete_Press_Ltd.pdf', '../image/Screenshot 2024-11-18 151622.png', '2024-11-18 15:17:32'),
(99, 'Time series Analysis', 'Wiley', 'គ្មាន', 'លឹម គឹមជា', '../source file/Time series analysis ( PDFDrive ).pdf', '../image/Screenshot 2024-11-18 151818.png', '2024-11-18 15:21:43'),
(100, 'Precalculus', 'Ron Larson', 'គ្មាន', 'សេង បញ្ញា', '../source file/Precalculus ( PDFDrive ).pdf', '../image/Screenshot 2024-11-18 152336.png', '2024-11-18 15:25:30'),
(101, 'The How and Why of One Variable Calculus', 'Amol Sasane', 'គ្មាន', 'លឹម គឹមជា', '../source file/The How and Why of One Variable Calculus ( PDFDrive ).pdf', '../image/Screenshot 2024-11-18 152711.png', '2024-11-18 15:28:37'),
(102, 'CK-12 Calculus', 'CK-12 Team', 'គ្មាន', 'លឹម គឹមជា', '../source file/CK-12 Calculus, Volume 2 ( PDFDrive ).pdf', '../image/Screenshot 2024-11-18 152956.png', '2024-11-18 15:33:18'),
(103, 'Integral Calculus​ Made Easy', 'Firewall Media Team', 'គ្មាន', 'ណិត​ វីរៈ', '../source file/Integral Calculus Made Easy ( PDFDrive ).pdf', '../image/Screenshot 2024-11-18 153447.png', '2024-11-18 15:38:29'),
(105, 'ព្រះអាទិត្យថ្មីរះលើផែនដីចាស់', 'សួន សុរិន្ទ', '​គ្មាន', 'លឹម គឹមជា', '../source file/ព្រះអាទិត្យថ្មី_រះលើផែនដីចាស់.pdf', '../image/Screenshot 2024-11-18 155023.png', '2024-11-18 16:00:53'),
(106, 'កុលាបប៉ៃលិន', 'ញ៉ុក ថែម', 'ស្នេហ៍ដ៏ស្មោះស្ម័គ្ររបស់ចៅចិត្រដែលជាកម្មករត្បូងជាមួយឃុននារីដែលជាថៅកែស្រីរបស់ខ្លួននៅឯខេត្តប៉ៃលិន', 'លឹម គឹមជា', '../source file/កុលាបប៉ៃលិន.pdf', '../image/Screenshot 2024-11-18 154039.png', '2024-11-18 16:18:25'),
(107, 'Critical Thinking for Math', 'មិនស្គាល់ឈ្មោះ', 'គ្មាន', 'លឹម គឹមជា', '../source file/Spectrum_Spectrum_critical_thinking_for_math_Grade_7_Carson_Dellosa.pdf', '../image/Screenshot 2024-11-18 170441.png', '2024-11-18 17:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_Name` varchar(255) NOT NULL,
  `last_Name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `book` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_Name`, `last_Name`, `gender`, `book`, `create_at`) VALUES
(1, 'Reak', 'Neth', 'Female', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-10 08:37:18'),
(2, 'koemchea', 'loem', 'Female', 'នឹកស្នេហ៍នឹកទីក្រុង', '2024-11-10 19:17:36'),
(3, 'chea', 'koem', 'Female', 'នឹកស្នេហ៍', '2024-08-10 19:40:09'),
(4, 'Koem', 'Chea', 'female', 'បាត់ដំបងបាត់ស្នេហ៍', '2024-11-10 20:05:40'),
(5, 'Koem', 'Chea', 'female', 'បាត់ដំបងបាត់ស្នេហ៍', '2024-11-10 20:07:10'),
(6, 'Koem', 'Chea', 'male', 'បាត់ដំបងបាត់ស្នេហ៍', '2024-11-10 20:10:01'),
(7, 'Koem', 'Chea', 'female', 'បាត់ដំបងបាត់ស្នេហ៍', '2024-11-10 20:22:33'),
(8, 'Koem', 'Chea', 'male', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-10 20:23:31'),
(9, 'Koem', 'Chea', 'female', 'បាត់ដំបងបាត់ស្នេហ៍', '2024-11-10 22:24:31'),
(10, 'Koem', 'Chea', 'other', 'បាត់ដំបងបាត់ស្នេហ៍', '2024-11-11 00:24:00'),
(11, 'Panha', 'Seng', 'female', 'បាត់ដំបងបាត់ស្នេហ៍', '2024-11-11 09:11:54'),
(12, 'Panha', 'Seng', 'male', 'Morax: The lord of GEO', '2024-11-11 09:15:16'),
(13, 'Panha', 'Chea', 'male', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-11 23:26:05'),
(14, 'Vireak', 'Neth', 'male', 'Morax: The lord of GEO', '2024-11-12 08:21:13'),
(15, 'Neth', 'Vireak', 'male', 'Morax: The lord of GEO', '2024-11-12 08:21:53'),
(16, 'Sovann', 'Panha', 'male', 'ទឹកជ្រោះខកចិត្ត', '2024-11-12 08:21:56'),
(17, 'Neth', 'Vireak', 'male', 'បាត់ដំបងបាត់ស្នេហ៍', '2024-11-12 08:22:40'),
(18, 'gech', 'soriya', 'female', 'ទឹកជ្រោះខកចិត្ត', '2024-11-12 08:24:54'),
(19, 'Sovann', 'panha', 'male', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-12 09:10:20'),
(20, 'sovann', 'panha', 'male', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-12 09:11:13'),
(21, 'sovann', 'panha', 'male', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-12 09:12:02'),
(22, 'Koem', 'Chea', 'female', 'Morax : The lord of GEO', '2024-11-16 16:13:50'),
(23, 'Koem', 'Chea', 'female', 'Morax : The lord of GEO', '2024-11-16 16:52:18'),
(24, 'Koem', 'Chea', 'male', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-16 17:01:43'),
(25, 'Koem', 'Chea', 'male', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-16 17:07:04'),
(26, 'Koem', 'Chea', 'male', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-16 17:09:45'),
(27, 'Koem', 'Chea', 'male', 'ទឹកជ្រោះខកចិត្ត', '2024-11-16 21:54:26'),
(28, 'Koem', 'Chea', 'male', 'ទឹកជ្រោះខកចិត្ត', '2024-11-16 21:55:36'),
(29, 'Panha', 'Seng', 'female', 'ទឹកជ្រោះខកចិត្ត', '2024-11-16 21:58:33'),
(30, 'Panha', 'Seng', 'male', 'ទឹកជ្រោះខកចិត្ត', '2024-11-16 21:59:39'),
(31, 'Koem', 'Chea', 'female', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-16 22:09:50'),
(32, 'Koem', 'Chea', 'female', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-16 22:10:06'),
(33, 'Koem', 'Chea', 'male', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-16 22:12:17'),
(34, 'Panha', 'Seng', 'female', 'រដូវក្តៅរដូវផ្តើមស្នេហ៍', '2024-11-16 22:13:04'),
(35, 'Koem', 'Chea', 'male', 'ទឹកជ្រោះខកចិត្ត', '2024-11-16 22:16:24'),
(36, 'Koem', 'Chea', 'male', 'ទឹកជ្រោះខកចិត្ត', '2024-11-16 22:18:42'),
(37, 'Koem', 'Chea', 'male', 'Raiden Shogun : The God of Eternity', '2024-11-17 22:23:00'),
(38, 'Koem', 'Chea', 'male', 'Applied Analysis', '2024-11-18 10:47:28'),
(39, 'Koem', 'Chea', 'male', 'Analysis I', '2024-11-18 12:09:18'),
(40, 'Koem', 'Chea', 'male', 'Analysis I', '2024-11-18 12:59:08'),
(41, 'Koem', 'Chea', 'male', 'Raiden Shogun : The God of Eternity', '2024-11-18 16:56:05'),
(42, 'Panha', 'Seng', 'male', 'Precalculus', '2024-11-18 17:01:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_list`
--
ALTER TABLE `book_list`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book_list`
--
ALTER TABLE `book_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
