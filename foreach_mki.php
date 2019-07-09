<?php
$data = ['高江' => '男','掛谷' => '女' , '日尾' => '男' , '沢井' => '女' , '和田' => '男'];

foreach($data as $key => $value){
	if($value == '女'){
	print"{$key}:{$value}<br/>";
	}else{
	print"野獣先輩<br/>";
	}
}