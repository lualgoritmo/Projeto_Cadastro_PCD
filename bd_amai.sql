/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 5.7.31 : Database - bd_amai
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bd_amai` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `bd_amai`;

/*Table structure for table `atividades` */

DROP TABLE IF EXISTS `atividades`;

CREATE TABLE `atividades` (
  `idatividade` int(11) NOT NULL AUTO_INCREMENT,
  `nomeatividade` varchar(30) NOT NULL,
  `diaDaSemana` date NOT NULL,
  `horarioatividade` varchar(255) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `nomeProfessor` varchar(255) DEFAULT NULL,
  `imagemAtividade` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idatividade`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `atividades` */

insert  into `atividades`(`idatividade`,`nomeatividade`,`diaDaSemana`,`horarioatividade`,`descricao`,`nomeProfessor`,`imagemAtividade`) values 
(2,'Atividade teste','2021-07-29','12:00','Desc1','Prof1',NULL),
(3,'Atividade teste','2021-07-22','12:00','gsdfg','ggdfs',NULL);

/*Table structure for table `atividades_funcionarios` */

DROP TABLE IF EXISTS `atividades_funcionarios`;

CREATE TABLE `atividades_funcionarios` (
  `idatividade_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `idfuncionario` int(11) DEFAULT NULL,
  `idatividade` int(11) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idatividade_funcionario`),
  KEY `idfuncionario` (`idfuncionario`),
  KEY `idatividade` (`idatividade`),
  CONSTRAINT `atividades_funcionarios_ibfk_1` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionario` (`idfuncionario`),
  CONSTRAINT `atividades_funcionarios_ibfk_2` FOREIGN KEY (`idatividade`) REFERENCES `atividades` (`idatividade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `atividades_funcionarios` */

/*Table structure for table `funcionario` */

DROP TABLE IF EXISTS `funcionario`;

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `cargo` varchar(30) NOT NULL,
  `dataAdmissao` date DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `dataDemissao` date DEFAULT NULL,
  `numeroTelefone` char(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `salario` varchar(255) DEFAULT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numeroResidencia` char(11) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cep` char(15) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` char(2) NOT NULL,
  `perfil` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idfuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `funcionario` */

insert  into `funcionario`(`idfuncionario`,`nome`,`sexo`,`cargo`,`dataAdmissao`,`dataNascimento`,`dataDemissao`,`numeroTelefone`,`email`,`senha`,`salario`,`logradouro`,`numeroResidencia`,`bairro`,`cep`,`cidade`,`estado`,`perfil`) values 
(1,'admin','F','TI','2021-08-01','2021-07-13','2021-07-01','36254','t@t.com','123','100','Rua teste','3625','Birro teste','5534543','Bauru','SP','adm'),
(3,'Alice Pastorello','F','TESTE F','2021-07-21','2021-07-08',NULL,'432432','robson@robson.com','123','4324','GFDSGSDF','53','Jardim São Caetano','17212510','Jaú','SP','adm'),
(4,'Alice Pastorello','M','TESTE F','2021-07-07','2021-07-13',NULL,'432432','robson@robson.com','123','4324','GFDSGSDF','53','Jardim São Caetano','17210000','Jaú','SP','adm');

/*Table structure for table `galeria_fotos` */

DROP TABLE IF EXISTS `galeria_fotos`;

CREATE TABLE `galeria_fotos` (
  `idgaleriafoto` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `dataEvento` date DEFAULT NULL,
  `dataPostada` date NOT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idgaleriafoto`),
  KEY `idfuncionario` (`idfuncionario`),
  CONSTRAINT `galeria_fotos_ibfk_1` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionario` (`idfuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `galeria_fotos` */

insert  into `galeria_fotos`(`idgaleriafoto`,`imagem`,`descricao`,`dataEvento`,`dataPostada`,`idfuncionario`) values 
(8,'visao/images/galeria/1625440332113.jpg','Des1','2021-07-13','2021-07-25',1),
(9,'visao/images/galeria/1625443937271.jpg','dfads','2021-07-26','2021-07-22',1);

/*Table structure for table `laudos_medicos` */

DROP TABLE IF EXISTS `laudos_medicos`;

CREATE TABLE `laudos_medicos` (
  `idLaudoMedico` int(11) NOT NULL AUTO_INCREMENT,
  `imagemLaudo` varchar(255) DEFAULT NULL,
  `descricao` varchar(200) NOT NULL,
  `idUsuarioPCD` int(11) DEFAULT NULL,
  PRIMARY KEY (`idLaudoMedico`),
  KEY `idUsuarioPCD` (`idUsuarioPCD`),
  CONSTRAINT `laudos_medicos_ibfk_1` FOREIGN KEY (`idUsuarioPCD`) REFERENCES `usuariopcd` (`idUsuarioPCD`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `laudos_medicos` */

insert  into `laudos_medicos`(`idLaudoMedico`,`imagemLaudo`,`descricao`,`idUsuarioPCD`) values 
(4,'visao/images/laudos/1625440386194.jpg','Descricao',32),
(5,'visao/images/laudos/1625443791266.jpg','dsadsa',33);

/*Table structure for table `usuariopcd` */

DROP TABLE IF EXISTS `usuariopcd`;

CREATE TABLE `usuariopcd` (
  `idUsuarioPCD` int(11) NOT NULL AUTO_INCREMENT,
  `nomeFuncionario` int(11) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `sexoUsuario` enum('F','M') DEFAULT NULL,
  `dataNascimento` date NOT NULL,
  `nomeMae` varchar(50) DEFAULT NULL,
  `nomePai` varchar(50) DEFAULT NULL,
  `dataMatricula` date NOT NULL,
  `numeroTelefone` varchar(50) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `escolaridade` enum('Analfabeto','Ensino Fundamental','Ensino Fundamental Incompleto','Ensino Médio','Ensino Médio Incompleto','Superior','Superio Incompleto') DEFAULT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numeroResidencia` char(11) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cep` char(15) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` char(2) NOT NULL,
  `tipoDeficiencia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idUsuarioPCD`),
  KEY `nomeFuncionario` (`nomeFuncionario`),
  CONSTRAINT `usuariopcd_ibfk_1` FOREIGN KEY (`nomeFuncionario`) REFERENCES `funcionario` (`idfuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuariopcd` */

insert  into `usuariopcd`(`idUsuarioPCD`,`nomeFuncionario`,`nome`,`sexoUsuario`,`dataNascimento`,`nomeMae`,`nomePai`,`dataMatricula`,`numeroTelefone`,`email`,`escolaridade`,`logradouro`,`numeroResidencia`,`bairro`,`cep`,`cidade`,`estado`,`tipoDeficiencia`) values 
(32,1,'Alice Pastorello','F','2021-07-22','Mae1','Pai1','2021-07-07','432432','thatiane@thatiane.com','Analfabeto','GFDSGSDF','53','Jardim São Caetano','17210000','Jaú','SP','paraplegico'),
(33,1,'Lucas Barros','M','2021-07-01','Mae1','Pai1','2021-07-02','432432','lucas@lucas.com','Analfabeto','GFDSGSDF','53','Jardim São Caetano','17210000','Jaú','SP','paraplegico');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
