
DROP TABLE IF EXISTS bdhd_user;
CREATE TABLE bdhd_user (
  id int(8) NOT NULL AUTO_INCREMENT,
  loginname varchar(50) DEFAULT NULL,
  username varchar(100) DEFAULT NULL,
  password varchar(200) DEFAULT NULL,
  desc varchar(500) DEFAULT NULL,
  PRIMARY KEY (id)
) AUTO_INCREMENT=4;

-- ----------------------------
-- Records of bdhd_user
-- ----------------------------
INSERT INTO bdhd_user VALUES ('3', 'admin', 'administrator', '21232f297a57a5a743894a0e4a801fc3', null);
