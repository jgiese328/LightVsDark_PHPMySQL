<?php

class Manage {

	public static function setChoice($choice) {
		$_SESSION['choice'] = $choice;
	}

	public static function removeChoice() {
		unset($_SESSION['choice']);
	}

	public static function setSurvey() {
		$_SESSION['survey'] = true;
	}

	public static function setSessionId () {
		$_SESSION['id'] = md5($_SERVER['REMOTE_ADDR'] . microtime() . rand(0, time()));
	}

}
