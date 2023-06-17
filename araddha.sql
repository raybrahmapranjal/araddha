-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2023 at 07:00 AM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u355669643_araddha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(224) NOT NULL,
  `username` varchar(224) NOT NULL,
  `email` varchar(224) NOT NULL,
  `password` varchar(224) NOT NULL,
  `usertype` varchar(224) NOT NULL,
  `joindate` date NOT NULL,
  `jointime` time NOT NULL,
  `status` int(224) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `email`, `password`, `usertype`, `joindate`, `jointime`, `status`) VALUES
(1, 'araddha@admin', 'xyz@gmail.com', 'a6a27312a5f48ba734aff7289e722885607ddf424c046be26b4751594dfb4390e4d118c3d3b02b33cf6c5cd5d9966297af6330d9509ace9dd3db1de1e86c0b25', 'admin', '0000-00-00', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(224) NOT NULL,
  `cat_name` varchar(224) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `status`) VALUES
(3, 'Agriculture Item', '1'),
(4, 'Medicinal Plants', '1'),
(8, 'Indoor Plants', '1'),
(15, 'Forest Plants', '1'),
(16, 'Fruits Plants', '1'),
(19, 'Pots', '1'),
(20, 'Ornamental Plants', '1'),
(21, 'Outdoor Plants', '1'),
(22, 'Bonsai Plants', '1'),
(23, 'Flower Plants', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(224) NOT NULL,
  `user_id` varchar(224) NOT NULL,
  `os` varchar(224) NOT NULL,
  `browser` varchar(224) NOT NULL,
  `ip` varchar(224) NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES
(1, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-04-27', '15:38:31'),
(2, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-01', '12:48:20'),
(3, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-01', '19:53:26'),
(4, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-02', '22:53:29'),
(5, '1', 'Windows 10', 'Chrome', '::1', '2023-05-03', '10:47:07'),
(6, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-03', '11:15:18'),
(7, '1', 'Windows 7', 'Firefox', '::1', '2023-05-04', '13:12:24'),
(8, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-04', '22:17:20'),
(9, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-05', '11:16:01'),
(10, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-05', '14:31:08'),
(11, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-09', '10:09:04'),
(12, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-09', '15:23:46'),
(13, '1', 'Windows 7', 'Firefox', '127.0.0.1', '2023-05-10', '09:44:29'),
(14, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-10', '15:13:11'),
(15, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-10', '15:30:05'),
(16, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-16', '11:30:44'),
(17, '1', 'Windows 10', 'Chrome', '202.168.85.112', '2023-05-18', '11:39:57'),
(18, '1', 'Windows 10', 'Chrome', '202.168.85.112', '2023-05-18', '15:52:13'),
(19, '1', 'Windows 10', 'Chrome', '202.168.85.112', '2023-05-18', '16:11:50'),
(20, '1', 'Windows 10', 'Chrome', '202.168.85.112', '2023-05-18', '17:01:07'),
(21, '1', 'Windows 10', 'Chrome', '2409:408a:8d90:cd5c:d01d:152d:a491:9c98', '2023-05-19', '10:49:27'),
(22, '1', 'Windows 10', 'Chrome', '103.199.202.88', '2023-05-19', '12:20:32'),
(23, '1', 'Windows 10', 'Chrome', '103.199.202.88', '2023-05-19', '14:43:14'),
(24, '1', 'Windows 7', 'Firefox', '103.199.202.88', '2023-05-19', '14:57:12'),
(25, '1', 'Android', 'Handheld Browser', '103.199.202.88', '2023-05-19', '15:54:33'),
(26, '1', 'Windows 10', 'Chrome', '103.199.202.43', '2023-05-20', '11:31:09'),
(27, '1', 'Windows 10', 'Chrome', '202.168.85.236', '2023-05-21', '15:29:06'),
(28, '1', 'Windows 10', 'Chrome', '202.168.85.236', '2023-05-21', '16:35:26'),
(29, '1', 'Windows 10', 'Chrome', '202.168.85.236', '2023-05-21', '16:35:27'),
(30, '1', 'Windows 10', 'Chrome', '202.168.85.236', '2023-05-21', '16:56:43'),
(31, '1', 'Windows 10', 'Chrome', '202.168.85.236', '2023-05-21', '17:06:49'),
(32, '1', 'Windows 10', 'Chrome', '202.168.84.161', '2023-05-21', '21:38:46'),
(33, '1', 'Windows 10', 'Chrome', '103.199.202.69', '2023-05-23', '10:22:45'),
(34, '1', 'Windows 10', 'Firefox', '27.122.14.46', '2023-05-23', '10:34:34'),
(35, '1', 'Windows 7', 'Firefox', '103.199.202.69', '2023-05-23', '10:46:08'),
(36, '1', 'Windows 10', 'Chrome', '2409:4065:c3b:c803:2d70:570d:ebc9:52d2', '2023-06-06', '22:34:13'),
(37, '1', 'Windows 10', 'Chrome', '103.199.202.177', '2023-06-08', '14:39:33'),
(38, '1', 'Windows 10', 'Chrome', '2409:40e6:10:8c2c:38f6:12b8:71fd:24ea', '2023-06-13', '15:22:32'),
(39, '1', 'Windows 10', 'Chrome', '2409:40e6:8:5f6e:8d3f:2d34:4606:d9c6', '2023-06-13', '18:41:53'),
(40, '1', 'Windows 10', 'Chrome', '2409:40e6:b:c4d3:f415:3660:f4ec:95ab', '2023-06-14', '10:15:56'),
(41, '1', 'Windows 10', 'Chrome', '2409:408a:8100:a006:b076:dba6:1f41:790e', '2023-06-14', '18:30:26'),
(42, '1', 'Windows 7', 'Firefox', '103.199.202.0', '2023-06-15', '10:38:16'),
(43, '1', 'Windows 10', 'Chrome', '103.199.202.0', '2023-06-15', '12:17:14'),
(44, '1', 'Windows 7', 'Firefox', '103.199.202.241', '2023-06-16', '10:16:29'),
(45, '1', 'Windows 7', 'Firefox', '103.199.202.27', '2023-06-17', '12:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `plant_id` int(224) NOT NULL,
  `cat_id` int(224) NOT NULL,
  `subCat_id` int(224) NOT NULL,
  `category` varchar(224) NOT NULL,
  `subcategories` varchar(224) NOT NULL,
  `plantname` varchar(224) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image1` varchar(224) NOT NULL,
  `image2` varchar(224) NOT NULL,
  `image3` varchar(224) NOT NULL,
  `price` varchar(224) NOT NULL,
  `discount_price` varchar(224) NOT NULL,
  `status` varchar(224) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`plant_id`, `cat_id`, `subCat_id`, `category`, `subcategories`, `plantname`, `description`, `image1`, `image2`, `image3`, `price`, `discount_price`, `status`, `date_uploaded`) VALUES
(87, 19, 77, 'Pots', 'Ceramic Pots', 'Ceramic Pot / Black Lined', 'Beautiful Black Lined Pot \r\nType- Ceramic\r\nBest suit in Indoor/ Office/ Conference Hall/Study Rooms/ Library rooms.', '../images/index/e0a92af0c211c8596eaccfbc3b50ab389e9965b9-a8ca-43b8-b73d-4521655ff6c5.jpg', '../images/index/e0a92af0c211c8596eaccfbc3b50ab389e9965b9-a8ca-43b8-b73d-4521655ff6c5.jpg', '../images/index/e0a92af0c211c8596eaccfbc3b50ab389e9965b9-a8ca-43b8-b73d-4521655ff6c5.jpg', '400', '300', '1', '2023-06-13'),
(88, 19, 77, 'Pots', 'Ceramic Pots', 'Meditation Special Ceramic Pot ', 'Meditation Special Ceramic Pot \r\nBest for prayer rooms\r\nBeautiful Design', '../images/index/20a63aacc5641e265cf1c738251596b9dc05658b-972d-48cc-b88b-00d9e1ed7478-removebg-preview.jpg', '../images/index/20a63aacc5641e265cf1c738251596b9dc05658b-972d-48cc-b88b-00d9e1ed7478-removebg-preview.jpg', '../images/index/20a63aacc5641e265cf1c738251596b9dc05658b-972d-48cc-b88b-00d9e1ed7478-removebg-preview.jpg', '400', '450', '1', '2023-06-13'),
(89, 19, 77, 'Pots', 'Ceramic Pots', 'Golden strip ceramic pot', 'Golden strip ceramic pot\r\nType-Ceramic\r\n', '../images/index/c8b33c84e553380892d02505ddb595481ac3a600-1bf6-424e-be2f-039c02a19147.jpg', '../images/index/c8b33c84e553380892d02505ddb595481ac3a600-1bf6-424e-be2f-039c02a19147.jpg', '../images/index/c8b33c84e553380892d02505ddb595481ac3a600-1bf6-424e-be2f-039c02a19147.jpg', '400', '450', '1', '2023-06-13'),
(90, 19, 77, 'Pots', 'Ceramic Pots', 'White ceramic pot', 'Animal Designed ceramic pot', '../images/index/1530f766457e928845b63caced82958d1c00c36d-7304-4a00-93ee-ca4af35665e8-removebg-preview.png', '../images/index/1530f766457e928845b63caced82958d1c00c36d-7304-4a00-93ee-ca4af35665e8-removebg-preview.png', '../images/index/1530f766457e928845b63caced82958d1c00c36d-7304-4a00-93ee-ca4af35665e8-removebg-preview.png', '450', '400', '1', '2023-06-13'),
(91, 19, 77, 'Pots', 'Ceramic Pots', 'Saffron princess pot', 'A Saffron lady princess pot is beautiful to behold.', '../images/index/828ea1f3d2dfad92f4f2d2e051911c7c2c3253c2-a9fb-4954-98b0-1f3637181911-removebg-preview.png', '../images/index/828ea1f3d2dfad92f4f2d2e051911c7c2c3253c2-a9fb-4954-98b0-1f3637181911-removebg-preview.png', '../images/index/828ea1f3d2dfad92f4f2d2e051911c7c2c3253c2-a9fb-4954-98b0-1f3637181911-removebg-preview.png', '350', '400', '1', '2023-06-13'),
(92, 19, 77, 'Pots', 'Ceramic Pots', 'Lady Head Pot', 'A Lady Head Pot.', '../images/index/92726705fa0fbfb84f563b1163be5d232e35971a-ac92-452f-b515-7541d31d4da8-removebg-preview.png', '../images/index/92726705fa0fbfb84f563b1163be5d232e35971a-ac92-452f-b515-7541d31d4da8-removebg-preview.png', '../images/index/92726705fa0fbfb84f563b1163be5d232e35971a-ac92-452f-b515-7541d31d4da8-removebg-preview.png', '450', '500', '1', '2023-06-13'),
(93, 19, 77, 'Pots', 'Ceramic Pots', 'Blackmud Pot', 'A Blackmud Pot looks like a glass which is used to plant the flower or any kind of small herbs.', '../images/index/e3816a8149545ce093c4bfd4f6905d897975de88-04c0-450e-a3a2-292983bc1988.jpg', '../images/index/e3816a8149545ce093c4bfd4f6905d897975de88-04c0-450e-a3a2-292983bc1988.jpg', '../images/index/e3816a8149545ce093c4bfd4f6905d897975de88-04c0-450e-a3a2-292983bc1988.jpg', '300', '350', '1', '2023-06-13'),
(94, 19, 77, 'Pots', 'Ceramic Pots', 'Brown-line Pot', 'A Brown line pot has a line on the neck of the pot with color brown.', '../images/index/19ef2617b0a4a455e09e6ba77d1460f02022eedd-c651-4464-8161-ec3570a185e8.jpg', '../images/index/19ef2617b0a4a455e09e6ba77d1460f02022eedd-c651-4464-8161-ec3570a185e8.jpg', '../images/index/19ef2617b0a4a455e09e6ba77d1460f02022eedd-c651-4464-8161-ec3570a185e8.jpg', '299', '399', '1', '2023-06-13'),
(95, 19, 77, 'Pots', 'Ceramic Pots', 'Pumpkin Pot', 'A pumpkin lookalike pot used to grown the plants inside the house. It\'s also used decorate the house because of it\'s beautiful looks.\r\n', '../images/index/6fb7f289b0dc5afb728a263d7350af0fbd67b082-960a-495b-95bb-6297697a25c7-removebg-preview.png', '../images/index/6fb7f289b0dc5afb728a263d7350af0fbd67b082-960a-495b-95bb-6297697a25c7-removebg-preview.png', '../images/index/6fb7f289b0dc5afb728a263d7350af0fbd67b082-960a-495b-95bb-6297697a25c7-removebg-preview.png', '450', '500', '1', '2023-06-13'),
(96, 19, 77, 'Pots', 'Ceramic Pots', 'Kissing kitty Pot', 'A kissing Pot is used for decoration as well as to plant the small herbs.', '../images/index/de2d6a5f0e3186ca7eaa80b69b25fc72436ed6cd-63c8-4e20-829a-e2040de984b9-removebg-preview.png', '../images/index/de2d6a5f0e3186ca7eaa80b69b25fc72436ed6cd-63c8-4e20-829a-e2040de984b9-removebg-preview.png', '../images/index/de2d6a5f0e3186ca7eaa80b69b25fc72436ed6cd-63c8-4e20-829a-e2040de984b9-removebg-preview.png', '399', '300', '1', '2023-06-13'),
(97, 19, 77, 'Pots', 'Ceramic Pots', 'White-Green Pot', 'A White-Green pot comes with a handle.', '../images/index/571ad8b37f68975da369a1bc1973a92e2d5ec814-a65e-4496-bacc-f76a7c55d6ca-removebg-preview.png', '../images/index/571ad8b37f68975da369a1bc1973a92e2d5ec814-a65e-4496-bacc-f76a7c55d6ca-removebg-preview.png', '../images/index/571ad8b37f68975da369a1bc1973a92e2d5ec814-a65e-4496-bacc-f76a7c55d6ca-removebg-preview.png', '250', '290', '1', '2023-06-13'),
(98, 19, 77, 'Pots', 'Ceramic Pots', 'Pink Combo Pot', 'A Pink Combo Pot is used to plant indoor plants.', '../images/index/08dc5828b3083818755cf592f116702779f94978-816f-40f8-9672-3b5d75aef123.jpg', '../images/index/08dc5828b3083818755cf592f116702779f94978-816f-40f8-9672-3b5d75aef123.jpg', '../images/index/08dc5828b3083818755cf592f116702779f94978-816f-40f8-9672-3b5d75aef123.jpg', '299', '399', '1', '2023-06-13'),
(99, 19, 77, 'Pots', 'Ceramic Pots', 'Combo Deer Design Pot', 'A Combo Deer Design Pot is double pot to grow plants.', '../images/index/ae7277de44aa43f6018e9a20de7410dbfeff948a-8b82-4fe6-bfd6-385546429ee0-removebg-preview.png', '../images/index/ae7277de44aa43f6018e9a20de7410dbfeff948a-8b82-4fe6-bfd6-385546429ee0-removebg-preview.png', '../images/index/ae7277de44aa43f6018e9a20de7410dbfeff948a-8b82-4fe6-bfd6-385546429ee0-removebg-preview.png', '599', '1000', '1', '2023-06-13'),
(100, 19, 83, 'Pots', 'Plastic Pots', '14 Inch Rectangular Plastic Pots for Flower, Plants Pots ', '14 Inch Rectangular Plastic Pots for Flower, Plants Pots is found in all colours.', '../images/index/60275f0ef54687954e15ce7b86cafcdddownload (1).jpg', '../images/index/60275f0ef54687954e15ce7b86cafcdddownload (1).jpg', '../images/index/60275f0ef54687954e15ce7b86cafcdddownload (1).jpg', '650', '700', '1', '2023-05-23'),
(101, 19, 83, 'Pots', 'Plastic Pots', 'Modern Flower Pot', 'Modern Flower Pot is used to plant flowers and it\'s found in all colours.', '../images/index/9afd5a494729ce20a367cd8ac0cb15c6download.jpg', '../images/index/9afd5a494729ce20a367cd8ac0cb15c6download.jpg', '../images/index/9afd5a494729ce20a367cd8ac0cb15c6download.jpg', '28', '35', '1', '2023-05-23'),
(102, 8, 71, 'indoor plants', 'Indoor Plants', 'Adenium Plant', 'Adenium is a genus of flowering plants in the family Apocynaceae first described as a genus in 1819. It is native to Africa and the Arabian Peninsula.', '../images/index/d052d8e333817bce2409c9a6f1d56e6aAdonium_Plant 2.jpg', '../images/index/d052d8e333817bce2409c9a6f1d56e6aAdonium_Plant 2.jpg', '../images/index/d052d8e333817bce2409c9a6f1d56e6aAdonium_Plant 2.jpg', '140', '100', '1', '2023-06-15'),
(103, 8, 71, 'indoor plants', 'Indoor Plants', 'Aglaonema Plant', 'Aglaonema is a genus of flowering plants in the arum family, Araceae. They are native to tropical and subtropical regions of Asia and New Guinea. They are known commonly as Chinese evergreens. ', '../images/index/ba4345cfa613cb1fec680edad588f692Aglonima_Plant.jpg', '../images/index/ba4345cfa613cb1fec680edad588f692Aglonima_Plant.jpg', '../images/index/ba4345cfa613cb1fec680edad588f692Aglonima_Plant.jpg', '200', '150', '1', '2023-06-15'),
(104, 8, 71, 'indoor plants', 'Indoor Plants', 'Money Plant ', 'Epipremnum aureum commonly known as Money Plant is a species in the arum family Araceae, native to Mo\'orea in the Society Islands of French Polynesia. ', '../images/index/273fc797359be5853d30fdfa725e83a3Money Plant2.jpg', '../images/index/273fc797359be5853d30fdfa725e83a3Money Plant2.jpg', '../images/index/273fc797359be5853d30fdfa725e83a3Money Plant2.jpg', '450', '400', '1', '2023-06-15'),
(105, 16, 88, 'Fruits Plants', 'Abiu Fruit Plants', 'Abiu Fruit Plant', 'Pouteria caimito, the abiu, is a tropical fruit tree originated in the Amazonian region of South America. It grows to an average of 10 metres high, and can grow as high as 35 metres under good conditions.', '../images/index/cdda78ed3a3d9cf0aa578df8820e6e78Abiu Fruit Plants2.jpg', '../images/index/cdda78ed3a3d9cf0aa578df8820e6e78Abiu Fruit Plants2.jpg', '../images/index/cdda78ed3a3d9cf0aa578df8820e6e78Abiu Fruit Plants2.jpg', '399', '299', '1', '2023-06-16'),
(106, 16, 88, 'Fruits Plants', 'Fruit Plants', 'Anjeer fruit plant', 'Fig Tree, Anjeer Fruit or Ficus carica is a gynodioecious, deciduous tree or large shrub that grows up to 7–10 m (23–33 ft) tall, with smooth white bark.', '../images/index/58dabc1c5c8a99a24c99766ca9ac9dedAnjeer.Fig Plants2.jpg', '../images/index/58dabc1c5c8a99a24c99766ca9ac9dedAnjeer.Fig Plants2.jpg', '../images/index/58dabc1c5c8a99a24c99766ca9ac9dedAnjeer.Fig Plants2.jpg', '500', '450', '1', '2023-06-16'),
(107, 19, 80, 'Pots', 'LED Pots', 'Buddha LED Pot', 'Fortuna beautiful buddha design pot with LED Light and aesthetic green faux plant for Home, Bedroom, office, Gift Decoration, Material ....', '../images/index/47302d7b2ba88fad071c531792475b68Buddha LED Pot Rs 1200 (2).png', '../images/index/47302d7b2ba88fad071c531792475b68Buddha LED Pot Rs 1200 (1).png', '../images/index/47302d7b2ba88fad071c531792475b68Buddha LED Pot Rs 1200 (3).png', '1250', '1300', '1', '2023-06-14'),
(108, 8, 71, 'indoor plants', 'Indoor Plants', 'Anthurium plants', 'Anthurium is a genus of about 1,000 species of flowering plants, the largest genus of the arum family, Araceae. General common names include anthurium, tailflower, flamingo flower, and laceleaf.', '../images/index/8d6420cc7c7417150ca389de82f8d76bAnthurium plant 2.jpg', '../images/index/8d6420cc7c7417150ca389de82f8d76bAnthurium Plant2.jpg', '../images/index/8d6420cc7c7417150ca389de82f8d76bAnthurium Plant2.jpg', '140', '100', '1', '2023-06-15'),
(109, 8, 71, 'indoor plants', 'Indoor Plants', 'Philodendron Birkin Plants', 'Philodendron Birkin Plants are one of the most loved and widely grown indoor plant species in the world, but what is better than a regular philodendron is a variegated one. The Philodendron Birkin has a stunning dark green colour with elegant white variegations resembling fish bone. Birkin plant\'s leaves are glossy, heart shaped, ovate and bring an interesting charm to any space.', '../images/index/d2561e9ab26283fad37f5bc6db2b0c8bBirkin Plant2.jpg', '../images/index/d2561e9ab26283fad37f5bc6db2b0c8bBirkin Plant2.jpg', '../images/index/d2561e9ab26283fad37f5bc6db2b0c8bBirkin Plant2.jpg', '140', '99', '1', '2023-06-15'),
(110, 8, 71, 'indoor plants', 'Indoor Plants', '\'Black Prince\' Rubber Plant ', '\'Black Prince\' Rubber Plant or Ficus Elastica Burgundy has very dark green glossy leaves, the stems and underside of the leaves have a burgundy tone. It is one of the best air purifying plants. It is great at removing toxins from the air, and will survive infrequent watering and low light.', '../images/index/3d2de50f48224555a887f05ab05e06fdBlack Rubber Plant2.jpg', '../images/index/3d2de50f48224555a887f05ab05e06fdBlack Rubber Plant2.jpg', '../images/index/3d2de50f48224555a887f05ab05e06fdBlack Rubber Palm2.jpg', '299', '250', '1', '2023-06-15'),
(111, 8, 71, 'indoor plants', 'Indoor Plants', 'Erica Plants', 'Erica is a genus of roughly 857 species of flowering plants in the family Ericaceae. The English common names heath and heather are shared by some closely related genera of similar appearance. ', '../images/index/f8c19b6714db9d9dcb3e24117779227bErica Plant2.jpg', '../images/index/f8c19b6714db9d9dcb3e24117779227bErica Plant2.jpg', '../images/index/f8c19b6714db9d9dcb3e24117779227bErica Plant2.jpg', '150', '99', '1', '2023-06-15'),
(112, 8, 71, 'indoor plants', 'Indoor Plants', 'Jade plants', 'Crassula ovata, commonly known as jade plant, lucky plant, money plant or money tree, is a succulent plant with small pink or white flowers that is native to the KwaZulu-Natal and Eastern Cape provinces of South Africa, and Mozambique; it is common as a houseplant worldwide.', '../images/index/b97f785fc039c5c28408cc1730ab20deJade_Plant2.jpg', '../images/index/b97f785fc039c5c28408cc1730ab20deJade_Plant2.jpg', '../images/index/b97f785fc039c5c28408cc1730ab20deJade_Plant2.jpg', '99', '50', '1', '2023-06-15'),
(113, 8, 71, 'indoor plants', 'Indoor Plants', 'Kalanchoe plants', 'Kalanchoe is a genus that includes more than 100 species of plants native to Madagascar. Kalanchoe plants are known for their succulent, oval-shaped, often scallop-edged green leaves. Some varieties develop red leaves or leaf edges with sufficient sunlight.', '../images/index/a95d5a8cb2a742df810705046bdff845Kalancho Plant.jpg', '../images/index/a95d5a8cb2a742df810705046bdff845Kalancho Plant.jpg', '../images/index/bdd6ce0d771ac0ce95c9d5d1075f394cKalancho Plant.jpg', '150', '120', '1', '2023-06-15'),
(114, 8, 71, 'indoor plants', 'Indoor Plants', 'Kalabati Plants', 'Canna indica, commonly known as Indian shot/Kalabati plants, African arrowroot, edible canna, purple arrowroot, Sierra Leone arrowroot, is a plant species in the family Cannaceae. It is native to much of South America, Central America, the West Indies, and Mexico. ', '../images/index/30a288bc8af1a3bfeaca00d793c954acKolaboti Flower2.jpg', '../images/index/30a288bc8af1a3bfeaca00d793c954acKolaboti Flower2.jpg', '../images/index/30a288bc8af1a3bfeaca00d793c954acKolaboti Flower2.jpg', '150', '80', '1', '2023-06-15'),
(115, 8, 71, 'indoor plants', 'Indoor Plants', 'Motordana Plants', '', '../images/index/9f058b08124d0c7676576c404007dbe0Motordana Plant2.jpg', '../images/index/9f058b08124d0c7676576c404007dbe0Motordana Plant2.jpg', '../images/index/9f058b08124d0c7676576c404007dbe0Motordana Plant2.jpg', '120', '70', '1', '2023-06-15'),
(116, 8, 70, 'indoor plants', 'Cacti', 'Indoor Cactus \'Opuntia Microdasys\' (Bunny Ears or Angel Wings Cactus)', 'Opuntia Albispina cactus, aka the angel wing cactus or bunny ears cactus, is a member of the prickly pear family. This type of indoor cactus plant grows evenly spaced clutches of hairs rather than spines.', '../images/index/ed29aa1fd339711872f6595c8b17114dcactus bunny.jpg', '../images/index/ed29aa1fd339711872f6595c8b17114dcactus bunny.jpg', '../images/index/ed29aa1fd339711872f6595c8b17114dcactus bunny.jpg', '130', '150', '1', '2023-06-15'),
(117, 8, 71, 'indoor plants', 'Indoor Plants', 'Peperomania plants', 'Peperomia is one of the two large genera of the family Piperaceae. It is estimated that there are at least over 1,000 species, occurring in all tropical and subtropical regions of the world. They are concentrated in northern South America and Central America, but are also found in Africa, southern Asia, and Oceania.', '../images/index/999151f0f25a04f0a145bc603defeb62Peparmia Plant2.jpg', '../images/index/999151f0f25a04f0a145bc603defeb62Peparmia Plant2.jpg', '../images/index/999151f0f25a04f0a145bc603defeb62Peparmia Plant2.jpg', '50', '80', '1', '2023-06-15'),
(118, 8, 71, 'indoor plants', 'Indoor Plants', 'Succulent plants', 'Succulent plants are drought-resistant plants in which the leaves, stem, or roots have become more than usually fleshy by the development of water-storing tissue.', '../images/index/1d233cc55ef2f1258054ea7dc1a37072Saculant Plant (2).jpg', '../images/index/1d233cc55ef2f1258054ea7dc1a37072Saculant Plant-2.jpg', '../images/index/1d233cc55ef2f1258054ea7dc1a37072Saculant Plant-2.jpg', '50', '99', '1', '2023-06-15'),
(119, 8, 71, 'indoor plants', 'Indoor Plants', 'Zebra Succulent plants', 'Haworthia, also called zebra cactus, pearl, star window, and cushion aloe, is a large genus of small, slow-growing succulent plants that resemble mini aloe plants with rosettes of fleshy green leaves generously covered with white pearly warts or bands.', '../images/index/d6045700de64ee4ef2acc07006f26d61Zebra Succulent2.jpg', '../images/index/d6045700de64ee4ef2acc07006f26d61Zebra Succulent2.jpg', '../images/index/d6045700de64ee4ef2acc07006f26d61Zebra Succulent2.jpg', '70', '120', '1', '2023-06-15'),
(120, 8, 71, 'indoor plants', 'Indoor Plants', 'ZZ plants', 'Zamioculcas is genus of flowering plants in the family Araceae, containing the single species Zamioculcas zamiifolia. It is a tropical perennial plant, native to eastern Africa, from southern Kenya to northeastern South Africa.', '../images/index/7ca743bf72b2f09c8dd0a8ad65d8cf25ZZ Plant2.jpg', '../images/index/7ca743bf72b2f09c8dd0a8ad65d8cf25ZZ Plant2.jpg', '../images/index/7ca743bf72b2f09c8dd0a8ad65d8cf25ZZ Plant2.jpg', '120', '150', '1', '2023-06-15'),
(125, 22, 92, 'Bonsai Plants', 'Indoor decoration bonsai plants', 'Peepal bonsai plants', 'Peepal Bonsai Plant is good ornamantel decorative indoor plant for house and offices use.', '../images/index/d874bfb79f856ef1db3f6e80fd81010dPeepal Plants2.jpg', '../images/index/d874bfb79f856ef1db3f6e80fd81010dPeepal Plants2.jpg', '../images/index/d874bfb79f856ef1db3f6e80fd81010dPeepal Plants2.jpg', '70', '90', '1', '2023-06-15'),
(126, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Allamanda Pink Flowers', 'The Allamanda Blanchetii ‘Pink’ produces glossy pink, trumpet shaped flowers all year round. The flowers with green foliage look awesome.', '../images/index/f8a4189ff52c4e16c4231525208adc80Allamunda Pink2.jpg', '../images/index/f8a4189ff52c4e16c4231525208adc80Allamunda Pink2.jpg', '../images/index/f8a4189ff52c4e16c4231525208adc80Allamunda Pink2.jpg', '150', '130', '1', '2023-06-16'),
(127, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Begum Bahar Flowers', 'Begum Bahar flower is a flowering plant that produces gorgeous purple colored flowers.', '../images/index/cfd291fe2ba8b086a5b389f93a3526e2Begumbahar_Plant2.jpg', '../images/index/cfd291fe2ba8b086a5b389f93a3526e2Begumbahar_Plant2.jpg', '../images/index/cfd291fe2ba8b086a5b389f93a3526e2Begumbahar_Plant2.jpg', '170', '150', '1', '2023-06-16'),
(128, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Champa Flowers', 'These plants are known locally as Champa or sometimes as the tree of Plumeria. These plants belong to the dogbane family. ', '../images/index/833583b552196dd591e1379a69b6408fChampa Plant2.jpg', '../images/index/833583b552196dd591e1379a69b6408fChampa Plant2.jpg', '../images/index/833583b552196dd591e1379a69b6408fChampa Plant2.jpg', '140', '130', '1', '2023-06-16'),
(129, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Crossandra Plants', 'Crossandra is a genus of plants in the family Acanthaceae, comprising 54 species that occur in Africa, Madagascar, Arabia and the Indian subcontinent. Some species, especially Crossandra infundibuliformis, are cultivated for their brightly colored flowers. ', '../images/index/c72b52550629686ad4d93cf00955518fCrosendra Plant2.jpg', '../images/index/c72b52550629686ad4d93cf00955518fCrosendra Plant2.jpg', '../images/index/c72b52550629686ad4d93cf00955518fCrosendra Plant2.jpg', '120', '90', '1', '2023-06-16'),
(130, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Gandhoraj Flowers', 'Gardenia jasminoides, commonly known as gardenia and cape jasmine or Gandhoraj Flowers, is an evergreen flowering plant in the coffee family Rubiaceae.', '../images/index/d8c567aae6feb7dbad574f3ff77a27ddGandhoraj_Flower2.jpg', '../images/index/d8c567aae6feb7dbad574f3ff77a27ddGandhoraj_Flower2.jpg', '../images/index/d8c567aae6feb7dbad574f3ff77a27ddGandhoraj_Flower2.jpg', '110', '100', '1', '2023-06-16'),
(132, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Joba Flowers', 'Hibiscus also known as Joba flowers is a genus of flowering plants in the mallow family, Malvaceae. The genus is quite large, comprising several hundred species that are native to warm temperate, subtropical and tropical regions throughout the world.', '../images/index/87ab4ef7a918e361a7070800d5370ca0Mini_Joba_Flower2.jpg', '../images/index/87ab4ef7a918e361a7070800d5370ca0Mini_Joba_Flower2.jpg', '../images/index/87ab4ef7a918e361a7070800d5370ca0Mini_Joba_Flower2.jpg', '250', '120', '1', '2023-06-16'),
(133, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Pink Mussaenda flowers', 'Pink Mussaenda flowers blooms in clusters of tubular, red-orange flowers that are about 2 inches in length in the late summer, fall and winter. Sunlight, Full sun. Watering, Medium.', '../images/index/5d2f4f2a737b49a000c6c73715360223Pink Mashunda Plant2.jpg', '../images/index/5d2f4f2a737b49a000c6c73715360223Pink Mashunda Plant2.jpg', '../images/index/5d2f4f2a737b49a000c6c73715360223Pink Mashunda Plant2.jpg', '130', '230', '1', '2023-06-16'),
(134, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Mussaenda Red Flowers', 'Mussaenda Red is an evergreen shrub native to Asia and Africa. Firstly, they have distinct looks. And they produce stunning-colored flowers.', '../images/index/0f8673e2972beda36f044e5b8386078bRed Mashunda Plant2.jpg', '../images/index/0f8673e2972beda36f044e5b8386078bRed Mashunda Plant2.jpg', '../images/index/0f8673e2972beda36f044e5b8386078bRed Mashunda Plant2.jpg', '140', '160', '1', '2023-06-16'),
(135, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Rongon Flowers', 'Ixora coccinea or Rongon flowers is a species of flowering plant in the family Rubiaceae. It is a common flowering shrub native to Southern India, Bangladesh, and Sri Lanka. It has become one of the most popular flowering shrubs in South Florida gardens and landscapes. It is the national flower of Suriname.', '../images/index/6ca47833ab14d64258a0934cdddf2a7dRongon Plant2.jpg', '../images/index/6ca47833ab14d64258a0934cdddf2a7dRongon Plant2.jpg', '../images/index/6ca47833ab14d64258a0934cdddf2a7dRongon Plant2.jpg', '100', '150', '1', '2023-06-16'),
(136, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Shefali Flowers', 'Nyctanthes arbor-tristis also known as Shefali flowers is a species of Nyctanthes native to South Asia and Southeast Asia. It is commonly known as Night blooming jasmine, tree of sadness, tree of sorrow, coral jasmine, Hengra Bubar, seri gading or Parijata.', '../images/index/7bd8475dabbf27bf68dbaaef59e8325bShefali Plant2.jpg', '../images/index/7bd8475dabbf27bf68dbaaef59e8325bShefali Plant2.jpg', '../images/index/7bd8475dabbf27bf68dbaaef59e8325bShefali Plant2.jpg', '45', '80', '1', '2023-06-16'),
(137, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Tecoma Red Flowers', 'Tecoma \'Red Hot\' has drought tolerance, a compact habit, and unique flower color. Flowers open crimson red and age to intense orange with a yellow center.', '../images/index/110edea505bf4fb18a35404ab19e42f0Tikuma Red2.jpg', '../images/index/110edea505bf4fb18a35404ab19e42f0Tikuma Red2.jpg', '../images/index/110edea505bf4fb18a35404ab19e42f0Tikuma Red2.jpg', '125', '155', '1', '2023-06-16'),
(138, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Tecoma yellow Flowers', 'Tecoma stans is a species of flowering perennial shrub in the trumpet vine family, Bignoniaceae, that is native to the Americas. Common names include yellow trumpetbush, yellow bells, yellow elder, ginger Thomas.', '../images/index/c7cc2e02680a9c8aa4871b374f7136cbTikuma Yellow2.jpg', '../images/index/c7cc2e02680a9c8aa4871b374f7136cbTikuma Yellow2.jpg', '../images/index/c7cc2e02680a9c8aa4871b374f7136cbTikuma Yellow2.jpg', '13', '155', '1', '2023-06-16'),
(139, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Euphorbia Flowers', 'Euphorbia is a very large and diverse genus of flowering plants, commonly called spurge, in the family Euphorbiaceae. \"Euphorbia\" is sometimes used in ordinary English to collectively refer to all members of Euphorbiaceae, not just to members of the genus.', '../images/index/123773639e0a96c573f6ce5176d531bbUforbia Plant2.jpg', '../images/index/123773639e0a96c573f6ce5176d531bbUforbia Plant2.jpg', '../images/index/123773639e0a96c573f6ce5176d531bbUforbia Plant2.jpg', '150', '200', '1', '2023-06-16'),
(140, 23, 93, 'Flower Plants', 'Flower Sapplings', 'White Mussaenda Flowers', 'Mussaenda White is an evergreen shrub native to Asia. Firstly, they have distinct looks. And they produce stunning-colored flowers.', '../images/index/ce8087f8af98fba2d83431874eb1c90aWhite Mashunda Plant2.jpg', '../images/index/ce8087f8af98fba2d83431874eb1c90aWhite Mashunda Plant2.jpg', '../images/index/ce8087f8af98fba2d83431874eb1c90aWhite Mashunda Plant2.jpg', '155', '200', '1', '2023-06-16'),
(141, 15, 94, 'Forest Plants', 'Forest Trees Sapplings', 'Gulmohar Trees', 'Delonix regia or Gulmohar tree is a species of flowering plant in the bean family Fabaceae, subfamily Caesalpinioideae native to Madagascar. It is noted for its fern-like leaves and flamboyant display of orange-red flowers over summer. ', '../images/index/be8cb95c223f0455b3d80c8827d5db21Gulmohar2.jpg', '../images/index/be8cb95c223f0455b3d80c8827d5db21Gulmohar2.jpg', '../images/index/be8cb95c223f0455b3d80c8827d5db21Gulmohar2.jpg', '60', '70', '1', '2023-06-16'),
(142, 15, 94, 'Forest Plants', 'Forest Trees Sapplings', 'Kadamba Trees', 'Neolamarckia cadamba, with English common names burflower-tree, laran, and Leichhardt pine, and called kadam or cadamba locally, is an evergreen, tropical tree native to South and Southeast Asia. The genus name honours French naturalist Jean-Baptiste Lamarck.', '../images/index/51dbf8f2619a1455468a861446cd2508kadamba2.jpg', '../images/index/51dbf8f2619a1455468a861446cd2508kadamba2.jpg', '../images/index/51dbf8f2619a1455468a861446cd2508kadamba2.jpg', '45', '65', '1', '2023-06-16'),
(143, 15, 94, 'Forest Plants', 'Forest Trees Sapplings', 'Peepal Tree Sapplings', 'Ficus religiosa or sacred fig/Peepal tree is a species of fig native to the Indian subcontinent and Indochina that belongs to Moraceae, the fig or mulberry family.', '../images/index/4aecaef7603a9c63be30eca934e130e9PEEPAL tree2.jpg', '../images/index/4aecaef7603a9c63be30eca934e130e9PEEPAL tree2.jpg', '../images/index/4aecaef7603a9c63be30eca934e130e9PEEPAL tree2.jpg', '65', '70', '1', '2023-06-16'),
(144, 16, 88, 'Fruits Plants', 'Fruit Plants', 'Buddhas\'s Hand Fruit Trees Sapplings', 'The Buddha\'s hand fruit is a symbol of happiness, longevity, and good fortune. It is also a traditional temple offering and a New Year\'s gift.', '../images/index/b4c66f8da6fce5932be252abf1c69eaeBuddhas-Hand Fruit PLANT2.jpg', '../images/index/b4c66f8da6fce5932be252abf1c69eaeBuddhas-Hand Fruit PLANT2.jpg', '../images/index/b4c66f8da6fce5932be252abf1c69eaeBuddhas-Hand Fruit PLANT2.jpg', '230', '300', '1', '2023-06-16'),
(145, 16, 88, 'Fruits Plants', 'Fruit Plants', 'Mulberry Fruit Plants', 'Morus, a genus of flowering plants in the family Moraceae, consists of diverse species of deciduous trees commonly known as mulberries, growing wild and under cultivation in many temperate world regions.', '../images/index/ad2ba16a35c0fcca1793ee928f581f7aMalberi Fruir Plant2.jpg', '../images/index/ad2ba16a35c0fcca1793ee928f581f7aMalberi Fruir Plant2.jpg', '../images/index/ad2ba16a35c0fcca1793ee928f581f7aMalberi Fruir Plant2.jpg', '230', '320', '1', '2023-06-16'),
(146, 19, 79, 'Pots', 'Hanging Pots', 'Yellow Hanging Pot', '', '../images/index/f95edad897e9b3bb4ea36262133687f8Hanging pot2.jpg', '../images/index/f95edad897e9b3bb4ea36262133687f8Hanging pot2.jpg', '../images/index/f95edad897e9b3bb4ea36262133687f8Hanging pot2.jpg', '50', '80', '1', '2023-06-16'),
(147, 4, 73, 'Medicinal plants', 'Medicinal Herbs', 'Allspice Plants', 'Allspice, also known as Jamaica pepper, myrtle pepper, pimenta, or pimento, is the dried unripe berry of Pimenta dioica, a midcanopy tree native to the Greater Antilles, southern Mexico, and Central America, now cultivated in many warm parts of the world.', '../images/index/8887032f6f75e899be44c7765ce46bcball_spice2.jpg', '../images/index/8887032f6f75e899be44c7765ce46bcball_spice2.jpg', '../images/index/8887032f6f75e899be44c7765ce46bcball_spice2.jpg', '80', '60', '1', '2023-06-16'),
(148, 4, 73, 'Medicinal plants', 'Medicinal Herbs', 'Dalchini Plants', 'Cinnamomum verum, called true cinnamon tree or Ceylon cinnamon tree, is a small evergreen tree belonging to the family Lauraceae, native to Sri Lanka. The inner bark of several other Cinnamomum species are also used to make cinnamon.', '../images/index/565710fc3a0fef0bafbfa4401abc4bbadalchini_plant2.jpg', '../images/index/565710fc3a0fef0bafbfa4401abc4bbadalchini_plant2.jpg', '../images/index/565710fc3a0fef0bafbfa4401abc4bbadalchini_plant2.jpg', '80', '50', '1', '2023-06-16'),
(149, 4, 73, 'Medicinal plants', 'Medicinal Herbs', 'Lawang/clove Plants', 'Cloves are the aromatic flower buds of a tree in the family Myrtaceae, Syzygium aromaticum. They are native to the Maluku Islands in Indonesia, and are commonly used as a spice, flavoring, or fragrance in consumer products, such as toothpaste, soaps, or cosmetics.', '../images/index/0297e4433eedef630551cbab7cc1de4alawang plant2.jpg', '../images/index/0297e4433eedef630551cbab7cc1de4alawang plant2.jpg', '../images/index/0297e4433eedef630551cbab7cc1de4alawang plant2.jpg', '50', '40', '1', '2023-06-16'),
(150, 4, 73, 'Medicinal plants', 'Medicinal Herbs', 'Neem Plants', 'Azadirachta indica, commonly known as margosa, neem, nimtree or Indian lilac, is a tree in the mahogany family Meliaceae. It is one of two species in the genus Azadirachta.', '../images/index/46eca8a45030d92639e8ad362bef1735Neem Plants2.jpg', '../images/index/46eca8a45030d92639e8ad362bef1735Neem Plants2.jpg', '../images/index/46eca8a45030d92639e8ad362bef1735Neem Plants2.jpg', '70', '55', '1', '2023-06-16'),
(151, 20, 96, 'Ornamental Plants', 'Ornamental Plants Sapplings', 'Croton Plants', 'Croton is an extensive plant genus in the spurge family, Euphorbiaceae. The plants of this genus were described and introduced to Europeans by Georg Eberhard Rumphius. The common names for this genus are rushfoil and croton, but the latter also refers to Codiaeum variegatum.', '../images/index/1b8a040f2a4af248017761eb388ff0aeCrotton Plant2.jpg', '../images/index/1b8a040f2a4af248017761eb388ff0aeCrotton Plant2.jpg', '../images/index/1b8a040f2a4af248017761eb388ff0aeCrotton Plant2.jpg', '55', '45', '1', '2023-06-16'),
(152, 20, 96, 'Ornamental Plants', 'Ornamental Plants Sapplings', 'Deodar Plant Sapplings', 'Cedrus deodara, the deodar cedar, Himalayan cedar, or deodar, is a species of cedar native to the Himalayas.', '../images/index/82ae9aabfb63f3d0a50c7066c445b9f7Debdaru_Plants2.jpg', '../images/index/82ae9aabfb63f3d0a50c7066c445b9f7Debdaru_Plants2.jpg', '../images/index/82ae9aabfb63f3d0a50c7066c445b9f7Debdaru_Plants2.jpg', '80', '70', '1', '2023-06-16'),
(153, 20, 96, 'Ornamental Plants', 'Ornamental Plants Sapplings', 'Foxtail Palm Plants', 'Wodyetia bifurcata, the foxtail palm, is a species of palm in the family Arecaceae, native to Queensland, Australia.', '../images/index/3cbb1512a6d2d4d71bad01093da3f77dFOXTAIL2.jpg', '../images/index/3cbb1512a6d2d4d71bad01093da3f77dFOXTAIL2.jpg', '../images/index/3cbb1512a6d2d4d71bad01093da3f77dFOXTAIL2.jpg', '70', '50', '1', '2023-06-16'),
(154, 20, 96, 'Ornamental Plants', 'Ornamental Plants Sapplings', 'Ganga Jamuna Plants', '', '../images/index/69b4cddad6f1b12b032b3e2687b57ae5Ganga Jamuna Plant2.jpg', '../images/index/69b4cddad6f1b12b032b3e2687b57ae5Ganga Jamuna Plant2.jpg', '../images/index/69b4cddad6f1b12b032b3e2687b57ae5Ganga Jamuna Plant2.jpg', '80', '65', '1', '2023-06-16'),
(155, 20, 96, 'Ornamental Plants', 'Ornamental Plants Sapplings', 'Arkeria Plants', '', '../images/index/a64c5bc84282031ad16735bf38424e1aOrkoria Plant2.jpg', '../images/index/a64c5bc84282031ad16735bf38424e1aOrkoria Plant2.jpg', '../images/index/a64c5bc84282031ad16735bf38424e1aOrkoria Plant2.jpg', '90', '70', '1', '2023-06-16'),
(156, 20, 96, 'Ornamental Plants', 'Ornamental Plants Sapplings', 'Pencil Pine Plants', 'Pencil Pine Cypress is an evergreen conifer with a very narrow, pencil-shaped crown.', '../images/index/537a49e41c01bdd5f3b9bdd4c2dc6d7dPencil Jhaw2.jpg', '../images/index/537a49e41c01bdd5f3b9bdd4c2dc6d7dPencil Jhaw2.jpg', '../images/index/537a49e41c01bdd5f3b9bdd4c2dc6d7dPencil Jhaw2.jpg', '1500', '1300', '1', '2023-06-16'),
(157, 20, 96, 'Ornamental Plants', 'Ornamental Plants Sapplings', 'Rexona Palm Plants', 'Rexona palm is an Air Purifier indoor plant. It is one of the most widely used palms for bright interiors.', '../images/index/13708acb4a2e9eca50a7f920c6c8b9c3rexona palm2.jpg', '../images/index/13708acb4a2e9eca50a7f920c6c8b9c3rexona palm2.jpg', '../images/index/13708acb4a2e9eca50a7f920c6c8b9c3rexona palm2.jpg', '700', '500', '1', '2023-06-16'),
(158, 20, 96, 'Ornamental Plants', 'Ornamental Plants Sapplings', 'Silver Thuja/Morpankhi Plants', '', '../images/index/81f67b3c2cd0f7caff97586859751963Silver Jhaw2.jpg', '../images/index/81f67b3c2cd0f7caff97586859751963Silver Jhaw2.jpg', '../images/index/81f67b3c2cd0f7caff97586859751963Silver Jhaw2.jpg', '300', '250', '1', '2023-06-16'),
(159, 20, 96, 'Ornamental Plants', 'Ornamental Plants Sapplings', 'Variagated Ficus Plants', 'Ficus Triangularis Variegata, commonly known as the “variegated ficus triangularis”, is a rare ornamental plant that has bright green variegated leaves with a cream-yellow border.', '../images/index/6991605bc832cb7475d455b3b2be76faVericated_Ficus2.jpg', '../images/index/6991605bc832cb7475d455b3b2be76faVericated_Ficus2.jpg', '../images/index/6991605bc832cb7475d455b3b2be76faVericated_Ficus2.jpg', '200', '150', '1', '2023-06-16'),
(160, 23, 93, 'Flower Plants', 'Flower Sapplings', 'Madhobi Lota Flowers', 'Ornamental & Shade Trees Madhobi-lota flowers is a large climbing shrub with woody stem and extensive branches.', '../images/index/5451bc88a84a1c9ca4ffbc5a22321a33Madhobilota_Flower2.jpg', '../images/index/5451bc88a84a1c9ca4ffbc5a22321a33Madhobilota_Flower2.jpg', '../images/index/5451bc88a84a1c9ca4ffbc5a22321a33Madhobilota_Flower2.jpg', '180', '150', '1', '2023-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(224) NOT NULL,
  `head` varchar(224) NOT NULL,
  `title` varchar(224) NOT NULL,
  `image` varchar(224) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `head`, `title`, `image`) VALUES
(22, 'Welcome To Araddha Nursery and Agriculture Farm', 'Your gardening partner', 'images/index/625c4fda36cc6f970e58c2f981572ab2john-mark-arnold-ti4kGLkGgmU-unsplash.jpg'),
(23, 'All kinds of plants are available ', 'see more', 'images/index/5cf837358b2a83b02d2e6c68ecfe1f9aben-neale-29w9FiMWSr8-unsplash.jpg'),
(24, 'All kinds of flower pots and vase available', 'see more', 'images/index/498daca76dbe220792c05ecbd4d4b78ewaldemar-uLBJ1T8R8GY-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `subCat_id` int(200) NOT NULL,
  `cat_id` int(224) NOT NULL,
  `cat_name` varchar(224) NOT NULL,
  `subCat_name` varchar(224) NOT NULL,
  `status` varchar(224) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`subCat_id`, `cat_id`, `cat_name`, `subCat_name`, `status`) VALUES
(68, 15, 'outdoor plants', 'Mango Trees', '1'),
(70, 8, 'indoor plants', 'Cacti', '1'),
(71, 8, 'indoor plants', 'Decoration Plants', '1'),
(73, 4, 'Medicinal plants', 'Medicinal Herbs', '1'),
(74, 3, 'Gardening supplies', 'Digging Tools for Gardening', '1'),
(75, 3, 'Gardening supplies', 'Lawn Care Tools ', '1'),
(76, 15, 'outdoor plants', 'Banana tree', '1'),
(77, 19, 'Pots', 'Ceramic Pots', '1'),
(78, 19, 'Pots', 'Fiber Pots', '1'),
(79, 19, 'Pots', 'Hanging Pots', '1'),
(80, 19, 'Pots', 'LED Pots', '1'),
(81, 19, 'Pots', 'Melamine Pots', '1'),
(82, 19, 'Pots', 'Metal Pots', '1'),
(83, 19, 'Pots', 'Plastic Pots', '1'),
(84, 19, 'Pots', 'Pot Trey', '1'),
(85, 19, 'Pots', 'Right Pots', '1'),
(86, 19, 'Pots', 'Terracota Pots', '1'),
(88, 16, 'Fruits Plants', 'Fruit Plants', '1'),
(92, 22, 'Bonsai Plants', 'Indoor decoration bonsai plants', '1'),
(93, 23, 'Flower Plants', 'Flower Sapplings', '1'),
(94, 15, 'Forest Plants', 'Forest Trees Sapplings', '1'),
(96, 20, 'Ornamental Plants', 'Ornamental Plants Sapplings', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`plant_id`),
  ADD KEY `plants_ibfk_1` (`cat_id`),
  ADD KEY `plant` (`subCat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subCat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `plant_id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subCat_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plants`
--
ALTER TABLE `plants`
  ADD CONSTRAINT `plant` FOREIGN KEY (`subCat_id`) REFERENCES `subcategories` (`subCat_id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
