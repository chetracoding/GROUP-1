<?php
require 'models/password.model.php';

$erorrs = [];
$encryptPassword =  getPasswordByUserId($_SESSION['user-id'])['password'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	empty($_POST['oldpd'])? $erorrs['erorr_oldpd'] = "Please enter old password" : "";
	strlen($_POST['newpd']) < 8 ? $erorrs['erorr_newpd'] = "Please enter password at least 8 characters" : "";
	($_POST['newpd'] == $_POST['confirmpd'])? "" : $erorrs['erorr_confirmpd'] = "Incorrect password";

	if (empty($erorrs)) {
		if (password_verify($_POST['oldpd'], $encryptPassword)) {
			$encryptPass = password_hash($_POST['confirmpd'], PASSWORD_BCRYPT);
			updatePasswordByUserId($_SESSION['user-id'], $encryptPass);
			header('Location: /profile');
		}
		password_verify($_POST['oldpd'], $encryptPassword) ? "" : $erorrs['erorr_oldpd'] = "Incorrect password";
	}
}

require 'views/password/password.view.php';