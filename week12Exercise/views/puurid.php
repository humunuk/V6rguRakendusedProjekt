
<?php

/**
 * Made by Siim Kallari & Jorma Rebane during pair programming
 * 07.05.2016
 */

$cages = [];
foreach ($result as $animal) {
    $cages[$animal['puur']][] = $animal;
}

?>

<?php  foreach ($cages as $puur => $animals): ?>
    <div class="puur">
        Puur <?php echo $puur ?><br>
        <?php foreach ($animals as $animal): ?>
            <img src="<?php echo $animal['liik']; ?>">
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>
