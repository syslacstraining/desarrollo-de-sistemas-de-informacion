-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2022 at 03:38 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db04`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `codigo` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `codigo`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
('234114ea-b9e2-4620-b0ab-cd10ad3a622c', 'CAT1', 'COMESTIBLES - 2', '2022-02-10 02:31:35', '2022-02-19 03:11:39', NULL),
('df126360-9131-11ec-a338-8bb24fe3f95e', 'CAT201', 'CATEGORIA 201', '2022-02-19 03:13:12', '2022-02-19 03:13:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `codigo` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT '0.00',
  `stock` int DEFAULT '0',
  `categoria_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre`, `precio`, `stock`, `categoria_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('237e2400-8633-11ec-a457-0dee913da88e', 'P201', 'PRODUCTO 201', '150.25', NULL, '234114ea-b9e2-4620-b0ab-cd10ad3a622c', '2022-02-05 03:24:33', '2022-02-19 03:33:50', NULL),
('3a1e4130-8633-11ec-bbb6-ef464ae12c99', 'P202', 'PRODUCTO 202', '91.50', NULL, '234114ea-b9e2-4620-b0ab-cd10ad3a622c', '2022-02-05 03:25:11', '2022-02-19 03:33:43', NULL),
('448bfec0-9134-11ec-9b92-11ba1562eeb7', 'P4002', 'PRODUCTO 4002', '50.00', NULL, NULL, '2022-02-19 03:30:21', '2022-02-19 03:30:21', NULL),
('5d321140-8633-11ec-8dec-8f26cfee9db0', 'P301', 'PRODUCTO 301', '600.00', NULL, '234114ea-b9e2-4620-b0ab-cd10ad3a622c', '2022-02-05 03:26:10', '2022-02-19 03:33:28', NULL),
('99cd6ea0-9133-11ec-85be-99e2215a0df3', 'P4001', 'PRODUCTO 4001', '60.00', NULL, NULL, '2022-02-19 03:25:35', '2022-02-19 03:32:59', NULL),
('d9fe3730-8f98-11ec-9ecd-b9eec82c7195', 'P2002', 'PRODUCTO 2002 - modificado', '100.00', NULL, NULL, '2022-02-17 02:25:19', '2022-02-19 03:33:15', NULL),
('e58c8430-8f98-11ec-baac-d3463d7cf146', 'P2003', 'PRODUCTO 2003 111356787654', '90.00', NULL, NULL, '2022-02-17 02:25:39', '2022-02-19 03:33:10', NULL),
('f5444440-8f98-11ec-b536-433b16188498', 'P2004', 'PRODUCTO 2004 11111', '70.00', NULL, NULL, '2022-02-17 02:26:05', '2022-02-19 03:33:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
