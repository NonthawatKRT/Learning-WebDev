<?php

function hello(){
    echo "Hello World!";
}
function goodbye(){
    echo "Goodbye!";
}

for($i = 0; $i < 5; $i++){
    hello();
    echo "<br>";
    goodbye();
    echo "<br>";
}

?>