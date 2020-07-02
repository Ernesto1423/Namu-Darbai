<!DOCTYPE html>
<html lang="lt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Miestai</title>
	</head>

	<body>
		
		<?php
		$cities = array('Berlynas', 'Roma', 'Londonas');
		$cities[] = 'Tokijas';
		
		$cities2 = [
			'Tokijas' => 13.6,
			'Vasingtonas' => 0.6,
			'Maskva' => 11.5
		];
		
		$cities2['Londonas'] = 8.6;
			
		print_r($cities2);
		?>
		<ul>
			<li><?php print_r($cities[1]) ?></li>
		</ul>
		<ul>
			<li>Gyventoju skaicius: <?php echo($cities2['Tokijas']); ?></li>
		</ul>
	</body>
</html>

