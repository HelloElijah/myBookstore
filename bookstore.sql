#
# Table structure for table BookStore
#

CREATE TABLE BookStore (
  Id int(11) NOT NULL auto_increment,
  BookName varchar(255) NOT NULL default '',
  Author varchar(255) NOT NULL default '',
  SellerLocation varchar(255) NOT NULL default '',
  Price int(255) NOT NULL default 0,
  PRIMARY KEY (Id)
);


INSERT INTO BookStore  VALUES (1, 'Computing', 'Yulin Xue', 'Waterloo', 200);
INSERT INTO BookStore  VALUES (2, 'Compiler', 'Fangjian Let', 'Kitchener', 100);
INSERT INTO BookStore  VALUES (3, 'Python', 'Xiaohu He', 'Toronto', 300);