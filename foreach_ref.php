<?php
$data = ['A','B','C','D','E'];
foreach($data as &$value){
	$value = 'New' . $value;
	}
	print_r($data);