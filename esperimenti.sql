CREATE TABLE `esperimenti` ( 
	`ide` int(11) NOT NULL auto_increment,
    `titolo` text NOT NULL,
    `tipo` text NOT NULL,
    `ref` text NOT NULL,
    `descr` text NOT NULL,
	PRIMARY KEY (`ide`) 
) ;