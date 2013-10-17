<?php
include_once '../../inc/_global.php';

$model = Comments::Get();
$view = 'List.php';
include '../Shared/_Layout.php';
?>
