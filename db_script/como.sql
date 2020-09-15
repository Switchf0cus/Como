
CREATE DATABASE IF NOT EXISTS comoOfficial;
USE comoOfficial;

-- --------------------------------------------------------


CREATE TABLE IF NOT EXISTS users (
  user_id INT(10) NOT NULL AUTO_INCREMENT,
  firstname VARCHAR(100) NOT NULL,
  lastname VARCHAR(100) NOT NULL,
  preferences VARCHAR(100) NOT NULL DEFAULT "",
  email VARCHAR(100) NOT NULL,
  password VARCHAR(200) NOT NULL,
  allergies VARCHAR(100) NOT NULL DEFAULT "",
  diet VARCHAR(100) NOT NULL DEFAULT "",
  
  PRIMARY KEY (user_id)
)ENGINE=InnoDB DEFAULT CHARSET="utf8" ;

--
-- insert data for table "users"
--

INSERT INTO users (firstname, lastname, preferences, password, email, allergies, diet) VALUES
("Pierre", "Anisimov",  "", sha1("123"), "pierrea@gmail.com","", "");

