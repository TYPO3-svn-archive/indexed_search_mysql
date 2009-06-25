<?php

########################################################################
# Extension Manager/Repository config file for ext: "indexed_search_mysql"
#
# Auto generated 25-06-2009 12:45
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Full-Text MySQL support for indexed_search',
	'description' => 'Provides support for Full-Text MySQL search. Allows great performance improvements if using MySQL >= 4',
	'category' => 'misc',
	'author' => 'Jose Antonio Guerra - ICTI',
	'author_email' => 'jaguerra@icti.es',
	'shy' => '',
	'dependencies' => 'indexed_search',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'index_fulltext,index_words',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'indexed_search' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:7:{s:9:"ChangeLog";s:4:"36e0";s:10:"README.txt";s:4:"ee2d";s:29:"class.ux_tx_indexedsearch.php";s:4:"ef85";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"b279";s:14:"ext_tables.sql";s:4:"c155";s:14:"doc/manual.sxw";s:4:"f212";}',
	'suggests' => array(
	),
);

?>