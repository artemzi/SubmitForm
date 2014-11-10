<?php

if(isset($_POST['first']) && isset($_POST['second'])) {
    $dataFirst = $_POST['first'] . "\n";
    $dataSecond = $_POST['second'] . "\n";
    $ret = file_put_contents('/tmp/first.txt', $dataFirst, FILE_APPEND);
    $ret = file_put_contents('/tmp/second.txt', $dataSecond, FILE_APPEND);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
    die('no post data to process');
}