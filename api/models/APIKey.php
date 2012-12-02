<?php
/**
 * Representation of a platform api key. 
 * http://developer.spreadshirt.net/display/API/APIMgmt+Resources#APIMgmtResources-APIKey
 * 
 * @author Marc Bellmann <marc.bellmann@mb-entwicklung.de>
 */
class APIKey {

	/**
	 * Description of the api key. 
	 */
	var $description;

	/**
	 * User the api key was issued for. 
	 */
	var $user;

	/**
	 * The key. 
	 */
	var $key;

	/**
	 * The secret. 
	 */
	var $secret;

	/**
	 * The maximum number of allowed calles per day per resource. 
	 */
	var $callLimit;

	/**
	 * The assigned api features that define what the user can do with the api 
	 * key, e.g. create products, upload designs or create baskets. 
	 */
	var $apiFeatures;

	/**
	 * The state of the api key. 
	 */
	var $state;

	/**
	 * The date of the api key creation. 
	 */
	var $created;

	/**
	 * The date of the last api key modification. 
	 */
	var $modified;

	/**
	 * Constructor
	 */
	public function __construct() {
	}


}
?>
