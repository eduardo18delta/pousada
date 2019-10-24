-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 24/10/2019 às 13:18
-- Versão do servidor: 5.7.26-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pousada`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Fazendo dump de dados para tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_23_042907_modify_table_users', 2),
(5, '2019_10_24_114221_create_table_textoshome', 3),
(6, '2019_10_24_114845_modify_table_textoshome', 4),
(7, '2019_10_24_135829_rename_table_textoshome', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `textoshome`
--

CREATE TABLE `textoshome` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Fazendo dump de dados para tabela `textoshome`
--

INSERT INTO `textoshome` (`id`, `titulo`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Incrível pousada', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar, libero scelerisque porta facilisis, ipsum felis hendrerit risus, at pellentesque quam augue vitae ante. Mauris condimentum erat ultricies imperdiet dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis sagittis augue. Proin non hendrerit metus, in tincidunt dui. Mauris non elit ac diam aliquam sollicitudin at vitae ipsum. Nunc a augue a nisl mollis maximus sit amet nec ante. Cras vulputate rutrum sapien, nec varius augue pharetra quis. ', NULL, NULL),
(2, 'Descubra Marimalde', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar, libero scelerisque porta facilisis, ipsum felis hendrerit risus, at pellentesque quam augue vitae ante. Mauris condimentum erat ultricies imperdiet dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis sagittis augue. Proin non hendrerit metus, in tincidunt dui. Mauris non elit ac diam aliquam sollicitudin at vitae ipsum. Nunc a augue a nisl mollis maximus sit amet nec ante. Cras vulputate rutrum sapien, nec varius augue pharetra quis. ', NULL, NULL),
(3, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar, libero scelerisque porta facilisis, ipsum felis hendrerit risus, at pellentesque quam augue vitae ante. Mauris condimentum erat ultricies imperdiet dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis sagittis augue. Proin non hendrerit metus, in tincidunt dui. Mauris non elit ac diam aliquam sollicitudin at vitae ipsum. Nunc a augue a nisl mollis maximus sit amet nec ante. Cras vulputate rutrum sapien, nec varius augue pharetra quis. ', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Eduardo', 'eduardo18delta@gmail.com', NULL, '$2y$10$yHAjA08MIZQDwei2wbCa4OE6St71959vEOkFyl9WUuN9knmYesURm', 'M8jLz1YMA7qpkLStUIBHkbJeDZ5l8PZjNDbeW247I97zpBPDYT9XWYc7mUkX', '2019-10-22 17:16:19', '2019-10-24 19:00:17', '1.jpeg.jpeg');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices de tabela `textoshome`
--
ALTER TABLE `textoshome`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `textoshome`
--
ALTER TABLE `textoshome`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
