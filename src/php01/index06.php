<?php
function area($bottom, $hight)
{
    $value = $bottom * $hight / 2;
    return $value;
}
$anw = area(5, 10);
echo $anw;

echo "<br/>";
function area2($width, $hight)
{
    $value2 = $width * $hight;
    return $value2;
}
$anw2 = area2(5, 10);
echo $anw2;

echo "<br/>";

function area3($top, $bottom2, $hight2)
{
    $value3 = ($top + $bottom2) * $hight2 / 2;
    return $value3;
}
$anw3 = area3(5, 10, 10);
echo $anw3;
