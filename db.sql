CREATE TABLE `USER` (
  `ID` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `SEX` varchar(20),
  `MAIL` varchar(20),
  `PASS` varchar(20),
  `PHONE` varchar(20),
  `COUNTRY` varchar(20),
  `CG` varchar(20),
  `DATE` DATE
) ENGINE=InnoDB;

COMMIT;

INSERT INTO `USER` (`ID`, `SEX`, `MAIL`, `PASS`, `PHONE`, `COUNTRY`, `CG`, `DATE`) VALUES ('1', 'male', 'ozeliurs+1@gmail.com', 'password1', '0000000000', 'fr', 'on', '2021-12-02');
INSERT INTO `USER` (`ID`, `SEX`, `MAIL`, `PASS`, `PHONE`, `COUNTRY`, `CG`, `DATE`) VALUES ('1', 'fema', 'ozeliurs+2@gmail.com', 'password2', '0000000001', 'en', 'on', '2021-12-02');
INSERT INTO `USER` (`ID`, `SEX`, `MAIL`, `PASS`, `PHONE`, `COUNTRY`, `CG`, `DATE`) VALUES ('1', 'othe', 'ozeliurs+3@gmail.com', 'password3', '0000000002', 'fr', 'off', '2021-12-02');
INSERT INTO `USER` (`ID`, `SEX`, `MAIL`, `PASS`, `PHONE`, `COUNTRY`, `CG`, `DATE`) VALUES ('1', 'heli', 'ozeliurs+4@gmail.com', 'password4', '0000000003', 'en', 'off', '2021-12-02');
INSERT INTO `USER` (`ID`, `SEX`, `MAIL`, `PASS`, `PHONE`, `COUNTRY`, `CG`, `DATE`) VALUES ('1', 'male', 'ozeliurs+5@gmail.com', 'password5', '0000000004', 'fr', 'on', '2021-12-02');