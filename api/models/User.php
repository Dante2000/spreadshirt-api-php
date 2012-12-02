<?php
/**
 * Representation of the user entity. 
 * http://developer.spreadshirt.net/display/API/User+Resources#UserResources-User
 * 
 * @author Marc Bellmann <marc.bellmann@mb-entwicklung.de>
 */
class User {

	/**
	 * The login name of the user, e.g. macs. 
	 */
	var $name;

	/**
	 * The Website of the user
	 */
	var $userWebSites;

	/**
	 * The registration date of the user
	 */
	var $memberSince;

	/**
	 * The country configured for this user on the platform. 
	 */
	var $country;

	/**
	 * The language configured for this user on the platform. 
	 */
	var $language;

	/**
	 * The currency configured for this user on the platform. 
	 */
	var $currency;

	/**
	 * Reference to the user's product types. 
	 */
	var $productTypes;

	/**
	 * Reference to the user's print types. 
	 */
	var $printTypes;

	/**
	 * Reference to the user's font families. 
	 */
	var $fontFamilies;

	/**
	 * Reference to the user's product type departments. 
	 */
	var $productTypeDepartments;


	/**
	 * Reference to the user's design categories. 
	 */
	var $designCategories;

	/**
	 * Reference to the user's designs. 
	 */
	var $designs;

	/**
	 * Reference to the user's products. 
	 */
	var $products ;

	/**
	 * Reference to the user's shops. 
	 */
	var $shops;

	/**
	 * Reference to the platform currencies. 
	 */
	var $currencies;

	/**
	 * Reference to the platform languages. 
	 */
	var $languages;

	/**
	 * Reference to the platform countries. 
	 */
	var $countries;

	/**
	 * Constructor
	 */
	public function __construct($xml) {
		$this->name = $this->extractXml($xml->name);
		$this->userWebSites = $this->extractXml($xml->userWebSites);
		$this->memberSince = $this->extractXml($xml->memberSince);
		$this->country = $this->extractXml($xml->country);
		$this->language = $this->extractXml($xml->language);
		$this->currency = $this->extractXml($xml->currency);
		$this->productTypes = $this->extractXml($xml->productTypes);
		$this->printTypes = $this->extractXml($xml->printTypes);
		$this->fontFamilies = $this->extractXml($xml->fontFamilies);
		$this->productTypeDepartments = $this->extractXml($xml->productTypeDepartments);
		$this->designCategories = $this->extractXml($xml->designCategories);
		$this->designs = $this->extractXml($xml->designs);
		$this->products = $this->extractXml($xml->products);
		$this->shops = $this->extractXml($xml->shops);
		$this->currencies = $this->extractXml($xml->currencies);
		$this->languages = $this->extractXml($xml->languages);
		$this->countries = $this->extractXml($xml->countries);
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
