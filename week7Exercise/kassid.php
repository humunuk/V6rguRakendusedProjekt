<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: humunuk
 * Date: 4/3/16
 * Time: 3:57 PM
 */

$kassid = [
    'Toomas' => ['nimi' => 'Miisu', 'vanus' => 2, 'v2rvus' => 'must', 'lemmik' => 'lõngakera'],
    'Madis' => ['nimi' => 'Liisu', 'vanus' => 3, 'v2rvus' => 'must-valge', 'lemmik' => 'kala'],
    'Kaia' => ['nimi' => 'Täpi', 'vanus' => 1, 'v2rvus' => 'pruun, valgete täppidega', 'lemmik' => 'puu'],
    'Renata' => ['nimi' => 'Guugl', 'vanus' => 5, 'v2rvus' => 'valge', 'lemmik' => 'whiskas'],
];

foreach ($kassid as $omanik => $kass) {
    include('kass.php');
}
?>
</body>
</html>