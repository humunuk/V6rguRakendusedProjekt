<?php
require_once('head.html');
$pildid = ['nameless1.jpg','nameless2.jpg','nameless3.jpg','nameless4.jpg','nameless5.jpg','nameless6.jpg',];

$page = htmlspecialchars($_GET['page']) ?: "main";

switch ($page) {
    case 'main':
        include('pealeht.php');
        break;
    case 'galerii':
        include('galerii.php');
        break;
    case 'vote':
        include('vote.php');
        break;
    case 'result':
        include('tulemus.php');
        break;
    default:
        include('pealeht.php');
        break;
}

require_once('foot.html');
