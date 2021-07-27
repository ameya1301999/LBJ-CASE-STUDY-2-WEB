SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `user` (`userid`, `username`, `password`, `fullname`) VALUES
(1, 'LTI', '123', 'LTI'),
(2, 'AMEYA', 'RATHI', 'AMEYA RATHI');


ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;
