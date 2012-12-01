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
	var name;

	/**
	 * The official ISO code of that country, e.g. DE. 
	 */
	var isoCode;

	/**
	 * The thousands separator to be used when working with this country. 
	 */
	var thousandsSeparator;

	/**
	 * The decimal point to be used when working with this country.  
	 */
	var decimalCount;

	/**
	 * The length unit to be used when working with this country. 
	 */
	var length;

	/**
	 * Reference to the default currency for that country. 
	 */
	var currency;

	/**
	 * Constructor
	 */
	public function __construct() {
	}



?>
