<?php
// LineID表示関数

function index($jiff_line_id,$jiff_line_id2){
	$aaa = $jiff_line_id;
	$bbb = $jiff_line_id2;
		return $aaa . $bbb . PHP_EOL;
	}
$top='ここにIDの上n桁を入力;
$bottom = 'ここにIDの下nケタを入力';
echo index($top,$bottom);

