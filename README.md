# lyon_hack_102016_damien_cedric

structure de la table chaussettes
CREATE TABLE `chaussettes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `url_chaussette` varchar(300) NOT NULL,
  `vote1` int(11) DEFAULT '0',
  `vote2` int(11) DEFAULT '0',
  `vote3` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1


