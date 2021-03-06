<?php
/**
 * Represents a country entity. 
 * http://developer.spreadshirt.net/display/API/Common+Data+Resources#CommonDataResources-Currency
 * 
 * @author Marc Bellmann <marc.bellmann@mb-entwicklung.de>
 */
class Currency {

	/**
	 * The name of the currency as it is used in written text. 
	 */
	var $plain;

	/**
	 * The official ISO code for this currency, e.g. EUR. 
	 */
	var $isoCode;

	/**
	 * The currency symbol, e.g. €. 
	 */
	var $symbol;

	/**
	 * The number of decimal places to be used when displaying prices in this 
	 * currency, e.g. 2. 
	 */
	var $decimalCount;

	/**
	 * The pattern for displaying prices for this currency. % is the price and $
	 * the currency symbol, for example % $ for 2,00 €. 
	 */
	var $pattern;

	/**
	 * Constructor
	 */
	public function __construct($xml) {
		$this->plain = $this->extractXml($xml->plain);
		$this->isoCode = $this->extractXml($xml->isoCode);
		$this->symbol = $this->extractXml($xml->symbol);
		$this->decimalCount = $this->extractXml($xml->decimalCount);
		$this->pattern = $this->extractXml($xml->pattern);
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
