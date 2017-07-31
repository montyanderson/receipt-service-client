<?php
class ReceiptService {
	function __construct($base) {
		$this->base = $base;
	}

	function raw($data) {
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $this->base."/raw");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		return curl_exec($ch);
	}

	function document($data) {
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $this->base."/document");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		return curl_exec($ch);
	}

	function order($data) {
		$ch = curl_init();
		$json = json_encode($data);
		echo $json;

		curl_setopt($ch, CURLOPT_URL, $this->base."/order");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));

		return curl_exec($ch);
	}
}
