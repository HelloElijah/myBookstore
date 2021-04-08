#
# Table structure for table BookStoreUser
#

CREATE TABLE BookStoreUser (
  Id int(11) NOT NULL auto_increment,
  UserName varchar(255) UNIQUE NOT NULL default '',
  Password varchar(255) NOT NULL default '',
  favorites blob,
  PRIMARY KEY (Id)
);


INSERT INTO BookStoreUser  VALUES (1, 'Elijah', '1234', COLUMN_CREATE('id', 1));
INSERT INTO BookStoreUser  VALUES (2, 'Ray', 'abcd',COLUMN_CREATE('id', 3));
INSERT INTO BookStoreUser  VALUES (3, 'Xiaohu', '9876',COLUMN_CREATE('id', 2));