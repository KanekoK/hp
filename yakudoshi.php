<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>結果</title>
	<link rel="stylesheet" href="css/yakudoshi.css">
</head>
<body>
	<?php
	$kotoshi = $_POST["seireki"];

	$arr_eto = [
	"申", "酉", "戌",
	"亥", "子", "丑",
	"寅", "卯", "辰",
	"巳", "午", "未",
	];


	// 西暦と干支の連想配列を作成
	$eto = 0;
	for ($i=1920; $i<=2100; $i++) {
		if($eto >= 12) {$eto = 0;}
		$arr_reki_eto[$i] = $arr_eto[$eto];
		$eto++;
	}

// 男性
	$man_yaku1 = $kotoshi - 24;
	$man_maeyaku2 = $kotoshi -40;
	$man_yaku2 = $kotoshi - 41;
	$man_atoyaku2 = $kotoshi -42;
	$man_yaku3 = $kotoshi - 60;

	$man_yakudoshi1 = $arr_reki_eto[$man_yaku1];
	$man_maeyakudoshi2 = $arr_reki_eto[$man_maeyaku2];
	$man_yakudoshi2 = $arr_reki_eto[$man_yaku2];
	$man_atoyakudoshi2 = $arr_reki_eto[$man_atoyaku2];
	$man_yakudoshi3 = $arr_reki_eto[$man_yaku3];

// 女性
	$woman_yaku1 = $kotoshi - 18;
	$woman_maeyaku2 = $kotoshi -31;
	$woman_yaku2 = $kotoshi -32;
	$woman_atoyaku2 = $kotoshi -33;
	$woman_yaku3 = $kotoshi -36;
	$woman_yaku4 = $kotoshi -60;

	$woman_yakudoshi1 = $arr_reki_eto[$woman_yaku1];
	$woman_maeyakudoshi2 = $arr_reki_eto[$woman_maeyaku2];
	$woman_yakudoshi2 = $arr_reki_eto[$woman_yaku2];
	$woman_atoyakudoshi2 = $arr_reki_eto[$woman_atoyaku2];
	$woman_yakudoshi3 = $arr_reki_eto[$woman_yaku3];
	$woman_yakudoshi4 = $arr_reki_eto[$woman_yaku4];


	?>
	<header>
		<div id="header">
			<h1><?php echo $_POST["seireki"]."年"; ?></h1>
		</div>
	</header>
	<main>
		<div id="main">
			<div class="common clearfix">
				<div class="man">
					<h1>男性厄年</h1>
					<h2>年齢は数え年</h2>
					<table border=1>
						<tr>
							<th></th>
							<th>前厄</th>
							<th>本厄</th>
							<th>後厄</th>
						</tr>
						<tr>
							<th>25歳</th>
							<th></th>
							<th>
								<?php echo $man_yaku1."年";?><br>
								<?php echo $man_yakudoshi1; ?>
							</th>
							<th></th>
						</tr>
						<tr>
							<th>42歳</th>
							<th>
								<?php echo $man_maeyaku2."年"; ?><br>
								<?php echo $man_maeyakudoshi2; ?>
							</th>
							<th>
								<?php echo $man_yaku2."年";?><br>
								<?php echo $man_yakudoshi2; ?>
							</th>
							<th>
								<?php echo $man_atoyaku2."年";?><br>
								<?php echo $man_atoyakudoshi2; ?>
							</th>
						</tr>
						<tr>
							<th>61歳</th>
							<th></th>
							<th>
								<?php echo $man_yaku3."年";?><br>
								<?php echo $man_yakudoshi3; ?>
							</th>
							<th></th>
						</tr>
					</table>
				</div> <!-- .man -->
				<div class="woman">
					<h1>女性厄年</h1>
					<h2>年齢は数え年</h2>
					<table border=1>
						<tr>
							<th></th>
							<th>前厄</th>
							<th>本厄</th>
							<th>後厄</th>
						</tr>
						<tr>
							<th>19歳</th>
							<th></th>
							<th>
								<?php echo $woman_yaku1."年";?><br>
								<?php echo $woman_yakudoshi1; ?>
							</th>
							<th></th>
						</tr>
						<tr>
							<th>33歳</th>
							<th>
								<?php echo $woman_maeyaku2."年"; ?><br>
								<?php echo $woman_maeyakudoshi2; ?>
							</th>
							<th>
								<?php echo $woman_yaku2."年";?><br>
								<?php echo $woman_yakudoshi2; ?>
							</th>
							<th>
								<?php echo $woman_atoyaku2."年";?><br>
								<?php echo $woman_atoyakudoshi2; ?>
							</th>
						</tr>
						<tr>
							<th>37歳</th>
							<th></th>
							<th>
								<?php echo $woman_yaku3."年";?><br>
								<?php echo $woman_yakudoshi3; ?>
							</th>
							<th></th>
						</tr>
						<tr>
							<th>61歳</th>
							<th></th>
							<th>
								<?php echo $woman_yaku4."年";?><br>
								<?php echo $woman_yakudoshi4; ?>
							</th>
							<th></th>
						</tr>
					</table>
				</div>
			</div>
		</div> <!-- #main -->
	</main>
</body>
</html>




