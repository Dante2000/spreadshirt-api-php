<?php
	error_reporting(E_ALL|E_STRICT);
	ini_set('display_errors', 1);
	require_once("../api/spreadshirt.php");

	$spreadshirt = new SpreadshirtApi();
	$shopName = $spreadshirt->getShop()->name;
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>Spreadshirt API PHP Example</title>
</head>
<body style="background-color: grey;">
	<h1>Hello Spreadshirt</h1>

	<?php
		$articles = $spreadshirt->getArticles();
		foreach ($articles as $article) {
		$atts_object = $article->product->attributes();
		$atts_array = (array) $atts_object;
		$productId = $atts_array['@attributes']['id'];
	?>
	<div>
		<a href="http://<?php echo $shopName; ?>.spreadshirt.de/">
			<h2><?php echo $article->name; ?></h2>
			<div><img src="http://image.spreadshirt.net/image-server/v1/products/<?php echo $productId; ?>/views/1" /></div>
			<div class="price"><?php echo $article->price->vatIncluded; ?></div>
		</a>
	</div>
	<?php } ?>
</body>
</html>
