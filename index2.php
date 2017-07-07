<?php

header('Content-Type: text/html; charset=utf-8');

require_once 'App\Lib\MinhaClasse.php';

use App\Lib\MinhaClasse;

echo MinhaClasse::ola();

echo "<br>";

echo MinhaClasse2::ola();