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
		if (!file_exists(__DIR__ . "/shim"))
			exec("cd " . __DIR__ . " && rdmd --build-only -Jdcaptcha shim");
		$json = exec("cd " . __DIR__ . " && ./shim");
		return json_decode($json, true);
	}
}
