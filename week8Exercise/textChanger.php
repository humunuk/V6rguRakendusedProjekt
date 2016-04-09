<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        button {
            background-color: #c0c0c0;
        }
        .styledText {
            width: 50%;
            min-height: 40px;
        }
        .borderDiv {
            width: 50%;
            margin: 16px;
            border-top: 1px solid #c0c0c0;
            border-left: 1px solid #c0c0c0;
            border-bottom: 1px solid #c0c0c0;
        }
        .borderPara {
            margin: 10px;
        }
    </style>
</head>
<body>
<?php
function getPostValue($name, $defaultValue = "") {
    return empty($_POST[$name]) ? $defaultValue : htmlspecialchars($_POST[$name]);
}
$textColor   = getPostValue("textColor", "#000000");
$bgColor     = getPostValue("bgColor", "#ffffff");
$borderColor = getPostValue("borderColor", "#000000");
$text        = getPostValue("text");
$borderWidth = getPostValue("borderWidth", "4");
$borderType  = getPostValue("borderType", "single");
$cornerRadii = getPostValue("cornerRadii", "0");

function getBorderStyle($width, $type, $color, $radius, $bgColor) {
    return "border: ${width}px $type $color; border-radius: $radius; background-color: $bgColor;";
}


?>
<div class="styledText" style="<?= getBorderStyle($borderWidth, $borderType, $borderColor, $cornerRadii, $bgColor)?>">
    <span style="color: <?= $textColor; ?>; "><?= $text; ?></span>
</div>

<form action="#" method="POST">
    <br>
    <textarea name="text" cols="50" rows="10" style="width: 50%;"><?= $text?></textarea>
    <br>
    <input name="textColor" type="color" id="textColor" value="<?= $textColor; ?>"> Teksti värv
    <br>
    <input name="bgColor" type="color" id="bgColor" value="<?= $bgColor; ?>"> Tagatausta värv
    <br>
    <div class="borderDiv">
        <p class="borderPara">
            Piirjoon
            <select name="borderType">
                <option value="single" <?= $borderType == "single"?"selected":"" ?> >single</option>
                <option value="double" <?= $borderType == "double"?"selected":"" ?> >double</option>
            </select>
            laius (0-20px)
            <input type="number" name="borderWidth" min="0" max="20" value="<?= $borderWidth ?>">
            värvus
            <input name="borderColor" type="color" id="borderColor" value="<?= $borderColor; ?>">
            ümarus (0-100px)
            <input type="number" name="cornerRadii" min="0" max="100" value="<?= $cornerRadii ?>">
            <br>
        </p>
    </div>
    <button>Esita</button>
</form>
</body>
</html>