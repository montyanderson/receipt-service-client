<?php
require("receipt-service.php");

$receipt = new ReceiptService("http://192.168.1.191:8080");

$receipt->raw("Hello, World!");

$receipt->document("{{#centerWrap}}Hello, World!{{/centerWrap}}");

$receipt->order(array(
	"merchant" => "PHP 7.0",
	"date" =>"Monday, 31 July 2017",
	"order" => "Order #9931390",
	"total" => "£1000402",
	"text" =>"{{#centerWrap}}Thank you for shopping with PHP 7.0!{{/centerWrap}}",
	"items" => array(
		array(
			"name" => "Cheese",
			"price" => "£400"
		)
	)
));
