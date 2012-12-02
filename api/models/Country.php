<?php
/**
 * Represents a country entity. 
 * http://developer.spreadshirt.net/display/API/Common+Data+Resources#CommonDataResources-Currency
 * 
 * @author Marc Bellmann <marc.bellmann@mb-entwicklung.de>
 */
class Country {

	/**
	 * The country name. 
	 */
	var $name;

	/**
	 * The official ISO code of that country, e.g. DE. 
	 */
	var $isoCode;

	/**
	 * The thousands separator to be used when working with this country. 
	 */
	var $thousandsSeparator;

	/**
	 * The decimal point to be used when working with this country.  
	 */
	var $decimalCount;

	/**
	 * The length unit to be used when working with this country. 
	 */
	var $length;

	/**
	 * Reference to the default currency for that country. 
	 */
	var $currency;

	/**
	 * Constructor
	 */
	public function __construct($xml) {
		$this->name = $this->extractXml($xml->name);
		$this->isoCode = $this->extractXml($xml->isoCode);
		$this->thousandsSeparator = $this->extractXml($xml->thousandsSeparator);
		$this->decimalCount = $this->extractXml($xml->decimalCount);
		$this->length = $this->extractXml($xml->length);
		$this->currency = $this->extractXml($xml->currency);
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
