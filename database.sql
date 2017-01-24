CREATE DATABASE book_collection;

USE book_collection;

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL auto_increment,
  `book_title` varchar(255) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  PRIMARY KEY (`book_id`)
);
