<?php

$metai = 1774;

$cities3 = [
'Tokijas' => [13.6, 1868, 'Japonija'],
'Vasingtonas' => [0.6, 1790, 'JAV'],
'Maskva' => [8.6, 1147, 'Rusija']
];

$cities3['Londonas'] = [8.6, 43, 'Anglija'];

$yearGapAnswer = $cities3['Vasingtonas'][1] - $metai;

if ($metai >= $cities3['Vasingtonas'][1]) {
	echo "Vasingtonas yra JAV sostine.";
} elseif ($metai === $cities3['Vasingtonas'][1]) {
	echo "JAV sostine vis dar Filadelfijoje.";
} else {
	echo "Liko $yearGapAnswer metu iki Vasingtono ikurimo";
}

?>