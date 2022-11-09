-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 02 2022 г., 11:43
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `invoice_system`
--

-- --------------------------------------------------------

--
-- Структура таблицы `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat` int(11) NOT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `address_cities`
--

CREATE TABLE `address_cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `address_cities`
--

INSERT INTO `address_cities` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Абай', NULL, NULL, NULL),
(2, 'Акколь', NULL, NULL, NULL),
(3, 'Аксай', NULL, NULL, NULL),
(4, 'Аксу', NULL, NULL, NULL),
(5, 'Актау', NULL, NULL, NULL),
(6, 'Актобе', NULL, NULL, NULL),
(7, 'Алга', NULL, NULL, NULL),
(8, 'Алма-Ата', NULL, NULL, NULL),
(9, 'Аральск', NULL, NULL, NULL),
(10, 'Аркалык', NULL, NULL, NULL),
(11, 'Арыс', NULL, NULL, NULL),
(12, 'Нур-Султан', NULL, NULL, NULL),
(13, 'Атбасар', NULL, NULL, NULL),
(14, 'Атырау', NULL, NULL, NULL),
(15, 'Аягоз', NULL, NULL, NULL),
(16, 'Байконур', NULL, NULL, NULL),
(17, 'Балхаш', NULL, NULL, NULL),
(18, 'Булаево', NULL, NULL, NULL),
(19, 'Державинск', NULL, NULL, NULL),
(20, 'Ерейментау', NULL, NULL, NULL),
(21, 'Есик', NULL, NULL, NULL),
(22, 'Есиль', NULL, NULL, NULL),
(23, 'Жанаозен', NULL, NULL, NULL),
(24, 'Жанатас', NULL, NULL, NULL),
(25, 'Жаркент', NULL, NULL, NULL),
(26, 'Жезказган', NULL, NULL, NULL),
(27, 'Жем', NULL, NULL, NULL),
(28, 'Жетысай', NULL, NULL, NULL),
(29, 'Житикара', NULL, NULL, NULL),
(30, 'Зайсан', NULL, NULL, NULL),
(31, 'Зыряновск', NULL, NULL, NULL),
(32, 'Казалинск', NULL, NULL, NULL),
(33, 'Кандыагаш', NULL, NULL, NULL),
(34, 'Капшагай', NULL, NULL, NULL),
(35, 'Караганда', NULL, NULL, NULL),
(36, 'Каражал', NULL, NULL, NULL),
(37, 'Каратау', NULL, NULL, NULL),
(38, 'Каркаралинск', NULL, NULL, NULL),
(39, 'Каскелен', NULL, NULL, NULL),
(40, 'Кентау', NULL, NULL, NULL),
(41, 'Кокшетау', NULL, NULL, NULL),
(42, 'Костанай', NULL, NULL, NULL),
(43, 'Кульсары', NULL, NULL, NULL),
(44, 'Курчатов', NULL, NULL, NULL),
(45, 'Кызылорда', NULL, NULL, NULL),
(46, 'Ленгер', NULL, NULL, NULL),
(47, 'Лисаковск', NULL, NULL, NULL),
(48, 'Макинск', NULL, NULL, NULL),
(49, 'Мамлютка', NULL, NULL, NULL),
(50, 'Павлодар', NULL, NULL, NULL),
(51, 'Петропавловск', NULL, NULL, NULL),
(52, 'Приозёрск', NULL, NULL, NULL),
(53, 'Риддер', NULL, NULL, NULL),
(54, 'Рудный', NULL, NULL, NULL),
(55, 'Сарань', NULL, NULL, NULL),
(56, 'Сарканд', NULL, NULL, NULL),
(57, 'Сарыагаш', NULL, NULL, NULL),
(58, 'Сатпаев', NULL, NULL, NULL),
(59, 'Семей', NULL, NULL, NULL),
(60, 'Сергеевка', NULL, NULL, NULL),
(61, 'Серебрянск', NULL, NULL, NULL),
(62, 'Степногорск', NULL, NULL, NULL),
(63, 'Степняк', NULL, NULL, NULL),
(64, 'Тайынша', NULL, NULL, NULL),
(65, 'Талгар', NULL, NULL, NULL),
(66, 'Талдыкорган', NULL, NULL, NULL),
(67, 'Тараз', NULL, NULL, NULL),
(68, 'Текели', NULL, NULL, NULL),
(69, 'Темир', NULL, NULL, NULL),
(70, 'Темиртау', NULL, NULL, NULL),
(71, 'Туркестан', NULL, NULL, NULL),
(72, 'Уральск', NULL, NULL, NULL),
(73, 'Усть-Каменогорск', NULL, NULL, NULL),
(74, 'Ушарал', NULL, NULL, NULL),
(75, 'Уштобе', NULL, NULL, NULL),
(76, 'Форт-Шевченко', NULL, NULL, NULL),
(77, 'Хромтау', NULL, NULL, NULL),
(78, 'Шардара', NULL, NULL, NULL),
(79, 'Шалкар', NULL, NULL, NULL),
(80, 'Шар', NULL, NULL, NULL),
(81, 'Шахтинск', NULL, NULL, NULL),
(82, 'Шемонаиха', NULL, NULL, NULL),
(83, 'Шу', NULL, NULL, NULL),
(84, 'Шымкент', NULL, NULL, NULL),
(85, 'Щучинск', NULL, NULL, NULL),
(86, 'Экибастуз', NULL, NULL, NULL),
(87, 'Эмба', NULL, NULL, NULL),
(88, 'Аксу', NULL, NULL, NULL),
(89, 'Аршалы', NULL, NULL, NULL),
(90, 'Бестобе', NULL, NULL, NULL),
(91, 'Заводской', NULL, NULL, NULL),
(92, 'Станционный', NULL, NULL, NULL),
(93, 'Шантобе', NULL, NULL, NULL),
(94, 'Шортанды', NULL, NULL, NULL),
(95, 'Шубаркудук', NULL, NULL, NULL),
(96, 'Индерборский', NULL, NULL, NULL),
(97, 'Макат', NULL, NULL, NULL),
(98, 'Ульба', NULL, NULL, NULL),
(99, 'Чаган', NULL, NULL, NULL),
(100, 'Шульбинск', NULL, NULL, NULL),
(101, 'Деркул', NULL, NULL, NULL),
(102, 'Зачаганск', NULL, NULL, NULL),
(103, 'Круглоозёрное', NULL, NULL, NULL),
(104, 'Актас', NULL, NULL, NULL),
(105, 'Актау', NULL, NULL, NULL),
(106, 'Атасу', NULL, NULL, NULL),
(107, 'Ботакара', NULL, NULL, NULL),
(108, 'Гульшат', NULL, NULL, NULL),
(109, 'Долинка', NULL, NULL, NULL),
(110, 'Жайрем', NULL, NULL, NULL),
(111, 'Жезказган', NULL, NULL, NULL),
(112, 'Конырат', NULL, NULL, NULL),
(113, 'Новодолинский', NULL, NULL, NULL),
(114, 'Нура', NULL, NULL, NULL),
(115, 'Осакаровка', NULL, NULL, NULL),
(116, 'Саяк', NULL, NULL, NULL),
(117, 'Шахан', NULL, NULL, NULL),
(118, 'Горняцкий', NULL, NULL, NULL),
(119, 'Затобольск', NULL, NULL, NULL),
(120, 'Карабалык', NULL, NULL, NULL),
(121, 'Качар', NULL, NULL, NULL),
(122, 'Октябрьский', NULL, NULL, NULL),
(123, 'Сарыколь', NULL, NULL, NULL),
(124, 'Айтеке-Би', NULL, NULL, NULL),
(125, 'Белколь', NULL, NULL, NULL),
(126, 'Тасбогет', NULL, NULL, NULL),
(127, 'Аксу', NULL, NULL, NULL),
(128, 'Ленинский', NULL, NULL, NULL),
(129, 'Солнечный', NULL, NULL, NULL),
(130, 'Шидерты', NULL, NULL, NULL),
(131, 'Мырзакент', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `address_countries`
--

CREATE TABLE `address_countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `address_countries`
--

INSERT INTO `address_countries` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(132, 'Казахстан', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `bin`, `name`, `phone`, `email`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '940109350827', 'Еркебулан', '87081311285', 'Dax@mail.ru', 1, '2022-09-30 02:49:26', '2022-09-30 02:49:26', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_28_200724_create_clients_table', 1),
(6, '2022_09_30_062538_create_address_cities_table', 1),
(7, '2022_09_30_062627_create_address_countries_table', 1),
(8, '2022_09_30_063101_create_addresses_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
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

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bin` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `bin`, `company_name`, `phone`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 940109350827, 'Интернет-Компания SIO', '+7(708)-131-1344', 'Dax@mail.ru', NULL, '$2y$10$J8WUdPXAOO1uil1/uVZqQelNTgVtvVXx9Srd9NTyMyu0NM6sqdcN6', 0, 'ITLNjcSDSa8mEX0hQowY38Evj7HZL3AY7atXpZmknOPHVc0VBqlyMOYwWxAW', '2022-09-30 02:48:42', '2022-09-30 02:48:42');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_client_fk` (`client_id`),
  ADD KEY `client_country_fk` (`country_id`),
  ADD KEY `client_city_fk` (`city_id`);

--
-- Индексы таблицы `address_cities`
--
ALTER TABLE `address_cities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `address_countries`
--
ALTER TABLE `address_countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `counterparties_user_fk` (`user_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `address_cities`
--
ALTER TABLE `address_cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT для таблицы `address_countries`
--
ALTER TABLE `address_countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `address_client_fk` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `client_city_fk` FOREIGN KEY (`city_id`) REFERENCES `address_cities` (`id`),
  ADD CONSTRAINT `client_country_fk` FOREIGN KEY (`country_id`) REFERENCES `address_countries` (`id`);

--
-- Ограничения внешнего ключа таблицы `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `counterparties_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
