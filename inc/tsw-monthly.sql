CREATE TABLE IF NOT EXISTS `jan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(100) DEFAULT NULL,
  `amnt` varchar(25) DEFAULT NULL,
  `dtdue` varchar(25) DEFAULT NULL,
  `dtpaid` varchar(25) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `more` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `jan` (`id`, `bill`, `amnt`, `dtdue`, `dtpaid`, `notes`, `more`) VALUES
(1, 'Health Care', '37.00', '1st', '12-23', 'chk 420', 0),
(2, 'Mortgage', '999.99', '5th', '', 'Auto Pay', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, 'City of ', '35.00', '20th', '', '', 1),
(17, 'Crdt Crd', '50.00', '21st', '', '', 1),
(18, 'Water', '28.00', '21st', '', '', 1),
(19, '', '', '', '', '', 1),
(20, '', '', '', '', '', 1),
(21, '', '', '', '', '', 1),
(22, '', '', '', '', '', 1),
(23, '', '', '', '', '', 1),
(24, '', '', '', '', '', 1),
(25, '', '', '', '', '', 1),
(26, '', '', '', '', '', 1),
(27, '', '', '', '', '', 1),
(28, '', '', '', '', '', 1),
(29, '', '', '', '', '', 1),
(30, '', '', '', '', '', 1);

CREATE TABLE IF NOT EXISTS `feb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(100) DEFAULT NULL,
  `amnt` varchar(25) DEFAULT NULL,
  `dtdue` varchar(25) DEFAULT NULL,
  `dtpaid` varchar(25) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `more` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `feb` (`id`, `bill`, `amnt`, `dtdue`, `dtpaid`, `notes`, `more`) VALUES
(1, '', '', '', '', '', 0),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 1),
(17, '', '', '', '', '', 1),
(18, '', '', '', '', '', 1),
(19, '', '', '', '', '', 1),
(20, '', '', '', '', '', 1),
(21, '', '', '', '', '', 1),
(22, '', '', '', '', '', 1),
(23, '', '', '', '', '', 1),
(24, '', '', '', '', '', 1),
(25, '', '', '', '', '', 1),
(26, '', '', '', '', '', 1),
(27, '', '', '', '', '', 1),
(28, '', '', '', '', '', 1),
(29, '', '', '', '', '', 1),
(30, '', '', '', '', '', 1);

CREATE TABLE IF NOT EXISTS `mar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(100) DEFAULT NULL,
  `amnt` varchar(25) DEFAULT NULL,
  `dtdue` varchar(25) DEFAULT NULL,
  `dtpaid` varchar(25) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `more` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `mar` (`id`, `bill`, `amnt`, `dtdue`, `dtpaid`, `notes`, `more`) VALUES
(1, '', '', '', '', '', 0),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 1),
(17, '', '', '', '', '', 1),
(18, '', '', '', '', '', 1),
(19, '', '', '', '', '', 1),
(20, '', '', '', '', '', 1),
(21, '', '', '', '', '', 1),
(22, '', '', '', '', '', 1),
(23, '', '', '', '', '', 1),
(24, '', '', '', '', '', 1),
(25, '', '', '', '', '', 1),
(26, '', '', '', '', '', 1),
(27, '', '', '', '', '', 1),
(28, '', '', '', '', '', 1),
(29, '', '', '', '', '', 1),
(30, '', '', '', '', '', 1);

CREATE TABLE IF NOT EXISTS `apr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(100) DEFAULT NULL,
  `amnt` varchar(25) DEFAULT NULL,
  `dtdue` varchar(25) DEFAULT NULL,
  `dtpaid` varchar(25) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `more` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `apr` (`id`, `bill`, `amnt`, `dtdue`, `dtpaid`, `notes`, `more`) VALUES
(1, '', '', '', '', '', 0),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 1),
(17, '', '', '', '', '', 1),
(18, '', '', '', '', '', 1),
(19, '', '', '', '', '', 1),
(20, '', '', '', '', '', 1),
(21, '', '', '', '', '', 1),
(22, '', '', '', '', '', 1),
(23, '', '', '', '', '', 1),
(24, '', '', '', '', '', 1),
(25, '', '', '', '', '', 1),
(26, '', '', '', '', '', 1),
(27, '', '', '', '', '', 1),
(28, '', '', '', '', '', 1),
(29, '', '', '', '', '', 1),
(30, '', '', '', '', '', 1);

CREATE TABLE IF NOT EXISTS `may` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(100) DEFAULT NULL,
  `amnt` varchar(25) DEFAULT NULL,
  `dtdue` varchar(25) DEFAULT NULL,
  `dtpaid` varchar(25) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `more` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `may` (`id`, `bill`, `amnt`, `dtdue`, `dtpaid`, `notes`, `more`) VALUES
(1, '', '', '', '', '', 0),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 1),
(17, '', '', '', '', '', 1),
(18, '', '', '', '', '', 1),
(19, '', '', '', '', '', 1),
(20, '', '', '', '', '', 1),
(21, '', '', '', '', '', 1),
(22, '', '', '', '', '', 1),
(23, '', '', '', '', '', 1),
(24, '', '', '', '', '', 1),
(25, '', '', '', '', '', 1),
(26, '', '', '', '', '', 1),
(27, '', '', '', '', '', 1),
(28, '', '', '', '', '', 1),
(29, '', '', '', '', '', 1),
(30, '', '', '', '', '', 1);

CREATE TABLE IF NOT EXISTS `jun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(100) DEFAULT NULL,
  `amnt` varchar(25) DEFAULT NULL,
  `dtdue` varchar(25) DEFAULT NULL,
  `dtpaid` varchar(25) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `more` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `jun` (`id`, `bill`, `amnt`, `dtdue`, `dtpaid`, `notes`, `more`) VALUES
(1, '', '', '', '', '', 0),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 1),
(17, '', '', '', '', '', 1),
(18, '', '', '', '', '', 1),
(19, '', '', '', '', '', 1),
(20, '', '', '', '', '', 1),
(21, '', '', '', '', '', 1),
(22, '', '', '', '', '', 1),
(23, '', '', '', '', '', 1),
(24, '', '', '', '', '', 1),
(25, '', '', '', '', '', 1),
(26, '', '', '', '', '', 1),
(27, '', '', '', '', '', 1),
(28, '', '', '', '', '', 1),
(29, '', '', '', '', '', 1),
(30, '', '', '', '', '', 1);

CREATE TABLE IF NOT EXISTS `jul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(100) DEFAULT NULL,
  `amnt` varchar(25) DEFAULT NULL,
  `dtdue` varchar(25) DEFAULT NULL,
  `dtpaid` varchar(25) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `more` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `jul` (`id`, `bill`, `amnt`, `dtdue`, `dtpaid`, `notes`, `more`) VALUES
(1, '', '', '', '', '', 0),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 1),
(17, '', '', '', '', '', 1),
(18, '', '', '', '', '', 1),
(19, '', '', '', '', '', 1),
(20, '', '', '', '', '', 1),
(21, '', '', '', '', '', 1),
(22, '', '', '', '', '', 1),
(23, '', '', '', '', '', 1),
(24, '', '', '', '', '', 1),
(25, '', '', '', '', '', 1),
(26, '', '', '', '', '', 1),
(27, '', '', '', '', '', 1),
(28, '', '', '', '', '', 1),
(29, '', '', '', '', '', 1),
(30, '', '', '', '', '', 1);

CREATE TABLE IF NOT EXISTS `aug` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(100) DEFAULT NULL,
  `amnt` varchar(25) DEFAULT NULL,
  `dtdue` varchar(25) DEFAULT NULL,
  `dtpaid` varchar(25) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `more` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `aug` (`id`, `bill`, `amnt`, `dtdue`, `dtpaid`, `notes`, `more`) VALUES
(1, '', '', '', '', '', 0),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 1),
(17, '', '', '', '', '', 1),
(18, '', '', '', '', '', 1),
(19, '', '', '', '', '', 1),
(20, '', '', '', '', '', 1),
(21, '', '', '', '', '', 1),
(22, '', '', '', '', '', 1),
(23, '', '', '', '', '', 1),
(24, '', '', '', '', '', 1),
(25, '', '', '', '', '', 1),
(26, '', '', '', '', '', 1),
(27, '', '', '', '', '', 1),
(28, '', '', '', '', '', 1),
(29, '', '', '', '', '', 1),
(30, '', '', '', '', '', 1);

CREATE TABLE IF NOT EXISTS `sep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(100) DEFAULT NULL,
  `amnt` varchar(25) DEFAULT NULL,
  `dtdue` varchar(25) DEFAULT NULL,
  `dtpaid` varchar(25) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `more` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `sep` (`id`, `bill`, `amnt`, `dtdue`, `dtpaid`, `notes`, `more`) VALUES
(1, '', '', '', '', '', 0),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 1),
(17, '', '', '', '', '', 1),
(18, '', '', '', '', '', 1),
(19, '', '', '', '', '', 1),
(20, '', '', '', '', '', 1),
(21, '', '', '', '', '', 1),
(22, '', '', '', '', '', 1),
(23, '', '', '', '', '', 1),
(24, '', '', '', '', '', 1),
(25, '', '', '', '', '', 1),
(26, '', '', '', '', '', 1),
(27, '', '', '', '', '', 1),
(28, '', '', '', '', '', 1),
(29, '', '', '', '', '', 1),
(30, '', '', '', '', '', 1);

CREATE TABLE IF NOT EXISTS `oct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(100) DEFAULT NULL,
  `amnt` varchar(25) DEFAULT NULL,
  `dtdue` varchar(25) DEFAULT NULL,
  `dtpaid` varchar(25) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `more` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `oct` (`id`, `bill`, `amnt`, `dtdue`, `dtpaid`, `notes`, `more`) VALUES
(1, '', '', '', '', '', 0),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 1),
(17, '', '', '', '', '', 1),
(18, '', '', '', '', '', 1),
(19, '', '', '', '', '', 1),
(20, '', '', '', '', '', 1),
(21, '', '', '', '', '', 1),
(22, '', '', '', '', '', 1),
(23, '', '', '', '', '', 1),
(24, '', '', '', '', '', 1),
(25, '', '', '', '', '', 1),
(26, '', '', '', '', '', 1),
(27, '', '', '', '', '', 1),
(28, '', '', '', '', '', 1),
(29, '', '', '', '', '', 1),
(30, '', '', '', '', '', 1);

CREATE TABLE IF NOT EXISTS `nov` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(100) DEFAULT NULL,
  `amnt` varchar(25) DEFAULT NULL,
  `dtdue` varchar(25) DEFAULT NULL,
  `dtpaid` varchar(25) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `more` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `nov` (`id`, `bill`, `amnt`, `dtdue`, `dtpaid`, `notes`, `more`) VALUES
(1, '', '', '', '', '', 0),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 1),
(17, '', '', '', '', '', 1),
(18, '', '', '', '', '', 1),
(19, '', '', '', '', '', 1),
(20, '', '', '', '', '', 1),
(21, '', '', '', '', '', 1),
(22, '', '', '', '', '', 1),
(23, '', '', '', '', '', 1),
(24, '', '', '', '', '', 1),
(25, '', '', '', '', '', 1),
(26, '', '', '', '', '', 1),
(27, '', '', '', '', '', 1),
(28, '', '', '', '', '', 1),
(29, '', '', '', '', '', 1),
(30, '', '', '', '', '', 1);

CREATE TABLE IF NOT EXISTS `dec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(100) DEFAULT NULL,
  `amnt` varchar(25) DEFAULT NULL,
  `dtdue` varchar(25) DEFAULT NULL,
  `dtpaid` varchar(25) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `more` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `dec` (`id`, `bill`, `amnt`, `dtdue`, `dtpaid`, `notes`, `more`) VALUES
(1, '', '', '', '', '', 0),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 1),
(17, '', '', '', '', '', 1),
(18, '', '', '', '', '', 1),
(19, '', '', '', '', '', 1),
(20, '', '', '', '', '', 1),
(21, '', '', '', '', '', 1),
(22, '', '', '', '', '', 1),
(23, '', '', '', '', '', 1),
(24, '', '', '', '', '', 1),
(25, '', '', '', '', '', 1),
(26, '', '', '', '', '', 1),
(27, '', '', '', '', '', 1),
(28, '', '', '', '', '', 1),
(29, '', '', '', '', '', 1),
(30, '', '', '', '', '', 1);

CREATE TABLE IF NOT EXISTS `tsw_members` (
  `idm` int(11) NOT NULL AUTO_INCREMENT,
  `phonenumber` varchar(65) DEFAULT NULL,
  `firstname` varchar(65) NOT NULL DEFAULT '',
  `lastname` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL,
  `dateregistered` varchar(65) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No',
  PRIMARY KEY (`idm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tsw_members`
--

INSERT INTO `tsw_members` (`idm`, `phonenumber`, `firstname`, `lastname`, `email`, `dateregistered`, `level`, `username`, `password`, `active`, `resetToken`, `resetComplete`) VALUES
(1, '520-424-4184', 'Larry', 'Judd', 'tradesouthwest@gmail.com', '07/02/2016 02:03:10', 0, 'monthly', '708638881f3bac9d9c8c742c79502811', 1, NULL, 'No');