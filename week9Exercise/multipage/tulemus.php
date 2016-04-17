<?php
require_once('head.html');
$pildid = ['nameless1.jpg','nameless2.jpg','nameless3.jpg','nameless4.jpg','nameless5.jpg','nameless6.jpg',];

if (isset($_GET['pilt'])) {
    $pilt = htmlspecialchars($_GET['pilt']);
    if (in_array($pilt, $pildid)) {
        $result = "Täname, võtsime arvesse teie valikut";
    } else {
        $result = "Sellist pilti ei eksisteeri meie andmebaasis ning tulemust ei saa arvestada";
    }
}
?>
<div id="wrap">
	<h3>Valiku tulemus</h3>
	<p><?php echo $result ?: "Siia kuvame tulemuse peale hääletust"; ?></p>
</div>
<?php
require_once('foot.html');
?>