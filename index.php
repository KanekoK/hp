<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>厄年ページ</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div id="header">
			<h1>八重垣神社</h1>
			<h2>厄年照会</h2>
		</div>
	</header>
	<main>
		<div id="main">
			<form class="koyomi" name="koyomi" method="POST" action="yakudoshi.php">
				<select class="seireki" name="seireki">
					<?php for ($i=2000; $i<=2100; $i++) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?>年</option>
					<?php } ?>
				</select>
				<input type="submit" value="厄年を見る">
			</form>
		</div>
	</main>
	<footer>
		<div id="footer">
		</div>
	</footer>
</body>
</html>
