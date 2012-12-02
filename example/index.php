<?php
	error_reporting(E_ALL|E_STRICT);
	ini_set('display_errors', 1);
	require_once("../api/spreadshirt.php");

	$spreadshirt = new SpreadshirtApi();
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>Spreadshirt API PHP Example</title>
</head>
<body>
	<h1>Example Spreadshirt API for PHP</h1>

	<div>
		<h2>Retrieve Country List - getCountries()</h2>
		<table>
		<?php foreach ( $spreadshirt->getCountries() as $country) { ?>
			<tr>
				<td><?php print_r ( $country->name ) ; ?></td>
				<td><?php print_r ( $country->isoCode ) ; ?></td>
				<td><?php print_r ( $country->thousandsSeparator ) ; ?></td>
				<td><?php print_r ( $country->decimalCount ) ; ?></td>
				<td><?php print_r ( $country->length ) ; ?></td>
				<td><?php print_r ( $country->currency ) ; ?></td>
			</tr>
		<?php } ?>
		</table>
	</div>
	<div>
		<h2>Retrieve Country Entity - getCountry()</h2>
		<?php $country = $spreadshirt->getCountry(1); ?>
		<table>
			<tr>
				<td><?php print_r ( $country->name ) ; ?></td>
				<td><?php print_r ( $country->isoCode ) ; ?></td>
				<td><?php print_r ( $country->thousandsSeparator ) ; ?></td>
				<td><?php print_r ( $country->decimalCount ) ; ?></td>
				<td><?php print_r ( $country->length ) ; ?></td>
				<td><?php print_r ( $country->currency ) ; ?></td>
			</tr>
		</table>
	</div>

	<div>
		<h2>Retrieve Currency List - getCurrencies()</h2>
		<table>
		<?php foreach ( $spreadshirt->getCurrencies() as $currency) { ?>
			<tr>
				<td><?php print_r ( $currency->plain ) ; ?></td>
				<td><?php print_r ( $currency->isoCode ) ; ?></td>
				<td><?php print_r ( $currency->symbol ) ; ?></td>
				<td><?php print_r ( $currency->decimalCount ) ; ?></td>
				<td><?php print_r ( $currency->pattern ) ; ?></td>
			</tr>
		<?php } ?>
		</table>
	</div>
	<div>
		<h2>Retrieve Currency Entity - getCurrency()</h2>
		<?php $currency = $spreadshirt->getCurrency(1); ?>
		<table>
			<tr>
				<td><?php print_r ( $currency->plain ) ; ?></td>
				<td><?php print_r ( $currency->isoCode ) ; ?></td>
				<td><?php print_r ( $currency->symbol ) ; ?></td>
				<td><?php print_r ( $currency->decimalCount ) ; ?></td>
				<td><?php print_r ( $currency->pattern ) ; ?></td>
			</tr>
		</table>
	</div>

	<div>
		<h2>Retrieve Language List - getLanguages()</h2>
		<table>
		<?php foreach ( $spreadshirt->getLanguages() as $language) { ?>
			<tr>
				<td><?php print_r ( $language->isoCode ) ; ?></td>
				<td><?php print_r ( $language->name ) ; ?></td>
			</tr>
		<?php } ?>
		</table>
	</div>
	<div>
		<h2>Retrieve Language Entity - getLanguage()</h2>
		<?php $language = $spreadshirt->getLanguage(1); ?>
		<table>
			<tr>
				<td><?php print_r ( $language->isoCode ) ; ?></td>
				<td><?php print_r ( $language->name ) ; ?></td>
			</tr>
		</table>
	</div>

	<div>
		<h2>Retrieve User Entity - getUser()</h2>
		<?php $user = $spreadshirt->getUser(40000); ?>
		<table>
			<tr>
				<td><?php print_r ( $user->name ) ; ?></td>
				<td><?php print_r ( $user->userWebSites ) ; ?></td>
				<td><?php print_r ( $user->memberSince ) ; ?></td>
				<td><?php print_r ( $user->country ) ; ?></td>
				<td><?php print_r ( $user->language ) ; ?></td>
				<td><?php print_r ( $user->currency ) ; ?></td>
				<td><?php print_r ( $user->productTypes ) ; ?></td>
				<td><?php print_r ( $user->printTypes ) ; ?></td>
				<td><?php print_r ( $user->fontFamilies ) ; ?></td>
				<td><?php print_r ( $user->productTypeDepartments ) ; ?></td>
				<td><?php print_r ( $user->designCategories ) ; ?></td>
				<td><?php print_r ( $user->designs ) ; ?></td>
				<td><?php print_r ( $user->products ) ; ?></td>
				<td><?php print_r ( $user->shops ) ; ?></td>
				<td><?php print_r ( $user->currencies ) ; ?></td>
				<td><?php print_r ( $user->languages ) ; ?></td>
				<td><?php print_r ( $user->countries ) ; ?></td>
			</tr>
		</table>
	</div>


	<div>
		<h2>Retrieve User Shop List - getShops()</h2>
		<table>
		<?php foreach ( $spreadshirt->getShops(40000) as $shop) { ?>
			<tr>
				<td><?php print_r ( $shop->type ) ; ?></td>
				<td><?php print_r ( $shop->name ) ; ?></td>
				<td><?php print_r ( $shop->user ) ; ?></td>
				<td><?php print_r ( $shop->country ) ; ?></td>
				<td><?php print_r ( $shop->language ) ; ?></td>
				<td><?php print_r ( $shop->currency ) ; ?></td>
				<td><?php print_r ( $shop->address ) ; ?></td>
				<td><?php print_r ( $shop->passwordRestricted ) ; ?></td>
				<td><?php print_r ( $shop->shippingUseCase ) ; ?></td>
				<td><?php print_r ( $shop->defaultShippingType ) ; ?></td>
				<td><?php print_r ( $shop->discountSupported ) ; ?></td>
				<td><?php print_r ( $shop->defaultShippingType ) ; ?></td>
				<td><?php print_r ( $shop->productTypes ) ; ?></td>
				<td><?php print_r ( $shop->printTypes ) ; ?></td>
				<td><?php print_r ( $shop->fontFamilies ) ; ?></td>
				<td><?php print_r ( $shop->productTypeDepartments ) ; ?></td>
				<td><?php print_r ( $shop->designCategories ) ; ?></td>
				<td><?php print_r ( $shop->designs ) ; ?></td>
				<td><?php print_r ( $shop->articleCategories ) ; ?></td>
				<td><?php print_r ( $shop->articles ) ; ?></td>
				<td><?php print_r ( $shop->products ) ; ?></td>
				<td><?php print_r ( $shop->currencies ) ; ?></td>
				<td><?php print_r ( $shop->languages ) ; ?></td>
				<td><?php print_r ( $shop->countries ) ; ?></td>
				<td><?php print_r ( $shop->baskets ) ; ?></td>
			</tr>
		<?php } ?>
		</table>
	</div>


	<div>
		<h2>Retrieve Shop Entity - getShop()</h2>
		<?php $shop = $spreadshirt->getShop(40000); ?>
		<table>
			<tr>
				<td><?php print_r ( $shop->type ) ; ?></td>
				<td><?php print_r ( $shop->name ) ; ?></td>
				<td><?php print_r ( $shop->user ) ; ?></td>
				<td><?php print_r ( $shop->country ) ; ?></td>
				<td><?php print_r ( $shop->language ) ; ?></td>
				<td><?php print_r ( $shop->currency ) ; ?></td>
				<td><?php print_r ( $shop->address ) ; ?></td>
				<td><?php print_r ( $shop->passwordRestricted ) ; ?></td>
				<td><?php print_r ( $shop->shippingUseCase ) ; ?></td>
				<td><?php print_r ( $shop->defaultShippingType ) ; ?></td>
				<td><?php print_r ( $shop->discountSupported ) ; ?></td>
				<td><?php print_r ( $shop->defaultShippingType ) ; ?></td>
				<td><?php print_r ( $shop->productTypes ) ; ?></td>
				<td><?php print_r ( $shop->printTypes ) ; ?></td>
				<td><?php print_r ( $shop->fontFamilies ) ; ?></td>
				<td><?php print_r ( $shop->productTypeDepartments ) ; ?></td>
				<td><?php print_r ( $shop->designCategories ) ; ?></td>
				<td><?php print_r ( $shop->designs ) ; ?></td>
				<td><?php print_r ( $shop->articleCategories ) ; ?></td>
				<td><?php print_r ( $shop->articles ) ; ?></td>
				<td><?php print_r ( $shop->products ) ; ?></td>
				<td><?php print_r ( $shop->currencies ) ; ?></td>
				<td><?php print_r ( $shop->languages ) ; ?></td>
				<td><?php print_r ( $shop->countries ) ; ?></td>
				<td><?php print_r ( $shop->baskets ) ; ?></td>
			</tr>
		</table>
	</div>

</body>
</html>
