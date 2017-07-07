<?php

header('Content-Type: text/html; charset=utf-8');

require 'vendor/autoload.php';

use App\Lib\MinhaClasse;
use App\Lib\MinhaClasse2;

echo MinhaClasse::ola();

echo "<br>";

echo MinhaClasse2::ola();

