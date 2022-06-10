<?php
session_name('test');
session_start();
$host = 'eu-cdbr-west-02.cleardb.net';
$dbname = 'heroku_ac5d4f5b837d00a';
$username = 'bb200ca034b8dd';
$password = 'ff40ddcd';

$options = [
    \PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE  => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES  => false
];