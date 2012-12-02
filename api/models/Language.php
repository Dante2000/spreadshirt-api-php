<?php
/**
 * Represents a language entity. 
 * http://developer.spreadshirt.net/display/API/Common+Data+Resources#CommonDataResources-Language
 * 
 * @author Marc Bellmann <marc.bellmann@mb-entwicklung.de>
 */
class Language {

	/**
	 * The official ISO code of that language, e.g. de. 
	 */
	var $isoCode;

	/**
	 * The name of the language, e.g. Deutsch. 
	 */
	var $name;

	/**
	 * Constructor
	 */
	public function __construct($xml) {
		$this->isoCode = $this->extractXml($xml->isoCode);
		$this->name = $this->extractXml($xml->name);
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
