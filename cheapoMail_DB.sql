DROP TABLE IF EXISTS User;
CREATE TABLE User
(
    ID int(3) NOT NULL auto_increment,
    firstName char(30) NOT NULL default '',
    lastName char(30) NOT NULL default '',
    password char(30),
    username char(30),
    PRIMARY KEY (ID)
);


DROP TABLE IF EXISTS Messages;
CREATE TABLE Messages
(
    ID int(5) NOT NULL auto_increment,
    subject char(40),
    body TEXT(500),
    user_id int(3),
    recipient_id char(3), 
    PRIMARY KEY (ID)
);


DROP TABLE IF EXISTS Message_Read;
CREATE TABLE Message_Read
(
    ID int(5) NOT NULL auto_increment,
    message_id int(5) NOT NULL,
    reader_id int(3),
    date DATETIME,
    PRIMARY KEY (ID)
);

