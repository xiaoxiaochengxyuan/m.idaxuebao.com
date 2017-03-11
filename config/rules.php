<?php
//商品分类路由配置
$productCatRules = [
	//商品分类列表页
	'GET product-cat/<en_name:\w+>' => 'product-cat',
];


//商品相关的配置
$productRules = [
	//商品预览
	'GET product/<id:\d+>/preview' => 'product/preview',
];





//基本配置
$baseRules = ['<controller:\w+>/<action:\w+>'=>'<controller>/<action>'];

$rules = array_merge(
	$productCatRules,
	$productRules,
	$baseRules
);
return $rules;