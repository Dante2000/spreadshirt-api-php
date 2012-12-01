<?php
require_once("config.php");

class SpreadshirtApi {

	public function __construct() {
	}

	public function getProducts() {
		return $this->__getShops("/products");
	}

	public function getProduct($id) {
		return $this->__getShops("/products/" . $id);
	}

	public function getArticles() {
		return $this->__getShops("/articles");
	}

	public function getArticle($id) {
		return $this->__getShops("/articles/" . $id);
	}


	/**
	 * Shop Resources
	 */

	public function getUserShops() {
		return $this->__getUsers("/shops");
	}

	public function getShop() {
		return $this->__getShops("");
	}







	private function __getUsers($path) {
		$url = SPREADSHIRT_API_URL . '/users/' . SHOP_ID . $path . '?fullData=true';
		return simplexml_load_file($url); 
	}

	private function __getShops($path) {
		$url = SPREADSHIRT_API_URL . '/shops/' . SHOP_ID . $path . '?fullData=true';
		return simplexml_load_file($url); 
	}


}
?>
