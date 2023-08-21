<?php
require 'vendor/autoload.php';

use Parmonov98\PhpEnum\Enums\States;


$stateOptions = States::toArray();
$stateOptionsAsAssoc = States::toArray(true);

print_r($stateOptions);
print_r($stateOptionsAsAssoc);
