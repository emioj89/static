<?php

require_once 'spedometer.php';

echo ' 10km  = ' . speedometer::retrieveMiles(10). 'Miles';
echo '</br>';
echo '10 Miles =' . speedometer::retrieveKm(10). 'km' ;
