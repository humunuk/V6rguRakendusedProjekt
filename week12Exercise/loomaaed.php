<?php
/**
 * Made by Siim Kallari & Jorma Rebane during pair programming
 * 07.05.2016
 */
require_once('funk.php');
session_start();

$zoo = new Zoo("skallari_loomaaed");

$page="default";
if (isset($_GET['page']) && $_GET['page']!=""){
	$page=htmlspecialchars($_GET['page']);
}

include_once('views/head.html');

$zoo->display($page);

include_once('views/foot.html');

