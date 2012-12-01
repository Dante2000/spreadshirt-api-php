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
	<h1>Hello Spreadshirt</h1>

	<div>
		<h2>Products - getProducts()</h2>
		<p><?php echo $spreadshirt->getProducts(); ?></p>
	</div>

	<div>
		<h2>Products - getProducts()</h2>
		<p><?php echo $spreadshirt->getProducts(); ?></p>
	</div>
</body>
</html>
