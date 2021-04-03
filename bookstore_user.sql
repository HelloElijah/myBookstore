#
# Table structure for table BookStoreUser
#

CREATE TABLE BookStoreUser (
  Id int(11) NOT NULL auto_increment,
  UserName varchar(255) NOT NULL default '',
  Password varchar(255) NOT NULL default '',
  City varchar(255) NOT NULL default '',
  Email varchar(255) NOT NULL default '',
  PRIMARY KEY (Id)
);


INSERT INTO BookStoreUser  VALUES (1, 'Elijah', '1234', 'Waterloo', 'xuex1230@mylaurier.ca');
INSERT INTO BookStoreUser  VALUES (2, 'Ray', 'abcd', 'Kitchener', 'leix1111@mylaurier.ca');
INSERT INTO BookStoreUser  VALUES (3, 'Xiaohu', '9876', 'Toronto', 'hexx2222@mylaurier.ca');