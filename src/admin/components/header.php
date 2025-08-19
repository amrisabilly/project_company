<?php
// Mendeteksi apakah file berada di folder controller
$isController = strpos($_SERVER['SCRIPT_NAME'], '/controller/') !== false;
$baseUrl = $isController ? '../' : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'Admin Panel' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">