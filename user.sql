SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- TODO: sanitize input
-- alphabetic regex: REGEXP '^[A-Za-z]+$'
-- alphanumeric regex: REGEXP '^[A-Za-z0-9]+$'
-- numeric only: '^[0-9]$'
CREATE TABLE `user` (
  `user_ID` int(50) NOT NULL,  -- primary key
  `username_hash` varchar(250) NOT NULL,
  `password_hash` varchar(250) NOT NULL,    -- need serverside JS to convert plaintext to hash before saving in database
  `first_name` varchar(30) NOT NULL,        -- alphabetic only
  `last_name` varchar(30) NOT NULL,         -- alphabetic only
  `address` varchar(25) NOT NULL,           -- alphanumeric
  `city` varchar(25) NOT NULL,              -- alphabetic only
  `state` varchar(25) NOT NULL,             -- alphabetic only
  `zip` int(5) NOT NULL,                    -- numeric with forced 5 digits
  `email` varchar(25) NOT NULL,             -- alphanumeric with @ between
  `phone` varchar(25) NOT NULL,             -- numeric with forced 10 digits
  `security_Q` varchar(45) NOT NULL,        -- alphanumeric only; stored in plaintext
  `security_answer_hash` varchar(250) NOT NULL
  
 -- primary key constraints 
 CONSTRAINT pk_user PRIMARY KEY (`user_ID`),
  
 -- constraints on input fields
  ---
  -- constrains first and last name to alphabetic only
  CONSTRAINT chk_first_name_alpha CHECK (first_name REGEXP '^[A-Za-z]+$'),
  CONSTRAINT chk_last_name_alpha CHECK (first_name REGEXP '^[A-Za-z]+$'),
  
  -- constrains address to be alphanumeric only
  CONSTRAINT chk_address_alpha_num CHECK (address REGEXP '^[A-Za-z0-9]+$'),
  
  -- constrains city and state to be alphabetic only
  CONSTRAINT chk_city_alpha CHECK (city REGEXP '^[A-Za-z]+$'),
  CONSTRAINT chk_state_alpha CHECK (state REGEXP '^[A-Za-z]+$'),
  
  -- constrains zip to be numeric only and exactly 5 digits
  CONSTRAINT chk_zip_numeric CHECK (zip REGEXP '^[0-9]{5}$'),
  
  -- constrains email to be alphanumeric with an @ between two strings
  CONSTRAINT chk_email_format CHECK (email REGEXP '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$'),
  
  -- constrains phone to be numeric only and exactly 10 digits
  CONSTRAINT chk_phone_numeric CHECK (phone REGEXP '^[0-9]{5}$'),
  
  -- constrains security question to be alphanumeric
  CONSTRAINT chk_security_question_alpha_num CHECK (security_Q REGEXP '^[A-Za-z0-9]+$')
 
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 
-- --------------------------------------------------------
