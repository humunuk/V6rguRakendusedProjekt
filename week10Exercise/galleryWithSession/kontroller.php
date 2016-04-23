<?php
session_start();
require_once('head.html');
$pildid = ['nameless1.jpg','nameless2.jpg','nameless3.jpg','nameless4.jpg','nameless5.jpg','nameless6.jpg',];

$page = htmlspecialchars($_GET['page']) ?: "main";

switch ($page) {
    case 'main':
        include('vaated/pealeht.php');
        break;
    case 'galerii':
        include('vaated/galerii.php');
        break;
    case 'vote':
        include('vaated/vote.php');
        break;
    case 'result':
        include('vaated/tulemus.php');
        break;
    default:
        include('vaated/pealeht.php');
        break;
}

require_once('foot.html');
