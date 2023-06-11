<?php 

/** Date & Time */

$currentTime = time();

echo $currentTime . '<br/>';

echo $currentTime + 5 * 24 * 60 * 60 . '<br/>';

echo $currentTime - 60 * 60 *  24;

echo '<br/>';
    
echo date('m/d/Y g:ia') . '<br/>';

echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br/>';

echo '<br/>';

echo date_default_timezone_get();

date_default_timezone_set('UTC');

echo date_default_timezone_get();

echo '<br/>';

echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 0, null));

echo '<br/>';

echo strtotime('2023-01-05 05:00:00');

echo '<br/>';

echo date('m/d/Y g:ia', strtotime('2023-01-05 05:00:00'));

echo '<br/>';

$date = date('m/d/Y g:ia', strtotime('second friday of January'));

echo $date;

echo '<pre>';

print_r(date_parse_from_format('m/d/Y g:ia', $date));

echo '</pre>';
