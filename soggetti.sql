CREATE TABLE `soggetti` (
	`id` int(11) NOT NULL auto_increment,
	`cf` varchar(16) NOT NULL,
    `nome` varchar(50) NOT NULL,
    `cognome` varchar(50) NOT NULL,
    `indirizzo` text NULL,
    `e-mail` varchar(100) NULL,
	PRIMARY KEY (`id`) 
) ; 