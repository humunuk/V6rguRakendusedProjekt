<?php
$pildid = ['nameless1.jpg','nameless2.jpg','nameless3.jpg','nameless4.jpg','nameless5.jpg','nameless6.jpg',];
$i = 1;
require_once('head.html');
?>

<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
        <?php foreach ($pildid as $pilt): ?>
		<img src="pildid/<?= $pilt ?>" alt="nimetu <?= $i; ?>" />
        <?php
        $i++;
        endforeach;
        ?>
	</div>
</div>

<?php
require_once('foot.html');
?>