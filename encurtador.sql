-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Fev-2021 às 20:49
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `encurtador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('v246018ui7f64812l4jtaolfupl98o5s', '::1', 1607349589, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373334393538393b),
('lh2ua4fal041r6t36jh6rbb3v8u827vv', '::1', 1607351848, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373335313834383b),
('r7v3gnmjfnithghed5iqrpesib85m2vc', '::1', 1607356417, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373335363431373b),
('uhgbk1u1gbgugbt94imrtoqr1mooeuhp', '::1', 1607356968, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373335363936383b),
('42nfkgk33c0fo8lurqce0q1ggndoad5t', '::1', 1607357352, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373335373335323b),
('1dg16pq8nko7e8acfo38v0b0vbir5qqa', '127.0.0.1', 1607357002, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373335373030323b),
('son9vkiofore1o4nh8oj4m48uro5crcm', '::1', 1607358954, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373335383935343b5f63695f70726576696f75735f75726c7c733a32323a22687474703a2f2f6c6f63616c686f73742f6c6f67696e223b69647c733a323a223333223b6e6f6d657c733a32303a225061756c6f20566963746f7220436172646f736f223b656d61696c7c733a31353a227061756c6f407061756c6f2e636f6d223b),
('5hg97r47qtqj1r5d36di78joj7j63un3', '::1', 1607359325, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373335393332353b5f63695f70726576696f75735f75726c7c733a32323a22687474703a2f2f6c6f63616c686f73742f6c6f67696e223b69647c733a323a223333223b6e6f6d657c733a32303a225061756c6f20566963746f7220436172646f736f223b656d61696c7c733a31353a227061756c6f407061756c6f2e636f6d223b),
('fll9ttm7snqkchv1n02j2vhla5ecnflv', '::1', 1607361478, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373336313437383b5f63695f70726576696f75735f75726c7c733a32323a22687474703a2f2f6c6f63616c686f73742f6c6f67696e223b69647c733a323a223333223b6e6f6d657c733a32303a225061756c6f20566963746f7220436172646f736f223b656d61696c7c733a31353a227061756c6f407061756c6f2e636f6d223b),
('ihd621475pknteiim2mafamcg8edjmbg', '::1', 1607364639, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373336343633393b5f63695f70726576696f75735f75726c7c733a32323a22687474703a2f2f6c6f63616c686f73742f6c6f67696e223b),
('8io1k7vnejr1tsnrhju6ucra68t9va31', '::1', 1607367093, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373336373039333b5f63695f70726576696f75735f75726c7c733a32323a22687474703a2f2f6c6f63616c686f73742f6c6f67696e223b6572726f727c733a34303a2254686520616374696f6e20796f7520726571756573746564206973206e6f7420616c6c6f7765642e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('hdm8s3glm9e9dr5gvi6n6ns2ldpptkd0', '::1', 1607367394, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373336373339343b5f63695f70726576696f75735f75726c7c733a32323a22687474703a2f2f6c6f63616c686f73742f6c6f67696e223b),
('363lg0q1b9nvlprhbsaqr79laiuvkn89', '::1', 1607368572, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373336383537323b5f63695f70726576696f75735f75726c7c733a32323a22687474703a2f2f6c6f63616c686f73742f6c6f67696e223b6572726f727c733a34303a2254686520616374696f6e20796f7520726571756573746564206973206e6f7420616c6c6f7765642e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('h4jptkbse9cpic7pjj2i93m85rvcc7nd', '::1', 1607369593, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373336393539333b5f63695f70726576696f75735f75726c7c733a32323a22687474703a2f2f6c6f63616c686f73742f6c6f67696e223b6572726f727c733a34303a2254686520616374696f6e20796f7520726571756573746564206973206e6f7420616c6c6f7765642e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('np6bej586uud10npj9lud7bdl3poa81f', '::1', 1607369897, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373336393839373b5f63695f70726576696f75735f75726c7c733a32323a22687474703a2f2f6c6f63616c686f73742f6c6f67696e223b6572726f727c733a34303a2254686520616374696f6e20796f7520726571756573746564206973206e6f7420616c6c6f7765642e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('o96l1jh5c11edbosrun24711rl5r4o86', '::1', 1607370852, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373337303835323b5f63695f70726576696f75735f75726c7c733a32323a22687474703a2f2f6c6f63616c686f73742f6c6f67696e223b6572726f727c733a34303a2254686520616374696f6e20796f7520726571756573746564206973206e6f7420616c6c6f7765642e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('041tp4kk3u6r6s7crj1l3n0mm12uvusc', '::1', 1607374039, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373337343033393b5f63695f70726576696f75735f75726c7c733a32323a22687474703a2f2f6c6f63616c686f73742f6c6f67696e223b6572726f727c733a34303a2254686520616374696f6e20796f7520726571756573746564206973206e6f7420616c6c6f7765642e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('j5mkrcikivl7s45fjlm6qhm5r1of1aqj', '::1', 1607374040, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373337343033393b5f63695f70726576696f75735f75726c7c733a32323a22687474703a2f2f6c6f63616c686f73742f6c6f67696e223b);

-- --------------------------------------------------------

--
-- Estrutura da tabela `encurta`
--

CREATE TABLE `encurta` (
  `id_url` int(11) NOT NULL,
  `url_short` text NOT NULL,
  `url_orig` text NOT NULL,
  `created_at` datetime NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recover_password`
--

CREATE TABLE `recover_password` (
  `forgot_id` int(11) NOT NULL,
  `hashp` varchar(255) DEFAULT NULL,
  `data_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Índices para tabela `encurta`
--
ALTER TABLE `encurta`
  ADD PRIMARY KEY (`id_url`),
  ADD KEY `fk_encurta_users1_idx` (`users_id`);

--
-- Índices para tabela `recover_password`
--
ALTER TABLE `recover_password`
  ADD PRIMARY KEY (`forgot_id`),
  ADD KEY `fk_recover_password_users1_idx` (`users_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `encurta`
--
ALTER TABLE `encurta`
  MODIFY `id_url` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `recover_password`
--
ALTER TABLE `recover_password`
  MODIFY `forgot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `encurta`
--
ALTER TABLE `encurta`
  ADD CONSTRAINT `fk_encurta_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `recover_password`
--
ALTER TABLE `recover_password`
  ADD CONSTRAINT `fk_recover_password_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
