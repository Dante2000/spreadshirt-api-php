<?php
/**
 * Representation of a platform shop. 
 * http://developer.spreadshirt.net/display/API/Shop+Resources#ShopResources-Shop
 * 
 * @author Marc Bellmann <marc.bellmann@mb-entwicklung.de>
 */
class Shop {

	/**
	 * The type of that shop. 
	 */
	var $type;

	/**
	 * The name of that shop on the platform, e.g. demoshop. 
	 */
	var $name;

	/**
	 * Returns a reference of the user that owns that shop. 
	 */
	var $user;

	/**
	 * The country configured for this shop. 
	 */
	var $country;

	/**
	 * The language configured for this shop. 
	 */
	var $language;

	/**
	 * The currency configured for this shop. 
	 */
	var $currency;

	/**
	 * The default shop address, e.g. for impress. 
	 */
	var $address;

	/**
	 * Tells you whether this shop is password protected. 
	 */
	var $passwordRestricted;

	/**
	 * Tells you whether this shop is hidden. 
	 */
	var $hidden;

	var $mandator;

	var $shippingUseCase;

	/**
	 * Defines whether articles/products of this shop are included into basket discount calculation. 
	 */
	var $discountSupported;

	/**
	 * Reference to the default discount scale of this shop. 
	 */
	var $discountScale;

	/**
	 * Reference to the default shipping type. 
	 */
	var $defaultShippingType;

	/**
	 * Reference to the shop's product types. 
	 */
	var $productTypes;

	/**
	 * Reference to the shop's print types. 
	 */
	var $printTypes;

	/**
	 * Reference to the shop's font families. 
	 */
	var $fontFamilies;

	/**
	 * Reference to the shop's product type departments. 
	 */
	var $productTypeDepartments;

	/**
	 * Reference to the shop's design categories. 
	 */
	var $designCategories;

	/**
	 * Reference to the shop's designs. 
	 */
	var $designs;

	/**
	 * Reference to the shop's article categories. 
	 */
	var $articleCategories;

	/**
	 * Reference to the shop's articles. 
	 */
	var $articles;

	/**
	 * Reference to the shop's products. 
	 */
	var $products;

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
	 * Reference to the platform baskets. 
	 */
	var $baskets;

	/**
	 * Constructor
	 */
	public function __construct($xml) {
		$this->type = $this->extractXml($xml->type);
		$this->name = $this->extractXml($xml->name);
		$this->user = $this->extractXml($xml->user);
		$this->country = $this->extractXml($xml->country);
		$this->language = $this->extractXml($xml->language);
		$this->currency = $this->extractXml($xml->currency);
		$this->address = $this->extractXml($xml->address);
		$this->passwordRestricted = $this->extractXml($xml->passwordRestricted);
		$this->hidden = $this->extractXml($xml->hidden);
		$this->mandator = $this->extractXml($xml->mandator);
		$this->shippingUseCase = $this->extractXml($xml->shippingUseCase);
		$this->defaultShippingType = $this->extractXml($xml->defaultShippingType);
		$this->discountSupported = $this->extractXml($xml->discountSupported);
		$this->productTypes = $this->extractXml($xml->productTypes);
		$this->printTypes = $this->extractXml($xml->printTypes);
		$this->fontFamilies = $this->extractXml($xml->fontFamilies);
		$this->productTypeDepartments = $this->extractXml($xml->productTypeDepartments);
		$this->designCategories = $this->extractXml($xml->designCategories);
		$this->designs = $this->extractXml($xml->designs);
		$this->articleCategories = $this->extractXml($xml->articleCategories);
		$this->articles = $this->extractXml($xml->articles);
		$this->products = $this->extractXml($xml->products);
		$this->currencies = $this->extractXml($xml->currencies);
		$this->languages = $this->extractXml($xml->languages);
		$this->countries = $this->extractXml($xml->countries);
		$this->baskets = $this->extractXml($xml->baskets);
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
