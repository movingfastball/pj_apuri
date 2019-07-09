<?php
for($i = 1;$i < 4;$i++){
	$result = 0;
	switch($i){
		case 1:
		case 3:
		
		$result = $i * $i;
		break;
		case2:
			continue;
		}
	print"{$i}の2乗は{$result}です。<br/>";
	}