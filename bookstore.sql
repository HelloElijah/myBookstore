#
# Table structure for table BookStore
#

CREATE TABLE BookStore (
  Id int(11) NOT NULL auto_increment,
  BookName varchar(255) NOT NULL default '',
  Author varchar(255) NOT NULL default '',
  SellerLocation varchar(255) NOT NULL default '',
  Price int(255) NOT NULL default 0,
  Email varchar(255) NOT NULL default '',
  bookURL VARCHAR(2083) default 'https://www.designsponge.com/wp-content/uploads/2011/07/final.jpeg',
  category int(255) NOT NULL  default 1 CHECK (category>=1 AND category<=5),
  NOF int(255) NOT NULL default 0,
  PRIMARY KEY (Id)
);


INSERT INTO BookStore  VALUES (1, 'Computing', 'Yulin Xue', 'Waterloo', 200, 'xuex1230@mylaurier.ca','https://image.isu.pub/150116060033-5618526743569a5619e7f82c0f5d3c51/jpg/page_1.jpg',default,default);
INSERT INTO BookStore  VALUES (2, 'Compiler', 'Fangjian Let', 'Kitchener', 100, 'leix1111@mylaurier.ca','https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1526895342l/40186238._SY475_.jpg',default,default);
INSERT INTO BookStore  VALUES (3, 'Python', 'Xiaohu He', 'Toronto', 300, 'hexx2222@mylaurier.ca','https://www.sarahsbookshelves.com/wp-content/uploads/sites/228/2021/03/Spring-2021-Book-Preview-Pinterest.jpg',default,default);
INSERT INTO BookStore  VALUES (4, 'Python', 'Zheming Xing', 'Brantford', 200, 'xing333@mylaurier.ca','https://smartcdn.prod.postmedia.digital/vancouversun/wp-content/uploads/2020/02/0315_spring_arts_preview_books-s-1.jpg?w=288&quality=90&strip=all',default,default);