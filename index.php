<?php
$pageURL = 'http';
$pageURL .= "://";
$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
header("Location: " . $pageURL . "/ui");
?>