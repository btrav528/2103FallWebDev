<?php
include_once '../../inc/_global.php';

$model = Orders::Get();
$view = 'List.php';
include '../Shared/_Layout.php';
?>
