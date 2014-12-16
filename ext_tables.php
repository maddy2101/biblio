<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
	'ABS.' . $_EXTKEY,   // vendor + extkey, seperated by a dot
	'user',                      // Backend Module group to place the module in
	'management',               // module name
	'',                         // position in the group
	array(                      // Allowed controller -> action combinations
		'Biblio' => 'index',
		'Client' => 'list, new, create, edit, update, delete',
	),
	array(                      // Additional configuration
		'access' => 'user,group',
		'icon' => 'EXT:biblio/ext_icon.png',
		'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
	)
);