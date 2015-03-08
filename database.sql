SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Drop old tables
DROP TABLE IF EXISTS `contact`;
DROP TABLE IF EXISTS `photos`;

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

INSERT INTO `photos`
  VALUES (1, 'The Vancouver skyline', 'Michael Aynsley', 'http://d3exkutavo4sli.cloudfront.net/wp-content/uploads/2013/07/Vancouver-aerial-present-4.jpg', 'British Columbia’s southwest coast has gone through many drastic changes since Captain George Vancouver landed on its soggy shores at the end of the 18th century..', '2013-07-30');
INSERT INTO `photos`
  VALUES (2, 'Western Canada’s Biggest City – Vancouver', 'Clemens Lo', 'http://rapidboostmarketing.com/wp-content/uploads/2013/12/beautiful__vancouver__canada_.jpg', 'Covering over 3000 square kilometers strategically located close to technology valley and port. With over 3.3 million population Vancouver is western Canada’s business and cultural hub..', '2014-03-10');
INSERT INTO `photos`
  VALUES (3, 'SO COLD THIS CHRISTMAS', 'Jim Hejl', 'http://jaybanks.ca/images/photos/so-cold-this-christmas-by-jim-hejl.jpg', 'Winter is trying to breathe new life into our town. When the snow is all around I feel like in a totally different city.', '2015-12-15');
