SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- TODO registration is supposed to create a user
-- in order to register to an event, 
CREATE TABLE `user` (
  `user_ID` int(50) NOT NULL,  -- primary key
  `username` varchar(25) NOT NULL,
  `password_hash` varchar(250) NOT NULL,    -- need serverside JS to convert plaintext to hash before saving in database
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `address` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `zip` int(5) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `security_Q` varchar(45) NOT NULL,
  `security_A` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 
-- --------------------------------------------------------
