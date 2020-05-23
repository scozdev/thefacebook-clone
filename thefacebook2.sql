-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 23 May 2020, 18:36:04
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `thefacebook2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_url` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_foto` varchar(255) NOT NULL,
  `user_status` varchar(55) NOT NULL,
  `user_sex` varchar(55) NOT NULL,
  `user_year` varchar(55) NOT NULL,
  `user_concentration` varchar(55) NOT NULL,
  `user_screenname` varchar(55) NOT NULL,
  `user_looking_for` varchar(55) NOT NULL,
  `user_interested_in` varchar(55) NOT NULL,
  `user_relationship` varchar(55) NOT NULL,
  `user_political_view` varchar(55) NOT NULL,
  `user_interests` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_url`, `user_email`, `user_password`, `user_date`, `user_foto`, `user_status`, `user_sex`, `user_year`, `user_concentration`, `user_screenname`, `user_looking_for`, `user_interested_in`, `user_relationship`, `user_political_view`, `user_interests`) VALUES
(1, 'asd', 'asd', 'a@gmail.com', '4297f44b13955235245b2497399d7a93', '2020-05-21 19:50:07', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'root', 'root', 'selcuk-ozdemir79@hotmail.com', '55deb7fd23a25aa863fb912ff7fc21d8', '2020-05-21 19:51:15', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'b', 'b', 'b@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-05-21 20:00:16', 'yuklenendosyalar/unnamed.jpg', 'Student', 'Male', '2000', 'asd', 'Screenname', 'For', 'Women', 'In a relationship', 'Conservative', 'Interests'),
(4, 'rrr', 'rrr', 'rrr@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-05-22 00:40:29', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'asdd', 'asdd', 'asdd@hotmail.com', '202cb962ac59075b964b07152d234b70', '2020-05-22 00:43:32', 'http://localhost/thefacebook/public/images/no-image.gif', '', '', '', '', '', '', '', '', '', ''),
(6, 'g', 'g', 'g@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-05-22 01:25:04', 'http://localhost/thefacebook/public/images/no-image.gif', 'Student', '', '', '', 'ad', 'asf', 'Women', 'Single', 'Liberal', 'sfd'),
(7, 'f', 'f', 'f@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-05-22 12:26:03', 'http://localhost/thefacebook/public/images/no-image.gif', '', '', '', '', '', '', '', '', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
