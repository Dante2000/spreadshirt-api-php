<?php
require_once("config.php");

require_once("models/Address.php");
require_once("models/APIFeature.php");
require_once("models/APIKey.php");
require_once("models/Application.php");
require_once("models/Article.php");
require_once("models/ArticleCategory.php");
require_once("models/Basket.php");
require_once("models/BasketItem.php");
require_once("models/Country.php");
require_once("models/Currency.php");
require_once("models/Design.php");
require_once("models/DesignCategory.php");
require_once("models/DiscountScale.php");
require_once("models/FontFamily.php");
require_once("models/Language.php");
require_once("models/Length.php");
require_once("models/PrintType.php");
require_once("models/Product.php");
require_once("models/ProductType.php");
require_once("models/ProductTypeDepartment.php");
require_once("models/ShippingCountry.php");
require_once("models/ShippingRegion.php");
require_once("models/ShippingState.php");
require_once("models/ShippingType.php");
require_once("models/Shop.php");
require_once("models/StockState.php");
require_once("models/User.php");

class SpreadshirtApi {

	/**
	 * Retrieve Country List
	 */
	public function getCountries() {
		$xml_countries = simplexml_load_file(SPREADSHIRT_API_URL . '/countries?fullData=true')->country;
		$result = array();
		for ($i = 0; $i < sizeof($xml_countries); $i++) {
			$result[$i] = new Country($xml_countries[$i]);
		}
		return $result;
	}

	/**
	 * Retrieve Country Entity
	 */
	public function getCountry($id) {
		$xml_country = simplexml_load_file(SPREADSHIRT_API_URL . '/countries/'.$id);
		return new Country($xml_country);
	}


	/**
	 * Retrieve Currency List
	 */
	public function getCurrencies() {
		$xml_currencies = simplexml_load_file(SPREADSHIRT_API_URL . '/currencies?fullData=true')->currency;
		$result = array();
		for ($i = 0; $i < sizeof($xml_currencies); $i++) {
			$result[$i] = new Currency($xml_currencies[$i]);
		}
		return $result;
	}

	/**
	 * Retrieve Currency Entity
	 */
	public function getCurrency($id) {
		$xml_currency = simplexml_load_file(SPREADSHIRT_API_URL . '/currencies/'.$id);
		return new Currency($xml_currency);
	}



	/**
	 * Retrieve Language List
	 */
	public function getLanguages() {
		$xml_languages = simplexml_load_file(SPREADSHIRT_API_URL . '/languages?fullData=true')->language;
		$result = array();
		for ($i = 0; $i < sizeof($xml_languages); $i++) {
			$result[$i] = new Language($xml_languages[$i]);
		}
		return $result;
	}

	/**
	 * Retrieve Language Entity
	 */
	public function getLanguage($id) {
		$xml_language = simplexml_load_file(SPREADSHIRT_API_URL . '/languages/'.$id);
		return new Language($xml_language);
	}



	/**
	 * Retrieve User Entity
	 */
	public function getUser($id) {
		$xml_user = simplexml_load_file(SPREADSHIRT_API_URL . '/users/'.$id.'?fullData=true');
		return new User($xml_user);
	}



	/**
	 * Retrieve User Shop List
	 */
	public function getShops($userid) {
		$xml_shops = simplexml_load_file(SPREADSHIRT_API_URL . '/users/'.$userid.'/shops?fullData=true')->shop;

		$result = array();
		for ($i = 0; $i < sizeof($xml_shops); $i++) {
			$result[$i] = new Shop($xml_shops[$i]);
		}
		return $result;
	}


	/**
	 * Retrieve Shop Entity
	 */
	public function getShop($id) {
		$xml_shop = simplexml_load_file(SPREADSHIRT_API_URL . '/shops/'.$id.'?fullData=true');
		return new Shop($xml_shop);
	}



	/**
	 * Retrieve Shop Entity
	 */
	public function getShopAddress($id) {
		$xml_address = simplexml_load_file(SPREADSHIRT_API_URL . '/shops/'.$id.'/address?fullData=true');
		return new Address($xml_address);
	}


}
?>
