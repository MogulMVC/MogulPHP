<?php

class MCLI {

	public static function cli_is() {
		if (php_sapi_name() == 'cli' && empty($_SERVER['REMOTE_ADDR'])) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

}