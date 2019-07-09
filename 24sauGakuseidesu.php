<?php
$data = ['TNOK' => '男','野獣' => '女' , '自分を売る' => '男' , 'TDN' => '女' , 'こいよ' => '男'];

foreach($data as $key => $value){
	if($value == '女'){
	print"{$key}:{$value}<br/>";
	}else{
	print"真夏の夜<br/>";
	}
}