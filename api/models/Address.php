<?php
/**
 * Representation of a shop Address. 
 * http://developer.spreadshirt.net/display/API/Shop+Resources#ShopResources-Address
 * 
 * @author Marc Bellmann <marc.bellmann@mb-entwicklung.de>
 */
class Address {

	/**
	 * Name of the company. 
	 */
	var $company;

	/**
	 * First Name
	 */
	var $firstName;

	/**
	 * Last Name
	 */
	var $lastName;

	/**
	 * street
	 */
	var $street;

	/**
	 * houseNumber
	 */
	var $houseNumber;


	/**
	 * streetAnnex
	 */
	var $streetAnnex;

	/**
	 * city
	 */
	var $city;

	/**
	 * state
	 */
	var $state;

	/**
	 * country
	 */
	var $country;

	/**
	 * zipCode
	 */
	var $zipCode;

	/**
	 * email
	 */
	var $email;

	/**
	 * phone
	 */
	var $phone;

	/**
	 * fax
	 */
	var $fax;

	/**
	 * Constructor
	 */
	public function __construct($xml) {
		$this->company = $this->extractXml($xml->company);
		$this->firstName = $this->extractXml($xml->firstName);
		$this->lastName = $this->extractXml($xml->lastName);
		$this->street = $this->extractXml($xml->street);
		$this->houseNumber = $this->extractXml($xml->houseNumber);
		$this->streetAnnex = $this->extractXml($xml->streetAnnex);
		$this->city = $this->extractXml($xml->city);
		$this->state = $this->extractXml($xml->state);
		$this->country = $this->extractXml($xml->country);
		$this->zipCode = $this->extractXml($xml->zipCode);
		$this->email = $this->extractXml($xml->email);
		$this->phone = $this->extractXml($xml->phone);
		$this->fax = $this->extractXml($xml->fax);
	}

	private function extractXml($xml) {
		$xml_array = (array) $xml;
		if (isset ($xml_array) && isset($xml_array[0])) {
			return $xml_array[0];
		}
		return "";
	}
}
?>
