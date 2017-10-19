<?php

$filename = 'counter.txt';

function inc_count() {
    global $filename;

    $current_value = (file_exists($filename)) ? file_get_contents($filename) : 0;

    file_put_contents($filename, ++$current_value);
    
    echo '<font color="#bcbfc6">';
    echo '<small>';
    echo 'Global Site Hits : '.$current_value;
    echo '</small>';
    echo '</font>';
}

inc_count();
?>
