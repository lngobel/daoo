-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jan-2023 às 14:46
-- Versão do servidor: 10.9.2-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetodaoo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'foto.png',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `email`, `senha`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ronaldo Nazário', '999.999.999-99', 'teste@email.com', '12345678', 'foto.png', 0, '2023-01-04 08:45:06', '2023-01-04 08:45:06'),
(2, 'Romário', '111.111.111-10', 'teste@email.com', '12345678', 'foto.png', 0, '2023-01-04 08:45:33', '2023-01-04 14:33:38'),
(3, 'Luis Suarez', '999.999.999-10', 'teste@email.com', '12345678', 'foto.png', 0, '2023-01-04 08:46:47', '2023-01-04 08:46:47'),
(4, 'Diego Clementino', '191.919.191-91', 'teste@email.com', '23456789', 'foto.png', 0, '2023-01-04 15:47:16', '2023-01-04 16:06:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregadors`
--

CREATE TABLE `entregadors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vencimento_cnh` date NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'foto.png',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `entregadors`
--

INSERT INTO `entregadors` (`id`, `nome`, `cpf`, `email`, `senha`, `vencimento_cnh`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vanderlei Luxemburgo', '123.456.789-10', 'teste@email.com', '12345678', '2025-11-20', 'foto.png', 0, '2023-01-04 08:47:19', '2023-01-04 08:47:19'),
(2, 'Celso Roth', '123.456.789-11', 'teste@email.com', '12345678', '2024-09-14', 'foto.png', 0, '2023-01-04 08:47:58', '2023-01-04 08:47:58'),
(3, 'Lisca Doido', '000.000.000-00', 'teste@email.com', '12345678', '2026-02-10', 'foto.png', 0, '2023-01-04 08:48:39', '2023-01-04 08:48:39'),
(4, 'Rogério Zimmermann', '123.123.123-45', 'teste@email.com', '12345678', '2026-10-29', 'foto.png', 0, '2023-01-04 16:18:32', '2023-01-04 16:34:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_23_021040_create_produtos_table', 1),
(6, '2022_11_23_030659_create_clientes_table', 1),
(7, '2022_11_23_030909_create_entregadors_table', 1),
(8, '2022_11_23_030925_create_veiculos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 6, 'lucasgobel@gmail.com', 'd96bdade7fb6340e4c2c1e8312adc6f1e49d3a6c431c85adccd31bfc71b2568a', '[\"is-admin\"]', NULL, NULL, '2023-01-04 09:08:20', '2023-01-04 09:08:20'),
(2, 'App\\Models\\User', 6, 'lucasgobel@gmail.com', 'e619765cc6aaee838baaab6835166edc0efa04cd9b2504cc3d90ce3a1ecf1fff', '[\"is-admin\"]', '2023-01-04 09:21:51', NULL, '2023-01-04 09:13:41', '2023-01-04 09:21:51'),
(3, 'App\\Models\\User', 6, 'lucasgobel@gmail.com', '0ee80e1238fc54e590d05723fe295261d85feb89524969b0bae84022495c5865', '[\"is-admin\"]', '2023-01-04 16:43:37', NULL, '2023-01-04 14:31:04', '2023-01-04 16:43:37'),
(4, 'App\\Models\\User', 7, 'teste@gmail.com', '0e569ff8868076d39fe67a5f13ab791dcb07c41684b3b36484e9b18ce59ac7c2', '[]', '2023-01-04 16:17:12', NULL, '2023-01-04 14:35:39', '2023-01-04 16:17:12'),
(5, 'App\\Models\\User', 7, 'teste@gmail.com', '834c389611d8eb2c4ecdcaf59557d08baa95d660fcded781de3dd60510d0f8cc', '[]', '2023-01-04 16:42:40', NULL, '2023-01-04 16:39:25', '2023-01-04 16:42:40'),
(6, 'App\\Models\\User', 6, 'lucasgobel@gmail.com', 'bbdd008c333773d271c7e3d602d5bf0ab130d2e822a615859860d3d34a778752', '[\"is-admin\"]', '2023-01-04 16:43:07', NULL, '2023-01-04 16:39:49', '2023-01-04 16:43:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_estoque` int(11) NOT NULL,
  `preco` double(8,2) NOT NULL,
  `importado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Bernie Skiles', 'wyman.vivienne@example.org', '2023-01-04 08:43:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'uuBBlugQNOvqPPmNYEAjp36JvYCDpSrXlObie9MQvGCHlRsQBvPmvB8D9tRR', '2023-01-04 08:43:26', '2023-01-04 08:43:26'),
(2, 'Prof. Lexus Durgan', 'eliane.pollich@example.net', '2023-01-04 08:43:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '895nid4OLj', '2023-01-04 08:43:26', '2023-01-04 08:43:26'),
(3, 'Ola Hammes', 'kohler.cali@example.org', '2023-01-04 08:43:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'eaRFMXdjzM', '2023-01-04 08:43:26', '2023-01-04 08:43:26'),
(4, 'Ms. Fabiola Stracke DVM', 'norberto83@example.net', '2023-01-04 08:43:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'LlqQT85UKG', '2023-01-04 08:43:26', '2023-01-04 08:43:26'),
(5, 'Dr. Lelia Walter', 'lisa99@example.com', '2023-01-04 08:43:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'KIT9K6FIcG', '2023-01-04 08:43:26', '2023-01-04 08:43:26'),
(6, 'Lucas Gobel', 'lucasgobel@gmail.com', NULL, '$2y$10$McZvw3D/ciwFu2djlWSza.9xzrcq8I9ur/6TsFiaupr/oEc5LLrW.', 1, NULL, '2023-01-04 08:53:47', '2023-01-04 08:53:47'),
(7, 'Gilmar Santos', 'teste@gmail.com', NULL, '$2y$10$7oBY9.PX9g.2lxHpMIPVPueah/UxUQIR7axojX/GA5COQY.YZlerW', 0, NULL, '2023-01-04 08:54:23', '2023-01-04 08:54:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `placa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `renavam` int(11) NOT NULL,
  `vencimento_doc` date NOT NULL,
  `situacao_ipva` tinyint(1) NOT NULL DEFAULT 1,
  `entregador_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `placa`, `renavam`, `vencimento_doc`, `situacao_ipva`, `entregador_id`, `created_at`, `updated_at`) VALUES
(1, 'IZW4G50', 45687921, '2025-02-02', 1, 1, '2023-01-04 08:49:03', '2023-01-04 08:49:03'),
(2, 'IFW5J14', 74678921, '2023-10-13', 1, 2, '2023-01-04 08:49:28', '2023-01-04 08:49:28'),
(3, 'JHJ5R87', 45678921, '2026-05-28', 1, 3, '2023-01-04 08:49:45', '2023-01-04 08:49:45'),
(4, 'JFS5J02', 45687922, '2023-12-31', 1, 2, '2023-01-04 08:50:09', '2023-01-04 08:50:09'),
(6, 'IFW5J17', 45687977, '2026-08-19', 1, 3, '2023-01-04 08:50:50', '2023-01-04 08:50:50'),
(7, 'ISR4J23', 58972494, '2024-12-09', 1, 1, '2023-01-04 15:18:44', '2023-01-04 15:25:30');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `entregadors`
--
ALTER TABLE `entregadors`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `veiculos_entregador_id_foreign` (`entregador_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `entregadors`
--
ALTER TABLE `entregadors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD CONSTRAINT `veiculos_entregador_id_foreign` FOREIGN KEY (`entregador_id`) REFERENCES `entregadors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
