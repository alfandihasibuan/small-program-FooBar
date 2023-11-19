<?php
// generate array
for ($i = 100; $i >= 1; $i--) {
    $b = 0;
    // init prime
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $b = $b + 1;
        }
    }
    if ($b == 2) {
        echo '';
    // convert % 3 and % 5 to FooBar
    } else if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FooBar, ";
    // convert % 3 to Foo
    } else if ($i % 3 == 0) {
        echo "Foo, ";
    // convert % 5 to Bar
    } else if ($i % 5 == 0) {
        echo "Bar, ";
    // implode
    } else {
        echo $i . ', ';
    }
}
echo '%';
?>