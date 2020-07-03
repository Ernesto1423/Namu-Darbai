&copy; <?php
$copyYear = 2020;
$curYear = date('Y');
echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
?>