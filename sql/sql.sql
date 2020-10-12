
DROP DATABASE IF EXISTS `teste_bd_samael`;

CREATE DATABASE `teste_bd_samael`;

USE teste_bd_samael;

# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `name`  int(16) DEFAULT NOT NULL
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;

INSERT INTO `user` (`id`, `name`, `phone`)
VALUES
	(1,'Samael simoes', '47991088783'),
	(2,'Ana beatriz', '47991088783'),
	(3,'Costelinha', '47991088783'),
	(4,'kiko', '47991088783'),
	(5,'Butijao o peixe', '47991088783');

UNLOCK TABLES;
