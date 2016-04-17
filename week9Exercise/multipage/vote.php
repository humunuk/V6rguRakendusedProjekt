<?php
$pildid = ['nameless1.jpg','nameless2.jpg','nameless3.jpg','nameless4.jpg','nameless5.jpg','nameless6.jpg',];
$i = 1;
require_once('head.html');
?>
<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	<form action="tulemus.php" method="GET">
        <?php foreach($pildid as $pilt): ?>
		<p>
			<label for="p1">
				<img src="pildid/<?= $pilt ?>" alt="nimetu <?= $i; ?>" height="100" />
			</label>
			<input type="radio" value="<?= $pilt ?>" id="p<?= $i ?>" name="pilt"/>
		</p>
		<?php $i++; endforeach; ?>
		<br/>
		<input type="submit" value="Valin!"/>
	</form>
</div>
<?php
require_once('foot.html');
?>