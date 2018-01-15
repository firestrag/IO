<?php

function getPOSTData(array $fields){
	$ret = [];
	foreach ($fields as $field){
		$ret[$field] = isset($_POST[$field]) ? $_POST[$field] : null;
	}
	return $ret;
}

function getParam($param_name){
	return Power_Routing::getparam(Power_Power::getRoutingName(), $param_name);
}

function baseUrl(){
	return Power_Url::getBasicUrl();
}