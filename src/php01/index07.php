<?php
$array = [
    ["Taro", 25, "men"],
    ["Jiro", 20, "men"],
    ["Hanako", 16, "women"]
];
    foreach($array as $value) {
        echo $value[0]."(".$value[1]."歳".$value[2].")";
    echo"<br/>";
    }
    ?>