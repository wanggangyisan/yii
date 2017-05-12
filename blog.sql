CREATE TABLE user (
  id int(10) not null AUTO_INCREMENT COMMENT '自增主键' ,
  username VARCHAR(100) not null DEFAULT '' comment '用户名' ,
  passwrd VARCHAR (80) not null comment '密码',
  email VARCHAR (255) not null DEFAULT '' comment '邮箱',
  birthday INT not null DEFAULT 0 comment '生日',
  create_time int not null DEFAULT 0 comment '加入时间',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB  DEFAULT charset=utf8;