<?php
/**
 * Represents a platform article category. 
 * http://developer.spreadshirt.net/display/API/Product+Resources#ProductResources-ArticleCategory
 * 
 * @author Marc Bellmann <marc.bellmann@mb-entwicklung.de>
 */
class ArticleCategory {

	/**
	 * Represents the type of the article category. In shop context, you will find the following types: 
	 * 
	 * MY_ARTICLES
	 * MARKETPLACE - Type for marketplace categories. Marketplace categories are categories from our special marketplace shop (eu - 205909, na - 117728)
	 * SHOP - Type for generic shop categories defined by Spreadshirt.
	 * SHOP_CUSTOM - Type of custom shop specific categories created by Spreadshirt partner.
	 * BESTSELLER - Type for a magic category that allows to retrieve an ordered list of all items of the parent's sub categories.
	 * In user context, the types will be:
	 * MY_ARTICLES
	 * OWN - Articles owned by the partner.
	 * 
	 */
	var $type;

	/**
	 * The weight of the category is used for sorting categories in the category 
	 * tree. 
	 */
	var $weight;

	/**
	 * The i18n name of the category. 
	 */
	var $name;

	/**
	 * Reference to the list of articles linked to this category. 
	 */
	var $articles;

	/**
	 * List of sub categories of the article category. 
	 */
	var $articleCategories;

	/**
	 * Constructor
	 */
	public function __construct() {
	}


}
?>
