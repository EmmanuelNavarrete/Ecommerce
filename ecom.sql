-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2023 a las 21:11:26
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecom_admin`
--

CREATE TABLE `ecom_admin` (
  `id` int(11) NOT NULL,
  `adminfastname` varchar(20) NOT NULL,
  `adminlastname` varchar(20) NOT NULL,
  `adminemail` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `adminpass` varchar(250) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ecom_admin`
--

INSERT INTO `ecom_admin` (`id`, `adminfastname`, `adminlastname`, `adminemail`, `level`, `adminpass`, `address`) VALUES
(3, 'Pedro', 'Rebollo', 'Pedro@gmail.com', 'uploads/aa66d57ad3.jpg', 'fcea920f7412b5da7be0cf42b8c93759', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecom_admin_message`
--

CREATE TABLE `ecom_admin_message` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ecom_admin_message`
--

INSERT INTO `ecom_admin_message` (`id`, `email`, `subject`, `message`, `date`) VALUES
(1, 'Oscar@gmail.com', 'Test Sunject', 'Message', '2023-05-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecom_brand`
--

CREATE TABLE `ecom_brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ecom_brand`
--

INSERT INTO `ecom_brand` (`id`, `brand`) VALUES
(7, 'Tommy Hilfigger'),
(8, 'Hermés'),
(9, 'Channel'),
(10, 'Versace'),
(11, 'Gucci'),
(12, 'Prada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecom_cart`
--

CREATE TABLE `ecom_cart` (
  `cartid` int(11) NOT NULL,
  `sid` varchar(250) NOT NULL,
  `proid` int(11) NOT NULL,
  `proname` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecom_category`
--

CREATE TABLE `ecom_category` (
  `id` int(11) NOT NULL,
  `catname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ecom_category`
--

INSERT INTO `ecom_category` (`id`, `catname`) VALUES
(9, 'Pantalones'),
(10, 'Vestidos'),
(11, 'Sudaderas'),
(12, 'Sueteres'),
(13, 'Chamarras'),
(14, 'Blusas'),
(15, 'Camisas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecom_customer`
--

CREATE TABLE `ecom_customer` (
  `userid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `zip` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ecom_customer`
--

INSERT INTO `ecom_customer` (`userid`, `name`, `email`, `image`, `pass`, `date`, `zip`, `country`, `city`, `phone`) VALUES
(4, 'Pedro Nava Rebollo', 'pedro@gmail.com', 'uploads/361e72286d.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2023-06-11', '61254', 'Michoacán', 'Maravatio, Michoacán, Mexico', '447-09-09'),
(5, 'Oscar', 'oscar@gmail.com', 'NULL', '827ccb0eea8a706c4c34a16891f84e7b', '2023-06-11', '', '', '', '4471239898');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecom_customer_message`
--

CREATE TABLE `ecom_customer_message` (
  `messageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `messagedate` date DEFAULT NULL,
  `useremail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ecom_customer_message`
--

INSERT INTO `ecom_customer_message` (`messageid`, `userid`, `subject`, `message`, `messagedate`, `useremail`) VALUES
(2, 2, 'Another Message Subject', 'Another Mesage Body', '2023-09-21', 'Oscar@gmail.com'),
(3, 4, 'Molestia', 'Mi ropa no era de la talla adecuada', '2023-06-11', 'pedro@gmail.com'),
(4, 4, 'Agradecimiento', 'Me gustó la ropa', '2023-06-11', 'pedro@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecom_customer_order`
--

CREATE TABLE `ecom_customer_order` (
  `id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ecom_customer_order`
--

INSERT INTO `ecom_customer_order` (`id`, `customerid`, `productid`, `price`, `quantity`, `productname`, `date`, `status`) VALUES
(11, 4, 18, 675, 4, 'Pantalones Vaqueros', '2023-06-11 11:54:25', 1),
(12, 4, 20, 1250, 1, 'UltraSoft Hilfiger', '2023-06-11 11:54:25', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecom_product`
--

CREATE TABLE `ecom_product` (
  `proid` int(11) NOT NULL,
  `proname` varchar(20) NOT NULL,
  `catid` int(11) NOT NULL,
  `brandid` int(11) NOT NULL,
  `body` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(200) NOT NULL,
  `type` varchar(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ecom_product`
--

INSERT INTO `ecom_product` (`proid`, `proname`, `catid`, `brandid`, `body`, `price`, `image`, `type`, `date`) VALUES
(18, 'Pantalones Vaqueros', 9, 9, 'Pantalones vaqueros para hombre talla 17 - 38', 675, 'uploads/f08e99c64e.jpg', 'Black', '2023-06-11'),
(19, 'Sueter invierno', 12, 11, 'Sueter gucci de lana', 3200, 'uploads/fa67efdef6.jpg', 'Cafe', '2023-06-11'),
(20, 'UltraSoft Hilfiger', 13, 7, 'Chamarra invierno Tommy Hilfiger', 1250, 'uploads/a3d87b75fb.jpg', 'Rojo', '2023-06-11'),
(21, 'Vestido Rojo', 10, 10, 'Vestido para mujer primavera.', 600, 'uploads/d010c8003b.jpg', 'Rojo', '2023-06-11'),
(22, 'Hermes Negra', 15, 8, 'Camisa negra Hermes para hombre talla mediana', 999, 'uploads/1258ed7a40.jpg', 'Negro', '2023-06-11'),
(23, 'Blusa negra', 14, 11, 'Blusa para mujer gucci', 3200, 'uploads/58100ac3c1.jpg', 'Negro', '2023-06-11'),
(24, 'Camisa leopardo', 15, 11, 'Camisa de manga larga', 7000, 'uploads/6bc088b91d.jpeg', 'Dorada', '2023-06-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecom_product_review`
--

CREATE TABLE `ecom_product_review` (
  `revid` int(11) NOT NULL,
  `cmrid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `review` text NOT NULL,
  `rate` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecom_social_media`
--

CREATE TABLE `ecom_social_media` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `link` text NOT NULL,
  `icon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ecom_social_media`
--

INSERT INTO `ecom_social_media` (`id`, `name`, `link`, `icon`) VALUES
(1, 'Facebook', '#', 'fa-facebook'),
(2, 'Twitter', '#', 'fa-twitter');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ecom_admin`
--
ALTER TABLE `ecom_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ecom_admin_message`
--
ALTER TABLE `ecom_admin_message`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ecom_brand`
--
ALTER TABLE `ecom_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ecom_cart`
--
ALTER TABLE `ecom_cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indices de la tabla `ecom_category`
--
ALTER TABLE `ecom_category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ecom_customer`
--
ALTER TABLE `ecom_customer`
  ADD PRIMARY KEY (`userid`);

--
-- Indices de la tabla `ecom_customer_message`
--
ALTER TABLE `ecom_customer_message`
  ADD PRIMARY KEY (`messageid`);

--
-- Indices de la tabla `ecom_customer_order`
--
ALTER TABLE `ecom_customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ecom_product`
--
ALTER TABLE `ecom_product`
  ADD PRIMARY KEY (`proid`);

--
-- Indices de la tabla `ecom_product_review`
--
ALTER TABLE `ecom_product_review`
  ADD PRIMARY KEY (`revid`);

--
-- Indices de la tabla `ecom_social_media`
--
ALTER TABLE `ecom_social_media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ecom_admin`
--
ALTER TABLE `ecom_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ecom_admin_message`
--
ALTER TABLE `ecom_admin_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ecom_brand`
--
ALTER TABLE `ecom_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ecom_cart`
--
ALTER TABLE `ecom_cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ecom_category`
--
ALTER TABLE `ecom_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `ecom_customer`
--
ALTER TABLE `ecom_customer`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ecom_customer_message`
--
ALTER TABLE `ecom_customer_message`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ecom_customer_order`
--
ALTER TABLE `ecom_customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ecom_product`
--
ALTER TABLE `ecom_product`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `ecom_product_review`
--
ALTER TABLE `ecom_product_review`
  MODIFY `revid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ecom_social_media`
--
ALTER TABLE `ecom_social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
