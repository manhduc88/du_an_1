-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2023 lúc 01:18 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tieude` text NOT NULL,
  `noidung` text NOT NULL,
  `mota` text NOT NULL,
  `hinh` varchar(200) NOT NULL,
  `ngaydang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id_baiviet`, `tieude`, `noidung`, `mota`, `hinh`, `ngaydang`) VALUES
(3, 'Đồ Bơi Là Người Bạn Tốt Nhất Của Bạn', 'onec Utrum Congue Leo Eget Malesuada. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Quisque Velit Nisi, Pretiu Ut Lacin Ia In, Elementum Id Enim. Pellentesque Trong Ipsum Id Orci Porta Dapibus. Pellentesque Trong Ipsum Id Orci Porta Dapibus. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Vesti Bulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Curabitur Non Nulla Sit Amet Nisl Tem Pus Convallis Quis Ac Lectus. Sed Porttitor Lectus Nibh. Tiền Đình Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere Cubilia Curae; Donec Velit Neque, Auctor Sit Amet Aliquam Vel, Ullamcorper Sit Amet Ligula. Curbitur Aliquet Quam Id Dui Posuere Blandit. Proin Eget Tortor Risus. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis Và Tellus. Proin Eget Tortor Risus.\r\n\r\nCurabitur Arcu Erat, Accumsan Id Imperdiet Et, Porttitor At Sem. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis Và Tellus. Curbitur Aliquet Quam Id Dui Posuere Blandit. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Curbitur Aliquet Quam Id Dui Posuere Blandit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Nulla Porttitor Tích Lũy Tincidunt. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus.Cras Ultricies Ligula Sed Magna Dictum Porta. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque Trong Ipsum Id Orci Porta Dapibus. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis Và Tellus. Curabitur Vivamus Suscipit Tortor Eget Felis Porttitor Volutpat. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Cras Ultricies Ligula Sed Magna Ut Lacinia In, Elementum Id Enim. Tiền Đình Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere Cubilia Curae; Donec Velit Neque, Auctor Sit Amet Aliquam Vel, Ullamcorper Sit Amet Ligula. Proin Eget Tortor Risus.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Quisque Velit Nisi, Pretium Ut Lacinia In, Elementum Id Enim. Donec Sollitudin Quấy Rối Nam Giới. Cras Ultricies Ligula Sed Magna Dictum Porta. Praesent Sapien Massa, Convallis A Pelentesque Nec, Egestas Non Nisi. Donec Rutrum Congue Leo Eget Maleuada. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque Trong Ipsum Id Orci Porta\r\nCurabitur Arcu Erat, Accumsan Id Imperdiet Et, Porttitor At Sem. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis Và Tellus. Curbitur Aliquet Quam Id Dui Posuere Blandit. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Curbitur Aliquet Quam Id Dui Posuere Blandit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Nulla Porttitor Tích Lũy Tincidunt. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus.Cras Ultricies Ligula Sed Magna Dictum Porta. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque Trong Ipsum Id Orci Porta Dapibus. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis Và Tellus. Curabitur Vivamus Suscipit Tortor Eget Felis Porttitor Volutpat. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Cras Ultricies Ligula Sed Magna Ut Lacinia In, Elementum Id Enim. Tiền Đình Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere Cubilia Curae; Donec Velit Neque, Auctor Sit Amet Aliquam Vel, Ullamcorper Sit Amet Ligula. Proin Eget Tortor Risus.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Quisque Velit Nisi, Pretium Ut Lacinia In, Elementum Id Enim. Donec Sollitudin Quấy Rối Nam Giới. Cras Ultricies Ligula Sed Magna Dictum Porta. Praesent Sapien Massa, Convallis A Pelentesque Nec, Egestas Non Nisi. Donec Rutrum Congue Leo Eget Maleuada. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque Trong Ipsum Id Orci Porta Dapibus. Praesent Sapien Massa, Convallis A Pelentesque Nec, Egestas Non Nisi. Nulla Porttitor Tích Lũy Tincidunt. Nulla Porttitor Có Thể Ngồi Amet Dui. Curbitur Aliquet Quam Id Dui Posuere Blandit. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Tiền Đình Amet Ligula. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A.', 'Trong vài tháng qua, chúng tôi đã làm việc với các nghệ nhân da, gỗ và kim loại để phát triển một thứ gì đó đặc biệt. Hôm nay chúng tôi rất vui mừng được ra mắt', 'blog-1.jpg', '06:09:29pm 26/11/2023'),
(4, 'Dòng Sản Phẩm Văn Phòng Mới', 'onec Utrum Congue Leo Eget Malesuada. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Quisque Velit Nisi, Pretiu Ut Lacin Ia In, Elementum Id Enim. Pellentesque In Ipsum Id Orci Porta Dapibus. Pellentesque In Ipsum Id Orci Porta Dapibus. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Vesti Bulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Curabitur Non Nulla Sit Amet Nisl Tem Pus Convallis Quis Ac Lectus. Sed Porttitor Lectus Nibh. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere Cubilia Curae; Donec Velit Neque, Auctor Sit Amet Aliquam Vel, Ullamcorper Sit Amet Ligula. Curabitur Aliquet Quam Id Dui Posuere Blandit. Proin Eget Tortor Risus. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Proin Eget Tortor Risus.\r\n\r\nCurabitur Arcu Erat, Accumsan Id Imperdiet Et, Porttitor At Sem. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Curabitur Aliquet Quam Id Dui Posuere Blandit. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Curabitur Aliquet Quam Id Dui Posuere Blandit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Nulla Porttitor Accumsan Tincidunt. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus.Cras Ultricies Ligula Sed Magna Dictum Porta. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque In Ipsum Id Orci Porta Dapibus. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Curabitur Vivamus Suscipit Tortor Eget Felis Porttitor Volutpat. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Cras Ultricies Ligula Sed Magna Ut Lacinia In, Elementum Id Enim. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere Cubilia Curae; Donec Velit Neque, Auctor Sit Amet Aliquam Vel, Ullamcorper Sit Amet Ligula. Proin Eget Tortor Risus.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Quisque Velit Nisi, Pretium Ut Lacinia In, Elementum Id Enim. Donec Sollicitudin Molestie Malesuada. Cras Ultricies Ligula Sed Magna Dictum Porta. Praesent Sapien Massa, Convallis A Pellentesque Nec, Egestas Non Nisi. Donec Rutrum Congue Leo Eget Malesuada. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque In Ipsum Id Orci Porta\r\nCurabitur Arcu Erat, Accumsan Id Imperdiet Et, Porttitor At Sem. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Curabitur Aliquet Quam Id Dui Posuere Blandit. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Curabitur Aliquet Quam Id Dui Posuere Blandit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Nulla Porttitor Accumsan Tincidunt. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus.Cras Ultricies Ligula Sed Magna Dictum Porta. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque In Ipsum Id Orci Porta Dapibus. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Curabitur Vivamus Suscipit Tortor Eget Felis Porttitor Volutpat. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Cras Ultricies Ligula Sed Magna Ut Lacinia In, Elementum Id Enim. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere Cubilia Curae; Donec Velit Neque, Auctor Sit Amet Aliquam Vel, Ullamcorper Sit Amet Ligula. Proin Eget Tortor Risus.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Quisque Velit Nisi, Pretium Ut Lacinia In, Elementum Id Enim. Donec Sollicitudin Molestie Malesuada. Cras Ultricies Ligula Sed Magna Dictum Porta. Praesent Sapien Massa, Convallis A Pellentesque Nec, Egestas Non Nisi. Donec Rutrum Congue Leo Eget Malesuada. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque In Ipsum Id Orci Porta Dapibus. Praesent Sapien Massa, Convallis A Pellentesque Nec, Egestas Non Nisi. Nulla Porttitor Accumsan Tincidunt. Nulla Porttitor Accuan Sit Amet Dui. Curabitur Aliquet Quam Id Dui Posuere Blandit. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Vestibulum Amet Ligula. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A.', 'Trong vài tháng qua, chúng tôi đã làm việc với các nghệ nhân da, gỗ và kim loại để phát triển một thứ gì đó đặc biệt. Hôm nay chúng tôi rất vui mừng được ra mắt', 'blog-3.jpg', '06:13:27pm 26/11/2023'),
(5, 'Bàn Làm Việc Tuần Lễ Thời Trang', 'onec Utrum Congue Leo Eget Malesuada. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Quisque Velit Nisi, Pretiu Ut Lacin Ia In, Elementum Id Enim. Pellentesque In Ipsum Id Orci Porta Dapibus. Pellentesque In Ipsum Id Orci Porta Dapibus. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Vesti Bulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Curabitur Non Nulla Sit Amet Nisl Tem Pus Convallis Quis Ac Lectus. Sed Porttitor Lectus Nibh. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere Cubilia Curae; Donec Velit Neque, Auctor Sit Amet Aliquam Vel, Ullamcorper Sit Amet Ligula. Curabitur Aliquet Quam Id Dui Posuere Blandit. Proin Eget Tortor Risus. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Proin Eget Tortor Risus.\r\n\r\nCurabitur Arcu Erat, Accumsan Id Imperdiet Et, Porttitor At Sem. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Curabitur Aliquet Quam Id Dui Posuere Blandit. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Curabitur Aliquet Quam Id Dui Posuere Blandit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Nulla Porttitor Accumsan Tincidunt. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus.Cras Ultricies Ligula Sed Magna Dictum Porta. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque In Ipsum Id Orci Porta Dapibus. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Curabitur Vivamus Suscipit Tortor Eget Felis Porttitor Volutpat. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Cras Ultricies Ligula Sed Magna Ut Lacinia In, Elementum Id Enim. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere Cubilia Curae; Donec Velit Neque, Auctor Sit Amet Aliquam Vel, Ullamcorper Sit Amet Ligula. Proin Eget Tortor Risus.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Quisque Velit Nisi, Pretium Ut Lacinia In, Elementum Id Enim. Donec Sollicitudin Molestie Malesuada. Cras Ultricies Ligula Sed Magna Dictum Porta. Praesent Sapien Massa, Convallis A Pellentesque Nec, Egestas Non Nisi. Donec Rutrum Congue Leo Eget Malesuada. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque In Ipsum Id Orci Porta\r\nCurabitur Arcu Erat, Accumsan Id Imperdiet Et, Porttitor At Sem. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Curabitur Aliquet Quam Id Dui Posuere Blandit. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Curabitur Aliquet Quam Id Dui Posuere Blandit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Nulla Porttitor Accumsan Tincidunt. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus.Cras Ultricies Ligula Sed Magna Dictum Porta. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque In Ipsum Id Orci Porta Dapibus. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Curabitur Vivamus Suscipit Tortor Eget Felis Porttitor Volutpat. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Cras Ultricies Ligula Sed Magna Ut Lacinia In, Elementum Id Enim. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere Cubilia Curae; Donec Velit Neque, Auctor Sit Amet Aliquam Vel, Ullamcorper Sit Amet Ligula. Proin Eget Tortor Risus.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Quisque Velit Nisi, Pretium Ut Lacinia In, Elementum Id Enim. Donec Sollicitudin Molestie Malesuada. Cras Ultricies Ligula Sed Magna Dictum Porta. Praesent Sapien Massa, Convallis A Pellentesque Nec, Egestas Non Nisi. Donec Rutrum Congue Leo Eget Malesuada. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque In Ipsum Id Orci Porta Dapibus. Praesent Sapien Massa, Convallis A Pellentesque Nec, Egestas Non Nisi. Nulla Porttitor Accumsan Tincidunt. Nulla Porttitor Accuan Sit Amet Dui. Curabitur Aliquet Quam Id Dui Posuere Blandit. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Vestibulum Amet Ligula. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A.', 'Trong vài tháng qua, chúng tôi đã làm việc với các nghệ nhân da, gỗ và kim loại để phát triển một thứ gì đó đặc biệt. Hôm nay chúng tôi rất vui mừng được ra mắt', 'blog-2.jpg', '06:14:33pm 26/11/2023'),
(6, '  Bộ Sưu Tập Mùa Đông Tốt Nhất Của Bạn ', '  Curabitur Arcu Erat, Accumsan Id Imperdiet Et, Porttitor At Sem. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Curabitur Aliquet Quam Id Dui Posuere Blandit. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Curabitur Aliquet Quam Id Dui Posuere Blandit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Nulla Porttitor Accumsan Tincidunt. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus.Cras Ultricies Ligula Sed Magna Dictum Porta. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque In Ipsum Id Orci Porta Dapibus. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Curabitur Vivamus Suscipit Tortor Eget Felis Porttitor Volutpat. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Cras Ultricies Ligula Sed Magna Ut Lacinia In, Elementum Id Enim. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere Cubilia Curae; Donec Velit Neque, Auctor Sit Amet Aliquam Vel, Ullamcorper Sit Amet Ligula. Proin Eget Tortor Risus.Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Quisque Velit Nisi, Pretium Ut Lacinia In, Elementum Id Enim. Donec Sollicitudin Molestie Malesuada. Cras Ultricies Ligula Sed Magna Dictum Porta. Praesent Sapien Massa, Convallis A Pellentesque Nec, Egestas Non Nisi. Donec Rutrum Congue Leo Eget Malesuada. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque In Ipsum Id Orci Porta Dapibus. Praesent Sapien Massa, Convallis A Pellentesque Nec, Egestas Non Nisi. Nulla Porttitor Accumsan Tincidunt. Nulla Porttitor Accuan Sit Amet Dui. Curabitur Aliquet Quam Id Dui Posuere Blandit. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Vestibulum Amet Ligula. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A.onec Utrum Congue Leo Eget Malesuada. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Quisque Velit Nisi, Pretiu Ut Lacin Ia In, Elementum Id Enim. Pellentesque In Ipsum Id Orci Porta Dapibus. Pellentesque In Ipsum Id Orci Porta Dapibus. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Vesti Bulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Curabitur Non Nulla Sit Amet Nisl Tem Pus Convallis Quis Ac Lectus. Sed Porttitor Lectus Nibh. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere Cubilia Curae; Donec Velit Neque, Auctor Sit Amet Aliquam Vel, Ullamcorper Sit Amet Ligula. Curabitur Aliquet Quam Id Dui Posuere Blandit. Proin Eget Tortor Risus. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Proin Eget Tortor Risus.Curabitur Arcu Erat, Accumsan Id Imperdiet Et, Porttitor At Sem. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Curabitur Aliquet Quam Id Dui Posuere Blandit. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Curabitur Aliquet Quam Id Dui Posuere Blandit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Nulla Porttitor Accumsan Tincidunt. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus.Cras Ultricies Ligula Sed Magna Dictum Porta. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque In Ipsum Id Orci Porta Dapibus. Vivamus Magna Justo, Lacinia Eget Consectetur Sed, Convallis At Tellus. Curabitur Vivamus Suscipit Tortor Eget Felis Porttitor Volutpat. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Cras Ultricies Ligula Sed Magna Ut Lacinia In, Elementum Id Enim. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere Cubilia Curae; Donec Velit Neque, Auctor Sit Amet Aliquam Vel, Ullamcorper Sit Amet Ligula. Proin Eget Tortor Risus.Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Curabitur Non Nulla Sit Amet Nisl Tempus Convallis Quis Ac Lectus. Quisque Velit Nisi, Pretium Ut Lacinia In, Elementum Id Enim. Donec Sollicitudin Molestie Malesuada. Cras Ultricies Ligula Sed Magna Dictum Porta. Praesent Sapien Massa, Convallis A Pellentesque Nec, Egestas Non Nisi. Donec Rutrum Congue Leo Eget Malesuada. Mauris Blandit Aliquet Elit, Eget Tincidunt Nibh Pulvinar A. Vestibulum Ac Diam Sit Amet Quam Vehicula Elementum Sed Sit Amet Dui. Pellentesque In Ipsum Id Orci Porta  ', '  Trong vài tháng qua, chúng tôi đã làm việc với các nghệ nhân da, gỗ và kim loại để phát triển một thứ gì đó đặc biệt. Hôm nay chúng tôi rất vui mừng được ra mắt  ', 'blog-4.jpg', '  06:15:35pm 26/11/2023  ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(10) NOT NULL,
  `tieude` text NOT NULL,
  `tieudephu` text NOT NULL,
  `hinh` varchar(300) NOT NULL,
  `mota` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id_banner`, `tieude`, `tieudephu`, `hinh`, `mota`, `link`) VALUES
(12, 'gfdgdg', '     dfgdg     ', 'banner_coll_3.webp', 'cxzczx', 'gfdgfdg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner_con`
--

CREATE TABLE `banner_con` (
  `id_banner_con` int(10) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banner_con`
--

INSERT INTO `banner_con` (`id_banner_con`, `hinh`, `link`) VALUES
(4, 'Dự án 1_ Nhóm 10-Trang-6.drawio.png', 'fdsfsdfcxzczx');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bienthe_sp`
--

CREATE TABLE `bienthe_sp` (
  `id_bienthe_sp` int(10) NOT NULL,
  `id_sanpham` int(10) NOT NULL,
  `id_mau` int(11) NOT NULL,
  `id_size` int(10) NOT NULL,
  `gia_sanpham` int(10) NOT NULL DEFAULT 0,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bienthe_sp`
--

INSERT INTO `bienthe_sp` (`id_bienthe_sp`, `id_sanpham`, `id_mau`, `id_size`, `gia_sanpham`, `soluong`) VALUES
(10, 99, 9, 1, 50000, 200),
(11, 100, 9, 1, 269000, 30),
(12, 100, 9, 2, 269000, 20),
(13, 100, 9, 3, 269000, 50),
(14, 101, 9, 1, 199000, 50),
(15, 101, 9, 2, 199000, 20),
(16, 101, 9, 3, 199000, 40),
(17, 101, 14, 1, 259000, 30),
(18, 101, 14, 3, 229000, 50),
(19, 101, 14, 2, 229000, 50),
(20, 102, 9, 1, 279000, 40),
(21, 102, 9, 2, 279000, 30),
(22, 102, 9, 3, 279000, 50),
(23, 102, 9, 3, 279000, 50),
(24, 102, 16, 1, 329000, 40),
(25, 102, 16, 2, 329000, 20),
(26, 102, 16, 3, 329000, 50),
(27, 103, 15, 1, 180000, 40),
(28, 103, 15, 2, 180000, 30),
(29, 103, 15, 3, 180000, 50),
(30, 103, 9, 1, 200000, 20),
(31, 103, 9, 2, 200000, 40),
(32, 103, 9, 3, 180000, 50),
(33, 104, 9, 1, 280000, 30),
(34, 104, 9, 2, 280000, 40),
(35, 104, 9, 3, 280000, 30),
(36, 104, 15, 1, 270000, 10),
(37, 104, 15, 2, 270000, 40),
(38, 104, 15, 3, 270000, 20),
(39, 104, 16, 1, 250000, 20),
(40, 104, 16, 2, 250000, 40),
(41, 104, 16, 3, 250000, 10),
(42, 105, 14, 1, 235000, 20),
(43, 105, 14, 2, 235000, 38),
(44, 105, 14, 3, 235000, 50),
(45, 106, 9, 1, 175000, 50),
(46, 106, 9, 2, 175000, 30),
(47, 106, 9, 3, 175000, 20),
(48, 107, 16, 1, 105000, 20),
(49, 107, 16, 2, 105000, 40),
(50, 107, 16, 3, 105000, 40),
(51, 108, 16, 1, 299000, 30),
(52, 108, 15, 2, 299000, 40),
(53, 108, 15, 3, 299000, 50),
(54, 108, 16, 1, 299000, 20),
(55, 108, 16, 2, 299000, 30),
(56, 108, 16, 3, 299000, 10),
(57, 109, 18, 1, 139000, 20),
(58, 109, 18, 2, 139000, 40),
(59, 109, 18, 3, 139000, 50),
(60, 110, 15, 1, 159000, 20),
(61, 110, 15, 2, 159000, 40),
(62, 110, 15, 3, 15900, 40),
(63, 110, 16, 1, 179000, 20),
(64, 110, 16, 2, 179000, 45),
(65, 110, 16, 0, 179000, 40),
(66, 110, 16, 3, 179000, 10),
(67, 111, 15, 1, 199000, 10),
(68, 111, 15, 2, 199000, 30),
(69, 111, 15, 3, 199000, 50),
(70, 112, 19, 1, 260000, 10),
(71, 112, 19, 2, 260000, 40),
(72, 112, 19, 3, 260000, 50),
(73, 113, 20, 1, 139000, 10),
(74, 113, 20, 2, 139000, 30),
(75, 113, 20, 3, 139000, 50),
(76, 114, 20, 1, 119000, 10),
(77, 114, 20, 2, 119000, 30),
(78, 114, 20, 3, 119000, 40),
(79, 115, 22, 1, 299000, 10),
(80, 115, 22, 2, 299000, 40),
(81, 115, 22, 3, 299000, 30),
(82, 116, 20, 1, 129000, 20),
(83, 116, 20, 2, 129000, 40),
(84, 116, 20, 3, 129000, 50),
(85, 117, 22, 1, 99000, 10),
(86, 117, 22, 2, 99000, 30),
(87, 117, 22, 3, 99000, 40),
(88, 118, 19, 1, 70000, 40),
(89, 118, 19, 2, 70000, 30),
(90, 118, 0, 3, 70000, 50),
(91, 0, 0, 0, 0, 20),
(92, 118, 19, 3, 70000, 10),
(93, 119, 15, 1, 40000, 10),
(94, 119, 15, 2, 40000, 30),
(95, 119, 15, 3, 40000, 49),
(96, 120, 16, 1, 80000, 20),
(97, 120, 16, 2, 80000, 40),
(98, 120, 16, 3, 80000, 50),
(99, 121, 23, 1, 129000, 10),
(100, 121, 23, 2, 129000, 30),
(101, 121, 23, 3, 129000, 50),
(102, 122, 15, 1, 40000, 10),
(103, 122, 15, 2, 40000, 30),
(104, 122, 15, 3, 40000, 50),
(105, 123, 10, 1, 70000, 10),
(106, 123, 10, 2, 70000, 50),
(107, 123, 10, 3, 70000, 20),
(108, 123, 16, 1, 70000, 30),
(109, 123, 16, 2, 70000, 30),
(110, 123, 16, 3, 70000, 50),
(111, 123, 15, 1, 70000, 30),
(112, 123, 15, 2, 70000, 20),
(113, 123, 15, 3, 70000, 10),
(115, 124, 15, 1, 80000, 20),
(116, 124, 15, 2, 80000, 10),
(117, 124, 15, 3, 80000, 50),
(118, 125, 0, 2, 50000, 10),
(119, 125, 24, 2, 50000, 50),
(120, 125, 24, 3, 50000, 20),
(121, 126, 16, 1, 60000, 10),
(122, 126, 16, 2, 60000, 20),
(123, 126, 16, 3, 60000, 50),
(124, 127, 16, 1, 90000, 10),
(125, 127, 16, 2, 90000, 40),
(126, 127, 16, 3, 90000, 40),
(127, 128, 16, 1, 230000, 10),
(128, 128, 16, 2, 230000, 30),
(129, 128, 16, 3, 230000, 50),
(130, 129, 16, 1, 234000, 10),
(131, 129, 16, 2, 234000, 30),
(133, 129, 16, 3, 234000, 20),
(134, 129, 15, 1, 234000, 20),
(135, 129, 15, 2, 234000, 40),
(136, 129, 15, 3, 234000, 50),
(137, 130, 15, 1, 219000, 10),
(138, 130, 15, 2, 219000, 20),
(139, 130, 15, 3, 219000, 50),
(140, 131, 15, 1, 230000, 40),
(141, 131, 15, 2, 230000, 40),
(142, 131, 15, 3, 230000, 50),
(143, 132, 15, 1, 88000, 20),
(144, 132, 15, 2, 88000, 40),
(145, 132, 15, 3, 88000, 50),
(146, 133, 9, 1, 105000, 39),
(147, 133, 9, 2, 105000, 30),
(148, 133, 9, 3, 105000, 40),
(149, 134, 15, 1, 115000, 30),
(150, 134, 15, 2, 115000, 50),
(151, 134, 15, 3, 115000, 40),
(152, 135, 25, 1, 142000, 15),
(153, 135, 25, 2, 142000, 35),
(154, 135, 25, 3, 142000, 42),
(155, 136, 20, 1, 125000, 21),
(156, 136, 20, 2, 125000, 49),
(157, 136, 20, 3, 125000, 36),
(158, 137, 16, 1, 250000, 20),
(159, 137, 16, 2, 250000, 50),
(160, 137, 16, 3, 250000, 40),
(161, 138, 26, 1, 170000, 30),
(162, 138, 26, 2, 170000, 40),
(163, 138, 26, 3, 170000, 50),
(164, 139, 16, 1, 360000, 10),
(165, 139, 16, 2, 360000, 30),
(166, 139, 16, 3, 360000, 50),
(167, 140, 27, 1, 270000, 10),
(168, 140, 27, 2, 270000, 50),
(169, 140, 27, 3, 270000, 20),
(170, 141, 16, 1, 156000, 10),
(171, 141, 16, 2, 156000, 20),
(172, 141, 16, 3, 156000, 40),
(173, 142, 10, 1, 350000, 20),
(174, 142, 10, 2, 350000, 40),
(175, 142, 10, 3, 350000, 50),
(176, 143, 15, 1, 149000, 10),
(177, 143, 15, 2, 149000, 40),
(178, 143, 15, 3, 149000, 50),
(179, 144, 15, 1, 165000, 10),
(180, 144, 15, 2, 165000, 30),
(181, 144, 15, 3, 165000, 50),
(182, 145, 16, 1, 264000, 6),
(183, 145, 16, 2, 264000, 8),
(184, 145, 16, 0, 264000, 50),
(185, 145, 16, 3, 264000, 10),
(186, 146, 28, 1, 199000, 9),
(187, 146, 28, 2, 199000, 31),
(188, 146, 28, 3, 199000, 10),
(189, 147, 19, 1, 499000, 5),
(190, 147, 19, 2, 499000, 45),
(191, 147, 19, 3, 499000, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_binhluan` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_binhluan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id_binhluan`, `id_user`, `id_sanpham`, `noi_dung`, `ngay_binhluan`) VALUES
(17, 1, 138, 'dsad', '11:02:56am 04/12/2023'),
(21, 1, 147, 'ao dep lam\r\n\r\n', '12:33:51pm 04/12/2023'),
(22, 1, 147, 'ao am lam nen mua\r\n', '12:36:40pm 04/12/2023'),
(23, 10, 147, 'Áo thoáng rộng dễ mặc\r\n', '12:41:49pm 04/12/2023'),
(24, 10, 146, 'áo đẹp tuyệt vời\r\n', '01:07:58pm 04/12/2023'),
(25, 10, 146, 'dsadad', '04:04:00pm 04/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_donhang`
--

CREATE TABLE `chitiet_donhang` (
  `id_ctdh` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bienthe_sp` int(10) NOT NULL,
  `hinh` varchar(200) NOT NULL,
  `ten_sp` text NOT NULL,
  `ten_mau` varchar(200) NOT NULL,
  `ten_size` varchar(200) NOT NULL,
  `gia` int(15) NOT NULL,
  `soluong` int(5) NOT NULL,
  `thanhtien` int(15) NOT NULL,
  `id_donhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_donhang`
--

INSERT INTO `chitiet_donhang` (`id_ctdh`, `id_user`, `id_bienthe_sp`, `hinh`, `ten_sp`, `ten_mau`, `ten_size`, `gia`, `soluong`, `thanhtien`, `id_donhang`) VALUES
(94, 1, 189, 'khoac_da.jpg', 'Áo khoác da nữ VIZAKEY', 'Cream', 'M', 499000, 1, 499000, 155),
(95, 1, 190, 'khoac_da.jpg', 'Áo khoác da nữ VIZAKEY', 'Cream', 'L', 499000, 1, 499000, 157),
(96, 1, 190, 'khoac_da.jpg', 'Áo khoác da nữ VIZAKEY', 'Cream', 'L', 499000, 1, 499000, 157),
(97, 10, 187, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'L', 199000, 1, 199000, 158),
(98, 10, 187, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'L', 199000, 1, 199000, 159),
(99, 10, 189, 'khoac_da.jpg', 'Áo khoác da nữ VIZAKEY', 'Cream', 'M', 499000, 1, 499000, 160),
(100, 10, 186, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'M', 199000, 1, 199000, 161),
(101, 1, 187, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'L', 199000, 1, 199000, 162),
(102, 1, 183, 'khoac_phao1.jpg', 'Áo khoác phao dáng dài phong cách hàn quốc', 'Trắng', 'L', 264000, 1, 264000, 163),
(103, 1, 187, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'L', 199000, 1, 199000, 164),
(104, 10, 187, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'L', 199000, 1, 199000, 165),
(105, 10, 186, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'M', 199000, 1, 199000, 166),
(106, 10, 186, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'M', 199000, 1, 199000, 174),
(107, 10, 182, 'khoac_phao1.jpg', 'Áo khoác phao dáng dài phong cách hàn quốc', 'Trắng', 'M', 264000, 1, 264000, 175),
(108, 10, 182, 'khoac_phao1.jpg', 'Áo khoác phao dáng dài phong cách hàn quốc', 'Trắng', 'M', 264000, 1, 264000, 184),
(109, 10, 182, 'khoac_phao1.jpg', 'Áo khoác phao dáng dài phong cách hàn quốc', 'Trắng', 'M', 264000, 1, 264000, 186),
(113, 10, 182, 'khoac_phao1.jpg', 'Áo khoác phao dáng dài phong cách hàn quốc', 'Trắng', 'M', 264000, 1, 264000, 202),
(114, 10, 182, 'khoac_phao1.jpg', 'Áo khoác phao dáng dài phong cách hàn quốc', 'Trắng', 'M', 264000, 1, 264000, 203),
(115, 10, 186, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'M', 199000, 1, 199000, 204),
(116, 10, 186, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'M', 199000, 1, 199000, 205),
(117, 10, 186, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'M', 199000, 1, 199000, 206),
(118, 10, 186, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'M', 199000, 1, 199000, 207),
(119, 10, 186, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'M', 199000, 1, 199000, 208),
(120, 10, 186, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'M', 199000, 1, 199000, 209),
(121, 1, 146, 'chanvay_jean.jpg', 'Chân Váy Jean Nữ Chữ A KABICO ', 'Xanh', 'M', 105000, 1, 105000, 210),
(122, 1, 186, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'M', 199000, 1, 199000, 211),
(123, 1, 186, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'M', 199000, 1, 199000, 213),
(124, 1, 187, 'khoac_len.jpg', 'Áo khoác len cardigan tay phối sọc Thome', 'Xám', 'L', 199000, 1, 199000, 215),
(125, 1, 182, 'khoac_phao1.jpg', 'Áo khoác phao dáng dài phong cách hàn quốc', 'Trắng', 'M', 264000, 1, 264000, 216),
(126, 10, 187, 'khoac_len.jpg', '  Áo khoác len cardigan tay phối sọc Thome  ', 'Xám', 'L', 199000, 1, 199000, 217),
(127, 10, 187, 'khoac_len.jpg', '  Áo khoác len cardigan tay phối sọc Thome  ', 'Xám', 'L', 199000, 1, 199000, 218),
(128, 10, 187, 'khoac_len.jpg', '  Áo khoác len cardigan tay phối sọc Thome  ', 'Xám', 'L', 199000, 1, 199000, 219),
(129, 10, 183, 'khoac_phao1.jpg', ' Áo khoác phao dáng dài phong cách hàn quốc ', 'Trắng', 'L', 264000, 1, 264000, 220),
(130, 10, 187, 'khoac_len.jpg', '  Áo khoác len cardigan tay phối sọc Thome  ', 'Xám', 'L', 199000, 1, 199000, 221),
(133, 10, 187, 'khoac_len.jpg', '  Áo khoác len cardigan tay phối sọc Thome  ', 'Xám', 'L', 199000, 1, 199000, 224),
(134, 10, 187, 'khoac_len.jpg', '  Áo khoác len cardigan tay phối sọc Thome  ', 'Xám', 'L', 199000, 1, 199000, 225),
(135, 10, 183, 'khoac_phao1.jpg', ' Áo khoác phao dáng dài phong cách hàn quốc ', 'Trắng', 'L', 264000, 1, 264000, 226),
(136, 10, 183, 'khoac_phao1.jpg', ' Áo khoác phao dáng dài phong cách hàn quốc ', 'Trắng', 'L', 264000, 9, 2376000, 226),
(137, 10, 183, 'khoac_phao1.jpg', ' Áo khoác phao dáng dài phong cách hàn quốc ', 'Trắng', 'L', 264000, 18, 4752000, 226);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id_donhang` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `hoten_nn` varchar(60) NOT NULL,
  `diachi_nn` varchar(255) NOT NULL,
  `email_nn` varchar(200) NOT NULL,
  `sdt_nn` varchar(11) NOT NULL,
  `ngay_dat_hang` varchar(200) DEFAULT NULL,
  `trang_thai` int(1) DEFAULT 1 COMMENT '1.chờ xác nhận 2.đang xử lý 3.Đang giao hàng 4.hoàn tất 5.Đã hủy đơn',
  `tong_tien` int(15) DEFAULT NULL,
  `id_km` int(11) NOT NULL,
  `pttt` int(1) NOT NULL COMMENT '1.thẻ tín dụng 2.Thanh toán khi nhận hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id_donhang`, `id_user`, `hoten_nn`, `diachi_nn`, `email_nn`, `sdt_nn`, `ngay_dat_hang`, `trang_thai`, `tong_tien`, `id_km`, `pttt`) VALUES
(202, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 237600, 7, 1),
(203, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 237600, 7, 1),
(204, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 179100, 7, 1),
(205, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 0, 7, 1),
(206, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 0, 7, 1),
(207, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 0, 7, 1),
(208, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 179100, 7, 1),
(209, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 199000, 0, 1),
(210, 1, 'Tạ Đồng Cảnh', 'FPT POLY Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 105000, 0, 2),
(211, 1, 'Tạ Đồng Cảnh', 'FPT POLY Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 179100, 7, 2),
(212, 1, 'Tạ Đồng Cảnh', 'FPT POLY Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 0, 7, 2),
(213, 1, 'Tạ Đồng Cảnh', 'FPT POLY Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 179100, 7, 2),
(214, 1, 'Tạ Đồng Cảnh', 'FPT POLY Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 0, 7, 2),
(215, 1, 'Tạ Đồng Cảnh', 'FPT POLY Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 179100, 7, 2),
(216, 1, 'Tạ Đồng Cảnh', 'FPT POLY Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', 'canhtdph35170@fpt.edu.vn', '09310930', '08/12/2023', 1, 237600, 7, 1),
(217, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '10/12/2023', 1, 199000, 0, 2),
(218, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '10/12/2023', 1, 179100, 7, 1),
(219, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '10/12/2023', 1, 199000, 0, 1),
(220, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '10/12/2023', 1, 264000, 0, 2),
(221, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '10/12/2023', 4, 199000, 0, 1),
(224, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '10/12/2023', 2, 199000, 0, 2),
(225, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '11/12/2023', 1, 199000, 0, 2),
(226, 10, 'Tạ Đồng Cảnh', 'hanoi', 'canhtdph35170@fpt.edu.vn', '09310930', '11/12/2023', 1, 7392000, 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh_sanpham`
--

CREATE TABLE `gioitinh_sanpham` (
  `id_gioitinh_sp` int(11) NOT NULL,
  `gioitinh` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gioitinh_sanpham`
--

INSERT INTO `gioitinh_sanpham` (`id_gioitinh_sp`, `gioitinh`) VALUES
(1, 'Nam'),
(2, 'Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hethong`
--

CREATE TABLE `hethong` (
  `id_hethong` int(10) NOT NULL,
  `ten_cuahang` varchar(255) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hethong`
--

INSERT INTO `hethong` (`id_hethong`, `ten_cuahang`, `sdt`, `email`, `diachi`, `logo`) VALUES
(1, '  Zairito  ', '  190012214', '  zairito@gmail.com.vn  ', '  FPT POLY Trịnh Văn Bô - Nam Từ Liêm - Hà Nội  ', 'footer-logo.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id_km` int(11) NOT NULL,
  `ma_km` varchar(60) NOT NULL,
  `phantram_km` int(3) NOT NULL,
  `ngay_batdau` date NOT NULL,
  `ngay_ketthuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id_km`, `ma_km`, `phantram_km`, `ngay_batdau`, `ngay_ketthuc`) VALUES
(6, 'DDJHAA1', 12, '2023-11-28', '2023-12-15'),
(7, 'KHDAS21', 10, '2023-12-07', '2023-12-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `id_lienhe` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `ten` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sdt` varchar(255) DEFAULT NULL,
  `noi_dung` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lien_he`
--

INSERT INTO `lien_he` (`id_lienhe`, `id_user`, `ten`, `email`, `sdt`, `noi_dung`) VALUES
(4, 10, 'Tạ Đồng Cảnh', 'tadongcanh@gmail.com', '03232032', 'đâsda'),
(5, 0, 'Triệu Đức Mạnh', 'manh123@gamil.com', '38210983103', 'shop đồ này dùng làm sao'),
(6, 0, 'Triệu Đức Mạnh', 'manh123@gamil.com', '38210983103', 'shop đồ này dùng làm sao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mau_sp`
--

CREATE TABLE `mau_sp` (
  `id_mau` int(11) NOT NULL,
  `ten_mau` varchar(255) NOT NULL,
  `ma_mau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mau_sp`
--

INSERT INTO `mau_sp` (`id_mau`, `ten_mau`, `ma_mau`) VALUES
(9, 'Xanh', '#000044'),
(10, 'Đỏ', '#FF0000'),
(11, 'Vàng', '#FFFF66'),
(12, 'Tím', '#9900FF'),
(13, 'Cam', '#FF6600'),
(14, 'Xanh lam', '#0099FF'),
(15, 'Đen', '#000011'),
(16, 'Trắng', '#FFFAF0'),
(17, 'Xám đen', '#999999'),
(18, 'Be đen', '#333333'),
(19, 'Cream', '#FAFAD2'),
(20, 'Pink', '#FF6699'),
(22, 'Trắng phối đen', '#DDDDDD'),
(23, 'Tím', '#CC00CC'),
(24, '1 cái ngẫu nhiên', '#EEEEEE'),
(25, 'Nâu', '#660000'),
(26, 'Đen phối trắng', '#DDDDDD'),
(27, 'Gấu', '#336699'),
(28, 'Xám', '#CCCCCC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom_sanpham`
--

CREATE TABLE `nhom_sanpham` (
  `id_nhom_sp` int(10) NOT NULL,
  `nhom_sp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhom_sanpham`
--

INSERT INTO `nhom_sanpham` (`id_nhom_sp`, `nhom_sp`) VALUES
(7, 'Quần Jean'),
(9, 'Áo thun'),
(10, 'Đồ lót'),
(11, 'Áo polo'),
(12, 'Chân váy'),
(14, 'Áo khoác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sanpham` int(11) NOT NULL,
  `ten_sanpham` varchar(255) DEFAULT NULL,
  `gia` int(15) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL,
  `luotban` int(15) NOT NULL,
  `hinh_daidien` varchar(255) NOT NULL,
  `id_gioitinh_sp` int(11) NOT NULL,
  `id_nhom_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sanpham`, `ten_sanpham`, `gia`, `mota`, `luotxem`, `luotban`, `hinh_daidien`, `id_gioitinh_sp`, `id_nhom_sp`) VALUES
(99, ' OWEN - Quần jeans Nam dáng Slim Fit màu Xanh chất liệu Cotton spandex - QJS230161 ', 500000, 'Thương hiệu: Owen <br>\r\n\r\nChất liệu: 98% cotton- 2% spandex <br>\r\n\r\nKiểu dáng: Slim Fit <br>\r\n\r\nXuất xứ: Việt Nam <br>\r\n\r\n\r\n\r\nHướng dẫn bảo quản <br>\r\n\r\nGiặt máy với chu kỳ trung bình và vòng quay ngắn <br>\r\n\r\nGiặt máy ở nhiệt độ tối đa là 30 độ C <br>\r\n\r\nKhông được sấy khô <br>\r\n\r\nPhơi bằng móc <br>\r\n\r\nỦi ở nhiệt độ trung bình <br>\r\n\r\nKhông được tẩy <br>\r\n\r\n\r\n\r\nThông tin thương hiệu <br>\r\n\r\nOwen là thương hiệu thời trang công sở cao cấp được phân phối bởi công ty thời trang Kowil thuộc tập đoàn Phú Thái - tập đoàn phân phối thời trang lớn tại Việt Nam. Các sản phẩm của Owen có kiểu dáng hiện đại được may từ chất liệu vải cao cấp, mang lại phong cách tươi trẻ nhưng không kém phần năng động, cá tính. <br>\r\n\r\n\r\n\r\nLưu ý:  <br>\r\n\r\n+ Bảng size chart chỉ mang tính chất tham khảo, tùy thuộc vào số đo cơ thể và chất liệu vải khác nhau sẽ có sự chênh lệch nhất định. <br>\r\n\r\n+ Màu sắc vải/ sản phẩm có thể sẽ chênh lệch thực tế một phần nhỏ, do ảnh hưởng về độ lệch màu của ánh sáng nhưng vẫn đảm bảo chất lượng. <br>\r\n\r\n+ Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi. <br>\r\n\r\n+ Các Anh Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé. <br>\r\n\r\n+ Không hỗ trợ đổi hàng thuộc chương trình khuyến mãi, trừ những sản phẩm có lỗi từ nhà sản xuất.\" <br>\r\n\r\n+ Lưu ý đổi trả 7 ngày chỉ áp dụng cho các sản phẩm nguyên giá ( Sản phẩm phẩm không thuộc CTKM) <br>', 5, 20, 'vn-11134207-7r98o-lm8maioavx0f7b.jpg', 1, 7),
(100, '  Quần jean bò nam slimfit wash xanh khói  ', 269000, '✔️ Tên sản phẩm: Quần Jean bò nam xanh khói ống côn phối rách xước vá vải nhăn đen <br>\r\n✔️ Xuất xứ: Việt Nam <br>\r\n✔️ Chất liệu: Vải Jean Denim 100% siêu dày dặn, không nhăn không phai màu, độ bền cao , co giãn nhẹ và thấm hút mồ hôi tốt <br>\r\n✔️ Kích cỡ: 28/29/30/31/32(45- 73kg) <br>\r\n✔️ Màu sắc: Xanh khói <br>\r\n✔️ Kiểu thiết kế: Phối rách xước đùi gối vá vải nhăn đen, ống loang sóng <br>\r\n✔️ Phối đồ: Quần jean đã trở thành một món đồ khum thể thiếu of mỗi người bởi nó cực dễ phối với mọi loại giày, áo và tạo lên những outfit năng động, phá cách, thanh lịch, sang chảnh,… <br>', 6, 29, 'jean.jpg', 1, 7),
(101, '   Quần Jean nam thời trang retro quần jean ống suông form rộng nam nữ quần jean nam rách gối hàn quốc quần bò nữ   ', 199000, 'Chào mừng đến với Zariito.\r\n <br>\r\n         ????Tất cả các sản phẩm trong cửa hàng của chúng tôi được bán với giá thấp và chất lượng được đảm bảo.  Thời gian giao hàng ước tính cho sản phẩm này là 7-9 ngày. <br>\r\n\r\n          ????Thông tin sản phẩm cơ bản: 【Vui lòng đọc trước khi mua】 <br>\r\n\r\n                ????Kích thước: M, L, XL <br>\r\n\r\n                ????Màu sắc: xanh dương <br>\r\n\r\n                ????Phong cách: Giản dị và thoải mái <br>\r\n\r\n                ???? Độ dày: Bình thường <br>\r\n\r\n                ????Phong cách: rộng <br>\r\n\r\n                ????Loại quần: quần jean thẳng <br>\r\n\r\n               ????Chất liệu: Denim <br>\r\n\r\n          ????Cửa hàng của chúng tôi có rất nhiều loại áo phông, áo sơ mi, quần short, quần tây, áo khoác, v.v., mỗi chiếc có đặc điểm và kích cỡ riêng. <br>\r\n\r\n          ???? Màu sắc thực tế hơi khác so với hình ảnh do hiệu ứng ánh sáng. <br>\r\n\r\n          ???? Do các phương pháp đo lường khác nhau, xin vui lòng cho phép lỗi 2-5CM, phạm vi lỗi không phải là vấn đề chất lượng. Vui lòng kiểm tra cẩn thận trước khi đặt hàng. Sau khi đặt hàng, chúng tôi không chấp nhận việc hủy hoặc sửa đổi! <br>\r\n\r\n          ????Nếu có thắc mắc về kích thước trong quá trình mua hàng, vui lòng để lại tin nhắn cho chúng tôi, chúng tôi sẽ giới thiệu kích thước phù hợp nhất cho bạn trong thời gian. <br>\r\n\r\n          ???? Nếu bạn hài lòng với việc mua hàng của mình, hãy nhớ cung cấp cho tôi thông tin phản hồi 5 sao và giới thiệu cửa hàng của tôi với bạn bè của bạn. Sự động viên và ủng hộ của các bạn sẽ là động lực lớn nhất của tôi. Đã có một kinh nghiệm mua sắm tốt. Có một ngày tuyệt vời hôm nay! <br>', 10, 0, 'jean1.jpg', 1, 7),
(102, '   Quần Jean Nam Mikenco Wash Mài Bạc Rách Nhăn Gối Phối Khoá Ống Phong Cách Streetwear   ', 279000, 'THÔNG TIN SẢN PHẨM:\r\n <br>\r\n✔️ Tên sản phẩm: Quần Jean bò nam ống côn phối rách vá vải nhăn gối khoá ống <br>\r\n✔️ Xuất xứ: Việt Nam <br>\r\n✔️ Chất liệu: Vải Jean Denim 100% siêu dày dặn, không nhăn không phai màu, độ bền cao , co giãn nhẹ và thấm hút mồ hôi tốt <br>\r\n✔️ Kích cỡ: 28/29/30/31/32/34 (45- 76kg) <br>\r\n✔️ Màu sắc: Đen mài, xanh, trắng <br>\r\n✔️ Kiểu thiết kế: Phối rách xước, vá vải nhăn, khoá zip ống <br>\r\n✔️ Phối đồ: Quần jean đã trở thành một món đồ khum thể thiếu of mỗi người bởi nó cực dễ phối với mọi loại giày, áo và tạo lên những outfit năng động, phá cách, thanh lịch, sang chảnh,… <br>', 1, 69, 'jeanmiken.jpg', 1, 7),
(103, '     Quần Jean Dài Nam Rách 2 Gối Phong Cách Thời Trang Cao Cấp, From Dáng Skinny     ', 180000, 'Chi tiết sản phẩm <br>\r\n- Kiểu dáng thời trang, sành điệu. <br>\r\n- Tổng thể màu hài hòa tạo sự năng động, cá tính. <br>\r\n- Có hai túi xéo trước và hai túi sau rất tiện dụng. <br>\r\n- Chất liệu jean cotton bền đẹp, chắc chắn, không phai màu, không co rút khi giặc. <br>\r\n- Đường chỉ may chắc chắn, tỉ mỉ, tinh tế cả những chi tiết nhỏ <br>\r\n- Phù hợp nhiều lứa tuổi nên bạn sẽ hoàn toàn an tâm khi mặc sản phẩm. <br>\r\n- Có thể kết hợp cùng nhiều trang phục khác nhau để mang tới cho mình một phong cách cá tính riêng. <br>\r\nCAM KẾT <br>\r\n- Giao hàng đúng mẫu mã , size khách đặt  <br>\r\n- Giao hàng toàn quốc <br>\r\n- Miễn phí đổi trả nếu shop gửi không đúng size hoặc sai mẫu. <br>', 1, 0, 'jean_rachgoi.jpg', 1, 7),
(104, '    Quần short jean rách tua rua lòi túi siêu tôn dáng hàng qccc    ', 249000, 'Quần short jean nữ rách tua rua tôn dáng siêu phẩm đi biển <br>\r\nCám ơn nàng đã bỏ chút thời gian ghé thăm gian hàng nhà mình. <br>\r\nChúc nàng tìm được những sản phẩm ưng ý để ring về tủ đồ của mình nhé.  <br>\r\nCAM KẾT: <br>\r\n•Sản phẩm như hình và video <br>\r\n•Chất lượng đảm bảo <br>\r\n•Đổi trả hàng nếu có lỗi do nhà sản xuất, sai mẫu <br>\r\n* BẢNG SIZE: <br>\r\n1. Bảng size theo cân nặng:  <br>\r\n- Size M: 49-54kg <br>\r\n- Size L: 54-60kg <br>\r\n-Size XL: 60-66kg <br>\r\n-> Lưu ý: Những số đo trên là tương đối, hãy chat với shop, cung cấp chiều cao + cân nặng để được tư vấn chính xác nhất. <br>', 10, 14, 'jeannu.jpg', 2, 7),
(105, ' Quần jean lưng cao thiết kế rách lỗ thêu họa tiết cá tính thời trang Hong Kong dành cho nữ ', 235000, 'Jean Hong Kong dành cho nữa với phong cách độc đáo', 357, 2, 'jeannu_rachgoi1.jpg', 2, 7),
(106, 'Quần jean rách gối(girl PHỐ)hàng loại1', 175000, 'Quần jeans chất liệu bò rách gối hai bên phối màu xanh trắng cũ các bạn mua hàng. Xin vui lòng quay video lại quá trình bóc hàng nếu sảy ra vấn đề hoàn trả hàng shop sẽ không chấp nhận nếu ko có video kèm theo xin cảm ơn ạ .', 323, 0, 'jean_gonpho.jpg', 2, 7),
(107, ' Quần short jean quần đùi bò lưng cao ống rộng thời trang Hàn Quốc JENNIE STORE S1 ', 105000, '-Tên sản phẩm: Quần short jean quần đùi bò lưng cao ống rộng sắn gấu thời trang Hàn Quốc JENNIE STORE S1\r\n\r\n <br>\r\n\r\nThông tin sản phẩm <br>\r\n\r\n+ Thành phần: chất liệu kaki/jean dày dặn co dãn cực thoải mái <br>\r\n\r\n\r\n\r\n+ Thông số sản phầm: <br>\r\n\r\n\r\n\r\n- Size M: nặng 46 - 50 kg (cao 1,50 - 1,65 mét) eo 66-68 mông 94-96 <br>\r\n\r\n\r\n\r\n- Size L: nặng 51 - 55 kg ( cao 1,50 - 1,65 mét) eo 70-72 mông 96-98 <br>\r\n\r\n\r\n\r\n- Size XL: nặng 56- 60 kg (cao 1,50 - 1,65  mét) eo 74-76 mông 98-100 <br>\r\n\r\n\r\n\r\n\r\n\r\n+ Thông tin cảnh báo/Hướng dẫn sử dụng <br>\r\n\r\n\r\n\r\n-  Nên giặt máy ở chế độ máy nhẹ nhàng hoặc giặt tay <br>\r\n\r\n\r\n\r\n- GIÁ TẬN GỐC, MIỄN TRUNG GIAN, NÓI KHÔNG VỚI HÀNG KÉM CHẤT LƯỢNG <br>\r\n\r\n\r\n\r\n- Chất lượng bền đẹp, luôn đặt uy tín lên hàng đầu <br>\r\n\r\n\r\n\r\n- Khách được kiểm tra hàng trước khi thanh toán <br>\r\n\r\n\r\n\r\n- Giải quyết mọi thắc mắc của khách hàng <br>\r\n\r\n\r\n\r\n\r\n\r\n* Màu sắc thực có thể hơi khác so với hình ảnh do độ phân giải, độ sáng, độ tương phản của màn hình máy tính, vv. Mong quý khách hàng thông cảm. <br>\r\n\r\n', 0, 0, 'jeannu_short1.jpg', 2, 7),
(108, '  Áo thun  Tommy hàng cao cấp   ', 299000, 'Áo Thun TOMMY Unisex - Áo thun hàng hiệu - Áo thun nữ cao cấp - Áo thun nam cao cấp  <br>\r\n- Full Tem, tag, nhãn sườn Áo thun Unisex – TOMMY  HILFIGER  <br>\r\n- Thiết kế trẻ trung làm khuynh đảo thị trường, cực dễ phối đồ. Dù là tín đồ thời trang khó tính nhất cũng không thể bỏ qua siêu phẩm này. Nhắn tin cho Shop để được tư vấn chọn áo các bạn nhé.  <br>', 101, 0, 'tommy.jpg', 1, 9),
(109, ' Áo thun local brand By UniSpace tay lỡ form rộng unisex nam Lit Up Tee-AP2023 ', 139000, 'Áo thun By UniSpace Lit Up Tee <br>\r\n------------------- <br>\r\nMột chiếc áo phông thật ngầu cả nam nữ đều mặc được <br>\r\n\r\nPhong cách streetwear.  <br>\r\n\r\nChất liệu Cotton đứng form  thoáng mát <br>\r\n\r\nHình in ấn tượng  <br>\r\n\r\nForm oversize rộng rãi đậm tính unisex <br>\r\n-------------------------- <br>\r\n\r\nChất liệu: 100% Cotton <br>\r\n\r\nMàu: Xám, Đen <br>', 1, 0, 'thuncc.jpg', 1, 9),
(110, ' Áo Thun Dáng Rộng Cỡ Lớn Kiểu Đường Phố Âu Mỹ Cá Tính Cho Nam ', 159000, 'Vải / chất liệu: Khác / Polyester (Sợi Polyester) <br>\r\n\r\nNội dung thành phần: 100% <br>\r\n\r\nCác yếu tố phổ biến: in ấn <br>\r\n\r\nPhiên bản quần áo: Lỏng lẻo <br>\r\n\r\nPhong cách: Đường phố cá tính / Hip Hop <br>\r\n\r\nChiều dài / Chiều dài tay áo / Chiều dài tay áo: Tay áo thường / Tay áo ngắn <br>\r\n\r\nLoại cổ áo: cổ tròn <br>\r\n\r\nĐộ tuổi áp dụng: Thanh niên (18-25 tuổi) <br>\r\n\r\nMùa niêm yết thời gian: Mùa hè 2022 <br>\r\n\r\nLoại tay áo: Thường xuyên <br>\r\n\r\nKích thước: <br>\r\n\r\nM: Ngực 104, Dài 67, Vai 52, Tay áo 19; <br>\r\n\r\nL: Ngực 107, Dài 68, Vai 53, Tay áo 20;  <br>\r\n\r\nXl: Ngực 115 Chiều dài 70, Vai 58 Tay áo 22; <br>\r\n\r\n2xl: Ngực 118 Chiều dài 72 Vai 60 Tay áo 23. <br>\r\n\r\nChất liệu M, L, XL, 2XL màu đen được nâng cấp thành chất liệu Cotton nguyên chất, dày hơn chất liệu Polyester. <br>\r\n\r\nĐen M: Ngực 100, Dài 69, Vai 50, Tay áo 20; <br>\r\n\r\nĐen L: Ngực 108, Dài 69, Vai 53, Tay áo 21; <br>\r\n\r\nXl đen: Ngực 112, Dài 74, Vai 53, Tay áo 22,5; <br>\r\n\r\nĐen 2XL: Ngực 116, Dài 74, Vai 58, Tay áo 22,5; <br>\r\n\r\nCó Một Lỗi 1-3 cm Trong Đo Thủ Công, Xin Vui Lòng Thứ Cho Tôi. <br>', 80, 0, 'thundb.jpg', 1, 9),
(111, ' Áo thun nam, áo phông nam tay ngắn cổ tròn chất cotton dày dặn thoáng mát ATN026  ', 199000, 'Áo thun nam, áo phông nam tay ngắn cổ tròn chất cotton dày dặn thoáng mát ATN026 - Áo thun An Cường <br>\r\n\r\nÁo thun An Cường luôn luôn cập nhật những mẫu mã sản phẩm mới, đa dạng phù hợp với các bạn trẻ trung – Áo thun An Cường hứa hẹn sẽ luôn đem lại cho bạn những sản phẩm thời trang ưng ý và hoàn hảo nhất.\r\n <br>\r\n- Về sản phẩm: Shop cam kết cả về CHẤT LIỆU cũng như HÌNH DÁNG (đúng với những gì được nêu bật trong phần mô tả sản phẩm).  <br>\r\n- Về giá cả: chúng tôi tự tin là nhà sản xuất có mức giá thấp nhất thị trường <br>\r\n- Thời gian chuẩn bị hàng: Hàng có sẵn, thời gian chuẩn bị tối ưu nhất.  <br>\r\n Shop Buôn Sỉ Áo Thun Nam Tay Ngắn In Họa Tiết  <br>', 0, 0, 'thunlon.jpg', 1, 9),
(112, ' Áo thun NEEDS OF WISDOM Devil Tee - Cream - Local Brand Chính Hãng ', 260000, 'Sản Phẩm: Áo thun NEEDS OF WISDOM Devil Tee - Cream <br>\r\n\r\n\r\n\r\n- Chất Liệu: 100% Cotton. <br>\r\n\r\n\r\n\r\n- Sản Xuất bởi Nowsaigon.\r\n <br>\r\n\r\n\r\n- Kiểu Dáng: Form áo rộng với 4 size: S,M, L & XL <br>\r\n\r\n\r\n\r\n- Màu sắc: 1 màu Kem. <br>', 0, 0, 'thun_kem.jpg', 1, 9),
(113, '  Áo thun gấu lotso form rộng AT394 Miucho chất vải cotton in graphic  ', 139000, 'Chất liệu cao cấp: Áo thun nữ Zarito được tạo nên từ 95% cotton và 5% spandex, giúp bạn thoải mái vận động và linh hoạt  <br>trong mọi hoạt động. Với sự hỗ trợ từ spandex, áo được giữ nguyên form dáng và không bị co rút sau khi giặt. <br>\r\n\r\n\r\n\r\n???? Chất lượng in hình của Zarito không chỉ đảm bảo sắc nét và chân thực, mà còn giữ cho hình in hoàn hảo sau mỗi lần giặt. Miucho sử dụng công nghệ in ấn tiên tiến và mực in chất lượng cao để đảm bảo hình ảnh trên áo thun không bị nứt, bong tróc hay mất đi độ tươi mới. <br>', 1, 0, 'lotso.jpg', 2, 9),
(114, ' Áo Thun Babytee Nữ Trơn Tay Ngắn Phối Sọc Đen Tôn Dáng, Áo Thun Dáng Ôm HUG ME Cổ Tròn Chất Cotton Co Giãn ', 119000, ' Chất liệu: 100% cotton 2 chiều, mềm mịn thoáng mát <br>\r\n- Color: Hồng <br>\r\n- Điểm đặc biệt, bo cổ co giãn 4 chiều, giúp cho vòng bo hạn chế nhão, ôm trọn bờ cổ hơn <br>', 0, 0, 'bbtee1.jpg', 2, 9),
(115, '  Áo Thun Nữ Trắng Tay Đen Vải Bo Gân Ôm Body- Angel Tay Ngắn  ', 299000, 'THÔNG TIN SẢN PHẨM: \r\n <br>\r\n- Màu sắc: trắng <br>\r\n\r\n- Kích thước: M, L, XL <br>\r\n\r\n- Chất liệu: Thun <br>', 0, 0, 'crotop.jpg', 2, 9),
(116, ' Áo thun tay lỡ unisex form rộng SADLUV LUXA, Áo phông nam nữ ulzzang ATL06 ', 129000, 'THÔNG TIN SẢN PHẨM:  <br>\r\n\r\n- Tên sản phẩm: Áo thun Unisex form rộng tay lỡ nam nữ <br>\r\n\r\n- Xuất sứ: Việt Nam  <br>\r\n\r\n- Chất liệu: 35% Cotton, 60% Polyester, 5% Spandex <br>\r\n\r\n- Vải thun co giãn, hình in sắc nét, chất vải thoáng mát, không xù, không nhăn, không hút bụi bẩn <br>', 1, 0, 'thun_hong.jpg', 2, 9),
(117, '   Áo thun tay lỡ nữ unisex freesize form rộng 65kg chất cotton đẹp 2023  ', 99000, 'Áo phông SAI.NT phối thân HOTTREND - Áo thun tay lỡ nam nữ unisex freesize form rộng 65kg chất cotton đẹp 2023 <br>\r\nChất liệu: Cotton <br>\r\nMàu sắc: Trắng <br>\r\nKích cỡ: Sản phẩm nam nữ Unisex Freesize từ 40-65kg tùy chiều cao nha! <br>\r\n✔ Chất liệu dày dặn, mềm, mát. <br>\r\n✔ Thiết kế với form dễ mặc, thoải mái. <br>\r\n✔ Đường may tỉ mỉ, tinh tế <br>\r\n✔ Dễ dàng kết hợp với các trang phục, phụ kiện khác. <br>\r\n✔ Phong cách: Trẻ trung - Cá tính - Độc Đáo. Đây chắc chắn là một món đồ thời trang không thể thiếu trong tủ đồ của bạn. <br>\r\n✔ Sản phẩm đẹp như hình. Giá thành cạnh tranh nhất thị trường. <br>', 1, 0, 'thun_lo.jpg', 2, 9),
(118, ' Áo ngực hai nút phía trước Áo ngực ren gợi cảm Dây đai có thể tháo rời ', 70000, 'Chức năng áo lót: khóa trước\r\n\r\n\r\n <br>\r\nChi tiết kiểu trang phục: phối ren <br>\r\n\r\n\r\n\r\nKiểu áo lót: ngọt ngào，sexy <br>\r\n\r\n\r\n\r\nPhần dưới của áo lót dày hơn và phần trên mỏng hơn. <br>\r\n\r\nThiết kế này có thể nâng cao ngực và giúp ngực trông đầy đặn hơn <br>', 0, 0, 'ao_bu_ngon.jpg', 2, 10),
(119, ' Quần lọt khe nữ sexy - Quần lót sexy nữ - Sịp lọt khe cotton đáy kháng khuẩn Cavera L461 ', 40000, 'Quần lọt khe nữ sexy - Quần lót sexy nữ - Sịp lọt khe cotton đáy kháng khuẩn Cavera L461\r\n\r\n <br>\r\n\r\nMô tả sản phẩm :(Có che tên sản phẩm khi gửi hàng khách yên tâm đặt hàng nhé) <br>\r\n\r\n -Quần lót lọt khe dược thiết kế với phong cách sexy giúp bạn gợi cảm hơn và tự tin hơn.  <br>\r\n\r\n- Quần lót Cotton co dãn lọt khe cao cấp sang trọng quyến rũ.  <br>\r\n\r\n- Cotton mềm mại thoáng khí tốt  <br>\r\n\r\n- Màu sắc thanh lịch trẻ trung , quần giặt máy <br>\r\n\r\n\r\n\r\n- Size Quần : M L XL <br>\r\n\r\n- Chất liệu: Cotton  <br>\r\n\r\n- Thoáng khí, đáy lót cotton kháng khuẩn thấm hút tốt mềm mịn, thoáng mát mang lại cảm giác nhẹ nhàng cho bạn khi mặc. <br>\r\n\r\n\r\n\r\n- Quần lọt khe cotton không đường may kiểu dáng đơn giản nhưng sang trọng, phù hợp với nhiều lứa tuổi.  <br>\r\n\r\n- Mẫu thiết kế không đường may nên không lo lộ đường viền quần chíp khi mặc đồ bó sát.  <br>\r\n\r\n- Siêu co dãn, mặc mềm mại thoải mái nên các chị em dù gầy hay béo đều có thể sử dụng mẫu này.  <br>\r\n\r\n- Là con gái nên có ít nhất 1cái trong tủ đồ nha chị em. <br>', 5, 1, 'lot_khe.jpg', 2, 10),
(120, ' Set bikini thiết kế quyến rũ thời trang cho nữ ', 80000, 'Thời gian giao hàng dự kiến cho sản phẩm này là từ 7-9 ngày\r\n <br>\r\nĐược đóng gói: 1 * Bra, 1 * Quần lót <br>\r\nMàu sắc: Đen, Trắng <br>\r\nLoại sản phẩm: Bộ bikini gợi cảm <br>\r\nChất liệu: Polyster <br>\r\nKích thước: Một kích thước (Có thể điều chỉnh) <br>\r\n\r\n\r\n\r\n- Quần lót nữ ren lọt khe gợi cảm cao cấp chất liệu ren cotton gân êm, mỏng nhẹ, dễ mang. <br>\r\n\r\n- Thiết kế cạp thấp bản vừa ngang hông mới lạ, siêu đẹp <br>', 0, 0, 'bkn.jpg', 2, 10),
(121, ' Bộ Đồ Lót Liền Thân Phối Cà Vạt Mini Nhiều Màu Quyến Rũ Cho Nữ ', 129000, 'Iterm: Lingerie <br>\r\nPackage include: 1* Bra+1*skirt+1* Neck Tie+1* thong <br>\r\nMaterial: Spandex <br>\r\nGender: Female <br>\r\nSize:  <br>\r\nTie Size : circumference: 38-60cm, length: 13cm <br>\r\nUnder bust: 60-90cm <br>\r\nSkirt size: waist: 70-98cm, length: 22cm, <br>\r\nThong waist: 62-108cm <br>\r\nWeight: 40-60kg <br>', 0, 0, 'lot_bo.jpg', 2, 10),
(122, ' Bộ đồ lót QB10 nữ cup ngang có gọng mút vừa nâng ngực tự nhiên phối ren Basil ', 40000, 'Bộ đồ lót đệm vừa chất ren mềm mại thoáng khí <br>\r\n\r\n1/2 cúp gợi cảm nhưng vẫn đảm bảo ôm gọn chống xệ tối đa <br>\r\n\r\nChất liệu cotton cao cấp\r\n <br>\r\nThấm hút mồ hôi ,không gây bí bích. <br>\r\n\r\nKiểu dáng màu sắc thời trang , thích hợp cho mọi phong cách <br>', 0, 0, 'do_lot.jpg', 2, 10),
(123, ' Sịp chéo tam giác Hoàng Gia Etipse cạp to viền vàng ánh kim sang trọng, chất liệu thun lạnh cao cấp, mềm mịn thoáng mát ', 70000, 'Sịp Hoàng Gia thun lạnh cao cấp\r\n <br>\r\n- Chất liệu thun lạnh cao cấp, kháng khuẩn, ngăn mùi hiệu quả <br>\r\n\r\n- Co dãn 4 chiều cực tốt, không xù, không bai dão <br>\r\n\r\n- Thiết kế cạp thun to bản độc đáo,  thông minh, không gây hằn, cấn khi mặc <br>\r\n\r\n-Được chọn màu, chọn size, mix đủ 3 màu. <br>\r\n\r\nĐược đóng trong hộp đen sang trọng\r\n\r\n- - -\r\n- Được kiểm tra hàng trước khi thanh toán\r\n\r\n- Sản phẩm giống như mô tả và ảnh chụp', 0, 0, 'sip.jpg', 1, 10),
(124, '  Quần lót nam relax thun lạnh cao cấp chính hãng, quần sịp nam relax underwear rltk22  ', 80000, 'QUẦN LÓT NAM RELAX thun lạnh cao cấp chính hãng , QUẦN SỊP NAM RELAX underwear rltk22\r\n  <br>\r\n✧Relax Store  CAM KẾT 100% sản phẩm chính hãng, hàng chất lượng cao  <br>\r\n\r\n- Hàng chuẩn thương hiệu RELAX sản xuất, có tem mác chính hãng. <br>', 0, 0, 'sipden1.jpg', 1, 10),
(125, ' Quần sịp quần lót nam thun lạnh cao cấp siêu nhẹ ', 50000, '- Bền không phai màu quần lót nam họa tiết hoạt hình <br>\r\n- Sản phẩm quần lót nam họa tiết hoạt hình thiết kế đơn giản <br>\r\n- Thiết kế quần với form ôm tinh tế, kiểu dáng thời trang mang lại vẻ đẹp mạnh mẽ, nam tính. <br>\r\n- Mặc thoáng mát mỗi ngày. <br>\r\n- Dòng vải quần lót nam thun lạnh cao cấp siêu nhẹ . <br>\r\n- Co giãn cực kì tốt với những hoạt động thể thao. <br>\r\n- Hướng dẫn cách chọn size: L (45kg- 59kg), XL (60kg-74kg) <br>', 0, 0, 'sip_hoathinh.jpg', 1, 10),
(126, ' Quần lót nam dáng đùi, quần sịp boxer nam in chữ, vải cotton thấm hút tốt SUP03A ', 60000, 'Quần lót nam SUP03A chất liệu cotton 95%, có khả năng thấm hút mồ hôi tốt, thông thoáng, co giãn đàn hồi cả 4 chiều đem lại cảm giác thoải mái khi mặc. Đặc biệt, cotton là nguồn nguyên liệu tự nhiên nên rất an toàn cho vùng da nhạy cảm. Bề mặt vải mềm, mịn không bai dão sau thời gian dài sử dụng. <br>\r\n\r\n•	Quần lót nam boxer SUP03A được thiết kế với form dáng phù hợp với người châu Á, có đủ size từ M, L, XL. <br>\r\n\r\n•	Quần lót nam cotton với thun lưng mềm mại, đàn hồi, chất vải mềm mịn phù hợp sử dụng hàng ngày. <br>\r\n\r\n•	Sản phẩm quần sịp đùi nam SUP03A được gia công lại tại xưởng nên đảm bảo chất lượng từ khâu chọn nguyên liệu. <br>', 0, 0, 'siptrang.jpg', 1, 10),
(127, ' Quần lót nam Tam Giác cao cấp chất liệu thun lạnh , Quần sịp nam Tam giác thun lạnh co dãn 4 chiều ', 90000, 'Quần lót nam Tam Giác cao cấp chất liệu thun lạnh , Quần sịp nam Tam giác thun lạnh co dãn 4 chiều  <br>\r\n\r\n????ĐẶC ĐIỂM NỔI BẬT QUẦN LÓT NAM TAM GIÁC, QUẦN SỊP NAM TAM GIÁC THUN LẠNH <br>\r\n????Quần sịp nam chất vải sợi tự nhiên, rất mềm mại, co giãn 4 chiều. Thấm hút mồ hôi, thoát hơi và kháng  <br>khuẩn rất tốt. <br>\r\n????Kiểu dáng thiết kế trẻ trung, mềm mại <br>\r\n????Co giãn 4 chiều; màu sắc đẹp, sang trọng <br>\r\n???? Rất bền và không phai màu, không xù lông, không bai nhão trong thời dài sử dụng. <br>\r\n???? Không bai giãn, sổ lông trong quá trình sử dụng  <br>\r\n???? Màu Sắc Kích Cỡ Quần sịp nam tam giác Thun Lạnh <br>\r\n???? Khả năng kháng khuẩn cực tốt  <br>\r\n????Mặc thoáng mát, thoải mái không gò bó <br>\r\n???? Sản phẩm tinh tế và được ưa chuộng nhất năm <br>', 0, 0, 'siptamgiac.jpg', 1, 10),
(128, '  Áo POLO Steel Gang  ', 230000, '- Áo POLO  Hot Trend Form Rộng Chất Vải Co Dãn 4 Chiều ???? <br>\r\n-  Chất liệu: Vải polyester sợi tổng hợp với khả năng chống nhăn, chống bụi bẩn, nấm mốc và có tính thẩm mỹ cao <br>\r\nSHOP CÓ XƯỞNG MAY SẢN XUẤT NÊN ĐẢM BẢO CHẤT LƯỢNG VÀ GIÁ RẺ HƠN THỊ TRƯỜNG <br>\r\n\r\nBảng Size áo cho bạn lựa chọn <br>\r\n\r\n- Size M {40 kg-50kg} <br>\r\n\r\n-Size L {51kg-65kg} <br>\r\n\r\n-Size XL {66kg-89kg} <br>\r\n\r\nCHIỀU CAO <br>\r\n\r\nCHIỀU CAO <br>\r\n- Size M [ M40-M55] <br>\r\n- Size L { M56-M73} <br>\r\n- Size XL[M75-M89]  <br>', 0, 0, 'polo.jpg', 1, 11),
(129, ' Áo Polo Nam Gucci Thêu 2 Rắn Cổ Áo ', 234000, 'Áo Polo Nam Gu Chì Thêu 2 Rắn Cổ Áo Siêu Đẹp - Polo Nam Nữ Gờ Cê Chất Liệu Cotton Cao Cấp\r\n <br>\r\nĐIỂM NỔI BẬT CỦA SẢN PHẨM: <br>\r\n- Chất Cotton mịn thoáng mát co dãn 2 chiều, thoáng mát, hút ẩm tốt, mềm mịn, dày dặn, thoải mái khi vận động. <br>\r\n- Hàng may kỹ chắc chắn - Thiết kế đơn giãn thanh lịch trẻ đẹp phù hợp mọi lứa tuổi <br>\r\n- Dễ dàng kết hợp với quần ngắn, quần dài... cho bạn trông thật bảnh bao khi dạo phố, đi chơi, học tập, làm việc hay mặc thường ngày ở nhà. <br>\r\nSHOP CAM KẾT <br>\r\n✔ Mang đến cho khách hàng những sản phẩm với chất lượng tốt nhất trong tầm giá. <br>\r\n✔ Chính sách bảo  hành tốt nhất ( Hỗ trợ đổi size, sản phẩm lỗi) <br>\r\n✔ Shop Cam Kết Chất Lượng và Mẫu Mã Giống hình ảnh 100% <br>\r\n✔ Mẫu Mã Đa Dạng ,Cập Nhật Liên Tục, Chất liệu hàng đầu, giá cả hợp lý. <br>\r\n✔ Nhận hàng không ưng hoặc lỗi khách hàng có thể hoàn hàng và được hoàn tiền 100% <br>\r\nHƯỚNG DẪN CHỌN SIZE : <br>\r\n\r\n✔ Size M: Nặng 52- 58kg ~ Cao 1m60-1m68 <br>\r\n✔ Size L: Nặng 60 - 70kg ~ Cao 1m65-1m72 <br>\r\n✔ Size XL: Nặng 70-78kg ~ Cao 1m68-1m80 <br>\r\n', 0, 0, 'polo_gucci.jpg', 1, 11),
(130, ' Áo thun polo The Bad God Zebra Monogram ', 219000, 'Thông tin sản phẩm  <br>\r\n\r\n- Chất liệu: Thun CVC cao cấp, bề mặt vải mịn, ko xù, ko gião <br>\r\n\r\n- Hoạ tiết được in lụa trực tiếp tràn full áo <br>\r\n\r\n- Đường may tỉ mỉ, chắc chắn <br>\r\n\r\n- Công dụng: mặc ở nhà, mặc đi chơ <br>\r\n\r\n- Thiết kế hiện đại, trẻ trung, năng động. Dễ phối đồ <br>\r\n\r\n- Đủ size: M - L - XL <br>\r\n\r\n* Bảng size mẫu The Bad God: <br>\r\n\r\nSize M: Nặng 50-62kg ; Cao 1m50-1m63 <br>\r\n\r\nSize L: Nặng 63-72kg ; Cao 1m64-1m73 <br>\r\n\r\nSize XL: Nặng 73-80kg ; Cao 1m74-1m82 <br>', 0, 0, 'polo_bg.jpg', 1, 11),
(131, ' Áo thun polo The Bad God Gentry ', 230000, 'Áo thun polo The Bad God Gentry <br>\r\n\r\nChât liệu: Thun CVC cao cấp, bề mặt vải mịn, không xù, không bai gião khi sử dụng <br>\r\n\r\n- Đường may tỉ mỉ, chắc chắn <br>\r\n\r\n- Công dụng: đi học, đi chơi hoặc khi vận động thể thao <br>\r\n\r\n- Thiết kế hiện đại, trẻ trung, năng động. <br>\r\n\r\n- Đủ size: M - L - XL <br>\r\n\r\n* Bảng size mẫu The Bad God: <br>\r\n\r\nSize M: Nặng 50-60kg ; Cao 1m50-1m63 <br>\r\n\r\nSize L: Nặng 63-70kg ; Cao 1m64-1m73 <br>\r\n\r\nSize XL: Nặng 70-80kg ; Cao 1m74-1m82 <br>', 0, 0, 'polo_bg_gt.jpg', 1, 11),
(132, '  Áo Polo Unisex Teelab Kitten 2023  ', 88000, 'Chất liệu: TC\r\n\r\n\r\n\r\n- Form: Cơ bản  <br>\r\n\r\n\r\n\r\n- Thiết kế: Hình Typhography In cán lụa cao cấp <br>\r\n\r\n\r\n\r\n- Bảo quản: Giặt với nước lạnh <br>\r\n\r\n\r\n\r\n Cách chọn size: Teelab có bảng size mẫu. Nếu chưa biết lựa size bạn có thể inbox để được SHOP tư vấn. Lưu ý :   <br>Áo Teelab là form rộng mặc thoải mái rồi không cần nhích size trừ trường hợp thích oversize size hẳn <br>', 0, 0, 'polo_teelab.jpg', 1, 11),
(133, ' Chân Váy Jean Nữ Chữ A KABICO  ', 105000, '- Tên sản phẩm: Chân Váy Jean Nữ Chữ A KABICO Chân Váy Jean Bò Kaki Ngắn Cạp Cao Phong Cách Đơn Giản Kèm Quần Trong V7 <br>\r\n\r\n-  Chất liệu:  kaki/jean dày dặn co giãn nhẹ thoải mái <br>\r\n\r\n-  3 màu sắc: Xanh jean nhạt, Đen, Trắng  <br>\r\n\r\n- Thông số sản phầm: <br>\r\n\r\n\r\n+ Size M: nặng 46 - 50 kg (cao 1,50 - 1,65 mét) <br>\r\n\r\n+ Size L: nặng 51 - 55 kg ( cao 1,50 - 1,65 mét) <br>\r\n\r\n+ Size XL: nặng 56- 60 kg (cao 1,50 - 1,65 mét) <br>\r\n\r\n- Xuất xứ: Việt Nam <br>', 3, 1, 'chanvay_jean.jpg', 2, 12),
(134, ' Chân váy cony xẻ đùi có khoá kéo ', 115000, 'Quần giả váy xẻ tà đai chữ V cut out mẫu mới đang hot taobao rần rần luôn ấy chị em ơi. <br>\r\n- Chất liệu: vải 2 biên siêu đẹp, xịn xò, không co giãn. 2 Lớp Cùng Chất Vải, chứ không phải váy kèm vải lót mỏng .  <br>\r\n\r\n⛔️⛔️ SAU KHI NHẬN HÀNG QUÝ KHÁCH Ủi THẲNG SẢN PHẨM ĐỂ XOÁ NẾP GẤP VẬN CHUYỂN NHA <br>\r\n- Màu: đen <br>', 0, 0, 'chanvay_cony.jpg', 2, 12),
(135, '  Sét Chân Váy xòe dáng dài phối áo hai dây  ', 142000, 'Sét Chân Váy xòe dáng dài phối áo hai dây + Áo khoác tay dài <br>\r\n- Giúp các chị e phụ nữ tự tin tỏa sáng <br>\r\n- Màu: nâu <br>', 0, 0, 'chanvay_xoe.jpg', 2, 12),
(136, ' Chân Váy Ngắn Dáng Chữ A Chất Kaki ', 125000, '• Form dáng chuẩn, rộng rãi thoải mái, phủ 2 lớp ko mỏng <br>\r\n\r\n• Thiết kế may chi tiết kỉ đẹp ko chỉ thừa <br>\r\n\r\n• Kiểu dáng: bassic nhẹ nhàng. Đa phong cách, gọn nhẹ, năng động <br>\r\n\r\n• Mùa sử dụng: xuân, hạ, thu, đông <br>', 0, 0, 'chanvay_pink.jpg', 2, 12),
(137, ' CHÂN VÁY TRẮNG XẾP LY AA SKIRT ', 250000, 'CHÂN VÁY TRẮNG XẾP LY AA SKIRT <br>\r\n\r\nChiếc Mini Skirt trắng kem hợp với mọi outfits <br>\r\n• Chất liệu : Vải Kaki dày và mềm  <br>\r\nVáy may có quần trong , phồng nhiều để hack hông , váy được mặc dưới rốn và ngắn hợp nhưng bạn thích sexy ❤️  <br>', 0, 0, 'chanvay_trang1.jpg', 2, 12),
(138, 'Áo khoác Thom vạch tay kim tuyến unisex ', 170000, 'Áo khoác Thom vạch tay kim tuyến unisex nam nữ chất dày dặn, áo khoác dáng sơ mi kim tuyến Thome nam nữ hot trend 2023', 36, 0, 'ao_thom.jpg', 1, 14),
(139, ' Áo Khoác Cadigan len Họa Tiết Medusa ', 360000, '✪ Chất Liệu Vải : Len cotton xuất Hàn cao cấp 100%, co giãn 4 chiều, vải mềm, mịn, thoáng mát, không xù lông. <br>\r\n    ✪ Kĩ thuật may: Đường may chuẩn chỉnh, tỉ mỉ, chắc chắn <br>\r\n    ✪ Kiểu Dáng :Form Rộng Thoải Mái <br>\r\n    ✪ Full size nam: M, L, XL <br>', 2, 0, 'khoac_cadian.jpg', 1, 14),
(140, ' Áo khoác bomber hình gấu ', 270000, '- Chất liệu: gấm thô, lót gió (2 lớp) <br>\r\n- Có phối túi ở trong <br>\r\n- Chất ko quá dày, phù hợp với mọi thời tiết ( có thể chống nắng, chống gió đều ok ) <br>', 4, 0, 'khoac_gau.jpg', 1, 14),
(141, ' Áo Khoác,Áo Gió TEELAB  Unisex ', 156000, 'Áo Hoodie Nỉ BASIC với Chất liệu Nỉ Ngoại tốt; mang phong cách thời trang thời thượng các bạn trẻ; đặc biệt không những giúp bạn giữ ấm trong mùa lạnh mà còn có thể chống nắng, chống gió, chống bụi, chống rét, chống tia UV cực tốt, rất tiện lợi nhé!!! (Được sử dụng nhiều trong dịp Lễ hội, Đi chơi, Da ngoại, Dạo phố, Du lịch...)', 4, 0, 'khoac_teelab.jpg', 1, 14),
(142, '  Áo Khoác Bomber Teddy Nam Phối Viền Da ', 350000, '\r\n* Thông Tin Sản Phẩm: Áo Khoác Bomber Nam Phối Viền Da Chất Liệu Dạ Thời Trang Nam <br>\r\n- Chất liệu: Dạ <br>\r\n- Đặc điểm: không xù lông, không mất form <br>\r\n- Nơi sản xuất: Trung Quốc <br>\r\n- Hàng nhập tại xưởng, luôn đủ size, số lượng lớn. <br>\r\n- Chất lượng áo luôn được đảm bảo <br>', 1, 0, 'khoac_bomber.jpg', 1, 14),
(143, ' Áo khoác bóng chày- Áo bomber Kaki 2 lớp thêu chữ R  ', 149000, '- Áo khoác bóng chày- Áo bomber Kaki 2 lớp thêu chữ R kiểu dáng Hàn quốc form rộng trẻ trung năng động MS45 <br>\r\n- Sản phẩm Áo Bomber bóng chày form rộng giống mô tả 100%', 1, 0, '3500001.jpg', 2, 14),
(144, ' Áo khoác gió thể thao 2 viền sọc ', 165000, 'Áo khoác gió thể thao 2 viên sọc cá tính năng động chất dù 2 lớp dày dặn form nam nữ , hàng quảng châu 2023\r\n <br>\r\n- Chất liệu: Dù 2 lớp  <br>\r\n- Màu sắc: 1 màu y hình  <br>\r\n- Chất vải đẹp, dày dặn 100% <br>\r\n- Đường may chuẩn, tỉ mỉ, chắc chắn. <br>\r\n- Thiết kế hiện đại, trẻ trung, dễ phối đồ. <br>\r\n- Có thể mặc ở nhà, đi chơi, đi học và đi làm. <br>\r\n- Xuất xứ: Việt Nam. <br>', 0, 0, 'khoac_gio.jpg', 2, 14),
(145, ' Áo khoác phao dáng dài phong cách hàn quốc ', 264000, '✔Size <br>\r\nM: 50-60kg <br>\r\nL: 60-68kg <br>\r\nXL: 68-78kg <br>\r\n ☑️ Chất liệu:  phao dù lót bông <br>\r\n ☑️ màu: trắng <br>', 153, 16, 'khoac_phao1.jpg', 2, 14),
(146, '  Áo khoác len cardigan tay phối sọc Thome  ', 199000, '- Áo chất len dày dặn- cổ cao chắn gió mạnh thốc vào người  <br>\r\n- Chất liệu vải mềm mại, dễ vệ sinh, thoải mái khi vận động <br>\r\n- Không chỉ thừa, không bai dão, đường may chỉn chu <br>\r\n- Chất liệu: Len  <br>\r\n- Cổ tay và hông bo chun ôm khít giúp ngăn gió lạnh, tạo cảm giác năng động, phối màu trẻ trung', 188, 30, 'khoac_len.jpg', 1, 14),
(147, ' Áo khoác da nữ VIZAKEY ', 499000, 'Áo da nữ cao cấp là một item thời trang tinh tế, nơi sự hoàn hảo của thiết kế gặp gỡ với sự tinh tế của chất liệu. Áo da nâng tầm vẻ đẹp tự tin và quyến rũ của phái đẹp, mang đến một vẻ đẹp cổ điển và đương đại đồng thời. Được chế tác bởi những bàn tay tài hoa, áo da nữ cao cấp không chỉ là một món đồ thời trang, mà là một biểu tượng của phong cách và sự sang trọng.', 142, 10, 'khoac_da.jpg', 2, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id_size` int(11) NOT NULL,
  `ten_size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id_size`, `ten_size`) VALUES
(1, 'M'),
(2, 'L'),
(3, 'XL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuvien_hinh_sanpham`
--

CREATE TABLE `thuvien_hinh_sanpham` (
  `id_thuvien_sp` int(11) NOT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `hinh_sanpham` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thuvien_hinh_sanpham`
--

INSERT INTO `thuvien_hinh_sanpham` (`id_thuvien_sp`, `id_sanpham`, `hinh_sanpham`) VALUES
(151, 99, 'vn-11134207-7r98o-lm8maioanhlrbc.jpg'),
(152, 99, 'vn-11134207-7r98o-lm8maioaqaqne3.jpg'),
(153, 99, 'vn-11134207-7r98o-lm8maioat3vj24.jpg'),
(154, 99, 'vn-11134207-7r98o-lm8maioavx0f7b.jpg'),
(155, 100, 'jean_mota.jpg'),
(156, 100, 'jean_mota1.jpg'),
(157, 100, 'jean_mota2.jpg'),
(158, 101, 'jean1_mota.jpg'),
(159, 101, 'jean1_mota1.jpg'),
(160, 101, 'jean1_mota2.jpg'),
(161, 101, 'jean2.jpg'),
(162, 101, 'jean2_mota.jpg'),
(165, 102, 'jeanmiken1.jpg'),
(166, 102, 'jeanmiken2.jpg'),
(167, 102, 'jeanmiken3.jpg'),
(168, 102, 'jeanmiken4.jpg'),
(169, 102, 'jeanmiken5.jpg'),
(170, 102, 'jeanmiken6.jpg'),
(171, 102, 'jeanmiken7.jpg'),
(172, 103, 'jean_rachgoi1.jpg'),
(173, 103, 'jean_rachgoi2.jpg'),
(174, 103, 'jean_rachgoi3.jpg'),
(175, 103, 'jean_rachgoi4.jpg'),
(176, 104, 'jean2.jpg'),
(177, 104, 'jean3.jpg'),
(178, 104, 'jean4.jpg'),
(179, 104, 'jean5.jpg'),
(180, 104, 'jean6.jpg'),
(181, 104, 'jean7.jpg'),
(182, 105, 'jeannu_rachgoi.jpg'),
(183, 105, 'jeannu_rachgoi3.jpg'),
(184, 105, 'jeannu_rachgoi4.jpg'),
(185, 106, 'jean_gonpho1.jpg'),
(186, 106, 'jean_gonpho2.jpg'),
(187, 106, 'jean_gonpho3.jpg'),
(188, 106, 'jean_gonpho4.jpg'),
(189, 107, 'jeannu_short2.jpg'),
(190, 107, 'jeannu_short3.jpg'),
(191, 107, 'jeannu_short4.jpg'),
(192, 108, 'tommy_den.jpg'),
(193, 108, 'tommy_trang.jpg'),
(194, 108, 'tommy_trang1.jpg'),
(195, 108, 'tommy_trang2.jpg'),
(196, 109, 'thuncc1.jpg'),
(197, 109, 'thuncc2.jpg'),
(198, 109, 'thuncc3.jpg'),
(199, 109, 'thuncc4.jpg'),
(200, 110, 'thundb1.jpg'),
(201, 110, 'thundb2.jpg'),
(202, 110, 'thundb3.jpg'),
(203, 111, 'thunlon.jpg'),
(204, 111, 'thunlon1.jpg'),
(205, 111, 'thunlon2.jpg'),
(206, 111, 'thunlon3.jpg'),
(207, 112, 'thun_kem1.jpg'),
(208, 112, 'thun_kem2.jpg'),
(209, 112, 'thun_kem3.jpg'),
(210, 112, 'thun_kem4.jpg'),
(211, 113, 'lotso1.jpg'),
(212, 113, 'lotso2.jpg'),
(213, 114, 'bbtee2.jpg'),
(214, 114, 'bbtee3.jpg'),
(215, 114, 'bbtee4.jpg'),
(216, 114, 'bbtee5.jpg'),
(217, 115, 'crotop1.jpg'),
(218, 115, 'crotop2.jpg'),
(219, 115, 'crotop3.jpg'),
(220, 115, 'crotop4.jpg'),
(221, 116, 'thun_hong.jpg'),
(222, 116, 'thun_hong1.jpg'),
(223, 117, 'thun_lo.jpg'),
(224, 117, 'thun_lo2.jpg'),
(225, 117, 'thun_lo3.jpg'),
(226, 118, 'ao_bu_ngon1.jpg'),
(227, 118, 'ao_bu_ngon2.jpg'),
(228, 118, 'ao_bu_ngon3.jpg'),
(229, 118, 'ao_bu_ngon4.jpg'),
(230, 119, 'lotkhe1.jpg'),
(231, 119, 'lotkhe2.jpg'),
(232, 119, 'lotkhe3.jpg'),
(233, 119, 'lotkhe4.jpg'),
(234, 120, 'bkn.jpg'),
(235, 120, 'bkn1.jpg'),
(236, 120, 'bkn2.jpg'),
(237, 121, 'lot_bo1.jpg'),
(238, 121, 'lot_bo2.jpg'),
(239, 122, 'do_lot1.jpg'),
(240, 122, 'dolot2.jpg'),
(241, 122, 'dolot3.jpg'),
(242, 122, 'dolot4.jpg'),
(243, 122, 'dolot5.jpg'),
(244, 123, 'sip1.jpg'),
(245, 123, 'sip2.jpg'),
(246, 124, 'sipden.jpg'),
(247, 124, 'sipden2.jpg'),
(248, 125, 'sip_hoathinh.jpg'),
(249, 125, 'sip_hoathinh1.jpg'),
(250, 125, 'sip_hoathinh2.jpg'),
(251, 125, 'sip_hoathinh3.jpg'),
(252, 125, 'sip_hoathinh4.jpg'),
(253, 125, 'sip_hoathinh5.jpg'),
(254, 126, 'siptrang.jpg'),
(255, 126, 'siptrang1.jpg'),
(256, 127, 'siptamgiac.jpg'),
(257, 127, 'siptamgiac1.jpg'),
(258, 128, 'polo1.jpg'),
(259, 128, 'polo2.jpg'),
(260, 128, 'polo3.jpg'),
(261, 128, 'polo4.jpg'),
(262, 129, 'polo_gucci1.jpg'),
(263, 129, 'polo_gucci2.jpg'),
(264, 129, 'polo_gucci3.jpg'),
(265, 129, 'polo_gucci4.jpg'),
(266, 129, 'polo_gucci5.jpg'),
(267, 130, 'polo_bg1.jpg'),
(268, 130, 'polo_bg2.jpg'),
(269, 130, 'polobg3.jpg'),
(270, 131, 'polo_bg_gt.jpg'),
(271, 131, 'polo_bg_gt1.jpg'),
(272, 131, 'polo_bg_gt2.jpg'),
(273, 131, 'polo_bg_gt3.jpg'),
(274, 132, 'polo_teelab2.jpg'),
(275, 132, 'polo_teelab3.jpg'),
(276, 132, 'polo_teelab4.jpg'),
(277, 133, 'chanvay_jean1.jpg'),
(278, 133, 'chanvay_jean2.jpg'),
(279, 133, 'chanvay_jean3.jpg'),
(280, 134, 'chanvay_cony1.jpg'),
(281, 134, 'chanvay_cony2.jpg'),
(282, 134, 'chanvay_cony3.jpg'),
(283, 135, 'chanvay_xoe.jpg'),
(284, 135, 'chanvay_xoe1.jpg'),
(285, 135, 'chanvay_xoe3.jpg'),
(286, 136, 'chanvay_pink.jpg'),
(287, 136, 'chanvay_pink1.jpg'),
(288, 137, 'chanvay_trang1.jpg'),
(289, 138, 'ao_thom.jpg'),
(290, 138, 'ao_thom1.jpg'),
(291, 138, 'ao_thom2.jpg'),
(292, 139, 'khoac_cadian.jpg'),
(293, 139, 'khoac_cadian1.jpg'),
(294, 139, 'khoac_cadian2.jpg'),
(295, 139, 'khoac_cadian3.jpg'),
(296, 139, 'khoac_cadian4.jpg'),
(297, 139, 'khoac_cadian5.jpg'),
(298, 140, 'khoac_gau.jpg'),
(299, 140, 'khoac_gau1.jpg'),
(300, 140, 'khoac_gau2.jpg'),
(301, 141, 'khoac_teelab.jpg'),
(302, 141, 'khoac_teelab1.jpg'),
(303, 141, 'khoac_teelab2.jpg'),
(304, 142, 'khoac_bomber.jpg'),
(305, 142, 'khoac_bomber1.jpg'),
(306, 142, 'khoac_bomber2.jpg'),
(307, 143, '3500001.jpg'),
(308, 143, 'khoac.jpg'),
(309, 143, 'khoac1.jpg'),
(310, 143, 'khoac2.jpg'),
(311, 144, 'khoac_gio1.jpg'),
(312, 144, 'khoac_gio2.jpg'),
(313, 144, 'khoac_gio3.jpg'),
(314, 144, 'khoac_gio4.jpg'),
(315, 144, 'khoac_gio5.jpg'),
(316, 145, 'khoac_phao.jpg'),
(317, 145, 'khoac_phao1.jpg'),
(318, 146, 'khoac_len1.jpg'),
(319, 146, 'khoac_len2.jpg'),
(320, 146, 'khoac_len3.jpg'),
(321, 146, 'khoac_len4.jpg'),
(322, 147, 'khoac_da.jpg'),
(323, 147, 'khoac_da1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `id_vaitro` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `ten_dang_nhap`, `pass`, `hoten`, `email`, `sdt`, `diachi`, `id_vaitro`) VALUES
(1, 'admin', 'admin', 'Tạ Đồng Cảnh backend', 'tadongcanh@gmail.com', '03232032', 'hanoi', 1),
(8, 'canh', '1234', 'Tạ Đồng Cảnh', 'tadongcanh@gmail.com', '03232032', 'hanoi', 2),
(9, 'canh11', '12345', 'Tạ Đồng Cảnh', 'tadongcanh@gmail.com', '03232032', 'hanoi', 2),
(10, 'canhtd', '1234567', 'Tạ Đồng Cảnh', 'tadongcanh@gmail.com', '03232032', 'hanoi', 2),
(11, 'canhhh', '12345', 'Tạ Đồng Cảnh', 'tadongcanh2k4@gmail.com', '09310930', 'FPT POLY Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', 2),
(12, 'canh2123', '123456', 'Tạ Đồng Cảnh', 'tadongcanh@gmail.com', '0323203232', 'FPT POLY Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vai_tro`
--

CREATE TABLE `vai_tro` (
  `id_vaitro` int(2) NOT NULL,
  `vaitro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vai_tro`
--

INSERT INTO `vai_tro` (`id_vaitro`, `vaitro`) VALUES
(1, 'Admin'),
(2, 'Thành viên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `banner_con`
--
ALTER TABLE `banner_con`
  ADD PRIMARY KEY (`id_banner_con`);

--
-- Chỉ mục cho bảng `bienthe_sp`
--
ALTER TABLE `bienthe_sp`
  ADD PRIMARY KEY (`id_bienthe_sp`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Chỉ mục cho bảng `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  ADD PRIMARY KEY (`id_ctdh`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Chỉ mục cho bảng `gioitinh_sanpham`
--
ALTER TABLE `gioitinh_sanpham`
  ADD PRIMARY KEY (`id_gioitinh_sp`);

--
-- Chỉ mục cho bảng `hethong`
--
ALTER TABLE `hethong`
  ADD PRIMARY KEY (`id_hethong`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id_km`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Chỉ mục cho bảng `mau_sp`
--
ALTER TABLE `mau_sp`
  ADD PRIMARY KEY (`id_mau`);

--
-- Chỉ mục cho bảng `nhom_sanpham`
--
ALTER TABLE `nhom_sanpham`
  ADD PRIMARY KEY (`id_nhom_sp`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Chỉ mục cho bảng `thuvien_hinh_sanpham`
--
ALTER TABLE `thuvien_hinh_sanpham`
  ADD PRIMARY KEY (`id_thuvien_sp`),
  ADD KEY `lk_anhmota_sp` (`id_sanpham`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `lk_user_vaitro` (`id_vaitro`);

--
-- Chỉ mục cho bảng `vai_tro`
--
ALTER TABLE `vai_tro`
  ADD PRIMARY KEY (`id_vaitro`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `banner_con`
--
ALTER TABLE `banner_con`
  MODIFY `id_banner_con` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `bienthe_sp`
--
ALTER TABLE `bienthe_sp`
  MODIFY `id_bienthe_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  MODIFY `id_ctdh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT cho bảng `gioitinh_sanpham`
--
ALTER TABLE `gioitinh_sanpham`
  MODIFY `id_gioitinh_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hethong`
--
ALTER TABLE `hethong`
  MODIFY `id_hethong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id_km` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `mau_sp`
--
ALTER TABLE `mau_sp`
  MODIFY `id_mau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `nhom_sanpham`
--
ALTER TABLE `nhom_sanpham`
  MODIFY `id_nhom_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `thuvien_hinh_sanpham`
--
ALTER TABLE `thuvien_hinh_sanpham`
  MODIFY `id_thuvien_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `vai_tro`
--
ALTER TABLE `vai_tro`
  MODIFY `id_vaitro` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `lk_user_vaitro` FOREIGN KEY (`id_vaitro`) REFERENCES `vai_tro` (`id_vaitro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
