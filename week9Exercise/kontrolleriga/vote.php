<?php
$i = 1;
require_once('head.html');
?>
<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	<form action="?page=result" method="POST">
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