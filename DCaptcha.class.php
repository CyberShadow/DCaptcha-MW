<?php

/**
 * DCaptcha class
 *
 * @file
 * @author Vladimir Panteleev <vladimir@thecybershadow.net>
 * @ingroup Extensions
 */

class DCaptcha extends QuestyCaptcha {
	function getCaptcha() {
		$json = exec("cd " . __DIR__ . " && rdmd -Jdcaptcha shim");
		return json_decode($json, true);
	}
}
