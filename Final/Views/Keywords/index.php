<?php
include_once '../../inc/_global.php';

$model = Keywords::Get();
$view = 'List.php';

include '../Shared/_Layout.php';
?>