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
 * Client model representing a natural person using the service of the biblio
 */
class Client extends AbstractEntity {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $address;

	/**
	 * @var string
	 */
	protected $city;

	/**
	 * @var string
	 */
	protected $zip;

	/**
	 * @var string
	 */
	protected $telephone;

	/**
	 * @var string
	 */
	protected $email;

	/**
	 * the identifier used in the system for this special person
	 * @var string
	 */
	protected $identifier;

	/**
	 * get the Address
	 *
	 * @return string
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * sets the Address
	 *
	 * @param string $address
	 *
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * get the City
	 *
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * sets the City
	 *
	 * @param string $city
	 *
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * get the Email
	 *
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * sets the Email
	 *
	 * @param string $email
	 *
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
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

	/**
	 * get the Telephone
	 *
	 * @return string
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * sets the Telephone
	 *
	 * @param string $telephone
	 *
	 * @return void
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
	}

	/**
	 * get the Zip
	 *
	 * @return string
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * sets the Zip
	 *
	 * @param string $zip
	 *
	 * @return void
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}
}
