<?php
/**
 * Represents a platform article. An article represents a product that is 
 * placed in a specific shop (marketplace) with a fixed price tag on it. 
 * http://developer.spreadshirt.net/display/API/Product+Resources#ProductResources-Article
 * 
 * @author Marc Bellmann <marc.bellmann@mb-entwicklung.de>
 */
class Article {

	/**
	 * The weight of the article in a list. Used for sorting articles in a list. 
	 */
	var $weight;

	/**
	 * The i18n name of the article in case of a marketplace article or the 
	 * normal article name in case of a shop article. 
	 */
	var $name;

	/**
	 * The i18n description of the article in case of a marketplace article or 
	 * the normal article description in case of a shop article. 
	 */
	var $description;

	/**
	 * The i18n tags of the article in case of a marketplace article or the 
	 * normal article tags in case of a shop article. 
	 */
	var $tags;

	/**
	 * The article price in the currency of the shop. 
	 */
	var $price;

	/**
	 * Reference to the shop to which this article belongs to. 
	 */
	var $shop;

	/**
	 * Reference to the product on which this article is based. See Product for 
	 * more details. 
	 */
	var $product;

	/**
	 * Reference to the article categories in which this article is placed. 
	 */
	var $articleCategories;

	/**
	 * References to article resources (aka images). Use this links in case you
	 * want to display article images! 
	 */
	var $resources;

	/**
	 * date when article was created 
	 */
	var $created;

	/**
	 * date when article was last modified 
	 */
	var $modified;

	/**
	 * Constructor
	 */
	public function __construct() {
	}


}
?>
