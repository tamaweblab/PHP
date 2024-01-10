<?php
$count = 0;

for ($count = 1; $count <= 50; $count++) {
    if ($count % 3 == 0 && $count % 5 == 0) {
        echo "FizzBuzz" . "<br/>";
    } elseif ($count % 5 == 0) {
        echo "Buzz" . "<br/>";
    } elseif ($count % 3 == 0) {
        echo "Fizz" . "<br />";
    } else {
        echo $count . "<br/>";
    }
}

for ($i = 0; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "●";
    }
    echo "<br/>";
}