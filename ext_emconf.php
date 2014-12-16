<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "biblio".
 *
 * Auto generated 06-04-2014 14:02
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Bibliothek Management',
	'description' => 'Support Bibliothek allday tasks',
	'category' => 'be',
	'shy' => 0,
	'version' => '0.1.2',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Anja Leichsenring',
	'author_email' => 'maddy@typovision.de',
	'author_company' => 'typovision GmbH',
	'constraints' =>
		array(
			'depends' =>
				array(
					'php' => '5.3.10-5.5',
					'typo3' => '6.2.0 - 6.2.999',
				),
			'conflicts' =>
				array(),
			'suggests' =>
				array(),
		),
);

?>