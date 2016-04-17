<?php
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