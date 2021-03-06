<?php

use \Thiago\PageAdmin;
use \Thiago\Model\User;

$app->get('/admin/users', function() {
	User::verifyLogin();
	User::verifyInadmin();
	$user = new User();
	$user = User::getFromSession();
	$users = User::listAll();
	$page = new PageAdmin();
	$page->setTpl("users", array(
		"users"=>$users,
		"user"=>$user->getValues()
	));
});

$app->get('/admin/users/create', function() {
	User::verifyLogin();
	User::verifyInadmin();
	$user = new User();
	$user = User::getFromSession();
	$page = new PageAdmin();
	$page->setTpl("users-create", [
		"user"=>$user->getValues()
	]);
});

$app->get("/admin/users/:id_user/password", function($iduser) {
	User::verifyLogin();
	User::verifyInadmin();
	$user = new User();
	$user = User::getFromSession();
	$user->get((int)$iduser);
	$page = new PageAdmin();
	$page->setTpl("users-password", [
		"user"=>$user->getValues(),
		"msgError"=>User::getError(),
		"msgSuccess"=>User::getSuccess()
	]);
});

$app->post("/admin/users/:id_user/password", function($iduser) {
	User::verifyLogin();
	User::verifyInadmin();
	if (!isset($_POST['senha']) || $_POST['senha'] === '') {
		User::setError("Preencha a nova senha.");
		header("Location: /admin/users/$iduser/password");
		exit;
	}
	if (!isset($_POST['senha-confirmada']) || $_POST['senha-confirmada'] === '') {
		User::setError("Preencha a confirmação da nova senha.");
		header("Location: /admin/users/$iduser/password");
		exit;
	}
	if ($_POST['senha'] !== $_POST['senha-confirmada']) {
		User::setError("Confirme corretamente as senhas.");
		header("Location: /admin/users/$iduser/password");
		exit;
	}
	$user = new User();
	$user->get((int)$iduser);
	$user->setPassword(User::getPasswordHash($_POST['senha']));
	User::setSuccess("Senha alterada com sucesso.");
	header("Location: /admin/users/$iduser/password");
	exit;
});

$app->get("/admin/users/:id_user/delete", function($iduser) {
	User::verifyLogin();
	User::verifyInadmin();
	$user = new User();
	$user->get((int)$iduser);
	$user->delete();
	header("Location: /admin/users");
	exit;
});

$app->get('/admin/users/:id_user', function($iduser) {
	User::verifyLogin();
	User::verifyInadmin();
	$user = new User();
	$user = User::getFromSession();
	$user->get((int)$iduser);
	$page = new PageAdmin();
	$page->setTpl("users-update", array(
		"user"=>$user->getValues()
	));
});

$app->post("/admin/users/create", function() {
	User::verifyLogin();
	User::verifyInadmin();
	$user = new User();
	$_POST["role"] = ((int)$_POST["role"]);
	$user->setData($_POST);
	$user->save();
	header("Location: /admin/users");
	exit;
});

$app->post("/admin/users/:id_user", function($iduser) {
	User::verifyLogin();
	User::verifyInadmin();
	$user = new User();
	$_POST["role"] = ((int)$_POST["role"]);
	$user->get((int)$iduser);
	$user->setData($_POST);
	$user->update();
	header("Location: /admin/users");
	exit;
});

?>