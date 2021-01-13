-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 12:36 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `note` text CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` date DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `fullname`, `phone`, `address`, `status`, `note`, `avatar`, `create_time`, `update_time`) VALUES
(1, 'SadLove', '38be9f53bc57725934a2e657adeabb47', 'huydz@gmail.com', 'Vũ Quốc Huy', '01666624463', 'Hà Đông- Hà Nội', 1, 'huydz', '15556205_1302600053130761_1049309462_o.jpg', '2018-04-02', NULL),
(15, 'VicKute97', '14e1b600b1fd579f47433b88e8d85291', 'thangld52@gmail.com', 'Lê Đức Vic', '0123456741', 'Mai Động', 1, 'Tệ', 'vic.PNG', '2018-04-02', 2018),
(16, 'hoangbeo', 'e10adc3949ba59abbe56e057f20f883e', 'hoangnv52@wru.vn', 'Nguyễn Việt Hoàng', '0981327898', 'Thường Tín', 1, 'Somthing', 'beo.jpg', '2018-04-02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_author` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name_author`, `create_time`, `update_time`) VALUES
(1, 'Hột Mít Rang', '2018-03-10 00:00:00', NULL),
(2, 'Tony Buổi Sáng', '2018-03-19 00:00:00', NULL),
(3, 'Tiểu Mễ', '2018-03-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(11) NOT NULL,
  `id_comic` int(11) NOT NULL,
  `id_edit` int(11) NOT NULL,
  `name_chapter` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `chapter` float NOT NULL,
  `view_chap` int(11) NOT NULL DEFAULT '0',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `langen` text COLLATE utf8_unicode_ci,
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `id_comic`, `id_edit`, `name_chapter`, `chapter`, `view_chap`, `content`, `langen`, `create_time`, `update_time`) VALUES
(1, 2, 1, '', 1, 0, 'http://4.bp.blogspot.com/_dlrtpMg80uE/TXUZuA3vRzI/AAAAAAAAmvc/Pe44Hv9mwSI/s1600/Beelzebub_ch.01_pg.01.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUZwKiZj9I/AAAAAAAAmvk/q9BJaxVAjlk/s1600/Beelzebub_ch.01_pg.02-03.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUZxevqGuI/AAAAAAAAmvs/1xYD9vwiJUQ/s1600/Beelzebub_ch.01_pg.04.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUZyy4qOaI/AAAAAAAAmv0/AizVHj6LMdA/s1600/Beelzebub_ch.01_pg.05.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUZ1IZHYBI/AAAAAAAAmv8/lNVapJxE8VM/s1600/Beelzebub_ch.01_pg.06.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUZ2qbqXiI/AAAAAAAAmwE/lzvrjM65Pt8/s1600/Beelzebub_ch.01_pg.07.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUZ3zxg9hI/AAAAAAAAmwM/kxq7H3LgRnk/s1600/Beelzebub_ch.01_pg.08.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUZ5KD53SI/AAAAAAAAmwU/Xy0ve_opLEE/s1600/Beelzebub_ch.01_pg.09.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUZ6QL_cxI/AAAAAAAAmwc/V4my-eiL6J8/s1600/Beelzebub_ch.01_pg.10.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUZ7d7cwPI/AAAAAAAAmwo/jcFzjxyb408/s1600/Beelzebub_ch.01_pg.11.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUZ8kjhfCI/AAAAAAAAmww/0lSqsrRaY8w/s1600/Beelzebub_ch.01_pg.12.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUZ-hUaiZI/AAAAAAAAmw4/jflzBhFlHFI/s1600/Beelzebub_ch.01_pg.13.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUZ_ytga6I/AAAAAAAAmxA/EaytUEX9Lww/s1600/Beelzebub_ch.01_pg.14.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaBSTfzsI/AAAAAAAAmxI/CZQD3PMn0Ts/s1600/Beelzebub_ch.01_pg.15.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaC7dPkrI/AAAAAAAAmxY/080vGQN5QDk/s1600/Beelzebub_ch.01_pg.16.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaEKSr-zI/AAAAAAAAmxg/mkZlYS_Y56Q/s1600/Beelzebub_ch.01_pg.17.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaFlaW5XI/AAAAAAAAmxo/yzpccNOlf80/s1600/Beelzebub_ch.01_pg.18.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaG07pZYI/AAAAAAAAmxw/CNCFi7xutl0/s1600/Beelzebub_ch.01_pg.19.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaIy-NqII/AAAAAAAAmx4/3Cos9mM3b3s/s1600/Beelzebub_ch.01_pg.20.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaKEGLzJI/AAAAAAAAmyA/AG0LFjtyXTI/s1600/Beelzebub_ch.01_pg.21.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaLl38iwI/AAAAAAAAmyI/d8UjmIl6ACQ/s1600/Beelzebub_ch.01_pg.22.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaOX9aFyI/AAAAAAAAmyQ/ndS0t-NmPFM/s1600/Beelzebub_ch.01_pg.23.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaPtyikzI/AAAAAAAAmyY/XjbzQthlMtc/s1600/Beelzebub_ch.01_pg.24.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaREMYZTI/AAAAAAAAmyg/MQHVL_AtNYI/s1600/Beelzebub_ch.01_pg.25.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaS31BTOI/AAAAAAAAmyo/yNvyoYrsHsM/s1600/Beelzebub_ch.01_pg.26.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaUWpHLBI/AAAAAAAAmyw/6vJCORdrvsI/s1600/Beelzebub_ch.01_pg.27.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUaVtYfQpI/AAAAAAAAmy4/O5zbhqKoWbY/s1600/Beelzebub_ch.01_pg.28.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaYr15AoI/AAAAAAAAmzE/JSlV0mWy5_8/s1600/Beelzebub_ch.01_pg.29-30.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaaOmSW7I/AAAAAAAAmzM/3Uz7kkhhnkU/s1600/Beelzebub_ch.01_pg.31.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUacPpel9I/AAAAAAAAmzU/hQhz7ciTLlo/s1600/Beelzebub_ch.01_pg.32.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUaeFylmoI/AAAAAAAAmzc/LmYKIJ30mfc/s1600/Beelzebub_ch.01_pg.33.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaflt44yI/AAAAAAAAmzk/mdkbn9gVo0Q/s1600/Beelzebub_ch.01_pg.34.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUaice8fTI/AAAAAAAAmzw/YdvVP4FofmE/s1600/Beelzebub_ch.01_pg.35.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUakOL3H3I/AAAAAAAAmz4/2FZi6VyCoCc/s1600/Beelzebub_ch.01_pg.36.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUalSqW1yI/AAAAAAAAm0A/0hTUrzmpKfs/s1600/Beelzebub_ch.01_pg.37.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUam2Ymp9I/AAAAAAAAm0I/crWhyoSxmco/s1600/Beelzebub_ch.01_pg.38.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUaoTAEFoI/AAAAAAAAm0Q/8MFEPN3xBO8/s1600/Beelzebub_ch.01_pg.39.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaqrPuxLI/AAAAAAAAm0Y/9TFSJcV6QDc/s1600/Beelzebub_ch.01_pg.40.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUasC3X-9I/AAAAAAAAm0k/LMcm7NL5Fc8/s1600/Beelzebub_ch.01_pg.41.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUathozSwI/AAAAAAAAm0s/nS2K9QL0SJY/s1600/Beelzebub_ch.01_pg.42.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUavueq4ZI/AAAAAAAAm00/DUw3CvIBaHw/s1600/Beelzebub_ch.01_pg.43.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUaw3C04MI/AAAAAAAAm08/R-oiLQ69s0w/s1600/Beelzebub_ch.01_pg.44.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUayY9jm5I/AAAAAAAAm1E/pH3ExebHycE/s1600/Beelzebub_ch.01_pg.45.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUazv1Z40I/AAAAAAAAm1M/bHwC12vDqbg/s1600/Beelzebub_ch.01_pg.46.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUa1Mbe8jI/AAAAAAAAm1Y/epSr1CJ5qzs/s1600/Beelzebub_ch.01_pg.47.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUa2MPsMaI/AAAAAAAAm1g/0bj9F29r2-Q/s1600/Beelzebub_ch.01_pg.48.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUa3GHnGYI/AAAAAAAAm1o/wePuAKJtXVo/s1600/Beelzebub_ch.01_pg.49.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUa4euUT7I/AAAAAAAAm1w/vGCeeVJHB8I/s1600/Beelzebub_ch.01_pg.50.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUa5eQ6MkI/AAAAAAAAm14/jylHYtOTodA/s1600/Beelzebub_ch.01_pg.51.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUa6j7tT9I/AAAAAAAAm2A/skV81suB3xk/s1600/Beelzebub_ch.01_pg.52.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUa8EqtJvI/AAAAAAAAm2I/lYzkKkakLb4/s1600/Beelzebub_ch.01_pg.53.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUa-eLi1lI/AAAAAAAAm2U/ixkkKiR54dg/s1600/Beelzebub_ch.01_pg.54.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUa_0GL6iI/AAAAAAAAm2c/xEm4kqE9Uis/s1600/Beelzebub_ch.01_pg.55.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUbBNSqzBI/AAAAAAAAm2k/lH6fbW3kNVc/s1600/Beelzebub_ch.01_pg.56.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUbCmWgBII/AAAAAAAAm2s/vm0aYWlwxsc/s1600/Beelzebub_ch.01_pg.57.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUbEfdXEFI/AAAAAAAAm20/XZMH6MNFSgw/s1600/Beelzebub_ch.01_pg.58.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUbFUXJ-kI/AAAAAAAAm28/tA2jP-lS928/s1600/creditspage.jpg?imgmax=2000', 'beelzebub_1_1.jpg/beelzebub_1_2.jpg/beelzebub_1_3.jpg/beelzebub_1_4.jpg/beelzebub_1_5.jpg/beelzebub_1_6.jpg/beelzebub_1_7.jpg/beelzebub_1_8.jpg/beelzebub_1_9.jpg/beelzebub_1_10.jpg/beelzebub_1_11.jpg/beelzebub_1_12.jpg/beelzebub_1_13.jpg/beelzebub_1_14.jpg/beelzebub_1_15.jpg/beelzebub_1_16.jpg/beelzebub_1_17.jpg/beelzebub_1_18.jpg/beelzebub_1_19.jpg/beelzebub_1_20.jpg/beelzebub_1_21.jpg/beelzebub_1_22.jpg/beelzebub_1_23.jpg/beelzebub_1_24.jpg/beelzebub_1_25.jpg/beelzebub_1_26.jpg/beelzebub_1_27.jpg/beelzebub_1_28.jpg/beelzebub_1_29.jpg/beelzebub_1_30.jpg/beelzebub_1_31.jpg/beelzebub_1_32.jpg/beelzebub_1_33.jpg/beelzebub_1_34.jpg/beelzebub_1_35.jpg/beelzebub_1_36.jpg/beelzebub_1_37.jpg/beelzebub_1_38.jpg/beelzebub_1_39.jpg/beelzebub_1_40.jpg/beelzebub_1_41.jpg/beelzebub_1_42.jpg/beelzebub_1_43.jpg/beelzebub_1_44.jpg/beelzebub_1_45.jpg/beelzebub_1_46.jpg/beelzebub_1_47.jpg/beelzebub_1_48.jpg/beelzebub_1_49.jpg/beelzebub_1_50.jpg/beelzebub_1_51.jpg/beelzebub_1_52.jpg/beelzebub_1_53.jpg/beelzebub_1_54.jpg/beelzebub_1_55.jpg/beelzebub_1_56.jpg/beelzebub_1_57.jpg', '2018-03-10 00:00:00', NULL),
(2, 2, 2, '2', 2, 34, 'http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuwcxZSMI/AAAAAAAAnTQ/vFB1RmNXKEw/s1600/01.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuybwjIrI/AAAAAAAAnTY/QLs2M-EIBL4/s1600/02.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuz0lHBYI/AAAAAAAAnTc/3I882kdsUk0/s1600/03.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUu1_l97rI/AAAAAAAAnTg/6xcwoZWELfk/s1600/04.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUu3TiJ8XI/AAAAAAAAnTk/2bzQHIcWAug/s1600/05.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUu5Nl6nII/AAAAAAAAnTo/ppHmqam-nQU/s1600/06.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUu7NWeQBI/AAAAAAAAnTs/83dHe9zP_B0/s1600/07.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUu9cU9iYI/AAAAAAAAnTw/jiH41OfQa3M/s1600/08.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvBkzNLEI/AAAAAAAAnT4/acIrLbreW8o/s1600/10.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvDn6o8lI/AAAAAAAAnT8/yq74tdyt6W4/s1600/11.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvFJjy-XI/AAAAAAAAnUA/oVzH7AmtQBw/s1600/12.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvG8r33YI/AAAAAAAAnUE/q2Gq85ob0HI/s1600/13.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvI9zJaJI/AAAAAAAAnUM/s-Qgt6c0hqg/s1600/14.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUvKkNHh_I/AAAAAAAAnUQ/NP3lg1Oo4O0/s1600/15.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvMuYQRUI/AAAAAAAAnUY/DX0_cJpv8NQ/s1600/16.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvOQX5_kI/AAAAAAAAnUc/34SLrP8as0A/s1600/17.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUvR3X-8iI/AAAAAAAAnUo/hGWHrL30Xsc/s1600/19.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvThk2NdI/AAAAAAAAnUs/xPjVULhEfuw/s1600/20.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvVgVUK2I/AAAAAAAAnUw/bsew9G1h494/s1600/21.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvXLtglpI/AAAAAAAAnU0/mr7Aw6dLDzc/s1600/22.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvZPl6rmI/AAAAAAAAnU4/i1acVfendyM/s1600/23.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvbAQD9mI/AAAAAAAAnU8/6KJUJqHUt6w/s1600/24.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvelLK5oI/AAAAAAAAnVA/8pDm5wYVPfc/s1600/25.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUvfsECdDI/AAAAAAAAnVM/HMLz_eZMN8s/s1600/26.jpg?imgmax=2000', 'beelzebub_2_1.jpg/beelzebub_2_2.jpg/beelzebub_2_3.jpg/beelzebub_2_4.jpg/beelzebub_2_5.jpg/beelzebub_2_6.jpg/beelzebub_2_7.jpg/beelzebub_2_8.jpg/beelzebub_2_9.jpg/beelzebub_2_10.jpg/beelzebub_2_11.jpg/beelzebub_2_12.jpg/beelzebub_2_13.jpg/beelzebub_2_14.jpg/beelzebub_2_15.jpg/beelzebub_2_16.jpg/beelzebub_2_17.jpg/beelzebub_2_18.jpg/beelzebub_2_19.jpg/beelzebub_2_20.jpg/beelzebub_2_21.jpg/beelzebub_2_22.jpg/beelzebub_2_23.jpg/beelzebub_2_24.jpg/beelzebub_2_25.jpg/beelzebub_2_26.jpg', '2018-03-19 00:00:00', NULL),
(3, 2, 1, 'beelzebub', 3, 2, 'http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuPjiwLrI/AAAAAAAAnQM/o2nJswsAFNA/s1600/Beel03_02.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuQ_LZOxI/AAAAAAAAnQc/p7fYn5kH6Ds/s1600/Beel03_03.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuSGIq7JI/AAAAAAAAnQk/V21K_Unyrmg/s1600/Beel03_04.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUuTUBokYI/AAAAAAAAnQs/I7FdfMyWzbs/s1600/Beel03_05.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuUge6xvI/AAAAAAAAnQ0/EEF_fJ9st58/s1600/Beel03_06.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuWfwqIpI/AAAAAAAAnQ8/z1GRA30slAs/s1600/Beel03_07.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUuXSPQ6zI/AAAAAAAAnRE/r3kZnaUsUn0/s1600/Beel03_08.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuZZ23_MI/AAAAAAAAnRM/ofJO9bN0aMI/s1600/Beel03_09.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUualCn8dI/AAAAAAAAnRU/ZO6-mfBjjqk/s1600/Beel03_10.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUub-yfEtI/AAAAAAAAnRc/IU97rqHnVeY/s1600/Beel03_11.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUudCDQ7oI/AAAAAAAAnRk/wJ09lNL8RCM/s1600/Beel03_12.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUueem4aNI/AAAAAAAAnRw/5QshpuFP_qM/s1600/Beel03_13.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuft09FyI/AAAAAAAAnR4/Dk-iweC1IFM/s1600/Beel03_14.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUuhae8skI/AAAAAAAAnSA/rBwESiF1CNA/s1600/Beel03_15.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUukRg0LAI/AAAAAAAAnSQ/79ePfOQdnec/s1600/Beel03_17.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuludi41I/AAAAAAAAnSg/sYH7MECRXLY/s1600/Beel03_18.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUumyV6aaI/AAAAAAAAnSo/yfxRIsdOrSk/s1600/Beel03_19.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuoBqoXbI/AAAAAAAAnSw/bs1hioU3RdA/s1600/Beel03_20.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUupqRZwXI/AAAAAAAAnS4/0kytsIDt-Vg/s1600/Beel03_21.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuspEw-MI/AAAAAAAAnTA/WvRw-tlTJrA/s1600/Beel03_22-23.jpg?imgmax=2000', 'beelzebub_3_1.jpg/beelzebub_3_2.jpg/beelzebub_3_3.jpg/beelzebub_3_4.jpg/beelzebub_3_5.jpg/beelzebub_3_6.jpg/beelzebub_3_7.jpg/beelzebub_3_8.jpg/beelzebub_3_9.jpg/beelzebub_3_10.jpg/beelzebub_3_11.jpg/beelzebub_3_12.jpg/beelzebub_3_13.jpg/beelzebub_3_14.jpg/beelzebub_3_15.jpg/beelzebub_3_16.jpg/beelzebub_3_17.jpg/beelzebub_3_18.jpg/beelzebub_3_19.jpg/beelzebub_3_20.jpg/beelzebub_3_21.jpg', '2018-03-19 00:00:00', NULL),
(4, 2, 3, 'beelzebub', 4, 0, 'http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtwfRipYI/AAAAAAAAnNU/YgQGBmjVJiw/s1600/Beel04_01.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtzPLf-ZI/AAAAAAAAnNc/DC_Yj3lDF1g/s1600/Beel04_02-03.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUt1dYzQkI/AAAAAAAAnNs/2pSotgXyU9w/s1600/Beel04_05.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUt5BLGnfI/AAAAAAAAnOE/2PT9KJmOICA/s1600/Beel04_08.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUt6QGmThI/AAAAAAAAnOM/1M54rz6PTo8/s1600/Beel04_09.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUt89_uDyI/AAAAAAAAnOc/GnMbtYQNH1Y/s1600/Beel04_11.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUt_p5AO8I/AAAAAAAAnOs/ryQaJxTMlkQ/s1600/Beel04_13.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuAx3ldfI/AAAAAAAAnO0/VfeixsQ1mHg/s1600/Beel04_14.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUuCfz0vcI/AAAAAAAAnPA/iG6WCWwx-GA/s1600/Beel04_15.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUuDoiHk3I/AAAAAAAAnPI/esAI5imHT-o/s1600/Beel04_16.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuE54hUXI/AAAAAAAAnPQ/mkns4etcGKI/s1600/Beel04_17.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuHdwxY1I/AAAAAAAAnPY/_8c5NvCn7Is/s1600/Beel04_18-19.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUuJ4AoQzI/AAAAAAAAnP0/A3smGMXsuLQ/s1600/Beel04_21.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUuKp9jG3I/AAAAAAAAnP8/CIDzHrT8w9k/s1600/Beel04_Credit.jpg?imgmax=2000', 'beelzebub_4_1.jpg/beelzebub_4_2.jpg/beelzebub_4_3.jpg/beelzebub_4_4.jpg/beelzebub_4_5.jpg/beelzebub_4_6.jpg/beelzebub_4_7.jpg/beelzebub_4_8.jpg/beelzebub_4_9.jpg/beelzebub_4_10.jpg/beelzebub_4_11.jpg/beelzebub_4_12.jpg/beelzebub_4_13.jpg/beelzebub_4_14.jpg/beelzebub_4_15.jpg/beelzebub_4_16.jpg/beelzebub_4_17.jpg/beelzebub_4_18.jpg/beelzebub_4_19.jpgbeelzebub_4_1.jpg/beelzebub_4_2.jpg/beelzebub_4_3.jpg/beelzebub_4_4.jpg/beelzebub_4_5.jpg/beelzebub_4_6.jpg/beelzebub_4_7.jpg/beelzebub_4_8.jpg/beelzebub_4_9.jpg/beelzebub_4_10.jpg/beelzebub_4_11.jpg/beelzebub_4_12.jpg/beelzebub_4_13.jpg/beelzebub_4_14.jpg/beelzebub_4_15.jpg/beelzebub_4_16.jpg/beelzebub_4_17.jpg/beelzebub_4_18.jpg/beelzebub_4_19.jpg/beelzebub_4_20.jpg', '2018-03-19 00:00:00', NULL),
(5, 2, 1, 'beelzebub', 5, 0, 'http://3.bp.blogspot.com/_dlrtpMg80uE/TXUtSC6pTOI/AAAAAAAAnKU/ssiG1A3Jc3s/s1600/Beel05_01.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtUrOq9bI/AAAAAAAAnKc/8SdOk4FBH6w/s1600/Beel05_02.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtVqnx49I/AAAAAAAAnKk/723DMsjhqZo/s1600/Beel05_03.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtXtqSgAI/AAAAAAAAnKs/Crh43Vx3efQ/s1600/Beel05_04.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtYxKMbHI/AAAAAAAAnK0/0GWxhAJEdaE/s1600/Beel05_05.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtaK4CW8I/AAAAAAAAnK8/nwktHyz_0vU/s1600/Beel05_06.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtbrBUGlI/AAAAAAAAnLE/PPPq0gwoAkQ/s1600/Beel05_07.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtfomqVeI/AAAAAAAAnLs/_y5O889Ovfc/s1600/Beel05_10.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtlox2BmI/AAAAAAAAnMM/c7IdjTkG--0/s1600/Beel05_14.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUtuVp061I/AAAAAAAAnNA/B88MmBs4MV0/s1600/credit.jpg?imgmax=2000', 'beelzebub_5_1.jpg/beelzebub_5_2.jpg/beelzebub_5_3.jpg/beelzebub_5_4.jpg/beelzebub_5_5.jpg/beelzebub_5_6.jpg/beelzebub_5_7.jpg/beelzebub_5_8.jpg/beelzebub_5_9.jpg/beelzebub_5_10.jpg/beelzebub_5_11.jpg/beelzebub_5_12.jpg/beelzebub_5_13.jpg/beelzebub_5_14.jpg/beelzebub_5_15.jpg/beelzebub_5_16.jpg/beelzebub_5_17.jpg/beelzebub_5_18.jpg/beelzebub_5_19.jpg/beelzebub_5_20.jpg', '2018-03-19 00:00:00', NULL),
(6, 2, 3, '', 6, 21, 'http://4.bp.blogspot.com/_dlrtpMg80uE/TXUs5vt2A-I/AAAAAAAAnHs/o5zIy_fvRHg/s1600/Beel03_Credit.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUs69CBmgI/AAAAAAAAnHw/EnD3pl8C7t4/s1600/Beel6_01.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUs88zEAYI/AAAAAAAAnH4/BmlDfBCSL_U/s1600/Beel6_02_03.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUs9yvGLDI/AAAAAAAAnIA/4lroJUHOKGA/s1600/Beel6_04.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtBqGGbzI/AAAAAAAAnIY/jEFbhAGc9rI/s1600/Beel6_07.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtCmkElHI/AAAAAAAAnIg/wiG4aAaKZZs/s1600/Beel6_08.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtEPADDZI/AAAAAAAAnIo/9t_RfMUeRlU/s1600/Beel6_09.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUtFaXQIcI/AAAAAAAAnIw/xPdddpudNkI/s1600/Beel6_10.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtGTWhtjI/AAAAAAAAnI4/jV1MRCG07t8/s1600/Beel6_11.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUtHhwrwlI/AAAAAAAAnJA/gkcr2MmgRik/s1600/Beel6_12.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtI3ao3xI/AAAAAAAAnJI/WqoNjSZdVGw/s1600/Beel6_13.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtKMaEIuI/AAAAAAAAnJQ/pwb2OejO-XU/s1600/Beel6_14.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtLOTyM4I/AAAAAAAAnJc/Gm7Zh8Otr5Y/s1600/Beel6_15.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUtMOfJLwI/AAAAAAAAnJk/5dpBYxTfTjE/s1600/Beel6_16.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtNTKhquI/AAAAAAAAnJs/k7De1XF6nMA/s1600/Beel6_17.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtOcMfJzI/AAAAAAAAnJ0/9-ImBFpcJpA/s1600/Beel6_18.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUtP7Rb6fI/AAAAAAAAnJ8/qbsnOv5NvDM/s1600/Beel6_19.jpg?imgmax=2000', NULL, '2018-03-19 00:00:00', NULL),
(7, 2, 3, '', 7, 41, 'http://4.bp.blogspot.com/_dlrtpMg80uE/TXUskE0bvsI/AAAAAAAAnFA/-lhC_nrD5Io/s1600/Beel7_02.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUslXSRFuI/AAAAAAAAnFQ/7H_SLXPaD8Y/s1600/Beel7_03.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsmexCpFI/AAAAAAAAnFY/mcDgNEACGGE/s1600/Beel7_04.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsosAoupI/AAAAAAAAnFo/LcE5QNMojFw/s1600/Beel7_06.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUspwRwK6I/AAAAAAAAnFw/SurQnHlx2I8/s1600/Beel7_07.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsq5VlINI/AAAAAAAAnF4/qNyOWIvh2bw/s1600/Beel7_08.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUssHRm0lI/AAAAAAAAnGA/3hD6xhemjrQ/s1600/Beel7_09.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsuqlqraI/AAAAAAAAnGU/7Fq7H1JvHA8/s1600/Beel7_11.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUsv5nOgnI/AAAAAAAAnGc/axI3h9Sk9R4/s1600/Beel7_12.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsw-zf20I/AAAAAAAAnGk/6H3GVm8un10/s1600/Beel7_13.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUszPg0tYI/AAAAAAAAnG0/hP2UkT58zbI/s1600/Beel7_15.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUs0cNXXaI/AAAAAAAAnG8/QhoBQXZBLLI/s1600/Beel7_16.jpg?imgmax=2000', NULL, '2018-03-19 00:00:00', NULL),
(8, 2, 1, 'chap 8', 8, 0, 'http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsD0bvfwI/AAAAAAAAnB8/Qhnd_Yt5CMI/s1600/beelzebub-ch008-01-color.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsFafHsbI/AAAAAAAAnCE/u_sTyHjpjek/s1600/beelzebub-ch008-01.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsGbI6gpI/AAAAAAAAnCM/lQWZvJBye8Q/s1600/beelzebub-ch008-02.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUsIzvenVI/AAAAAAAAnCc/ydVHM38BiGM/s1600/beelzebub-ch008-04.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsKKReUTI/AAAAAAAAnCk/kaQKbLgPlns/s1600/beelzebub-ch008-05.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUsMYSU76I/AAAAAAAAnCs/FkzOpNmBX9w/s1600/beelzebub-ch008-06.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsNmLAxTI/AAAAAAAAnC0/GOZFA_WJLvQ/s1600/beelzebub-ch008-07.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsOpP-DqI/AAAAAAAAnC8/mDT1kWRgEpw/s1600/beelzebub-ch008-08.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUsQn9n4cI/AAAAAAAAnDE/xPrSmbFKxdo/s1600/beelzebub-ch008-09.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsUMR0y5I/AAAAAAAAnDY/C3bvJPfvDlQ/s1600/beelzebub-ch008-11.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsVZjPswI/AAAAAAAAnDg/yqwM4fbcLKk/s1600/beelzebub-ch008-12.jpg?imgmax=2000http://3.bp.blogspot.com/_dlrtpMg80uE/TXUsWzFuiOI/AAAAAAAAnDo/jQR_5TuzDv8/s1600/beelzebub-ch008-13.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsYP8qMbI/AAAAAAAAnDw/TUTh8Q8wBlw/s1600/beelzebub-ch008-14.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsaDySM_I/AAAAAAAAnEA/MXEr0PMeHi0/s1600/beelzebub-ch008-15.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsbeix-yI/AAAAAAAAnEI/QCKTBaajmNA/s1600/beelzebub-ch008-16.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUscqFgmiI/AAAAAAAAnEQ/EEXr_6tQFTI/s1600/beelzebub-ch008-17.jpg?imgmax=2000http://4.bp.blogspot.com/_dlrtpMg80uE/TXUsd4ypgGI/AAAAAAAAnEY/OXAQVJlXY-4/s1600/beelzebub-ch008-18.jpg?imgmax=2000', NULL, '2018-03-19 00:00:00', NULL),
(10, 1, 2, '', 1, 0, 'http://1.bp.blogspot.com/-8xF2eVMiNQk/TohVV6E7PII/AAAAAAAADBI/HSX2_MFOirM/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-J9L3C7SWURc/TohVWXyA3tI/AAAAAAAADBM/Qq7-ELU2txY/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-Ytp79CRLSeE/TohVapCIx-I/AAAAAAAADBg/v1es4Y4c-tE/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-BgyAdh4Jn4I/TohVcGXjw-I/AAAAAAAADBk/z83qmFDVdlw/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-eUyaBBysE_o/TohVdB9BwrI/AAAAAAAADBo/MEOhu7jWtEs/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-WJSnjjBf7ro/TohVeKF2WaI/AAAAAAAADBs/x-zgOXoHx-4/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-iNX1uMs1sTc/TohVefeUw7I/AAAAAAAADBw/kujRwsZ3OUU/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-2_h-4odtd18/TohVfYL9DUI/AAAAAAAADB0/Z-wrgA0PKw0/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-yvTnZlp0q5Q/TohVgKenlFI/AAAAAAAADB4/T5NOivjmtMg/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-oJdHybbhhX4/TohVg5xxoeI/AAAAAAAADB8/nWEHRcSfOh4/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-BmgvgUjdCME/TohVhr9mxUI/AAAAAAAADCA/hKmQi074WtE/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-_7ClYWB8B0s/TohVihHUPmI/AAAAAAAADCE/95LceorVQf4/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-4Ou-zuVOinU/TohVj8dYnmI/AAAAAAAADCI/pb7Dj8QiUOA/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-176g_HrsPqY/TohVk7y015I/AAAAAAAADCM/h6zUmNWMgqo/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-GWcgoGfHtXE/TohVlqnzylI/AAAAAAAADCQ/j2UuOdASX_o/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-Kd45x6D1o5g/TohVmK-EcpI/AAAAAAAADCU/4FfQepmcl1Y/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-uK8FWLy7S_4/TohVm1CFkLI/AAAAAAAADCY/1_9vk5oma7Y/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-TP8zstkYlg0/TohVnkDnnDI/AAAAAAAADCc/X3Se1LrgzEQ/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-I43CBei8jtY/TohVofeilII/AAAAAAAADCg/Q8dnCC-6H7s/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-sAADaeSQtak/TohVpKA0elI/AAAAAAAADCk/Z-Q9r1yq4hI/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-M1DkDVbe90Q/TohVpmQKvbI/AAAAAAAADCo/FCbWKVPxSgw/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-IA3l4NA_qtE/TohVqOoO3CI/AAAAAAAADCs/oiCXJXPn9f4/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-o-BlvgTgSns/TohVqvC1NpI/AAAAAAAADCw/BUZS65v6W-k/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-HnNSbVYUk10/TohVrDHaxSI/AAAAAAAADC4/iUEZkZEZMu4/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-f-KeWSarHwo/TohVrwbjH4I/AAAAAAAADC8/N3w7hCuxhw0/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-EEtYBpaJ1qw/TohVsZADC6I/AAAAAAAADDA/CkX8BCDWT3g/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-hNgJbuIKz4c/TohVtKqbdwI/AAAAAAAADDE/9sXINbWv8oc/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-PWhCvQNiN-Q/TohVtkLf-7I/AAAAAAAADDI/GUZriENnmkY/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-pCPmv6AiVxA/TohVuLETYkI/AAAAAAAADDM/OS8xouOxkZE/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-RSFOYv-HCFY/TohVu75_fxI/AAAAAAAADDQ/nqH-bsG0O9I/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-jW6pax-WMUY/TohVvRrSdmI/AAAAAAAADDU/eO-nqssM8Ws/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-PuO4f7zRkOk/TohVvyRce7I/AAAAAAAADDY/6s1B02fZ45Y/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-ZvpgPBRp2rA/TohVwnQf2-I/AAAAAAAADDc/lvSOStdQ61w/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-hL-Z1_3gFyo/TohVxMdPdEI/AAAAAAAADDg/mhEL2fnYpms/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-c-7PeBkx1FA/TohVxvma1JI/AAAAAAAADDk/Iaddo0R4JoM/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-TvNvw0x6kEY/TohVyUEI0eI/AAAAAAAADDo/pHgpn2JNh5I/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-hM1Q_pYgIms/TohVy35i1jI/AAAAAAAADDs/936yDfsnhkw/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-SSUsSyfCSPE/TohVYMEqHvI/AAAAAAAADBU/BHPnsdGy9qk/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-jROxJfUMG44/TohVY_uLcWI/AAAAAAAADBY/wgSOGO1Zxkc/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-c0zeussQyUI/TohVZSQVwJI/AAAAAAAADBc/vVS5CQya9i8/s0/1.jpg%3fimgmax%3d', 'detective_conan_1_1.jpg/detective_conan_1_2.jpg/detective_conan_1_3.jpg/detective_conan_1_4.jpg/detective_conan_1_5.jpg/detective_conan_1_6.jpg/detective_conan_1_7.jpg/detective_conan_1_8.jpg/detective_conan_1_9.jpg/detective_conan_1_10.jpg/detective_conan_1_11.jpg/detective_conan_1_12.jpg/detective_conan_1_13.jpg/detective_conan_1_14.jpg/detective_conan_1_15.jpg/detective_conan_1_16.jpg/detective_conan_1_17.jpg/detective_conan_1_18.jpg/detective_conan_1_19.jpg/detective_conan_1_20.jpg/detective_conan_1_21.jpg/detective_conan_1_22.jpg/detective_conan_1_23.jpg/detective_conan_1_24.jpg/detective_conan_1_25.jpg/detective_conan_1_26.jpg/detective_conan_1_27.jpg/detective_conan_1_28.jpg/detective_conan_1_29.jpg/detective_conan_1_30.jpg/detective_conan_1_31.jpg/detective_conan_1_32.jpg/detective_conan_1_33.jpg/detective_conan_1_34.jpg/detective_conan_1_35.jpg/detective_conan_1_36.jpg/detective_conan_1_37.jpg/detective_conan_1_38.jpg/detective_conan_1_39.jpg/detective_conan_1_40.jpg', NULL, NULL),
(11, 1, 2, '', 2, 0, 'http://2.bp.blogspot.com/-m1rzN_tYn8M/TohU2Zde5fI/AAAAAAAAC_Y/j-iPiC4xPTQ/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-EKHj_y-U0cM/TohU3apbz5I/AAAAAAAAC_c/2h3y9NBkR2U/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-mEJAp4iOAjo/TohU4okgaoI/AAAAAAAAC_g/a2D-j07m_us/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-89E3W6esPXY/TohU5lfReuI/AAAAAAAAC_k/Bp-qakCiItE/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-IqCsof66W9Y/TohU611CcvI/AAAAAAAAC_o/KrVC-RjaVLw/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-jFMFGyj8bNQ/TohU7teeTiI/AAAAAAAAC_s/cUzsGZR82W4/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-gFelmrUR0cw/TohU8uOMzHI/AAAAAAAAC_w/wb3IhWRA_z0/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-rNyE6tTxAVs/TohU9vuZK9I/AAAAAAAAC_0/V2CNzApFtuM/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-Rv1KvSoA0sE/TohU-pltnrI/AAAAAAAAC_4/Yy1O25Rwjt4/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-LS2le9jGTC0/TohU_g8aqHI/AAAAAAAAC_8/ogorcxA2vZE/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-rck2HFUPFlc/TohVAulcKPI/AAAAAAAADAA/kTY5ObPbjxI/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-WvsHUn6DIxs/TohVB8iIiZI/AAAAAAAADAE/tsEV2Zm4Ku8/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-HU8Iaik8c04/TohVC5uIvwI/AAAAAAAADAI/oWhQ2wJ-Hqo/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-RWhDdkJjVcM/TohVD6yl-JI/AAAAAAAADAM/JXoVD_bv-IE/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-zR3UA_g3mg4/TohVEy_tRqI/AAAAAAAADAQ/ZFpMHUa-8gQ/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/--1Kvl5YEwu8/TohVIMWq8ZI/AAAAAAAADAU/IYY4drjOQ20/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-HuS6QQjKzsI/TohVI-4sbBI/AAAAAAAADAY/2lz-WsHvZFo/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-gKTnhQOdWOg/TohVJyvH8CI/AAAAAAAADAc/0rpg80lRgjU/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-lWVWNW_h4D0/TohVLGKqi4I/AAAAAAAADAg/_Vy-24SPHT8/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-Q9WhAOiYgSE/TohVL_nKF9I/AAAAAAAADAk/K49NR1YJcDc/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-sw65-EYRqB0/TohVNFcQ-cI/AAAAAAAADAo/cpGn_W-IZ74/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-dxXPBG-MkXY/TohVOfLZ0dI/AAAAAAAADAs/-Y5R0SDDXVU/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-7XRcp44-iwg/TohVPAm8b5I/AAAAAAAADAw/TTDtS5BCneo/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-6H37ecNBS7c/TohVP_TbolI/AAAAAAAADA0/-v6Zxepqtmw/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-H_Etb2GQRBI/TohVRBt7lBI/AAAAAAAADA4/JIvuqIJPndY/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-aLqMntb6QbA/TohVSZEiKmI/AAAAAAAADA8/5AurHOVD8Us/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-RGtjvJ9I9xQ/TohVTGojSEI/AAAAAAAADBA/h9IHqPm77QU/s0/1.jpg%3fimgmax%3d?imgmax=2000', 'detective_conan_2_2.jpg/detective_conan_2_3.jpg/detective_conan_2_4.jpg/detective_conan_2_5.jpg/detective_conan_2_6.jpg/detective_conan_2_7.jpg/detective_conan_2_8.jpg/detective_conan_2_9.jpg/detective_conan_2_10.jpg/detective_conan_2_11.jpg/detective_conan_2_12.jpg/detective_conan_2_13.jpg/detective_conan_2_14.jpg/detective_conan_2_15.jpg/detective_conan_2_16.jpg/detective_conan_2_17.jpg/detective_conan_2_18.jpg/detective_conan_2_19.jpg/detective_conan_2_20.jpg/detective_conan_2_21.jpg/detective_conan_2_22.jpg/detective_conan_2_23.jpg/detective_conan_2_24.jpg/detective_conan_2_25.jpg/detective_conan_2_26.jpg/detective_conan_2_27.jpg/detective_conan_2_28.jpg', '2018-03-31 03:11:11', NULL),
(12, 1, 2, '', 3, 0, 'http://1.bp.blogspot.com/-uVgHyaY0Arw/TohUlYYZqlI/AAAAAAAAC-U/CJh4BAJANgk/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-lSlmcZOepCc/TohUmep3RaI/AAAAAAAAC-Y/r2ESPHu2tRM/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-XQjCTODIISk/TohUnBYmtSI/AAAAAAAAC-c/m4Tq23Ybz4w/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-dCu-OtSp608/TohUoC5aNSI/AAAAAAAAC-g/-QWSYpxQ_TI/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-ftzovG7QH1w/TohUpNld2bI/AAAAAAAAC-k/M4xcFkdT4ZY/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-2M5nFCTK8Ns/TohUqdrQMZI/AAAAAAAAC-s/-oAKPEAh120/s0/1.jpg%3fimgmax%3d?imgmax=2000http://2.bp.blogspot.com/-T-GRSUBD4Hs/TohUr4fEbhI/AAAAAAAAC-w/RAbsl7oHsBs/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-UDeGyM_UD-A/TohUs08XtpI/AAAAAAAAC-0/xMzWpQ138L4/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-FnQLX3IDiJQ/TohUtzkuhdI/AAAAAAAAC-4/PrYb3oKQWIA/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-SBoDwYySq08/TohUukwWJ8I/AAAAAAAAC-8/P3unPQirwFs/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-o1lxRLL9Ovw/TohUvpo-r5I/AAAAAAAAC_A/ur3JO5ffeic/s0/1.jpg%3fimgmax%3d?imgmax=2000http://3.bp.blogspot.com/-5DRCxTcG5D4/TohUwoZenaI/AAAAAAAAC_E/FFI9g9ZD9bk/s0/1.jpg%3fimgmax%3d?imgmax=2000http://1.bp.blogspot.com/-ehmlx0ZqaUU/TohUxh9MnyI/AAAAAAAAC_I/zkipyzepsTo/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/--uHyDGjv9pA/TohUyn8HPPI/AAAAAAAAC_M/O8cZTmd8DFw/s0/1.jpg%3fimgmax%3d?imgmax=2000http://4.bp.blogspot.com/-vqnCnz36XIE/TohUzusrwKI/AAAAAAAAC_Q/k47tYxR94jY/s0/1.jpg%3fimgmax%3d?imgmax=2000', 'detective_conan_3_1.jpg/detective_conan_3_2.jpg/detective_conan_3_3.jpg/detective_conan_3_4.jpg/detective_conan_3_5.jpg/detective_conan_3_6.jpg/detective_conan_3_7.jpg/detective_conan_3_8.jpg/detective_conan_3_9.jpg/detective_conan_3_10.jpg/detective_conan_3_11.jpg/detective_conan_3_12.jpg/detective_conan_3_13.jpg/detective_conan_3_14.jpg/detective_conan_3_15.jpg/detective_conan_3_16.jpg', '2018-03-31 03:14:28', NULL),
(13, 4, 3, '', 1, 0, 'http://3.bp.blogspot.com/-ztwgPoeBTTk/UnyJQLyTy0I/AAAAAAACBoQ/V8DNGVlvVVk/s1600/Chap+001-01.jpg?imgmax=2000http://1.bp.blogspot.com/-fMBJi5XHbeI/UnyJP_iEBNI/AAAAAAACBoM/Cf6krDKhsJE/s1600/Chap+001-02.jpg?imgmax=2000http://1.bp.blogspot.com/-nu8mgEdFtyE/UnyJQJkaniI/AAAAAAACBoU/YrGMKQ3aQ2k/s1600/Chap+001-03.jpg?imgmax=2000http://2.bp.blogspot.com/-d3B6qHS3mxU/UnyJQzaQ2yI/AAAAAAACBow/nS1TTMeE_SI/s1600/Chap+001-04.jpg?imgmax=2000http://3.bp.blogspot.com/-aWcBQPKQOT0/UnyJRCEqevI/AAAAAAACBoo/mITBo2Ne3rg/s1600/Chap+001-05.jpg?imgmax=2000http://1.bp.blogspot.com/-EqQUg5fDY6w/UnyJRBI_vDI/AAAAAAACBok/O5Wgq1un65Y/s1600/Chap+001-06.jpg?imgmax=2000http://4.bp.blogspot.com/-uKGC7Z9okyw/UnyJSIW3_BI/AAAAAAACBo4/FkM7FYIbDiY/s1600/Chap+001-07.jpg?imgmax=2000http://1.bp.blogspot.com/-UGvob2Ao1aI/UnyJSQfjIFI/AAAAAAACBpE/psgrYWvAics/s1600/Chap+001-08.jpg?imgmax=2000http://4.bp.blogspot.com/-vJLZF727Irw/UnyJS6M8K0I/AAAAAAACBpI/-1VZNO45tnQ/s1600/Chap+001-09.jpg?imgmax=2000http://4.bp.blogspot.com/-pEVQIJ9AuYQ/UnyJSz8BqQI/AAAAAAACBpQ/lrQKDX7QaNk/s1600/Chap+001-10.jpg?imgmax=2000http://3.bp.blogspot.com/-X4bqSeOks0g/UnyJTTmGISI/AAAAAAACBpY/VViN6gmGzk4/s1600/Chap+001-11.jpg?imgmax=2000http://2.bp.blogspot.com/-rWRQb06a93M/UnyJT7f6_7I/AAAAAAACBpk/reS5KSfwUkg/s1600/Chap+001-12.jpg?imgmax=2000http://3.bp.blogspot.com/-NdOAwhcmdu0/UnyJUWflqgI/AAAAAAACBps/rFHBGz654Rc/s1600/Chap+001-13.jpg?imgmax=2000http://1.bp.blogspot.com/-DJe9P9e_VIo/UnyJUsfWtFI/AAAAAAACBpw/Rr4SEI2uLcQ/s1600/Chap+001-14.jpg?imgmax=2000http://1.bp.blogspot.com/-Npp6x8W2WjE/UnyJUxn9Q-I/AAAAAAACBp4/rD92jYWjUq8/s1600/Chap+001-15.jpg?imgmax=2000http://4.bp.blogspot.com/-Sv8VAwBUqNs/UnyJVYqchOI/AAAAAAACBp8/6y5OO5MJZVw/s1600/Chap+001-16.jpg?imgmax=2000', 'doraemon_1_1.jpg/doraemon_1_5.jpg/doraemon_1_6.jpg/doraemon_1_7.jpg/doraemon_1_8.jpg/doraemon_1_9.jpg/doraemon_1_10.jpg/doraemon_1_11.jpg/doraemon_1_12.jpg/doraemon_1_13.jpg/doraemon_1_14.jpg/doraemon_1_15.jpg/doraemon_1_16.jpg/doraemon_1_17.jpg/doraemon_1_18.jpg/doraemon_1_19.jpg/doraemon_1_20.jpghttp://2.bp.blogspot.com/-V5mRgEYE4ds/UEgGbvXpEdI/AAAAAAAADH8/Cjge_Mrrtrk/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-r__VMgNuX4E/UEgGdNEr5lI/AAAAAAAADIE/TeKStLzD3jg/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-FXcf7qgP07w/UEgGeleg_xI/AAAAAAAADIM/nyYPXgT3LZ4/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-KPz0PeTkprI/UEgGf7DFPzI/AAAAAAAADIU/R6uZ5uV_FRg/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-t-_MqgzxgdA/UEgGhnWYnpI/AAAAAAAADIc/JyP9s0tb9iY/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-h0xpqPEUIAs/UEgGi6I6EaI/AAAAAAAADIk/J1bdOwLq4uI/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-qVLmUqssYRs/UEgGk21nGXI/AAAAAAAADIs/OPDdx7eCMeg/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-hCfvFsdWIKQ/UEgGmMqRWyI/AAAAAAAADI0/31cy9_9cW5I/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-jaeCggLRUkU/UEgGnWg5w7I/AAAAAAAADI8/lzKKiwoCfwI/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-0yqNpwyScyY/UEgGowjxP4I/AAAAAAAADJE/fFAxry-RCY0/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-aGOCI6FfKBQ/UEgGqGqC2HI/AAAAAAAADJM/ceKVZS2ekSo/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-YO34HC6eCkM/UEgGsPC8b2I/AAAAAAAADJU/1RFQEXKT4Lw/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-l4X-L_vu5xg/UEgGt9vaT0I/AAAAAAAADJk/t_AJkwje_6s/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-ed3MfPs2tNg/UEgGvnbWaWI/AAAAAAAADJs/i4HZap4XdRo/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-HFbLWywUmv4/UEgGw9Mb6BI/AAAAAAAADJ0/xbuatBC6iVk/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-Vd7tjH0cBXo/UEgGyvAfB0I/AAAAAAAADJ8/b0R_-y_olpc/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-hl0bgqr9xYM/UEgG0KARcfI/AAAAAAAADKE/n4E211gYprE/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-pkJbIk6RVYA/UEgG2H0oKtI/AAAAAAAADKM/mqmxT-wmFxI/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-xsA38Tf6980/UEgG3xFc7yI/AAAAAAAADKU/M7q-FzZb77w/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-ChNCOidsYDY/UEgG7U6O5DI/AAAAAAAADKc/ldHDEe0wxBM/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-m8rl8wICR90/UEgG-Ch4wvI/AAAAAAAADKk/wd5CjxVq9k8/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-PuYMVFndKeg/UEgHAK6kCDI/AAAAAAAADKs/u1-Bt5Kcu2A/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-ouNKBLc-sBA/UEgHBZvbwMI/AAAAAAAADK0/1dO2kJR9iFU/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-5eeCzTSML8w/UEgHDq7D4GI/AAAAAAAADK8/Jxpemg1x1jY/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-wyebw3lados/UEgHFm4xOBI/AAAAAAAADLE/ZxC4RGE1cvo/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-lrEf73b8gRI/UEgHHq43MTI/AAAAAAAADLM/Zr2SxvqhzBM/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-MnTaKEUC17Q/UEgHJSRDV1I/AAAAAAAADLU/j749kB8rD3o/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-LBF9m4P8uwE/UEgHLfP2dQI/AAAAAAAADLk/1BntCsh_keg/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-eoy_YaK01AE/UEgHM4IPHRI/AAAAAAAADLs/CfAfFyY7--M/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-pbjjIgvDBKM/UEgHPr69J2I/AAAAAAAADL0/Wz_pMrV-AU8/s1200/1.jpg?imgmax=2048http://2.bp.blogspot.com/-pQg_EeYL1OY/UEgHSXrQMSI/AAAAAAAADL8/myg9uXACE7o/s1200/1.jpg?imgmax=2048', '2018-03-31 03:34:59', NULL),
(14, 4, 3, '', 2, 0, 'http://3.bp.blogspot.com/-_H7bhDDFHVc/UnyMVzIkUtI/AAAAAAACBqk/j75ZtPsy0e0/s1600/Chap+002-02.jpg?imgmax=2000http://1.bp.blogspot.com/-3NJHBvUoC9I/UnyMV89ViGI/AAAAAAACBqs/rtTXTnPHZEk/s1600/Chap+002-03.jpg?imgmax=2000http://2.bp.blogspot.com/-6VgUfHhHOc4/UnyMWvTMq-I/AAAAAAACBq0/3NxHUXuxCCM/s1600/Chap+002-04.jpg?imgmax=2000http://4.bp.blogspot.com/-M7ypqAhLSoo/UnyMXEWLObI/AAAAAAACBq8/3WGl8CNSSY8/s1600/Chap+002-05.jpg?imgmax=2000http://1.bp.blogspot.com/-TGW2ztK8Gnw/UnyMXQSKIVI/AAAAAAACBrA/N7M-XsOKrlo/s1600/Chap+002-06.jpg?imgmax=2000http://4.bp.blogspot.com/-EFCgUN6CSoM/UnyMYna9EmI/AAAAAAACBrc/owo85RgIKuo/s1600/Chap+002-07.jpg?imgmax=2000http://1.bp.blogspot.com/-8AcPUdDQH40/UnyMYd90QgI/AAAAAAACBrQ/bLeqV1t-WDk/s1600/Chap+002-08.jpg?imgmax=2000http://1.bp.blogspot.com/-vqi_KLoecrA/UnyMYqNDKnI/AAAAAAACBrU/jU-X5GcGpsg/s1600/Chap+002-09.jpg?imgmax=2000http://4.bp.blogspot.com/-z3_gGXLUZcA/UnyMZc8-tsI/AAAAAAACBrk/8xIqbXhunnI/s1600/Chap+002-10.jpg?imgmax=2000http://2.bp.blogspot.com/-9Jqqo-Gto8U/UnyMZ1p8ZPI/AAAAAAACBrs/qtF-SGmMa0A/s1600/Chap+002-11.jpg?imgmax=2000http://4.bp.blogspot.com/-VoHs9dDxa8Y/UnyMaO8uk3I/AAAAAAACBrw/dFAdnPj8MfI/s1600/Chap+002-12.jpg?imgmax=2000http://4.bp.blogspot.com/-eedhvgwcOig/UnyMbNV8unI/AAAAAAACBsA/n0tiB1nvEbI/s1600/Chap+002-13.jpg?imgmax=2000http://4.bp.blogspot.com/-LzFMNEfUR8o/UnyMbckt42I/AAAAAAACBsE/agLSSKhmXIA/s1600/Chap+002-14.jpg?imgmax=2000http://2.bp.blogspot.com/-o4wmU1snUSg/UnyMbhhFnkI/AAAAAAACBsI/pb8gqUHOeTk/s1600/Chap+002-15.jpg', 'doraemon_2_1.jpg/doraemon_2_2.jpg/doraemon_2_3.jpg/doraemon_2_4.jpg/doraemon_2_5.jpg/doraemon_2_6.jpg/doraemon_2_7.jpg/doraemon_2_8.jpg/doraemon_2_9.jpg/doraemon_2_10.jpg/doraemon_2_11.jpg/doraemon_2_12.jpg/doraemon_2_13.jpg/doraemon_2_14.jpg', '2018-03-31 03:39:04', NULL),
(15, 4, 3, '', 3, 0, 'http://2.bp.blogspot.com/-VUqAdo997x0/UnyMiOqbeWI/AAAAAAACBsc/XrGk3iHfFeI/s1600/Chap+003-01.jpg?imgmax=2000http://1.bp.blogspot.com/-BsUQsmzd8as/UnyMiLv9piI/AAAAAAACBsk/LmI-sAvUUe4/s1600/Chap+003-02.jpg?imgmax=2000http://3.bp.blogspot.com/-_9npOmMEN78/UnyMh_sHk6I/AAAAAAACBsY/GqltR8qLzNM/s1600/Chap+003-03.jpg?imgmax=2000http://3.bp.blogspot.com/-fyoNixAWYsM/UnyMii9h7FI/AAAAAAACBss/Q9ZOov2WWoI/s1600/Chap+003-04.jpg?imgmax=2000http://1.bp.blogspot.com/-bOMXJvTdupg/UnyMjgUyVtI/AAAAAAACBs0/n4ccWc5ypt4/s1600/Chap+003-05.jpg?imgmax=2000http://1.bp.blogspot.com/-KJCS10pPJKk/UnyMj_Q3GiI/AAAAAAACBtE/hhtpkOG0zEQ/s1600/Chap+003-06.jpg?imgmax=2000http://2.bp.blogspot.com/-oq6l-uYBAn0/UnyMj71NpgI/AAAAAAACBtA/2xfNzSIo9lM/s1600/Chap+003-07.jpg?imgmax=2000http://2.bp.blogspot.com/-QguLeafh6jA/UnyMkziJVhI/AAAAAAACBtM/DsJ5wf_aMHg/s1600/Chap+003-08.jpg?imgmax=2000http://1.bp.blogspot.com/-ivmbZLXCTdw/UnyMlGr_aII/AAAAAAACBtQ/iWTH8yHsYws/s1600/Chap+003-credits.jpg', 'doraemon_3_1.jpg/doraemon_3_2.jpg/doraemon_3_3.jpg/doraemon_3_4.jpg/doraemon_3_5.jpg/doraemon_3_6.jpg/doraemon_3_7.jpg/doraemon_3_8.jpg/doraemon_3_9.jpg/doraemon_3_10.jpg/doraemon_3_11.jpg/doraemon_3_12.jpg/doraemon_3_13.jpg/doraemon_3_14.jpg/doraemon_3_15.jpg/doraemon_3_16.jpg/doraemon_3_17.jpg/doraemon_3_18.jpg/doraemon_3_19.jpg/doraemon_3_20.jpg/doraemon_3_1.jpg/doraemon_3_2.jpg/doraemon_3_3.jpg/doraemon_3_4.jpg/doraemon_3_5.jpg/doraemon_3_6.jpg/doraemon_3_7.jpg/doraemon_3_8.jpg/doraemon_3_9.jpg/doraemon_3_10.jpg/doraemon_3_11.jpg/doraemon_3_12.jpg/doraemon_3_13.jpg/doraemon_3_14.jpg/doraemon_3_15.jpg/doraemon_3_16.jpg/doraemon_3_17.jpg/doraemon_3_18.jpg/doraemon_3_19.jpg/doraemon_3_20.jpg', '2018-03-31 03:39:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comics`
--

CREATE TABLE `comics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_comic` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_less` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `id_author` int(11) NOT NULL,
  `id_editor` int(11) NOT NULL,
  `category` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `chapter` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comics`
--

INSERT INTO `comics` (`id`, `name_comic`, `name_less`, `id_author`, `id_editor`, `category`, `description`, `images`, `view`, `status`, `create_time`, `update_time`, `chapter`) VALUES
(1, 'Thám tử lừng danh conan', 'Detective_Conan', 1, 1, 'Manga', 'Dị Thứ Nguyên Thể - Nova\" bắt đầu gây chiến tranh với loài người. Để chống lại nỗi hiểm họa này, học viện Genetics được thành lập để huấn luyện những chiến binh Pandora có khả năng sử dụng vũ khí và giáp chiến đặc biệt. Kazuya Aoi quyết định nhập học trường vì lời hứa với chị gái cậu, một chiến binh Vip đã hi sinh trong trận chiến. Ở đây cậu gặp Satellizer El Bridgette, biệt danh \"Untouchable Queen\" vì tính tình cách ly lập dị và cũng vì là học sinh cấp cao tại học viện, có thành tích bất bại trong giả lập thực chiến... cho tới khi gặp được Aoi.', 'anh1.jpg', 55, 1, '2018-03-08 00:00:00', '2018-03-01 00:00:00', 1),
(2, 'Beelzebub', 'beelzebub', 2, 3, 'Action, Anime, Comedy, Drama, Fantasy, Shounen', 'Vào một ngày, quỷ vương bảo rằng \"Từ ngày mai ta sẽ tiêu diệt loài người\". Nhưng rồi vì một vài lí do, ông ta quyết định chuyển giao việc này lại cho con trai mới sinh chưa được bao lâu của mình – Beelzebub. Và thế là Beelzebub được đưa đến thế giới loài người để nuôi dạy trưởng thành, rồi sau này chính cậu sẽ phụng mệnh tiêu diệt loài người. Để nuôi dưỡng Beelzebub lớn mạnh lên cần một người mạnh mẽ làm cha/mẹ cho cậu bé. Và nhân vật chính của truyện – Oga Tatsumi đã được chọn bởi sức mạnh đáng sợ của cậu.', 'anh3.jpg', 85, 1, '2018-03-10 00:00:00', '2017-12-20 00:00:00', 1),
(4, 'Doraemon', 'doraemon', 2, 2, 'Comedy , Fantasy', 'Chuyện kể về ông chủ của 1 quán ăn nhỏ. Chuyện bắt đầu khi anh gặp vài thằng \\\"trẻ trâu\\\", chúng nghĩ rằng anh chẳng là ai cả. Nhưng liệu chúng có biết đc quá khứ của anh. Anh chỉ là chủ của 1 quán ăn bình thường, hay một cái gì đó hơn thế ? Hãy cùng tìm hiều về anh ấy nhé...', 'anh5.jpg', 11, 0, '2018-03-14 17:02:42', '2018-03-14 17:02:42', 1),
(8, 'Comic by Huydz', NULL, 2, 2, 'anime, manga', 'ádfg', 'anh9.jpg', 9, 0, '2018-04-01 18:34:52', NULL, 1),
(9, 'Tây Du', NULL, 2, 2, 'sda', 'a', 'anh10.jpg', 66, 0, '2018-04-01 20:17:26', NULL, 1),
(10, 'Tiểu Mập Mập', NULL, 3, 1, 'Manga, life not easy', 'Hello Huy đz', 'anh2.jpg', 7, 0, '2018-04-01 21:28:02', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE `editor` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`id`, `name`, `phone`, `address`, `note`, `avatar`, `create_time`, `update_time`) VALUES
(1, 'Vũ Quốc Huy', 1666624463, 'Hà Đông -Hà Nội', 'Đc mệnh danh là Huy Hào Hiệp + Đẹp zai + giỏi nhất việc ảo tưởng sức mạnh :D :P :V :)) ', 'huy.jpg', '2018-03-10 00:00:00', NULL),
(2, 'I Miss You', 1666624489, 'Hà Nội', 'Something else', 'anh7.jpg', '2018-03-19 00:00:00', NULL),
(3, 'Sad Love', 1666624466, 'Hà Nội', '1 Chuyện tình buồn.', 'sad.jpg', '2018-03-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `viewlogwebs`
--

CREATE TABLE `viewlogwebs` (
  `LogID` bigint(20) NOT NULL,
  `IpClient` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `CreatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID_Comic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `viewlogwebs`
--

INSERT INTO `viewlogwebs` (`LogID`, `IpClient`, `CreatedTime`, `ID_Comic`) VALUES
(1, '::1', '2018-03-29 22:43:35', 2),
(2, '::1', '2018-03-29 22:44:04', 2),
(3, '::1', '2018-03-29 22:44:10', 3),
(4, '::1', '2018-03-29 23:24:31', 6),
(5, '::1', '2018-03-30 00:59:03', 2),
(6, '::1', '2018-03-30 00:59:47', 2),
(7, '::1', '2018-03-30 01:01:30', 3),
(8, '::1', '2018-03-30 01:03:15', 5),
(9, '::1', '2018-03-30 01:04:13', 5),
(10, '::1', '2018-03-30 01:04:17', 5),
(11, '::1', '2018-03-30 01:05:33', 5),
(12, '::1', '2018-03-30 01:05:37', 2),
(13, '::1', '2018-03-30 01:32:29', 3),
(14, '::1', '2018-03-30 01:33:57', 3),
(15, '::1', '2018-03-30 01:34:21', 5),
(16, '::1', '2018-03-30 01:36:36', 3),
(17, '::1', '2018-03-30 01:56:38', 1),
(18, '::1', '2018-03-30 02:04:24', 2),
(19, '::1', '2018-03-30 02:04:52', 2),
(20, '::1', '2018-03-30 02:05:24', 6),
(21, '::1', '2018-03-30 02:06:40', 6),
(22, '::1', '2018-03-30 02:07:49', 2),
(23, '::1', '2018-03-30 02:09:23', 2),
(24, '::1', '2018-03-30 02:09:26', 2),
(25, '::1', '2018-03-30 02:25:26', 2),
(26, '::1', '2018-03-30 02:39:41', 7),
(27, '::1', '2018-03-30 02:58:10', 4),
(28, '::1', '2018-03-30 02:58:27', 5),
(29, '::1', '2018-03-30 03:00:39', 5),
(30, '::1', '2018-03-30 03:03:59', 1),
(31, '::1', '2018-03-30 12:21:38', 5),
(32, '::1', '2018-03-30 12:21:44', 5),
(33, '::1', '2018-03-30 12:21:55', 6),
(34, '::1', '2018-03-30 12:22:12', 2),
(35, '::1', '2018-03-30 12:22:51', 7),
(36, '::1', '2018-03-30 13:33:30', 1),
(37, '::1', '2018-03-30 13:33:42', 3),
(38, '::1', '2018-03-30 13:33:53', 2),
(39, '::1', '2018-03-31 00:24:37', 6),
(40, '::1', '2018-03-31 00:28:33', 2),
(41, '::1', '2018-03-31 01:35:15', 6),
(42, '::1', '2018-03-31 01:35:20', 6),
(43, '::1', '2018-03-31 01:36:32', 4),
(44, '::1', '2018-03-31 01:36:43', 2),
(45, '::1', '2018-03-31 02:22:20', 1),
(46, '::1', '2018-03-31 03:52:49', 5),
(47, '::1', '2018-03-31 03:53:09', 1),
(48, '::1', '2018-03-31 03:53:23', 6),
(49, '::1', '2018-03-31 03:53:33', 1),
(50, '::1', '2018-03-31 04:35:33', 4),
(51, '::1', '2018-03-31 04:35:36', 7),
(52, '::1', '2018-03-31 04:35:42', 7),
(53, '::1', '2018-03-31 04:35:45', 5),
(54, '::1', '2018-03-31 04:35:49', 7),
(55, '::1', '2018-03-31 05:36:58', 5),
(56, '::1', '2018-03-31 05:37:01', 7),
(57, '::1', '2018-03-31 05:39:17', 4),
(58, '::1', '2018-03-31 05:39:22', 6),
(59, '::1', '2018-03-31 07:55:57', 2),
(60, '::1', '2018-03-31 07:57:08', 7),
(61, '::1', '2018-03-31 07:57:44', 1),
(62, '::1', '2018-03-31 07:59:31', 2),
(63, '::1', '2018-03-31 08:08:56', 2),
(64, '::1', '2018-03-31 08:09:07', 2),
(65, '::1', '2018-03-31 08:09:34', 2),
(66, '::1', '2018-03-31 08:09:42', 2),
(67, '::1', '2018-03-31 08:09:52', 2),
(68, '::1', '2018-03-31 08:10:14', 2),
(69, '::1', '2018-03-31 08:11:03', 2),
(70, '::1', '2018-03-31 08:11:38', 2),
(71, '::1', '2018-03-31 08:13:12', 2),
(72, '::1', '2018-03-31 08:18:02', 2),
(73, '::1', '2018-03-31 08:19:18', 2),
(74, '::1', '2018-03-31 08:28:45', 2),
(75, '::1', '2018-03-31 09:18:32', 5),
(76, '::1', '2018-03-31 09:19:52', 1),
(77, '::1', '2018-03-31 09:20:04', 2),
(78, '::1', '2018-03-31 09:28:39', 2),
(79, '::1', '2018-03-31 09:33:19', 5),
(80, '::1', '2018-03-31 09:33:42', 2),
(81, '::1', '2018-03-31 15:37:48', 8),
(82, '::1', '2018-03-31 15:50:03', 0),
(83, '::1', '2018-03-31 15:51:23', 4),
(84, '::1', '2018-03-31 16:23:36', 2),
(85, '::1', '2018-03-31 17:54:11', 5),
(86, '::1', '2018-03-31 21:55:04', 5),
(87, '::1', '2018-03-31 21:55:15', 1),
(88, '::1', '2018-03-31 21:55:20', 4),
(89, '::1', '2018-03-31 22:15:15', 2),
(90, '::1', '2018-03-31 22:17:19', 1),
(91, '::1', '2018-03-31 22:19:13', 2),
(92, '::1', '2018-03-31 22:27:14', 1),
(93, '::1', '2018-03-31 22:36:51', 2),
(94, '::1', '2018-03-31 22:36:58', 4),
(95, '::1', '2018-03-31 22:56:27', 1),
(96, '::1', '2018-03-31 22:57:34', 2),
(97, '::1', '2018-03-31 23:17:34', 4),
(98, '::1', '2018-03-31 23:22:43', 2),
(99, '::1', '2018-03-31 23:29:05', 1),
(100, '::1', '2018-03-31 23:40:36', 8),
(101, '::1', '2018-04-01 01:49:30', 2),
(102, '::1', '2018-04-01 08:24:42', 1),
(103, '::1', '2018-04-01 18:12:04', 1),
(104, '::1', '2018-04-01 18:27:28', 2),
(105, '::1', '2018-04-01 18:27:31', 1),
(106, '::1', '2018-04-01 21:03:40', 8),
(107, '::1', '2018-04-01 21:22:09', 9),
(108, '::1', '2018-04-01 21:45:05', 2),
(109, '::1', '2018-04-01 21:59:18', 2),
(110, '::1', '2018-04-01 21:59:55', 2),
(111, '::1', '2018-04-02 07:54:22', 2),
(112, '::1', '2018-04-02 08:58:39', 2),
(113, '::1', '2018-04-02 14:32:29', 1),
(114, '::1', '2018-04-02 14:33:41', 2),
(115, '::1', '2018-04-02 14:34:16', 1),
(116, '::1', '2018-04-02 15:15:56', 1),
(117, '::1', '2018-04-02 15:16:00', 1),
(118, '::1', '2018-04-02 15:17:19', 1),
(119, '::1', '2018-04-02 15:18:53', 2),
(120, '::1', '2018-04-02 15:19:00', 2),
(121, '::1', '2018-04-02 15:20:16', 2),
(122, '::1', '2018-04-02 15:22:00', 2),
(123, '::1', '2018-04-02 15:22:17', 2),
(124, '::1', '2018-04-02 15:22:50', 2),
(125, '::1', '2018-04-02 15:22:57', 2),
(126, '::1', '2018-04-02 15:23:10', 2),
(127, '::1', '2018-04-02 15:28:27', 4),
(128, '::1', '2018-04-02 15:29:35', 1),
(129, '::1', '2018-04-02 15:32:40', 1),
(130, '::1', '2018-04-02 15:32:46', 8),
(131, '::1', '2018-04-02 15:46:51', 1),
(132, '::1', '2018-04-02 15:50:20', 9),
(133, '::1', '2018-04-02 15:51:33', 9),
(134, '::1', '2018-04-02 15:51:41', 9),
(135, '::1', '2018-04-02 15:51:52', 9),
(136, '::1', '2018-04-02 15:53:43', 9),
(137, '::1', '2018-04-02 15:53:45', 9),
(138, '::1', '2018-04-02 15:56:02', 9),
(139, '::1', '2018-04-02 15:56:10', 9),
(140, '::1', '2018-04-02 15:56:19', 2),
(141, '::1', '2018-04-02 15:56:24', 1),
(142, '::1', '2018-04-02 16:42:29', 2),
(143, '::1', '2018-04-02 17:07:24', 2),
(144, '::1', '2018-04-02 17:08:07', 2),
(145, '::1', '2018-04-02 17:19:51', 10),
(146, '::1', '2018-04-02 17:29:56', 11),
(147, '::1', '2018-04-02 17:30:00', 2),
(148, '::1', '2018-04-02 17:33:21', 2),
(149, '::1', '2018-04-02 17:36:10', 1),
(150, '::1', '2018-04-02 19:02:31', 2),
(151, '::1', '2018-04-02 19:03:33', 2),
(152, '::1', '2018-04-02 19:03:39', 2),
(153, '::1', '2018-04-02 19:03:49', 2),
(154, '::1', '2018-04-02 19:04:04', 1),
(155, '::1', '2018-04-02 19:07:10', 10),
(156, '::1', '2018-04-02 19:25:23', 10),
(157, '::1', '2018-04-02 19:53:20', 2),
(158, '::1', '2018-04-02 20:12:19', 1),
(159, '::1', '2018-04-02 20:30:25', 1),
(160, '::1', '2018-04-02 20:30:52', 2),
(161, '::1', '2018-04-02 20:31:06', 9),
(162, '::1', '2018-04-02 20:31:13', 10),
(163, '::1', '2018-04-02 20:32:02', 9),
(164, '::1', '2018-04-02 20:32:14', 8),
(165, '::1', '2018-04-02 20:36:10', 1),
(166, '::1', '2018-04-02 20:36:26', 10),
(167, '::1', '2018-04-02 20:36:45', 1),
(168, '::1', '2018-04-02 20:36:58', 1),
(169, '::1', '2018-04-02 20:37:13', 1),
(170, '::1', '2018-04-02 20:37:31', 9),
(171, '::1', '2018-04-02 20:37:32', 0),
(172, '::1', '2018-04-02 20:38:21', 2),
(173, '::1', '2018-04-02 20:38:24', 2),
(174, '::1', '2018-04-02 20:38:26', 1),
(175, '::1', '2018-04-02 20:38:28', 8),
(176, '::1', '2018-04-02 20:38:35', 9),
(177, '::1', '2018-04-02 20:38:37', 9),
(178, '::1', '2018-04-02 20:38:39', 2),
(179, '::1', '2018-04-02 20:38:42', 2),
(180, '::1', '2018-04-02 20:39:28', 2),
(181, '::1', '2018-04-02 20:39:48', 9),
(182, '::1', '2018-04-02 20:39:50', 9),
(183, '::1', '2018-04-02 20:39:51', 9),
(184, '::1', '2018-04-02 20:39:52', 9),
(185, '::1', '2018-04-02 20:39:53', 9),
(186, '::1', '2018-04-02 20:39:55', 9),
(187, '::1', '2018-04-02 20:40:01', 9),
(188, '::1', '2018-04-02 20:40:02', 9),
(189, '::1', '2018-04-02 20:40:02', 9),
(190, '::1', '2018-04-02 20:40:19', 9),
(191, '::1', '2018-04-02 20:40:20', 9),
(192, '::1', '2018-04-02 20:40:21', 9),
(193, '::1', '2018-04-02 20:40:22', 9),
(194, '::1', '2018-04-02 20:40:49', 9),
(195, '::1', '2018-04-02 20:40:50', 9),
(196, '::1', '2018-04-02 20:40:51', 9),
(197, '::1', '2018-04-02 20:40:52', 9),
(198, '::1', '2018-04-02 20:40:53', 9),
(199, '::1', '2018-04-02 20:41:24', 9),
(200, '::1', '2018-04-02 20:41:44', 9),
(201, '::1', '2018-04-02 20:42:08', 9),
(202, '::1', '2018-04-02 20:42:09', 9),
(203, '::1', '2018-04-02 20:42:10', 9),
(204, '::1', '2018-04-02 20:42:11', 9),
(205, '::1', '2018-04-02 20:42:12', 9),
(206, '::1', '2018-04-02 20:42:13', 9),
(207, '::1', '2018-04-02 20:42:15', 9),
(208, '::1', '2018-04-02 20:42:18', 11),
(209, '::1', '2018-04-02 20:42:22', 11),
(210, '::1', '2018-04-02 20:44:55', 9),
(211, '::1', '2018-04-02 20:44:57', 9),
(212, '::1', '2018-04-02 20:44:58', 9),
(213, '::1', '2018-04-02 20:44:59', 9),
(214, '::1', '2018-04-02 20:45:00', 9),
(215, '::1', '2018-04-02 20:46:13', 9),
(216, '::1', '2018-04-02 20:46:15', 9),
(217, '::1', '2018-04-02 20:46:16', 9),
(218, '::1', '2018-04-02 20:46:46', 4),
(219, '::1', '2018-04-02 20:46:48', 4),
(220, '::1', '2018-04-02 21:04:00', 9),
(221, '::1', '2018-04-02 21:04:01', 9),
(222, '::1', '2018-04-02 21:04:04', 9),
(223, '::1', '2018-04-02 21:04:06', 9),
(224, '::1', '2018-04-02 21:04:59', 9),
(225, '::1', '2018-04-02 21:05:11', 2),
(226, '::1', '2018-04-02 21:06:40', 10),
(227, '::1', '2018-04-02 21:06:41', 10),
(228, '::1', '2018-04-02 21:07:53', 8),
(229, '::1', '2018-04-02 21:08:07', 8),
(230, '::1', '2018-04-02 21:09:01', 8),
(231, '::1', '2018-04-02 21:09:58', 1),
(232, '::1', '2018-04-02 21:10:08', 1),
(233, '::1', '2018-04-02 21:11:16', 1),
(234, '::1', '2018-04-02 21:11:34', 1),
(235, '::1', '2018-04-02 21:12:00', 1),
(236, '::1', '2018-04-02 21:13:42', 1),
(237, '::1', '2018-04-02 21:14:46', 1),
(238, '::1', '2018-04-02 21:14:51', 1),
(239, '::1', '2018-04-02 21:14:56', 1),
(240, '::1', '2018-04-02 21:16:20', 9),
(241, '::1', '2018-04-02 21:17:09', 9),
(242, '::1', '2018-04-02 21:17:14', 9),
(243, '::1', '2018-04-02 21:17:30', 9),
(244, '::1', '2018-04-02 21:17:34', 9),
(245, '::1', '2018-04-02 21:17:44', 9),
(246, '::1', '2018-04-02 21:17:54', 8),
(247, '::1', '2018-04-02 21:18:01', 11),
(248, '::1', '2018-04-02 21:18:05', 11),
(249, '::1', '2018-04-02 21:18:40', 11),
(250, '::1', '2018-04-02 21:18:43', 11),
(251, '::1', '2018-04-02 21:18:48', 1),
(252, '::1', '2018-04-02 21:20:40', 1),
(253, '::1', '2018-04-02 21:20:43', 1),
(254, '::1', '2018-04-02 21:20:46', 1),
(255, '::1', '2018-04-02 21:20:49', 8),
(256, '::1', '2018-04-02 21:22:13', 2),
(257, '::1', '2018-04-02 21:22:15', 2),
(258, '::1', '2018-04-02 21:22:20', 2),
(259, '::1', '2018-04-02 21:22:21', 2),
(260, '::1', '2018-04-02 21:22:22', 2),
(261, '::1', '2018-04-02 21:22:26', 1),
(262, '::1', '2018-04-02 21:22:28', 1),
(263, '::1', '2018-04-02 21:22:29', 1),
(264, '::1', '2018-04-02 21:22:41', 1),
(265, '::1', '2018-04-02 21:22:57', 1),
(266, '::1', '2018-04-02 21:23:14', 9),
(267, '::1', '2018-04-02 21:23:16', 9),
(268, '::1', '2018-04-02 21:23:19', 9),
(269, '::1', '2018-04-02 21:23:21', 9),
(270, '::1', '2018-04-02 21:23:24', 9),
(271, '::1', '2018-04-02 21:23:27', 9),
(272, '::1', '2018-04-02 21:23:30', 1),
(273, '::1', '2018-04-02 21:23:32', 1),
(274, '::1', '2018-04-02 21:24:22', 2),
(275, '::1', '2018-04-02 21:24:24', 2),
(276, '::1', '2018-04-02 21:25:37', 2),
(277, '::1', '2018-04-02 21:26:21', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `address` (`address`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_comic` (`id_comic`);

--
-- Indexes for table `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_author` (`id_author`),
  ADD KEY `id_editor` (`id_editor`);

--
-- Indexes for table `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewlogwebs`
--
ALTER TABLE `viewlogwebs`
  ADD PRIMARY KEY (`LogID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comics`
--
ALTER TABLE `comics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `viewlogwebs`
--
ALTER TABLE `viewlogwebs`
  MODIFY `LogID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
