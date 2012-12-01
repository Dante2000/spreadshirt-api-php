<?php
/**
 * Represents a platform product. A product represents a product type with one 
 * or more designs or text on one or multiple print areas. 
 * http://developer.spreadshirt.net/display/API/Product+Resources#ProductResources-Product
 * 
 * @author Marc Bellmann <marc.bellmann@mb-entwicklung.de>
 */
class Product {

	/**
	 * The weight of the product in a list. Used for sorting products in a list. 
	 */
	var weight;

	/**
	 * Reference to the user that owns that product. 
	 */
	var user;

	/**
	 * Reference to the product type that was used to create this product. See 
	 * Retrieve Shop ProductType Entity for more details. 
	 */
	var productType;

	/**
	 * Reference to the product type appearance (aka color) that was selected to
	 * create this product. 
	 */
	var appearance;

	/**
	 * Set of restrictions that tell you what you can't do with this product. 
	 */
	var restrictions;

	/**
	 * List of configurations applied to the specified product type, i.e. text 
	 * or designs. 
	 */
	var configurations;

	/**
	 * References to product resources (aka images). Use this links in case you
	 * want to display product images. 
	 */
	var resources ;

	/**
	 * Constructor
	 */
	public function __construct() {
	}



?>
