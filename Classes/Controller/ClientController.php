<?php
namespace ABS\Biblio\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014
 *  @author Anja Leichsenring <aleichsenring@ab-softlab.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use ABS\Biblio\Domain\Model\Client;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

/**
 * Client Management handles all actions concerning clients
 */
class ClientController extends ActionController {

	/**
	 * @var \ABS\Biblio\Domain\Repository\ClientRepository
	 * @inject
	 */
	protected $clientRepository;

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
	 * @inject
	 */
	protected $persistenceManager;

	/**
	 * list all available customers
	 */
	public function listAction() {
		$this->view->assign('clients', $this->clientRepository->findAll());
	}

	/**
	 * new Action show form for data input
	 */
	public function newAction() {
		// do nothing but display the template
	}

	/**
	 * @param Client $client
	 *
	 * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
	 */
	public function createAction(Client $client) {
		$this->clientRepository->add($client);
		$this->persistenceManager->persistAll();
		$this->addFlashMessage(
				LocalizationUtility::translate('flashmessage.client.new', 'biblio'),
				LocalizationUtility::translate('flashmessage.client.new.title', 'biblio')
		);
		$this->forward('list');
	}

	/**
	 * @param Client $client
	 */
	public function editAction(Client $client) {
		$this->view->assign('client', $client);
	}

	/**
	 * @param Client $client
	 *
	 * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
	 */
	public function updateAction(Client $client) {
		$this->clientRepository->update($client);
		$this->forward('list');
	}

	/**
	 * @param Client $client
	 *
	 * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
	 */
	public function deleteAction(Client $client){
		$this->clientRepository->remove($client);
	}

}
