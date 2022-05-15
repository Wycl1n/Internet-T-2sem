-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 13 2022 г., 12:14
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `itehlb1var2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `department`
--

CREATE TABLE `department` (
  `ID_DEPARTMENT` int(10) NOT NULL,
  `chief` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`ID_DEPARTMENT`, `chief`) VALUES
(1, 'Ivaschenko G.S.'),
(2, 'Tkachenko I.V.'),
(3, 'Kirichenko I.K.'),
(4, 'Bubna K.M'),
(5, 'Shevchenko T.G.');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `ID_projects` int(10) NOT NULL,
  `name` text NOT NULL,
  `manager` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`ID_projects`, `name`, `manager`) VALUES
(1, 'NURE', 'Ivanov M.N.'),
(2, 'GIR', 'Petrov S.K.'),
(3, 'GEAR', 'Sidorov K. S.'),
(4, 'KIU', 'Chumakov O.A.'),
(5, 'PZPI', 'Maksimov M.M');

-- --------------------------------------------------------

--
-- Структура таблицы `work`
--

CREATE TABLE `work` (
  `FID_WORKER` int(10) NOT NULL,
  `FID_PROJECTS` int(10) NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `work`
--

INSERT INTO `work` (`FID_WORKER`, `FID_PROJECTS`, `date`, `time_start`, `time_end`, `description`) VALUES
(1, 1, '2022-04-12', '10:15:00', '19:15:00', 'Task 1'),
(2, 1, '2022-04-12', '09:00:00', '16:00:00', 'Task 2'),
(3, 2, '2022-04-12', '19:00:00', '23:50:00', 'Task 1'),
(4, 5, '2022-04-12', '08:00:00', '15:20:00', 'Task 1'),
(5, 3, '2022-04-12', '09:30:00', '15:30:00', 'Task 1'),
(6, 4, '2022-04-12', '09:20:00', '14:30:00', 'Task 1'),
(7, 5, '2022-04-12', '09:15:00', '12:15:00', 'Task 2'),
(6, 4, '2022-04-12', '09:20:00', '14:30:00', 'Task 2'),
(7, 5, '2022-04-15', '09:15:00', '12:15:00', 'Task 3'),
(7, 1, '2022-04-15', '19:00:00', '20:00:00', 'Task 3'), 
(8, 1, '2022-04-15', '19:00:00', '20:00:00', 'Task 4');

-- --------------------------------------------------------

--
-- Структура таблицы `worker`
--

CREATE TABLE `worker` (
  `ID_WORKER` int(10) NOT NULL,
  `FID_DEPARTMENT` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `worker`
--

INSERT INTO `worker` (`ID_WORKER`, `FID_DEPARTMENT`) VALUES
(1, 2),
(2, 4),
(3, 4),
(4, 3),
(5, 1),
(6, 1),
(7, 2),
(8, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID_DEPARTMENT`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ID_projects`);

--
-- Индексы таблицы `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`ID_WORKER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
