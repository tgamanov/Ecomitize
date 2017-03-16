<?php

$installer = $this;

$installer->startSetup();

$table = 'taras_faq';

$installer->run("
	DROP TABLE IF EXISTS {$this->getTable($table)};
	CREATE TABLE {$this->getTable($table)} (
	  `id` int(10) NOT NULL AUTO_INCREMENT,
	  `question` varchar(250) NOT NULL,
	  `answer` text NOT NULL,
	  `is_active` boolean NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup();