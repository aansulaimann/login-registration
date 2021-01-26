# Host: localhost  (Version 5.5.5-10.4.17-MariaDB)
# Date: 2021-01-26 11:47:09
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'Malih','malih@admin.id','$2y$10$LvMg3J8yiRQnRE3OiPpHe.O6cdOwBMRT0LGiy7XGnXmI8lqMohPr6'),(3,'Maloh','maloh@web.id','$2y$10$3W0udDuv5p0ZrMB2Obf2JuHkJa6K4vdWtGpBykYcfrOP991fI0IiO');
