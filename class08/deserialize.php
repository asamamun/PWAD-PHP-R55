<?php

require_once './__sleep.php';

$serialized = file_get_contents('storage.txt');

$greeting = unserialize($serialized);

echo $greeting->greet();