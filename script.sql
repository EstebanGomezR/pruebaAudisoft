CREATE DATABASE sitios_web;
USE sitios_web;
CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre_categoria` varchar(100) NOT NULL
);
CREATE TABLE `sitios_web` (
  `id_web` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre_web` varchar(200) NOT NULL,
  `direccion_web` varchar(200) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)

);
INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Libros'),
(2, 'comida');



