<?php
/**
 * Representation of a platform shop. 
 * http://developer.spreadshirt.net/display/API/Shop+Resources#ShopResources-Shop
 * 
 * @author Marc Bellmann <marc.bellmann@mb-entwicklung.de>
 */
class Shop {

	/**
	 * The name of that shop on the platform, e.g. demoshop. 
	 */
	var name;

	/**
	 * Returns a reference of the user that owns that shop. 
	 */
	var user;

	/**
	 * The country configured for this shop. 
	 */
	var country;

	/**
	 * The language configured for this shop. 
	 */
	var language;

	/**
	 * The currency configured for this shop. 
	 */
	var currency;

	/**
	 * The default shop address, e.g. for impress. 
	 */
	var address;

	/**
	 * Tells you whether this shop is password protected. 
	 */
	var passwordRestricted;

	/**
	 * Tells you whether this shop is hidden. 
	 */
	var hidden;

	/**
	 * Defines whether articles/products of this shop are included into basket discount calculation. 
	 */
	var discountSupported;

	/**
	 * Reference to the default discount scale of this shop. 
	 */
	var discountScale;

	/**
	 * Reference to the default shipping type. 
	 */
	var defaultShippingType;

	/**
	 * Reference to the shop's product types. 
	 */
	var productTypes;

	/**
	 * Reference to the shop's print types. 
	 */
	var printTypes;

	/**
	 * Reference to the shop's font families. 
	 */
	var fontFamilies;

	/**
	 * Reference to the shop's product type departments. 
	 */
	var productTypeDepartments;

	/**
	 * Reference to the shop's design categories. 
	 */
	var designCategories;

	/**
	 * Reference to the shop's designs. 
	 */
	var designs;

	/**
	 * Reference to the shop's article categories. 
	 */
	var articleCategories;

	/**
	 * Reference to the shop's articles. 
	 */
	var articles;

	/**
	 * Reference to the shop's products. 
	 */
	var products;

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
	 * Reference to the platform baskets. 
	 */
	var baskets;

	/**
	 * Constructor
	 */
	public function __construct() {
	}



?>
