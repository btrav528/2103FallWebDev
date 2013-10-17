<?php
include_once '../../inc/_global.php';

$model = OrderContents::Get();
$view = 'List.php';
include '../Shared/_Layout.php';
?>
