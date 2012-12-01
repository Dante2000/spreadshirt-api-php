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
	var name;

	/**
	 * The country configured for this user on the platform. 
	 */
	var country;

	/**
	 * The language configured for this user on the platform. 
	 */
	var language;

	/**
	 * The currency configured for this user on the platform. 
	 */
	var currency;

	/**
	 * Reference to the user's product types. 
	 */
	var productTypes;

	/**
	 * Reference to the user's print types. 
	 */
	var printTypes;


	/**
	 * Reference to the user's font families. 
	 */
	var fontFamilies;


	/**
	 * Reference to the user's product type departments. 
	 */
	var productTypeDepartments;


	/**
	 * Reference to the user's design categories. 
	 */
	var designCategories;


	/**
	 * Reference to the user's designs. 
	 */
	var designs;



	/**
	 * Reference to the user's products. 
	 */
	var products ;



	/**
	 * Reference to the user's shops. 
	 */
	var shops;



	/**
	 * Reference to the platform currencies. 
	 */
	var currencies;



	/**
	 * Reference to the platform languages. 
	 */
	var languages;



	/**
	 * Reference to the platform countries. 
	 */
	var countries;

	/**
	 * Constructor
	 */
	public function __construct() {
	}



?>
