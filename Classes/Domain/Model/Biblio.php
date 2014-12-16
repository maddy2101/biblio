<?php
namespace Typovision\Biblio\Domain\Model;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014
 *  @author Anja Leichsenring <maddy@typovision.de>
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
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * The Main Model representing the building and all its contents and functionality
 */
class Biblio extends AbstractEntity {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typovision\Biblio\Domain\Model\Book>
	 */
	protected $books;

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typovision\Biblio\Domain\Model\Digital>
	 */
	protected $digitals;

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typovision\Biblio\Domain\Model\Client>
	 */
	protected $clients;

	/**
	 * construction
	 */
	public function __construct() {
		$this->initalizeObjectStorages();
	}

	/**
	 * initialize object storages
	 */
	public function initializeObjectStorages() {
		$this->books = new ObjectStorage();
		$this->digitals = new ObjectStorage();
		$this->clients = new ObjectStorage();
	}

	/**
	 * get the Books
	 *
	 * @return ObjectStorage
	 */
	public function getBooks() {
		return $this->books;
	}

	/**
	 * sets the Books
	 *
	 * @param ObjectStorage $books
	 *
	 * @return void
	 */
	public function setBooks($books) {
		$this->books = $books;
	}

	/**
	 * get the Clients
	 *
	 * @return ObjectStorage
	 */
	public function getClients() {
		return $this->clients;
	}

	/**
	 * sets the Clients
	 *
	 * @param ObjectStorage $clients
	 *
	 * @return void
	 */
	public function setClients($clients) {
		$this->clients = $clients;
	}

	/**
	 * get the Digitals
	 *
	 * @return ObjectStorage
	 */
	public function getDigitals() {
		return $this->digitals;
	}

	/**
	 * sets the Digitals
	 *
	 * @param ObjectStorage $digitals
	 *
	 * @return void
	 */
	public function setDigitals($digitals) {
		$this->digitals = $digitals;
	}

	/**
	 * get the Name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * sets the Name
	 *
	 * @param string $name
	 *
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}
}
