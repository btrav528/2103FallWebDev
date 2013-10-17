<?php
include_once '../../inc/_global.php';

$model = Users::Get();
$view = 'List.php';
include '../Shared/_Layout.php';
?>
