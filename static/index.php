<?php

require_once 'spedometer.php';

echo ' 10km  = ' . round(speedometer::retrieveMiles(10)). 'Miles';
echo '</br>';
echo '10 Miles =' . round(speedometer::retrieveKm(10)). 'km' ;