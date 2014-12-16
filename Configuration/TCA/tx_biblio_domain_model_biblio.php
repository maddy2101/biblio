<?php
return array(
	'ctrl' => array(
		'title' => 'LLL:EXT:biblio/Resources/Private/Language/locallang_db.xlf:tx_biblio_domain_model_biblio',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('biblio') . 'Resources/Public/Icons/tx_biblio_domain_model_biblio.gif',
		'searchFields' => 'name'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, books, digitals, clients',
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_biblio_domain_model_biblio',
				'foreign_table_where' => 'AND tx_biblio_domain_model_biblio.pid=###CURRENT_PID### AND tx_biblio_domain_model_biblio.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:biblio/Resources/Private/Language/locallang_db.xlf:tx_biblio_domain_model_biblio.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
				'eval' => 'trim'
			),
		),
		'books' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:biblio/Resources/Private/Language/locallang_db.xlf:tx_biblio_domain_model_biblio.books',
			'config' => array(
				'type' => 'select',
				'size' => '5',
				'maxitems' => '999999',
				'foreign_table' => 'tx_biblio_domain_model_book',
			),
		),
		'digitals' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:biblio/Resources/Private/Language/locallang_db.xlf:tx_biblio_domain_model_biblio.digitals',
			'config' => array(
				'type' => 'select',
				'size' => '5',
				'maxitems' => '999999',
				'foreign_table' => 'tx_biblio_domain_model_digital',
			),
		),
		'clients' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:biblio/Resources/Private/Language/locallang_db.xlf:tx_biblio_domain_model_biblio.clients',
			'config' => array(
				'type' => 'select',
				'size' => '5',
				'maxitems' => '999999',
				'foreign_table' => 'tx_biblio_domain_model_client',
			),
		),
	),
	'types' => array(
		'1' => array(
			'showitem' => 'hidden, name, books, digitals, clients',
		),
	),
);