<?php
if (isset($_POST['pilt'])) {
    $pilt = htmlspecialchars($_POST['pilt']);
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