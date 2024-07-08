<?php
// <!-- Affihcer les methode display -->

require_once '../src/Entity/Test.php';
use App\Entity\Test.php;

$test = new Test();
echo $test->display();
