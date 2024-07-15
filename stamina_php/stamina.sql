-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 15 2024 г., 10:33
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stamina`
--

-- --------------------------------------------------------

--
-- Структура таблицы `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_name_id` int(50) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `duration_id` int(11) NOT NULL,
  `image_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `classes`
--

INSERT INTO `classes` (`id`, `class_name_id`, `trainer_id`, `duration_id`, `image_id`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 2, 1, 2),
(3, 3, 3, 1, 3),
(4, 4, 4, 1, 4),
(5, 5, 1, 1, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `class_duration`
--

CREATE TABLE `class_duration` (
  `id` int(10) NOT NULL,
  `duration` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `class_duration`
--

INSERT INTO `class_duration` (`id`, `duration`) VALUES
(1, 30),
(2, 50);

-- --------------------------------------------------------

--
-- Структура таблицы `class_images`
--

CREATE TABLE `class_images` (
  `id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `class_images`
--

INSERT INTO `class_images` (`id`, `path`) VALUES
(1, 'recources/image/img_1.jpg'),
(2, 'recources/image/img_2.jpg'),
(3, 'recources/image/img_3.jpg'),
(4, 'recources/image/img_4.jpg'),
(5, 'recources/image/img_5.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `class_names`
--

CREATE TABLE `class_names` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `class_names`
--

INSERT INTO `class_names` (`id`, `name`) VALUES
(1, 'Fitness Class Name #1'),
(2, 'Fitness Class Name #2'),
(3, 'Fitness Class Name #3'),
(4, 'Fitness Class Name #4'),
(5, 'Fitness Class Name #5');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `path`) VALUES
(1, 'recources/image/bg_1.jpg'),
(2, 'recources/image/bg_2.jpg'),
(3, 'recources/image/bg_3.jpg'),
(4, 'recources/image/img_1.jpg'),
(5, 'recources/image/img_2.jpg'),
(6, 'recources/image/img_3.jpg'),
(7, 'recources/image/img_4.jpg'),
(8, 'recources/image/img_5.jpg'),
(9, 'recources/image/person_1.jpg'),
(10, 'recources/image/person_2.jpg'),
(11, 'recources/image/person_3.jpg'),
(12, 'recources/image/person_4.jpg'),
(13, 'recources/image/1.PNG'),
(14, 'recources/image/2.PNG'),
(15, 'recources/image/3.PNG'),
(16, 'recources/image/4.PNG'),
(17, 'recources/image/5.PNG'),
(18, 'recources/image/6.PNG');

-- --------------------------------------------------------

--
-- Структура таблицы `image_to_sections`
--

CREATE TABLE `image_to_sections` (
  `image_id` int(11) NOT NULL,
  `motivation_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `trainer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `image_to_sections`
--

INSERT INTO `image_to_sections` (`image_id`, `motivation_id`, `class_id`, `trainer_id`) VALUES
(1, NULL, NULL, NULL),
(2, NULL, NULL, NULL),
(3, NULL, NULL, NULL),
(4, NULL, NULL, NULL),
(5, NULL, NULL, NULL),
(6, NULL, NULL, NULL),
(7, NULL, NULL, NULL),
(8, NULL, NULL, NULL),
(9, NULL, NULL, NULL),
(10, NULL, NULL, NULL),
(11, NULL, NULL, NULL),
(12, NULL, NULL, NULL),
(13, NULL, NULL, NULL),
(14, NULL, NULL, NULL),
(15, NULL, NULL, NULL),
(16, NULL, NULL, NULL),
(17, NULL, NULL, NULL),
(18, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `nav_spy` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `nav_spy`) VALUES
(1, 'home', '#home_section'),
(2, 'classes', '#classes_section'),
(3, 'shedule', '#shedule_section'),
(4, 'trainer', '#trainers_section'),
(5, 'services', '#services_section'),
(6, 'contact', '#contact_section');

-- --------------------------------------------------------

--
-- Структура таблицы `motivation`
--

CREATE TABLE `motivation` (
  `id` int(11) NOT NULL,
  `theme` varchar(150) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `motivation`
--

INSERT INTO `motivation` (`id`, `theme`, `description`, `image`) VALUES
(1, 'Get The Result You Want', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, laudantium quia blanditiis ipsum.', 'recources/image/bg_2.jpg'),
(2, 'Every Step Counts', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ad, reprehenderit enim!', 'recources/image/bg_3.jpg'),
(3, 'Ever You Are', 'orem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate distinctio, quasi omnis!', 'recources/image/bg_1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `item`, `description`, `image`) VALUES
(1, 'Be Fit', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'recources\\image\\1.png'),
(2, 'Join Club', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'recources\\image\\2.png'),
(3, 'Gym Fitness', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'recources\\image\\3.png'),
(4, 'Eat Vegie', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'recources\\image\\4.png'),
(5, 'Fruit Juices', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'recources\\image\\5.png'),
(6, 'Body Warmup', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'recources\\image\\6.png');

-- --------------------------------------------------------

--
-- Структура таблицы `shedule`
--

CREATE TABLE `shedule` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `shedule`
--

INSERT INTO `shedule` (`id`, `class_id`, `day_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 1, 1),
(7, 5, 6),
(8, 4, 6),
(9, 3, 6),
(10, 2, 6),
(11, 1, 6),
(12, 1, 6),
(13, 3, 5),
(14, 2, 5),
(15, 1, 5),
(16, 4, 5),
(17, 5, 5),
(18, 3, 5),
(19, 2, 7),
(20, 1, 7),
(21, 3, 7),
(22, 4, 7),
(23, 5, 7),
(24, 2, 7),
(25, 4, 2),
(26, 5, 2),
(27, 1, 2),
(28, 2, 2),
(29, 3, 2),
(30, 4, 2),
(31, 5, 4),
(32, 1, 4),
(33, 2, 4),
(34, 3, 4),
(35, 4, 4),
(36, 5, 4),
(37, 1, 3),
(38, 5, 3),
(39, 2, 3),
(40, 3, 3),
(41, 4, 3),
(42, 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `site_sections`
--

CREATE TABLE `site_sections` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `sm_title` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `site_sections`
--

INSERT INTO `site_sections` (`id`, `name`, `title`, `description`, `sm_title`) VALUES
(1, 'home', 'We Believe Little Things Matter', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci voluptate, optio praesentium. Ex, veniam, harum.', NULL),
(2, 'healthies_section', 'Get A Perfect Body', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'Stay Healthy'),
(3, 'classes_section', 'Classes', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'Fitness Class'),
(4, 'shedule_section', 'Schedule', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'Fitness Sched'),
(5, 'trainers_section', 'Our Trainers', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'Trainer'),
(6, 'services_section', 'Fitness Services', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'Services'),
(7, 'contact_section', 'Contact Us', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'Get In Touch'),
(8, 'footer', 'about stamina', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `surname`, `description`, `image`) VALUES
(1, 'Justin', 'Daniel', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'recources/image/person_1.jpg'),
(2, 'Justin', 'Daniel', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'recources/image/person_2.jpg'),
(3, 'Justin', 'Daniel', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'recources/image/person_3.jpg'),
(4, 'Justin', 'Daniel', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'recources/image/person_4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `work_days`
--

CREATE TABLE `work_days` (
  `id` int(11) NOT NULL,
  `day` varchar(10) NOT NULL,
  `alias` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `work_days`
--

INSERT INTO `work_days` (`id`, `day`, `alias`) VALUES
(1, 'm', 'monday'),
(2, 't', 'tuesday'),
(3, 'w', 'wensday'),
(4, 't', 'thorsday'),
(5, 'f', 'fryday'),
(6, 's', 'sutterday'),
(7, 's', 'sunday');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `trainer_id` (`trainer_id`) USING BTREE,
  ADD KEY `id_class_name` (`class_name_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `duration` (`duration_id`),
  ADD KEY `duration_id` (`duration_id`);

--
-- Индексы таблицы `class_duration`
--
ALTER TABLE `class_duration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `class_images`
--
ALTER TABLE `class_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `class_names`
--
ALTER TABLE `class_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image_to_sections`
--
ALTER TABLE `image_to_sections`
  ADD KEY `image_id` (`image_id`),
  ADD KEY `motivation_id` (`motivation_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `motivation`
--
ALTER TABLE `motivation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `shedule`
--
ALTER TABLE `shedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `id_day` (`day_id`),
  ADD KEY `day_id` (`day_id`);

--
-- Индексы таблицы `site_sections`
--
ALTER TABLE `site_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `work_days`
--
ALTER TABLE `work_days`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `class_duration`
--
ALTER TABLE `class_duration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `class_images`
--
ALTER TABLE `class_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `class_names`
--
ALTER TABLE `class_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `motivation`
--
ALTER TABLE `motivation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `shedule`
--
ALTER TABLE `shedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `site_sections`
--
ALTER TABLE `site_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `work_days`
--
ALTER TABLE `work_days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`),
  ADD CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `class_images` (`id`),
  ADD CONSTRAINT `classes_ibfk_3` FOREIGN KEY (`class_name_id`) REFERENCES `class_names` (`id`),
  ADD CONSTRAINT `classes_ibfk_4` FOREIGN KEY (`duration_id`) REFERENCES `class_duration` (`id`);

--
-- Ограничения внешнего ключа таблицы `shedule`
--
ALTER TABLE `shedule`
  ADD CONSTRAINT `shedule_ibfk_1` FOREIGN KEY (`day_id`) REFERENCES `work_days` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `shedule_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
