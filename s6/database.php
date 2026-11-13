<?php
declare(strict_types=1);

$databaseHost = 'sql106.infinityfree.com';
$databasePort = 3306;
$databaseName = 'if0_43413114_inventory';
$databaseUser = 'if0_43413114';
$databasePassword = '9D78oQCVNdrl5xL';

$dsn = sprintf(
    'mysql:host=%s;port=%d;dbname=%s;charset=utf8mb4',
    $databaseHost,
    $databasePort,
    $databaseName
);

return new PDO($dsn, $databaseUser, $databasePassword, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
]);