<?php
DEFINE('RUNNING', true);
require_once 'config.php';

// remove trailing /
$iu = isset($_SERVER['PATH_INFO']) ? substr($_SERVER['PATH_INFO'], 1) : '';
$package = isset( $_REQUEST['package'] ) ? $_REQUEST['package'] : '';
$version = isset( $_REQUEST['version']) ? $_REQUEST['version'] : '';
$os = isset ( $_REQUEST['os'] ) ? $_REQUEST['os'] : '';
$host = isset ($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

if ( strlen($iu) > 0 ) {
	$pdo = new PDO(PDO_DSN, PDO_USERNAME, PDO_PASSWORD);
	$statement = $pdo->prepare('INSERT INTO installations(iu, package, version, os, host) VALUES(?, ?, ?, ?, ?)');
	$statement->execute(array($iu, $package, $version, $os, $host));
}

// file_put_contents('/tmp/log_install', "$bundle,$package,$version,$os");
// file_put_contents('/tmp/log_install', print_r($_REQUEST,true));

header("HTTP/1.0 204");