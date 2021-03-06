-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2021 às 04:51
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `themax`
--
DROP DATABASE IF EXISTS themax;
CREATE DATABASE themax;
-- --------------------------------------------------------

--
-- Estrutura da tabela `celular`
--

CREATE TABLE `celular` (
  `ID_CEL` int(11) NOT NULL,
  `NUMERO_SERIE_CEL` varchar(11) NOT NULL,
  `MARCA_CEL` varchar(20) NOT NULL,
  `NOME_CEL` varchar(25) NOT NULL,
  `PROCESSADOR_CEL` varchar(75) NOT NULL,
  `MEMORIA_CEL` varchar(6) NOT NULL,
  `ARMAZENAMENTO_CEL` varchar(10) NOT NULL,
  `CAMERA_FRONTAL_CEL` varchar(15) NOT NULL,
  `CAMERA_TRASEIRA_CEL` varchar(30) NOT NULL,
  `SO_CEL` varchar(45) NOT NULL,
  `BATERIA_CEL` varchar(11) NOT NULL,
  `PRECO_CEL` decimal(10,2) NOT NULL,
  `FILA_COMPRA_CEL` char(1) NOT NULL DEFAULT 'N',
  `FOTO_CEL` varchar(100) NOT NULL,
  `DATA_ALTERACAO_CEL` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `celular`
--

INSERT INTO `celular` (`ID_CEL`, `NUMERO_SERIE_CEL`, `MARCA_CEL`, `NOME_CEL`, `PROCESSADOR_CEL`, `MEMORIA_CEL`, `ARMAZENAMENTO_CEL`, `CAMERA_FRONTAL_CEL`, `CAMERA_TRASEIRA_CEL`, `SO_CEL`, `BATERIA_CEL`, `PRECO_CEL`, `FILA_COMPRA_CEL`, `FOTO_CEL`, `DATA_ALTERACAO_CEL`) VALUES
(1,'U9YMR25XJQ0','Xiaomi','Redmi 9T','4x 2.0 GHz Kryo 260 Gold + 4x 1.8 GHz Kryo 260 Silver','4 GB','128 GB','8 Mp F 2.05','48 Mp + 8 Mp + 2 Mp + 2 Mp','Android 10 MIUI 12','6000 mAh','1100.00','N','img/xiaomi_redmi9t.jpg','2021-06-29 02:40:18'),
(2,'GMTQGPC948N','Xiaomi','Poco M3','4x 2.0 GHz Kryo 260 Gold + 4x 1.8 GHz Kryo 260 Silver','4 GB','128 GB','8 Mp F 2.05','48 Mp + 2 Mp + 2 Mp','Android 10 MIUI 12','6000 mAh','1091.00','V','img/xiaomi_pocoM3.jpg','2021-06-29 02:40:30'),
(3,'5XJP8AXQ6HP','LG','K22','1.3 GHz Quad Core','2 GB','32 GB','5 Mp','13 Mp + 2 Mp','Android 10','3000 mAh','579.00','V','img/LG_K22.jpeg','2021-06-29 00:27:51'),
(4,'TT8MPUW7K3K','Asus','Zenfone Shot Plus','1.8 GHz 8 Core','4 GB','64 GB','8 Mp F 2','12 Mp + 5 Mp + 8 Mp','Android 9 Pie','4000 mAh','929.00','N','img/Asus_Zenfone_Shot_Plus.jpg','2021-06-29 02:40:43'),
(5,'5KQLMQFL5A8','Asus','ZenFone Max Plus (M2)','1.8 GHz 8 Core','3 GB','32 GB','8 Mp','12 Mp + 5 Mp','Android 8.1 Oreo','4000 mAh','836.00','V','img/Asus_ZenFone_Max_Plus(M2).jpg','2021-06-29 00:27:51'),
(6,'EP6ECMAK3U5','Samsung','Galaxy A02s','1.8 GHz 8 Core','3 GB','32 GB','5 Mp F 2.2','13 Mp + 2 Mp + 2 Mp','Android 10 Samsung One UI 2.5','5000 mAh','746.00','N','img/samsumg_galaxy_a02s.jpeg','2021-06-29 00:27:51'),
(7,'18KMTIYNSSY','Xiaomi','Redmi Note 9 4G','4x 2.0 GHz Kryo 260 Gold + 4x 1.8 GHz Kryo 260 Silver','4 GB','128 GB','8 Mp F 2','48 Mp + 8 Mp + 2 Mp','Android 10 MIUI 12','6000 mAh','1199.00','N','img/redmi_9_4g.jpeg','2021-06-29 00:27:51'),
(8,'94AP9MKAKPQ','Asus','ZenFone Max Shot','1.8 GHz 8 Core','3 GB','32 GB','8 Mp F 2','12 Mp + 5 Mp + 8 Mp','Android 9 Pie','4000 mAh','929.00','N','img/Asus_Zenfone_Max_Shot.jpeg','2021-06-29 00:27:51'),
(9,'GTTTU4NFZED','Samsung','Galaxy A7 2017','1.9 GHz 8 Core','3 GB','32 GB','16 Mp','16 Mp','Android 8.0 Samsung Experience 9.0 Oreo','3600 mAh','899.00','N','img/Samsung_Galaxy_A7_2017.jpeg','2021-06-29 00:27:51'),
(10,'ARYIFB2Z02S','Xiaomi','Redmi 9','2x 2.0 GHz Cortex-A75 + 6x 1.8 GHz Cortex-A55','3 GB','32 GB','8 Mp F 2','13 Mp + 8 Mp + 5 Mp + 2 Mp','Android 10 MIUI 12','5020 mAh','843.00','N','img/Xiaomi_Redmi_9.jpg','2021-06-29 00:27:51'),
(11,'1ISDSTN9AUS','Xiaomi','Redmi Note 8','4x 2.0 GHz Kyro 260 + 4x 1.8 GHz Kyro 260','4 GB','64 GB','13 Mp F 2','48 Mp + 8 Mp + 2 Mp + 2 Mp','Android 10 MIUI 12','4000 mAh','1213.00','N','img/Xiaomi_Redmi_Note_8.jpg','2021-06-29 00:27:51'),
(12,'TFDOSJEYMEF','Multilaser','G Pro','4x 1.6 Ghz Cortex-A55 + 4x 1.2 GHz Cortex A-55','2 GB','32 GB','5 Mp','13 Mp + 2 Mp','Android 9 Pie','4000 mAh','619.00','N','img/Multilaser_G_Pro.jpeg','2021-06-29 00:27:51'),
(13,'BNLDGA38TTG','Motorola','Moto E7 Plus','4x 1.8 GHz Kryo 240 + 4x 1.6 GHz Kryo 240','4 GB','64 GB','8 Mp F 2.2','48 Mp + 2 Mp','Android 10','5000 mAh','899.00','V','img/Motorola_Moto_E7_Plus.jpeg','2021-06-29 00:27:51'),
(14,'DX0XBZYWHH2','Xiaomi','Redmi Note 8 Pro','2x 2.05 GHz Cortex A76 + 6x 2.0 GHz Cortex A55','6 GB','128 GB','20 Mp F 2','64 Mp + 8 Mp + 2 Mp + 2 Mp','Android 10 MIUI 11','4500 mAh','1419.00','V','img/Xiaomi_Redmi_Note_8_Pro.jpg','2021-06-29 00:27:51'),
(15,'LWKU0985E9J','Apple','iPhone 5S','1.3 GHz Dual Core','1 GB','64 GB','1.2 Mp','8 Mp','iOS 12','1570 mAh','752.00','V','img/Apple_iPhone_5S.jpeg','2021-06-29 00:27:51'),
(16,'QCPR6NBPUED','LG','K22 Plus','1.3 GHz Quad Core','3 GB','64 GB','5 Mp','13 Mp + 2 Mp','Android 10','3000 mAh','699.00','V','img/LG_K22_Plus.jpeg','2021-06-29 00:27:51'),
(17,'K2E9P1HXTSJ','Samsung','Galaxy A30','2x 1.8 GHz Cortex-A73 + 6x 1.6 GHz Cortex-A53','4 GB','64 GB','16 Mp F 2','16 Mp + 5 Mp','Android 10 Samsung One UI 2.0','4000 mAh','1099.00','N','img/Samsung_Galaxy_A30.jpeg','2021-06-29 00:27:51'),
(18,'4DA4B68BFPE','Motorola','Moto G8 Power','4x 2.0 GHz Kyro 260 + 4x 1.8 GHz Kyro 260','4 GB','64 GB','16 Mp F 2','16 Mp + 2 Mp + 8 Mp + 8 Mp','Android 10','5000 mAh','1272.00','V','img/Motorola_G8_Power.jpeg','2021-06-29 00:27:51'),
(19,'W7AA8PUDT56','LG','K61','4x 2.3 GHz Cortex-A53 + 4x 1.8 GHz Cortex-A53','4 GB','128 GB','16 Mp F 2','48 Mp + 8 Mp + 2 Mp + 5 Mp','Android 10 LG UX 9.0','4000 mAh','1118.00','N','img/LG_K61.jpeg','2021-06-29 00:27:51'),
(20,'Z5LQC9AUJ5Z','Xiaomi','Redmi Note 9','2x Cortex A75 2GHz + 6x Cortex A55 1.8GHz','3 GB','64 GB','13 Mp F 2.25','48 Mp + 8 Mp + 2 Mp + 2 Mp','Android 10 MIUI 11','5020 mAh','1022.00','N','img/Xiaomi_Redmi_Note_9.jpg','2021-06-29 00:27:51'),
(21,'KZ1GY2MD78B','Motorola','Moto G9 Play','4x 2.0 GHz Kryo 260 Gold + 4x 1.8 GHz Kryo 260 Silver','4 GB','64 GB','8 Mp F 2.2','48 Mp + 2 Mp + 2 Mp','Android 10','5000 mAh','1019.00','N','img/Motorola_Moto_G9_Play.jpeg','2021-06-29 00:27:51'),
(22,'79AMTD7P9WK','Asus','ZenFone Max Pro (M2)','4x 2.2 GHz Kyro 260 + 4x 1.84 GHz Kyro 260','4 GB','64 GB','13 Mp F 2','12 Mp + 5 Mp','Android 8.1 Oreo','5000 mAh','1099.00','N','img/Asus_ZenFone_Max_Pro_(M2).jpg','2021-06-29 00:27:51'),
(23,'LCMKC8T8Y4X','Motorola','Moto E7','4x 2.0 GHz Cortex-A53 + 4x 1.5 GHz Cortex-A53','2 GB','32 GB','5 Mp','48 Mp + 2 Mp','Android 10','4000 mAh','748.00','N','img/Motorola_Moto_E7.jpeg','2021-06-29 00:27:51'),
(24,'OBKHNOEMPCL','Samsung','Galaxy Xcover Pro','4x 2.3 GHz Cortex-A73 + 4x 1.7 GHz Cortex-A53','4 GB','64 GB','13 Mp','25 Mp + 8 Mp','Android 10 Samsung One UI 2.0','4020 mAh','1449.00','N','img/Samsung_Galaxy_Xcover_Pro.jpeg','2021-06-29 00:27:51'),
(25,'PP6TMLT8X5B','Xiaomi','Redmi 9A','2 GHz 8 Core','2 GB','32 GB','5 Mp F 2.2','13 Mp','Android 10 MIUI 11','5000 mAh','729.00','N','img/Xiaomi_Redmi_9A.jpg','2021-06-29 00:27:51'),
(26,'9GD80BWUZBX','Xiaomi','Redmi Note 7','4x 2.2 GHz Kyro 260 + 4x 1.8 GHz Kyro 260','3 GB','32 GB','13 Mp F 2','48 Mp + 5 Mp','Android 10 MIUI 12','4000 mAh','1348.00','N','img/Xiaomi_Redmi_Note_7.jpg','2021-06-29 00:27:51'),
(27,'AJAOON5Q0K6','Xiaomi','Redmi 5 Plus','2 GHz 8 Core','3 GB','32 GB','5 Mp','12 Mp','Android 8.1 MIUI 10 Oreo','4000 mAh','1049.00','N','img/Xiaomi_Redmi_5_Plus.jpeg','2021-06-29 00:27:51'),
(28,'W5I8OHUJIUP','Motorola','Moto E7 Power','4x 2.0 GHz Cortex-A53 + 4x 1.5 GHz Cortex-A53','2 GB','32 GB','5 Mp F 2.2','13 Mp + 2 Mp','Android 10','5000 mAh','711.00','V','img/Motorola_Moto_E7_Power.jpg','2021-06-29 00:27:51'),
(29,'MTGNG2DHODR','Motorola','Moto G6 Plus','4x 2.2 GHz Cortex-A53 + 4x 1.8 GHz Cortex A53','4 GB','64 GB','8 Mp F 2.2','12 Mp + 5 Mp','Android 9 Pie','3200 mAh','1164.00','N','img/Motorola_Moto_G6_Plus.jpeg','2021-06-29 00:27:51'),
(30,'PS64NMTZJGT','Xiaomi','Mi 10T','1x 2.84 GHz Cortex A77 + 3x 2.42 GHz Cortex A77 + 4x 1.8 GHz Cortex A53','8 GB','128 GB','20 Mp F 2.2','64 Mp + 13 Mp + 5 Mp','Android 10 MIUI 12','5000 mAh','2810.00','V','img/Xiaomi_Mi_10T.jpg','2021-06-29 00:27:51'),
(31,'RF800H8LYK5','Motorola','Moto E6s','4x 2 GHz Cortex-A53 + 4x 1.5 GHz Cortex-A53','2 GB','32 GB','5 Mp F 2.2','13 Mp + 2 Mp','Android 9 Pie','3000 mAh','698.00','V','img/Motorola_Moto_E6s.jpg','2021-06-29 00:27:51'),
(32,'5ZCX2JB62RO','Xiaomi','Redmi 8A','4x 1.95 GHz Cortex-A53 + 4x 1.45 GHz Cortex-A53','2 GB','32 GB','8 Mp F 2','12 Mp','Android 10 MIUI 11','5000 mAh','828.00','V','img/Xiaomi_Redmi_8A.jpg','2021-06-29 00:27:51'),
(33,'YL2B6QLCA4H','Xiaomi','Poco X3 NFC','2x 2.3 GHz Kryo 470 Gold + 6x 1.8 GHz Kryo 470 Silver','6 GB','128 GB','20 Mp F 2.2','64 Mp + 13 Mp + 2 Mp + 2 Mp','Android 10 MIUI 12','5160 mAh','1499.00','V','img/Xiaomi_Poco_X3_NFC.jpg','2021-06-29 00:27:51'),
(34,'8T8GRK52G0Q','Motorola','Moto G9 Plus','2x 2.2 GHz Kryo 470 Gold + 6x 1.8 GHz Kryo 470 Silver','4 GB','128 GB','16 Mp F 2','64 Mp + 8 Mp + 2 Mp + 2 Mp','Android 10','5000 mAh','1580.00','N','img/Motorola Moto G9 Plus.jpg','2021-06-29 00:27:51'),
(35,'IMJSOFK6T9I','Sony','Xperia XA Ultra','2 GHz 8 Core','3 GB','16 GB','16 Mp','21.5 Mp','Android 6.0.1 Marshmallow','2700 mAh','839.00','V','img/Sony_Xperia_XA_Ultra.jpg','2021-06-29 00:27:51'),
(36,'LBE3MG3GO20','Samsung','Galaxy A02','1.5 GHz Quad Core','3 GB','32 GB','5 Mp F 2','13 Mp + 2 Mp','Android 10 Samsung One UI 2.0','5000 mAh','559.00','N','img/Samsung_Galaxy_A02.jpg','2021-06-29 00:27:51'),
(37,'N9HY4A4TRD7','Asus','ZenFone Max Pro (M1)','Octa-core 1.8 GHz Kryo 260 + 1.6 GHz Kryo 260','3 GB','32 GB','8 Mp F 2.2','13 Mp + 5 Mp','Android 8.0 Oreo','5000 mAh','1149.00','V','img/Asus_ZenFone_Max_Pro(M1).jpg','2021-06-29 00:27:51'),
(38,'1WM76JQ6R37','Samsung','Galaxy A10s','4x 2 GHz Cortex-A53 + 4x 1.5 GHz Cortex-A53','2 GB','32 GB','8 Mp F 2','13 Mp + 2 Mp','Android 10 Samsung One UI 2.0','4000 mAh','700.00','N','img/Samsung_Galaxy_A10s.jpeg','2021-06-29 00:27:51'),
(39,'WWK3PQIIHWH','LG','K41S','4x 2 GHz Cortex-A53 + 4x 1.5 GHz Cortex-A53','3 GB','32 GB','8 Mp F 2','13 Mp + 5 Mp + 2 Mp + 2 Mp','Android 10','4000 mAh','738.00','V','img/LG_K41S.jpg','2021-06-29 00:27:51'),
(40,'PKCPFX7ITZ4','Xiaomi','Redmi 7A','4x 1.95 GHz Cortex-A53 + 4x 1.45 GHz Cortex A53','2 GB','16 GB','5 Mp','13 Mp','Android 9 MIUI 10 Pie','4000 mAh','820.00','V','img/Xiaomi_Redmi_7A.jpg','2021-06-29 00:27:51'),
(41,'7W1GDXY6UKS','Xiaomi','Redmi Note 9T','2x 2.4 GHz Cortex-A76 + 6x 2.0 GHz Cortex-A55','4 GB','128 GB','13 Mp F 2.25','48 Mp + 2 Mp + 2 Mp','Android 10 MIUI 12','5000 mAh','1389.00','V','img/Xiaomi_Redmi_Note_9T.jpg','2021-06-29 00:27:51'),
(42,'5E8MMHT9O9J','Xiaomi','Redmi Note 8T','4x 2.0 GHz Kyro 260 + 4x 1.8 GHz Kyro 260','3 GB','32 GB','13 Mp F 2','48 Mp + 8 Mp + 2 Mp + 2 Mp','Android 9 MIUI 10 Pie','4000 mAh','1449.00','V','img/Xiaomi_Redmi_Note_8T.jpg','2021-06-29 00:27:51'),
(43,'RPPENYZDSWZ','Motorola','Moto G8 Plus','4x 2.0 GHz Kyro 260 + 4x 1.8 GHz Kyro 260','4 GB','64 GB','25 Mp F 2','48 Mp + 16 Mp + 5 Mp','Android 10','4000 mAh','1549.00','N','img/Motorola_Moto_G8_Plus.jpeg','2021-06-29 00:27:51'),
(44,'J237PZS0IO5','Xiaomi','Redmi 9C','2.3 GHz 8 Core','2 GB','32 GB','5 Mp F 2.2','13 Mp + 2 Mp + 2 Mp','Android 10 MIUI 11','5000 mAh','844.00','N','img/Xiaomi_Redmi_9C.jpg','2021-06-29 00:27:51'),
(45,'H1HOLG4LQL1','LG','Q6','1.4 GHz 8 Core','3 GB','32 GB','5 Mp','13 Mp','Android 7.1.1 LG UX 6.0 UI Nougat','3000 mAh','999.00','V','img/LG_Q6.jpg','2021-06-29 00:27:51'),
(46,'6PFUEID08NR','LG','Velvet','4x 2.8 GHz Kryo 385 + 4x 1.7 GHz Kryo 385','6 GB','128 GB','16 Mp F 1.9','48 Mp + 8 Mp + 5 Mp','Android 10 LG UX 9.0','4300 mAh','2448.00','V','img/LG_Velvet.jpg','2021-06-29 00:27:51'),
(47,'1K8P3ZYHT59','Motorola','One Fusion','2x 2.2 GHz Kryo 360 + 6x 1.7 GHz Kryo 360','4 GB','64 GB','8 Mp F 2','48 Mp + 8 Mp + 5 Mp + 2 Mp','Android 10','5000 mAh','1299.00','V','img/Motorola_One_Fusion.jpg','2021-06-29 00:27:51'),
(48,'1KK8EWOPNL5','Xiaomi','Redmi Note 9 Pro','2x 2.3 GHz Kryo 465 Gold + 6x 1.8 GHz Kryo 465 Silver','6 GB','128 GB','16 Mp F 2.48','64 Mp + 8 Mp + 5 Mp + 2 Mp','Android 10 MIUI 11','5020 mAh','1652.00','V','img/Xiaomi_Redmi_Note_9_Pro','2021-06-29 00:27:51'),
(49,'S691AZZNHPY','Samsung','Galaxy A01','4x 1.95 GHz Cortex-A53 + 4x 1.45 GHz Cortex-A53','2 GB','32 GB','5 Mp F 2.2','13 Mp + 2 Mp','Android 10 Samsung One UI 2.0','3000 mAh','593.00','V','img/Samsung_Galaxy_A01.jpg','2021-06-29 00:27:51'),
(50,'F6R4U0NQZF1','Lenovo','Vibe K6','4x 1.4 GHz Cortex-A53 + 4x 1.1 GHz Cortex-A53','2 GB','32 GB','8 Mp','13 Mp','Android 6.0 Marshmallow','3000 mAh','585.00','V','img/Lenovo_Vibe_K6.jpg','2021-06-29 00:27:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `ID_FUN` int(11) NOT NULL,
  `NOME_FUN` varchar(50) NOT NULL,
  `CPF_FUN` varchar(14) NOT NULL,
  `RG_FUN` varchar(12) NOT NULL,
  `EMAIL_FUN` varchar(50) NOT NULL,
  `DATA_NASCIMENTO_FUN` date NOT NULL,
  `TELEFONE_FUN` varchar(15) NOT NULL,
  `LOGIN_FUN` varchar(45) NOT NULL,
  `SENHA_FUN` varchar(45) NOT NULL,
  `STATUS_FUN` varchar(9) NOT NULL DEFAULT 'ativo',
  `FUNCAO_FUN` varchar(45) NOT NULL,
  `CARTEIRA_DE_TRABALHO_FUN` varchar(45) NOT NULL,
  `DATE_ADMISSAO_FUN` date NOT NULL,
  `DATA_DEMISSAO_FUN` date DEFAULT NULL,
  `UF_FUN` varchar(2) NOT NULL,
  `CEP_FUN` varchar(8) NOT NULL,
  `BAIRRO_FUN` varchar(45) NOT NULL,
  `ENDERECO_FUN` varchar(45) NOT NULL,
  `END_NUMERO_FUN` varchar(4) NOT NULL,
  `DATA_ALTERACAO_FUN` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`ID_FUN`, `NOME_FUN`, `CPF_FUN`, `RG_FUN`, `EMAIL_FUN`, `DATA_NASCIMENTO_FUN`, `TELEFONE_FUN`, `LOGIN_FUN`, `SENHA_FUN`, `STATUS_FUN`, `FUNCAO_FUN`, `CARTEIRA_DE_TRABALHO_FUN`, `DATE_ADMISSAO_FUN`, `DATA_DEMISSAO_FUN`, `UF_FUN`, `CEP_FUN`, `BAIRRO_FUN`, `ENDERECO_FUN`, `END_NUMERO_FUN`, `DATA_ALTERACAO_FUN`) VALUES
(1,'Administrador do Sistema','','','','0000-00-00','','admin','2','inativo','administrador','','0000-00-00','0000-00-00','','','','','','2021-06-29 00:27:50'),
(2,'Mateus Danilo Baptista','22535019647','388269558','mateusdanilobaptista-73@redex.com.br','1970-03-16','91989779916','mateusdani','123','ativo','vendedor','19476791732','2021-04-01','0000-00-00','PA','66833115','Tapanã (Icoaraci)','Alameda Tocantins','772','2021-06-29 02:49:00'),
(3,'Francisco Luís da Costa','55824841837','429824671','franciscoluisdacosta-73@power.alstom.com','2000-09-09','8627739950','franciscol','123','ativo','estoquista','60390801422','2021-04-01','0000-00-00','PI','64028400','Santo Antônio','Rua Alison Rodrigues do Prado','471','2021-06-29 00:27:50'),
(4,'Rafael Ryan Almeida','64253789307','391108438','rafaelryanalmeida-76@santosferreira.abv.br','1950-08-18','6826336004','rafaelryan','123','ativo','estoquista','25499585955','2021-04-01','0000-00-00','AC','69900066','Centro','Rua Marechal Deodoro','725','2021-06-29 00:27:50'),
(5,'Cláudia Nina Isabella Moraes','99869847501','342477419','cclaudianinaisabellamoraes@victorseguros.com.br','1958-03-09','6325285848','cclaudiani','123','ativo','vendedor','95873845150','2021-04-01','0000-00-00','TO','77024758','Plano Diretor Sul','Quadra 1404 Sul Avenida NS 2','374','2021-06-29 02:49:05'),
(6,'Edson Guilherme Almeida','05021194380','337582798','edsonguilhermealmeida-90@alcoa.com.br','1954-10-01','6927948251','edsonguilh','123','ativo','estoquista','06249113499','2021-04-01','0000-00-00','RO','76828684','Jardim Santana','Rua Itaberaí','995','2021-06-29 00:27:50'),
(7,'Henry Calebe Duarte','48893936844','278823348','hhenrycalebeduarte@uol.com.bt','1954-12-14','8638893872','hhenrycale','123','ativo','estoquista','58784715620','2021-04-01','0000-00-00','PI','64200538','Mendonça Clark','Rua Vereador Afonso do Carmo','458','2021-06-29 00:27:50'),
(8,'Cláudia Luana Oliveira','47568811140','359373264','claudialuanaoliveira_@mavex.com.br','1989-04-05','9535792297','claudialua','123','ativo','vendedor','81919803500','2021-04-01','0000-00-00','RR','69309230','Buritis','Avenida dos Imigrantes','710','2021-06-29 02:49:10'),
(9,'Márcio Sérgio Bernardes','23434087699','258012547','marciosergiobernardes_@unimedara.com.br','1956-05-12','4937599591','marcioserg','123','ativo','estoquista','93138156093','2021-04-01','0000-00-00','SC','89802501','Jardim Itália','Rua Uruguai - D','405','2021-06-29 00:27:50'),
(10,'Leandro César Tomás Santos','35178833872','445223819','leandrocesartomassantos@mirabeau.art.br','1989-11-20','6827430614','leandroces','123','inativo','vendedor','87707671901','2021-04-01','0000-00-00','AC','69909790','Vila Acre','Ramal Bom Futuro','351','2021-06-29 02:49:17'),
(11,'Sebastião Igor Rodrigo Viana','51628268123','349325674','ssebastiaoigorrodrigoviana@dlh.de','1965-07-07','8237579084','ssebastiao','123','ativo','estoquista','08136549182','2021-04-01','0000-00-00','AL','57084083','Benedito Bentes','Rua Givaldo Carimbão','823','2021-06-29 00:27:50'),
(12,'Nathan Nicolas Lorenzo Pinto','81913630463','180440482','nathannicolaslorenzopinto@icloud.com','1948-06-21','8727310561','nathannico','123','inativo','vendedor','97230059433','2021-04-01','0000-00-00','PE','56506905','São Miguel','Avenida Coronel Antônio Japiassu 701','724','2021-06-29 02:49:22'),
(13,'Laís Heloise Caldeira','58847776120','446225666','laisheloisecaldeira-91@diclace.com.br','1972-02-02','2138303844','laishelois','123','ativo','vendedor','71462411612','2021-04-01','0000-00-00','RJ','24358165','Jurujuba','Forte Imbuí','958','2021-06-29 02:49:28'),
(14,'Adriana Olivia da Mata','11467021245','222503543','adrianaoliviadamata-86@jglima.com.br','1978-05-19','6925521692','adrianaoli','123','ativo','estoquista','53434927466','2021-04-01','0000-00-00','RO','76913633','São Pedro','Rua Santa Clara','198','2021-06-29 00:27:50'),
(15,'Cláudia Camila Gomes','84395608779','424159351','claudiacamilagomes@gringa360.com.br','2002-10-01','1136906634','claudiacam','123','ativo','estoquista','39259539290','2021-04-01','0000-00-00','SP','04571190','Cidade Monções','Rua José Muniz dos Santos','639','2021-06-29 00:27:50'),
(16,'Guilherme Carlos André Jesus','41898782270','276426344','guilhermecarlosandrejesus_@oul.com.br','1982-11-18','8437872819','guilhermec','123','ativo','vendedor','04681598975','2021-04-01','0000-00-00','RN','59035262','Quintas','2ª Vila Ramos','875','2021-06-29 02:49:35'),
(17,'Iago Filipe Paulo Dias','20547172907','454404037','iiagofilipepaulodias@regler.com.br','1954-04-23','9125156360','iiagofilip','123','ativo','vendedor','23317093761','2021-04-01','0000-00-00','PA','66120650','Sacramenta','Passagem Bons Irmãos','909','2021-06-29 02:49:41'),
(18,'Sérgio André Silva','07665113753','207379993','sergioandresilva-70@aguabr.com.br','1981-08-08','8525963126','sergioandr','123','ativo','estoquista','76952627787','2021-04-01','0000-00-00','CE','60531040','Conjunto Ceará','Rua 418','641','2021-06-29 00:27:50'),
(19,'Laís Isadora Amanda Sales','56318480234','139045958','laisisadoraamandasales_@ctfmgacc.org.br','1997-09-25','8628916275','laisisador','123','ativo','vendedor','49910270026','2021-04-01','0000-00-00','PI','64027109','Promorar','Avenida Monsenhor Chaves','950','2021-06-29 02:49:49'),
(20,'Vitor Francisco Ryan Mendes','25288220492','318521398','vitorfranciscoryanmendes@fcfar.unesp.br','1966-10-09','9236563927','vitorfranc','123','ativo','estoquista','29550489833','2021-04-01','0000-00-00','AM','69050418','Parque 10 de Novembro','Rua Maysa','706','2021-06-29 00:27:50'),
(21,'Enrico Calebe Murilo Santos','05772264958','294079245','enricocalebemurilosantos-83@stilomovelaria.com.br','2003-01-13','8426326127','enricocale','123','inativo','estoquista','94394516956','2021-04-01','0000-00-00','RN','59035570','Alecrim','Rua Doutor Alfredo Lira','513','2021-06-29 00:27:50'),
(22,'Carlos Calebe Murilo Costa','75191886208','172662096','carloscalebemurilocosta_@technocut.com.br','1949-01-03','8827508000','carloscale','123','inativo','estoquista','75028891203','2021-04-01','0000-00-00','CE','63100055','Centro','Rua Desembargador Edmilson da Cruz Neves','625','2021-06-29 00:27:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `ID_VEN` int(11) NOT NULL,
  `ID_FUN` int(11) NOT NULL,
  `ID_CEL` int(11) NOT NULL,
  `DATAHORA_VEN` datetime NOT NULL,
  `DATA_ALTERACAO_VEN` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`ID_VEN`, `ID_FUN`, `ID_CEL`, `DATAHORA_VEN`, `DATA_ALTERACAO_VEN`) VALUES
(1,17,15,'2021-04-04 12:09:40','2021-06-29 00:27:51'),
(2,2,37,'2021-04-07 09:52:53','2021-06-29 00:27:51'),
(3,2,2,'2021-04-07 11:14:53','2021-06-29 00:27:51'),
(4,19,3,'2021-04-07 17:02:08','2021-06-29 00:27:51'),
(5,17,14,'2021-04-09 10:01:24','2021-06-29 00:27:51'),
(6,2,35,'2021-04-10 07:39:58','2021-06-29 00:27:51'),
(7,17,16,'2021-04-11 06:32:24','2021-06-29 00:27:51'),
(8,19,47,'2021-04-11 07:16:26','2021-06-29 00:27:51'),
(9,19,49,'2021-04-14 13:55:57','2021-06-29 00:27:51'),
(10,8,50,'2021-05-03 07:15:06','2021-06-29 00:27:51'),
(11,5,30,'2021-05-03 15:23:05','2021-06-29 00:27:51'),
(12,5,33,'2021-05-04 06:35:59','2021-06-29 00:27:51'),
(13,5,18,'2021-05-08 08:31:30','2021-06-29 00:27:51'),
(14,5,42,'2021-05-09 13:15:20','2021-06-29 00:27:51'),
(15,5,9,'2021-05-15 08:01:03','2021-06-29 00:27:51'),
(16,8,28,'2021-05-16 08:02:15','2021-06-29 00:27:51'),
(17,5,32,'2021-05-16 13:18:49','2021-06-29 00:27:51'),
(18,19,5,'2021-05-18 13:13:41','2021-06-29 00:27:51'),
(19,16,13,'2021-06-03 13:25:52','2021-06-29 00:27:51'),
(20,16,39,'2021-06-08 15:22:19','2021-06-29 00:27:51'),
(21,16,45,'2021-06-09 12:42:44','2021-06-29 00:27:51'),
(22,13,48,'2021-06-10 07:38:07','2021-06-29 00:27:51'),
(23,13,41,'2021-06-11 10:18:44','2021-06-29 00:27:51'),
(24,16,40,'2021-06-11 11:18:44','2021-06-29 00:27:51'),
(25,13,31,'2021-06-11 12:27:39','2021-06-29 00:27:51'),
(26,16,46,'2021-06-15 12:21:15','2021-06-29 00:27:51');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `celular`
--
ALTER TABLE `celular`
  ADD PRIMARY KEY (`ID_CEL`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`ID_FUN`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`ID_VEN`,`ID_FUN`,`ID_CEL`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `celular`
--
ALTER TABLE `celular`
  MODIFY `ID_CEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `ID_FUN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `ID_VEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
