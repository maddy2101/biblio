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

/**
 * Inventory Object represents the abstract definition of all kind
 * of borrowable objects.
 *
 */
class InventoryObject extends AbstractEntity {

	/**
	 * The identifier used by common understanding
	 * every book and other object has its own, so it is unique in the table
	 *
	 * @var string
	 */
	protected $isbn;

	/**
	 * objects title
	 * must not be unique, think about books with the same title
	 *
	 * @var string
	 */
	protected $title;

	/**
	 * objects author
	 * the initiator of an object. Might be the author writing a book
	 * or an artist featuring music
	 *
	 * @var string
	 */
	protected $author;

	/**
	 * year of publishing
	 *
	 * @var int
	 */
	protected $publishYear;

	/**
	 * objects publisher
	 *
	 * @var string
	 */
	protected $publisher;

	/**
	 * objects identifier used to identify the object inside the biblio inventory
	 * needs to be unique
	 *
	 * @var string
	 */
	protected $identifier;

	/**
	 * get the Author
	 *
	 * @return string
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * sets the Author
	 *
	 * @param string $author
	 *
	 * @return void
	 */
	public function setAuthor($author) {
		$this->author = $author;
	}

	/**
	 * get the Identifier
	 *
	 * @return string
	 */
	public function getIdentifier() {
		return $this->identifier;
	}

	/**
	 * sets the Identifier
	 *
	 * @param string $identifier
	 *
	 * @return void
	 */
	public function setIdentifier($identifier) {
		$this->identifier = $identifier;
	}

	/**
	 * get the Isbn
	 *
	 * @return string
	 */
	public function getIsbn() {
		return $this->isbn;
	}

	/**
	 * sets the Isbn
	 *
	 * @param string $isbn
	 *
	 * @return void
	 */
	public function setIsbn($isbn) {
		$this->isbn = $isbn;
	}

	/**
	 * get the PublishYear
	 *
	 * @return int
	 */
	public function getPublishYear() {
		return $this->publishYear;
	}

	/**
	 * sets the PublishYear
	 *
	 * @param int $publishYear
	 *
	 * @return void
	 */
	public function setPublishYear($publishYear) {
		$this->publishYear = $publishYear;
	}

	/**
	 * get the Publisher
	 *
	 * @return string
	 */
	public function getPublisher() {
		return $this->publisher;
	}

	/**
	 * sets the Publisher
	 *
	 * @param string $publisher
	 *
	 * @return void
	 */
	public function setPublisher($publisher) {
		$this->publisher = $publisher;
	}

	/**
	 * get the Title
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * sets the Title
	 *
	 * @param string $title
	 *
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}
}
