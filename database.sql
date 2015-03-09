SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Drop old tables
DROP TABLE IF EXISTS `contact`;
DROP TABLE IF EXISTS `photos`;
DROP TABLE IF EXISTS `restaurants`;

-- Create new tables
CREATE TABLE `contact`
( `contactId`    int(10)        NOT NULL AUTO_INCREMENT
, `name`    varchar(64)    NOT NULL
, `email`     varchar(64)    NOT NULL
, `subject`     varchar(64)    NOT NULL
, `message`   text  NOT NULL
, PRIMARY KEY(`contactId`)
);

CREATE TABLE `photos`
( `photoId`		int(10)         NOT NULL AUTO_INCREMENT
, `title`     varchar(64)      NOT NULL
, `author`		varchar(64)    NOT NULL
, `photo` 		text    NOT NULL
, `description`	text
, `postDate`    varchar(10)    NOT NULL
, PRIMARY KEY(`photoId`)
);

CREATE TABLE `restaurants`
(   `dineOutId`     int(10)         NOT NULL AUTO_INCREMENT
,   `title`         varchar(64)     NOT NULL
,   `address`       varchar(128)    NOT NULL
,   `phone`         varchar(16)     NOT NULL
,   `website`       text            
,   `image`         text            NOT NULL
,   `description`    text
,   PRIMARY KEY(`dineOutId`)
);

INSERT INTO `photos`
  VALUES (1, 'The Vancouver skyline', 'Michael Aynsley', 'http://d3exkutavo4sli.cloudfront.net/wp-content/uploads/2013/07/Vancouver-aerial-present-4.jpg', 'British Columbia’s southwest coast has gone through many drastic changes since Captain George Vancouver landed on its soggy shores at the end of the 18th century..', '2013-07-30');
INSERT INTO `photos`
  VALUES (2, 'Western Canada’s Biggest City – Vancouver', 'Clemens Lo', 'http://rapidboostmarketing.com/wp-content/uploads/2013/12/beautiful__vancouver__canada_.jpg', 'Covering over 3000 square kilometers strategically located close to technology valley and port. With over 3.3 million population Vancouver is western Canada’s business and cultural hub..', '2014-03-10');
INSERT INTO `photos`
  VALUES (3, 'SO COLD THIS CHRISTMAS', 'Jim Hejl', 'http://jaybanks.ca/images/photos/so-cold-this-christmas-by-jim-hejl.jpg', 'Winter is trying to breathe new life into our town. When the snow is all around I feel like in a totally different city.', '2015-12-15');

INSERT INTO `contact`
  VALUES (1, 'Clemens Lo', 'hello@gmail.com', 'hello', 'hello hello');

INSERT INTO `restaurants`
    VALUES (1, 'THE ABBEY', '117 WEST PENDER VANCOUVER, BC V6B 1S4', '604-336-7100', 'http://abbeyvan.com/', 'http://www.tourismvancouver.com/includes/content/images/listings/abbey0.jpg' 
        , 'This is a progressive tavern, where we offer classic and comfortable food and drink with a modern sensibility. Located in the heart of the city, just steps away from cinemas, theaters and stadiums, The Abbey makes a perfect place to meet up for drinks and a bite before or after the game, dinner and a movie, or to enjoy a social evening out with friends in a warm and welcoming environment.');

INSERT INTO `restaurants`
    VALUES (2, 'ABIGAILS PARTY', '321 WATER ST VANCOUVER, BC V6B 1B8', '604-683-8376', 'http://www.alporto.ca/', 'http://www.tourismvancouver.com/includes/content/images/listings/Al-Porto-Window.jpg'
        , 'An impressive two level dining area. Specializing in traditional Italian cuisine, seafood, game and wood-fire pizza. Critically acclaimed wine list, featuring over 300 world wines. A warm, romantic restaurant perfect for all occasions. Private groups, business luncheons and wedding parties welcome.');

INSERT INTO `restaurants`
    VALUES (3, 'BARU LATINO RESTAURANTE', '2535 ALMA STREET VANCOUVER, BC V6R 2C1', '604-222-9171', 'http://www.barulatino.com/', 'http://www.tourismvancouver.com/includes/content/images/listings/4452-Baru.jpg'
        , 'A cozy yet stylish restaurant featuring the bold flavours of Latin America. Baru shares a vision of bringing the unique cuisine and music of South America to Vancouver.');