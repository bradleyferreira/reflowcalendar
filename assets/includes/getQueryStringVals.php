<?php
$from = "1900-01-01";
$to = "1900-01-01";
$width = 0;
$fontSize = 0;
$scratchHeight = 0;

if (isset($_GET['from'])) {
    $from = $_GET['from'];
};

if (isset($_GET['to'])) {
    $to = $_GET['to'];
};

if (isset($_GET['width'])) {
    $width = $_GET['width'];
};

if (isset($_GET['fontSize'])) {
    $fontSize = $_GET['fontSize'];
};

if (isset($_GET['scratchHeight'])) {
    $scratchHeight = $_GET['scratchHeight'];
};
?>