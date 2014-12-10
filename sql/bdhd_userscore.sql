CREATE TABLE IF NOT EXISTS `bdhd_userscore` (
  `openid` varchar(200) CHARACTER SET utf8 NOT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `username` varchar(200) CHARACTER SET utf8 DEFAULT ''' ''',
  `score` int(5) DEFAULT '0',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`openid`)
) 