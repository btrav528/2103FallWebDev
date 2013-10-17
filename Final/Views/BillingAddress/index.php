<?php
include_once '../../inc/_global.php';

$model = BillingAddress::Get();
$view = 'List.php';
include '../Shared/_Layout.php';
?>
