SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `kidde` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kidde`;

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `administrador` (`id`, `nome`, `cargo`, `matricula`, `senha`) VALUES
(1, 'Joao', 'Adm', '710', '12345678');

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `cod` varchar(50) DEFAULT NULL,
  `posicao` varchar(50) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `status_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

INSERT INTO `item` (`id`, `nome`, `cod`, `posicao`, `quantidade`, `status_cadastro`) VALUES
(16, 'Arroz', '555', '22', 22, '2023-11-06 10:50:14'),
(18, 'mangueira', '5878', '75454', 50, '2023-11-06 12:14:33'),
(17, 'Extintor P1', '55872', '7D55', 50, '2023-11-06 12:04:52'),
(19, 'rwerw', '134', '1', 1, '2023-11-15 21:05:54');

DROP TABLE IF EXISTS `linha`;
CREATE TABLE IF NOT EXISTS `linha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `responsavel` varchar(50) NOT NULL,
  `setor` varchar(50) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `linha` (`id`, `responsavel`, `setor`, `nome`) VALUES
(1, 'Andre', 'Checkout', 'Linha 7'),
(2, 'Maria', 'Checkout', 'Linha 4');

DROP TABLE IF EXISTS `reabastecimento`;
CREATE TABLE IF NOT EXISTS `reabastecimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `responsavel` varchar(50) DEFAULT NULL,
  `id_linha` int(11) DEFAULT NULL,
  `nome_item` varchar(50) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `prioridade` varchar(50) DEFAULT NULL,
  `observacoes` varchar(200) DEFAULT NULL,
  `status_pedido` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_linha` (`id_linha`),
  KEY `id_item` (`nome_item`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO `reabastecimento` (`id`, `responsavel`, `id_linha`, `nome_item`, `quantidade`, `prioridade`, `observacoes`, `status_pedido`) VALUES
(12, 'Joao', 0, 'EXTINTOR P1', 5, 'ALTA', 'Preciso Urgente', '2023-11-06 12:05:13'),
(11, 'fabio', 2, 'ARROZ', 2, 'BAIXA', '22', '2023-11-06 11:15:31'),
(13, 'Joao', 0, 'MANGUEIRA', 10, 'ALTA', 'ugyguyffjhgjh', '2023-11-06 12:15:05');

DROP TABLE IF EXISTS `reabastecimento_concluido`;
CREATE TABLE IF NOT EXISTS `reabastecimento_concluido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_concluido` datetime DEFAULT NULL,
  `status_reabastecimento` datetime DEFAULT NULL,
  `id_reabastecimento` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status_reabastecimento` (`status_reabastecimento`),
  KEY `id_reabastecimento` (`id_reabastecimento`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `setor`;
CREATE TABLE IF NOT EXISTS `setor` (
  `id` int(11) NOT NULL,
  `lider` varchar(50) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `matricula` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `setor` varchar(50) NOT NULL,
  `senha` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuario` (`matricula`, `nome`, `email`, `setor`, `senha`) VALUES
('712', 'Fabio', 'teste@teste.com', 'Expedicao', '$2y$10$/mD3dPta3.PJeW4ISrcoMuWjEBQFfNnLQjcGzER.oY9.wgQUs3Oy6');
COMMIT;